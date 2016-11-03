<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(roles_table_seeder::class);
        $this->call(users_table_seeder::class);
        $this->call(students_profile_seeder::class);
        $this->call(instructors_seeder::class);
        $this->call(courses_seeder::class);
    }
}
