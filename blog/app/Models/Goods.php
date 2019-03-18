<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
   //配置多对一
   public function Cates()
   {
<<<<<<< HEAD
   	     return $this->belongsTo('App\Models\Cates','path');
=======
   	  return $this->belongsTo('App\Models\Cates','pid');
>>>>>>> origin/huang
   }
}