<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => '豆腐',
            'expiration' => '2023-02-05',
            'expiration_type' => 1,
            'updated_by' => 'さや',
         ]);
        DB::table('items')->insert([
            'name' => 'キャベツ',
            'expiration' => '2023-02-12',
            'expiration_type' => 9,
            'updated_by' => 'さや',
         ]);
    }
}
