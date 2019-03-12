<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use DB;
use App\Models\Cates;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         // 操作数据库
     
        $count = $request->input('count',5);
        $search = $request->input('search','');
        $data = Goods::where('gname','like','%'.$search.'%')->paginate($count);

        //加载视图
        return view('admin.goods.index',['data'=>$data,'request'=>$request->all()]);



       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
      // $cates = DB::table('cates')->select('*',DB::raw("concat(path,',',id) as paths"))->get();
     
       $cates = Cates::all();
        return view('admin.goods.create',['cates' => $cates]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

      //开始事务
      DB::beginTransaction();
      //执行文件上传
      $img = $request->file('gpic');
      //获取后缀名
      $ext=$request->file('gpic')->extension();
      //新的文件名
      $newfile=time(1000,9999).rand().'.'.$ext;
      $res1 = $img->storeAs('public',$newfile);
      //接收数据
       $data = $request->except(['_token']);
     
        $goods = new Goods;
        $goods->gname = $data['gname'];

        // $goods->tid = $data['tid'];
        $goods->price = $data['price'];
        $goods->stock = $data['stock'];
        $goods->gpic = $newfile;
        $goods->gdesc = $data['gdesc'];
        $res2= $goods->save();

         if($res1 && $res2){
            DB::commit();
            return redirect('admins/goods')->with('success','添加成功');
        }else{
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
        
        
        //接收数据       
        $gname= $request->input('gname');
        $tid = $request->input('tid');
        $price = $request->input('price');
        $stock = $request->input('stock');
        $gdesc = $request->input('gdesc');
        
        $gpic = $request->input('gpic');
        
         

       $sql = "update goods set gname = '$gname' ,tid = '$tid' ,price = '$price' ,stock ='$stock' ,gdesc ='$gdesc',gpic = '$gpic' where id=$id";

        
        if(DB::update($sql)){
              return redirect('admins/goods')->with('success','修改成功');
        }else{
            return back();
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

    public function  up($id)
    {

    }
}
   

 