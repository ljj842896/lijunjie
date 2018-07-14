@extends('index')

@section('content')
<div class="mws-panel grid_8">
                    <div class="mws-panel-header" style="height: 50px">
                        <span><i class="icon-users"></i>用户列表</span>
                    </div>
                    <form action="/Admin/serach" method="get"> 
                          
                        
                            <label>用户名：
                                <input type="text" name="user_name">
                                <input type="submit" class="btn btn-inverse" value="搜索">
                            </label>
                     
                    </form>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th> 
                                        <a href="" class="btn btn-danger">批删</a>
                                    </th>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>电邮</th>
                                    <th>性别</th>
                                    <th>电话</th>
                                    <th>头像</th>
                                    <th>权限</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $k => $y)
                                <tr>
                                    <td class="checkbox-column">
                                        <input type="checkbox">
                                    </td>
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
                                  
                                    <td>
                                        @if($y->qx == 1)
                                          超管
                                        @elseif($y->qx == 2)
                                          管理员
                                        @elseif($y->qx == 3)
                                          普通用户
                                        @endif
                                    </td>

                                 <td>

                                    <a href="/Admin/user/{{$y->user_id}}/edit" class="btn btn-warning">修改</a>

                                    <form action="/Admin/user/{{$y->user_id}}" method="post" style="display: inline;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-danger" value="删除" onclick="return confirm('确认删除吗？')">
                                    </form>

                                    <a href="/Admin/user/{{$y->user_id}}" class="btn btn-info">查看</a>
                                    </td>

                                </tr>
                                     
                                @endforeach
                            </tbody>
                        </table>
                        <div style="position: absolute;left: 400px;top: 380px">
                            {!! $users->appends(['user_name'=>$user_name])->render() !!}
                        </div>
                    </div>
                </div>
@endsection