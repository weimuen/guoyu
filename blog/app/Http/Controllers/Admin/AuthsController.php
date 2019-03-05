<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthsStoreRequest;
use App\Models\Auths;
use App\Models\Works;
use DB;
class AuthsController extends Controller
{
    /**AuthsStoreRequest;
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据
        $data_auths = Auths::all();
        // dump($data_auths);
        // 加载视图
        return view('admin.auths.index',['data_auths'=>$data_auths]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        return view('admin.auths.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthsStoreRequest $request)
    {
        //事务处理 开启事务
        DB::beginTransaction();

        //接收数据
       $data = $request->except(['_token']);
        $auths = new Auths;
        $auths->aname = $data['aname'];
        $auths->content = $data['content'];
        $auths->sex = $data['sex'];
        $auths->apic = $data['apic'];
        $res1 = $auths->save();
        
        //接收返回的id号
        $id = $auths->id; 
        // dump($id);

        $works = new Works;
        $works->wid = $id;
        $works->wname = $data['wname'];
        $works->price = $data['price'];
        $works->wpic = $data['wpic'];
        $res2 = $works->save();

        //判断res1和res2是否全部成功
        if($res1 && $res2){
            //提交事务
            DB::commit();
            return redirect('admin/auths')->with('success','添加成功');
        }else{
            //回滚事务
            DB::rollBack();
            return back()->with('error','添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
