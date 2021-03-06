<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>小米帐号 -登录</title>
		<link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>cssReset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>login.css"/>
	</head>
	<body>
		<!--S:header区域-->
		<header>
			<a href="index.html" title="回到首页"></a>
		</header>
		<!--E:header区域-->
		<!--S:content区域-->
		<div class="cont">
			<div class="wrap">
				<div class="whole">
					<div class="nav">
						<a href="javascript:void(0)" class="check">帐号登录</a>

					</div>
					<div class="tab1 select">
                        <form method="post" action="/xiaomi/index.php/Home/Login/log">
						<input type="text" id="uname" name="user" placeholder="用户名" /><br />
						<input type="password" id="upass" name="passwd" placeholder="密码" /><br />
						<div class="yan"><input type="text" name="verify" id="uyan" placeholder="验证码"/><img id="code" style="padding-top:13px;padding-left:3px;" src="/xiaomi/index.php/Home/Login/verify" alt="" /></div>
						<div class="show"><i class="style icon-sad"></i><span id="showerr"></span></div>
						<input type="submit" value="登陆" id="login"/><br />
                        </form>
						<div class="reset">
							<a href="/xiaomi/index.php/Home/Login/register">立即注册</a>
							<span>|</span>
							<a href="#" onclick="re_password()">忘记密码？</a>
						</div>

					</div>
					<div class="tab2">
						<img src="<?php echo (HOME_IMG_URL); ?>index.png"/>
						<p>使用<span>小米商城APP</span>扫一扫</p>
						<p>小米手机可打开「设置」>「小米帐号」扫码登录</p>
					</div>
					</div>
					<div id="suc">
						<h3>登录成功</h3>
						<span>3</span>
						<p>即将为您跳转首页</p>
					</div>
				
			</div>
		</div>
		<!--E:content区域-->		
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
<script type="text/javascript" charset="utf-8">
    var code = document.getElementById("code");
    code.onclick = function(){
        this.src = this.src+'?'+Math.random();
    }
</script>
<script src="<?php echo (HOME_JS_URL); ?>jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>login.js" type="text/javascript" charset="utf-8"></script>