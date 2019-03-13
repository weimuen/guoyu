@extends('admin.layout.index')


@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 轮播图列表</font></font></span>
        </div>
        <div class="mws-panel-body no-padding">
           <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                    	<th>ID</th>
                    	<th>轮播图标题</th>
                    	<th>链接地址</th>
                    	<th>轮播图片</th>
                    	<th>排序</th>
                    	<th>操作</th>
                    </tr>
                </thead>
                
           <tbody role="alert" aria-live="polite" aria-relevant="all">
				@foreach($data as $k=>$v)
				<tr class="odd">
				    <td>{{$v->id}}</td>
				    <td>{{$v->sname}}</td>
				    <td>{{$v->surl}}</td>
				    <td>
						<img src="/upload/public/{{$v->simg}}" alt="" style="width:100px">
				    </td>
				    <td>{{$v->order}}</td>

				    <td>
						<a href="/admins/slids/{{$v->id}}/edit" class="btn btn-info">修改</a>
						<form action="/admins/slids/{{$v->id}}" method="post" style="display: inline-block;">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<input type="submit" value="删除" class="btn btn-danger" >
						</form>
				    </td>
				</tr>
			 	@endforeach
			</tbody>
        </table>
             <div class="dataTables_paginate paging_two_button" id="DataTables_Table_0_paginate">
             
             </div>
           </div>
        </div>
    </div>

@endsection('content')

