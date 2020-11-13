<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * Get the subcategory that owns the section.
     */
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory');
    }

    /**
     * Get subjects which belong to the section.
     */
    public function subjects()
    {
        return $this->hasMany('App\Models\Subject');
    }
}
