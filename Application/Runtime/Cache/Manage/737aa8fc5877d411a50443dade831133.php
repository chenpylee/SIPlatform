<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>手机社保管理平台</title>

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
                <a class="navbar-brand" href="#page-top"><span style="color:<?php echo (C("PAGE_INFO_LOGO_COLOR")); ?>">手机社保&#8482;</span>管理平台</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">功能介绍</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#platform">平台介绍</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo ($login_url); ?>" data-toggle="modal"><?php echo ($login_title); ?></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="intro-text">
                        <span class="name">手机社保</span>
                        <hr class="star-light">
                        <span class="skills">移动互联网时代社保业务新平台</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>合作伙伴</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/Public/img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/Public/img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/Public/img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/Public/img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/Public/img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/Public/img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="platform">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>平台介绍</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>手机社保&#8482;手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保 手机社保</p>
                </div>
                <div class="col-lg-4">
                    <p>我们的优势，我们的优势我们的优势我们的优势我们的优势我们的优势我们的优势我们的优势我们的优势我们的优势我们的优势，我们的优势我们的优势我们的优势，我们的优势我们的优势我们的优势我们的优势我们的优势，我们的优势我们的优势我们的优势</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-info-circle"></i> 详细内容
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>联系方式</h3>
                        <p><span>联系人：李海宁</span><br>联系电话：18338228688</br></p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>社交平台</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>关于手机社保&#8482;</h3>
                        <p>手机社保&#8482;是由郑州同赢科技有限公司开发的智能手机社保业务平台。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 同赢科技 tongyingtech.com 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>同赢科技</h2>
                            <hr class="star-primary">
                            <img src="/Public/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>品牌介绍 品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍</p>
                            <ul class="list-inline item-details">
                                <li>品牌:
                                    <strong><a href="http://startbootstrap.com">合生元</a>
                                    </strong>
                                </li>
                                <li>合作时间:
                                    <strong><a href="http://startbootstrap.com">2014年6月</a>
                                    </strong>
                                </li>

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>同赢科技</h2>
                            <hr class="star-primary">
                            <img src="/Public/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>品牌介绍 品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍</p>
                            <ul class="list-inline item-details">
                                <li>品牌:
                                    <strong><a href="http://startbootstrap.com">合生元</a>
                                    </strong>
                                </li>
                                <li>合作时间:
                                    <strong><a href="http://startbootstrap.com">2014年6月</a>
                                    </strong>
                                </li>

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>同赢科技</h2>
                            <hr class="star-primary">
                            <img src="/Public/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>品牌介绍 品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍</p>
                            <ul class="list-inline item-details">
                                <li>品牌:
                                    <strong><a href="http://startbootstrap.com">合生元</a>
                                    </strong>
                                </li>
                                <li>加盟时间:
                                    <strong><a href="http://startbootstrap.com">2014年6月</a>
                                    </strong>
                                </li>

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>同赢科技</h2>
                            <hr class="star-primary">
                            <img src="/Public/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>品牌介绍 品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍</p>
                            <ul class="list-inline item-details">
                                <li>品牌:
                                    <strong><a href="http://startbootstrap.com">同赢科技</a>
                                    </strong>
                                </li>
                                <li>合作时间:
                                    <strong><a href="http://startbootstrap.com">2014年6月</a>
                                    </strong>
                                </li>

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>同赢科技</h2>
                            <hr class="star-primary">
                            <img src="/Public/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>品牌介绍 品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍</p>
                            <ul class="list-inline item-details">
                                <li>品牌:
                                    <strong><a href="http://startbootstrap.com">合生元</a>
                                    </strong>
                                </li>
                                <li>合作时间:
                                    <strong><a href="http://startbootstrap.com">2014年6月</a>
                                    </strong>
                                </li>

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>同赢科技</h2>
                            <hr class="star-primary">
                            <img src="/Public/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>品牌介绍 品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍品牌介绍</p>
                            <ul class="list-inline item-details">
                                <li>品牌:
                                    <strong><a href="http://startbootstrap.com">合生元</a>
                                    </strong>
                                </li>
                                <li>合作时间:
                                    <strong><a href="http://startbootstrap.com">2014年6月</a>
                                    </strong>
                                </li>

                            </ul>
                            <div class="col-lg-8 col-lg-offset-2 text-center">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="/Public/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/Public/js/jquery.easing.min.js"></script>
    <script src="/Public/js/classie.js"></script>
    <script src="/Public/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/Public/js/jqBootstrapValidation.js"></script>
    <script src="/Public/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/Public/js/platform.js"></script>

</body>

</html>