<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('INSERT INTO users VALUES(
            NULL,
            "Hanrickson",
            "E.",
            "Dumapit",
            "Drusha01",
            "'.bcrypt('123').'",
            1,
            1,
            2,
            1,
            NOW(),
            NOW()
        );');

// id INT PRIMARY KEY AUTO_INCREMENT,
// first_name VARCHAR(255) NOT NULL,
// middle_name VARCHAR(255),
// last_name VARCHAR(255) NOT NULL,
// username VARCHAR(100) UNIQUE,
// password VARCHAR(255) NOT NULL,
// is_active BOOL DEFAULT 1,
// college_id INT,
// role_id INT,
// position_id INT,
// date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
// date_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        // $users = [
        //     [
        //         'name'=>'Officer',
        //         'username'=>'officer',
        //         'type'=>0,
        //         'password'=> bcrypt('123'),
        //     ],
        //     [
        //         'name'=>'Admin',
        //         'username'=>'admin',
        //         'type'=> 1,
        //         'password'=> bcrypt('123'),
        //     ],
        //     [
        //         'name'=>'Collector',
        //         'username'=>'collector',
        //         'type'=>2,
        //         'password'=> bcrypt('123'),
        //     ],
        // ];
    
        // foreach ($users as $key => $user) {
        //     User::create($user);
        // }
    }
}
