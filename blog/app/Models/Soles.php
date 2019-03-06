<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soles extends Model
{
     public function Books()
    {
    	return $this->hasOne('App\Models\Books','bid');
    }
}
