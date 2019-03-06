@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>订单列表</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form action="/admins/orders" method="get">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
  <div id="DataTables_Table_1_length" class="dataTables_length">
    <label>显示
      <select size="1" name="count" aria-controls="DataTables_Table_1">
        <option value="5" @if(isset($request['count']) && $request['count'] == 5) selected @endif>5</option>
        <option value="10" @if(isset($request['count']) && $request['count'] == 10) selected @endif>10</option>
        <option value="15" @if(isset($request['count']) && $request['count'] == 15) selected @endif>15</option>
        <option value="50" @if(isset($request['count']) && $request['count'] == 50) selected @endif>50</option>
        </select>条</label>

  </div>
  <div class="dataTables_filter" id="DataTables_Table_1_filter">
    <label>关键字:
      <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{ $request['search'] or ''}} ">
     
      </label>
       <input type="submit" value="搜索" class="btn btn-info">
	
  </div>
  </form>
  <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
    <thead>
      <tr role="row">
	      <th>ID</th>
	      <th>下单人</th>
	      <th>收货人</th>
	      <th>订单金额</th>
	      <th>商品数量</th>
	      <th>电话</th>
	      <th>收货地址</th>
	      <th>商家留言</th>
	          
	      <th>收货状态</th>
      	  <th>操作</th>
		  
       </tr>
    </thead>
                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
				@foreach($data as $k=>$v)
				<tr class="odd">
				    <td>{{$v->id}}</td>
				    <td>{{$v->oid}}</td>
				    <td>{{$v->rec}}</td>
				    <td>{{$v->sum}}</td>
				    <td>{{$v->num}}</td>
				    <td>{{$v->tel}}</td>
				    <td>{{$v->addr}}</td>
				    
				    <td>{{$v->umsg}}</td>
				    

				    
				    
				    <td>
                           
                            

                           @if($v->status ==1)请发货
                          
                          
                           @endif($v->status ==3)收货完成
                         

				    </td>
				  
				    <td>
						<a href="/admins/orders/{{$v->id}}/edit" class="btn btn-info">修改</a>
						<a href="/admins/orders/{{$v->id}}/xiangqing" class="btn btn-info">订单详情</a>
						<a href="/admins/orders/{{$v->id}}/fahuo" class="btn btn-info">发货</a>
						<form action="/admins/orders/{{$v->id}}" method="post" style="display: inline-block;">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<input type="submit" value="删除" class="btn btn-danger" >
						</form>
				    </td>
				</tr>
			 	@endforeach
			</tbody>
			</table>
			
			<div id="page_page">
			
			  {{ $data->appends($request)->links() }}
			</div>
			
		</div>
        </div>
    </div>
@endsection
