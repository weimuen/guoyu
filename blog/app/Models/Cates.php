<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
	//配置一对多
	public function  Goods(){
		
		return $this->hasMany('App\Models\Goods','pid');
	} 

}
