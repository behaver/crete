<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [ 'name' => 'Nightwalker', 'tab_id' => 1 ],
            [ 'name' => 'Versicle', 'tab_id' => 1 ],
            [ 'name' => 'Wet Dream', 'tab_id' => 1 ],
            [ 'name' => 'Souvenir', 'tab_id' => 1 ],
            [ 'name' => 'Human Fishbowl', 'tab_id' => 1 ],
            [ 'name' => 'Cinema', 'tab_id' => 2 ],
            [ 'name' => 'Literary', 'tab_id' => 2 ],
            [ 'name' => 'Music', 'tab_id' => 2 ],
            [ 'name' => 'Photography', 'tab_id' => 2 ],
            [ 'name' => 'Potpourri', 'tab_id' => 3 ],
            [ 'name' => 'Translation', 'tab_id' => 3 ],
            [ 'name' => 'Poem', 'tab_id' => 3 ],
            [ 'name' => 'Novel', 'tab_id' => 3 ],
            [ 'name' => 'Front End', 'tab_id' => 4 ],
            [ 'name' => 'Communication', 'tab_id' => 4 ],
            [ 'name' => 'Back End', 'tab_id' => 4 ],
            [ 'name' => 'Soliloquy', 'tab_id' => 5 ],
            [ 'name' => 'Diary', 'tab_id' => 5 ],
        ]);
    }
}
