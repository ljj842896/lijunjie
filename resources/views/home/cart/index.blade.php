@extends('home_index')
@section('content')
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="/h/pc/common/css/common.css?v=biyao_9cf87cc" rel="stylesheet"/>
    <link href="/h/pc/www/css/cm_www.css?v=biyao_c0d1bd0" rel="stylesheet"/>
    <link href="/h/pc/buy/css/newBuy.css?v=biyao_dac4785" rel="stylesheet"/>
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
    </script>
<script type="text/javascript" src="/h/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
<script type="text/javascript" src="/h/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
<script type="text/javascript" src="/h/pc/common/js/jquery.cookie.js?v=biyao_a5283b2"></script>
<script type="text/javascript" src="/h/pc/common/js/common.js?v=biyao_52bff81"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/dialog.js?v=biyao_ba57fb5"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/loadmask.js?v=biyao_5aac5cc"></script>
<script type="text/javascript" src="/h/pc/buy/js/commonre.js?v=biyao_27f335b"></script>
<script type="text/javascript" src="/h/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
<script type="text/javascript" src="/h/pc/www/js/common.js?v=biyao_2bb680a"></script>
<script type="text/javascript" src="/h/pc/common/js/bytrack.js"></script>
<script type="text/javascript" src="/h/pc/buy/js/materiallistDes.js?v=biyao_21283ab"></script>
<script type="text/javascript" src="/h/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
<script type="text/javascript" src="/h/pc/www/js/product/lazyloadIM.js?v=biyao_c5ce53c"></script>
<script type="text/javascript" src="/h/pc/buy/js/shopcarDes.js?v=biyao_ba3e6ae"></script>
<script type="text/javascript" src="/h/pc/www/js/utility/qrcode.js?v=biyao_8c0b79c"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/pages.js?v=biyao_5fd7a00"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/jquery.pagination.js?v=biyao_1a0a135"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/autocomplete.js?v=biyao_bd4725d"></script>
<script type="text/template" id="materialsOfProductTemplate">
    <div class="pop_bd pd_t15 clearfix">
        <ul class="sizeZero ml_list">
        </ul>
    </div>
</script>
<script type="text/javascript">
    window.MainSite = "http://www.biyao.com";
</script>
<div class="bd_bottom_ea">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo"><a href="index.html"><img alt="" src="/h/pc/common/img/logo.png?v=biyao_3251680"></a></div>
    </div>
</div>
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
<div class="wrap  h580">
    <div class="sop_nothingbox">
        <img src="http://static.biyao.com/pc/buy/img/shoppingcart.png?v=biyao_456d613">
        <p class="inline">
            <span id="loginTip" class="sop_span inline" style="display: none;">您的购物车还是空的</span>
            <span id="unloginTip" class="sop_span inline">您的购物车还是空的，<a onclick="LT.login_uri(&quot;http://www.biyao.com/account/login.html&quot;)" class="col_link">登录</a>后，将显示您之前加入的商品。</span><br>
        </p>
    </div>
    <div class="toindex" align="center">
        <a href="http://www.biyao.com/home/index.html">马上购物</a>
    </div>

</div>

@endsection