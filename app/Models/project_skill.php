<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project_skill extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 'skill_id'
    ];


}
