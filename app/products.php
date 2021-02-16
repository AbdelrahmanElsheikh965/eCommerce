<?php

namespace App;
use App\categories;
use App\User;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
//    public $table = 'products';
    //one to one relation with table categories
    public function categories(){
        return $this->belongsTo('App\categories', 'cat_id');
    }

    //one to many relationship with table user_fav
    public function users(){
        //very important statement.
        return $this->belongsToMany('App\User', 'product_user', 'user_id', 'product_id');
//        return $this->belongsToMany('App\User');

    }

}
