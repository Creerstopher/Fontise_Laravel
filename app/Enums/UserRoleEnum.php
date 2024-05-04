<?php

namespace App\Enums;

enum UserRoleEnum: int
{
    case USER = 1;
    case ADMIN = 2;
    case BANNED = 3;

    public function getLabel(): string
    {
        return match ($this) {
            self::USER => 'Пользователь',
            self::ADMIN => 'Администратор',
            self::BANNED => 'Заблокирован',
        };
    }
}
