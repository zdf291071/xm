<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录界面</title>
    <style type="text/css">
        *{
            padding:0px;
            margin:0px;
        }
        #back_login_page{
            width:650px;
            height:300px;
            top:25%;
            left:26%;
            background:#90DBF6;
            position:absolute;
            z-index:1000;
            border-top-right-radius:120px;
            border-bottom-left-radius:120px;
            padding: 10px;
        }
        form>p{
            height:60px;
            line-height:60px;
        }
        form>p>span{
            height:50px;
            margin-right:10px;
            font-size:17px;
            font-weight:bold;
            color:#07438B;
        }
        form>p>input{
            height:23px;
            width:230px;
        }
        body{
            width:130px;
            height:645px;
            padding: 10px;
            background: -webkit-gradient(linear, left bottom, right top, from(#00abeb), to(#fff));
            -webkit-background-origin: padding;
            -webkit-background-clip: content;
        }
    </style>
</head>
<body style="">

<div id="back_login_page">
    <center>
        <center style="margin-top:40px;font-family:'楷体';"><b style="font-size:35px;color:#07438B;">后台管理系统</b></center>
        <form action="/xiaomi/index.php/Admin/Login/log" method="post">
            <p style="margin-top:20px;"><span>管理员名:</span><input type="text" name="username"></p>
            <p><span>用户密码:</span><input type="password" name="passwd"></p>
            <p><span></span><input type="submit" value="登录" style="color:#07438B;font-size:17px;font-weight:bold;height:40px;width:90px;cursor:pointer;background:#77BAED;"></p>
        </form>
    </center>
</div>
</body>
</html>