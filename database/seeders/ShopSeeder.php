<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('shops')->insertGetId([
            'title' => 'IKEA',
            'url' => 'https://www.ikea.com/ru/ru/',
        ]);
        DB::table('shops')->insertGetId([
            'title' => 'Лента',
            'url' => 'https://lenta.com/',
        ]);
        DB::table('shops')->insertGetId([
            'title' => 'Магнит',
            'url' => 'https://magnit.ru/',
        ]);
        
    }
}
