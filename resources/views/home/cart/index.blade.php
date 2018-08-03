@extends('home_index')
@section('content')

 
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon" type="image/x-icon" />   
    <link href="/h/css/common_1.css" rel="stylesheet"/>
    <link href="/h/css/new.main_1.css" rel="stylesheet"/>
    <link href="/h/css/cm_www.css" rel="stylesheet"/>
    <link href="/h/css/newbuy.css" rel="stylesheet"/>
    <script type="text/javascript">
        window.basePath = "";
        window.ControllerSite = "http://www.biyao.com";
        var ua = navigator.userAgent.toLowerCase(); 
        var isiOS = navigator.userAgent.match('iPad')||navigator.userAgent.match('iPhone')||navigator.userAgent.match('iPod'),isAndroid=navigator.userAgent.match('Android'),isDesktop = !isiOS&&!isAndroid;
        if (isiOS||isAndroid) {
            if(window.location.href.toString().indexOf("www.biyao.com/product/")>0){//如果现在进的是编辑器页
                var designId=(window.location.href.toString()).substr(parseInt(window.location.href.toString().indexOf("www.biyao.com/product/"))+"www.biyao.com/product/".length,4);//获得样例ID
                window.location.href="http://m.biyao.com/product/show?designid="+designId;
            }
        }
    </script>
    <script type="text/javascript" src="/h/js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="/h/js/jquery.extention.js"></script>
    <script type="text/javascript" src="/h/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/dialog.js"></script>
    <script type="text/javascript" src="/h/js/select.js"></script>
    <script type="text/javascript" src="/h/js/loadmask.js"></script>
    <script type="text/javascript" src="/h/js/commonre.js"></script>
    <script type="text/javascript" src="/h/js/jquery.cookie.js"></script>
 
<div class="nav retract" style="top: 30px;background-color:rgba(0,0,0,0);display: none;">
    <div class="clearfix">
        <a href="/" class="nav-logo"></a>
        <div class="nav-category">
            <p><span>全部分类</span><i></i></p>
            <div>
                <ul class="nav-list">
                    

                    <!-- 一级分类start -->
                     @foreach($cates as $cate)
                     @if(strlen($cate['cat_path']) == 3)
                        <li class="nav-main">
                            <p>
                                
                                <a href="">
                                    {{$cate['cat_name']}}
                                </a>
                                
                            </p>
                            <ul>
                                <!-- 二级分类 -->
                                @foreach($cates as $val)
                                @if($val['cat_pid'] == $cate['cat_id'])
                                    <li class="nav-sub clearfix">
                                        <a href="">
                                            {{$val['cat_name']}}
                                        </a>
                                        <i>&gt;</i>
                                        <ul>
                                            <!-- 三级分类 -->
                                            @foreach($cates as $v)
                                            @if($v['cat_pid'] == $val['cat_id'])
                                                <li class="nav-item">
                                                    <a href="/cates/{{$v['cat_id']}}">
                                                        {{$v['cat_name']}}
                                                    </a>
                                                </li>
                                            @endif
                                            @endforeach
                                            <!-- 三级分类 -->
                                             
                                            
                                        </ul>
                                    </li>
                                @endif
                                @endforeach
                                <!-- 二级分类 -->

                                
                            </ul>
                        </li>
                        @endif
                        @endforeach
                    <!-- 一级分类end -->
                    
                </ul>
            </div>
        </div>
        <div class="nav-search">
            <p><input type="text" id="searchInput"/><span id="searchBtn"></span></p>
            <ul></ul>
        </div>
    </div>
</div>

<script type="text/javascript">


    $(window).scroll(function(){

        if ($(window).scrollTop() <= 100) {

            $('.retract').css('display','none')
        }

        if ($(window).scrollTop() > 100) {
            
            $('.retract').css('display','block')   
            // alert('111')
        } 
        


    })
     
</script>



<div class="bd_bottom_ea">
        <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo">
            <a href="/"><img src="/h/picture/logo.png"/></a>
        </div>
    </div>
