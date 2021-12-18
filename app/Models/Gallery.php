<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title', 'description','cover_image'
    ];

	protected $table = 'gallery';


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function gallerycontents()
    {
        return $this->hasMany('App\Models\GalleryContent','parent_id','id');
    }

}
