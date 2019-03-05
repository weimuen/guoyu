@extends('admin.layout.index')

@section('content')

<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>商品修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<!-- 显示错误信息 -->
        	
        	<form class="mws-form" action="/admins/goods/{{$goods->id}}" method="post">
        		{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品名称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="gname">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品类别</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="tid">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品价格</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="price">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">库存</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="stock" >
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">添加图片</label>
        				<div class="mws-form-item">
        					<input type="file" class="small" name="gpic">
                            <img src="/public/{{$goods->gpic}}" alt="">                            
        				</div>
        			</div>
        			<div class="mws-form-row">
                    				<label class="mws-form-label">状态</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio"> <label>新品</label></li>
                    						<li><input type="radio"> <label>上架></label></li>
                    						<li><input type="radio"> <label>下架</label></li>
                    					
                    					</ul>
                    				</div>
                    </div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品描述</label>
        				<div class="mws-form-item">
        					<textarea name="gdesc" class="small">
        						
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

