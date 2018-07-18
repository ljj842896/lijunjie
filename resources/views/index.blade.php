<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/a/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/custom-plugins/wizard/wizard.css" media="screen">

<!-- 引入的bootsrtap和jquery -->
<link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/a/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/a/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/a/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/a/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/a/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/themer.css" media="screen">

<title>MWS Admin - Dashboard</title>
    
</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
         
        <div id="mws-themer-css-dialog">
        	<form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/a/images/logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset" style="height: 40px">
       
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/uploads/{{isset(session('data')->user_pic) ? session('data')->user_pic : '20180713Kv1mendwvD.JPG'}}" style="height: 30px" walt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                    @if(session('data'))
                <div id="mws-user-functions">

                    <div id="mws-username">
                        {{session('data')->user_name}}   
                        @if(session('data')->qx == 1)
                            超管
                        @elseif(session('data')->qx == 2))
                           管理员
                        @else
                           普通用户
                        @endif
                            
                    </div>
                    <ul>
                        <li><a href="/Admin/infor">个人中心</a></li>
                        <li><a href="/Admin/repass">修改密码</a></li>
                        <li><a href="/Admin/loginout">退出</a></li>
                    </ul>

                </div>
                    @else
                <div id="mws-user-functions">
                    <div id="mws-username">
                    <a href="/Admin/login">请登录！</a>
                    </div>
                </div>

                    @endif
            </div>
        </div>



    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="搜索...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active"><a href="/Admin"><i class="icon-home"></i>首页</a></li>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/Admin/user/create"><i class="icon-add-contact"></i> 添加用户</a></li>
                            <li><a href="/Admin/user"><i class="icon-users"></i> 用户列表</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-shopping-cart"></i> 商品管理</a>
 
                        <ul class="closed">

                            <li><a href="/Admin/goods/create"><i class="icon-indent-left"></i> 发布商品</a></li>
                            <li><a href="/Admin/goods"><i class="icon-list"></i> 商品管理</a></li>
                            <li><a href="/Admin/rec/index"><i class="icon-indent-left"></i> 回收站</a></li>
 
                            
                        </ul>
                    </li>
                    
                      <li>
                        <a href="#"><i class="icon-qrcode"></i> 分类管理</a>
                         <ul class="closed">
                            <li><a href="/Admin/cate/create"><i class="icon-star"></i> 添加分类</a></li>
                            <li><a href="/Admin/cate"><i class="icon-list-2"></i> 管理分类</a></li>
                            
                        </ul>
                    </li>
                    <!-- 刘大海 -->
                    <li>
                        <a href=""><i class="icon-link"></i> 订单管理</a>
                        <ul class="closed">
                            <li><a href="/Admin/order"><i class="icon-truck"></i> 订单管理</a></li>
                            <li><a href="/Admin/order/hsz"><i class="icon-truck"></i> 回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icon-link"></i> 友情链接</a>
                        <ul class="closed">
                            <li><a href="/Admin/link/create"><i class="icon-indent-left"></i> 添加链接</a></li>
                            <li><a href="/Admin/link"><i class="icon-list"></i> 管理链接</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="/Admin/ad"><i class="icon-television"></i> 轮播图管理</a>
                        <ul class="closed">
                            <li><a href="/Admin/ad/create"><i class="icon-indent-left"></i> 添加轮播图</a></li>
                            <li><a href="/Admin/ad"><i class="icon-list"></i> 管理轮播图</a></li>
                            
                        </ul>
                    </li>


                    
                
                    <li><a href="/Admin/config"><i class="icon-wrench"></i> 网站配置</a></li>
                    
                    <!-- qwer -->




                    <!-- xzcv -->
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->

        <div class="container">
       

                @if (session('success'))
                    <div class="mws-form-message success">
                        {{ session('success') }}
                    </div>
                @endif


                @if (session('error'))
                    <div class="mws-form-message error">
                        {{ session('error') }}
                    </div>
                @endif


                @if (count($errors) > 0)
                    <div class="mws-form-message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



            <!-- 内容填充区 -->
            @section('content')
                
            @show
            <!-- Inner Container End -->
        </div>
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>


    <div id="mws-themer">
        <div id="mws-themer-content" style="right: 0px;">
            <div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle" class="">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
            <div id="mws-theme-presets-container" class="mws-themer-section">
                <label for="mws-theme-presets">Color Presets</label>
            <select id="mws-theme-presets"><option value="0">Default</option><option value="1">Army</option><option value="2">Rocky Mountains</option><option value="3">Chinese Temple</option><option value="4">Boutique</option><option value="5">Toxic</option><option value="6">Aquamarine</option></select></div>
            <div class="mws-themer-separator"></div>
            <div id="mws-theme-pattern-container" class="mws-themer-section">
                <label for="mws-theme-patterns">Background</label>
            <select id="mws-theme-patterns"><option value="0">Paper</option><option value="1">Blueprint</option><option value="2">Bricks</option><option value="3">Carbon</option><option value="4">Circuit</option><option value="5">Holes</option><option value="6">Mozaic</option><option value="7">Roof</option><option value="8">Stripes</option><option value="9">Arches</option><option value="10">Bright Squares</option><option value="11">Brushed Alu</option><option value="12">Circles</option><option value="13">Climpek</option><option value="14">Connect</option><option value="15">Corrugation</option><option value="16">Cubes</option><option value="17">Diagonal Noise</option><option value="18">Diagonal Striped Brick</option><option value="19">Diamonds</option><option value="20">Diamond Upholstery</option><option value="21">Escheresque</option><option value="22">Fabric Plaid</option><option value="23">Furley</option><option value="24">Gplaypattern</option><option value="25">Gradient Squares</option><option value="26">Grey</option><option value="27">Grilled</option><option value="28">Hexellence</option><option value="29">Lghtmesh</option><option value="30">Light Alu</option><option value="31">Light Checkered Tiles</option><option value="32">Light Honeycomb</option><option value="33">Littleknobs</option><option value="34">Nistri</option><option value="35">Noise Lines</option><option value="36">Noise Pattern</option><option value="37">Noisy Grid</option><option value="38">Norwegian Rose</option><option value="39">Pineapplecut</option><option value="40">Pinstripe</option><option value="41">Project Papper</option><option value="42">Ravenna</option><option value="43">Reticular Tissue</option><option value="44">Rockywall</option><option value="45">Roughcloth</option><option value="46">Shattered</option><option value="47">Silver Scales</option><option value="48">Skelatal Weave</option><option value="49">Small Crackle Bright</option><option value="50">Small Tiles</option><option value="51">Square</option><option value="52">Struckaxiom</option><option value="53">Subtle Stripes</option><option value="54">Vichy</option><option value="55">Washi</option><option value="56">Wavecut</option><option value="57">Weave</option><option value="58">Whitey</option><option value="59">White Brick Wall</option><option value="60">White Tiles</option><option value="61">Worn Dots</option></select></div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-slider-range-min" style="width: 50%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 50%;"></a></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/a/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/a/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/a/js/libs/jquery.placeholder.min.js"></script>
    <script src="/a/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/a/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/a/jui/jquery-ui.custom.min.js"></script>
    <script src="/a/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/a/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/a/plugins/flot/jquery.flot.min.js"></script>
    <script src="/a/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/a/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/a/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/a/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/a/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/a/plugins/validate/jquery.validate-min.js"></script>
    <script src="/a/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/a/bootstrap/js/bootstrap.min.js"></script>
    <script src="/a/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/a/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/a/js/demo/demo.dashboard.js"></script>

</body>
</html>