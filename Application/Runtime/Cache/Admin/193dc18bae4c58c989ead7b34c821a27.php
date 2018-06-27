<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
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

<body>
<div id="wrapper">
    <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
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
</body>
</html>
    <!--/. NAV TOP  -->
    <!DOCTYPE html>
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
<body>
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
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> 最新活动<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Active/index">公告列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/Active/add_active">公告添加</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> 幻灯片设置<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Photo/index">幻灯片列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/Photo/add_photo">幻灯片添加</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-table"></i> 商品管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Goods/index">商品列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/Goods/add_goods">商品添加</a>
                    </li>
                </ul>
            </li>
            <?php if($_SESSION['gid'] == 1): ?><li>
                <a href="#"><i class="fa fa-edit"></i> 权限管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Admin/index">管理员列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/Admin/add_admin">管理员添加</a>
                    </li>
                </ul>
            </li><?php endif; ?>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> 会员管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/User/index">会员列表</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-qrcode"></i> 订单管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Order/index">订单列表</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-qrcode"></i> 评论管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Comment/index">评论列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/Comment/add_comment">评论添加</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
</body>
</html>


    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                <small>Welcome xiaomi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/xiaomi/index.php/Admin/Index">主页</a></li>
                <li><a href="#">会员管理</a></li>
                <li class="active">添加会员</li>
            </ol>

        </div>

        <div class="col-md-8 col-sm-12 col-xs-12" style="width:1060px;margin-left:16px;">


            <div class="panel panel-default">
                <form name="theForm" id="demo" action="" method="post">
                    <table width="100%" bgcolor="White">
                        <tr>
                            <td align="right">用户名</td>
                            <td><input type="text" name="username" class="input_text" value="" /><span class="require-field">*</span></td>
                        </tr>
                        <tr>
                            <td align="right">密  码</td>
                            <td><input type="password" class="input_text" size="34" maxlength="18" name="password"><span class="require-field">*</span></td>
                        </tr>
                        <tr>
                            <td align="right">权限Id</td>
                            <td><input type="text" class="input_text" size="34" name="gid" /><span class="require-field">*</span></td>
                        </tr>
                        <tr>
                            <td align="right">身份</td>
                            <td><input type="text" name="status" class="input_text" value="" /><span class="require-field">*</span></td>
                        </tr>

                        <tr>
                            <td align="right">&nbsp;</td>
                            <td>
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