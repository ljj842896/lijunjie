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
                         <span><i class="icon-pencil"></i>个人信息</span>
                    </div>

                         <form class="mws-form" action="/Admin/revise" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">用户名:</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="user_name" value="{{session('data')->user_name}}"  style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none">
                                        </div>
                                   </div>

                                   <div class="mws-form-row" >
                                        <label class="mws-form-label">个人头像:</label>
                                        <img src="/uploads/{{session('data')->user_pic}}" style="width: 100px">
                                        <div class="mws-form-item" style="width: 200px">
                                              <input type="file" class="small"  name="user_pic" style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none;">
                                        </div>
                                   </div>

                                   <div class="mws-form-row">
                                        <label class="mws-form-label">邮箱:</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="email" value="{{session('data')->email}}"
                                             style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none">
                                        </div>
                                   </div>
                               
                                   

                                   <div class="mws-form-row">
                                        <label class="mws-form-label">手机号:</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="phone"
                                             value="{{session('data')->phone}}" style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none">
                                        </div>
                                   </div>
                                
                                   <div class="mws-form-row">
                                    <label class="mws-form-label">地址 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="user_address" rows="" cols="" class="required large" value="{{session('data')->phone}}" style="BORDER-TOP-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; BORDER-BOTTOM-STYLE: none">{{session('data')->phone}}</textarea>
                                    </div>
                                </div>
                                   
                                



                          <div class="mws-form-row">
                            <label class="mws-form-label">性别:</label>
                            <div class="mws-form-item clearfix">
                              <ul class="mws-form-list inline">
                                <li><input type="radio" name="sex" @if(session('data')->qx==0) checked @else @endif value="0"> <label>保密</label></li>
                                <li><input type="radio" name="sex" @if(session('data')->qx==1) checked @else @endif  value="1"> <label>男</label></li>
                                <li><input type="radio" name="sex" value="2" @if(session('data')->qx==1) checked @else @endif> <label>女</label></li>
                                
                              </ul>
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