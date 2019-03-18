<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	public $table = 'users';
    //一对一
    public function usersinfo()
    {
    	return $this->hasOne('App\Models\Usersinfo','uid');
    }
}
