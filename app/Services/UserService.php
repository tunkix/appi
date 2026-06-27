<?php

declare(strict_types=1);

namespace App\Services;

use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;

final readonly class UserService
{
    public function __construct(
        private UserModel $model,
    ) {}

    public function findAll(int $limit = 20, int $offset = 0): array
    {
        $users = $this->model->withIdentities()->orderBy('created_at', 'DESC')->findAll($limit, $offset);

        $users = array_values($users);

        foreach ($users as $user) {
            $user->groups = $user->getGroups();
        }

        return $users;
    }

    public function findById(int $id): ?object
    {
        $user = $this->model->withIdentities()->find($id);

        if ($user !== null) {
            $user->groups = $user->getGroups();
        }

        return $user;
    }

    public function create(array $data): int
    {
        $user = new User();
        $user->username = $data['username'];
        $user->email    = $data['email'];
        $user->password = $data['password'];

        $userId = $this->model->insert($user);

        if (isset($data['groups']) && is_array($data['groups'])) {
            $user->id = $userId;
            $user->syncGroups(...$data['groups']);
        }

        return (int) $userId;
    }

    public function update(int $id, array $data): bool
    {
        $user = $this->model->find($id);

        if ($user === null) {
            return false;
        }

        if (isset($data['username'])) {
            $user->username = $data['username'];
        }
        if (isset($data['email'])) {
            $user->email = $data['email'];
        }
        if (isset($data['password'])) {
            $user->password = $data['password'];
        }

        $this->model->update($id, $user);

        if (isset($data['groups']) && is_array($data['groups'])) {
            $user->syncGroups(...$data['groups']);
        }

        return true;
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
