<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slids;
use DB;
class SlidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slids::all();
        // dump($data);
        //加载视图
        return view('admin.slids.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载视图
        return view('admin.slids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 接收数据
        $data = $request->except('_taken');
       //表单验证规则
        $this->validate($request, [
            'sname' => 'required',
            'surl' => 'required',
            'order' => 'required',
            'simg' => 'required',
        ],[
            'sname.required'=>"请输入名称",
            'surl.required'=>"请输入链接地址",
            'order.required'=>"请输入排序",
            'simg.required'=>"请添加图片",

        ]);
        // 创建文件上传对象
        $file = $request->file('simg');
        // 判断文件是否存在
         if($request->hasFile('simg')){
            // 获取文件后缀
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;
            $res = $file->storeAs('public',$file_name);
        }else{
            return back();
        }
        $slids = new Slids;
        $slids->sname = $data['sname'];
        $slids->surl = $data['surl'];
        $slids->order = $data['order'];
        $slids->simg = $file_name;
        // 保存数据
        $res = $slids->save();
        
        if($res){
            return redirect('admins/slids')->with('success','添加成功');
        }else{
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
        // 接收数据
        $slids = Slids::find($id);
        return view('admin.slids.edit',['slids'=>$slids]);
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
        //修改数据
          $slid = Slids::find($id);
          
         // 创建文件上传对象
        $file = $request->file('simg');
        // 判断文件是否存在
         if($request->hasFile('simg')){
            // 获取文件后缀
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;

            $res = $file->storeAs('public',$file_name);
        }else{
            return back();
        }
        $slid->sname = $request->input('sname');
        $slid->surl = $request->input('surl');
        $slid->simg = $file_name;
        $slid->order = $request->input('order');
        //保存数据
        $slid->save();
        //判断是否成功
        if($slid){
            return redirect('/admins/slids')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $res = Slids::destroy($id);
        
        
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
            return redirect($_SERVER['HTTP_REFERER'])->with('error','删除失败');
        }
    }
}
