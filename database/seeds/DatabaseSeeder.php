<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     //UsersTableSeederの下記コメントアウトを外す
        $this->call(UsersTableSeeder::class);
    }
}
