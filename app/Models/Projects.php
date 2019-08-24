<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'images', 'videos', 'links'
    ];

    /**
     * The skills that belong to the Projects.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Models\Skills','project_skill');
    }

}
