<?php

namespace App;
use App\categories;
use App\user_fav;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //one to one relation with table categories
    public function products(){
        return $this->belongsTo('App\categories');
    }

    //one to many relationship with table user_fav
    public function user_fav(){
        return $this->belongsToMany('App\user_fav');
    }

}
