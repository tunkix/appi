# Implementation Plan: Developer Skills Guide Updates

This plan outlines the specific steps required to resolve the issues identified in the [Developer Skills Audit Report](file:///home/tunki/.gemini/antigravity/brain/8dd7f6e0-3698-422c-a6c9-d8085fc84a87/skills_audit_report.md).

---

## Task 1: Fix Security & Routing Gaps
*   **Target Files**: 
    *   `codeigniter-knowledge/references/security.md`
    *   `codeigniter-knowledge/references/routing-http.md`
*   **Changes**:
    *   Update route group examples to move `/api/auth/logout` and `/api/auth/me` into the `jwtAuth` filter group.
    *   Document explicitly that any endpoint returning user session context must be guarded by the token auth filter.
    *   Ensure all routes matching `/api/lang` are correctly registered in the routing reference examples.

---

## Task 2: Standardize Dynamic Module Autoloading
*   **Target Files**:
    *   `codeigniter-knowledge/references/architecture.md`
    *   `codeigniter-knowledge/SKILL.md`
*   **Changes**:
    *   Remove hardcoded module namespace mappings (e.g. `App\Modules\Contacts`) from the `Autoload.php` configuration examples.
    *   Add documentation for the dynamic runtime module discovery pattern in `AutoloadConfig::__construct()` to achieve zero-manual module registration.

---

## Task 3: Fix PHP Code Bugs & Import Omissions
*   **Target Files**:
    *   `codeigniter-knowledge/references/persistence.md`
    *   `codeigniter-knowledge/references/routing-http.md`
    *   `codeigniter-knowledge/SKILL.md`
*   **Changes**:
    *   Add missing imports (`use App\Models\ContactModel;`, `use App\Entities\ContactEntity;`) to copy-pasteable blocks in `SKILL.md`.
    *   Add the missing `updateTimestamp` method to `ProductModel` or remove the `$beforeUpdate` hook registration in `persistence.md`.
    *   Fix `ProductModel` to set `$useAutoIncrement = false` (or remove manual UUID generation) and ensure `'id'` is included in `$allowedFields`.
    *   Remove unused `$data = $this->request->getJSON(assoc: true);` lines from the controller examples in `routing-http.md`.
    *   Ensure JWT validation calls uniformly use `auth('jwt')->validate(...)`.

---

## Task 4: Fix Frontend React TypeScript & Build Errors
*   **Target Files**:
    *   `frontend-react/SKILL.md`
    *   `codeigniter-knowledge/references/react-ui.md`
*   **Changes**:
    *   Update `useApi` generic hook signature to perform `api.get<Envelope<T>>(url)` so that returning `res.data.data` matches type `T` and compiles cleanly in strict mode.
    *   Correct the `globSync` import in `vite.config.ts` snippets: change `import { defineConfig, globSync } from 'vite'` to `import { defineConfig } from 'vite'` and `import { globSync } from 'glob'`.
    *   Add `base: '/admin/'` configuration to the Vite build examples to ensure resources map to `/admin/assets/...` in production.
    *   Update routing path examples in `createBrowserRouter` and redirects to consistently use `/admin/login` (or base relative paths) instead of root `/login`.

---

## Task 5: Align Configuration Keys & Naming Conventions
*   **Target Files**:
    *   `frontend-react/SKILL.md`
    *   `codeigniter-knowledge/references/react-ui.md`
    *   `codeigniter-knowledge/references/module-schema.md`
*   **Changes**:
    *   Standardize the localStorage key name for authorization token to `'appi_token'` in all guides.
    *   Update `module.json` schema documentation and references to use a semantic key for permissions inside route objects (e.g. change `"roles": ["contacts.view"]` to a more appropriate naming like `"permissions"` or clarify that it accepts permission keys for UI gating purposes).
