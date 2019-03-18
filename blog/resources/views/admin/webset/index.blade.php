@extends('admin.layout.index')

@section('content') 
	 <div class="mws-panel grid_8">@extends('admin.layout.index')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>用户列表</span>
        </div>
        
  </form>
  <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
    <thead>
      <tr role="row">
          <th>ID</th>
          <th>标题</th>
          <th>关键字</th>
          <th>介绍</th>
          <th>Logo</th>
          <th>创建时间</th>
          <th>修改时间</th>
          <th>操作</th>
          
       </tr>
    </thead>
                
            <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($data as $k=>$v)
                <tr class="odd">
                    <td>{{$v->id}}</td>
                    <td>{{$v->title}}</td>
                    <td>{{$v->keywords}}</td>
                    <td>
                        <abbr title="{{$v->usersinfo->description}}">
                        {{$v->description}}
                        </abbr>
                    </td>
                    <td>{{$v->logo}}</td>
                    <td>{{$v->created_at}}</td>
                    <td>{{$v->updated_at}}</td>
                    <td>
                        <a href="/admins/users/{{$v->id}}/edit" class="btn btn-info">修改</a>
                        <form action="/admins/users/{{$v->id}}" method="post" style="display: inline-block;">
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
            
             
            </div>
            
        </div>
        </div>
    </div>
@endsection('content')
    	<div class="mws-panel-header">
        	<span>站点管理</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admins/webset" method="post">
                {{ method_field('PUT')}}
                {{ csrf_field() }}
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标题</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="title" value="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">keywords</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="keywords" value="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">介绍</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="description" value="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Logo</label>
                        <div class="mws-form-item">
                            <input type="file" class="small" name="logo" value="">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">统计</label>
                        <div class="mws-form-item">
                            <textarea name="baidu" class="small">
                          
                            </textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="提交" class="btn btn-warning">
                    <input type="reset" value="重置" class="btn btn-info">
                </div>
            </form>
        </div>    	
    </div>


@endsection