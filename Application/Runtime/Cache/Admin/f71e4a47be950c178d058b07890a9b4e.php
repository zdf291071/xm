<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>小米MIX</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo (ADMIN_CSS_URL); ?>bootstrap1.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo (ADMIN_CSS_URL); ?>font-awesome1.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo (ADMIN_CSS_URL); ?>morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo (ADMIN_CSS_URL); ?>custom-styles1.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>cssCharts.css">
</head>
<style>

    .panel-default th.group-title {
        text-align: left;
        font-weight:normal;
        font-size:18px;
        border:1px solid #E8E8E8;
    }
    .panel-default th {
        border:1px solid #E8E8E8;
        height:24px;
        background:#ccc;
        font-size:12px;
        font-weight:700;
        text-align:center;
        color:#444;
        padding-left:5px;
    }

    .panel-default td {
        line-height: 22px;
        padding:5px;
    }

    .panel-default td {
        background:#fff;
        border:1px solid #E8E8E8;
    }

</style>
<style>
    #main-menu .nav-second-level li a{
        background:#585858;
        border-bottom:1px solid #383838;
    }
    #main-menu .nav-second-level li a:hover{
        color:#000;
        background:#fff;
    }
</style>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">小米MIX</a>

            <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-envelope fa-fw"></i> (0)
                </a>
            </li>


            <li class="dropdown" style="margin:0 16px 0 0;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> 查看网店 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </li>

        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> 最新活动<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">公告列表</a>
                        </li>
                        <li>
                            <a href="#">公告添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> 幻灯片设置<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">幻灯片列表</a>
                        </li>
                        <li>
                            <a href="#">幻灯片添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-qrcode"></i> 分类管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">分类列表</a>
                        </li>
                        <li>
                            <a href="#">分类添加</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-table"></i> 商品管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">商品列表</a>
                        </li>
                        <li>
                            <a href="#">商品添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> 权限管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/xiaomi/index.php/Admin/Admin/index">管理员列表</a>
                        </li>
                        <li>
                            <a href="#">管理员添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> 会员管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">会员列表</a>
                        </li>
                        <li>
                            <a href="#">添加会员</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-qrcode"></i> 订单管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">订单列表</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-qrcode"></i> 评论管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">评论列表</a>
                        </li>
                        <li>
                            <a href="#">评论添加</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </nav>


    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                <small>Welcome xiaomi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">主页</a></li>
                <li><a href="#">商品</a></li>
                <li class="active">Data</li>
            </ol>

        </div>

        <div class="col-md-8 col-sm-12 col-xs-12" style="width:1060px;margin-left:16px;">


            <div class="panel panel-default">
                <form name="theForm" id="demo" action="<?php echo U('Admin-Admin/edit_admin_sub');?>/" method="post">
                    <table width="100%" bgcolor="White">
                        <tr>
                            <td align="right">用户名</td>
                            <td><input type="text" name="user" class="input_text" value="<<?php echo ($data["info"]["username"]); ?>>" disabled="disabled" /></td>
                        </tr>

                        <tr>
                            <td align="right">Email地址</td>
                            <td><input type="text" class="input_text" name="email" value="<<?php echo ($data["info"]["email"]); ?>>" /></td>
                        </tr>

                        <tr>
                            <td align="right">新密码</td>
                            <td><input type="password" class="input_text" name="password" value="" /></td>
                        </tr>

                        <tr>
                            <td align="right"></td>
                            <td>
                                <input type="hidden" name="id" value="<<?php echo ($data["info"]["id"]); ?>>">
                                <input type="submit" class="button" value="确定提交">&nbsp;&nbsp;&nbsp;
                                <input type="reset" class="button" value=" 重置 ">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>


    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="<?php echo (ADMIN_JS_URL); ?>jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="<?php echo (ADMIN_JS_URL); ?>bootstrap.min.js"></script>

<!-- Metis Menu Js -->
<script src="<?php echo (ADMIN_JS_URL); ?>jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="<?php echo (ADMIN_JS_URL); ?>raphael-2.1.0.min.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>morris.js"></script>


<script src="<?php echo (ADMIN_JS_URL); ?>easypiechart.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>easypiechart-data.js"></script>

<script src="<?php echo (ADMIN_JS_URL); ?>jquery.chart.js"></script>

<!-- Custom Js -->
<script src="<?php echo (ADMIN_JS_URL); ?>custom-scripts.js"></script>

<script>

</script>

</body>

</html>