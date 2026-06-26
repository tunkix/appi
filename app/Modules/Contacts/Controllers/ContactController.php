<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Controllers;

use App\Controllers\Api\ApiController;
use CodeIgniter\HTTP\ResponseInterface;

final class ContactController extends ApiController
{
    public function index(): ResponseInterface
    {
        return $this->respond([
            'status' => 'success',
            'data'   => service('contactService')->findAll(),
        ]);
    }

    public function show(?string $id = null): ResponseInterface
    {
        $contact = service('contactService')->findById((int) $id);

        if ($contact === null) {
            return $this->failNotFound('Contact not found.');
        }

        return $this->respond(['status' => 'success', 'data' => $contact]);
    }

    public function create(): ResponseInterface
    {
        if (! $this->validate($this->createRules())) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON(['status' => 'error', 'errors' => $this->validator->getErrors()]);
        }

        $id = service('contactService')->create($this->validator->getValidated());

        return $this->respondCreated(['status' => 'created', 'id' => $id]);
    }

    public function update(?string $id = null): ResponseInterface
    {
        if (! $this->validate($this->updateRules())) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON(['status' => 'error', 'errors' => $this->validator->getErrors()]);
        }

        service('contactService')->update((int) $id, $this->validator->getValidated());

        return $this->respond(['status' => 'updated']);
    }

    public function delete(?string $id = null): ResponseInterface
    {
        service('contactService')->delete((int) $id);

        return $this->respondDeleted(['status' => 'deleted']);
    }

    private function createRules(): array
    {
        return [
            'first_name' => 'required|min_length[2]|max_length[100]',
            'last_name'  => 'required|min_length[2]|max_length[100]',
            'company'    => 'permit_empty|max_length[255]',
            'job_title'  => 'permit_empty|max_length[255]',
            'email'      => 'permit_empty|valid_email|max_length[255]',
            'notes'      => 'permit_empty',
        ];
    }

    private function updateRules(): array
    {
        return [
            'first_name' => 'permit_empty|min_length[2]|max_length[100]',
            'last_name'  => 'permit_empty|min_length[2]|max_length[100]',
            'company'    => 'permit_empty|max_length[255]',
            'job_title'  => 'permit_empty|max_length[255]',
            'email'      => 'permit_empty|valid_email|max_length[255]',
            'notes'      => 'permit_empty',
        ];
    }
}
