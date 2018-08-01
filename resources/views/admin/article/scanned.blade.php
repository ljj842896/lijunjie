@extends('index')
@section('content')

<div class="mws-panel grid_8">
    <div class="mws-panel-header" style="height:46px">
        <span>
            <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">文章列表</font>
            
            </font>
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table" style="display:white-space nowrap;text-align: left;">
            <thead>
                <tr>
                    <th style="width: 80px">文章ID</th>
                    <th style="width: 410px">文章标题</th>
                    <th style="width: 240px">发布时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody >
              
              @foreach ($data as $k => $v)

                <tr >
                    <td>{{$v['id']}}</td>
                    <td style="overflow: hidden; white-space: nowrap;text-overflow: ellipsis;">{{$v['article']}}</td>
                    <td>{{$v['created_at']}}</td>
                    <td>
                        <a href="/Admin/articleupdate/{{$v['id']}}" class="btn btn-warning" style="display:inline;">修改</a>
               
                         <a href="/Admin/articledel/{{$v['id']}}"><button type="" class="btn btn-danger" onclick="return confirm('确定删除吗?')">删除</button></a> 
                 
                        <a href="/Admin/articlelook/{{$v['id']}}" class="btn btn-info">查看内容</a>
                    </td>
                </tr>
                 @endforeach
            
            </tbody>
        </table>
        <div style="position:absolute;left:45%;top:450px">
        
        </div>
    </div>
</div>


@endsection