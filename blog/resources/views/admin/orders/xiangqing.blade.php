@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>订单详情</span>
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
	      <th>商品id</th>
	      <th>成交定价</th>
	      
	      <th>数量</th>
	      <th>创建时间</th>
	      <th>修改时间</th>
	      <th>删除时间</th>
	          
	      
		  
       </tr>
    </thead>
                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
				@foreach($data as $k=>$v)
				<tr class="odd">
				    <td>{{$v->did}}</td>
				    <td>{{$v->gid}}</td>
				    <td>{{$v->price}}</td>
				    <td>{{$v->cnt}}</td>
				    <td>{{$v->created_at}}</td>
				    <td>{{$v->updated_at}}</td>
				    <td>{{$v->deteletd_at}}</td>
				      
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