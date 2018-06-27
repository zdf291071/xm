<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>完善用户资料</title>
    <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($site_seo_description); ?>">

    <tc_include file="Public:head" />
    <style>
        .hqCode{
            position:absolute;
            width:2.45rem;
            height:2.45rem;
            top:0.251rem;
            right:0.31rem;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            background:#33ccff;
            color: #fff;
            text-align: center;
            font-size: 0.8rem;
            font-family: PingFangSC-Semibold, sans-serif;
        }
        .hqzt{
            line-height: 1.2rem;
        }
    </style>
</head>

<body class="body-white">

<div class="container tc-main">
    <div class="row">
        <div class="span7 offset2">
            <h2 class="text-center">重置密码</h2>
        </div>
    </div>
    <div class="row">
        <div class="span10 offset2">
            <form class="form-horizontal" action="/xiaomi/index.php/Home/Login/repass" method="post">



                <div class="contro l-group" style="margin-top:20px;">
                    <label class="control-label" for="inputPass">新密码</label>
                    <div class="controls">
                        <input type="password" id="inputPass" name="new_passwd" placeholder="请输入新密码" class="span4">
                        <span class="help-inline"></span>
                    </div>
                </div>



                <div class="contro l-group" style="margin-top:20px;">
                    <label class="control-label" for="inputPass">密码确认</label>
                    <div class="controls">
                        <input type="password" id="" name="new_password" placeholder="请重新输入新密码" class="span4">
                        <span class="help-inline"></span>
                    </div>
                </div>

                <div class="control-group" style="margin-top:20px;">
                    <label class="control-label" for=""></label>
                    <div class="controls">
                        <button class="btn btn-primary js-ajax-submit span4" type="submit" style="margin-left: 0px">确定</button>
                    </div>
                </div>
                <div class="control-group" style="text-align: center;">
                    <ul class="inline">

                    </ul>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /container -->
<!--<tc_include file="Public:scripts" />-->
<!--<script src="__TMPL__Public/js/passport.js"></script>-->

</body>
</html>