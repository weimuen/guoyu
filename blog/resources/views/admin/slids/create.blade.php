@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
	    	<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加轮播图</font></font></span>
	    </div>
	    <div class="mws-panel-body no-padding">
	    	 @if (count($errors) > 0)
			    <div class="mws-form-message error">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
	    	<form class="mws-form" action="/admins/slids" method="post" enctype="multipart/form-data">
	    		{{ csrf_field() }}
	    		<div class="mws-form-inline">
	    			<div class="mws-form-row">
	    				<label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">轮播图名称</font></font></label>
	    				<div class="mws-form-item">
	    					<input type="text" class="small" name="sname" value="{{old('sname')}}">
	    				</div>
	    			</div>
	    			<div class="mws-form-row">
	    				<label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">链接地址</font></font></label>
	    				<div class="mws-form-item">
	    					<input type="text" class="small" name="surl" value="{{old('surl')}}">
	    				</div>
	    			</div>
	    			<div class="mws-form-row">
	    				<label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">轮播图片</font></font></label>
	    				<div class="mws-form-item">
	    					<input type="file" class="small" name="simg">
	    				</div>
	    			</div>
	    			
	    			
	    		</div>
	    		<div class="mws-button-row">
	    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="添加" class="btn btn-danger"></font></font>
	    			<input type="reset" value="重置" class="btn btn-info">
	    		</div>
	    	</form>
	    </div>    	
	</div>
@endsection('content')