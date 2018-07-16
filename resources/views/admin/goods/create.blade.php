@extends('index')

@section('content')
 
<script type="text/javascript" src="/u/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
<script type="text/javascript" src="/u/utf8-php/ueditor.all.js"></script>
 


<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
		<span>
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;"> 商品添加</font>
			
			</font>
		</span>
	</div>
	 
 	<div class="mws-panel-body no-padding">
	<form class="mws-form" action="/Admin/goods" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
     		<div class="mws-form-inline">
     			<div class="mws-form-row">
     				<div class="mws-form-item">
                              商品名:　<input type="text" name="goods_name" class="small"  value="{{old('goods_name')}}"><br><br>
 
                                <label class="mws-form-label"> 商品分类:</label>
                                      <div class="mws-form-item">
                                        <select  name="cat_id">
                                            <option value="">--请选择--</option>
                                            @foreach($cates as $v)
                                            <option value="{{$v -> cat_id}}">{{$v -> cat_name}}</option>
                                            @endforeach
                                        </select><br><br>
                                        </div>

                                <label class="mws-form-label"> 商品颜色:</label>
                                      <div class="mws-form-item">
                                        <select  name="goods_attr_color">
                                            <option value="">--请选择--</option>
                                            
                                            <option value="1">玉米黄</option>
                                            <option value="2">象牙白</option>
                                            <option value="3">橘红</option>
                                            <option value="4">火焰红</option>
                                            <option value="5">胭脂红</option>
                                            <option value="6">珍珠黑</option>
                                            <option value="7">天青蓝</option>
                                            
                                        </select><br><br>
                                      </div>

                                                                                            
                                         
                              尺 &nbsp; &nbsp;&nbsp; 寸 : <input name="goods_attr_rule" type="text" class="small" value="{{old('goods_attr_rule')}}"><br><br>
                              关键字:　<input name="keywords" type="text" name="keywords" class="small" value="{{old('keywords')}}"><br><br>
                              库　存:　<input name="goods_number" type="text" class="small" value="{{old('goods_number')}}"><br><br>
                              市场价:　<input name="market_price" type="text" class="small" value="{{old('market_price')}}"><br><br>
     					                本店售价:<input name="shop_price" type="text" class="small" value="{{old('shop_price')}}"><br><br>
                              宝贝图片： 
                                        <div class="fileinput-holder" style="position: absolute;left: 200px;top: 400px"> <span class="fileinput-btn btn" type="button" style="display:block; overflow: hidden; position: absolute; top: 0; right: 0; cursor: pointer;">代表图片<input name="goods_img" type="file" style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span></div> 

                                        <div class="fileinput-holder" style="position: absolute;left: 400px;top: 400px"> <span class="fileinput-btn btn" type="button" style="display:block; overflow: hidden; position: absolute; top: 0; right: 0; cursor: pointer;">宝贝相册<input name="img_url[]" type="file" multiple style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span></div> 
                                       <!-- {{old('goods_brief') ? old('goods_brief') : '请介绍您的宝贝...'}}  -->
                                        <br><br>
                                        <br><br>
                                        商品描述:

                                       <!-- 加载编辑器的容器 -->
                                        <script id="container" class="small" name="goods_brief" style="width: 80%;height: 150px" type="text/plain">
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
                                
                              <div class="mws-form-row">
                                            <label class="mws-form-label">是否上架： <span class="required">*</span></label>
                                     <div class="mws-form-item">
                                                <ul class="mws-form-list inline">
                                                    <li><input type="radio" id="sn_yes" name="goods_top" class="required" value="y" checked> <label for="sn_yes">Yes</label></li>
                                                    <li><input type="radio" id="sn_no" name="goods_top" value="n"> <label for="sn_no">No</label></li>
                                                </ul>
                                                <label class="error plain" generated="true" for="sn" style="display:none"></label>
                                   </div>
                              </div>

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
 