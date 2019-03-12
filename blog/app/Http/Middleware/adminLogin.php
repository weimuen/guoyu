<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 判断后台是否登录
        if(session('guoyuAdminUserInfo')){
            //执行下一次请求 通过
             return $next($request);
        }else{
            //跳转到登录页面
            return redirect('admins/login');
        }
       
    }
}
