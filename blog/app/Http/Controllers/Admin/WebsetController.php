<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsetController extends Controller
{
    public function index()
    {
    	//加载模板
    	return view('admin.webset.index');
    }
}
