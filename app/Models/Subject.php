<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'scope_id' => 0,
    ];

    /**
     * Get the section that owns the subject.
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * Get the scope subject that owns the media.
     */
    public function scope()
    {
        // if there is not a parent scope that owns the subject, then return the default scope root.
        return $this->belongsTo('App\Models\Subject', 'scope_id')->withDefault([
            'id' => 0,
            'name' => 'root',
        ]);
    }

    /**
     * Get children subjects for the scope subject.
     */
    public function children()
    {
        return $this->hasMany('App\Models\Subject', 'scope_id');
    }
}
