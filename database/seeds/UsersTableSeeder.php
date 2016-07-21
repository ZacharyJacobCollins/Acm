<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for($i=0; $i<13; $i++) {  
            DB::table('users')->insert([
                'name' => 'admdin'.$i,
                'type' => 'U',
                'username' => 'addmin'.$i,
                'email' => $i.'adamin@gdmail.com',
                'avatar' => 'default.jpg',
                'resume' => 'resume.pdf',
                'bio' => 'I am the dadmin'.$i,
                'languages' => 'Binary, and some node js'.$i,
                'password' => bcrypt('EasternAcm13'),
            ]);
        }
    }
}
