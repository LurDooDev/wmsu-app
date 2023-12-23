<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'Officer',
                'username'=>'officer',
                'type'=>0,
                'password'=> bcrypt('123'),
            ],
            [
                'name'=>'Admin',
                'username'=>'admin',
                'type'=> 1,
                'password'=> bcrypt('123'),
            ],
            [
                'name'=>'Collector',
                'username'=>'collector',
                'type'=>2,
                'password'=> bcrypt('123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
