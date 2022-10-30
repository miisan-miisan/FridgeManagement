<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefrigeratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('refrigerators')->insert([
            'name' => '豆腐',
            'expiration' => '2023-02-05',
            'updated_by' => 'さや',
         ]);
    }
}
