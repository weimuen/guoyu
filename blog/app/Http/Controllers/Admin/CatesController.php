<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use DB;
class CatesController extends Controller
{

    public static function getCates()
    {
       
        $cates_data = Cates::select('*',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
        foreach($cates_data as $k=>$v){
            //统计path中','出现的次数
            $n = substr_count($v->path,',');
            // 重复使用一个字符串
             $cates_data[$k]->cname = str_repeat('|----',$n).$v->cname;
        }
        return $cates_data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $count = $request->input('count',5);
        $search = $request->input('search','');
        $data = Cates::where('cname','like','%'.$search.'%')->paginate($count);
        
        //显示模板
        return view('admin.cates.index',['data'=>$data,'cates_data'=>self::getCates()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 0)
    {
       
        //显示添加页面
        return view('admin.cates.create',['id'=>$id,'cates_data'=>self::getCates()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        //处理分类路径
        if($data['pid'] == 0){
            $data['path'] = 0;
        }else{
            //获取父级分类的信息
            $parent_data = Cates::find($data['pid']);
            //获取父级分类的path,id
            $data['path'] = $parent_data->path.','.$parent_data->id;
        }
        //赋值
        $cate = new Cates;
        $cate->cname = $data['cname'];
        $cate->pid = $data['pid'];
        $cate->path = $data['path'];
        //执行添加
        if($cate->save()){
            return redirect('admins/cates')->with('success','添加成功');
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
        // 检测当前分类下 是否有子分类
        $child_data = Cates::where('pid',$id)->first();
        if($child_data){
            return back()->with('error','有子分类，不允许删除');
        }
        if(Cates::destroy($id)){
             return redirect('admins/cates')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}

