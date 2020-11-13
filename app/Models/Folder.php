<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'parent_id' => 0,
    ];

    /**
     * Get the section that owns the folder.
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * Get the parent folder that owns the folder.
     */
    public function parent()
    {
    	// if there is not a parent folder that owns the folder, then return the default folder root.
        return $this->belongsTo('App\Models\Folder', 'parent_id')->withDefault([
            'id' => 0,
            'name' => 'root',
        ]);
    }

    /**
     * Get the children folders for the folder.
     */
    public function children()
    {
        return $this->hasMany('App\Models\Folder', 'parent_id');
    }

    /**
     * Get the medias for the folder.
     */
    public function medias()
    {
        return $this->hasMany('App\Models\Media');
    }
}
