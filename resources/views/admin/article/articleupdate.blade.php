@extends('index')
@section('content')
<!--内容区-->
                    		 
<script type="text/javascript" src="/u/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
<script type="text/javascript" src="/u/utf8-php/ueditor.all.js"></script>                         
 <div class="container">                
 <div class="mws-panel grid_8" >                
 
    <div class="mws-panel-body no-padding">  
                   <div class="box a"></div>       
	               <div class="mws-panel-header" style="height: 50px">
                    	<span><i class="icon-pencil"></i>文章查看</span>
                    </div>
                    	<form class="mws-form" action="/Admin/articleupdate" method="post" enctype="multipart/form-data">
                         {{csrf_field()}}
                    		<div class="mws-form-inline">
                                <input type="hidden" name="id" value="{!!$articles['id']!!}">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">文章标题:</label>
                    				<div class="mws-form-item">
                    					<input style="width: 660px;border: 0px;height: 50px; font-size: 20px" type="text" class="small" name="article"value="{!!$articles['article']!!}" readonly="readonly">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    			 <label class="mws-form-label">文章内容:</label>
                    			 <div class="mws-form-item">
                                  <script id="container" class="small" name="content" style="width:660px;height: 300px" type="text/plain">{!!$articles['content']!!}</script>
                                        <!-- 实例化编辑器 -->
                                        <script type="text/javascript">
                                            var ue = UE.getEditor('container',{
                                              toolbars:[
                                                            ['fullscreen', 'snapscreen','italic','underline','blockquote','selectall','date','time','fontfamily','fontsize','simpleupload','insertimage','emotion','spechars','searchreplace','map','forecolor','backcolor','wordimage','touppercase','music','inserttable','customstyle','indent', 'source', 'undo', 'redo', 'bold']
                                                       ]
                                            });
                                        </script>
                                      </div>
                                  </div>
                    		<div class="mws-button-row text-center">
                    		
                                   <button type="submit" class="btn">确认修改</button>
                    			  <p class="btn" id="scroll_a">返回顶部</p>
                    		</div>
                    	</form>
                    </div>
             </div>
   </div>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#scroll_a').click(function(){$('html,body').animate({scrollTop:$('.a').offset().top}, 800);});
     
    });
</script>



<!--end内容区-->
@endsection
