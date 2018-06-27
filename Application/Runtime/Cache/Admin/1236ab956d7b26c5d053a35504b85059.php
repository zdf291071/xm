<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>main.css" />
<link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>css.css" />
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery-1.6.2.min.js"></script>
<script>
$(function(){
    $(".menu_top_tg a").click(function(){
	    $('#menu_list #menu_list2').slideToggle(100,function(){
		    if($(this).css('display') == 'none')
            {
				$('.menu_top_tg a img').attr('src', '<?php echo (ADMIN_IMG_URL); ?>admin_list_ico2.gif');
			}
            else
            {
				$('.menu_top_tg a img').attr('src', '<?php echo (ADMIN_IMG_URL); ?>admin_list_ico.gif');
			}
		});
	});

	$('.menulist_ico > a').click(function(){
	    $(this).parent().find('#menu_list2').slideToggle(100,function(){
		    if($(this).css('display') == 'none'){
			    $(this).parent().css('background', 'url(<?php echo (ADMIN_IMG_URL); ?>admin_list_ico.gif) 0 3px no-repeat');
			}else{
			    $(this).parent().css('background', 'url(<?php echo (ADMIN_IMG_URL); ?>admin_list_ico2.gif) 0 3px no-repeat');
			}
		});							 
	});
});
</script>
 
</head>
<body bgcolor="#979797">
 
<div id="menu_top">
    <span class="menu_top_tg padding_5 fr"><a href="###"><img src="<?php echo (ADMIN_IMG_URL); ?>admin_list_ico2.gif" /></a></span>
    <span class="menu_top_hd">菜单</span>
</div>

<div id="menu_main">
 <div id="menu_list">
     
     <ul>
     
     <li class="menulist_ico">
     <a href="###">权限管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">管理员列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">添加管理员</a></li>
         </ul>
     </li>
     
     <li class="menulist_ico">
     <a href="###">会员管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">会员列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">添加会员</a></li>
         </ul>
     </li>
     
     <li class="menulist_ico">
     <a href="###">最新精彩活动</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">公告列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">公告添加</a></li>
         </ul>
     </li>
     
     
     <li class="menulist_ico">
     <a href="###">首页幻灯片</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">幻灯片列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">幻灯片添加</a></li>
         </ul>
     </li>
     
     <li class="menulist_ico">
     <a href="###">分类管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">分类列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">添加分类</a></li>
         </ul>
     </li>
     
     <li class="menulist_ico">
     <a href="###">商品管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">商品列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">添加商品</a></li>
         </ul>
     </li>
     
     <li class="menulist_ico">
     <a href="###">评论/咨询管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">评论列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">添加评论</a></li>
         </ul>
     </li>
     
     <li class="menulist_ico">
     <a href="###">优惠券管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">优惠券列表</a></li>
         <li class="menu_item"><a href="" target="mainFrame">添加优惠券</a></li>
         </ul>
     </li>

     <li class="menulist_ico">
     <a href="###">订单管理</a>
         <ul id="menu_list2">
         <li class="menu_item"><a href="" target="mainFrame">订单列表</a></li>
         </ul>
     </li>
     
     </ul>

 </div>
</div>
 
 
</body>
</html>