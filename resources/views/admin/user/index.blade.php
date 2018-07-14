@extends('index')

@section('content')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header" style="height: 50px">
                    	<span><i class="icon-users"></i>用户列表</span>
                    </div>
                    <div class="mws-panel-body no-padding" style="display: online;">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>电邮</th>
                                    <th>性别</th>
                                    <th>电话</th>
                                    <th>头像</th>
                                    <th>地址</th>
                                    <th>权限</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($users as $k => $y)
                                <tr>
                                    <td>{{ $y->user_id}}</td>
                                    <td>{{ $y->user_name}}</td>
                                    <td>{{ $y->email}}</td>
                                    <td>
                                    	@if($y->sex == 0)
                                          保密
                                        @elseif($y->sex == 1)
                                          男 
                                        @elseif($y->sex == 2)
                                         女
                                        @endif
                                    </td>
                                    <td>{{ $y->phone}}</td>
                                    <td>
                                        <img src="/uploads/{{$y->user_pic}}" style="width: 80px;height: 40px">
                                    </td>
                                    <td>{{ $y->user_address}}</td>
                                    <td>
                                    	@if($y->qx == 1)
                                          超管
                                        @elseif($y->qx == 2)
                                          管理员
                                        @elseif($y->qx == 2)
                                          普通用户
                                        @endif
                                    </td>

                                    <td width="100px">

                                        <span class="btn-group">
                                           
                                          <a href="/Admin/user/{{$y->user_id}}/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
                                          <form action="/Admin/user/{{$y->user_id}}" method="post">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-small"><i class="icon-trash"></i></button></form>
                                        </span>
  
                                    </td>        
                                </tr>
                                     
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection