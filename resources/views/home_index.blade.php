
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta property="qc:admins" content="35713343766211176375747716" />
    <title>必要 - 全球首家C2M电子商务平台</title>
 
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="/h/css/common.css" rel="stylesheet" type="text/css" />
    <link href="/h/css/new.main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/h/css/new.index.css"/>
 
    <link href="/h/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/h/pc/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
    <script type="text/javascript" src="/layui/layui.all.js"></script>
    <script>
        ;!function(){
              var layer = layui.layer
              ,form = layui.form;
        }();
    </script>
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
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link type="text/css" href="/h/pc/www/css/myCenter.css?v=biyao_5976431" rel="stylesheet" />



    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript"  src="/h/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript"  src="/h/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/h/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/h/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
 
    <script type="text/javascript"  src="/h/js/jquery-1.8.3.js"></script>
    <script type="text/javascript"  src="/h/js/jquery.cookie.js"></script>
    <script type="text/javascript"  src="/h/js/md5.js"></script>
    <script type="text/javascript"  src="/h/js/mastercommon.js"></script>
    <script type="text/javascript"  src="/h/js/jquery.extention.js"></script>
    <script type="text/javascript"  src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/index.js" ></script>
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
    </script>
</head>
<body id="pagebody">

    <div class="wrap clearfix bg_333">
        <div class="f_l">
            <ul class="pub_nav_list sizeZero">

                <li class="inline"><a href="index.html">首页</a><span class="bg"></span></li>
                <li class="inline"><a href="sjzx.html">商家中心</a><span class="bg"></span></li>
                <li class="inline"><a href="sjzx.html">平台政策</a><span class="bg"></span></li>
                <!--                    <li class="inline last"><a href="list.html#complaint/toAddComplaint">非法信息投诉</a><span class="bg"></span></li> -->
                <li class="inline last newapp">
                    <a href="#">必要手机版</a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="con">
                            <p class="sj_evm"></p>
                            <p class="lineH24 col_666 f14">必要手机版</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
 
  @if(session('users'))
 
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">
                <li class="inline" id="welcomID"><span class="col_aaa mg_r10">欢迎来到必要</span><a class="" onclick='LT.login_uri("login.html")'>{{session('users')->user_name}}</a><span class="bg"></span></li>
                <li class="inline" id="messageID"><a href="/loginout" onclick='LT.register_uri("register.html")'>退出</a><span class="bg"></span></li>
 
                <li class="inline last">
                    <a href="javascript:void(0);" class="">个人中心<i class="inline pep_bg mg_l10"></i></a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="bg_fff down_list_box">
                            <a class="inline" href="/order">我的订单</a>
                            <a class="inline" href="/address">地址管理</a>
                            <a href="/Informa" class="inline" href="Profile.html">个人设置</a>
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
 
        @else
 
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">
                <li class="inline" id="welcomID"><span class="col_aaa mg_r10">欢迎来到必要，请</span><a href="/login" onclick='LT.login_uri("login.html")'>登录</a><span class="bg"></span></li>
                <li class="inline" id="messageID"><a onclick='LT.register_uri("register.html")'>注册</a><span class="bg"></span></li>
                
            </ul>
        </div>
        @endif
    </div>
</div>



<ul class="rightBar" style="margin-left: 550px; display: block;">
    <li class="rightBar-top" style="display: none;"></li>
</ul>


