<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabs')->insert([
            [ 'name' => 'Gallery' ],
            [ 'name' => 'Criticism' ],
            [ 'name' => 'Typer' ],
            [ 'name' => 'Geek' ],
            [ 'name' => 'Personwis' ],
        ]);
    }
}
