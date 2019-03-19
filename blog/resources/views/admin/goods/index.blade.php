@extends('admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>商品列表</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form action="/admins/goods" method="get" >
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
	      <th>商品名称</th>
	      <th>所属分类</th>
	      <th>商品价格</th>
	      <th>商品图片</th>
	      <th>商品库存</th>
	      <th>创建时间</th>
	      <th>修改时间</th>
	      <th>商品描述</th>
	      <th>状态</th>
	      <th>操作</th>	     
      	 
		  
       </tr>
    </thead>                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
				@foreach($data as $k=>$v)
				<tr class="odd">
				    <td>{{$v->id}}</td>
				    <td>{{$v->gname}}</td>
				    <td>{{$v->tid}}</td>
				    <td>{{$v->price}}</td>
				    
				    
				    <td>
                        <img src="/upload/public/{{$v->gpic}}" alt="" width="100px"> 
				    </td>
				    <td>{{$v->stock}}</td>
				    <td>{{$v->created_at}}</td>
				    <td>{{$v->updated_at}}</td>
				    <td>
				    	<abbr title="{{$v->pdesc}}">
				    	<p style="width:200px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">
				    	{{$v->gdesc}}
				   	 </p>
				    </abbr>
				    </td>
				    <td>               
                                   
                                   @if($v->status == 1)新品
                                   @elseif($v->status == 2) 上架
                                   @else($v->status == 3) 下架
                                   @endif

                    </td>			  
				    <td>
						<a href="/admins/goods/{{$v->id}}/edit" class="btn btn-info">修改</a>
						<form action="/admins/goods/{{$v->id}}" method="post" style="display: inline-block;">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<input type="submit" value="删除" class="btn btn-danger" >
						</form>
						
				                   @if($v->status ==2)
                                   <a href="/admins/goods/{{$v->id}}/up" class="btn btn-info">上架</a>
                                  
                                   @elseif($v->status == 3)
						           <a href="/admins/goods/{{$v->id}}/down" class="btn btn-danger">下架</a>
						           @endif
						             			

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