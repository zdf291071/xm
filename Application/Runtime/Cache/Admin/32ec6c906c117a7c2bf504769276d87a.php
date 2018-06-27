<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>小米商城--后台登录界面</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>form-elements.css">
        <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo (HOME_IMG_URL); ?>favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo (ADMIN_IMG_URL); ?>apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo (ADMIN_IMG_URL); ?>apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo (ADMIN_IMG_URL); ?>apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo (ADMIN_IMG_URL); ?>apple-touch-icon-57-precomposed.png">

    </head>

    <body background="<?php echo (ADMIN_IMG_URL); ?>1.jpg" style="width:600px;height:900px;">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>小米</strong> Login Form</h1>
                            <div class="description">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-verify">Verification code</label>
                                        <input type="text" style="width:230px;" name="captcha" placeholder="Verification code..."id="form-verify">&nbsp;&nbsp;&nbsp;<img id="code"  src="/xm/index.php/Admin/Login/verify" alt="" />
                                    </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="<?php echo (ADMIN_JS_URL); ?>jquery-1.11.1.min.js"></script>
        <script src="<?php echo (ADMIN_JS_URL); ?>bootstrap.min.js"></script>
        <script src="<?php echo (ADMIN_JS_URL); ?>jquery.backstretch.min.js"></script>
        <script src="<?php echo (ADMIN_JS_URL); ?>scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo (ADMIN_JS_URL); ?>placeholder.js"></script>
        <![endif]-->
        <script type="text/javascript" charset="utf-8">
            var code = document.getElementById("code");
            code.onclick = function(){
                this.src = this.src+'?'+Math.random();
            }
        </script>

    </body>

</html>