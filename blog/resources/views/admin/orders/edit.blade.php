@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>订单修改</span>
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
        	<form class="mws-form" action="/admins/orders/{{$orders->id}}/edit" method="post">
        		{{ csrf_field() }}
                {{ method_field('PUT')}}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">下单人</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="oid" ">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">收货人</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="rec">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">订单金额</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="sum">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品数量</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="num" ">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">收货地址</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="addr" ">
        				</div>
        			</div>
        			<div class="mws-form-row">
                    				<label class="mws-form-label">收货状态</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio"> <label>下单成功</label></li>
                                            
                    						<li><input type="radio"> <label>确认收货</label></li>
                                            
                    						<li><input type="radio"> <label>收货完成</label></li>
                    					   
                    					</ul>
                    				</div>
                    </div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">电话</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="tel" >
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">买家留言</label>
        				<div class="mws-form-item">
        					<textarea name="umsg" class="small">
        						{{ old('umsg') }}
        					</textarea>
        				</div>
        			</div>
        			
        		</div>
        		<div class="mws-button-row">
        			<input type="submit" value="修改" class="btn btn-success">
        			<input type="reset" value="重置" class="btn btn-info">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection