<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  function relationtosubcategory(){
    return $this->hasMany('App\Category','parent_id');
  }
  function subcategorytomaincategory(){
    return $this->hasOne('App\Category','id','parent_id');
  }
}
