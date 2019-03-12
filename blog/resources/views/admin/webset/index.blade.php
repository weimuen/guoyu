@extends('admin.layout.index')

@section('content') 
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>站点管理</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="" method="post">
                {{ method_field('PUT')}}
                {{ csrf_field() }}
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标题</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="title" value="{{config('web.title')}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">keywords</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="keywords" value="{{config('web.keywords')}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">介绍</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="description" value="{{config('web.description')}}">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Logo</label>
                        <div class="mws-form-item">
                            <input type="file" class="small" name="logo" value="">
                            <img src="/Uploads/webset/{{config('web.logo')}}" alt="">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">统计</label>
                        <div class="mws-form-item">
                            <textarea name="baidu" class="small">
                          {{config('web.baidu')}}  
                            </textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="修改" class="btn btn-warning">
                    <input type="reset" value="重置" class="btn btn-info">
                </div>
            </form>
        </div>    	
    </div>
@endsection('content')