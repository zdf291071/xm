<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>小米帐号 -注册</title>
		<link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>cssReset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>register.css"/>
	</head>
	<body>
		<!--S:注册内容区域-->
		<div class="wrap">
			<div class="cont">
				<div class="cont1">
					<a href="index.html" title="回到首页"></a>
					<h2>注册小米账号</h2>
					<div id="xq">
					<p>注意<i>*</i>号为必填项</p>
					<p id="bj"></p>
					<p><b>登录名称</b><i>*</i><input type="text"/><span></span></p>
					<p><b>登录密码</b><i>*</i><input type="password" /><span></span></p>
					<p id="mmqd"><b>密码强度</b><em>&nbsp;</em><i></i><i></i><i></i></p>
					<p><b>重复密码</b><i>*</i><input type="password" /><span></span></p>
					<p><b>电子邮件</b><i>*</i><input type="text" /><span></span></p>
					<p><b>手机号码</b><i>*</i><input type="text" /><span></span></p>
					<p><input type="button" value="立即注册" id="ti"/></p>
				</div>
				</div>
				<div id="suc">
					<h3>注册成功</h3>
					<span>3</span>
					<p>即将为您跳转登录页面</p>
				</div>
			</div>
			
		</div>
		<!--E:注册内容区域-->
		<!--S:foot区域-->
		<footer>
			<ul>
				<li><a href="javascript:void(0)">简体</a><span>|</span></li>
				<li><a href="javascript:void(0)">繁体</a><span>|</span></li>
				<li><a href="javascript:void(0)">English</a><span>|</span></li>
				<li><a href="javascript:void(0)">常见问题</a></li>
			</ul>
			<p>小米公司版权所有-京ICP备10046444-<img src="<?php echo (HOME_IMG_URL); ?>ghs.png" alt="" />京公网安备11010802020134号-京ICP证110507号</p>
		</footer>
		<!--E:foot区域-->
	</body>
</html>
<script src="<?php echo (HOME_JS_URL); ?>cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>register.js" type="text/javascript" charset="utf-8"></script>