<?php

declare(strict_types=1);

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;

final class UserController extends ApiController
{
    public function index(): ResponseInterface
    {
        $users = service('userService')->findAll();

        $pagination = service('userService')->pager();

        return $this->respond([
            'status'     => 'success',
            'data'       => $users,
            'pagination' => $pagination !== null ? [
                'current_page'  => $pagination->getCurrentPage(),
                'per_page'      => $pagination->getPerPage(),
                'total_records' => $pagination->getTotal(),
                'total_pages'   => $pagination->getPageCount(),
            ] : null,
        ]);
    }

    public function show($id = null): ResponseInterface
    {
        $user = service('userService')->findById((int) $id);

        if ($user === null) {
            return $this->failNotFound('User not found.');
        }

        return $this->respond([
            'status' => 'success',
            'data'   => $user,
        ]);
    }

    public function create(): ResponseInterface
    {
        if (! $this->validate([
            'email'    => 'required|valid_email|unique_email',
            'password' => 'required|min_length[8]',
            'username' => 'required|min_length[3]|max_length[30]',
            'groups'   => 'permit_empty',
        ])) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'status' => 'error',
                    'errors' => $this->validator->getErrors(),
                ]);
        }

        $id = service('userService')->create($this->validator->getValidated());

        return $this->respondCreated(['status' => 'created', 'id' => $id]);
    }

    public function update($id = null): ResponseInterface
    {
        if (! $this->validate([
            'email'    => "permit_empty|valid_email|unique_email[{$id}]",
            'username' => 'permit_empty|min_length[3]|max_length[30]',
            'groups'   => 'permit_empty',
        ])) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'status' => 'error',
                    'errors' => $this->validator->getErrors(),
                ]);
        }

        if (! service('userService')->update((int) $id, $this->validator->getValidated())) {
            return $this->failNotFound('User not found.');
        }

        return $this->respond(['status' => 'updated']);
    }

    public function delete($id = null): ResponseInterface
    {
        service('userService')->delete((int) $id);

        return $this->respondDeleted(['status' => 'deleted']);
    }
}
