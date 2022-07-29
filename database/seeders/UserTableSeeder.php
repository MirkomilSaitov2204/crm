<?php

namespace Database\Seeders;

use Domain\User\Entities\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30000; $i++){
            User::create([
                'first_name' => "First name $i",
                'last_name'  => "Last name $i",
                'username'   => "username $i",
                'email'      => "email@email$i.com",
                'password'  => bcrypt("password"),
            ]);
        }
    }
}
