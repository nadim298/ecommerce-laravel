<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function relationtocategory(){
      return $this->hasOne('App\Category','id','category_id');
    }
    function relationtoattributes(){
      return $this->hasMany('App\ProductsAttribute','product_id');
    }
    function relationtoimages(){
      return $this->hasMany('App\ProductsImage','product_id');
    }

}
