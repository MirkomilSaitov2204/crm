<?php

namespace App\Domain\User\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class CreateUserDTO extends DataTransferObject
{
    public $firstName;
    public $lastName;
    public $image;
    public $dob;
    public $username;
    public $email;
    public $password;
    public $role;
    public $status;
}
