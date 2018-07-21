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
                        <th width="10%" align="center" class="col_523">小计</th>
                        <th width="5%" align="center" class="col_523">操作</th>
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
                        <tr>
                            <td width="30" align="left" class="pd_l10">
                                <label class="checked checkbox chk_Calc" name="chk_130119" supplierid="130119" data-value="806174244" data-design="1301195186060300001" data-num="2">
                                    <i class="openIcon inline"></i>
                                </label>
                            </td>
                            <td width="130" align="left">
                                <span class="sop_img inline">
                                    <a target="_blank" href="http://www.biyao.com/products/1301195186060300001-0.html">
                                        <img width="100" height="100" src="http://bfs.biyao.com/group1/M00/0F/B2/rBACVFkmZquAA6OJAAEdJuay1Iw209_400x400.jpg">
                                    </a>
                                </span>
                            </td>
                            <td align="left">
                                <a target="_blank" href="http://www.biyao.com/products/1301195186060300001-0.html">
                                    <span class="col_523">男士头层牛皮休闲简约自动扣皮带</span>
                                </a>
                                
                                <br>
                                
                                    
                                    <div class="col_999 mg_t5 w300 escp">
                                    颜色:黑色<br>尺寸:115cm
                                    </div>
                                    
                                    <!-- 无模型商品和低模普通商品签字 -->
                                    
                                    
                                    <!-- 普通高模商品签字 -->
                                    
                                
                            </td>
                            <td width="10%" align="center" class="ff6600">¥189</td>
                            <td width="10%" align="center" class="sizeZero">
                                <i class="sign minus inline"></i>
                                <input name="quantity" type="text" maxlength="3" value="2" shopcarid="806174244" discount="0.0" price="189.0" num="2" packageprice="0.0" modelid="0" supplierid="130119" designid="1301195186060300001" sizename="颜色:黑色|尺寸:115cm" class="inpCom w40 inline t_c">
                                <i class="sign plus inline"></i>
                                
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
                            <td width="10%" align="center"><strong class="ff6600">¥378</strong></td>
                            <td width="5%" align="center"><a href="javascript:;" class="link_09c a_delete" id="deleteLink" data="806174244"></a></td>
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
                    <label class="checked inline checkbox" name="chkAll"><i class="openIcon inline mg_r10"></i></label><span class="inline">全选</span> <a href="javascript:;" class="inline mg_l10 mg_r10 col_link" id="a_BatchDel">删除</a>
                </div>
                <div class="f_r col_666 f14">
                    商品总价：<span class="w80 inline col_f60 pd_r5 f14" id="totalPrice">¥466</span>
                </div>
                <span class="inline f_r mg_r30 col_666 f14">商品总数 <em class="col_f60  f14" id="totalNum">3</em> 件</span>
            </div>
            <div class="lineH30  pd_l10 pd_r10 none">
                <div class="f_r col_666 f14">
                
                    包装费：<span class="w80 inline col_f60 pd_r5" id="packagePrice">¥0</span>
                
                </div>
            </div>  
        </div>


        <div class="tallyBox">
                <a href="http://www.biyao.com/home/index.html" class="inline goonShopping ">继续购物</a>
                 <a href="javascript:;" class=" tallyBTnPos inline span_submit_calre js_btn">结算</a>
            <p class="t_r">
                合计：<span class="f20 ff6600 inline vTop priceDisplay jsjs">
                    ¥466</span><span class="inline f14 fb ff6600 vTop mg_l5"></span>
            </p>
        </div>

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





<script type="text/javascript"> 
    window.MainSite = "http://www.biyao.com";    
</script>
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

<script type="text/template" id="materialsOfProductTemplate">


<div class="pop_bd pd_t15 clearfix">
    <ul class="sizeZero ml_list">
    </ul>
</div>

</script>
    
 
    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/bytrack.js"></script>

    <script type="text/javascript">
        function GetRequest() {
            var url = location.search; //获取url中"?"符后的字串
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for (var i = 0; i < strs.length; i++) {
                    theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }
        var Request = new Object();
        Request = GetRequest();
        if(!$.cookie("source")){
            $.cookie('source', Request['source'],{domain:"biyao.com",path:"/"});
        }
        
        // 跳转到重定向地址
        function jumpRedirect (redirectUrl, flag) {
            if(!flag){
                window.location.href = window.ControllerSite + '/account/login.html?returnUrl=' + encodeURIComponent(redirectUrl);
            }else{
                window.open(window.ControllerSite + '/account/login.html?returnUrl=' + encodeURIComponent(redirectUrl));
            }
            
        };
        // 如果用户已登录根据是否有进线类型判断客服中心是否显示
        if($.cookie('uid')){
            $.ajax({
                url: '/service/getClassifyList',
                method : 'GET',
                data:{
                    uid: $.cookie('uid'),
                },
                success: function(res){
                    if(res.success === 1 && res.data.length !== 0 ){
                        $('.user-server').css({'display': 'inline-block'})
                        $('.vertical-line-hook b').css({'display': 'inline-block'})
                    }
                }
            })
            
        }else{
            $('.user-server').css({'display': 'inline-block'})
            $('.vertical-line-hook b').css({'display': 'inline-block'})
            // 用户未登录点击我的客服强制登录
            $('#customer_server').on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var _url = $(this).attr('href');
                jumpRedirect(_url, true);
                return false;
            })
        }
        
    </script>
 

@endsection