<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function relationtocategory(){
      return $this->hasOne('App\Category','id','category_id');
    }

}
