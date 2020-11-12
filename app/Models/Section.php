<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * Get the menu that owns the section.
     */
    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    /**
     * Get the folders for the section.
     */
    public function folders()
    {
        return $this->hasMany('App\Models\Folder');
    }

    /**
     * Get the medias for the section.
     */
    public function medias()
    {
        return $this->hasMany('App\Models\Media');
    }

    
}
