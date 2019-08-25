<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academics extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'images', 'videos', 'links', 'created_at'
    ];

}
