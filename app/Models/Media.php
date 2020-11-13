<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'folder_id' => 0,
    ];

    /**
     * Get the section that owns the media.
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * Get the folder that owns the media.
     */
    public function folder()
    {
        // if there is not a parent folder that owns the folder, then return the default folder root.
        return $this->belongsTo('App\Models\Folder')->withDefault([
            'id' => 0,
            'name' => 'root',
        ]);
    }
}
