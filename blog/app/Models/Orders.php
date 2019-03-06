<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
   public  function  details()
   {
   	  return  $this->hasone('App\Models\details','did');
   }
}
