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
       
     //获取类别数据
       $cates = Cates::all();
       //加载视图
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
       //加载视图
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
        
         
       
      if($request->hasFile('gpic')){  //  检查是否为有效文件

             $img = $request->file('gpic');
             //获取后缀名
            $ext=$request->file('gpic')->extension();
             //新的文件名
             $newfile=time(1000,9999).rand().'.'.$ext;
              $res1 = $img->storeAs('public',$newfile);

                


            }else{
                return redirect()->back()->withInput()->withErrors('文件上传失败');
            }

             $goods = Goods::find($id);  
               $goods->gname = $request->input('gname','');
               $goods->tid = $request->input('tid','');
               $goods->price = $request->input('price','');
               $goods->stock = $request->input('stock','');
              $goods->gdesc = $request->input('gdesc','');
              $goods->gpic = $newfile;
              
            
        if($goods->save()){
            return redirect('admins/goods')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败！');;
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
        //删除操作
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
   

 