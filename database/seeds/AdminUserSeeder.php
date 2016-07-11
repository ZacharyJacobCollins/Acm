<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            'name' => 'admin',
            'type' => 'A',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'avatar' => 'default.jpg',
            'resume' => 'resume.pdf',
            'bio' => 'I am the admin',
            'languages' => 'Binary, and some node js',
            'password' => bcrypt('EasternAcm13'),
        ]);
    }
}
