# CodeIgniter 4 Antipatterns

Common CI4 violations for an API-first project with React UI. **appi is a pure JSON API** — violations related to HTML views are Critical by definition.

## Critical Violations

### 1. Calling `view()` in a Controller

**Description:** Controller returns an HTML view instead of a JSON response.

**Why Critical:** Fundamentally breaks the API contract. The React SPA receives HTML it cannot parse.

**Detection:**
```bash
Grep: "view(" --glob "app/**/*.php"
Grep: "return view(" --glob "app/Controllers/**/*.php"
Grep: "return view(" --glob "app/Modules/*/Controllers/**/*.php"
```

**Bad:**
```php
<?php
declare(strict_types=1);
namespace App\Controllers;

final class ContactController extends BaseController
{
    public function index(): string
    {
        $contacts = model('ContactModel')->findAll();
        return view('contacts/list', ['contacts' => $contacts]); // CRITICAL VIOLATION
    }
}
```

**Good:**
```php
<?php
declare(strict_types=1);
namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class ContactController extends ApiController
{
    protected $format = 'json'; // Always set

    public function index(): ResponseInterface
    {
        return $this->respond([
            'status' => 'success',
            'data'   => service('contactService')->findAll(),
        ]);
    }
}
```

---

### 2. Missing `$format = 'json'` on Controller

**Description:** Controller extends `ResourceController` without setting `protected $format = 'json'`.

**Why Critical:** Without this, CI4 may return non-JSON responses or require explicit `setJSON()` on every response, leading to inconsistency.

**Detection:**
```bash
Grep: "extends ResourceController" --glob "app/Controllers/**/*.php"
# Cross-check with absence of: protected \$format = 'json'
Grep: "extends ResourceController" --glob "app/Modules/*/Controllers/**/*.php"
```

**Bad:**
```php
<?php
final class OrderController extends ResourceController
{
    // Missing $format = 'json' — responds as text/html by default
    public function index(): ResponseInterface
    {
        return $this->respond(['data' => []]);
    }
}
```

**Good:**
```php
<?php
final class OrderController extends ResourceController
{
    protected $format = 'json'; // Required on every API controller

    public function index(): ResponseInterface
    {
        return $this->respond(['status' => 'success', 'data' => []]);
    }
}
```

---

### 3. Business Logic in Controllers

**Description:** Controller contains business logic instead of delegating to a Service.

**Why Critical:** Untestable, duplicated logic, violates Single Responsibility Principle.

**Detection:**
```bash
Grep: "->where(.*->update(|->save(" --glob "app/Controllers/**/*.php"
Grep: "function .*(calculate|validate|process|compute)" --glob "app/Controllers/**/*.php"
```

**Bad:**
```php
<?php
final class OrderController extends ApiController
{
    public function confirm(string $id): ResponseInterface
    {
        $model = new \App\Models\OrderModel(); // Direct instantiation
        $order = $model->find($id);

        if ($order->status === 'draft' && $order->total > 0) { // Business logic in controller
            $model->update($id, ['status' => 'confirmed']);
        }

        return $this->respond(['ok' => true]);
    }
}
```

**Good:**
```php
<?php
final class OrderController extends ApiController
{
    public function confirm(string $id): ResponseInterface
    {
        service('orderService')->confirm($id);
        return $this->respond(['status' => 'confirmed']);
    }
}
```

---

### 4. Bypassing CI4 Services Container

**Description:** Directly instantiating Models/Services instead of using `service()`.

**Why Critical:** Breaks testability — cannot inject mocks via `Services::injectMock()`.

**Detection:**
```bash
Grep: "new .*Model\(\)|new .*Service\(" --glob "app/Controllers/**/*.php"
Grep: "new .*Model\(\)" --glob "app/Libraries/**/*.php"
```

**Bad:**
```php
<?php
// Direct instantiation — cannot mock in tests
$service = new ContactService(new ContactModel());
$contacts = $service->findAll();
```

**Good:**
```php
<?php
// Service container — testable via Services::injectMock
$contacts = service('contactService')->findAll();
```

---

### 5. redirect() in an API Filter

**Description:** A Filter returns `redirect()->to('/login')` instead of a JSON 401 response.

**Why Critical:** The React SPA receives a 302 redirect to an HTML login page — it cannot handle this. The SPA must receive a 401 JSON response and handle the redirect itself.

**Detection:**
```bash
Grep: "redirect()->" --glob "app/Filters/**/*.php"
```

**Bad:**
```php
<?php
public function before(RequestInterface $request, $arguments = null)
{
    if (auth()->user() === null) {
        return redirect()->to('/login'); // CRITICAL: SPA receives HTML redirect
    }
}
```

