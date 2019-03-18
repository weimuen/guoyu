<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
<<<<<<< HEAD
	public $table = 'cates';
	 // public $primaryKey = 'pid';
    //一对多
    public  function goods()
    {
             return $this->belongsTo('App\Models\goods','');
    }
=======

	//配置一对多
	public function  Goods(){
		
		return $this->hasMany('App\Models\Goods','pid');
	} 
	
>>>>>>> origin/huang
}
