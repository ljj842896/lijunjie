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
     		<div class="mws-form-inline">
     			<div class="mws-form-row">
     				<div class="mws-form-item">
                              商品名:　 {{good -> googs_id}}<br><br>
 
                                <label class="mws-form-label"> 商品分类:</label>
                                      <div class="mws-form-item">
                                        <select  name="cat_id">
                                            <option value="">--请选择--</option>
                                            @foreach($cates as $v)
                                            <option value="{{$v -> cat_id}}" {{$v -> cat_id == good -> car_id ? 'selected' : ''}}>{{$v -> cat_name}}</option>
                                            @endforeach
                                        </select><br><br>
                                        </div>

                                <label class="mws-form-label"> 商品颜色:</label>
                                      <div class="mws-form-item">
                                        <select  name="goods_attr_color">
                                            <option value="">--请选择--</option>
                                            
                                            <option value="1" {{good -> goods_attr_color == 1 ? 'selected' :''}}>玉米黄</option>
                                            <option value="2" {{good -> goods_attr_color == 2? 'selected' :''}}>象牙白</option>
                                            <option value="3" {{good -> goods_attr_color == 3? 'selected' :''}}>橘红</option>
                                            <option value="4" {{good -> goods_attr_color == 4? 'selected' :''}}>火焰红</option>
                                            <option value="5" {{good -> goods_attr_color == 5? 'selected' :''}}>胭脂红</option>
                                            <option value="6" {{good -> goods_attr_color == 6? 'selected' :''}}>珍珠黑</option>
                                            <option value="7" {{good -> goods_attr_color == 7? 'selected' :''}}>天青蓝</option>
                                            
                                        </select><br><br>
                                      </div>

                                                                                            
                                         
                              尺&nbsp;&nbsp; 寸 : {{good -> goods_attr_rule}} <br><br>
                              关键字:　 {{good -> keywords}} <br><br>
                              库　存:　 {{good -> goods_number}}<br><br>
                              市场价:　 {{good -> market_price}}<br><br>
     					                本店售价: {{good -> shop_price}}<br><br>
                              宝贝图片： 
                                        <div class="fileinput-holder" style="position: absolute;left: 200px;top: 400px"> <span class="fileinput-btn btn" type="button" style="display:block; overflow: hidden; position: absolute; top: 0; right: 0; cursor: pointer;">代表图片<img style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;" src="/goods_img/{{good -> goods_img}}"></span></div> 
 
                                        <br><br>
                                        <br><br>
                                        商品描述:<p name="goods_brief" style="width: 55%" rows="" cols="" class="required large"> {{good -> goods_brief}}                                           
 
                                       </p>
                                
                              <div class="mws-form-row">
                                            <label class="mws-form-label">是否上架： <span class="required">*</span></label>
                                     <div class="mws-form-item">
                                                <ul class="mws-form-list inline">
                                                    <li><input type="radio" id="sn_yes" name="goods_top" class="required" value="y" {{good -> goods_top == 'y' ? 'checked' : ''}}> <label for="sn_yes">Yes</label></li>
                                                    <li><input type="radio" id="sn_no" name="goods_top" value="n" {{good -> goods_top == 'n' ? 'checked' : ''}}> <label for="sn_no">No</label></li>
                                                </ul>
                                                <label class="error plain" generated="true" for="sn" style="display:none"></label>
                                   </div>
                              </div>

     				</div>
     			</div>
     		</div>
     	 
	 <div style="position: absolute;left: 400px;top: 380px">
	 	
	 </div>
</div>
</div>



 
@endsection
 