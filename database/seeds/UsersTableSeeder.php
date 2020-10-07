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
        $names = [
            'yuuki' => 'yuuki',
            'yuuichi' => 'yuuichi'
        ];

        foreach ($names as $name_en => $name_jp) {

            \App\User::create([
                'name' => $name_jp,
                'password' => bcrypt('xxxxxxxx')
            ]);

        }
    }
}