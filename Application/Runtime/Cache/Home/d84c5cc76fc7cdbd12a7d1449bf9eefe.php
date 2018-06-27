<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>小米帐号 -登录</title>
    <link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>

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
            <h2 class="text-center">用户登录</h2>
        </div>
    </div>
    <div class="row">
        <div class="span10 offset2">
            <form class="form-horizontal" action="__CONTROLLER/phone_login" method="post">

                <div class="control-group">
                    <label class="control-label" for="inputUserPhone">手机号</label>
                    <div class="controls">
                        <input type="text" id="inputUserPhone" name="inputUserPhone" placeholder="请输入手机号" class="span4">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCode">验证码</label>
                    <div class="controls">
                        <input style="float:left;" type="password" id="inputCode" name="inputCode" placeholder="请输入验证码" class="span3">
                        <div style="cursor: pointer;" class="hqzt"><input type="button" id="identifyingCode" value="获取验证码"></div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for=""></label>
                    <div class="controls">
                        <button class="btn btn-primary js-ajax-submit span4" type="submit" style="margin-left: 0px">确定</button>
                    </div>
                </div>

                <div class="control-group" style="text-align: center;">
                    <ul class="inline">
                        <!-- <li><a href="<?php echo leuu('user/register/index');?>">现在注册</a></li>
                        <li><a href="<?php echo leuu('user/login/forgot_password');?>">忘记密码</a></li> -->
                    </ul>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /container -->
<!--<tc_include file="Public:scripts" />-->
<!--<script src="__TMPL__Public/js/passport.js"></script>-->
<script type="text/javascript" src=""></script>
<script>

    var regcountdown=90;
    function regsmstimecount(obj) {
        if (regcountdown == 0) {
            obj.removeClass('szzt');
            obj.addClass('hqzt');
            obj.val('获取验证码');
            regcountdown = 90;
        } else {
            //obj.text(regcountdown + "s");
            obj.val(regcountdown + "s");
            regcountdown--;
            setTimeout(function() {
                regsmstimecount(obj);
            }, 1000);
        }
    }

    //点击获取验证码
    $('#identifyingCode').click(function(){
        if(regcountdown==90){
            debugger;
            var telNum=$('#inputUserPhone').val();
            if(telNum==''||telNum==null){
                alert('请输入电话号码');
                return;
            }
            var data={type:4,mobile:telNum};
            $.getJSON("<?php echo leuu('api/mobileverify/send_yuyinLoginCode');?>",data,function(response){
                if(response.status==1 && response.info=='ok'){
                    alert('发送成功，请保持电话畅通!');
                    var sendbtn = $('#identifyingCode');
                    sendbtn.removeClass('hqzt');
                    sendbtn.addClass('szzt');
                    regsmstimecount(sendbtn);
                }else{
                    alert(response.info);
                }
            });
        }
    });

</script>
</body>
</html>