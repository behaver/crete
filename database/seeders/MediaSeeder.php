<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) { 
            Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'section_id' => 3 ])->save();
            if ($i < 3) {
            	Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'section_id' => 2 ])->save();
            	Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'section_id' => 4 ])->save();
            }
        }

        for ($i = 1; $i <= 3; $i++) { 
            Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'folder_id' => 1, 'section_id' => 1 ])->save();
            Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'folder_id' => 2, 'section_id' => 1 ])->save();
            Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'folder_id' => 3, 'section_id' => 1 ])->save();
            Media::create([ 'name' => 'Media'.$i, 'type' => 'picture', 'folder_id' => 4, 'section_id' => 1 ])->save();
        }
    }
}
