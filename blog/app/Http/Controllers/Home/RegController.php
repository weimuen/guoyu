<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegController extends Controller
{
    //
    public function index()
    {
    	// 加载页面
    	return view('home.reg.index');
    }
}
