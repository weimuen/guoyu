@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>分类列表</span>
        </div>
         <div class="mws-panel-body no-padding">
  <form action="/admins/cates" method="get">
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
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>分类名称</th>
                        <th>所属分类ID</th>
                        <th>分类路径</th>
                        <th>状态</th>
                        <th>操作</th>

                    </tr>
                </thead>
                <tbody> 
                	@foreach($cates_data as $k=>$v)
                	<tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->cname }}</td>
                        <td>{{ $v->pid }}</td>
                        <td>{{ $v->path }}</td>
                        <td>{{ $v->status == 1 ? '激活' : '未激活' }}</td>
                        <td>
							<a href="/admins/cates/create/{{ $v->id }}" class="btn btn-info">添加子分类</a>
                        	<form action="/admins/cates/{{ $v->id }}" method="post" style="display:inline-block;">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
                        		<input type="submit" value="删除" class="btn btn-danger">
                        	</form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="page_page">
         
          
            </div>
        </div>
    </div>
	
@endsection('content')