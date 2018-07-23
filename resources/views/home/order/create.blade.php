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
                    <li>
                        <a class="add_address_box" onclick="s_new_address();">
                            <i class="inline spIcon add_address_bg mg_t40"></i><br>
                            <span class="inline f18 col_999 mg_t15">使用新地址<em class="upfile_btn"></em>
                            </span>
                        </a>
                    </li>
                    <li class="address_box checked" name="ul_address_n" onclick="i_address_n_click(this);"
                        address_id="2176926" area_id="110228">
                        <div class="contact_box"><span class=" inline col_666 f14">小嗨</span>&nbsp;&nbsp;<span
                                    class=" inline col_666 f14">15115624521</span></div>
                        <div class="detailed_address_box"><p title="北京市县密云县" class=" f14 col_666 mg_t15 w250 escp">北京市&nbsp;&nbsp;密云县</p>
                            <p class=" f12 col_666 lineH20">六里屯</p></div>
                        <div class="edit_btn_box "><a class="inline col_link f14 mg_r15" href="javascript:;"
                                                      onclick="s_update_address('2176926','15115624521','北京市','县','密云县','110228','1','110000','110200','',this);">修改</a><a
                                    class="inline col_link f14" href="javascript:;"
                                    onclick="delAddress('2176926')">删除</a></div>
                        <span class="inline default_addres "><i class="inline spIcon"></i><span
                                    class="inline col_666 f14">默认地址</span></span></li>
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
									 		HEIGEER黑格尔服饰
									 	</span>
                                    </a>
                                </th>
                                <th width="10%" align="center" class="none">可获积分</th>
                                <th width="12%" align="center" class="col_999">单价</th>
                                <th width="12%" align="center" class="col_999">数量</th>
                                <th width="12%" align="center" class="col_999 none">包装</th>
                                <th width="12%" align="right" class="col_999"><span class="mg_r20">小计</span></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="suppliergroup" data-s="130177">
                    <div class="bg_fff">
                        <table cellspacing="0" cellpadding="0" class="sop_table1 tablecount">
                            <tbody>

                            <tr>
                                <td width="23%" align="center"><a target="_blank"
                                                                  href="http://www.biyao.com/products/1301775165060100001-0.html">
                                        <img class="border" width="100" height="100" alt=""
                                             src="http://bfs.biyao.com/group1/M00/2E/51/rBACYVqTbjKAGJTfAAFSYWnScxE879_400x400.jpg">
                                    </a></td>
                                <td width="41%" align="left">
                                    <div>
                                        <a target="_blank"
                                           href="http://www.biyao.com/products/1301775165060100001-0.html">
                                            <span class="col_333">中长款无痕贴合工艺速干修身吊带打底裙WC86034G(两件）</span>
                                        </a>

                                    </div>
                                    <input type="hidden" class="sizeno" value="颜色:黑色+米色" 尺寸:均码="">


                                    <div class="col_999 mg_t5 w300 escp">
                                        颜色:黑色+米色<br>尺寸:均码
                                    </div>
                                    <!-- 无模型商品和低模普通商品签字 -->

                                    <!-- 普通高模商品签字 -->


                                    <div class="refund_tips"></div>


                                </td>
                                <td width="10%" align="center" class="none"><span class="col_333">0积分</span></td>
                                <td width="12%" align="center" class="col_333"><span class="col_666">￥199</span></td>
                                <td width="12%" align="center" class="col_333 td_buy_num relative" data-weight="0.0"
                                    data-id="4643578" data-pt="0" data-pd="0" data-pc="0"
                                    designid="1301775165060100001"><span class="col_333">1</span></td>
                                <td width="12%" align="center" class="col_333 none"><span class="col_333">普通包装</span>
                                    <span class="col_333">(免费)</span></td>
                                <td width="12%" align="right"><strong class="  mg_r20">￥199</strong></td>
                            </tr>

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
                                                  supplier_id="130177">￥0</span>
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
                        <div class="paybilltitleIn">
                            <input type="hidden" value="199.0" name="order_design_price" supplier_id="130177">
                            店铺合计：<span class="col_f60 f14 mg_r20"><span name="order_price"
                                                                        supplier_id="130177">￥199</span></span>
                        </div>
                    </div>
                </div>

            </div>
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
            <div class="bg_fff border mg_t30  relative">
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
                    <div class="lineH30  pd_l10 pd_r20 clearfix " style="background: white;">
                        <div class="f_r col_666 f14">
                            商品总价：<span class="w80 inline t_r col_f60 pd_r5 f14"
                                       id="total_order_design_price">￥199</span>
                        </div>
					<span class="inline f_r mg_r30  col_666">商品总数 <em id="productNum" class="col_f60 fb f14">1</em> 件
					</span>
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
                    <div class="lineH30  pd_l10 pd_r20 clearfix ">
                        <div id="discount_price" class="f_r col_666 f14 "></div>
                    </div>
                    <div class="clearfix">
                        <ul class="firm_ul f_r mg10">
                            <li class="col_666 none">虚拟账户：<span align="center"
                                                                class="col_ee5b47 inline w10 f14">-</span> <span
                                        class="col_f60 w70 inline fb escp" id="lose_point_price_id">￥0</span></li>
                            <li class="f14 col_666">实际支付金额：<strong class="col_f60 ">
                                    <em class="f18 fb inline w80" id="total_order_price"></em>
                                </strong></li>
                            <input type="hidden" value="199.0" id="total_order_design_price_h">
                            <input type="hidden" value="0" id="h_my_point">
                        </ul>
                    </div>
                    <div style="display: none;" id="confirmorder_recv_info" class="clearfix t_r ">
                        <span id="area" class="f14  col_666 mg_r5"></span><br> <span id="address"
                                                                                     class="f14  col_666 mg_r5"></span><br>
                        <span id="name" class="f14  col_666 mg_r5"></span><br> <span id="phoneNum"
                                                                                     class="f14 col_666 mg_r5"></span>
                    </div>
                </div>
                <div class="pd_t10 t_r pd_r20 mg_b20">
                    <a href="/shopcars/index.html" class=" col_999 back_pay_btn inline f16 mg_r20">返回购物车</a> <a
                            id="submitorder" href="javascript:;" class="inline f16 order_qr_btn t_c ">提交订单</a>
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
    <script type="text/javascript" src="/h/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="/h/js/jquery.cookie.js"></script>
    <script type="text/javascript">

        function s_new_address(){
            $('.J_pop').show();
        }
        function closeAdd(){
            $('.J_pop').hide();
        }
        console.log($.cookie('order_good_color'))//商品颜色
        console.log($.cookie('order_good_rule'))//商品尺寸
        console.log($.cookie('order_good_number'))//商品数量
        console.log($.cookie('order_good_id'))//商品id
        console.log($.cookie('order_good_price'))//商品价格
        console.log($.cookie('order_good_name'))//商品名称
    </script>
@endsection
