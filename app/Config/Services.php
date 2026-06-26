<?php

declare(strict_types=1);

namespace Config;

use App\Models\Core\UserModel;
use App\Modules\Contacts\Models\ContactModel;
use App\Modules\Contacts\Services\ContactService;
use App\Services\AuthService;
use App\Services\LangService;
use App\Services\ModuleService;
use App\Services\SettingsService;
use App\Services\UserService;
use CodeIgniter\Config\BaseService;

final class Services extends BaseService
{
    public static function authService(bool $getShared = true): AuthService
    {
        if ($getShared) {
            return static::getSharedInstance('authService');
        }

        return new AuthService();
    }

    public static function moduleService(bool $getShared = true): ModuleService
    {
        if ($getShared) {
            return static::getSharedInstance('moduleService');
        }

        return new ModuleService();
    }

    public static function userService(bool $getShared = true): UserService
    {
        if ($getShared) {
            return static::getSharedInstance('userService');
        }

        return new UserService(
            model: new UserModel(),
        );
    }

    public static function settingsService(bool $getShared = true): SettingsService
    {
        if ($getShared) {
            return static::getSharedInstance('settingsService');
        }

        return new SettingsService(
            settings: service('settings'),
        );
    }

    public static function langService(bool $getShared = true): LangService
    {
        if ($getShared) {
            return static::getSharedInstance('langService');
        }

        return new LangService();
    }

    public static function contactService(bool $getShared = true): ContactService
    {
        if ($getShared) {
            return static::getSharedInstance('contactService');
        }

        return new ContactService(
            model: new ContactModel(),
        );
    }
}
