@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>作者专区</span>
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
        	<form class="mws-form" action="/admins/auths" method="post" enctype="multipart/form-data">
        		{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">作者姓名</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="aname" value="{{ old('aname')}}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">作者介绍</label>
        				<div class="mws-form-item">
        					<textarea name="content"cols="90" rows="10">{{ old('content') }}</textarea>
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">头像</label>
        				<div class="mws-form-item">
        					<input type="file" class="small" name="apic">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">性别</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" name="sex" value="w" checked> <label>女</label></li>
        						<li><input type="radio" name="sex" value="m"> <label>男</label></li>
        						
        					</ul>
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
@endsection