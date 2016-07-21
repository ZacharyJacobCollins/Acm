<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds with php artisan db:seed
     *
     * @return void
     */
    public function run()
    {
          $this->call('CourseSeeder');
          $this->call('AdminUserSeeder');
          $this->call('UsersTableSeeder');
    }
}
