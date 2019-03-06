@extends('admin.layout.index')


@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 轮播图列表</font></font></span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_0_length" class="dataTables_length"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示 </font></font><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option><option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option><option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option><option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option></select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 条</font></font></label></div><div class="dataTables_filter" id="DataTables_Table_0_filter"><label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索： </font></font><input type="text" aria-controls="DataTables_Table_0"></label></div><table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                    	<th>ID</th>
                    	<th>轮播图名称</th>
                    	<th>链接地址</th>
                    	<th>轮播图片</th>
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
						<img src="" alt="" style="width:100px">
				    </td>
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
             <div class="dataTables_paginate paging_two_button" id="DataTables_Table_0_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="DataTables_Table_0_previous" aria-controls="DataTables_Table_0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上一页</font></font></a><a class="paginate_enabled_next" tabindex="0" role="button" id="DataTables_Table_0_next" aria-controls="DataTables_Table_0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一页</font></font></a></div></div>
        </div>
    </div>

@endsection('content')