</div>


@if($data)

 <!-- 进度栏start -->
 <div class="wrap relative">
    <div class="shopStepBox">
        <div class="publicStepsbox">
            <div class="car_step_icon car_step1"></div>
            <ul class="clearfix car_step_txt">
                <li class="checked">查看购物车</li>
                <li>确认订单信息</li>
                <li>在线付款</li>
                <li>收货并评价</li>
            </ul>
        </div>
    </div>
</div>
 <!-- 进度栏end -->


<!-- 购物车清单 -->

<div class="pd_b40">
    <div class="wrap ie78">
        <div class="lineH24 t_l  pd_t30 pd_b10 bd_b_d5c ">
             <span class="f18 col_666 mg_l10 col_523">购物车</span>
        </div>
        <div class="comment_box">
            <table class="sop_table1" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <th colspan="2" width="15%" align="left" class="pd_l10" >
                            <label class="checked checkbox" name="chkAll" >
                                <i class="openIcon inline mg_r10" style="float: left;margin-top: -7px"></i>
                            </label>
                            <span style="float: left;margin-top: -10px">全选</span>
                        </th>
                        <th align="left" class="col_523">商品信息</th>
                        <th width="10%" align="center" class="col_523">单价</th>
                        <th width="10%" align="center" class="col_523">数量</th>
                        <th width="20%" align="center" class="col_523 none">包装</th>
                        <th width="7%" align="center" class="col_523">小计</th>
                        <th width="4%" align="center" class="col_523">操作</th>
                    </tr>
            </tbody>
        </table>
        </div>
        




        <!-- 购物车清单start -->
        <div class="shoppingBox ">
             
            <table class="sop_table1 lastTh tabledel bg_fff" cellpadding="0" cellspacing="0">
                
                
                    <tbody>

                        <!-- 购物车清单遍历 -->
                        @foreach($data as $v)
                        <tr id="tr">
                            <td width="30" align="left" class="pd_l10">
                                <label class="checked checkbox chk_Calc" name="chk_130119" supplierid="130119" data-value="806174244" data-design="1301195186060300001" data-num="2">
                                    <i class="openIcon inline"></i>
                                </label>
                            </td>
                            <td width="130" align="left">
                                <span class="sop_img inline">
                                    <a target="_blank" href="/good/{{$v['goods_id']}}">
                                        <img width="100" height="100" src="/goods_img/{{$v['goods_img']}}">
                                    </a>
                                </span>
                            </td>
                            <td align="left">
                                <a target="_blank" href="http://www.biyao.com/products/1301195186060300001-0.html">
                                    <span class="col_523"><a href="/good/{{$v['goods_id']}}">{{$v['goods_name']}}</a></span>
                                </a>
                                
                                <br>
                                
                                    
                                    <div class="col_999 mg_t5 w300 escp">
                                    颜色:{{$v['goods_attr_color']}}<br>尺寸:{{$v['goods_attr_rule']}}
                                    </div>
                                    
                                    <!-- 无模型商品和低模普通商品签字 -->
                                    
                                    
                                    <!-- 普通高模商品签字 -->
                                    
                                
                            </td>
                            <td width="10%" align="center" class="ff6600">¥<span class="price">{{$v['shop_price']}}</span></td>


                            <td width="10%" align="center">

                                <!-- 购物车商品数量 -->
                                 
                                <i class="sign plus inline" onclick="plus(this)"></i>
                                <input type="text" maxlength="3" value="{{$v['cart_count']}}" cid="{{$v['cart_id']}}" id="n" class="inpCom w40 inline t_c">
                                <i class="sign minus inline"  onclick="min(this)"></i>
                                

                                <p class="col_b76 mg_t5"></p>   
                            </td>
                            <td width="20%" align="center" class="col_666 none">
                            
                                <div class="pack_select sel_span">
                                    <span class="span_package_type">普通包装</span>
                                
                                    <span class="span_package_price pack_selects">(免费)</span>
                                
                                
                                    <div class="sel_div pack_sdiv none">
                                        <ul class="sel_ul">
                                        
                                            <li data-value="130119" data-carid="806174244" class="hovername">
                                                <dl class=" clearfix pd_t10 pd_b10 lpBoxbd">
                                                    <dt class="packShow  f_l">
                                                        <img src="" width="80" height="50">
                                                    </dt>
                                                    <dd class="col_666 f_l mg_l5">
                                                        <span class="inline"><span class="PackageType">普通包装</span><br>¥<span class="PackagePrice">0</span></span>
                                                    </dd>
                                                </dl>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                
                                </div>
                            
                            </td>
                            <td width="10%" align="center"><strong class="ff6600">¥<span class="num">{{$v['shop_price']*$v['cart_count']}}</span></strong></td>
                            <td width="5%" align="center"><a href="#"onclick="del(this)">X</a></td>
                    </tr>
                    @endforeach
                        <!-- 购物车清单遍历 -->
                
                
            </tbody>
        </table>
        </div>
        <!-- 购物车清单start -->

        <div class="  bg_fff tj_box">
            <div class="lineH30  pd_l10 pd_r10 clearfix ">
                <div class="f_l">
                    <label class="checked inline checkbox" name="chkAll"><i class="openIcon inline mg_r10"></i></label><span class="inline">全选</span> <a href="#" class="btn btn-danger btn-small" style="width: 45px;height: 20px;padding-top: 0px;padding-left: 8px;" onclick="dels(this)">删除</a>
                </div>
                <div class="f_r col_666 f14">
                    商品总价：<span class="w80 inline col_f60 pd_r5 f14" id="totalPrice">¥<span class="cart_num">466</span></span>
                </div>
                <span class="inline f_r mg_r30 col_666 f14">商品总数 <em class="col_f60  f14" id="totalNum"></em> 件</span>
            </div>
           
        </div>


        <div class="tallyBox">
                <a href="/" class="inline goonShopping ">继续购物</a>
                 <a href="javascript:;" onclick="sub()" class=" tallyBTnPos inline js_btn">结算</a>
            <p class="t_r">
                合计：<span class="f20 ff6600 inline vTop priceDisplay jsjs">
                    ¥<span class="f20 cart_num"></span></span><span class="inline f14 fb ff6600 vTop mg_l5"></span>
            </p>
        </div>


