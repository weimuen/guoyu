@extends('admin.layout.index')

@section('content') 
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>站点管理</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="form_layouts.html">
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站标题</label>
        				<div class="mws-form-item">
        					<input type="text" class="small">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">关键词</label>
        				<div class="mws-form-item">
        					<input type="text" class="small">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站描述</label>
        				<div class="mws-form-item">
        					<input type="text" class="small">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站版权</label>
        				<div class="mws-form-item">
        					<input type="text" class="small">
        				</div>
        			</div>
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站状态</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" checked> <label>开</label></li>
        						<li><input type="radio"> <label>关</label></li>
        						
        					</ul>
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">网站logo</label>
        				<div class="mws-form-item">
        					<input type="file" class="small">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">预览</label>
        				<div class="mws-form-item">
        					<img src="/home/images/his_5.jpg" alt="">
        				</div>
        			</div>
        		</div>
        		<div class="mws-button-row">
        			<input type="submit" value="添加" class="btn btn-danger">
        			<input type="reset" value="重置" class="btn btn-info">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection('content')