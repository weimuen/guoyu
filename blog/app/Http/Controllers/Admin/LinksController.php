<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\links;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
         $count = $request->input('count',5);
        $search = $request->input('search','');
        $data = Links::where('lname','like','%'.$search.'%')->paginate($count);
        return view('admin.links.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载视图
        return view('admin.links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收数据
        $data = $request->except(['_token']);
        $link = new links;
        $link->lname = $data['lname'];
        $link->lurl = $data['lurl'];
        if($link->save()){
               return redirect('/admins/links')->with('success','添加成功');
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
        $links = Links::find($id);
        return view('admin.links.edit',['links'=>$links]); 
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
        $links = Links::find($id);
        $links->lname = $request->input('lname','');
        $links->lurl = $request->input('lurl','');
        if($links->save()){
               return redirect('admin/links')->with('success','修改成功');
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
         $links = Links::destroy($id);

        if($links){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
            return back()->with($_SERVER['HTTP_REFERER'],'删除失败');
        }
    }
}
