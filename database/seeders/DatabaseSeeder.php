<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CollegeSeeders::class);
        $this->call(DepartmentsSeeders::class);
        $this->call(PositionSeeders::class);
        $this->call(RolesSeeders::class);
        $this->call(SchoolYearSeeders::class);
        $this->call(Semesters::class);
        

        $this->call(Users::class);
    }
}
