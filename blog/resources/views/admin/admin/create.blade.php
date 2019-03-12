@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>添加管理员</span>
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
        	<form class="mws-form" action="/admins/admins" method="post">
        		{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户名</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="uname" value="{{ old('uname') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">密码</label>
        				<div class="mws-form-item">
        					<input type="password" class="small" name="upwd">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">确认密码</label>
        				<div class="mws-form-item">
        					<input type="password" class="small" name="reupwd">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">手机号</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="tel" value="{{ old('tel') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">权限</label>
        				<div class="mws-form-item">
        					<input type="radio" name="auth" value="0">管理员
                            
                            <input type="radio" name="auth" value="1">普通用户
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">邮箱</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="email" value="{{ old('email') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">个人介绍</label>
        				<div class="mws-form-item">
        					<textarea name="description" class="small">
        						{{ old('descrition') }}
        					</textarea>
        				</div>
        			</div>
        			
        		</div>
        		<div class="mws-button-row">
        			<input type="submit" value="添加" class="btn btn-success">
        			<input type="reset" value="重置" class="btn btn-info">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection