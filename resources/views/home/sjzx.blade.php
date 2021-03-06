
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>必要 - 全球首家C2M电子商务平台</title>
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon" type="image/x-icon" />
    <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
        window.loginUserId=2444809;
        window.__pageType="mini";


    </script>
    <link href="/h/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/h/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <script type="text/javascript"	src="/h/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript"	src="/h/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/h/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/h/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
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
</head>
<body id="pagebody">
<!-- <script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?8263bc34c44278c176458d5aca724aed";
var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);
})();
</script> -->
<div class="pub_nav topBanner slideTrans slideUp J_T1200 none">
    <div class="wrap clearfix">
        <div class="f_l">
            <ul class="pub_nav_list sizeZero">
                <li class="inline"><a href="/">首页</a><span class="bg"></span></li>
                <li class="inline"><a href="/create">商家中心</a><span class="bg"></span></li>
                <li class="inline"><a href="/create">平台政策</a><span class="bg"></span></li>
                <!-- 					<li class="inline last"><a href="list.html#complaint/toAddComplaint">非法信息投诉</a></li> -->
                <li class="inline last newapp">
                    <a href="#">必要手机版</a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="con">
                            <p class="sj_evm"></p>
                            <p class="lineH24 col_999">必要手机版</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">
                <li class="inline">
                    <a class="login "  href="MyOrder.html">
                        Hi,by_3444810
                    </a>
                    <a class="regist  mg_l10" href="list.html#account/logout">[ 退出 ]</a>
                </li>
                <li class="inline last ">
                    <a href="javascript:void(0);">个人中心<i class="inline pep_bg mg_l10"></i></a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="bg_fff down_list_box">
                            <a class="inline" href="MyOrder.html">我的订单</a>
                            <!-- <a class="inline" href="list.html#MyCenter/MyWorksList.html">我的作品集</a> -->
                            <!-- <a class="inline" href="list.html#MyCenter/MyCoupon.html">我的红包</a> -->
                            <a class="inline" href="Profile.html">个人设置</a>
                        </div>
                    </div>
                </li>
                <li class="inline last pd_r0 shopping_cart vTop">
                    <a class="inline sizeZero" href="shopcars.html">
                        <i class="inline"></i>
                        <span id="shopcarNumID" class="inline">购物车 0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- 这个jsonp是为了静态化页面调用的，静态化以后利用它获得购物车数量和登录信息 -->
<script type="text/javascript">
    $(function(){
        var uid=$.cookie('uid');
        if (typeof (uid) != "undefined") {
            $.ajax({
                url : 'list.html#home/getDataForHomePage',
                dataType : 'jsonp',
                data : {'uid' : uid},
                jsonpCallback : 'callback',
                success : function(data) {
                    if(data.success=="1"){
                        $("#welcomID").html('<li class="inline"><a class="login" href="MyOrder.html">Hi,'+data.nickname+'<a class="regist  mg_l10" href="list.html#account/logout">[ 退出 ]</a></li>');
                    }
                }
            });
        }
    })
</script>
<script type="text/javascript">
    document.domain="biyao.com";
    $("title").html("商家中心");
</script>
<link rel="stylesheet" type="text/css" href="/h/pc/www/css/home.css?v=biyao_b551ce1"/>
<script type="text/javascript">
    var t = n = 0, count;
    $(function() {

        count = $("#banner_switch_list li").length;
        $("#banner_switch_list li:not(:first-child)").hide();
        $("#banner_switch .xb li").click(function() {
            var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4
            n = i;
            if (i >= count)
                return;
            $("#banner_switch_list li").filter(":visible").fadeOut().parent().children().eq(i).fadeIn();
            $(this).toggleClass("checked");
            $(this).siblings().removeClass("checked");
        });
        t = setInterval("showAuto()", 8000);
        $("#banner_switch ").hover(function() {
            clearInterval(t)
        }, function() {
            t = setInterval("showAuto()", 8000);
        });

        if(LT.temp.loginFn.islogin_dialog(false)){ //已经登录
            $("a").each(function(){
                if($(this).attr("href") == "register.html"){
                    $(this).attr("href","javascript:void('0');").attr("onclick","LT.alertSmall('您已登录，无需注册');");
                }
            })
        }

    });

    function showAuto() {
        n = n >= (count - 1) ? 0 : ++n;
        $("#banner_switch .xb li").eq(n).trigger('click');
    }
