<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

final class RateLimitFilter implements FilterInterface
{
    private const int MAX_REQUESTS   = 60;
    private const int WINDOW_SECONDS = 60;

    public function before(RequestInterface $request, $arguments = null)
    {
        $cache = service('cache');
        $key   = 'rate_limit:' . $request->getIPAddress();
        $hits  = (int) $cache->get($key);

        if ($hits >= self::MAX_REQUESTS) {
            return service('response')
                ->setStatusCode(429)
                ->setJSON(['status' => 'error', 'message' => 'Too many requests.']);
        }

        $cache->save($key, $hits + 1, self::WINDOW_SECONDS);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
