<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
	protected $table = 'workexperience';
    protected $fillable = [
        'company_name', 'designation', 'title', 'description', 'image', 'from', 'to'
    ];
}
