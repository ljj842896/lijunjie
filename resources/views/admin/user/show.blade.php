@extends('index')
@section('content')


<!--内容区-->
                    		 
                             
 <div class="container">                
 <div class="mws-panel grid_8" >                

    <div class="mws-panel-body no-padding">         
	               <div class="mws-panel-header" style="height: 50px">
                    	<span><i class="icon-pencil"></i>用户信息</span>
                    </div>

                    	<form class="mws-form" action="/Admin/user/{{$data->user_id}}" method="post" enctype="multipart/form-data">
                    		<div class="mws-form-inline">
                                <div class="mws-form-row" >
                    				<label class="mws-form-label">用户头像:</label>
                                        <div class="mws-form-item" style="width: 200px">
                                        <img src="/uploads/{{$data->user_pic}}" style="width:100px;height: 70px">
                    				</div>
                    			</div>
                            </div>
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="user_name" value="{{$data->user_name}}" readonly="readonly">
                    				</div>
                    			</div>
                    			

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">邮箱:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="email"
                                             value="{{$data->email}}" readonly="readonly">
                    				</div>
                    			</div>
                               
                    			

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">手机号:</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="phone" value="{{$data->phone}}" readonly="readonly">
                    				</div>
                    			</div>
                                
                                <div class="mws-form-row">
                                    <label class="mws-form-label">地址 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="user_address" rows="" cols="" class="required large" readonly="readonly">{{$data->user_address}}</textarea>
                                    </div>
                                </div>
                                
                                
							                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">性别:</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    					@if(session('data')->sex==0)
                    						<li><input type="radio" name="sex" value="0" checked > <label>保密</label></li>
                                            @elseif(session('data')->sex==1)
                    						<li><input type="radio" name="sex" value="1" checked> <label>男</label></li>
                                            @elseif(session('data')->sex==2)
                    						<li><input type="radio" name="sex" value="2" checked> <label>女</label></li>
                    						@endif
                    					</ul>
                    				</div>
                    			</div>
                    			
                                <div class="mws-form-row">
                    				<label class="mws-form-label">权限:</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						@if(session('data')->qx==1)
                    						<li><input type="radio" name="qx" checked > <label>超管</label></li>
                                            @elseif(session('data')->qx==2)
                    						<li><input type="radio" name="qx"checked> <label>管理员</label></li>
                                            @elseif(session('data')->qx==3)
                    						<li><input type="radio" name="qx" value="2" checked> <label>普通用户</label></li>
                    						@endif
                    					
                    					</ul>
                    				</div>
                    			</div>
                    		
                    		</div>
                    		<div class="mws-button-row text-center">
                    			<a href="/Admin/user" class="btn btn-primary">返回列表</a>
                    			
                    		</div>
                         
                    	</form>
                    </div>
             </div>
   </div>

<!--end内容区-->
@endsection