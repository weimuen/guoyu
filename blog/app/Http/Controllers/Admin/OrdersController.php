<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Details;

class OrdersController extends Controller
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
        $data = Orders::where('oid','like','%'.$search.'%')->paginate($count);

        return  view('admin.orders.index',['data'=>$data,'request'=>$request->all()]);
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

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
        $orders = Orders::find($id);
        return view('admin.orders.edit',['orders'=>$orders]);
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
        $orders = Orders::find($id);
        $orders->oid = $request->input('oid','');
        $orders->rec = $request->input('rec','');
        $orders->sum = $request->input('sum','');
        $orders->num = $request->input('num','');
        $orders->addr = $request->input('addr','');
        $orders->status = $request->input('status','');
        $orders->tel = $request->input('tel','');
        $orders->umsg = $request->input('umsg','');

        if($orders->save()){
            return redirect('admins/orders')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }


    }

        public function  xiangqing(Request $request,$id)
        {
            $count = $request->input('count',5);
            $search = $request->input('search','');
            $data = Details::where('gid','like','%'.$search.'%')->paginate($count);

        return  view('admin.Orders.xiangqing',['data'=>$data,'request'=>$request->all()]);

             $orders = Orders::find($gid);

             return view('admin.orders.xiangqing',['orders'=>$orders]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $orders = Orders::destroy($id);

        if($orders){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
            return back()->with($_SERVER['HTTP_REFERER'],'删除失败');
        }
    }

    public function fahuo(Request $request,$id)
    {
       
         $orders = Orders::find($id);
         $orders->status = $request->input('status','');
          $res = $orders->save();
        
         return $this->redirect('admin/orders/index');

    }
}
