<?php

declare(strict_types=1);

namespace App\Services;

use CodeIgniter\Shield\Models\UserModel;

final readonly class UserService
{
    public function __construct(
        private UserModel $model,
    ) {}

    public function findAll(int $limit = 20, int $offset = 0): array
    {
        $users = $this->model->orderBy('created_at', 'DESC')->findAll($limit, $offset);

        foreach ($users as $user) {
            $user->groups = $user->getGroups();
        }

        return $users;
    }

    public function findById(int $id): ?object
    {
        $user = $this->model->find($id);

        if ($user !== null) {
            $user->groups = $user->getGroups();
        }

        return $user;
    }

    public function create(array $data): int
    {
        $user = $this->model->insert($data, true);

        if (isset($data['groups'])) {
            $this->model->syncGroups($user, $data['groups']);
        }

        return (int) $user;
    }

    public function update(int $id, array $data): void
    {
        $this->model->update($id, $data);

        if (isset($data['groups'])) {
            $user = $this->model->find($id);
            $this->model->syncGroups($user, $data['groups']);
        }
    }

    public function delete(int $id): void
    {
        $this->model->delete($id);
    }

    public function paginate(int $perPage = 20): array
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate($perPage);
    }

    public function pager(): ?object
    {
        return $this->model->pager;
    }
}
