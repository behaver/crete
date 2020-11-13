<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SubcategorySeeder;
use Database\Seeders\SectionSeeder;
use Database\Seeders\SubjectSeeder;

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
            CategorySeeder::class,
            SubcategorySeeder::class,
            SectionSeeder::class,
            SubjectSeeder::class,
        ]);
    }
}