<!-- 虚化层 -->
    <div class="layer" id="back" style="display: none; position:absolute; width:100%; height: 100%; top: 0; left: 0; z-index: 2; background: rgba(255, 255, 255, .6);" disabled="disabled"></div>


<!-- 登录弹出框start -->
    <div class="J_pop pop" id="1532048350284" data-dialog="1532048350284" style="z-index: 10000; width: 430px; top: 63px; left: 450px; position: absolute; display: none;">
        <div class="pop_hd" style="width: 450px;position: absolute;left: 0px;top:-10px">
            <span class="pop_close" style="margin-right: 15px"></span>
            <span class="pop_title f18" style="margin-left: 230px">登录</span>
        </div>
        <div class="pop_bd" style="height: 480px;">
            <iframe src="http://www.biyao.com/account/dialogLogin.html" width="450px" height="100%" frameborder="0" scrolling="no">
                <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <meta name="description" content="必要商城是一家C2M模式的电子商务平台，旨在通过用户直连制造商（Customer&nbsp;TO&nbsp;Manufactory），砍掉传统零售中的所有加价环节，使消费者以出厂成本价就能买到高品质的产品。">
                    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋">
                    <meta property="qc:admins" content="35713343766211176375747716">
                    <meta name="renderer" content="webkit">
                    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                    <title>必要 - 买大牌制造商产品，上必要</title>
                    <link href="http://static.biyao.com/pc/favicon.ico" rel="shortcut icon" type="image/x-icon">
                    <link href="http://static3.biyao.com/pc/common/css/common.css?v=biyao_f57b0df" rel="stylesheet" type="text/css">
                    <link href="http://static4.biyao.com/pc/common/css/new.main.css?v=biyao_edc27b0" rel="stylesheet" type="text/css">
                    

                <link rel="stylesheet" type="text/css" href="http://static3.biyao.com/pc/www/css/new.account.css?v=biyao_60644c6">
                    
                </head>
                <body id="pagebody">
                    
                    


                <style>
                .geetest_panel_error_code {display: none;}
                .biyao-caution{margin-top:20px;color:#FF3333;line-height:15px;font-size:12px}
                .biyao-caution img{margin-right:6px;vertical-align:middle;line-height:15px;}
                .hide{display:none}
                .account-dialogLogin .account-error {
                      padding-left: 0;
                }
                .account-title{margin-top:30px}
                .account-sms-btn {
                    height: 50px;
                    margin-top: 19px;
                    line-height: 50px;
                    text-align: center;
                    font-size: 20px;
                    color: #fff;
                    cursor: pointer;
                    background: #F49F26;
                }
                .smssw{
                    cursor:pointer;
                    font-weight:600;
                    color:#523669;
                }
                .account-phoneCode span.getSms{
                    background-color:#d6cdd9;
                }
                .account-title a {
                    margin-top:5px;
                    margin-left: 15px;
                    cursor:pointer;
                    font-size:14px;
                    font-weight:normal;
                    color:#808080;
                    float:right;
                }
                .account-title a.active{
                    color:#523669;
                }
                .account-main li.account-phoneCode {
                    margin-top: 30px;
                }
                .account-title a img{height:24px;}
                </style>






                <!-- 弹出层用户登录 -->
                <div class="account-main account-dialogLogin">

                    <form action="/entry" class="loginBox" method="post" id="J_login">
                        {{csrf_field()}}
                    <h4 class="account-title"><b></b>用户登录    
                        <a class="pwd_btn active">密码登录</a>
                        <a class="sms_btn">短信登录</a>
                     </h4>
                    <ul class="pwd-login">
                        <li class="account-phone"><input type="text" name="userName" id="userName" maxlength="11" placeholder="请输入手机号"><i class="account-error" style="display: none;"></i></li>
                        <li class="account-password"><input type="password" name="password" id="password" maxlength="32" placeholder="请输入登录密码"><i class="account-error" style="display: none;"></i></li>
                        <li class="login-auto">
                            <span><b></b>下次自动登录</span>
                            <a href="javascript:void(accountGuy.jump.findpwd());">忘记密码</a>
                        </li>
                        <li class="account-prompt"></li>
                        <li class="account-btn">登录</li>
                    </ul>
                    <ul class="sms-login hide">
                        <li><input type="text" name="phone-number" class="sms-phone-number" autocomplete="false" placeholder="请输入手机号" maxlength="11"><i class="account-error"></i></li>
                        <li class="account-phoneCode">
                            <input type="text" name="phoneCode" autocomplete="new-password" placeholder="请输入短信验证码" class="sms-code" maxlength="6">
                            <span>获取验证码</span>
                            <i class="account-error"></i>
                        </li>
                        <li style="height:29px"></li>
                        <li class="account-sms-btn">登录</li>
                    </ul>
                    <div class="login-third">
                        <span>使用第三方账号登录：</span>
                        <a href="javascript:void(accountGuy.jump.weixinLogin());" id="thirdWX" class="third-wx"></a>
                        <a href="javascript:void(accountGuy.jump.qqLogin());" id="thirdQQ" class="third-qq"></a>
                    </div>
                    <p class="biyao-caution"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzM1Rjk4NzlEQkM2MTFFNzk2OTE4QkE0RjQzMzgzOTEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzM1Rjk4N0FEQkM2MTFFNzk2OTE4QkE0RjQzMzgzOTEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMzVGOTg3N0RCQzYxMUU3OTY5MThCQTRGNDMzODM5MSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMzVGOTg3OERCQzYxMUU3OTY5MThCQTRGNDMzODM5MSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqCqdbcAAAEMSURBVHjalJOxDsFQGIXbRrAjNhImCxISEonEU6jBZhJvYPASmCQGQ+slDCwiFg9gYCLYWXB+OZVK7m3iT760PT3n9ubv/c1XMWf4ygJN0AJVkAAXsAYOmIOn3+xVBmxAj8Y8MHl1qG/o+wmLsAJTUKP5xHcnPtf4fuUtEOICsp0BmBjBNQIP+isStCmoggeFNqHflnCbK6oqpdGHkpNwGSyM/2oJChKOg/Of4SuIWbxJakxHjS4fvEl4CxoaU1qj18FOwjMeAFW9NLr4ZxJ2QQR0FCZToXXod0M8qzY7GAbjgEZ1QZ/bfpq+wcjy5Nz5H5dsZpxm2WqUg7P/bCtgqkpeV9lUl3yn6i3AALlgPSjW8/lmAAAAAElFTkSuQmCC">必要不会以任何理由要求您转账汇款，谨防诈骗。</p>
                    </form>
                </div>
                <!-- 弹出层用户登录 -->





                <div class="qrcodeDivBox _hide">
                    <div class="qrcode-background"></div>
                    <div class="qrcode-content">
                        <div class="qrcode-top">
                            <div class="qrcodeDiv" id="qrcodeDiv"></div>
                        </div>
                        <div class="qrcode-btm"><span id="qrcodeHide"></span></div>
                    </div>
                </div>
                <!-- 直接写入控件，不兼容ie6，7 -->
                <script src="http://static.fengkongcloud.com/fpv2.js"></script>
                    
                    
                    <script type="text/javascript">
                        window.ControllerSite ="http://www.biyao.com";
                        window.ApiSite = "http://api.biyao.com";
                        window.loginUserId = "0";
                    </script>
                    
                    <script type="text/javascript" src="http://static.biyao.com/pc/common/js/jquery-1.8.3.js?v=biyao_d45b78f"></script>
                    <script type="text/javascript" src="http://static1.biyao.com/pc/common/js/jquery.cookie.js?v=biyao_d5528dd"></script>
                    <script type="text/javascript" src="http://static2.biyao.com/pc/common/js/md5.js?v=biyao_0b4d6e6"></script>
                    <script type="text/javascript" src="http://static3.biyao.com/pc/common/js/master/masterCommon.js?v=biyao_305b82f"></script>
                    <script type="text/javascript" src="http://static4.biyao.com/pc/common/js/jquery.extention.js?v=biyao_92c4cec"></script>
                    <script type="text/javascript" src="http://static.biyao.com/pc/common/js/common.js?v=biyao_d7d6ccf"></script>
                    
                    

                <script type="text/javascript" src="http://castatic.fengkongcloud.com/pr/v1/smcp.min.js"></script>
                <script type="text/javascript" src="http://static4.biyao.com/pc/www/js/account/shumei.js?v=biyao_47771f4"></script>
                <script type="text/javascript" src="http://static.biyao.com/pc/www/js/account/account.js?v=biyao_6c262e6"></script>
                <script type="text/javascript" src="http://static1.biyao.com/pc/www/js/account/dialogLogin.js?v=biyao_0b937f8"></script>
                    
                    <script type="text/javascript" src="http://static1.biyao.com/pc/common/js/bytrack.js?v=biyao_b274fad"></script><img style="display:none;" src="http://track.biyao.com/by.gif?lt=webpv&amp;lv=0.1&amp;pf=&amp;ctm=2018-07-21%2010%3A08%3A29&amp;pvid=neTWZ3hQ4nSK6AZOPuMiqLUTX4Px8WBFfC75&amp;uu=489fc7c6-15fe-41ee-bbf6-4bbeec8ec9d0&amp;u=&amp;uic=&amp;tk=&amp;url=http%3A%2F%2Fwww.biyao.com%2Faccount%2FdialogLogin.html&amp;rf=http%3A%2F%2Fwww.biyao.com%2Fproducts%2F1300865267010100001-0.html&amp;src=pc-bdpz&amp;av=&amp;dt=&amp;osv=&amp;ua=Mozilla%2F5.0%20(Windows%20NT%206.1%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F67.0.3396.99%20Safari%2F537.36&amp;dw=1366&amp;dh=768&amp;net=&amp;tt=%E5%BF%85%E8%A6%81%20-%20%E4%B9%B0%E5%A4%A7%E7%89%8C%E5%88%B6%E9%80%A0%E5%95%86%E4%BA%A7%E5%93%81%EF%BC%8C%E4%B8%8A%E5%BF%85%E8%A6%81&amp;pt=">
                 
                </body></html>
            </iframe>
        </div>
    </div>
<!-- 登录弹出框end -->
 


     <script type="text/javascript">
 
 
        //加号绑定点击事件
         function plus(obj)
         {
            

            var price = $(obj).parent().prev().find('.price').text()
            var n = $(obj).next().val()

            n++;

            if (n > 999) {
                layer.msg('不能再加了哦~~')
                return false
            }
            
            $(obj).next().val(n)

            var number = price*n
            $(obj).parent().next().next().find('.num').text(number)

                var ii = 0
                var jj = 0
            $('#tr .checked').parent().parent().each(function(){

                ii++
                jj += parseInt($(this).find('.num').text())
            })

            $('#totalNum').text(ii)
            $('.cart_num').text(jj)


            //增加的购物车清单的id
            var cid = $(obj).next().attr('cid')

            //修改购物车商品的数量
            $.get('/cart/'+cid, {'n':n},function(msg){
                // alert(msg)
            })

         }
         




        //减号绑定点击事件
         function min(obj)
         {
            var price = $(obj).parent().prev().find('.price').text()
            var n = $(obj).prev().val()

            // alert(n)
            n--;

            if (n < 1) {
                layer.msg('不能再减了哦~~')
                return false
            }
            $(obj).prev().val(n)

            var number = price*n
            $(obj).parent().next().next().find('.num').text(number)

                var ii = 0
                var jj = 0
            $('#tr .checked').parent().parent().each(function(){

                ii++
                jj += parseInt($(this).find('.num').text())
            })

            $('#totalNum').text(ii)
            $('.cart_num').text(jj)

            //减少的购物车清单的id
            var cid = $(obj).prev().attr('cid')

            //修改购物车商品的数量
            $.get('/cart/'+cid, {'n':n},function(msg){
                // alert(msg)
            })

         }





        //删除单条购物车
        function del(obj){
            //询问框
            layer.confirm('您确定删除该宝贝吗？', {
              btn: ['容朕想想~~','死都要删！'] 
            },function(){
                layer.msg('嗯~是该想想！', {icon: 1});
               

            }, function(){
                  
               //执行删除
                //要删除的购物车清单的id
                var cid = $(obj).parent().prev().prev().prev().find('#n').attr('cid')
                // console.log(cid)
                //执行删除
                $.get('/cart/'+cid+'/edit',function(msg){
                    // alert(msg)

                    if (msg == 1) {

                        $(obj).parent().parent().remove()

                        //修改总计
                            var ii = 0
                            var jj = 0
                        $('#tr .checked').parent().parent().each(function(){

                            ii++
                            jj += parseInt($(this).find('.num').text())
                        })

                        $('#totalNum').text(ii)
                        $('.cart_num').text(jj)

                        layer.msg('删除成功！', {
                        time: 1000, //20s后自动关闭

                        })  
                    }else{
                        layer.msg('删除失败！', {
                        time: 1000, //20s后自动关闭

                      })  
                    }
               
                })


        });


        }


        //删除多条购物车
        function dels(obj)
        {

            layer.confirm('您确定删除该宝贝吗？', {
              btn: ['容朕想想~~','死都要删！'] 
            },function(){
                layer.msg('嗯~是该想想！', {icon: 1});
               

            },  function(){




            //获取所有要删除的数据id
            var ids = []
            $('#tr .checked').parent().parent().each(function(){
                ids.push($(this).find('#n').attr('cid'))
            })

            var idss = ids.join()

            // console.log(idss)
            //执行删除
                $.get('/cart/'+0+'/edit',{'ids':idss},function(msg){
                    console.log(msg)

                    if (msg == 1) {

                        $('#tr .checked').parent().parent().remove()

                        //修改总计
                            var ii = 0
                            var jj = 0
                        $('#tr .checked').parent().parent().each(function(){

                            ii++
                            jj += parseInt($(this).find('.num').text())
                        })

                        $('#totalNum').text(ii)
                        $('.cart_num').text(jj)

                        layer.msg('删除成功！', {
                        time: 1000, //20s后自动关闭

                        })  
                    }else{
                        layer.msg('删除失败！', {
                        time: 1000, //20s后自动关闭

                      })  
                    }
               
                })

            })
                // console.log(ids)

        }

           



        
        //给所有选中的checkbox绑定点击事件
        $('.checked').click(function(){
            $(this).toggleClass('checked')

                var ii = 0
                var jj = 0
            $('#tr .checked').parent().parent().each(function(){

                ii++
                jj += parseInt($(this).find('.num').text())
            })

            $('#totalNum').text(ii)
            $('.cart_num').text(jj)

            // alert(ii)


            $(this).toggleClass('checked')
        })

        //总计的计算

        var i = 0
        var j = 0
        $('#tr .checked').parent().parent().each(function(){

            i++
            j += parseInt($(this).find('.num').text())
        })

        $('#totalNum').text(i)
        $('.cart_num').text(j)
     
    //大结局！结算步骤！

    function sub()
    {
        //判断是否登录
        if ($('.userinfo').text()) {
            // alert('登录啦')
            //将数据被选中的购物车从数据库取出并清除，发送给订单方法

            //获取所有要结算的购物车数据id
            var ids = []
            $('#tr .checked').parent().parent().each(function(){
                ids.push($(this).find('#n').attr('cid'))
            })

            var idss = ids.join()

            //发送ajax
            $.get('/order/0',{'ids':idss},function(msg){
                    if (msg == 1) {
                        window.location = '/order/create'
                    }else{
                        layer.msg('貌似出了点小问题~')
                    }


            })
        }else{
            window.location = '/login'
            
            // $('#1532048350284').css('display','block')
            // $('.layer').css('display','block')
            // alert('未登录呢')
 
        }    
    }



    // 关闭登录弹出框
    $('.pop_close').click(function(){
        $('#1532048350284').css('display','none')
        $('#back').css('display','none')
    })


     </script>







    </div>
</div>


<!-- 购物车清单 -->


@else

<div class="wrap h580">
    <div class="sop_nothingbox">
        <img src="/h/picture/shoppingcart.png" />
        <p class="inline">
            <span id="loginTip" class="sop_span inline">您的购物车还是空的</span>
            <span id="unloginTip" class="sop_span inline">您的购物车还是空的，<a onclick='LT.login_uri("/login")' class="col_link">登录</a>后，将显示您之前加入的商品。</span><br />
        </p>
    </div>
    <div class="toindex" align="center">
        <a href="/">马上购物</a>
    </div>
</div>

@endif


 
<script type="text/javascript" src="/h/js/common.js"></script>
<script type="text/javascript" src="/h/js/dialog.js"></script>
<script type="text/javascript" src="/h/js/select.js"></script>
<script type="text/javascript" src="/h/js/autocomplete.js"></script>
<script type="text/javascript" src="/h/js/jquery.pagination.js"></script>
<script type="text/javascript" src="/h/js/pages.js"></script>
<script type="text/javascript" src="/h/js/qrcode.js"></script>
<script type="text/javascript" src="/h/js/shopcardes.js"></script>
<script type="text/javascript" src="/h/js/lazyloadim.js"></script>
    
<script type="text/javascript" src="/h/js/lazyload.js"></script>
    
<script type="text/javascript" src="/h/js/materiallistdes.js"></script>



<div class="pop_bd pd_t15 clearfix">
    <ul class="sizeZero ml_list">
    </ul>
</div>
 
 

@endsection