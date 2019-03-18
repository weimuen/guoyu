@extends('admin.layout.index')

@section('content') 
	 <div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>站点管理</span>
        </div>
        <div class="mws-panel-body no-padding">
            <!-- 显示错误信息 -->
            @if (count($errors) > 0)
                <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        	<form class="mws-form" action="/admins/webset" method="post">
               
                {{ csrf_field() }}
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标题</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="title" value="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">关键字</label>
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
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="提交" class="btn btn-warning">
                    
                </div>
            </form>
        </div>    	
    </div>


@endsection