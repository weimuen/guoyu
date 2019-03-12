@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>管理员列表</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_0_length" class="dataTables_length"><label>显示 <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">5</option><option value="25">10</option><option value="50">15</option><option value="100">20</option></select> 条</label></div><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>搜索: <input type="text" aria-controls="DataTables_Table_0"></label></div><table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                   <tr>
                   		<th>ID</th>
                   		<th>姓名</th>
                   		<th>密码</th>
                   		<th>登录次数</th>
                   		<th>最后登录使劲</th>
                   		<th>状态</th>
                   		<th>操作</th>
                   </tr>
                </thead>
                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            		<tr class="odd">
                    <td class="  sorting_1">Gecko</td>
                    <td class=" ">Firefox 1.0</td>
                    <td class=" ">Win 98+ / OSX.2+</td>
                    <td class=" ">1.7</td>
                    <td class=" ">A</td>
                    <td class=" ">a</td>
                    <td>
                        <a href="/admins/admins/1/edit" class="btn btn-info">修改</a>
                      <form action="" method="post"style="display: inline-block;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <input type="submit" value="删除" class="btn btn-danger" >
                        </form>
                </td>
            </tr>

                    </tr></tbody></table><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_two_button" id="DataTables_Table_0_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="DataTables_Table_0_previous" aria-controls="DataTables_Table_0">Previous</a><a class="paginate_enabled_next" tabindex="0" role="button" id="DataTables_Table_0_next" aria-controls="DataTables_Table_0">Next</a></div></div>
        </div>
    </div>
	
@endsection('content')