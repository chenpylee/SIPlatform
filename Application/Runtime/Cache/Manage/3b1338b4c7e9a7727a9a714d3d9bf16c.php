<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>登录手机社保管理平台</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/css/jishiyoo.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/Public/js/html5shiv.js"></script>
    <script src="/Public/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">手机社保&#8482;平台管理系统</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="platform_login" method="post" action="<?php echo U('/Manage/Auth/loginHandler/');?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="用户名" name="platform_username" id="platform_username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="platform_password" id="platform_password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">保持登录状态
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <input type="submit" class="btn btn-success btn-lg btn-block" value="登录"/>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery Version 1.11.0 -->
<script src="/Public/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/Public/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/Public/js/platform.js"></script>
<script src="/Public/js/login.js"></script>
</html>