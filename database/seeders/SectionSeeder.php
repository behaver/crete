<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) { 
            Section::create([ 'name' => 'Spring', 'subcategory_id' => $i ])->save();
            Section::create([ 'name' => 'Summer', 'subcategory_id' => $i ])->save();
            Section::create([ 'name' => 'Autumn', 'subcategory_id' => $i ])->save();
            Section::create([ 'name' => 'Winter', 'subcategory_id' => $i ])->save();
        }
    }
}
