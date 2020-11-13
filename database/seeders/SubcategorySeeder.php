<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            [ 'name' => 'Nightwalker', 'category_id' => 1 ],
            [ 'name' => 'Versicle', 'category_id' => 1 ],
            [ 'name' => 'Wet Dream', 'category_id' => 1 ],
            [ 'name' => 'Souvenir', 'category_id' => 1 ],
            [ 'name' => 'Human Fishbowl', 'category_id' => 1 ],
            [ 'name' => 'Cinema', 'category_id' => 2 ],
            [ 'name' => 'Literary', 'category_id' => 2 ],
            [ 'name' => 'Music', 'category_id' => 2 ],
            [ 'name' => 'Photography', 'category_id' => 2 ],
            [ 'name' => 'Potpourri', 'category_id' => 3 ],
            [ 'name' => 'Translation', 'category_id' => 3 ],
            [ 'name' => 'Poem', 'category_id' => 3 ],
            [ 'name' => 'Novel', 'category_id' => 3 ],
            [ 'name' => 'Front End', 'category_id' => 4 ],
            [ 'name' => 'Communication', 'category_id' => 4 ],
            [ 'name' => 'Back End', 'category_id' => 4 ],
            [ 'name' => 'Soliloquy', 'category_id' => 5 ],
            [ 'name' => 'Diary', 'category_id' => 5 ],
        ]);
    }
}
