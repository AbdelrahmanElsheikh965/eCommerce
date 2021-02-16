<?php

namespace App;
use App\categories;
use App\User;

use Illuminate\Database\Eloquent\Model;

class product_user extends Model
{
    public $table = 'product_user';

//    public function products(){
//        return $this->belongsToMany('App\products', 'product_user', 'user_id', 'product_id');
////        return $this->belongsToMany('App\products');
//    }
//
//    public function users(){
//        //very important statement.
//        return $this->belongsToMany('App\User', 'product_user', 'user_id', 'product_id');
////        return $this->belongsToMany('App\User');
//    }
}