<link rel="stylesheet" type="text/css" href="/h/pc/www/css/home.css?v=biyao_b551ce1"/>
<style>
    .index_bg_fff{background-color:#fff;}
</style>


<!-- 修改内容区 -->

@section('content')



@show


<script type="text/javascript">
    window.__pageType="home";
    if(typeof($.cookie("uid"))!="undefined"&&$.cookie("uid")!=null&&$.cookie("uid")!=""){
        $.ajax({
            url:"http://www.biyao.com/home/getDataForHomePage",
            dataType:"jsonp",
            jsonp:"callback",
            data:{"uid":$.cookie("uid")},
            success:function(result){
                if(result.success==1){
                    $('#welcomID').remove();
                    $('#messageID').html('<a class="login"  href="MyOrder.html">Hi,'+result.nickname+'</a><a class="regist mg_l10" href="http://www.biyao.com/account/logout">[ 退出 ]</a>    ');
                    //$('#messageNumID').html("("+result.messageNum+")");
                }
            }
        })
    }
</script>
<script type="text/javascript">window._ty_rum||function(t){function e(t){switch(typeof t){case"object":if(!t)return"null";if(t instanceof Array){for(var r="[",n=0;n<t.length;n++)r+=(n>0?",":"")+e(t[n]);return r+"]"}var r="{",n=0;for(var a in t)if("function"!=typeof t[a]){var i=e(t[a]);r+=(n>0?",":"")+e(a)+":"+i,n++}return r+"}";case"string":return'"'+t.replace(/([\"\\])/g,"\$1").replace(/\n/g,"\\n")+'"';case"number":return t.toString();case"boolean":return t?"true":"false";case"function":return e(t.toString());case"undefined":default:return'"undefined"'}}function r(t){return B?B(t):t}function n(){return Date.now?Date.now():(new Date).valueOf()}function a(t,e,r){function n(){var t=H.args.apply(this,arguments);return e(i,t,r)}var a,i=t[t.length-1];if("function"==typeof i){switch(i.length){case 0:a=function(){return n.apply(this,arguments)};break;case 1:a=function(t){return n.apply(this,arguments)};break;case 2:a=function(t,e){return n.apply(this,arguments)};break;case 3:a=function(t,e,r){return n.apply(this,arguments)};break;case 4:a=function(t,e,r,a){return n.apply(this,arguments)};break;case 5:a=function(t,e,r,a,i){return n.apply(this,arguments)};break;default:for(var o=[],s=0,u=i.length;u>s;s++)o.push("_"+s);a=eval("(function(){return function("+o.join(",")+"){var args = [].slice.call(arguments, 0);return e(i, args, r);};})();")}t[t.length-1]=a}return t}function i(t,e){return t&&e&&(t.moduleName=e),t}function o(t,e,r){return function(){try{k=e,r&&s(e),t.apply(this,arguments),r&&u()}catch(n){throw r&&u(),i(n,e)}}}function s(e){H.each(["setTimeout","setInterval"],function(r){H.wrap(!0,t,r,function(t){return function(){var r,n=H.args.apply(this,arguments),a=n[0];return"function"==typeof a&&(r=o(a,e,!0)),r&&(n[0]=r),t.apply(this,n)}})})}function u(){H.each(["setTimeout","setInterval"],function(e){H.unwrap(t,e)})}function c(t){P&&H.wrap(!1,P.prototype,"addEventListener",function(e){return function(){var r,n=H.args.apply(this,arguments),a=n[1];return"function"==typeof a&&(r=o(a,t,!0)),r&&(n[1]=r),e.apply(this,n)}}),s(t)}function f(){P&&H.unwrap(P.prototype,"addEventListener"),u()}function p(t){return function(t,e){}}function l(){if(this.errors.length){var t=function(t){var e=[],r={};H.each(t,function(t){var e=_(t[1],t[2],t[3],t[6]);r[e]?r[e][4]+=1:r[e]=[t[1],t[2],t[3],"#"==t[4]?R.URL:t[4],1,t[5],t[6],t[7]]});for(var n in r)e.push(r[n]);return e}(this.errors),e=this;H.POST(H.mkurl(A.server.beacon,"err",{fu:C?C:C++,os:parseInt((n()-(N||A.st))/1e3)}),H.stringify({datas:t}),{},function(t,r){t||(e.errors=[])})}}function d(){X.initend()}function h(){"complete"===R.readyState&&X.initend()}function m(t){function e(){X.send()}return A.load_time?!0:(X.initend(),A.load_time=n(),void(9===t?e():setTimeout(e,0)))}function y(){F||m(9),H.bind(l,X)(),F=1}function v(){X.touch||(X.touch=n())}function g(t){if(t[6]){var e=t[4],r=t[5];if(r&&"string"==typeof r&&e){r=r.split(/\n/);var n=O.exec(r[0]);n||(n=O.exec(r[1])),n&&n[1]!=e&&(t[4]=n[1]||e,t[2]=n[2]||t[2],t[3]=n[3]||t[3])}}}function _(t,e,r,n){return t+e+r+(n?n:"")}function w(e){var r=arguments,a="unknown",i=[n()];if(0!=r.length){if("string"==typeof e){var o=r.length<4?r.length:4;i[1]=r[0],o>2&&(i[2]=r[2],i[3]=0,i[4]=r[1]),o>3&&r[3]&&(i[3]=r[3])}else if(e instanceof Event||t.ErrorEvent&&e instanceof ErrorEvent){if(i[1]=e.message||(e.error&&e.error.constructor.name)+(e.error&&e.error.message)||"",i[2]=e.lineno?e.lineno:0,i[3]=e.colno?e.colno:0,i[4]=e.filename||e.error&&e.error.fileName||e.target&&e.target.baseURI||"",i[4]==R.URL&&(i[4]="#"),e.error){i[5]=e.error.stack,i[6]=e.error.moduleName;var s=_(i[1],i[2],i[3],i[6]);i[7]=j[s]?0:1,j[s]=!0}else i[5]=null,i[6]=null,i[7]=0;if(i[1]===a&&i[4]===a)return;g(i)}X.errors.push(i)}}function S(t,e,r){for(var n="o."+e+"(",a=0;a<r.length;a++)n+=(a>0?",":"")+"a["+a+"]";return n+=");",new Function(n)()}function T(t){return function(){var e=arguments;if(!this._ty_wrap){var r=H.args.apply(this,e);this._ty_rum={method:r[0],url:r[1],start:n()}}try{return t.apply(this,e)}catch(a){return this.open=t,S(this,"open",e)}}}function b(e){return"string"==typeof e?e.length:t.ArrayBuffer&&e instanceof ArrayBuffer?e.byteLength:t.Blob&&e instanceof Blob?e.size:e&&e.length?e.length:0}function E(e){return function(){function r(t){var e,r,a=l._ty_rum;if(a){if(4!==a.readyState&&(a.end=n()),a.s=l.status,""==l.responseType||"text"==l.responseType)a.res=b(l.responseText);else if(l.response)a.res=b(l.response);else try{a.res=b(l.responseText)}catch(i){a.res=0}if(a.readyState=l.readyState,a.cb_time=d,e=[a.method+" "+a.url,a.s>0?a.end-a.start:0,d,a.s,a.s>0?0:t,a.res,a.req],a.r&&(r=o(l),r&&(r=r.xData)&&(e.push(r.id),e.push(r.action),e.push(r.time&&r.time.duration),e.push(r.time&&r.time.qu))),A.aa.push(e),A.server.custom_urls&&A.server.custom_urls.length&&!X.ct){if(!A.pattern){A.pattern=[];for(var s=0;s<A.server.custom_urls.length;s++)A.pattern.push(new RegExp(A.server.custom_urls[s]))}for(var s=0;s<A.pattern.length;s++)if(a.url.match(A.pattern[s])){X.ct=a.end+d;break}}X.sa(),l._ty_rum=null}}function a(){4==l.readyState&&r(0)}function o(e){var r;if(e.getResponseHeader){var n=H.parseJSON(e.getResponseHeader("X-Tingyun-Tx-Data"));n&&n.r&&e._ty_rum&&n.r+""==e._ty_rum.r+""&&(r={name:e._ty_rum.url,xData:n},U&&t._ty_rum.c_ra.push(r))}return r}function c(t){return function(){var e,r;4==l.readyState&&l._ty_rum&&(l._ty_rum.end=e=n(),l._ty_rum.readyState=4);try{k&&s(k),r=t.apply(this,arguments),k&&u()}catch(o){throw o=i(o,k),k&&u(),k=null,o}return 4==l.readyState&&(d=n()-e),a(),r}}function f(t){return function(){var e=l._ty_rum;return e?"progress"==t?!0:("abort"==t?r(905):"loadstart"==t?e.start=n():"error"==t?r(990):"timeout"==t&&r(903),!0):!0}}function p(t,e){e instanceof Array||(e=[e]);for(var r=0;r<e.length;r++){var n=e[r];H.sh(t,n,f(n),!1)}}if(!this._ty_wrap){this._ty_rum.start=n(),this._ty_rum.req=arguments[0]?b(arguments[0]):0;var l=this,d=0,h=H.wrap(!1,this,"onreadystatechange",c);h||H.sh(this,"readystatechange",a,!1),p(this,["error","progress","abort","load","loadstart","loadend","timeout"]),h||setTimeout(function(){H.wrap(!1,l,"onreadystatechange",c)},0)}var m=function(){function t(t){var e={},r=/^(?:([A-Za-z]+):)?(\/{0,3})([0-9.\-A-Za-z]+)(?::(\d+))?/.exec(t);return r&&(e.protocol=r[1]?r[1]+":":"http:",e.hostname=r[3],e.port=r[4]||""),e}return function(e){var r=location;if(e=H.trim(e)){if(e=e.toLowerCase(),e.startsWith("//")&&(e=r.protocol+e),!e.startsWith("http"))return!0;var n=t(e),a=n.protocol===r.protocol&&n.hostname===r.hostname;return a&&(a=n.port===r.port?!0:!r.port&&("http:"===r.protocol&&"80"===n.port||"https:"===r.protocol&&"443"===n.port)),a}return!1}}(),y=arguments;try{try{var v=A.server;v&&v.id&&this._ty_rum&&m(this._ty_rum.url)&&(this._ty_rum.r=(new Date).getTime()%1e8,this.setRequestHeader&&this.setRequestHeader("X-Tingyun-Id",v.id+";r="+this._ty_rum.r))}catch(g){}return e.apply(this,y)}catch(g){return this.send=e,S(this,"send",y)}}}var k,x=t.XMLHttpRequest,R=document,L=Object.defineProperty,q=t.define,P=t.EventTarget,C=0,O=new RegExp("([a-z]+:/{2,3}.*):(\\d+):(\\d+)"),B=t.encodeURIComponent,N=null,A=t._ty_rum={st:n(),ra:[],c_ra:[],aa:[],snd_du:function(){return this.server.adu?1e3*this.server.adu:1e4},cc:function(){return this.server.ac?this.server.ac:10}};var ty_rum=A;ty_rum.server = {id:'7iBHaQoSsiU',beacon:'beacon.tingyun.com',beacon_err:'beacon-err.tingyun.com',key:'a9DfpmXAPSw',trace_threshold:7000,custom_urls:[],sr:1.0};if(A.server&&!(A.server.sr&&Math.random()>=A.server.sr)){var D=String.prototype.trim;String.prototype.startsWith||(String.prototype.startsWith=function(t,e){return e=e||0,this.indexOf(t,e)===e});var I=/^http/i,M=function(){function t(){return(65536*(1+Math.random())|0).toString(16).substring(1)}return t()+"-"+t()+t()}(),H={wrap:function(t,e,r,n,a){try{var i=e[r]}catch(o){if(!t)return!1}if(!i&&!t)return!1;if(i&&i._ty_wrap)return!1;try{e[r]=n(i,a)}catch(o){return!1}return e[r]._ty_wrap=[i],!0},unwrap:function(t,e){try{var r=t[e]._ty_wrap;r&&(t[e]=r[0])}catch(n){}},each:function(t,e){if(t){var r;for(r=0;r<t.length&&(!t[r]||!e(t[r],r,t));r+=1);}},mkurl:function(t,e){var a=arguments,i=/^https/i.test(R.URL)?"https":"http";if(i=i+"://"+t+"/"+e+"?av=1.0.0&v=1.3.2&key="+r(A.server.key)+"&ref="+r(R.URL)+"&rand="+n()+"&pvid="+M,"pf"!==e&&A&&A.agent&&A.agent.n&&(i+="&n="+r(A.agent.n)),a.length>2){var o=a[2];for(var s in o)i+="&"+s+"="+o[s]}return i},GET:function(t,e){function r(){e&&e.apply(this,arguments),n.parentNode&&n.parentNode.removeChild(n)}if(navigator&&navigator.sendBeacon&&I.test(t))return navigator.sendBeacon(t,null);var n=R.createElement("img");return n.setAttribute("src",t),n.setAttribute("style","display:none"),this.sh(n,"readystatechange",function(){("loaded"==n.readyState||4==n.readyState)&&r("loaded")},!1),this.sh(n,"load",function(){return r("load"),!0},!1),this.sh(n,"error",function(){return r("error"),!0},!1),R.body.appendChild(n)},fpt:function(t,e,r){function n(t,e,r){var n=R.createElement(t);try{for(var a in e)n[a]=e[a]}catch(i){var o="<"+t;for(var a in e)o+=" "+a+'="'+e[a]+'"';o+=">",r||(o+="</"+t+">"),n=R.createElement(o)}return n}var a=n("div",{style:"display:none"},!1),i=n("iframe",{name:"_ty_rum_frm",width:0,height:0,style:"display:none"},!1),o=n("form",{style:"display:none",action:t,enctype:"application/x-www-form-urlencoded",method:"post",target:"_ty_rum_frm"},!1),s=n("input",{name:"data",type:"hidden"},!0);return s.value=e,o.appendChild(s),a.appendChild(i),a.appendChild(o),R.body.appendChild(a),o.submit(),i.onreadystatechange=function(){("complete"===i.readyState||4===i.readyState)&&(r(null,i.innerHTML),R.body.removeChild(a))},!0},POST:function(e,r,n,a){if(this.ie)return this.fpt(e,r,a);if(navigator&&navigator.sendBeacon&&I.test(e)){var i=navigator.sendBeacon(e,r);return a(!i),i}var o;if(t.XDomainRequest)return o=new XDomainRequest,o.open("POST",e),o.onload=function(){a(null,o.responseText)},this.sh(o,"load",function(){a(null,o.responseText)},!1),this.sh(o,"error",function(){a("POST("+e+")error")},!1),this.wrap(!0,o,"onerror",function(t){return function(){return a&&a("post error",o.responseText),!0}}),o.send(r),!0;if(!x)return!1;o=new x,o.overrideMimeType&&o.overrideMimeType("text/html");try{o._ty_wrap=1}catch(s){}var u=0;o.onreadystatechange=function(){4==o.readyState&&200==o.status&&(0==u&&a(null,o.responseText),u++)},o.onerror&&this.wrap(!0,o,"onerror",function(t){return function(){return a("post error",o.responseText),"function"==typeof t?t.apply(this,arguments):!0}});try{o.open("POST",e,!0)}catch(s){return this.fpt(e,r,a)}for(var c in n)o.setRequestHeader(c,n[c]);return o.send(r),!0},sh:function(t,e,r,n){return t.addEventListener?t.addEventListener(e,r,n):t.attachEvent?t.attachEvent("on"+e,r):!1},args:function(){for(var t=[],e=0;e<arguments.length;e++)t.push(arguments[e]);return t},stringify:e,parseJSON:function(e){if(e&&"string"==typeof e){var r=t.JSON?t.JSON.parse:function(t){return new Function("return "+t)()};return r(e)}return null},trim:D?function(t){return null==t?"":D.call(t)}:function(t){return null==t?"":t.toString().replace(/^\s+/,"").replace(/\s+$/,"")},extend:function(t,e){if(t&&e)for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r]);return t},bind:function(t,e){return function(){t.apply(e,arguments)}}};try{L&&L(t,"define",{get:function(){return q},set:function(t){"function"==typeof t&&(t.amd||t.cmd)?(q=function(){var e=H.args.apply(this,arguments);if(3!==e.length)return t.apply(this,e);var r="string"==typeof e[0]?e[0]:"anonymous";return t.apply(this,a(e,function(t,e,r){var n;try{k=r,c(r),n=t.apply(this,e),f()}catch(a){throw f(),i(a,r)}return n},r))},H.extend(q,t)):q=t},configurable:!0})}catch($){}var U=t.performance?t.performance:t.Performance;U&&(H.sh(U,"resourcetimingbufferfull",function(){var t=U.getEntriesByType("resource");t&&(A.ra=A.ra.concat(t),U.clearResourceTimings())},!1),H.sh(U,"webkitresourcetimingbufferfull",function(){var t=U.getEntriesByType("resource");t&&(A.ra=A.ra.concat(t),U.webkitClearResourceTimings())},!1));for(var X=A.metric={ready:function(){return A.load_time},initend:function(){function t(){X.sa()}A.end_time||(A.end_time=n(),this._h=setInterval(t,2e3))},send:function(){function e(){function e(t){return a[t]>0?a[t]-o:0}var n={};if(U&&U.timing){var a=U.timing;o=a.navigationStart;var i=e("domainLookupStart"),s=e("domainLookupEnd"),u=e("redirectStart"),c=e("redirectEnd"),f=e("connectStart"),p=e("connectEnd");n={f:e("fetchStart"),qs:e("requestStart"),rs:e("responseStart"),re:e("responseEnd"),os:e("domContentLoadedEventStart"),oe:e("domContentLoadedEventEnd"),oi:e("domInteractive"),oc:e("domComplete"),ls:e("loadEventStart"),le:e("loadEventEnd")},p-f>0&&(n.cs=f,n.ce=p),s-i>0&&(n.ds=i,n.de=s),(c-u>0||c>0)&&(n.es=u,n.ee=c),0==n.le&&(n.ue=A.load_time-o);var l;if(a.msFirstPaint)l=a.msFirstPaint;else if(t.chrome&&chrome.loadTimes){var d=chrome.loadTimes();d&&d.firstPaintTime&&(l=1e3*d.firstPaintTime)}else A.firstPaint&&(l=A.firstPaint);l&&(n.fp=Math.round(l-o)),a.secureConnectionStart&&(n.sl=e("secureConnectionStart"))}else n={t:o,os:A.end_time-o,ls:A.load_time-o};n.je=X.errors.length,X.ct&&(n.ct=X.ct-o),X.touch&&(n.fi=X.touch-o);var h=A.agent;return h&&(n.id=r(h.id),n.a=h.a,n.q=h.q,n.tid=r(h.tid),n.n=r(h.n)),n.sh=t.screen&&t.screen.height,n.sw=t.screen&&t.screen.width,n}function a(e){var r=t._ty_rum.c_ra;if(e)for(var n=r.length-1;n>=0;n--)if(e.indexOf(r[n].name)>-1)return r[n].xData;return null}function i(t){function e(t){return f[t]>0?f[t]:0}if(t<A.server.trace_threshold)return null;var n=U;if(n&&n.getEntriesByType){var i={tr:!0,tt:r(R.title),charset:R.characterSet},s=A.ra,u=n.getEntriesByType("resource");u&&(s=s.concat(u),n.webkitClearResourceTimings&&n.webkitClearResourceTimings(),n.clearResourceTimings&&n.clearResourceTimings()),i.res=[];for(var c=0;c<s.length;c++){var f=s[c],p={o:e("startTime"),rt:f.initiatorType,n:f.name,f:e("fetchStart"),ds:e("domainLookupStart"),de:e("domainLookupEnd"),cs:e("connectStart"),ce:e("connectEnd"),sl:e("secureConnectionStart"),qs:e("requestStart"),rs:e("responseStart"),re:e("responseEnd")},l=a(f.name);l&&(p.aid=l.id,p.atd=l.trId,p.an=l.action,p.aq=l.time&&l.time.qu,p.as=l.time&&l.time.duration),i.res.push(p)}if(X.errors.length){i.err=[];for(var c=0,d=X.errors,h=d.length;h>c;c++)i.err.push({o:Math.round(d[c][0]-o),e:d[c][1],l:d[c][2],c:d[c][3],r:d[c][4],ec:h,s:d[c][5],m:d[c][6],ep:d[c][7]})}return i}return null}if(this.sended)return!1;if(!this.ready())return!1;var o=A.st,s={};try{pf=e(),s=i(pf.ls>0?pf.ls:A.load_time-o)}catch(u){}s=s?H.stringify(s):"";var c=H.mkurl(A.server.beacon,"pf",pf);N=n(),0!=s.length&&H.POST(c,s,{},p("POST"))||H.GET(c);var f=H.bind(l,this);return f(),setInterval(f,1e4),this.sended=!0,this.sa(1),!0},sa:function(t){(this.ready()||t)&&(t||(t=!this._last_send||n()-this._last_send>A.snd_du()||A.aa.length>=A.cc()),A.aa.length>0&&t&&(this._last_send=n(),H.POST(H.mkurl(A.server.beacon,"xhr"),H.stringify({xhr:A.aa}),{},p("POST")),A.aa=[]))},errors:[]},F=null,j={},z=[["load",m],["beforeunload",y],["pagehide",y],["unload",y]],J=0;J<z.length;J++)H.sh(t,z[J][0],z[J][1],!1);t.addEventListener?H.sh(t,"error",w,!1):t.onerror=function(t,e,r,n,a){var i=[t,r,n,e==R.URL?"#":e];if(a){var o=_(t,r,n,a.moduleName);i=i.concat([1,a.stack,a.moduleName,j[o]?0:1]),j[o]=!0}g(i),X.errors.push(i)};for(var W=[["scroll",v],["keypress",v],["click",v],["DOMContentLoaded",d],["readystatechange",h]],J=0;J<W.length;J++)H.sh(R,W[J][0],W[J][1],!1);if(H.wrap(!1,t,"requestAnimationFrame",function(e){return function(){return A.firstPaint=n(),t.requestAnimationFrame=e,e.apply(this,arguments)}}),x)if(x.prototype)H.wrap(!1,x.prototype,"open",T),H.wrap(!1,x.prototype,"send",E);else{H.ie=7;var G=x;t.XMLHttpRequest=function(){var t=new G;return H.wrap(!1,t,"open",T),H.wrap(!1,t,"send",E),t}}else t.ActiveXObject&&(H.ie=6);}}(window);</script>

<div data-selector="J_im" id="webIM_showDiv">

</div>
    
<div class="footer_links clearfix J_1200 auto">

    <div class="content wrap sizeZero">
        <div class="footer_nav_box inline">
            <ul class="footer_nav_list clearfix">
                <li>
                    <a target="_blank" href="sjzx.html">关于必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="sjzx.html">加入必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="tel.html">联系我们</a>
                    <span class="bg_line"></span>
                </li>
                <li class="none">
                    <a target="_blank" href="tel.html">网站地图</a>
                </li>
                <li>
                    <a target="_blank" href="tel.html">官方微博</a>
                    <span class="bg_line"></span>
                </li>

            </ul>
            <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有
            </p>
            <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备15017094号</a>
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
<script src="/h/pc/common/js/common.js?v=biyao_c83c46d" type="text/javascript"></script>
<script type="text/javascript"  src="/h/pc/www/js/common.js?v=biyao_bd8bd36"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/jquery.pagination.js?v=biyao_1a0a135"></script>
<script type="text/javascript" src="/h/pc/common/js/ui/pages.js?v=biyao_5fd7a00"></script>
<script type="text/javascript" src="/h/pc/www/js/product/fcode.js?v=biyao_1810c31"></script>
<script type="text/javascript" src="/h/pc/www/js/home/checkbook.js?v=biyao_8351fee"></script>
<script type="text/javascript" src="/h/pc/common/js/jquery.lazyload.min.js?v=biyao_75578ef"></script>
<script type="text/javascript" src="/h/pc/www/js/home/newhome.js?v=biyao_3ea3ba3" ></script>
</body>
<script type="text/javascript" src="/h/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>

</html>