<?php

use Illuminate\Database\Seeder;

class courses_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('courses') -> insert([
        	'course_name' => 'CIT',
        	'course_code' => 'CYS701',
        	'credits' => 4
        	]);
        DB::table('courses') -> insert([
        	'course_name' => 'SSE',
        	'course_code' => 'CYS702',
        	'credits' => 3
        	]);
        DB::table('courses') -> insert([
        	'course_name' => 'CF',
        	'course_code' => 'CYS703',
        	'credits' => 3
        	]);
    }
}
