@extends('home_index')
@section('content')
<div class="wrap  posR mg_t20 mH810 pd_b40">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">
                        <img src="/h/pc/www/img/avatar/head_150.png" alt="" onerror="javascript:this.src='pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px"/>
                    </a>
                </li>
                <li class="f14 col_fff mg_t10 t_c">by_3444810</li>
            </ul>
        </div>
        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class="a_check "><a href="/order" ><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class=""><a href="/address" ><i class="f_r mcMIcon4 inline"></i>退款管理</a></li>
                    <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>-->
                    <li class=""><a href="/Informa" ><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
                    <!-- <div class="div_line"></div> -->
                    <!-- <a href="#"><i class="f_r mcMIcon9 inline"></i>设计师主页</a> <a
                        href="#"><i class="f_r mcMIcon10 inline"></i>设计师提现</a> -->
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var pageIndex = 0;
        var pageCount =0;
    </script>
    <div class="per_right">
    <div class="per_right_out backg_fff mg_b20 ">
    <div class="per_left">
        <div class="per_leftbox  pd_t14">
            <ul class="per_leftul">
                <li class="t_c">
                    <a href="Profile.html">
                        <img src="/h/pc/www/img/avatar/head_150.png" alt="" onerror="javascript:this.src='/h/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px">
                    </a>
                </li>
                <li class="f14 col_fff mg_t10 t_c">用户名</li>
            </ul>
        </div>
        <div class="per_leftbox">
            <div class="perleft_menu pdtb_20">
                <ul>
                    <li class="a_check "><a href="/order"><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li>
                    <li class=" "><a href="/address"><i class="f_r mcMIcon4 inline"></i>退款管理</a></li>
                    <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>-->
                    <li class=" "><a href="/Informa"><i class="f_r mcMIcon8 inline"></i>个人设置</a></li>
                    <!-- <div class="div_line"></div> -->
                    <!-- <a href="#"><i class="f_r mcMIcon9 inline"></i>设计师主页</a> <a
                        href="#"><i class="f_r mcMIcon10 inline"></i>设计师提现</a> -->
                </ul>
            </div>
        </div>
    </div>
                <div class="relative">
                    <h4 class="nTitle">我的订单</h4>
                </div>
                <table cellspacing="0" cellpadding="0" class="w100w t_c  perTabTitn ">
                    <tbody>
                    <tr>
                        <td width="16%"><span class="inline">商品</span></td>
                        <td width="16%"><span class="inline">订单日期</span></td>
                        <td width="14%"><span class="inline">订单编号</span></td>
                        <td width="18%"><span class="inline">合计</span></td>
                        <td width="18%"><span class="inline">状态</span></td>
                        <td width="18%"><span class="inline">操作</span></td>
                    </tr>
                    </tbody>
                </table>
                <!-- <div class="historyOrderTit f14">由于系统升级,2016年01月18日之前的订单
                    <a href="/MyCenter/MyOrder.html" class="publicBtn publicBtn_h27 publicBtn_e7 inline mg_l5 mg_tf3">点此查看</a>
                    <span class="historyOrderTitdel f12">X&nbsp;关闭</span>
                </div> -->
                <!--暂时关闭IM入口，勿删-->

                <div class="DZPager mg_b20">
                    <table cellspacing="0" cellpadding="0" class="sop_table4 border ">
                            <tr data-unfacceptance="0" data-supplierid="130091" data-orderid="122007043946180978">
                                <td width="16%"  align="center" class="bd_l vTop pd_t15 lineH20"> 
                                    {{ $user_orders['goods_name'] }}
                                </td>
                                <td width="16%"  align="center" class="bd_l vTop pd_t15 lineH20">
                                    {{ $user_orders['order_time'] }}
                                </td>
                                <td width="14%"  align="center" class="bd_l vTop pd_t15 lineH20">
                                    {{ $user_orders['order_sn'] }}
                                </td>
                                <td  align="center" class="bd_l vTop pd_t15 lineH20" width="18%"><strong class="col_f60 f14">{{ $user_orders['order_amount'] }}￥</strong>
                                </td>
                                <td  align="center" class="bd_l vTop pd_t15 lineH20" width="18%">
                                    <a href="/orderdetails" class="col_link ">订单详情</a>
                                </td>
                                <td  align="center" class="bd_l vTop  pd_l20 pd_r20 pd_t5" width="18%">
                                    <a href="#" class="publicBtn publicBtn_h25 publicBtn_f60 inline mg_t10">立即付款</a><br>
                                    <a href="javascript:void(0)" class=" cancelOrder  mg_t10 inline" orderid="122007043946180978">取消订单</a>
                                    <br>
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
            </div>
            </div>
    <script>
        $(function(){
            hoverReservationpart();
        })
        //划过汽车套餐弹出层套餐详情
        function hoverReservationpart(){
            $(".Reservationpart").hover(
                    function(){
                        var $this=$(this);
                        //判断 是否已经加载过
                        if(($this.find(".Reservation_wl_w")).length==0){
                            $.ajax({
                                type: "get",
                                async: false,
                                url:"/RequestAPI/PackageList?designId="+$this.attr("designid"),
                                success: function (data) {//sunccess
                                    if(data.success==1){
                                        var html='<div class="Reservation_wl_w">\
                                    <div class="wl_jd"></div>\
                                    <div class="c_wl_n">\
                                    <div class="col_724 borderB c_wl_t overflow">\
                                        <span class="f_l">'+data.data.standardPackage.name+' </span>\
                                        <span class="f_r">￥'+data.data.standardPackage.price+'</span>\
                                    </div>\
                                    <div class=" col_666 masked-relative masked" style="line-height:25px">';
                                        $.each(data.data.standardPackage.element,function(j,item){
                                            html+='<div class="overflow">\
                                        <span class="w150 f_l">'+item+'</span><span class="f_r">包括</span>\
                                        </div>';
                                        });
                                        $.each(data.data.comboPackage,function(j,item){
                                            html+='<div class="col_724 borderB c_wl_t overflow">\
                                        <span class="f_l">'+item.name+'</span><span class="f_r">￥'+item.price+'</span>\
                                        </div>\
                                        <div class=" col_666 masked-relative masked" style="line-height:25px">';
                                            $.each(item.element,function(e,ite){
                                                html+='<div class="overflow">\
                                            <span class="w150 f_l">'+ite+'</span><span class="f_r">包括</span>\
                                            </div>';
                                            })
                                            html+='</div>';
                                        })


                                        html+='</div>\
                                    </div></div>';
                                        $this.append(html);
                                    }
                                }//sunccess
                            })
                        }
                        $this.find(".Reservation_wl_w").css("display","block");
                    }
                    ,function(){
                        $(this).find(".Reservation_wl_w").css("display","none");
                    }
            );

        }
    </script>

@endsection