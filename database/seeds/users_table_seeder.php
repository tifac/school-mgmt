<?php

use Illuminate\Database\Seeder;

class users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'name'=>'Atul',
            'email'=>'kratul93@gmail.com',
            'password'=>bcrypt('12345'),
            'profilepic'=>'/Users/akash/Pictures/angel.jpg',
            'role_id'=>'2']);
        for( $i=1,$role_n=$i % 3;$i<10;$i++){
             DB::table('users')->insert([
                'name'=>$faker->name,
                'email'=>$faker->unique()->email,
                'password'=>bcrypt('12345'),
                'profilepic'=>'/Users/akash/Pictures/angel.jpg',
                'role_id'=>($i % 3) + 1]);
        }
    }
}
