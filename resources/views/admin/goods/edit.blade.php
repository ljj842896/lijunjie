@extends('index')

@section('content')
 
 


<div class="mws-panel grid_8">
	<div class="mws-panel-header" style="height:46px">
		<span>
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;"> 商品添加</font>
			
			</font>
		</span>
	</div>
	 
 	<div class="mws-panel-body no-padding">
	<form class="mws-form" action="/Admin/goods/{{$good -> goods_id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
     		<div class="mws-form-inline">
     			<div class="mws-form-row">
     				<div class="mws-form-item">
                              商品名:　<input type="text" name="goods_name" class="small"  value="{{$good -> goods_name}}"><br><br>
 
                                <label class="mws-form-label"> 商品分类:</label>
                                      <div class="mws-form-item">
                                        <select  name="cat_id">
                                            <option value="">--请选择--</option>
                                            @foreach($cates as $v)
                                            <option value="{{$v -> cat_id}}" {{$v -> cat_id == $good -> cat_id ? 'selected' : ''}}>{{$v -> cat_name}}</option>
                                            @endforeach
                                        </select><br><br>
                                        </div>

                                <label class="mws-form-label"> 商品颜色:</label>
                                      <div class="mws-form-item"> 
                                        <select  name="goods_attr_color" multiple>
                                            <option value="">--请选择--</option>
                                            
                                        <option value="玉米黄">玉米黄</option>
                                            <option value="象牙白">象牙白</option>
                                            <option value="橘红">橘红</option>
                                            <option value="火焰红">火焰红</option>
                                            <option value="胭脂红">胭脂红</option>
                                            <option value="珍珠黑">珍珠黑</option>
                                            <option value="天青蓝">天青蓝</option>
                                            <option value="深绿色">深绿色</option>
                                            <option value="紫红色">紫红色</option>
                                            <option value="柠檬黄">柠檬黄</option>
                                            <option value="绿松色">绿松色</option>
                                            <option value="紫红">紫红</option>
                                            <option value="鲜绿">鲜绿</option>
                                            <option value="鲜红色">鲜红色</option>
                                            <option value="浅黄色">浅黄色</option>
                                            <option value="天蓝色">天蓝色</option>
                                        </select><br><br>
                                      </div>

                                                                                            
                                         
                              尺&nbsp;&nbsp; 寸 :<input name="goods_attr_rule" type="text" class="small" value="{{ $good -> goods_attr_rule }}"><br><br>
                              关键字:　<input name="keywords" type="text" name="keywords" class="small" value="{{ $good -> keywords }}"><br><br>
                              库　存:　<input name="goods_number" type="text" class="small" value="{{ $good -> goods_number }}"><br><br>
                              市场价:　<input name="market_price" type="text" class="small" value="{{ $good -> market_price }}"><br><br>
     					                本店售价:<input name="shop_price" type="text" class="small" value="{{ $good -> shop_price }}"><br><br>
                              宝贝图片： 
                                        <div class="fileinput-holder" style="position: absolute;left: 200px;top: 450px"> <span class="fileinput-btn btn" type="button" style="display:block; overflow: hidden; position: absolute; top: 0; right: 0; cursor: pointer;">代表图片<input name="goods_img" type="file" style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span></div> 

                                        <div style="width: 60px; height: 60px; position: absolute;left: 250px;top: 450px"><img src="/goods_img/{{$good -> goods_img}}"></div>

                                         
                                       
                                        <br><br>
                                        <br><br>
                                        商品描述:<textarea name="goods_brief" style="width: 55%" rows="" cols="" class="required large">{{$good -> goods_brief}} {{old('goods_brief')}}                                           
 
                                       </textarea>
                                
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
	 <div style="position: absolute;left: 400px;top: 380px">
	 	
	 </div>
</div>
</div>



 
@endsection
 