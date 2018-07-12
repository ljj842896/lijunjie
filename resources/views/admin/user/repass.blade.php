@extends('index')
@section('content')


<!--内容区-->
                    		 
                             
 <div class="container">                
 	                  
 <div class="mws-panel grid_8" >                

    <div class="mws-panel-body no-padding">         
                    <div class="mws-panel-header" style="height: 50px">
                         <span><i class="icon-pencil"></i>修改密码</span>
                    </div>

                         <form class="mws-form" action="/Admin/reset" method="post" >
                              {{ csrf_field() }}
                              <div class="">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">用户名:</label>
                                         <div class="mws-form-item">
                                         {{session('data')->user_name}}
                                         </div>
                                   </div>
                                  <div class="mws-form-row">
                                        <label class="mws-form-label">原密码:</label>
                                        <div class="mws-form-item">
                                             <input type="password" class="small" name="password" value=""  style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none">
                                        </div>
                                   </div>

                                    <div class="mws-form-row">
                                        <label class="mws-form-label">新密码:</label>
                                        <div class="mws-form-item">
                                             <input type="password" class="small" name="newpassword" value=""  style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none">
                                        </div>
                                   </div>
                                                                
                    		  <input type="hidden" name="user_id" value="{{session('data')->user_id}}">
                    		</div>
                    		<div class="mws-button-row text-center">
                                   <input type="submit" value="修改" class="btn btn-success">
                                   
                    			 <a href="" class="btn btn-success">退出</a> 
                              </div>
                         </form>
                    </div>
             </div>
   </div>

<!--end内容区-->
@endsection