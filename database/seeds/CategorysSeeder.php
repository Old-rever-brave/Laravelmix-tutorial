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
        $prefectures = [
            ['code' => 1, 'name' => 'サーバーサイド'],
            ['code' => 2, 'name' => 'フロントエンド'],
            ['code' => 3, 'name' => 'PMO'],
            ['code' => 4, 'name' => 'PM'],
            ['code' => 5, 'name' => '運用保守'],
            ['code' => 6, 'name' => '運用設計'],
            ['code' => 7, 'name' => '基本設計'],
            ['code' => 8, 'name' => '設計構築'],
 
        ];
        DB::table('prefectures')->insert($prefectures);
    }
}
