<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  function relationtosubcategory(){
    return $this->hasOne('App\Category','id','parent_id');
  }
}
