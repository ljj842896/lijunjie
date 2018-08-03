@extends('index')
@section('content')
    <script type="text/javascript" src="/u/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/u/utf8-php/ueditor.all.js"></script>

<form action="/article" method="post">
    {{ csrf_field() }}
    文章标题:<input type="text" name="title"><br>
    文章作者:<input type="text" name="author"><br>
    <!-- 加载编辑器的容器 -->
    <script id="container" class="small" name="article_content" style="" type="text/plain">
                                          这里写你的初始化内容
                                        </script>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                ['fullscreen', 'snapscreen','italic','underline','blockquote','selectall','date','time','fontfamily','fontsize','simpleupload','insertimage','emotion','spechars','searchreplace','map','forecolor','backcolor','wordimage','touppercase','music','inserttable','customstyle','indent', 'source', 'undo', 'redo', 'bold']
            ]
        });
    </script>
    <input type="submit" value="提交">
</form>
@endsection