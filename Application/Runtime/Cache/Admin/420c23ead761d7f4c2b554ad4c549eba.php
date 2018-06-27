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
                <a href="#"><i class="fa fa-qrcode"></i> 分类管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/List/index">分类列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/List/add_list">分类添加</a>
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
            <li>
                <a href="#"><i class="fa fa-edit"></i> 权限管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xiaomi/index.php/Admin/Admin/index">管理员列表</a>
                    </li>
                    <li>
                        <a href="/xiaomi/index.php/Admin/Admin/add_admin">管理员添加</a>
                    </li>
                </ul>
            </li>
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
                <li><a href="#">订单管理</a></li>
                <li class="active">订单编辑</li>
            </ol>

        </div>

        <div class="col-md-8 col-sm-12 col-xs-12" style="width:1060px;margin-left:16px;">


            <div class="panel panel-default">


                <div class="clearfix">
                    <form action="/xiaomi/index.php/Admin/Order/update" method="POST">
                        <table width="100%" class="border1_blue">
                            <tr class="td_left">
                                <td>状态:<select name="status">
                                    <option value="未发货">未发货</option>
                                    <option value="已发货">已发货</option>
                                    <option value="已签收">已签收</option>
                                </select></td>

                                <td width="50%">订单编号：<?php echo ($data["id"]); ?></td>
                                <td>下单日期：<?php echo ($data["createtime"]); ?></td>
                                <td colspan="4" align="center">
                                    <input type="hidden" name="id"  value="<?php echo ($user["id"]); ?>" readonly="readonly">
                                    <input type="submit" value="修改信息" >
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <div class="clearfix mt10">
                    <table width="100%" cellspacing="1" border="0" bgcolor="#cccccc">
                        <tr>
                            <th style="background:#eeeeee">配送费用:</th>
                            <td>￥&nbsp;0&nbsp;元</td>
                        </tr>

                        <tr>
                            <th style="background:#eeeeee">订单总金额:</th>
                            <td class="price1">￥&nbsp;<?php echo ($data["money"]); ?>&nbsp;元</td>
                        </tr>
                    </table>
                </div>

                <h3 class="clearfix h20 mt20">收货人信息</h3>
                <div class="clearfix mt10">

                    <form action="/xiaomi/index.php/Admin/Order/update" method="GET">
                        <table width="100%" cellspacing="1" border="0" bgcolor="White" style="border:1px solid #DDDDDD" class="order_info">
                            <tr>
                                <th style="background: #d3eaf5">收货人姓名:</th>
                                <td><input type="text" name="email" value="<?php echo ($user["name"]); ?>" readonly="readonly"></td>
                                <th style="background: #d3eaf5">收货人Mail:</th>
                                <td><input type="text" name="email" value="<?php echo ($user["email"]); ?>" ></td>
                            </tr>

                            <tr>
                                <th style="background: #d3eaf5">联系电话:</th>
                                <td><input type="text" name="phone" value="<?php echo ($user["phone"]); ?>" ></td>
                            </tr>
                            <tr>
                                <th style="background: #d3eaf5">配送方式:</th>
                                <td>EMS</td>
                                <th style="background: #d3eaf5">付款方式:</th>
                                <td> 支付宝(及时付款) &nbsp;</td>
                            </tr>
                            <tr>
                                <th style="background: #d3eaf5">支付币别:</th>
                                <td colspan="3">人民币</td>
                            </tr>
                            <tr>
                                <th style="background: #d3eaf5" valign="top">收货人地址:</th>
                                <td valign="top" colspan="3"><input type="text" name="address" value="<?php echo ($user["address"]); ?>" ></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="center">
                                    <input type="hidden" name="id"  value="<?php echo ($user["id"]); ?>" readonly="readonly">
                                    <input type="submit" value="修改信息" >
                                </td>
                            </tr>
                        </table>
                    </form>

                </div>

            </div>
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