<?php

use Illuminate\Database\Seeder;

class roles_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $faker = Faker\Factory::create();
        DB::table('roles')->insert(['role_name'=>'admin']);
        DB::table('roles')->insert(['role_name'=>'student']);
        DB::table('roles')->insert(['role_name'=>'instructor']);
        
    }
}
