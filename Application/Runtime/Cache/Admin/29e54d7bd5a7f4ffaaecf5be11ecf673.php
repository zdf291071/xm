<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>main.css" />
<link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>css.css" />
</head>

<body>


<div id="top_nav1">

    <span class="fl"><img src="<?php echo (HOME_IMG_URL); ?>favicon.ico" /></span>
    <span class="right_nav fr mt05">
        <div class="clearfix ta_r f_white">
        <ul>
            <li class="fr mr10"><a href="/xiaomi/index.php/Admin/Index/index" target="mainFrame">关于小米</a></li>
            <li class="fr pl05 pr05">|</li>
            <li class="fr"><a href="###">帮助</a></li>
            <li class="fr pl05 pr05">|</li>
            <li class="fr"><a href="Home-Index/Index" target="_blank">查看网店</a></li>
            <li class="fr pl05 pr05">|</li>
            <li class="fr"><a href="###">管理员留言</a></li>
            <li class="fr pl05 pr05">|</li>
            <li class="fr"><a href="javascript:window.top.frames['topFrame'].document.location.reload();javascript:window.top.frames['menuFrame'].document.location.reload();javascript:window.top.frames['mainFrame'].document.location.reload();">刷新</a></li>
        </ul>
        </div>

        <div class="clearfix ta_r mt05">
            <a class="f_green fr mr10 h18 lh18 pl05 pr05 bg_light_blue" href="/xiaomi/index.php/Admin/Index/login_out" class="top_submenu" target="_parent">退出</a>
            <a class="f_green fr mr10 h18 lh18 pl05 pr05 bg_light_blue" href="/xiaomi/index.php/Admin/Index/deleteCache" class="top_submenu" target="mainFrame">清除缓存</a>
        </div>
    </span>
    
</div>

<div id="top_nav2">
    <ul>
        <li class="fix-spacel">&nbsp;</li>
        <li><a href="/xiaomi/index.php/Admin/Index/mainFrame" class="nav2_list" target="mainFrame">起始页</a></li>
        <li><a href="/xiaomi/index.php/Admin/Index/Index" class="nav2_list" target="mainFrame">商品列表</a></li>
        <li><a href="/xiaomi/index.php/Admin/Index/index" class="nav2_list" target="mainFrame">订单列表</a></li>
        <li><a href="/xiaomi/index.php/Admin/Index/Index" class="nav2_list" target="mainFrame">用户评论</a></li>
        <li><a href="/xiaomi/index.php/Admin/Index/Index" class="nav2_list" target="mainFrame">会员列表</a></li>
        <li><a href="/xiaomi/index.php/Admin/Index/Index" class="nav2_list" target="mainFrame">商店设置</a></li>
        <li class="fix-spacer">&nbsp;</li>
    </ul>
</div>



</body>
</html>