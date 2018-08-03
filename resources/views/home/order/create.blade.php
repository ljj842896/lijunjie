@extends('home_index')
@section('content')
    <link rel="stylesheet" type="text/css" href="/h/css/new.order.css"/>
    <div class="pd_b40">
        <div class="wrap  ie78">
            <div class="mg_t20">
                <h4 class="nTitle">确认收货地址</h4>
                <ul id="d_address" class="comment_box detailed_address_list clearfix">
                    <input id="i_address_id"
                           type="hidden"
                           value="0">
                    <input 
                            id="i_area_id" type="hidden" value="">

                    @foreach($user_addr as $v)
                    <li class="address_box" name="ul_address_n" onclick="i_address_n_click(this);"
                        address_id="2176926" area_id="110228">
                        <input type="hidden" id="addressId" value="{{$v['id']}}">
                        <div class="contact_box"><span class=" inline col_666 f14">{{ $v['uname'] }}</span>&nbsp;&nbsp;<span
                                    class=" inline col_666 f14"></span></div>
                        <div class="detailed_address_box"><p title="北京市县密云县" class=" f14 col_666 mg_t15 w250 escp">{{$v['tel']}}</p>
                            <p class=" f12 col_666 lineH20">{{$v['address']}}</p></div>
                        <div class="edit_btn_box "><a class="inline col_link f14 mg_r15" href="javascript:;"
                                                      onclick="s_update_address('2176926','15115624521','北京市','县','密云县','110228','1','110000','110200','',this);">修改</a><a
                                    class="inline col_link f14" href="javascript:;"
                                    onclick="delAddress('2176926')">删除</a></div>
                        <span class="inline default_addres "><i class="inline spIcon"></i><span
                                    class="inline col_666 f14">默认地址</span></span>
                    </li>
                        @endforeach
                </ul>
            </div>
            <div class="mg_t40 none" id="couponListView">
                <h4 class="nTitle">支付方式</h4>
                <p class="f14 col_666 mg_t15 pd_l15">在线支付</p>
                <p class="f14 col_724 mg_t10 mg_b10 pd_l15"><i class="couponList_add inline cursor" viewstate="0"></i>使用红包（<span
                            class="col_666" id="conponinit">您当前共有0个红包可用</span>）</p>
                <div class="coupon_show none">
                    <ul class="coupon_tit_show clearfix pd_b5" id="couponTitShow">
                        <li class="current first">可用红包（<span id="ky_coupon">0</span>）</li>
                        <li class="">不可用红包（<span id="bky_coupon">0</span>）</li>
                    </ul>
                    <div class="coupon_show_box" id="couponShowBox">
                        <div class="coupon_item" id="couponListUsed"></div>
                        <div class="coupon_item" id="unCouponListUsed" style="display: none;"><p
                                    class="col_666 mg_t10 mg_l15">您目前无不可用红包</p></div>
                    </div>
                </div>
            </div>


            <!-- 订单商品遍历区start -->
            <div class="mg_t20">
                <h4 class="nTitle">确认订单</h4>
                <input type="hidden" id="fromId" value="shopcar"> <input type="hidden" id="design_ids"
                                                                         value="[1301775165060100001]"> <input
                        type="hidden" id="product_book_ids" value="[4643578]">

                <div class="clearfix mb_20">
                    <div class="comment_box  ">
                        <table cellspacing="0" cellpadding="0" class="sop_table1">
                            <tbody>
                            <tr>
                                <th align="left" colspan="2">
                                    <a>
                                        <span class="inline">商家：</span>
									 	<span id="J_product_name " class="inline col_666">
									 		必要商城
									 	</span>
                                    </a>
                                </th>
                                <th width="10%" align="center" class="none">可获积分</th>
                                <th width="38%" align="center" class="col_999">商品信息</th>
                                <th width="18%" align="center" class="col_999">单价</th>
                                <th width="20%" align="center" class="col_999">数量</th>
                                <th width="18%" align="center" class="col_999 none">包装</th>
                                <th width="4%" align="right" class="col_999"><span class="mg_r20">小计</span></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="suppliergroup" data-s="130177">
                    <div class="bg_fff">
                        <table cellspacing="0" cellpadding="0" class="sop_table1 tablecount">
                            <tbody>
							

							<!-- 遍历区 -->
							@if($data)
							@foreach($data as $v)
                            <tr>
                                <td width="10%" align="center"><a target="_blank"
                                                                  href="/good/{{$v['goods_id']}}">
                                        <img class="border" width="100" height="100" alt=""
                                             src="/goods_img/{{$v['goods_img']}}">
                                    </a></td>
                                <td width="8%" align="left">
                                    <div>
                                        <a target="_blank"
                                           href="http://www.biyao.com/products/1301775165060100001-0.html">
                                            <span class="col_333">{{$v['goods_name']}}</span>
                                        </a>

                                    </div>
                                    <input type="hidden" class="cart_id" value="{{$v['cart_id']}}" 尺寸:均码="{{$v['goods_attr_rule']}}">
 



                                    <div class="col_999 mg_t5 w300 escp">
                                        颜色:{{$v['goods_attr_color']}}<br>尺寸:{{$v['goods_attr_rule']}}
                                    </div>
                                    <!-- 无模型商品和低模普通商品签字 -->

                                    <!-- 普通高模商品签字 -->


                                    <div class="refund_tips"></div>


                                </td>
                                <td width="10%" align="center" class="none"><span class="col_333">0积分</span></td>
                                <td width="8%" align="center" class="col_333"><span class="col_666">￥{{$v['shop_price']}}</span></td>
                                <td width="10%" align="center" class="col_333 td_buy_num relative" data-weight="0.0"
                                    data-id="4643578" data-pt="0" data-pd="0" data-pc="0"
                                    designid="1301775165060100001"><span class="col_333" id="cart_counts">{{$v['cart_count']}}</span></td>
                                <td width="2%" align="center" class="col_333 none"><span class="col_333">普通包装</span>
                                    <span class="col_333">(免费)</span></td>
                                <td width="9%" align="right"><strong>￥<span class="cart_xjs">{{$v['shop_price']*$v['cart_count']}}</span></strong></td>
                            </tr>
							@endforeach
							@else
							<tr id="good_tr">
                                <td width="10%" align="center"><a id="goods_id" target="_blank"
                                                                  href="">
                                        <img class="border" id="goods_img" width="100" height="100" alt=""
                                             src="">
                                    </a></td>
                                <td width="8%" align="left">
                                    <div>
                                        <a target="_blank"
                                           href="http://www.biyao.com/products/1301775165060100001-0.html">
                                            <span class="col_333" id="goods_name"></span>
                                        </a>

                                    </div>
                                    <input type="hidden" class="sizeno" id="goods_attr_color" value="颜色:" 尺寸:均码="">


                                    <div class="col_999 mg_t5 w300 escp">
                                        颜色:<span id="goods_attr_color"></span><br>
                                        尺寸:<span id="goods_attr_rule"></span>
                                    </div>
                                    <!-- 无模型商品和低模普通商品签字 -->

                                    <!-- 普通高模商品签字 -->


                                    <div class="refund_tips"></div>


                                </td>
                                <td width="10%" align="center" class="none"><span class="col_333">0积分</span></td>
                                <td width="10%" align="center" class="col_333"><span class="col_666"><span id="shop_price">￥</span></span></td>
                                <td width="8%" align="center" class="col_333 td_buy_num relative" data-weight="0.0"
                                    data-id="4643578" data-pt="0" data-pd="0" data-pc="0"
                                    designid="1301775165060100001"><span class="col_333" id="cart_count"></span></td>
                                <td width="2%" align="center" class="col_333 none"><span class="col_333">普通包装</span>
                                    <span class="col_333">(免费)</span></td>
                                <td width="9%" align="right"><strong class="  mg_r20">￥<span id="zj"></span></strong></td>
                            </tr>
							@endif
                            </tbody>
							
                        </table>
                        <input type="hidden" send_type_value="0" id="supplier_IDForDiscountCode" value="1"
                               name="order_design_num" expresstype_id="0" supplier_id="130177">
                        <div class="backg_f6 clearfix pd_b10">
                            <div class="merchantMsgBox">
                                <table width="500" cellspacing="0" cellpadding="0" border="0" class=" f_l">
                                    <tbody>
                                    <tr>
                                        <td class="vTop col_666 pd_r10">给商家留言</td>
                                        <td><textarea name="express_c" supplier_id="130177" data-highlight="highlight"
                                                      maxlength="50" placeholder="建议填写内容已提前与商家沟通一致"
                                                      class="J_placeholder textareaCom w390 h73 bdDB"></textarea>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="500" cellspacing="0" cellpadding="0" border="0" class=" f_r">
                                    <tbody>
                                    <tr>
                                        <td class="col_666 pd_r10 w75">配送方式</td>
                                        <td class="w220 t_l lineH40">
                                            <div class="posR1" supplier_id="130177" name="select_express_type_div">
                                                <span class="inline col_999 f12"></span>
                                            </div>
                                        </td>
                                        <td align="right" class="none">
                                            <span class="col_f60 mg_r20" name="order_express_price"
                                                  supplier_id="130177">￥<span></span></span>
                                            <span class="col_ee5b47"></span> <span class="col_ee5b47"
                                                                                   name="order_express_price_add"
                                                                                   supplier_id="130177"></span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col_666 pd_r10 w50">送货时间</td>
                                        <td class="w220 t_l">
                                            <div supplier_id="130177" class="w220 posR inline"
                                                 name="select_send_type_div">
                                                <div class="J_select"><span data-value="0" class="sel_span">工作日、双休日、假日均可送货</span>
                                                    <div class="sel_div" style="height: 0px;">
                                                        <ul class="sel_ul">
                                                            <li data-hover="hover" data-value="0">工作日、双休日、假日均可送货</li>
                                                            <li data-hover="hover" data-value="1">只工作日送货</li>
                                                            <li data-hover="hover" data-value="2">只双休日、假日送货</li>
                                                        </ul>
                                                        <div class="scr_com sel_scroll" style="height: 0px;">
                                                            <div class="scr_monsemove sel_scroll_btn"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="paybill_title f14">
 
                    </div>
                </div>

            </div>
			
           	<!-- 订单商品遍历区end -->
            <input type="hidden" id="shop_car_id" value="4643578|1">
            <input type="hidden" id="hid_designids" value="1301775165060100001">
            <input type="hidden" id="hid_designnum" value="1">
            <div class="shoppingBox mg_t20 border none">
                <div class="order_title col_333 f15">虚拟账户</div>
                <div class="pd20">
                    <p>
                        <label class="inline"><i onclick="i_lose_point_click(this);" id="ck_is_p"
                                                 class="openIcon inline cursor"></i>&nbsp;&nbsp;使用积分</label>
                    </p>
                    <p id="point_true" class="mg_t15 l_h40 none"></p>
                    <div id="is_use_point" class="receipt_box mg_t10 none">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                            <tr>
                                <td width="120" height="40" align="right">现有积分：</td>
                                <td width="400"><span>0点</span>&nbsp;&nbsp;&nbsp;<span id="just_this_point">【本次交易最多可用 0 点】
								</span></td>
                            </tr>
                            <tr>
                                <td height="40" align="right">使用积分：</td>
                                <td><input type="text" onafterpaste="lose_point(this);" value=""
                                           onkeyup="lose_point(this);" maxlength="10" class="inpCom w120"
                                           id="lose_point_text">&nbsp;点
                                </td>
                            </tr>
                            <tr>
                                <td height="40" align="right">虚拟账户密码：</td>
                                <td><input type="password" class="inpCom w220" value="" maxlength="36" id="virtuapwd">
                                    <a target="_blank" href="http://www.biyao.com/MyCenter/ProfileRe"
                                       class="col_07a6df">忘记密码？</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td valign="bottom" height="40px"><a onclick="sub_point()" href="javascript:void(0)"
                                                                     class="publicBtn publicBtn_h31 publicBtn_f60 inline">确定使用</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="none">
                        <a data-usepoint="0" id="point_message"></a>
                    </div>
                </div>
            </div>
            <div class="bg_fff border mg_t30  relative" style="margin-top: 0px">
                <div class="experience_entrance none">
                    <div id="experienceBtn" class="experience_btn">
                        <span class="inline f16 col_724">使用体验码</span> <span class="inline tyq_bg tb3"></span>
                    </div>
                    <div class="experience_con mg_t20 none" id="experienceInputOut">
                        <label class="sizeZero"> <input id="experienceInput" type="text"
                                                        class="exper_input inline col_666 mg_r10"
                                                        placeholder="请输入体验码编号"> <input id="experienceUseBtn"
                                                                                       type="submit"
                                                                                       class="inline experience_use_btn"
                                                                                       value="使用"> <input
                                    id="experienceCancelBtn" type="submit" class="inline experience_use_btn none"
                                    value="取消">
                        </label>
                        <p id="experienceCheckTips" class="experience_error_msg col_b76"></p>
                        <input type="hidden" id="experienceCodeHidden" value="">
                    </div>
                </div>
                <div class="firmbox mg_t20">
                    <div class="lineH40  pd_l10 pd_r20 clearfix  none">
                        <div class="f_r col_666 none">
                            可获积分：<span class="w80 inline fb t_r col_f60 pd_r5">0</span>
                        </div>
                    </div>

                    <div class="lineH30  pd_l10 pd_r20 none">
                        <div class="f_r col_666 f14">
                            运费：<span class="w80 inline t_r col_f60 pd_r5 f14" id="total_order_express_price"></span>
                        </div>
                    </div>
                    <div class="lineH30  pd_l10 pd_r20 none">
                        <div class="f_r col_666 f14">
                            优惠：<span class="w80 inline t_r col_f60 pd_r5 f14" id="couponPrice">￥0</span>
                        </div>
                    </div>
     					

     				<div class="clearfix " style="background: white;border-bottom: 1px solid red">
                        <div class="f_r col_666 f14">
                            商品总价：<span class="w80 inline t_r col_f60 pd_r5 f14"
                                       id="total_order_design_price">￥<span class="zjj">199</span></span>
                        </div>
					<span class="inline f_r mg_r30  col_666">商品总数 <em id="productNum" class="col_f60 fb f14">1</em> 件
					</span>
                    </div>


                    <div style="display: none;" id="confirmorder_recv_info" class="clearfix t_r ">
                        <span id="area" class="f14  col_666 mg_r5"></span><br> <span id="address"
                                                                                     class="f14  col_666 mg_r5"></span><br>
                        <span id="name" class="f14  col_666 mg_r5"></span><br> <span id="phoneNum"
                                                                                     class="f14 col_666 mg_r5"></span>
                    </div>
                </div>
                <div class="pd_t10 t_r pd_r20 mg_b20">
                    <a href="/cart" class=" col_999 back_pay_btn inline f16 mg_r20">返回购物车</a> <a
                            id="submitorder" class="inline f16 order_qr_btn t_c ">提交订单</a>
                </div>
            </div>
        </div>
        <div class="J_pop pop"
             style="z-index: 10000; width: 750px; top: 290.5px; left: 555.5px; position: fixed;display: none ">
            <div class="pop_hd"><span class="pop_close" onclick="closeAdd()"></span><span class="pop_title f18">请输入新地址</span></div>
            <div class="pop_bd" style="height: 250px;">
                <form id="form_address">
                    购物车信息
                </form>
            </div>
            <div class="pop_ft" style="float: left; margin-left: 163px; margin-top: 8px;"><a
                        class="btnCom1 btnBg2 btnH1 inline pop_confirm h38 w120"
                        href="javascript:void(0)"><span>寄到该地址</span></a></div>
        </div>
    </div>

    <!-- 继承页面后不用再引入，用来获取cookie值 -->
	<script type="text/javascript">



		$('#goods_id').attr('href',$.cookie('order_good_id'))
		$('#goods_img').attr('src',$.cookie('goods_img'))
		$('#goods_name').text($.cookie('order_good_name'))
		$('#goods_attr_color').text($.cookie('order_good_color'))
		$('#goods_attr_rule').text($.cookie('order_good_rule'))
		$('#shop_price').text($.cookie('order_good_price'))
		$('#cart_count').text($.cookie('order_good_number'))
		$('#productNum').text($.cookie('order_good_number'))
			var zj = $.cookie('order_good_number')*$.cookie('order_good_price')

            //判断
			if ($('.cart_xjs').text()) {
					var i = 0
					var j = 0
				$('.cart_xjs').each(function(){
					i += parseInt($(this).text())
					j += parseInt($(this).parent().parent().prev().prev().text())
				})
				$('#productNum').text(j)
				$('.zjj').text(i)
				// alert(i)
			}else{
					// alert('qq')

				$('#zj').text(zj)
				$('.zjj').text(zj)
			}



			// 选择收货地址
			function i_address_n_click(obj){
				// alert('www')
				$(obj).siblings().removeClass('checked',false)
				
				$(obj).toggleClass('checked',true)
				
			}
				
				 
				


			//提交订单
			$('#submitorder').click(function(){
				var addressId = $('.checked').find('#addressId').val()
				//判断是否是购物车的数据
				var data = $('.cart_id')
				if (data.val()) {
						var ids = []
					data.each(function(){
						ids.push($(this).val())
					})
						var idss = ids.join()
						// console.log(idss)
						// alert('购物车数据')
						$.get('/store/'+addressId,{'idss':idss},function(msg){
 
							if (msg == 1) {
                                var order_zongji = $('.zjj').text()
                                $.cookie('order_zongji',order_zongji,{path:'/'}) 
								layer.msg('支付成功!')
 
								window.location = '/pay/'+addressId
 
 
							}else{
								alert('支付失败!')
							}
						})

				}else{
					goods_id = 	$.cookie('order_good_id') 
					goods_img = $.cookie('goods_img').replace('/goods_img/','')	 
					goods_name = $.cookie('order_good_name') 
					goods_attr_color = $.cookie('order_good_color')		 
					goods_attr_rule = $.cookie('order_good_rule')		 
					shop_price = $.cookie('order_good_price')		 
					cart_count = $.cookie('order_good_number')	 

					// alert('立即购买数据')
					$.get('/store/'+addressId,{'goods_id':goods_id, 'goods_img':goods_img, 'goods_name':goods_name, 'goods_attr_color':goods_attr_color, 'goods_attr_rule':goods_attr_rule, 'shop_price':shop_price, 'cart_count':cart_count},function(msg){
                            if (msg == 1) {
                                // console.log(msg)
                                var order_zongji = $('.zjj').text()
                                $.cookie('order_zongji',order_zongji,{path:'/'}) 
                                layer.msg('购买成功!')
                                window.location = '/pay/'+addressId
                 

                            }else{
                                alert('购买失败!')
                            }
							
						})
					
				}


			})
 
			</script>
@endsection