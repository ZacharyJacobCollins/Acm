<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'courseId'=> 'Web Dev 231',
            'link'=> 'easternacm.github.io',
            'description'=> 'Wow a web dev course Wow a web dev course Wow a web dev course Wow a web dev course Wow a web dev course Wow a web dev course Wow a web dev course Wow a web dev course',
            'professors'=> 'Yo boi evett, and that one chick whose name starts with an H',
        ]);
    }
}
