<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the tab that owns the menu.
     */
    public function tab()
    {
        return $this->belongsTo('App\Models\Tab');
    }

    /**
     * Get the sections for the menu.
     */
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }
}
