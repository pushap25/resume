<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryContent extends Model
{
    protected $fillable = [
        'parent_id', 'images','videos'
    ];

	protected $table = 'gallerycontent';

    public function gallery()
    {
        return $this->belongsTo('App\Models\Gallery');
    }

}
