<?php

use Illuminate\Database\Seeder;

class students_profile_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=2; $i <= 10 ; $i += 3) {
            DB::table('students')->insert([
                'address' => $faker->address,
                'parent1_contact' => $faker->isbn10(),
                'parent2_contact' => $faker->isbn10(),
                'home_contact'=>$faker->randomNumber(6),
                'uid' => $i,
                'bloodgroup' => 'B+',
                'rollno' => 'CB.EN.P2CYS15000',
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }
}
