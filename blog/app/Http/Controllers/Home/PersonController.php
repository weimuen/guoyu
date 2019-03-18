<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;


class PersonController extends Controller
{
    public function personInfo()
    {
    	//加载个人信息
    	
    	$users = Users::all();
    	 return view('home.person.personInfo',['usrs'=>$users]);
       
    }

     public function  Address()
    {
    	return view('home.person.personAddress');
    }
    
     public function  person()
     {
     	  //加载个人中心
           return view('home.layout.person');
     } 
}
