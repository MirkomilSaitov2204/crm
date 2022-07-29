<?php

namespace Domain\User\Services;

use Domain\User\Entities\User;

class UserService
{
    protected User $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store(\Domain\User\DTO\UserDTO $fromRequest)
    {

    }


}
