<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>main.css" />
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery-1.6.2.min.js"></script>
<script>
$(function(){
    $('#hide').hover(function(){
	    $(this).parent().attr('bgcolor', '#fff');
	},function(){
	    $(this).parent().attr('bgcolor', '#ccc');
	})

    $('#hide').live('click', function(){
	    if(parent.Frame_body.cols=='180,10,*')
        {
		    parent.Frame_body.cols='0,10,*';
		    document.getElementById('ImgArrow').src='<?php echo (ADMIN_IMG_URL); ?>arrow_right.gif';
		    document.getElementById('ImgArrow').alt='打开左侧导航栏';
	    }
        else
        {
		    parent.Frame_body.cols='180,10,*';
		    document.getElementById('ImgArrow').src='<?php echo (ADMIN_IMG_URL); ?>arrow_left.gif';
		    document.getElementById('ImgArrow').alt='隐藏左侧导航栏';
	    }
	});
});
 
function MyLoad()
{
    if(window.parent.location.href.indexOf('MainUrl')>0)
    {
        window.top.hideFrame.document.getElementById('ImgArrow').src='<?php echo (ADMIN_IMG_URL); ?>arrow_left.gif';
    }
}
</script>
</head>

<body bgcolor="#fff" style="padding-top:200px" onload="MyLoad()">


<a class="fl pointer" id="hide"><img src="<?php echo (ADMIN_IMG_URL); ?>0.jpg" id="ImgArrow" alt="隐藏左侧导航栏"></a>

</body>
</html>