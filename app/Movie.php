<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function images() 
    {
      return $this->hasMany('App\Image','id');
    }
}
