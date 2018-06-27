<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>小米商场 - 详细信息</title>
    <link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="icomoon/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>cssReset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>mycar.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>footer.css"/>
    <script src="<?php echo (HOME_JS_URL); ?>template.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<!--S:header-->
<header>
    <div class="container">
        <div class="topbar-nav">
            <ul>
                <li><a href="/xiaomi/index.php/Home/List/index">小米商城</a><span>|</span></li>
                <!--<A href="javascript:void(0)">点击</a>点击链接后不会回到网页顶部-->
                <li><a href="javascript:void(0)">MIUI</a><span>|</span></li>
                <li><a href="javascript:void(0)">米聊</a><span>|</span></li>
                <li><a href="javascript:void(0)">游戏</a><span>|</span></li>
                <li><a href="javascript:void(0)">多看阅读</a><span>|</span></li>
                <li><a href="javascript:void(0)">云服务</a><span>|</span></li>
                <li><a href="javascript:void(0)">金融</a><span>|</span></li>
                <li><a href="javascript:void(0)">米币</a><span>|</span></li>
                <li><a href="javascript:void(0)">小米商城手机版</a><span>|</span></li>
                <li><a href="javascript:void(0)">问题反馈</a><span>|</span></li>
                <li><a href="javascript:void(0)">Select Region</a></li>
            </ul>
        </div>
        <div class="topbar-cart">
            <a href="/xiaomi/index.php/Home/Car/mycar" id="mycar"><span class="style icon-cart"></span>购物车<i >( </i><i> 0 </i><i > )</i></a>
            <div class="showr-cart">
                <div class="loading"></div>
                <div class="loader"><span></span><span></span><span></span></div>
            </div>
            <div class="showr-list"><ul></ul>
                <div class="jie">
                    <a href="javascript:void(0)">
                        <span></span><br />
                        <span></span>
                    </a>
                    <a href="/xiaomi/index.php/Home/Car/mycar">去购物车结算</a>
                </div>
            </div>
        </div>
        <div class="topbar-user">
            <div id="infor">
                <div id="infor1">
                    <a href="/xiaomi/index.php/Home/Login/login">登录</a><span>|</span>
                    <a href="/xiaomi/index.php/Home/Login/register">注册</a><span>|</span>
                </div>
                <div id="infor2">
                    <div id="infor3"><a href="javascript:void(0)" id="myname"></a><b class="style icon-circle-down"></b>
                        <ul>
                            <li><a href="javascript:void(0)">个人中心</a></li>
                            <li><a href="javascript:void(0)">评价晒单</a></li>
                            <li><a href="javascript:void(0)">我的喜欢</a></li>
                            <li><a href="javascript:void(0)">小米账户</a></li>
                            <li><a href="javascript:void(0)" id="logout">退出登录</a></li>
                        </ul>
                    </div><span>|</span>
                </div>
            </div>

            <a href="javascript:void(0)">消息通知</a>
        </div>
    </div>
</header>
<!--E:header-->
<!--S:分界线-->
<div class="site-header">
    <div class="container">
        <a href="/xiaomi/index.php/Home/Index/index"></a>
        <h2>详细信息显示</h2>
    </div>
</div>
<!--E:分界线-->
<!--S:商品列表页面-->
<div class="cartBox">
    <div class="container">
        <p>单手可握的大屏手机</p>
        <img src="<?php echo (HOME_IMG_URL); ?>max2-1.jpg" style="width:1250px;height:500px;"/>
        <img src="<?php echo (HOME_IMG_URL); ?>max2-2.png" style="width:1250px;height:500px;"/>
        <img src="<?php echo (HOME_IMG_URL); ?>max2-3.jpg" style="width:1250px;height:500px;"/>
    </div>

    <div class="container">
        详情描述
    </div>

</div>

<footer>
    <nav></nav>
    <nav></nav>
</footer>
<script id="moban" type="text/html">
    <ul>
        {{each list as value}}
        <li><a href="javascript:void(0)">{{#value}}</a></li>
        {{/each}}
    </ul>
</script>
<script id="test" type="text/html">
    <div>
        {{include 'moban'}}
    </div>
</script>
<script id="moban1" type="text/html">

    {{each dd as value i}}
    <dd><a href="javascript:void(0)">{{value.dd1}}</a></dd>
    <dd><a href="javascript:void(0)">{{value.dd2}}</a></dd>
    <dd><a href="javascript:void(0)">{{value.dd3}}</a></dd>
    {{/each}}
</script>
<script id="test1" type="text/html">
    <div>
        {{each list1 as value i}}
        <dl>
            <dt>{{value.dt}}</dt>
            {{include 'moban1' value}}
        </dl>
        {{/each}}
        <div>
            <p>{{phone}}</p>
            <p>{{time}}<br />{{shou}}</p>
            <a href="javascript:void(0)">{{#zai}}</a>
        </div>
    </div>
</script>
<script id="test2" type="text/html">
    <div>
        <div>{{title}}</div>
        <div>
            <ul>
                {{each list2  as value i}}
                <li><a href="javascript:void(0)">{{value}}</a></li>
                {{/each}}
            </ul>
            <ul>
                {{each list3 as value i}}
                <li><a href="javascript:void(0)">{{value}}</a></li>
                {{/each}}
            </ul>
            <p>{{jubao}}</p>
        </div>
        <div>
            {{each list4 as value}}
            <a href="javascript:void(0)"><img src="{{value}}" alt=""/></a>
            {{/each}}
        </div>
    </div>
    <div>{{title1}}</div>
</script>
<!--E:创建网页footer底部模板-->
<!--传入底部模板数据-->
<script src="<?php echo (HOME_JS_URL); ?>footmb.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
<script src="<?php echo (HOME_JS_URL); ?>jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>mycar.js" type="text/javascript" charset="utf-8"></script>