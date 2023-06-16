<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\ShopSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ShopSeeder::class,
        ]);
    }
}
