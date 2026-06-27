<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class AuthController extends ApiController
{
    public function login(): ResponseInterface
    {
        if (! $this->validate([
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ])) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'status' => 'error',
                    'errors' => $this->validator->getErrors(),
                ]);
        }

        $result = service('authService')->login([
            'email'    => $this->request->getJSON()->email,
            'password' => $this->request->getJSON()->password,
        ]);

        if ($result === []) {
            return $this->response
                ->setStatusCode(401)
                ->setJSON(['status' => 'error', 'message' => 'Invalid credentials.']);
        }

        return $this->respond([
            'status'     => 'success',
            'token'      => $result['token'],
            'expires_in' => $result['expires_in'],
            'user'       => $result['user'],
        ]);
    }

    public function refresh(): ResponseInterface
    {
        if (! $this->validate([
            'token' => 'required',
        ])) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'status' => 'error',
                    'errors' => $this->validator->getErrors(),
                ]);
        }

        $result = service('authService')->refresh($this->request->getJSON()->token);

        if ($result === []) {
            return $this->response
                ->setStatusCode(401)
                ->setJSON(['status' => 'error', 'message' => 'Invalid or expired token.']);
        }

        return $this->respond([
            'status'     => 'success',
            'token'      => $result['token'],
            'expires_in' => $result['expires_in'],
        ]);
    }

    public function logout(): ResponseInterface
    {
        service('authService')->logout();

        return $this->respond(['status' => 'success']);
    }

    public function me(): ResponseInterface
    {
        $user = service('authService')->me();

        if ($user === null) {
            return $this->failUnauthorized('Unauthenticated.');
        }

        return $this->respond([
            'status' => 'success',
            'data'   => $user,
        ]);
    }
}
