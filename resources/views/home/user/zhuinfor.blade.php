

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta property="qc:admins" content="35713343766211176375747716" />
    <title>注册首页 – 我要的，才是必要的 – 必要biyao.com</title>
    <link href="/h/pc/favicon.ico" rel="shortcut icon"
          type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon"
          type="image/x-icon" />
    <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
        window.loginUserId=0;
        window.__pageType="other";

        if (window.loginUserId!=""){
            window.WebIMSite="http://webim.idstaff.com";
        }
        else
        {
            window.WebIMSite="http://webim.idstaff.com";
        }
    </script>
    <link href="/h/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/h/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <script type="text/javascript"	src="/h/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript"	src="/h/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/h/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
     <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
            <script type="text/javascript" src="/layui/layui.all.js"></script>
            <script>
                ;!function(){
                      var layer = layui.layer
                      ,form = layui.form;
                }();
            </script>
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
<script type="text/javascript">

    $(function(){
        var passwordRegex = /.*\s+.*/;
        $(".loginTxt").focus(function(){
            if ($(this).val() == $(this)[0].defaultValue) {
                $(this).val("");
            }

        });

        $("#passwd_show").focus(function(){
            $(this).addClass("none");
            $("#passwd1").val("").removeClass("none").focus();
            $("#error1").html("<i class=\"tip_erorr inline\"></i>");
        });

        $("#passwd1").blur(function(){
            if($("#passwd1").val()==""){
                $("#passwd_show").removeClass("none");
                $(this).addClass("none")
            }
            if (passwordRegex.test($('#passwd1').val())) {
                $("#passwd_show").removeClass("none");
                $("#passwd1").val("");
                $(this).addClass("none")
                $("#error1").html("<i class=\"tip_erorr inline\"></i>密码中不可包含空格");
            }
        });

        $("#passwd_show2").focus(function(){
            $(this).addClass("none");
            $("#passwd2").removeClass("none").focus();
            $("#error2").html("<i class=\"tip_erorr inline\"></i>");
        });
        $("#passwd2").blur(function(){
            if($("#passwd2").val()==""){
                $("#passwd_show2").removeClass("none");
                $(this).addClass("none")
            }
            if (passwordRegex.test($('#passwd2').val())) {
                $("#passwd_show2").removeClass("none");
                $("#passwd2").val("");
                $(this).addClass("none");
                $("#error2").html("<i class=\"tip_erorr inline\"></i>密码中不可包含空格");
            }

        });
        $(".loginTxt").blur(function(){
            if ($.trim($(this).val()) == "") {
                $(this).val($(this)[0].defaultValue);
            }
        });
    });
    $(document).ready(function(){
        var source = $.cookie("source");
        $("#sourceID").attr("value",source);
    });
</script>

<html>
<head>
</head>
<body>
<div class="bd_bottom_ea">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo f_l"><a href="/home/index.html"><img alt="" src="/h/pc/www/img/logo.png?v=biyao_4637d54"></a></div>
        <div class="f_r">
            <ul class="sizeZero merchant_info_box">
                <li class="inline mg_l40 mg_t40">
                    <span class="inline col_8c8">欢迎来到必要，请 </span><a class="col_8c8 inline mg_l5" href="login.html?returnUrl=index.html">登录 </a><span class="col_8c8 mg_l5 mg_r5 inline">|</span><span class="col_8c8 inline">注册</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="loginItem auto ">
        <input type="hidden"  id="returnUrl" value="index.html"/>
        <form method="post" action="list.html#account/isregister" id="J_phone">
            <div class="loginBox">
                <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">基本信息登记</span></div>
               
                    <!-- <dt class="inline">手机号：</dt> -->
                <dl class="mg_t20">
                    <!-- <dt class="inline">手机号：</dt> -->
                    <dd class="inline mg_r5">
                        <input  type="text" value="请输入您的手机号码" class="loginTxt w360 col_999 border" name="Mobile" data-type="mobile-number" maxlength="11"  />
                        <input type="hidden" value="" name="source" id="sourceID"/>
                    </dd>
                    <dd class="J_validate inline col_f90"></dd>
                </dl>
                    <!-- <dt class="inline">手机号：</dt> -->
                <dl class="mg_t20">
                    <!-- <dt class="inline">手机号：</dt> -->
                    <dd class="inline mg_r5">
                        <input  type="text" value="邮箱" class="loginTxt w360 col_999 border" name="Mobile" data-type="mobile-number" maxlength="11"  />
                        <input type="hidden" value="" name="source" id="sourceID"/>
                    </dd>
                    <dd class="J_validate inline col_f90"></dd>
                </dl>

                <dl class="mg_t20">
                    <!-- <dt class="inline">手机号：</dt> -->
                    <dd class="inline mg_r5">
                        <input  type="text" value="地址" class="loginTxt w360 col_999 border" name="Mobile" data-type="mobile-number" maxlength="11"  />
                        <input type="hidden" value="" name="source" id="sourceID"/>
                    </dd>
                    <dd class="J_validate inline col_f90"></dd>
                </dl>
              
                <input href="javascript:;" type="submit" class="loginBtn w400 inline t_c mg_t20" value="确认提交"/>
                <div class="pop_mark" style="display:none"></div>
                <div class="pop pd_b30" style="width:600px;top:90px;left:50%;margin-left:-300px; display: none;">
                    
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<script src="/h/pc/common/js/ui/validate.js?v=biyao_8c8263d"></script>
<script src="/h/pc/common/js/common.js?v=biyao_c83c46d"></script>
<script src="/h/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
<script src="/h/pc/www/js/mycenter/registNew.js?v=biyao_d929892"></script>
<script src="/h/pc/www/js/login/regval.js?v=biyao_f57c0c6"></script>
<script>
    validateUserName();
    LT.registNew();
    LT.findpassword();
    LT.controller.findPassword({
        interval: 60000
    });
    $(function () {
        $('.loginItem').css('min-height',($(window).height()-315)+'px');
        $('#ckfw').on('click', function () {
            if ($(this).hasClass('checked')){
                $(this).removeClass('checked');
            }
            else{
                $(this).addClass('checked');
                $('.isxt').html('');
            }
        });
        $("#linkServiceAgreement").click(function() {
            /* $(".pop").show();
             $(".pop_mark").show(); */
        });
        $(".pop_close").click(function() {
            $(".pop").hide();
            $(".pop_mark").hide();
        });
        $(".confirm_btn").click(function() {
            $(".pop").hide();
            $(".pop_mark").hide();
            if (!$('#ckfw').hasClass('checked')){
                $('#ckfw').click();
            }
        });
    });
</script><div data-selector="J_im" id="webIM_showDiv"></div>

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
                           @if(session('chenggong'))
                            <script>
                                 layer.alert('注册成功请填写基本信息', {icon: 1});
                            </script>
                            @endif
   
    
<script src="/h/pc/common/js/common.js?v=biyao_c83c46d" type="text/javascript"></script>
<script type="text/javascript"  src="/h/pc/www/js/common.js?v=biyao_bd8bd36"></script>
</body>
<script type="text/javascript" src="/h/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>

</html>