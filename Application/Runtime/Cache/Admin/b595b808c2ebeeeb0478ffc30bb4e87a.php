<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
        <a class="navbar-brand" href="<?php echo U('Admin/Index/index');?>">小米MIX</a>

        <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    </div>

    <ul class="nav navbar-top-links navbar-right">


        <li class="dropdown" style="margin:0 16px 0 0;">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo U('Home/Index/index');?>"><i class="fa fa-user fa-fw"></i> 查看网店 </a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo U('Admin/Login/loginout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>

        </li>

    </ul>
</nav>
</body>
</html>
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
                        <a href="/xm/index.php/Admin/Active/index">公告列表</a>
                    </li>
                    <li>
                        <a href="/xm/index.php/Admin/Active/add_active">公告添加</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> 幻灯片设置<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xm/index.php/Admin/Photo/index">幻灯片列表</a>
                    </li>
                    <li>
                        <a href="/xm/index.php/Admin/Photo/add_photo">幻灯片添加</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-table"></i> 商品管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xm/index.php/Admin/Goods/index">商品列表</a>
                    </li>
                    <li>
                        <a href="/xm/index.php/Admin/Goods/add_goods">商品添加</a>
                    </li>
                </ul>
            </li>
            <?php if($_SESSION['gid'] == 1): ?><li>
                <a href="#"><i class="fa fa-edit"></i> 权限管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xm/index.php/Admin/Admin/index">管理员列表</a>
                    </li>
                    <li>
                        <a href="/xm/index.php/Admin/Admin/add_admin">管理员添加</a>
                    </li>
                </ul>
            </li><?php endif; ?>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> 用户管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xm/index.php/Admin/User/index">用户列表</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-qrcode"></i> 订单管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xm/index.php/Admin/Order/index">订单列表</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-qrcode"></i> 评论管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/xm/index.php/Admin/Comment/index">评论列表</a>
                    </li>
                    <li>
                        <a href="/xm/index.php/Admin/Comment/add_comment">评论添加</a>
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
					  <li><a href="/xm/index.php/Admin/Index/">主页</a></li>
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>待发货订单数</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="10" ><span class="percent">10</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>未确认订单数</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">5</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>待支付订单数</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">4</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>已成交订单数</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">0</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
			
		
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa-eye fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
								<h3><?php echo ($goods); ?></h3>
                               <strong> Daily Visits</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                              <div class="panel-left pull-left blue">
                                <i class="fa fa-shopping-cart fa-5x"></i>
								</div>
                                
                            <div class="panel-right">
							<h3><?php echo ($mycar); ?></h3>
                               <strong> Sales</strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa fa-comments fa-5x"></i>
                               
                            </div>
                            <div class="panel-right">
							 <h3><?php echo ($comment); ?></h3>
                               <strong> Comments </strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa-users fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
							<h3><?php echo ($user_num); ?> </h3>
                             <strong>No. of Visits</strong>

                            </div>
                        </div>
                    </div>
                </div>


                    <div class="col-md-8 col-sm-12 col-xs-12" style="width:1060px;margin-left:-16px;">


                        <div class="panel panel-default">
                            <table width="100%" cellspacing="1" cellpadding="3">
                                <tr>
                                    <th class="group-title" colspan="4">系统信息</th>
                                </tr>

                                <?php if(is_array($data["info"])): foreach($data["info"] as $key=>$v): ?><tr class="row"><td width="15%"><?php echo ($key); ?></td><td><?php echo ($v); ?></td></tr><?php endforeach; endif; ?>

                            </table>

                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
			

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