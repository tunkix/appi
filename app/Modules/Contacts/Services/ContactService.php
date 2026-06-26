<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Services;

use App\Modules\Contacts\Models\ContactModel;
use CodeIgniter\Events\Events;

final readonly class ContactService
{
    public function __construct(
        private ContactModel $model,
    ) {}

    public function findAll(): array
    {
        return $this->model->findAll();
    }

    public function findById(int $id): ?object
    {
        return $this->model->find($id);
    }

    public function create(array $data): int
    {
        $id = $this->model->insert($data, true);

        Events::trigger('contacts.save', array_merge(['id' => $id, '_action' => 'create'], $data));

        return (int) $id;
    }

    public function update(int $id, array $data): void
    {
        $this->model->update($id, $data);

        Events::trigger('contacts.save', array_merge(['id' => $id, '_action' => 'update'], $data));
    }

    public function delete(int $id): void
    {
        $this->model->delete($id);

        Events::trigger('contacts.delete', ['id' => $id]);
    }

    public function search(?string $term, ?string $company, ?string $jobTitle): array
    {
        return $this->model
            ->search($term)
            ->filterByCompany($company)
            ->filterByJobTitle($jobTitle)
            ->findAll();
    }
}
