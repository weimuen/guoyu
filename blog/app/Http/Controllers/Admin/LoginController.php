<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Models\Users;
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

    // 处理登录
    public function dologin(Request $request)
    {
        $data = $request->except(['_token']);
        // 获取数据
        $name = $request->input('uname');
        $pass = $request->input('upwd');
        $ucode = $request->input('code');

        // 验证验证码
        require_once("../resources/code/Code.class.php");

        // 实例化
        $code = new \Code();

        // 获取session
        $ocode = $code->get();
       
    }

    // 退出登录
    public function logout()
    {
        session()->flush();
        return redirect('/admins')->with('success','退出成功');
    }
}