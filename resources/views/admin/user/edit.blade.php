@extends('index')
@section('content')


<!--内容区-->
                    		 
                             
 <div class="container">                
 <div class="mws-panel grid_8" >                


 	               @if (count($errors) > 0)
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
				    @endif
    <div class="mws-panel-body no-padding">         
	               <div class="mws-panel-header" style="height: 50px">
                    	<span><i class="icon-pencil"></i>用户修改</span>
                    </div>

                    	<form class="mws-form" action="/Admin/user/{{$data->user_id}}" method="post" enctype="multipart/form-data">
                    		   {{ csrf_field() }}
                                 {{ method_field('PUT') }}
                            
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="user_name" value="{{$data->user_name}}">
                    				</div>
                    			</div>
                    			

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">邮箱:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="email"
                                             value="{{$data->email}}">
                    				</div>
                    			</div>
                               
                    			

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">手机号:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="phone" value="{{$data->phone}}">
                    				</div>
                    			</div>
                                
                                <div class="mws-form-row">
                    				<label class="mws-form-label">地址:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="user_address" value="{{$data->user_address}}">
                    				</div>
                    			</div>
                                
                                <div class="mws-form-row" >
                    				<label class="mws-form-label">图片:</label>
                                        <div class="mws-form-item" style="width: 200px">
                                        <img src="/uploads/{{$data->user_pic}}" style="width:80px;height: 50px">
                    		    <input type="file" class="small" name="user_pic">
                    				</div>
                    			</div>
                                
							                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">性别:</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" name="sex" checked value="0"> <label>保密</label></li>
                    						<li><input type="radio" name="sex" value="1"> <label>男</label></li>
                    						<li><input type="radio" name="sex" value="2"> <label>女</label></li>
                    						
                    					</ul>
                    				</div>
                    			</div>
                    			
                                <div class="mws-form-row">
                    				<label class="mws-form-label">权限:</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" name="qx" checked value="1"> <label>超级管理</label></li>
                    						<li><input type="radio" name="qx" value="2"> <label>管理员</label></li>
                    						<li><input type="radio" name="qx" value="3"> <label>普通用户</label></li>
                    						
                    					</ul>
                    				</div>
                    			</div>
                    		
                    		</div>
                    		<div class="mws-button-row text-center">
                    			<input type="submit" value="确认修改" class="btn btn-success">
                    			
                    		</div>
                         
                    	</form>
                    </div>
             </div>
   </div>




<!--end内容区-->
@endsection