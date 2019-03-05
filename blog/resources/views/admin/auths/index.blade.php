@extends('admin.layout.index')

@section('content')

    <div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> 作者专区列表 </span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_0_length" class="dataTables_length"><label>显示 <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> 条</label></div><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>搜索: <input type="text" aria-controls="DataTables_Table_0"></label></div>
            <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>作者姓名</th>
                        <th>性别</th>
                        <th>作品名称</th>
                        <th>作品价格</th>
                        <th>作者介绍</th>
                        <th>头像</th>
                        <th>作品图片</th>
                        <th>操作</th>         
                    </tr>
                </thead>
            	<tbody>
		        	
		            <tr>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
						<td>
							<form action="" method="">
								
								<input type="submit" value="删除">
							</form>
						</td>
		            </tr>
					
		        </tbody>
           </table>
            	<div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_two_button" id="DataTables_Table_0_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="DataTables_Table_0_previous" aria-controls="DataTables_Table_0">Previous</a><a class="paginate_enabled_next" tabindex="0" role="button" id="DataTables_Table_0_next" aria-controls="DataTables_Table_0">Next</a></div></div>
        </div>
    </div>

@endsection