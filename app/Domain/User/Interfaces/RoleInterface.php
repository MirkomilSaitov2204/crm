<?php

namespace Domain\User\Interfaces;

interface RoleInterface
{
    const USER_ROLE = 'user';
    const MODERATOR_ROLE = 'moderator';
    const ADMIN_ROLE = 'admin';
    const SUPERADMIN_ROLE = 'superadmin';

    const ROLES = [
        self::USER_ROLE, self::MODERATOR_ROLE, self::ADMIN_ROLE, self::SUPERADMIN_ROLE
    ];

}
