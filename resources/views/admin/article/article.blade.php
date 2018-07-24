@extends('index')

@section('content')
 
<script type="text/javascript" src="/u/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
<script type="text/javascript" src="/u/utf8-php/ueditor.all.js"></script>
 


<div class="mws-panel grid_8">
    <div class="mws-panel-header" style="height:46px">
        <span>
            <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> 文章名称</font>
            
            </font>
        </span>
    </div>
     
    <div class="mws-panel-body no-padding">
    <form class="mws-form" action="/Admin/artcreate" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <div class="mws-form-item">
                              文章名:　<input type="text" name="article" class="small"  value="{{old('goods_name')}}"><br><br>
 
            
                                        文章内容:

                                       <!-- 加载编辑器的容器 -->
                                        <script id="container" class="small" name="content" style="width: 80%;height: 150px" type="text/plain">
                                          请填写文章的内容
                                        </script>
                                        <!-- 实例化编辑器 -->
                                        <script type="text/javascript">
                                            var ue = UE.getEditor('container',{
                                              toolbars: [
                                                            ['fullscreen', 'snapscreen','italic','underline','blockquote','selectall','sdate','time','fontfamily','fontsize','simpleupload','insertimage','emotion','spechars','searchreplace','map','forecolor','backcolor','wordimage','touppercase','music','inserttable','customstyle','indent', 'source', 'undo', 'redo', 'bold']
                                                  ]
                                            });
                                        </script>
                                
                            

                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="提交" class="btn btn-danger"></font></font>
                <input type="reset" value="Reset" class="btn ">
            </div>
  </form>
 
</div>
</div>



 
@endsection
