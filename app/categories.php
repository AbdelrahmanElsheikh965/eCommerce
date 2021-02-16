<?php

namespace App;
use App\products;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    // one to many relation with products table
    public function products(){
        return $this->hasMany('App\products', 'cat_id');
    }
}
