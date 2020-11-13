<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 8; $i++) { 
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'scope', 'section_id' => 1 ])->save();
            if ($i < 4) Subject::create([ 'name' => 'Subject'.$i, 'type' => 'scope', 'section_id' => 2 ])->save();
        }

        for ($i = 1; $i <= 3; $i++) { 
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'scope', 'scope_id' => 1, 'section_id' => 1 ])->save();
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'scope', 'scope_id' => 2, 'section_id' => 1 ])->save();
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'scope', 'scope_id' => 3, 'section_id' => 1 ])->save();
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'scope', 'scope_id' => 4, 'section_id' => 1 ])->save();
        }

        for ($i = 1; $i <= 5; $i++) { 
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'section_id' => 3 ])->save();
            if ($i < 3) {
            	Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'section_id' => 2 ])->save();
            	Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'section_id' => 4 ])->save();
            }
        }

        for ($i = 1; $i <= 3; $i++) { 
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'scope_id' => 1, 'section_id' => 1 ])->save();
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'scope_id' => 2, 'section_id' => 1 ])->save();
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'scope_id' => 3, 'section_id' => 1 ])->save();
            Subject::create([ 'name' => 'Subject'.$i, 'type' => 'picture', 'scope_id' => 4, 'section_id' => 1 ])->save();
        }
    }
}
