<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relation with category model
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
