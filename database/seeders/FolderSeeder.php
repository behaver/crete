<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Folder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) { 
            Folder::create([ 'name' => 'Folder'.$i, 'section_id' => 1 ])->save();
            if ($i < 4) Folder::create([ 'name' => 'Folder'.$i, 'section_id' => 2 ])->save();
        }

        for ($i = 1; $i <= 3; $i++) { 
            Folder::create([ 'name' => 'Folder'.$i, 'parent_id' => 1, 'section_id' => 1 ])->save();
            Folder::create([ 'name' => 'Folder'.$i, 'parent_id' => 2, 'section_id' => 1 ])->save();
            Folder::create([ 'name' => 'Folder'.$i, 'parent_id' => 3, 'section_id' => 1 ])->save();
            Folder::create([ 'name' => 'Folder'.$i, 'parent_id' => 4, 'section_id' => 1 ])->save();
        }
    }
}
