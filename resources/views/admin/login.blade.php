<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/a/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/a/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/a/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/a/css/mws-theme.css" media="screen">

<title>用户登录</title>

</head>

<body>
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
    <div id="mws-login-wrapper">
                   @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
        <div id="mws-login">
            <h1>用户登录</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/Admin/exect" method="post">
                    {{csrf_field()}}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="user_name" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li>
                                <input id="remember" type="checkbox"> 
                                <label for="remember">记住密码</label>
                            </li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Plugins -->
    <script src="/a/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/a/js/libs/jquery.placeholder.min.js"></script>
    <script src="/a/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/a/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/a/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/a/js/core/login.js"></script>

</body>
</html>
