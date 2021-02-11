<?php

namespace App;
use App\User;
use App\products;

use Illuminate\Database\Eloquent\Model;

class user_fav extends Model
{
    //one to many relationship with table user
    public function user(){
        return $this->belongsToMany('App\User');
    }

    //one to many relationship with table products
    public function product(){
        return $this->belongsToMany('App\products');
    }
}
