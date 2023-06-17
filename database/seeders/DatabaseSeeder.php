<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\ClassroomTableSeeder;
use Database\Seeders\GradeSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\SectionsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
//        $this->call(religionTableSeeder::class);
        $this->call(SpecializationsSeeder::class);
        $this->call(GenderSeeder::class);
//        $this->call(StudentsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
