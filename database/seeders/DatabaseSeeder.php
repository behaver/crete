<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TabSeeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\SectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TabSeeder::class,
            MenuSeeder::class,
            SectionSeeder::class,
        ]);
    }
}
