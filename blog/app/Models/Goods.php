<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
   public $table = 'goods';
     // public $primaryKey = 'tid';

   //设置多对一关系
   
   public function cates()
   {
   	     return $this->belongsTo('App\cates','pid');
   }
}
