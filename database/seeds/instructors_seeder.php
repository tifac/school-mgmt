<?php

use Illuminate\Database\Seeder;

class instructors_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=3; $i <= 10 ; $i += 3) {
            DB::table('instructors')->insert([
                'joining_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'qualification' => "PhD",
                'address' => $faker->address(),
                'contact' => $faker->isbn10(),
                'uid' => $i,
            ]);
        }
    }
}
