@extends('index')
@section('content')
	<a href="/article" class="btn btn-info">返回</a>
    <a href="/article/create" class="btn btn-success">添加文章</a>
    <form action="/article/{{ $v -> id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    标题:<input type="text" value="{{ $v -> title }}" name="title"><br>
    作者:<input type="text" value="{{ $v -> anthor }}" name="anthor"><br>
    内容: <textarea id="" cols="30" rows="10" name="content">{!! $v -> content !!}</textarea><br>
        <input type="submit" value="提交">
    </form>
@endsection