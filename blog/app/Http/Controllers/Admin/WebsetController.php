<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Webset;
class WebsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.webset.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.webset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
         //表单验证规则
        $this->validate($request, [
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ],[
            'title.required'=>"请输入标题",
            'keywords.required'=>"请输入关键字",
            'description.required'=>"请输入接收",
            'logo.required'=>"请添加图片",

        ]);
       
        // 创建文件上传对象
        $file = $request->file('logo');
        // 判断文件是否存在
         if($request->hasFile('logo')){
            // 获取文件后缀
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;
            $res = $file->storeAs('public',$file_name);
        }else{
            return back();
         
             // 接收数据
        $data = $request->except(['_token']);

       
        $webset = new Webset;
        $webset->title = $data['title'];
        $webset->keywords = $data['keywords'];
        $webset->description = $data['description'];
        $webset->logo = $file_name;
       
        if($webset->save()){
            return redirect('/admins/webset')->with('success','添加成功');
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