**Good:**
```php
<?php
public function before(RequestInterface $request, $arguments = null)
{
    if (auth('jwt')->user() === null) {
        return service('response')
            ->setStatusCode(401)
            ->setJSON(['status' => 'error', 'message' => 'Unauthenticated.']);
    }
}
```

---

### 6. CSRF Enabled for API Routes

**Description:** CSRF filter applied to `api/*` routes.

**Why Critical:** All API requests from the React SPA will fail with 403 because they carry a JWT Bearer token, not a CSRF cookie.

**Detection:**
```bash
Grep: "'csrf'" --glob "app/Config/Filters.php"
```

**Bad:**
```php
<?php
public array $globals = [
    'before' => ['csrf'], // CRITICAL: blocks all SPA API calls
];
```

**Good:**
```php
<?php
public array $globals = [
    'before' => ['cors'], // CORS only — no CSRF for stateless JWT API
];
```

---

## Warnings

### 7. Missing Input Validation

**Description:** Controllers accepting user input without validation.

**Why Bad:** Security vulnerabilities (SQL injection, mass assignment), data integrity issues.

**Detection:**
```bash
Grep: "getPost\(|getJSON\(" --glob "app/Controllers/**/*.php"
# Cross-check files NOT containing validate():
Grep: "\$this->validate\(" --glob "app/Controllers/**/*.php"
```

**Bad:**
```php
<?php
public function create(): ResponseInterface
{
    $data = $this->request->getJSON(assoc: true);
    model('ContactModel')->insert($data); // No validation — mass assignment risk
    return $this->respondCreated(['ok' => true]);
}
```

**Good:**
```php
<?php
public function create(): ResponseInterface
{
    if (!$this->validate([
        'first_name' => 'required|min_length[2]|max_length[100]',
        'last_name'  => 'required|min_length[2]|max_length[100]',
    ])) {
        return $this->response->setStatusCode(422)->setJSON([
            'status' => 'error', 'errors' => $this->validator->getErrors(),
        ]);
    }

    $id = service('contactService')->create($this->validator->getValidated());
    return $this->respondCreated(['status' => 'created', 'id' => $id]);
}
```

---

### 8. God Controller

**Description:** Single controller handling too many responsibilities (> 300 lines, > 10 methods).

**Detection:**
```bash
Grep: "class.*Controller" --glob "app/Controllers/**/*.php"
Grep: "public function" --glob "app/Controllers/**/*.php" --output_mode count
```

**Fix:** Split by responsibility — one controller per resource or action group.

---

### 9. Mixing CI3 and CI4 Patterns

**Description:** Using `$this->load->model`, `$this->input->post`, or other CI3 patterns in a CI4 project.

**Detection:**
```bash
Grep: "\$this->load->model|\$this->load->library|\$this->load->helper" --glob "app/**/*.php"
Grep: "\$this->input->post|\$this->input->get" --glob "app/**/*.php"
Grep: "CI_Controller|CI_Model" --glob "app/**/*.php"
```

---

## Severity Matrix

| Antipattern | Severity | Impact |
|-------------|----------|--------|
| Calling `view()` in controller | **Critical** | Breaks API contract entirely |
| Missing `$format = 'json'` | **Critical** | Wrong Content-Type, inconsistent responses |
| Business logic in Controller | **Critical** | Untestable, duplicated logic |
| Bypassing CI4 Services | **Critical** | Not testable, tight coupling |
| `redirect()` in API Filter | **Critical** | SPA cannot handle HTML redirect |
| CSRF enabled for API routes | **Critical** | All SPA requests fail 403 |
| Missing input validation | Warning | Security, data integrity |
| God Controller | Warning | Maintainability, SRP |
| CI3 patterns in CI4 | Warning | Tech debt, inconsistency |
| Hardcoded config values | Info | Flexibility |

## Full Detection Script

```bash
# CRITICAL checks
Grep: "view(" --glob "app/**/*.php"
Grep: "return view(" --glob "app/Controllers/**/*.php"
Grep: "redirect()->" --glob "app/Filters/**/*.php"
Grep: "'csrf'" --glob "app/Config/Filters.php"
Grep: "new .*Model\(\)" --glob "app/Controllers/**/*.php"

# Warning checks
Grep: "\$this->load->model|CI_Controller" --glob "app/**/*.php"
Grep: "getPost\(|getJSON\(" --glob "app/Controllers/**/*.php"

# Missing format checks
Grep: "extends ResourceController" --glob "app/Controllers/**/*.php"
Grep: "extends ResourceController" --glob "app/Modules/*/Controllers/**/*.php"

# Info checks
Grep: "'localhost'|'127.0.0.1'|'password'" --glob "app/**/*.php"
```
