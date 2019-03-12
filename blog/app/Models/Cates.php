<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
	public $table = 'cates';
	 // public $primaryKey = 'pid';
    //一对多
    public  function goods()
    {
             return $this->hasMany('App\goods','tid');
    }
}
