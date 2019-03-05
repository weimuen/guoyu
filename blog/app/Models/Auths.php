<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auths extends Model
{
    //一对多
   public function works()
   {
   	return $this->hasMany('App\Models\Works','wid');
   }
}