</script>
<div class="bg_fff J_T1200 none">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo f_l">
            <a href="/"><img src="/h/pc/www/img/logo.png?v=biyao_4637d54" alt="" /></a>
        </div>
 
    </div>
</div>


<script type="text/javascript" src="http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/js/jquery.onepage-scroll.js"></script>
<style type="text/css">
    * { margin:0; padding:0; word-break:break-all; }
    ul,ol,li,dl,dt,dd{ margin:0px; padding:0px; border:0px; list-style:none; display:block; }
    body, html {margin: 0;-webkit-transition: opacity 400ms;-moz-transition: opacity 400ms;transition: opacity 400ms;}
    body, .onepage-wrapper, html {display: block;position: static;padding: 0;width: 100%;height: 100%;}
    .onepage-wrapper {width: 100%;height: 100%;display: block;position: relative;padding: 0;-webkit-transform-style: preserve-3d;}
    .onepage-wrapper .section {width: 100%;height: 100%;}
    .onepage-wrapper .section div{background-size:1366px auto;background-repeat:no-repeat;background-position:center;height:100%;}
    @media screen and (min-width:1367px) and (max-width:1440px) {
        .onepage-wrapper .section div{background-size:1550px auto;}
    }
    @media screen and (min-width:1441px) and (max-width:1600px){
        .onepage-wrapper .section div{background-size:1600px auto;}
    }
    @media screen and (min-width:1601px){
        .onepage-wrapper .section div{background-size:1920px auto;}
    }
    .onepage-wrapper .section div a{display:block;width:100%;height:100%;}
    .onepage-pagination {position:absolute;right:75px;top:30%;z-index:5;height:250px}
    /*.onepage-pagination li{width:26px;height:26px;}*/
    .onepage-pagination li a{width:10px;height:10px;display:block;}
    .onepage-pagination li a:before{content:'';position:absolute;width:10px;height:10px;background:url(http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/img/dot.png) 0 -21px no-repeat;}
    .onepage-pagination li a.active:before{width:10px;height:10px;background:url(http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/img/dot.png) 0 0 no-repeat;}
    .disabled-onepage-scroll, .disabled-onepage-scroll .wrapper {overflow:auto;}
    .disabled-onepage-scroll .onepage-wrapper .section {position: relative !important;top: auto !important;left: auto !important;}
    .disabled-onepage-scroll .onepage-wrapper {-webkit-transform: none !important;-moz-transform: none !important;transform: none !important;-ms-transform: none !important; min-height: 100%;}
    .disabled-onepage-scroll .onepage-pagination {display: none;}
    body.disabled-onepage-scroll, .disabled-onepage-scroll .onepage-wrapper, html {position: inherit;}
    .block {display:block;}.none{display:none;}.hide{display:none;}.show{display:block;}
    .f_l{float:left;}.f_r{float:right;}
    .line{ width:3px; height:98px; background:#fff; margin-left:6px;margin-top:-2px}
    li{ position:relative;}
    .active .line{ height:125px;}
    .active .Circle{ width:10px; height:10px; background:url(http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/img/dot.png) no-repeat; background-position:0px -21px;  position:absolute; z-index:2;}
    .droll_under{ height:38px; line-height:38px;position:absolute;z-index:1; border-radius:20px; top:-11px; *top:-1px;behavior:url(ie-css3.htc); right:0px; }
    .droll_under span{ color:#ff9b00;font-family:"微软雅黑"; font-size:17px; padding:0px 40px 0px 11px;}
</style>
<script type="text/javascript">
    $(".J_T1200").addClass("none");
</script>
<div class="J_T1200 none">

</div>
<div class="main" id="go"> <section title=''><div style='background-image:url(http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/img/20150312113711.jpg);width:100%;height:100%;background-position:center top;'> </div></section> <section title=''><div style='background-image:url(http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/img/20150312113725.jpg);width:100%;height:100%;background-position:center top;'> </div></section> <section title=''><div style='background-image:url(http://img.biyao.com/files/data0//minisite/dea0075b52f345ebbecdbb68d5375a3b/20150324042314/img/20150324042252.jpg);width:100%;height:100%;background-position:center bottom;'> </div></section></div>
<script type="text/javascript">
    var isIE = !!window.ActiveXObject;
    var isIE6 = isIE && !window.XMLHttpRequest;
    if (isIE) {
        var browser = getbrowserinfo();
        //如果是IE6-8，则直接显示所有图片，不用滑动
        if (isIE6 || browser == "IE 8.0" || browser == "IE 7.0") {
            backgroundimagebrowser();
        } else {
            onepagescroll();
        }
    }
    else {
        onepagescroll();
    }
    function backgroundimagebrowser() {
        var height = document.body.clientHeight;
        $("#go").find("div").css("height", height);
        $(".J_T1200").show();
        $(".J_1200").show();
    }
    function onepagescroll() {
        $("#pagebody").css("overflow", "hidden");
        $(".main").onepage_scroll({
            sectionContainer: "section",
            easing: "linear",
            animationTime: 300,
            pagination: true,
            updateURL: false
        });
    }
    function getbrowserinfo() {
        var Sys = {};
        var ua = navigator.userAgent.toLowerCase();
        var s;
        (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] :
                (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] :
                        (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] :
                                (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] :
                                        (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;
        if (Sys.ie) return 'IE ' + Sys.ie;
        if (Sys.firefox) return 'Firefox ' + Sys.firefox;
        if (Sys.chrome) return 'Chrome ' + Sys.chrome;
        if (Sys.opera) return 'Opera ' + Sys.opera;
        if (Sys.safari) return 'Safari ' + Sys.safari;
    }
</script>

<script type="text/javascript" src="/h/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<script type="text/javascript" src="/h/pc/minisite/shopsMiniSite/js/attention.js?v=biyao_2be4791"></script>

<!-- <script>
var _hmt = _hmt || [];
(function() {
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?8263bc34c44278c176458d5aca724aed";
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);
})();
</script> -->

<div data-selector="J_im"></div>
<div class="J_1200 none">
    <div class="footer_links clearfix J_1200 auto">
        <div class="content wrap sizeZero">
            <div class="footer_nav_box inline">
                <ul class="footer_nav_list clearfix">
                    <li>
                        <a target="_blank" href="list.html#minisite/ljby">关于必要</a>
                        <span class="bg_line"></span>
                    </li>
                    <li>
                        <a target="_blank" href="list.html#help/8.html">加入必要</a>
                        <span class="bg_line"></span>
                    </li>
                    <li>
                        <a target="_blank" href="tel.html">联系我们</a>
                        <span class="bg_line"></span>
                    </li>
                    <li class="none">
                        <a target="_blank" href="list.html#list/39/list-1.html">网站地图</a>
                    </li>
                    <li>
                        <a target="_blank" href="tel.html">官方微博</a>
                        <span class="bg_line"></span>
                    </li>

                </ul>
                <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有
                </p>
                <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备13088531号</a>
                </p>
            </div>
            <div class="footer_evm sizeZero inline">
                <div class="inline mg_r40 footer_evm_img">
                    <div class="an_bg inline mg_r15"></div>
                    <div class="inline evm_tit_msg">
                        <span class="col_333 f14">扫描二维码下载</span><br/>
                        <span class="col_724 f14">必要手机客户端</span>
                    </div>
                </div>
                <div class="inline mg_r10 footer_evm_img">
                    <div class="weixin_bg inline mg_r15"></div>
                    <div class="inline evm_tit_msg">
                        <span class="col_333 f14">扫描二维码关注</span><br/>
                        <span class="col_724 f14">必要官方微信</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><script src="/h/pc/common/js/common.js?v=biyao_c83c46d" type="text/javascript"></script>
<script type="text/javascript"	src="/h/pc/www/js/common.js?v=biyao_bd8bd36"></script>
<script type="text/javascript" src="/h/pc/minisite/shopsMiniSite/js/attention.js?v=biyao_2be4791"></script>
</body>
<script type="text/javascript" src="/h/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>

</html>