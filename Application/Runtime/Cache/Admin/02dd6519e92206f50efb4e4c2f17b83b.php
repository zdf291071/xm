<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心</title>
<link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>main.css" />
<link type="text/css" rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>css.css" />
</head>

<!--<body style="padding:10px;background:#DDEEF2;">-->
<body style="padding: 10px;background: #606060">
    <div class="admin_hd"><a href="###">管理中心</a></div>

    <div class="list_div mt10">
        <table width="100%" cellspacing="1" cellpadding="3">
            <tr>
                <th class="group-title" colspan="4">订单统计信息</th>
            </tr>

            <tr>
                <td width="20%"><a href="###">待发货订单:</a></td>
                <td width="30%" class="fb f_red"></td>
                <td width="20%"><a href="###">未确认订单:</a></td>
                <td width="30%" class="fb"></td>
            </tr>

            <tr>
                <td><a href="###">待支付订单:</a></td>
                <td class="fb"></td>
                <td><a href="###">已成交订单数:</a></td>
                <td class="fb"></td>
            </tr>

            <tr>
                <td width="20%">商品总数:</td>
                <td width="30%" class="fb"></td>
                <td width="20%"></td>
                <td width="30%"></td>
            </tr>
        </table>
    </div>


    <div class="list_div mt10">
    <table width="100%" cellspacing="1" cellpadding="3">
    <tbody><tr>
    <th class="group-title" colspan="4">系统信息</th>
    </tr>

    <tr class="row"><td width="15%"></td><td></td></tr>

    </table>
    </div>

    <div id="footer">版权所有 &copy; 2005-2013 www.xujiantao.com，并保留所有权利。</div>
</body>
</html>