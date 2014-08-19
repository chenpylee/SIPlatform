<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>手机社保&#8482;平台管理</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/Public/js/html5shiv.js"></script>
    <script src="/Public/js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Admin/Index/index');?>"><span style="color:<?php echo (C("PAGE_INFO_LOGO_COLOR")); ?>">手机社保&#8482;</span> 管理平台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="<?php echo U('Admin/Index/index');?>" <?php if(($current_controller) == "Index"): ?>class="active"<?php endif; ?>>统计信息</a>
                </li>
                <li class="page-scroll">
                    <a href="<?php echo U('Admin/User/index');?>" <?php if(($current_controller) == "User"): ?>class="active"<?php endif; ?> >用户管理</a>
                </li>
                <li class="page-scroll">
                <a href="<?php echo U('Admin/Privilege/index');?>" <?php if(($current_controller) == "Privilege"): ?>class="active"<?php endif; ?> >权限管理</a>
            </li>
                <li class="page-scroll">
                    <a href="<?php echo U('Admin/App/index');?>" <?php if(($current_controller) == "App"): ?>class="active"<?php endif; ?> >手机应用设置</a>
                </li>

                <li class="page-scroll">
                    <a href="<?php echo U('Manage/Auth/logout');?>" data-toggle="modal">退出</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="layout_container">
    
<div class="row">
    <div class="col-xs-2 col-md-2">
        <ul class="nav nav-sidebar">
            <li class="active"><a href="#">用户列表</a></li>
            <li><a href="#">添加用户</a></li>
        </ul>

    </div>
    <div class="col-xs-2 col-md-10">用户管理</div>
</div>
    </div>
</div>



<!-- Footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; 同赢科技&#8482; tongyingtech.com 2014 <span></span>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery Version 1.11.0 -->
<script src="/Public/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/platform.js"></script>
<?php if(($current_controller_action) == "privilege/index"): ?><script type="text/javascript" language="javascript" src="/Public/js/admin/audit.list.js"></script><?php endif; ?>
<?php if(($current_controller_action) == "supplier/index"): ?><script type="text/javascript" language="javascript" src="/Public/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/Public/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#suppliers').dataTable({
                "aLengthMenu": [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"] // change per page values here
                ],
                "iDisplayLength": 20,
            });
        } );
        $('#suppliers')
                .removeClass( 'display' )
                .addClass('table table-striped table-bordered');
</script><?php endif; ?>

</body>

</html>