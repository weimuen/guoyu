<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use DB;

class GoodsController extends Controller
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
        $data = Goods::where('gname','like','%'.$search.'%')->paginate($count);

        return  view('admin.goods.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.create');
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
          //处理文件上传
        $file = $request->file('gpic');
             
        $ext = $file->extension();
        $file_name = time()+rand(1000,9999).'.'.$ext;
        $res2 = $file->storeAs('public',$file_name); 
        
        $goods = new Goods;
        $goods->gname = $data['gname'];
        $goods->tid = $data['tid'];
        $goods->price= $data['price'];
        $goods->stock= $data['stock'];
        
        
      
        $goods->gdesc= $data['gdesc'];
       
       $res1 = $goods->save();


       
        if ($res1 && $res2) {
            return redirect('admins/goods')->with('success','添加成功');
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

       $goods = Goods::find($id);
       return view('admin.goods.edit',['goods'=>$goods]); 
       
       
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
        
        
        $goods = Goods::find($id);
       
        $goods->gname= $request->input('gname','');
        $goods->tid = $request->input('tid','');
        $goods->price = $request->input('price','');
        $goods->stock = $request->input('stock','');
        $goods->gdesc = $request->input('gdesc','');
        $res1 = $goods->save();
        

     if($request->hasfile('gpic'))
     {
         $ext = $file->extension();
         $file_name = time()+rand(1000,9999).'.'.$ext;
        $res2 = $file->storeAs('public',$file_name);
     }else{
        return back('admin/goods');
     }

      if ($res1 && $res2) {
            return redirect('admins/goods')->with('success','修改成功');
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
        $goods = Goods::destroy($id);

        if($goods){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
            return back()->with($_SERVER['HTTP_REFERER'],'删除失败');
        }

    }

    //上架
    public function up($id, $status = 2)
    {
        $data['status'] = 2;
        Goods::update($data,['gid'=>$id],true);
        return  redirect('admins/goods/index');
    }
    //下架
    public function  down($id)
    {
        return $this->up($id,3);
    }
}
 