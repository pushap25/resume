<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * The projects that belong to the Skills.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Models\Projects','project_skill');
    }
}
