<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
   //配置多对一
   public function Cates()
   {
   	  return $this->belongsTo('App\Models\Cates','pid');
   }
}