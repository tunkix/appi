<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Events;

final class ContactsEvents
{
    public static function onSave(array $data): void
    {
        service('logger')->info('Contact saved', [
            'id'     => $data['id'],
            'action' => $data['_action'] ?? 'unknown',
        ]);
    }

    public static function onDelete(array $data): void
    {
        service('logger')->info('Contact deleted', [
            'id' => $data['id'],
        ]);
    }
}
