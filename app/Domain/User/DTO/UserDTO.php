<?php

namespace Domain\User\DTO;


use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class UserDTO extends Data
{
    public function __construct(
        public  ?string $first_name,
        public  ?string $last_name
    )
    {}

    public static function fromRequest(Request $request): UserDTO
    {
        return new self(
            first_name: $request->get("first_name",""),
            last_name: rand(1,100)
        );
    }
}
