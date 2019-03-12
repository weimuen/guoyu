<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 加载页面
        return view('admin.login.index');

    }

    public function yzm()
    {
        require_once("../resources/code/Code.class.php");

        //实例化
        $code = new \Code();
        // 生成验证码
        $code->make();
    }
    
}
