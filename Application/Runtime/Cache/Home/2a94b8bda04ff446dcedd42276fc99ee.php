<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>小米商城</title>
    <meta name="description" content="小米商城直营小米公司旗下所有产品，囊括小米手机系列小米Note 3、小米5X、小米MIX 2，红米手机系列红米4X、红米Note 5A，智能硬件，配件及小米生活周边，同时提供小米客户服务及售后支持。"/>
    <meta name="keywords" content="小米,小米Note 3,小米6,小米MIX 2,小米商城"/>
    <meta name="viewport" content="width=1226"/>
    <meta name="author" content="SnowLu"/>
    <link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>cssReset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>index.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>footer.css"/>
    <script src="<?php echo (HOME_JS_URL); ?>template.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo (HOME_JS_URL); ?>require.js" data-main="main"></script>

</head>

<body>
<!--S:Top-->
<div class="site-bn-bar"><a href="javascript:void(0)" class="site-bn-bar-link"></a></div>
<!--E:Top-->
<!--S:header-->
<header>
    <div class="container">

        <div class="topbar-nav">
            <ul>
                <li><a href="/xm">小米商城</a><span>|</span></li>
                <li><a href="http://www.miui.com/">MIUI</a><span>|</span></li>
                <li><a href="http://www.miliao.com/">米聊</a><span>|</span></li>
                <li><a href="http://game.xiaomi.com/">游戏</a><span>|</span></li>
                <li><a href="http://www.duokan.com/">多看阅读</a><span>|</span></li>
                <li><a href="https://i.mi.com/">云服务</a><span>|</span></li>
                <li><a href="javascript:void(0)">问题反馈</a></li>
            </ul>
        </div>

        <div class="topbar-cart">
            <a href="/xm/index.php/Home/Car/mycar" id="mycar"><span class="style icon-cart"></span>购物车<i >( </i><i> 0 </i><i > )</i></a>
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
                    <a href="/xm/index.php/Home/Car/mycar">去购物车结算</a>
                </div>
            </div>
        </div>
        <div class="topbar-user">
            <?php if($_SESSION['name']== null): ?><div id="infor">

                <div id="infor1">

                    <a href="/xm/index.php/Home/Login/login">登录</a><span>|</span>

                </div>

            </div>
            <a href="/xm/index.php/Home/Login/register">注册</a><span>|</span>

               <?php else: ?>
                <?php if($_SESSION['name']!= null): ?><a href="#">hello,<span style="color:red;"><?php echo (session('name')); ?></span></a>
                    <a href="<?php echo U('Home/Login/loginout');?>">退出</a><span>|</span><?php endif; endif; ?>


        </div>
    </div>
</header>
<!--E:header-->
<!--S:nav-->
<nav>
    <div class="container">
        <div class="header-logo">
            <a href="/xm/index.php/Home/Index/index" title="全部商品分类">小米官网</a>
        </div>
        <div class="nav-list">
            <ul>
                <li><a href="javascript:void(0)">小米手机</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=mix2320-220.png&name=小米MIX2&price=3299"><img src="<?php echo (HOME_IMG_URL); ?>mix2320-220.png"/></a></p><p>小米MIX2</p><p>3299元起</p></li>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=note2320x220.png&name=小米Note3&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>note2320x220.png"/></a></p><p>小米Note3</p><p>2499元起</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=xm6-320.png&name=小米6&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>xm6-320.png"/></a></p><p>小米6</p><p>2499元起</p></li>
                                <li><p>享多重优惠</p><p><a href="/xm/index.php/Home/Index/show?photo=max2_toubu.png&name=小米Max2&price=1599"><img src="<?php echo (HOME_IMG_URL); ?>max2_toubu.png"/></a></p><p>小米Max2</p><p>1599元起</p></li>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=5x-2!160x110.jpg&name=小米5X&price=1299"><img src="<?php echo (HOME_IMG_URL); ?>5x-2!160x110.jpg"/></a></p><p>小米5X</p><p>1299元起</p></li>
                                <li><p>下单立减600</p><p><a href="/xm/index.php/Home/Index/show?photo=xiaomiNOTE2-320-220!160x110.jpg&name=小米Note2&price=2099"><img src="<?php echo (HOME_IMG_URL); ?>xiaomiNOTE2-320-220!160x110.jpg"/></a></p><p>小米Note2</p><p>2099元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">红米</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=3205a.png&name=红米Note 5A标准版&price=699"><img src="<?php echo (HOME_IMG_URL); ?>3205a.png"/></a></p><p>红米Note 5A 标准版</p><p>699元</p></li>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=320-220!160x110.jpg&name=红米Note 5A高配版&price=899"><img src="<?php echo (HOME_IMG_URL); ?>320-220!160x110.jpg"/></a></p><p>红米Note 5A 高配版</p><p>899元起</p></li>
                                <li><p>享免息</p><p><a href="/xm/index.php/Home/Index/show?photo=hmn4xtb!160x110.jpg&name=红米Note 4X&price=999"><img src="<?php echo (HOME_IMG_URL); ?>hmn4xtb!160x110.jpg"/></a></p><p>红米Note 4X</</p><p>999元起</p></li>
                                <li><p>享免息</p><p><a href="/xm/index.php/Home/Index/show?photo=hm4x!160x110.jpg&name=红米4X&price=699"><img src="<?php echo (HOME_IMG_URL); ?>hm4x!160x110.jpg"/></a></p><p>红米4X</p><p>699元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">平板 · 笔记本</a>
                    <div class="item-children">
                        <div class="container">

                            <ul>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=mipad3_320.png&name=小米平板3 64GB&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>mipad3_320.png"/></a></p><p>小米平板3 64GB</p><p>1499元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=bijiben32012.5!160x110.jpg&name=小米笔记本Air 12.5&price=3599"><img src="<?php echo (HOME_IMG_URL); ?>bijiben32012.5!160x110.jpg"/></a></p><p>小米笔记本Air 12.5"</p><p>3599元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=bijiben320!160x110.jpg&name=小米笔记本Air 12.5&price=4999"><img src="<?php echo (HOME_IMG_URL); ?>bijiben320!160x110.jpg"/></a></p><p>小米笔记本Air 12.5"</p><p>4999元<p></li>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=WechatIMG603.png&name=小米笔记本Air 12.5&price=5999"><img src="<?php echo (HOME_IMG_URL); ?>WechatIMG603.png"/></a></p><p>小米笔记本Air 12.5"</p><p>5999元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">电视</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>超薄旗舰</p><p><a href="/xm/index.php/Home/Index/show?photo=xmds_49.png&name=小米电视4 49英寸&price=3599"><img src="<?php echo (HOME_IMG_URL); ?>xmds_49.png"/></a></p><p>小米电视4 49英寸</p><p>3599元</p></li>
                                <li><p>超薄旗舰</p><p><a href="/xm/index.php/Home/Index/show?photo=xmds_55.png&name=小米电视4 55英寸&price=4499"><img src="<?php echo (HOME_IMG_URL); ?>xmds_55.png"/></a></p><p>小米电视4 55英寸</p><p>4499元</p></li>
                                <li><p>超薄旗舰</p><p><a href="/xm/index.php/Home/Index/show?photo=dianshi465.png&name=小米电视4 65英寸&price=9999"><img src="<?php echo (HOME_IMG_URL); ?>dianshi465.png"/></a></p><p>小米电视4 65英寸</p><p>9999元</p></li>
                                <li><p>超薄旗舰</p><p><a href="/xm/index.php/Home/Index/show?photo=320_43.png&name=小米电视4A 43英寸&price=1999"><img src="<?php echo (HOME_IMG_URL); ?>320_43.png"/></a></p><p>小米电视4A 43英寸</p><p>1999元</p></li>
                                <li><p>热卖</p><p><a href="/xm/index.php/Home/Index/show?photo=320_49.png&name=小米电视4A 49英寸&price=2199"><img src="<?php echo (HOME_IMG_URL); ?>320_49.png"/></a></p><p>小米电视4A 49英寸</p><p>2199元</p></li>
                                <li><p>热卖</p><p><a href="/xm/index.php/Home/Index/show?photo=70dianshi.png"><img src="<?php echo (HOME_IMG_URL); ?>70dianshi.png"/></a></p><p class="itmem-children-three">查看全部</p><p>小米电视</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">盒子 · 影音</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=mihezi.png&name=小米盒子3s&price=399"><img src="<?php echo (HOME_IMG_URL); ?>mihezi.png"/></a></p><p>小米盒子3s</p><p>399元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=mihezi.png&name=小米盒子3c&price=229"><img src="<?php echo (HOME_IMG_URL); ?>mihezi.png"/></a></p><p>小米盒子3c</p><p>229元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=hezi3s!160x110.jpg&name=小米盒子3 增强版&price=399"><img src="<?php echo (HOME_IMG_URL); ?>hezi3s!160x110.jpg"/></a></p><p>小米盒子3 增强版</p><p>399元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=320x220.png&name=小米家庭影院&price=1999"><img src="<?php echo (HOME_IMG_URL); ?>320x220.png"/></a></p><p>小米家庭影院</p><p>1999元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">路由器</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>大容量</p><p><a href="/xm/index.php/Home/Index/show?photo=HD-Pro.png&name=小米路由器 HD/Pro&price=499"><img src="<?php echo (HOME_IMG_URL); ?>HD-Pro.png"/></a></p><p>小米路由器 HD/Pro</p><p>499元起</p></li>
                                <li><p>双千兆</p><p><a href="/xm/index.php/Home/Index/show?photo=3G.png&name=小米路由器 3G&price=249"><img src="<?php echo (HOME_IMG_URL); ?>3G.png"/></a></p><p>小米路由器 3G</p><p>249元</p></li>
                                <li><p>双频</p><p><a href="/xm/index.php/Home/Index/show?photo=xmlyq3.png&name=小米路由器 3&price=149"><img src="<?php echo (HOME_IMG_URL); ?>xmlyq3.png"/></a></p><p>小米路由器 3</p><p>149元</p></li>
                                <li><p>包邮</p><p><a href="/xm/index.php/Home/Index/show?photo=3C.png&name=小米路由器 3C&price=99"><img src="<?php echo (HOME_IMG_URL); ?>3C.png"/></a></p><p>小米路由器 3C</p><p>99元</p></li>
                                <li><p>新品</p><p><a href="/xm/index.php/Home/Index/show?photo=dlm01.png&name=小米WiFi电力猫&price=249"><img src="<?php echo (HOME_IMG_URL); ?>dlm01.png"/></a></p><p>小米WiFi电力猫</p><p>249元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=fdq2!160x110.jpg&name=小米WiFi放大器 2&price=49"><img src="<?php echo (HOME_IMG_URL); ?>fdq2!160x110.jpg"/></a></p><p>小米WiFi放大器 2</p><p>49元</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">智能硬件</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>航拍利器</p><p><a href="/xm/index.php/Home/Index/show?photo=123321!160x110.jpg&name=小米无人机&price=2999"><img src="<?php echo (HOME_IMG_URL); ?>123321!160x110.jpg"/></a></p><p>小米无人机</p><p>2999元</p></li>
                                <li><p>包邮</p><p><a href="/xm/index.php/Home/Index/show?photo=sh2-320-220.png&name=小米手环2&price=149"><img src="<?php echo (HOME_IMG_URL); ?>sh2-320-220.png"/></a></p><p>小米手环2</p><p>149元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=jsqcs-320-220.png&name=小米净水器&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>jsqcs-320-220.png"/></a></p><p>小米净水器</p><p>1499元起</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=saodijiqiren320-220!160x110.jpg&name=米家扫地机器人&price=1699"><img src="<?php echo (HOME_IMG_URL); ?>saodijiqiren320-220!160x110.jpg"/></a></p><p>米家扫地机器人</p><p>1699元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=dfb!160x110.jpg&name=米家压力IH电饭煲&price=999"><img src="<?php echo (HOME_IMG_URL); ?>dfb!160x110.jpg"/></a></p><p>米家压力IH电饭煲</p><p>999元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="/xm/index.php/Home/Index/show?photo=air2!160x110.jpg"><img src="<?php echo (HOME_IMG_URL); ?>air2!160x110.jpg"/></a></p><p class="itmem-children-three">查看全部</p><p>智能硬件</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">服务</a></li>
                <li><a href="javascript:void(0)">社区</a></li>
            </ul>
        </div>
        <div class="nav-search">

            <input type="text" name="keyword" id="search"/>
            <button class="style icon-search" id="search-btn"></button>
            <div class="search-hot-words">
                <a href="/xm/index.php/Home/Index/show?photo=max-2.jpg">小米Max 2</a>
                <a href="/xm/index.php/Home/Index/show?photo=note-3.jpg">小米Note 3</a>
            </div>
            <div id="keyword"><ul id="keyul"></ul></div><a  id="keya"></a>
        </div>
    </div>
</nav>
<!--E:nav-->
<!--S:图片导航-->
<div class="container home-slider">
    <div class="img-right" id="imgright">

        <ul>
            <li>
                <a href="javascript:void(0)">

                    <img id="img" src="<?php echo (HOME_IMG_URL); ?>show1.jpg"/>
                </a>
            </li>
            <a href="javascript:;" class="prev" id="prev">＜</a>
            <a href="javascript:;" class="next" id="next">＞</a>
        </ul>

        <ol id="imgyuan">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>

    <div class="img-left">
        <ul>
            <li><a href="javascript:void(0)">手机 电话卡<i>&gt;</i></a>
                <div class="children  children-col-1">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=note3-80-2.png&name=小米Note 3&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>note3-80-2.png"/><span>小米Note 3</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mix2-80.png&name=小米MIX 2&price=3299"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>小米MIX 2</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xm6_80.png&name=小米6&price=3499"><img src="<?php echo (HOME_IMG_URL); ?>xm6_80.png"/><span>小米6</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80pc-5x.png&name=小米5X&price=2999"><img src="<?php echo (HOME_IMG_URL); ?>80pc-5x.png"/><span>小米5X</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=max2_80.jpg&name=小米Max 2&price=3199"><img src="<?php echo (HOME_IMG_URL); ?>max2_80.jpg"/><span>小米Max 2</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=5c_80.png&name=小米5c&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>5c_80.png"/><span>小米手机5c</span></a><a href="javascript:void(0)">选购</a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=note3-80-2.png&name=小米Note 3&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>note3-80-2.png"/><span>小米Note 3</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mix2-80.png&name=小米MIX 2&price=3299"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>小米MIX 2</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xm6_80.png&name=小米6&price=3499"><img src="<?php echo (HOME_IMG_URL); ?>xm6_80.png"/><span>小米6</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80pc-5x.png小米5X&price=2999"><img src="<?php echo (HOME_IMG_URL); ?>80pc-5x.png"/><span>小米5X</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=max2_80.jpg&name=小米Max 2&price=3199"><img src="<?php echo (HOME_IMG_URL); ?>max2_80.jpg"/><span>小米Max 2</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=5c_80.png&name=小米5c&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>5c_80.png"/><span>小米手机5c</span></a><a href="javascript:void(0)">选购</a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=note3-80-2.png&name=小米Note 3&price=2499"><img src="<?php echo (HOME_IMG_URL); ?>note3-80-2.png"/><span>小米Note 3</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mix2-80.png&name=小米MIX 2&price=3299"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>小米MIX 2</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80.jpg&name=移动4G+专区&price=99"><img src="<?php echo (HOME_IMG_URL); ?>80.jpg"/><span>移动4G+专区</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=compare.jpg&name=小米联通 电话卡&price=49"><img src="<?php echo (HOME_IMG_URL); ?>compare.jpg"/><span>小米联通 电话卡</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mifenka-1.jpg&name=米粉卡 日租卡&price=49"><img src="<?php echo (HOME_IMG_URL); ?>mifenka-1.jpg"/><span>米粉卡 日租卡 2</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mimobile.jpg&name=小米移动 电话卡&price=49"><img src="<?php echo (HOME_IMG_URL); ?>mimobile.jpg"/><span>小米移动 电话卡</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="/xm/index.php/Home/Index/show?photo=">笔记本 平板<i>&gt;</i></a>
                <div class="children  children-col-2">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=bijiben80.jpg&name=笔记本12.5英寸&price=2999"><img src="<?php echo (HOME_IMG_URL); ?>bijiben80.jpg"/><span>笔记本12.5英寸</span></a><a href="">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mix2-80.png&name=笔记本13.3英寸&price=3499"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>笔记本13.3英寸</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mix2-80.png&name=笔记本Pro15英寸&price=3799"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>笔记本Pro15英寸</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mipad3_80.jpg&name=小米平板3&price=2299"><img src="<?php echo (HOME_IMG_URL); ?>mipad3_80.jpg"/><span>小米平板3</span></a><a href="javascript:void(0)">选购</a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=bjbcdq80.jpg&name=USB-C电源适配器&price=299"><img src="<?php echo (HOME_IMG_URL); ?>bjbcdq80.jpg"/><span>USB-C电源适配器</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=usbzjqggg80.jpg&name=USB-C转接器&price=399"><img src="<?php echo (HOME_IMG_URL); ?>usbzjqggg80.jpg"/><span>USB-C转接器</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=neidanbao80.jpg&name=小米笔记本内胆包&price=399"><img src="<?php echo (HOME_IMG_URL); ?>neidanbao80.jpg"/><span>小米笔记本内胆包</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=ymjp80.jpg&name=悦米机械键盘&price=359"><img src="<?php echo (HOME_IMG_URL); ?>ymjp80.jpg"/><span>悦米机械键盘</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=shubiao80.jpg&name=小米便携鼠标&price=159"><img src="<?php echo (HOME_IMG_URL); ?>shubiao80.jpg"/><span>小米便携鼠标</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=wxsb80.png&name=小米无线鼠标&price=199"><img src="<?php echo (HOME_IMG_URL); ?>wxsb80.png"/><span>小米无线鼠标</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmsbd80.jpg&name=鼠标垫&price=69"><img src="<?php echo (HOME_IMG_URL); ?>xmsbd80.jpg"/><span>鼠标垫</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=USBC80.jpg&name=DisplayPort转接器&price=229"><img src="<?php echo (HOME_IMG_URL); ?>USBC80.jpg"/><span>DisplayPort转接器</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">电视 盒子<i>&gt;</i></a>
                <div class="children  children-col-1">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80xmds_49.jpg&name=小米电视4 49英寸&price=2699"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80xmds_55.jpg&name=小米电视4 55英寸&price=2999"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_55.jpg"/><span>小米电视4 55英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80xmds_65.jpg&name=小米电视4 65英寸&price=3499"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_65.jpg"/><span>小米电视4 65英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zuodaohang.jpg&name=小米电视4 32英寸&price=1999"><img src="<?php echo (HOME_IMG_URL); ?>zuodaohang.jpg"/><span>小米电视4 32英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=4A43.jpg&name=小米电视4 43英寸&price=2299"><img src="<?php echo (HOME_IMG_URL); ?>4A43.jpg"/><span>小米电视4 43英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xp80_49.jpg&name=小米电视4 49英寸&price=2699"><img src="<?php echo (HOME_IMG_URL); ?>xp80_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80xmds_49.jpg&name=小米电视4 49英寸&price=2699"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80xmds_55.jpg&name=小米电视4 55英寸&price=2999"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_55.jpg"/><span>小米电视4 55英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80xmds_65.jpg&name=小米电视4 65英寸&price=3499"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_65.jpg"/><span>小米电视4 65英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zuodaohang.jpg&name=小米电视4 32英寸&price=1999"><img src="<?php echo (HOME_IMG_URL); ?>zuodaohang.jpg"/><span>小米电视4 32英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=4A43.jpg&name=小米电视4 43英寸&price=2299"><img src="<?php echo (HOME_IMG_URL); ?>4A43.jpg"/><span>小米电视4 43英寸</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xp80_49.jpg&name=小米电视4 49英寸&price=2699"><img src="<?php echo (HOME_IMG_URL); ?>xp80_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=hezizengqiangban80side.jpg&name=小米盒子3 增强版&price=699"><img src="<?php echo (HOME_IMG_URL); ?>hezizengqiangban80side.jpg"/><span>小米盒子3 增强版</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=80x80.jpg&name=家庭音响&price=299"><img src="<?php echo (HOME_IMG_URL); ?>80x80.jpg"/><span>家庭音响</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=iconaz80.jpg&name=安装服务&price=199"><img src="<?php echo (HOME_IMG_URL); ?>iconaz80.jpg"/><span>安装服务</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=dianshipeijian.jpg&name=电视盒子配件&price=299"><img src="<?php echo (HOME_IMG_URL); ?>dianshipeijian.jpg"/><span>电视盒子配件</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=huiyuan.png&name=小米电视会员&price=49"><img src="<?php echo (HOME_IMG_URL); ?>huiyuan.png"/><span>小米电视会员</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=ertong1.png&name=小米儿童会员&price=29"><img src="<?php echo (HOME_IMG_URL); ?>ertong1.png"/><span>小米儿童会员</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">路由器 智能硬件<i>&gt;</i></a>
                <div class="children  children-col-3">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=phcplus80.jpg&name=九号平衡车&price=399"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiqiren.jpg&name=米家扫地机器人&price=699"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=VRPLAY2.png&name=小米VR眼镜&price=99"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=luyouqi-80.jpg&name=小米路由器&price=299"><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zxc80-80.jpg&name=电助力折叠自行车&price=799"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=shuihu80.jpg&name=电水壶&price=99"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=phcplus80.jpg&name=九号平衡车&price=399"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiqiren.jpg&name=米家扫地机器人&price=699"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=VRPLAY2.png&name=小米VR眼镜&price=99"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=luyouqi-80.jpg&name=小米路由器&price=299"><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zxc80-80.jpg&name=电助力折叠自行车&price=799"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=shuihu80.jpg&name=电水壶&price=99"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=phcplus80.jpg&name=九号平衡车&price=399"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiqiren.jpg&name=米家扫地机器人&price=699"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=VRPLAY2.png&name=小米VR眼镜&price=99"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=luyouqi-80.jpg&name=小米路由器&price=299""><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zxc80-80.jpg&name=电助力折叠自行车&price=799"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=shuihu80.jpg&name=电水壶&price=99"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=phcplus80.jpg&name=九号平衡车&price=399"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiqiren.jpg&name=米家扫地机器人&price=699"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=VRPLAY2.png&name=小米VR眼镜&price=99"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=luyouqi-80.jpg&name=小米路由器&price=299""><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zxc80-80.jpg&name=电助力折叠自行车&price=799"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=shuihu80.jpg&name=电水壶&price=99"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                    </ol>

                </div>
            </li>
            <li><a href="javascript:void(0)">移动电源 电池 插线板<i>&gt;</i></a>
                <div class="children  children-col-2">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=dianyuan280.jpg&name=小米移动电源&price=129"><img src="<?php echo (HOME_IMG_URL); ?>dianyuan280.jpg"/><span>小米移动电源</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=c1xb343.jpg&name=插线板&price=49"><img src="<?php echo (HOME_IMG_URL); ?>c1xb343.jpg"/><span>插线板</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=yidongdianyuan.jpg&name=品牌移动电源&price=99"><img src="<?php echo (HOME_IMG_URL); ?>yidongdianyuan.jpg"/><span>品牌移动电源</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=dianyuanfujian.jpg&name=移动电源附件&price=49"><img src="<?php echo (HOME_IMG_URL); ?>dianyuanfujian.jpg"/><span>移动电源附件</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=chongdianqi-80.jpg&name=充电器&price=99"><img src="<?php echo (HOME_IMG_URL); ?>chongdianqi-80.jpg"/><span>充电器</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=5Battery1.jpg&name=彩虹5号电池&price=19"><img src="<?php echo (HOME_IMG_URL); ?>5Battery1.jpg"/><span>彩虹5号电池</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=7Battery1.jpg&name=彩虹7号电池&price=19"><img src="<?php echo (HOME_IMG_URL); ?>7Battery1.jpg"/><span>彩虹7号电池</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">耳机 音箱<i>&gt;</i></a>
                <div class="children  children-col-3">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=toudai80.jpg&name=小米头戴式耳机&price=199"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=tdsqs80.jpg&name=头戴式耳机轻松版&price=159"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmjzej80.jpg&name=小米降噪耳机&price=259"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=qtpro80.jpg&name=小米圈铁耳机 Pro&price=139"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=quantie.jpg&name=小米圈铁耳机&price=99"><img src="<?php echo (HOME_IMG_URL); ?>quantie.jpg"/><span>小米圈铁耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiaonang80.jpg&name=小米胶囊耳机&price=299"><img src="<?php echo (HOME_IMG_URL); ?>jiaonang80.jpg"/><span>小米胶囊耳机</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=toudai80.jpg&name=小米头戴式耳机&price=199"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=tdsqs80.jpg&name=头戴式耳机轻松版&price=159"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmjzej80.jpg&name=小米降噪耳机&price=259"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=qtpro80.jpg&name=小米圈铁耳机 Pro&price=139"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=quantie.jpg&name=小米圈铁耳机&price=99"><img src="<?php echo (HOME_IMG_URL); ?>quantie.jpg"/><span>小米圈铁耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiaonang80.jpg&name=小米胶囊耳机&price=299"><img src="<?php echo (HOME_IMG_URL); ?>jiaonang80.jpg"/><span>小米胶囊耳机</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=toudai80.jpg&name=小米头戴式耳机&price=199"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=tdsqs80.jpg&name=头戴式耳机轻松版&price=159"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmjzej80.jpg&name=小米降噪耳机&price=259"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=qtpro80.jpg&name=小米圈铁耳机 Pro&price=139"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=quantie.jpg&name=小米圈铁耳机&price=99"><img src="<?php echo (HOME_IMG_URL); ?>quantie.jpg"/><span>小米圈铁耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=jiaonang80.jpg&name=小米胶囊耳机&price=299"><img src="<?php echo (HOME_IMG_URL); ?>jiaonang80.jpg"/><span>小米胶囊耳机</span></a></li>
                    </ol>
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=toudai80.jpg&name=小米头戴式耳机&price=199"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=tdsqs80.jpg&name=头戴式耳机轻松版&price=159"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmjzej80.jpg&name=小米降噪耳机&price=259"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=qtpro80.jpg&name=小米圈铁耳机 Pro&price=139"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">保护套 贴膜<i>&gt;</i></a>
                <div class="children  children-col-4">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=tiemo.jpg&name=贴膜&price=29"><img src="<?php echo (HOME_IMG_URL); ?>tiemo.jpg"/><span>贴膜</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=baohu.jpg&name=保护套/保护壳&price=19"><img src="<?php echo (HOME_IMG_URL); ?>baohu.jpg"/><span>保护套/保护壳</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">线材 支架 存储卡<i>&gt;</i></a>
                <div class="children  children-col-4">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xiancai.jpg&name=线材&price=19"><img src="<?php echo (HOME_IMG_URL); ?>xiancai.jpg"/><span>线材</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zipaigan.jpg&name=自拍杆&price=15"><img src="<?php echo (HOME_IMG_URL); ?>zipaigan.jpg"/><span>自拍杆</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zhijia.jpg&name=手机支架&price=19"><img src="<?php echo (HOME_IMG_URL); ?>zhijia.jpg"/><span>手机支架</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=cunchu.jpg&name=存储卡&price=49"><img src="<?php echo (HOME_IMG_URL); ?>cunchu.jpg"/><span>存储卡</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">箱包 服饰 鞋 眼镜<i>&gt;</i></a>
                <div class="children  children-col-4">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xiangbao-80.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xiangbao-80.jpg"/><span>箱包</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=lvxingxiang.jpg"><img src="<?php echo (HOME_IMG_URL); ?>lvxingxiang.jpg"/><span>90分旅行箱</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=huise2-80.jpg"><img src="<?php echo (HOME_IMG_URL); ?>huise2-80.jpg"/><span>服饰</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=ydx80.jpg"><img src="<?php echo (HOME_IMG_URL); ?>ydx80.jpg"/><span>运动鞋 板鞋</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=tyj80.jpg"><img src="<?php echo (HOME_IMG_URL); ?>tyj80.jpg"/><span>眼镜</span></a></li>
                    </ol>
                </div>
            </li>
            <li><a href="javascript:void(0)">米兔 生活周边<i>&gt;</i></a>
                <div class="children  children-col-4">
                    <ol>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mitu-80.jpg&name=米兔玩偶&price=99"><img src="<?php echo (HOME_IMG_URL); ?>mitu-80.jpg"/><span>米兔玩偶</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zhoubian1.jpg&name=生活周边&price=89"><img src="<?php echo (HOME_IMG_URL); ?>zhoubian1.jpg"/><span>生活周边</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=zazhi1021-80.jpg&name=毛巾/浴巾&price=19"><img src="<?php echo (HOME_IMG_URL); ?>zazhi1021-80.jpg"/><span>《小米》会刊</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=mj80.jpg&name=生活周边&price=89"><img src="<?php echo (HOME_IMG_URL); ?>mj80.jpg"/><span>毛巾/浴巾 Pro</span></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=rjcd80.jpg&name=8H乳胶床品price=69"><img src="<?php echo (HOME_IMG_URL); ?>rjcd80.jpg"/><span>8H乳胶床品</span></a></li>
                    </ol>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--E:图片导航-->
<!--S:选购手机-->
<div class="container home-hero">
    <div class="span4">
        <ul>
            <li><a href="javascript:void(0)"><i class="style icon-mobile2 "></i>选购手机</a></li>
            <li><a href="javascript:void(0)"><i class="style icon-gift "></i>企业团购</a></li>
            <li><a href="javascript:void(0)"><i class="style icon-coin-dollar "></i>F码通道</a></li>
            <li><a href="javascript:void(0)"><i class="style icon-floppy-disk "></i>米粉卡</a></li>
            <li><a href="javascript:void(0)"><i class="style icon-loop2 "></i>以旧换新</a></li>
            <li><a href="javascript:void(0)"><i class="style icon-newspaper "></i>话费充值</a></li>
        </ul>
    </div>
    <div class="span16">
        <ul>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15064139304852_MqbBl.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15064139304852_MqbBl.jpg" alt="5X小焦点黄色"/></a></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15057466199555_ISCXm.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15057466199555_ISCXm.jpg" alt="红米note5A16G"/></a></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15064380498115_SqzKG.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15064380498115_SqzKG.jpg" alt="小米路由器3A"/></a></li>
        </ul>
    </div>
</div>
<!--E:选购手机-->
<!--S:小米明星单品-->
<div class="container xm-plain-box louti">
    <div class="box-hd">
        <h2>小米明星单品</h2>
        <div class="more">
            <a href="javascript:void(0)" id="morea1">&lt;</a>
            <a href="javascript:void(0)" id="morea2" class="morea2">&gt;</a>
        </div>
    </div>
    <div class="box-bd">
        <ul>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15030636132779_UImNJ.png&name=小米Note 2&price=2099"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15030636132779_UImNJ.png" alt=""/></a><h3>小米Note 2</h3><p>最高减700元</p><p>2099元起</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_1489401341687_vUojl.png&name=小米Note 4X&price=999"><img src="<?php echo (HOME_IMG_URL); ?>xmad_1489401341687_vUojl.png" alt=""/></a><h3>红米Note 4X</h3><p>4100mAh超长续航，多彩金属</p><p>999元起</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_14966625747867_qcTyh.png&name=小米4X&price=699"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14966625747867_qcTyh.png" alt=""/></a><h3>红米4X</h3><p>4100mAh超长续航，8 核处理器</p><p>699元起</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_14938805670516_eryYQ.png&name=小米电视4A 43寸&price=1999"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14938805670516_eryYQ.png" alt=""/></a><h3>小米电视4A 43英寸</h3><p>全高清HDR，智能语音</p><p>1999元</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=725a37e3-78b7-4298-8098-c40097bf179d.png&name=小米笔记本&price=3599"><img src="<?php echo (HOME_IMG_URL); ?>725a37e3-78b7-4298-8098-c40097bf179d.png" alt=""/></a><h3>小米笔记本</h3><p>更轻更薄，像杂志一样随身携带</p><p>3599元起</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15023585612783_DIKjh.png&name=贝医生巴氏牙刷(四色装&price=39.9"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15023585612783_DIKjh.png" alt=""/></a><h3>贝医生巴氏牙刷(四色装)</h3><p>德日进口刷毛，专利科学布局</p><p>39.9元</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=6ef55907-bbed-49be-a2bb-be0821b5f7b8.png&name=小米手环2&price=149"><img src="<?php echo (HOME_IMG_URL); ?>6ef55907-bbed-49be-a2bb-be0821b5f7b8.png" alt=""/></a><h3>小米手环 2</h3><p>OLED 显示屏幕，升级计步算法</p><p>149元</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=T1ZYC_BjWv1RXrhCrK.jpg&name=米家压力IH电饭煲&price=999"><img src="<?php echo (HOME_IMG_URL); ?>T1ZYC_BjWv1RXrhCrK.jpg" alt=""/></a><h3>米家压力IH电饭煲</h3><p>智能烹饪，压力IH加热技术</p><p>999元</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=xmad_14972549116226_tZpod.png&name=米家空气净化器Pro&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14972549116226_tZpod.png" alt=""/></a><h3>米家空气净化器Pro</h3><p>OLED显示屏幕，激光颗粒物传感器</p><p>1499元</p></li>
            <li><a href="/xm/index.php/Home/Index/show?photo=de35852a-1be5-4ef5-846f-dcdd2efcfea6.png&name=小米路由器3Pro&price=149"><img src="<?php echo (HOME_IMG_URL); ?>de35852a-1be5-4ef5-846f-dcdd2efcfea6.png" alt=""/></a><h3>小米路由器3</h3><p>更快更强，不止四天线</p><p>149元</p></li>
        </ul>
    </div>
</div>
<!--E:小米明星单品-->

<div class="page-main">
    <div class="container">
        <!--S:家电-->
        <div class="homeelec louti">
            <div class="box-list">
                <h2>家电</h2>
                <ul>
                    <li class="tab-active">热门</li>
                    <li>电视影音</li>
                    <li>电脑</li>
                    <li>家具</li>
                </ul>
            </div>
            <div class="box-list1">
                <div class="box-span1">
                    <ul>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15063444069108_mZfjo.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15063444069108_mZfjo.jpg" alt=""/></a></li>
                    </ul>
                </div>
                <div class="box-span2">
                    <ul  class="tab-show">
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1500287084.72131750!220x220.jpg&name=小米电视机4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1500287084.72131750!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495074010.05677255!220x220.jpg&name=小米电视机4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495074010.05677255!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1505106710.28498495!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1505106710.28498495!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0);"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499138177.54329452!220x220.jpg&name=小米笔记本Air 13.3" i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499138177.54329452!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0);"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465366178.11466342!220x220.jpg&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465366178.11466342!220x220.jpg"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0);"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1482392555.22071382!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1482392555.22071382!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0);"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1zBYgBCWv1RXrhCrK!220x220.jpg&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1zBYgBCWv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0);"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1468806372.46368911!220x220.jpg&name=小白摄像机2&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1468806372.46368911!220x220.jpg"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495073969.01063180!220x220.jpg&name=小米电视4 49英寸2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495073969.01063180!220x220.jpg"/></a>
                            <h3>小米电视4 49英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1503909300.25797209!220x220.png&name=小米电视4A 55 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1503909300.25797209!220x220.png"/></a>
                            <h3>小米电视4A 55" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077569.08131612!220x220.png&name=小米电视4A 65 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077569.08131612!220x220.png"/></a>
                            <h3>小米电视4A 65" 标准版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077454.46128587!220x220.png&name=小米电视4A 49 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077454.46128587!220x220.png"/></a>
                            <h3>小米电视4A 49" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490778355.67093197!220x220.png&name=小米电视4A 55 语音版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490778355.67093197!220x220.png"/></a>
                            <h3>小米电视4A 55" 语音版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495074053.84174465!220x220.jpg&name=小米电视4 65英寸 语音版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495074053.84174465!220x220.jpg"/></a>
                            <h3>小米电视4 65英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1479190789.95594557!220x220.jpg&name=小米盒子3s&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1479190789.95594557!220x220.jpg"/></a>
                            <h3>小米盒子3s</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=xmad_14988107613863_SWjuV.jpg&name=盒子3 增强版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14988107613863_SWjuV.jpg"/></a>
                            <h3>盒子3 增强版</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>电视影音</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499138177.54329452!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499138177.54329452!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496997930.13622399!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496997930.13622399!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469583247.6157588!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469583247.6157588!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490604807.82792204!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490604807.82792204!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490595812.95661863!220x220.png&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490595812.95661863!220x220.png"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1478248566.62624407!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1478248566.62624407!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490702347.3628109!220x220.png&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490702347.3628109!220x220.png"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469523170.25518983!220x220.jpg&name=小白摄像机&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469523170.25518983!220x220.jpg"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465366178.11466342!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465366178.11466342!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498564154.53184175!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498564154.53184175!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1sWd_B7VT1RXrhCrK!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1sWd_B7VT1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1zBYgBCWv1RXrhCrK!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1zBYgBCWv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1OVC_ByY_1RXrhCrK!220x220.jpg&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1OVC_ByY_1RXrhCrK!220x220.jpg"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496647119.81414190!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496647119.81414190!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495520422.36514041!220x220.jpg&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495520422.36514041!220x220.jpg"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490756071.3088664!220x220.png&name=小白摄像机2&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490756071.3088664!220x220.png"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--E:家电-->

        <!--S:智能-->
        <div class="smart louti">
            <div class="box-list">
                <h2>智能</h2>
                <ul>
                    <li class="tab-active">热门</li>
                    <li>出行</li>
                    <li>健康</li>
                    <li>酷玩</li>
                    <li>路由器</li>
                </ul>
            </div>
            <div class="box-list1">
                <div class="box-span1 box-span3">
                    <ul>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15027842773291_bAkJM.png"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15027842773291_bAkJM.png" alt=""/></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15057287926142_bWNTB.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15057287926142_bWNTB.jpg" alt=""/></a></li>
                    </ul>
                </div>
                <div class="box-span2">
                    <ul class="tab-show">
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1473125484.8332236!220x220.jpg&name=米家飞利浦智睿台灯二代&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1473125484.8332236!220x220.jpg"/></a>
                            <h3>米家飞利浦智睿台灯二代</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1GxCvBghT1RXrhCrK!220x220.jpg&name=Yeelight床头灯&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1GxCvBghT1RXrhCrK!220x220.jpg"/></a>
                            <h3>Yeelight床头灯</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1sWd_B7VT1RXrhCrK!220x220.jpg&name=小小米体重秤 &price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1sWd_B7VT1RXrhCrK!220x220.jpg"/></a>
                            <h3>小小米体重秤 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1488190122.83567909!220x220.jpg&name=米家智能摄像机 1080P&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1488190122.83567909!220x220.jpg"/></a>
                            <h3>米家智能摄像机 1080P</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1HQA_BCd_1RXrhCrK!220x220.jpg&name=米家iHealth血压计&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1HQA_BCd_1RXrhCrK!220x220.jpg"/></a>
                            <h3>米家iHealth血压计</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1477980865.4569720!220x220.jpg&name=米家PM2.5检测仪&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1477980865.4569720!220x220.jpg"/></a>
                            <h3>米家PM2.5检测仪</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1476425102.6997704!220x220.jpg&name=空气净化器滤芯&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1476425102.6997704!220x220.jpg"/></a>
                            <h3>空气净化器滤芯</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1KzbQBvbT1RXrhCrK.jpg&name=小米水质TDS检&price=399"><img src="<?php echo (HOME_IMG_URL); ?>T1KzbQBvbT1RXrhCrK.jpg"/></a>
                            <h3>小米水质TDS检</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>健康</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495073969.01063180!220x220.jpg&name=小米电视4 49英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495073969.01063180!220x220.jpg"/></a>
                            <h3>小米电视4 49英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1503909300.25797209!220x220.png&name=小米电视4A 55 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1503909300.25797209!220x220.png"/></a>
                            <h3>小米电视4A 55" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077569.08131612!220x220.png&name=小米电视4A 65 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077569.08131612!220x220.png"/></a>
                            <h3>小米电视4A 65" 标准版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077454.46128587!220x220.png&name=小米电视4A 49 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077454.46128587!220x220.png"/></a>
                            <h3>小米电视4A 49" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490778355.67093197!220x220.png&name=小米电视4A 55 语音版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490778355.67093197!220x220.png"/></a>
                            <h3>小米电视4A 55" 语音版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495074053.84174465!220x220.jpg&name=小米电视4 65英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495074053.84174465!220x220.jpg"/></a>
                            <h3>小米电视4 65英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=1479190789.95594557!220x220.jpg&name=小米盒子3s&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1479190789.95594557!220x220.jpg"/></a>
                            <h3>小米盒子3s</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=xmad_14988107613863_SWjuV.jpg&name=盒子3 增强版&price=399"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14988107613863_SWjuV.jpg"/></a>
                            <h3>盒子3 增强版</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>电视影音</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499138177.54329452!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499138177.54329452!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496997930.13622399!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496997930.13622399!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469583247.6157588!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469583247.6157588!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490604807.82792204!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490604807.82792204!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490595812.95661863!220x220.png&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490595812.95661863!220x220.png"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1478248566.62624407!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1478248566.62624407!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490702347.3628109!220x220.png&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490702347.3628109!220x220.png"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469523170.25518983!220x220.jpg&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469523170.25518983!220x220.jpg"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1479367293.94368573!220x220.jpg&name=米兔儿童手表Q&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1479367293.94368573!220x220.jpg"/></a>
                            <h3>米兔儿童手表Q</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1464615180.86261317!220x220.jpg&name=米兔智能故事机&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1464615180.86261317!220x220.jpg"/></a>
                            <h3>米兔智能故事机</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=xmad_14927605434196_fmGSl.png&name=米家智能家庭礼品装&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14927605434196_fmGSl.png"/></a>
                            <h3>米家智能家庭礼品装 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.1折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1480474019.52478532!220x220.jpg&name=米家多功能网关&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1480474019.52478532!220x220.jpg"/></a>
                            <h3>米家多功能网关</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1487824962.01314237!220x220.jpg&name=小米无人机4K版套装&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1487824962.01314237!220x220.jpg"/></a>
                            <h3>小米无人机4K版套装</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1478076543.58248227!220x220.jpg&name=米兔积木机器人&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1478076543.58248227!220x220.jpg"/></a>
                            <h3>米兔积木机器人</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1489563242.40586106!220x220.jpg&name=小米网络收音机增强版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1489563242.40586106!220x220.jpg"/></a>
                            <h3>小米网络收音机增强版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490756071.3088664!220x220.png&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490756071.3088664!220x220.png"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>酷玩</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465366178.11466342!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465366178.11466342!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498564154.53184175!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498564154.53184175!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1sWd_B7VT1RXrhCrK!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1sWd_B7VT1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1zBYgBCWv1RXrhCrK!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1zBYgBCWv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1OVC_ByY_1RXrhCrK!220x220.jpg&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1OVC_ByY_1RXrhCrK!220x220.jpg"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496647119.81414190!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496647119.81414190!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495520422.36514041!220x220.jpg&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495520422.36514041!220x220.jpg"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490756071.3088664!220x220.png&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490756071.3088664!220x220.png"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--E:智能-->

        <!--S:搭配-->
        <div class="match louti">
            <div class="box-list">
                <h2>搭配</h2>
                <ul>
                    <li class="tab-active">热门</li>
                    <li>耳机音箱</li>
                    <li>电源</li>
                    <li>电池存储卡</li>
                </ul>
            </div>
            <div class="box-list1">
                <div class="box-span1 box-span3">
                    <ul>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15051240836976_FtlUq.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15051240836976_FtlUq.jpg" alt=""/></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15034816547397_TKBOF.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15034816547397_TKBOF.jpg" alt=""/></a></li>
                    </ul>
                </div>
                <div class="box-span2">
                    <ul  class="tab-show">
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1476688193.46995320.jpg&name=10000mAh小米移动电源2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1476688193.46995320.jpg"/></a>
                            <h3>10000mAh小米移动电源2 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="mian"> 免邮费 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1482321199.12589253.jpg&name=小米活塞耳机 清新版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1482321199.12589253.jpg"/></a>
                            <h3>小米活塞耳机 清新版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1481273468.72564539.jpg&name=小米移动电源10000mAh高配版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1481273468.72564539.jpg"/></a>
                            <h3>小米移动电源10000mAh高配版  </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="mian"> 免邮费 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1476674302.67179007.jpg&name=小米运动蓝牙耳机&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1476674302.67179007.jpg"/></a>
                            <h3>小米运动蓝牙耳机 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1502093110.00979492.jpg&name=小米运动蓝牙耳机mini&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1502093110.00979492.jpg"/></a>
                            <h3>小米运动蓝牙耳机mini </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1492587658.23552969.jpg&name=小米降噪耳机Type-C版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1492587658.23552969.jpg"/></a>
                            <h3>小米降噪耳机Type-C版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.4折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1FVDQBbET1RXrhCrK.jpg&name=小米胶囊耳机&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1FVDQBbET1RXrhCrK.jpg"/></a>
                            <h3>小米胶囊耳机 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1502337101.83975105.jpg&name=小米圈铁耳机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1502337101.83975105.jpg"/></a>
                            <h3>小米圈铁耳机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495073969.01063180!220x220.jpg&name=小米电视4 49英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495073969.01063180!220x220.jpg"/></a>
                            <h3>小米电视4 49英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1503909300.25797209!220x220.png&name=小米电视4A 55 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1503909300.25797209!220x220.png"/></a>
                            <h3>小米电视4A 55" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077569.08131612!220x220.png&name=小米电视4A 65 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077569.08131612!220x220.png"/></a>
                            <h3>小米电视4A 65" 标准版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077454.46128587!220x220.png&name=小米电视4A 49 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077454.46128587!220x220.png"/></a>
                            <h3>小米电视4A 49" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490778355.67093197!220x220.png&name=小米电视4A 55 语音版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490778355.67093197!220x220.png"/></a>
                            <h3>小米电视4A 55" 语音版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495074053.84174465!220x220.jpg&name=小米电视4 65英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495074053.84174465!220x220.jpg"/></a>
                            <h3>小米电视4 65英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1479190789.95594557!220x220.jpg&name=小米盒子3s&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1479190789.95594557!220x220.jpg"/></a>
                            <h3>小米盒子3s</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=xmad_14988107613863_SWjuV.jpg&name=盒子3 增强版&price=399"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14988107613863_SWjuV.jpg"/></a>
                            <h3>盒子3 增强版</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>电视影音</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499138177.54329452!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499138177.54329452!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496997930.13622399!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496997930.13622399!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469583247.6157588!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469583247.6157588!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=1490604807.82792204!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490604807.82792204!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490595812.95661863!220x220.png&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490595812.95661863!220x220.png"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1478248566.62624407!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1478248566.62624407!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490702347.3628109!220x220.png&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490702347.3628109!220x220.png"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469523170.25518983!220x220.jpg&name=小白摄像机&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469523170.25518983!220x220.jpg"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465366178.11466342!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465366178.11466342!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498564154.53184175!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498564154.53184175!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1sWd_B7VT1RXrhCrK!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1sWd_B7VT1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1zBYgBCWv1RXrhCrK!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1zBYgBCWv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1OVC_ByY_1RXrhCrK!220x220.jpg&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1OVC_ByY_1RXrhCrK!220x220.jpg"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496647119.81414190!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496647119.81414190!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495520422.36514041!220x220.jpg&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495520422.36514041!220x220.jpg"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490756071.3088664!220x220.png&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490756071.3088664!220x220.png"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--E:搭配-->

        <!--S:配件-->
        <div class="accessories louti">
            <div class="box-list">
                <h2>配件</h2>
                <ul>
                    <li class="tab-active">热门</li>
                    <li>保护套</li>
                    <li>贴膜</li>
                    <li>其他配件</li>
                </ul>
            </div>
            <div class="box-list1">
                <div class="box-span1 box-span3">
                    <ul>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15030416937964_eOuQp.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15030416937964_eOuQp.jpg" alt=""/></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15053023729301_vkfBo.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15053023729301_vkfBo.jpg" alt=""/></a></li>
                    </ul>
                </div>
                <div class="box-span2">
                    <ul  class="tab-show">
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498547317.49155359.jpg&name=小米6 超薄皮质保护套&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498547317.49155359.jpg"/></a>
                            <h3>小米6 超薄皮质保护套 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="mian"> 免邮费 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498547317.49155359.jpg&name=小米6 硅胶保护套&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1493261828.23444007.jpg"/></a>
                            <h3>小米6 硅胶保护套 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1493863398.71652587.jpg&name=小米6 弧边高透膜&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1493863398.71652587.jpg"/></a>
                            <h3>小米6 弧边高透膜  </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1493284697.69911065.jpg&name=小米6 标准高透贴膜&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1493284697.69911065.jpg"/></a>
                            <h3>小米6 标准高透贴膜 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品</span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499933945.42632851.jpg&name=小米Max 2 智能翻盖支架保护套&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499933945.42632851.jpg"/></a>
                            <h3>小米Max 2 智能翻盖支架保护套</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品</span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1488523016.01497956.jpg&name=红米4X 天鹅绒质感保护壳&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1488523016.01497956.jpg"/></a>
                            <h3>红米4X 天鹅绒质感保护壳 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1493261514.03223754.jpg&name=小米6 高透软胶保护套&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1493261514.03223754.jpg"/></a>
                            <h3>小米6 高透软胶保护套 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1474888499.19594663.jpg&name=小米5s Plus&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1474888499.19594663.jpg"/></a>
                            <h3>小米5s Plus</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495073969.01063180!220x220.jpg&name=小米电视4 49英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495073969.01063180!220x220.jpg"/></a>
                            <h3>小米电视4 49英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1503909300.25797209!220x220.png&name=小米电视4A 55 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1503909300.25797209!220x220.png"/></a>
                            <h3>小米电视4A 55" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077569.08131612!220x220.png&name=小米电视4A 65 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077569.08131612!220x220.png"/></a>
                            <h3>小米电视4A 65" 标准版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077454.46128587!220x220.png&name=小米电视4A 49 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077454.46128587!220x220.png"/></a>
                            <h3>小米电视4A 49" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490778355.67093197!220x220.png&name=小米电视4A 55 语音版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490778355.67093197!220x220.png"/></a>
                            <h3>小米电视4A 55" 语音版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495074053.84174465!220x220.jpg&name=小米电视4 65英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495074053.84174465!220x220.jpg"/></a>
                            <h3>小米电视4 65英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1479190789.95594557!220x220.jpg&name=小米盒子3s&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1479190789.95594557!220x220.jpg"/></a>
                            <h3>小米盒子3s</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=xmad_14988107613863_SWjuV.jpg&name=盒子3 增强版&price=399"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14988107613863_SWjuV.jpg"/></a>
                            <h3>盒子3 增强版</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>电视影音</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499138177.54329452!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499138177.54329452!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496997930.13622399!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496997930.13622399!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469583247.6157588!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469583247.6157588!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490604807.82792204!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490604807.82792204!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490595812.95661863!220x220.png&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490595812.95661863!220x220.png"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1478248566.62624407!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1478248566.62624407!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490702347.3628109!220x220.png&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490702347.3628109!220x220.png"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469523170.25518983!220x220.jpg&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469523170.25518983!220x220.jpg"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465366178.11466342!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465366178.11466342!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498564154.53184175!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498564154.53184175!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1sWd_B7VT1RXrhCrK!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1sWd_B7VT1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1zBYgBCWv1RXrhCrK!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1zBYgBCWv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1OVC_ByY_1RXrhCrK!220x220.jpg&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1OVC_ByY_1RXrhCrK!220x220.jpg"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496647119.81414190!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496647119.81414190!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495520422.36514041!220x220.jpg&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495520422.36514041!220x220.jpg"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490756071.3088664!220x220.png&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490756071.3088664!220x220.png"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--E:配件-->
        <!--S:周边-->
        <div class="around louti">
            <div class="box-list">
                <h2>周边</h2>
                <ul>
                    <li class="tab-active">热门</li>
                    <li>服装</li>
                    <li>米兔</li>
                    <li>生活周边</li>
                    <li>箱包</li>
                </ul>
            </div>
            <div class="box-list1">
                <div class="box-span1 box-span3">
                    <ul>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15028909363415_HdCqn.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15028909363415_HdCqn.jpg" alt=""/></a></li>
                        <li><a href="/xm/index.php/Home/Index/show?photo=xmad_15053783993503_EFnbH.jpg"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15053783993503_EFnbH.jpg" alt=""/></a></li>
                    </ul>
                </div>
                <div class="box-span2">
                    <ul class="tab-show">
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1480477598.47892154!220x220.jpg&name=米家中性笔专用笔芯&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1480477598.47892154!220x220.jpg"/></a>
                            <h3>米家中性笔专用笔芯</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465724476.99494960!220x220.jpg&name=花花草草监测仪&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465724476.99494960!220x220.jpg"/></a>
                            <h3>花花草草监测仪</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="mian"> 免邮费 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=5a28d943-ef5d-4920-a89a-7f1bce6c5b35.jpg&name=米家LED随身灯 增强版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>5a28d943-ef5d-4920-a89a-7f1bce6c5b35.jpg"/></a>
                            <h3>米家LED随身灯 增强版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1468287589.40786199!220x220.jpg&name=米家随身风扇&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1468287589.40786199!220x220.jpg"/></a>
                            <h3>米家随身风扇</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1463971828.3961404!220x220.jpg&name=变形金刚特别版声波&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1463971828.3961404!220x220.jpg"/></a>
                            <h3>变形金刚特别版声波</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1466499316.73488636!220x220.jpg&name=13cm皮质米兔挂饰&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1466499316.73488636!220x220.jpg"/></a>
                            <h3>13cm皮质米兔挂饰</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495795724.388634!220x220.jpg&name=经典款米兔（25cm)&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495795724.388634!220x220.jpg"/></a>
                            <h3>经典款米兔（25cm）</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1493873069.71028592!220x220.jpg&name=90分旅行箱&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1493873069.71028592!220x220.jpg"/></a>
                            <h3>90分旅行箱</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495073969.01063180!220x220.jpg&name=小米电视4 49英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495073969.01063180!220x220.jpg"/></a>
                            <h3>小米电视4 49英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1503909300.25797209!220x220.png&name=小米电视4A 55 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1503909300.25797209!220x220.png"/></a>
                            <h3>小米电视4A 55" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077569.08131612!220x220.png&name=小米电视4A 65 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077569.08131612!220x220.png"/></a>
                            <h3>小米电视4A 65" 标准版 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490077454.46128587!220x220.png&name=小米电视4A 49 标准版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490077454.46128587!220x220.png"/></a>
                            <h3>小米电视4A 49" 标准版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490778355.67093197!220x220.png&name=小米电视4A 55 语音版&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490778355.67093197!220x220.png"/></a>
                            <h3>小米电视4A 55" 语音版</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495074053.84174465!220x220.jpg&name=小米电视4 65英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495074053.84174465!220x220.jpg"/></a>
                            <h3>小米电视4 65英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1479190789.95594557!220x220.jpg&name=小米盒子3s&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1479190789.95594557!220x220.jpg"/></a>
                            <h3>小米盒子3s</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=xmad_14988107613863_SWjuV.jpg&name=盒子3 增强版&price=399"><img src="<?php echo (HOME_IMG_URL); ?>xmad_14988107613863_SWjuV.jpg"/></a>
                            <h3>盒子3 增强版</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>电视影音</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1499138177.54329452!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1499138177.54329452!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496997930.13622399!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496997930.13622399!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469583247.6157588!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469583247.6157588!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490604807.82792204!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490604807.82792204!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490595812.95661863!220x220.png&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490595812.95661863!220x220.png"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1478248566.62624407!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1478248566.62624407!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490702347.3628109!220x220.png&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490702347.3628109!220x220.png"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469523170.25518983!220x220.jpg&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469523170.25518983!220x220.jpg"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1465366178.11466342!220x220.jpg&name=小米电视4A 32&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1465366178.11466342!220x220.jpg"/></a>
                            <h3>小米电视4A 32"</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1498564154.53184175!220x220.jpg&name=小米电视4 55英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498564154.53184175!220x220.jpg"/></a>
                            <h3>小米电视4 55英寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1sWd_B7VT1RXrhCrK!220x220.jpg&name=小米笔记本Pro 15.6英寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1sWd_B7VT1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Pro 15.6英寸 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1zBYgBCWv1RXrhCrK!220x220.jpg&name=小米笔记本Air 13.3 i7处理器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1zBYgBCWv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米笔记本Air 13.3" i7处理器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1OVC_ByY_1RXrhCrK!220x220.jpg&name=米家恒温电水壶&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1OVC_ByY_1RXrhCrK!220x220.jpg"/></a>
                            <h3>米家恒温电水壶</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1496647119.81414190!220x220.jpg&name=米家车载空气净化器&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1496647119.81414190!220x220.jpg"/></a>
                            <h3>米家车载空气净化器</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1495520422.36514041!220x220.jpg&name=小米空气净化器2&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495520422.36514041!220x220.jpg"/></a>
                            <h3>小米空气净化器2</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490756071.3088664!220x220.png&name=小白摄像机&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490756071.3088664!220x220.png"/></a>
                            <h3>小白摄像机</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>热门</small></h4>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1RRCjBKJv1RXrhCrK.jpg&name=90分旅行箱 20寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1RRCjBKJv1RXrhCrK.jpg"/></a>
                            <h3>90分旅行箱 20寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.2折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1TvJ_B_Kv1RXrhCrK.jpg&name=90分旅行箱 24寸&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1TvJ_B_Kv1RXrhCrK.jpg"/></a>
                            <h3>90分旅行箱 24寸</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span class="xinp"> 新品 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1469429887.76894954!220x220.jpg&name=90分轻户外旅行洗漱包&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1469429887.76894954!220x220.jpg"/></a>
                            <h3>90分轻户外旅行洗漱包 </h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1486535951.58962915!220x220.jpg&name=小米简约头层小牛皮钱包&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>pms_1486535951.58962915!220x220.jpg"/></a>
                            <h3>小米简约头层小牛皮钱包</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=6ddc1df6-ce8e-4cb5-a26a-b5ef80f1adf7.jpg&name=小米经典商务双肩包&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>6ddc1df6-ce8e-4cb5-a26a-b5ef80f1adf7.jpg"/></a>
                            <h3>小米经典商务双肩包</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1a3DvB7hv1RXrhCrK!220x220.jpg&name=小米极简都市双肩包&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1a3DvB7hv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米极简都市双肩包</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>

                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=T1FtKgBvZv1RXrhCrK!220x220.jpg&name=小米多功能都市休闲胸包&price=1099"><img src="<?php echo (HOME_IMG_URL); ?>T1FtKgBvZv1RXrhCrK!220x220.jpg"/></a>
                            <h3>小米多功能都市休闲胸包</h3>
                            <p>64位四核处理器／1GB+4GB大内存</p>
                            <p><i>1099</i>元  <del><i>1199</i>元</del></p>
                            <span> 享9.5折 </span>
                            <div>
                                <a href="javascript:void(0)"><span>很支持国货小米，一个60寸的还有一个32寸的，是否有..</span>
                                    <span>来自于 1067876205 的评价 </span></a>
                            </div>
                        </li>
                        <li>
                            <a href="/xm/index.php/Home/Index/show?photo=pms_1490699313.83423551!220x220.png&name=小米短袖T恤&price=399"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490699313.83423551!220x220.png"/></a>
                            <h3>小米短袖T恤</h3>
                            <p>399元</p>
                        </li>
                        <li>
                            <i class="style icon-circle-right"></i>
                            <h4>浏览更多<small>箱包</small></h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--E:周边-->
        <!--S:为你推荐-->
        <div class="recommend xm-plain-box louti">
            <div class="box-hd">
                <h2>为你推荐</h2>
                <div class="more">
                    <a href="javascript:void(0)" id="morea3">&lt;</a>
                    <a href="javascript:void(0)" id="morea4" class="morea2">&gt;</a>
                </div>
            </div>
            <div class="box-bd">
                <ul>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1502962291.85477516!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1502962291.85477516!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1505733360.02538108!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1505733360.02538108!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1492571595.7934912!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1492571595.7934912!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1505110879.90398489!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1505110879.90398489!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1490088813.05223210!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490088813.05223210!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1495692033.10494295!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495692033.10494295!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1490088805.69334485!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1490088805.69334485!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1495446220.88893758!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1495446220.88893758!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1503969309.57226971!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1503969309.57226971!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=pms_1498788230.01699531!140x140.jpg&name=小米5X&price=1499"><img src="<?php echo (HOME_IMG_URL); ?>pms_1498788230.01699531!140x140.jpg" alt=""/></a><p>小米5X </p><p>1499元</p><p>1.6万人好评 </p></li>
                </ul>
            </div>
        </div>
        <!--E:为你推荐-->
        <!--S:热评产品-->
        <div class="comment louti">
            <div class="box-hd">
                <h2>热评产品</h2>
            </div>
            <div class="box-bd">
                <ul>
                    <li><a href="/xm/index.php/Home/Index/show?photo=8949026b-fa9a-4370-989b-5d5e2f149106.jpg&name=小米路由器3&price=149"><img src="<?php echo (HOME_IMG_URL); ?>8949026b-fa9a-4370-989b-5d5e2f149106.jpg" alt=""/></a><p>安装简洁方便，信号不错！！！！！</p><p> 来自于 追逆 的评价 </p><p><b>小米路由器3</b><b>|</b><b>149元</b> </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=3c77fe32-1113-482d-91b1-9c01a079cce6.jpg&name=小米小米笔记本Air 12.5英寸&price=3499"><img src="<?php echo (HOME_IMG_URL); ?>3c77fe32-1113-482d-91b1-9c01a079cce6.jpg" alt=""/></a><p>刚收到，外观很漂亮，颜色也很喜欢，等了好长时间了，终于拿到了，非常满意，棒棒哒！！！</p><p> 来自于 龙炎 的评价 </p><p><b>小米笔记本Air 12.5英寸</b><b>|</b><b>3499元</b> </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpg&name=小米米家压力IH电饭煲&price=999"><img src="<?php echo (HOME_IMG_URL); ?>54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpg" alt=""/></a><p>包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...</p><p> 来自于 HZG 的评价  </p><p><b>米家压力IH电饭煲 </b><b>|</b><b>999元</b> </p></li>
                    <li><a href="/xm/index.php/Home/Index/show?photo=62d44838-f464-4c11-887c-9168645ae797.jpg&name=90分旅行箱 20寸&price=299"><img src="<?php echo (HOME_IMG_URL); ?>62d44838-f464-4c11-887c-9168645ae797.jpg" alt=""/></a><p>这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</p><p> 来自于 子书雁 的评价 </p><p><b>90分旅行箱 20寸 </b><b>|</b><b>299元</b> </p></li>
                </ul>
            </div>
        </div>
        <!--E:热评产品-->
        <!--S:内容-->
        <div class="content louti">
            <div class="box-hd">
                <h2>内容</h2>
            </div>
            <div class="box-bd">
                <ul>
                    <li>
                        <h2>图书</h2>
                        <ol>
                            <li><h4>哈利·波特与被诅咒的孩子</h4><p>“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p><p>29.37元</p><img src="<?php echo (HOME_IMG_URL); ?>5e5da924-84e3-4959-9e25-5891cdf30757.png" alt=""/></li>
                            <li><h4>好吗好的</h4><p>畅销作家大冰2016年新书！讲给你听，好吗好的！</p><p>17.99元</p><img src="<?php echo (HOME_IMG_URL); ?>61e1385e-54de-48f3-8717-5e4f4b1cdd14.png" alt=""/></li>
                            <li><p>海量好书，享受精品阅读时光漂亮的中文排版，千万读者选择！</p><a href="javascript:void(0)">前往多看阅读</a><img src="<?php echo (HOME_IMG_URL); ?>more-duokan.jpg" alt=""/></li>
                        </ol>
                        <ol><li class="aactive"></li><li></li><li></li></ol>
                        <p><a href="javascript:void(0)" id="contenta1">&lt;</a><a href="javascript:void(0)" id="contenta2">&gt;</a></p>
                    </li>
                    <li>
                        <h2>MIUI 主题</h2>
                        <ol>
                            <li><h4>夏日狂想</h4><p>官方主题新画风，原来你是这样的小清新！</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>xmad_14991694834748_jkosw.jpg" alt=""/></li>
                            <li><h4>吴亦凡定制主题</h4><p>6张锁屏动态壁纸随机，每张都给你惊喜！</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>xmad_15023308354557_ZPYRq.jpg" alt=""/></li>
                            <li><h4>几何</h4><p>最新官方主题，带你感受极简视觉冲击</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>xmad_14982103643442_KCZrH.jpg" alt=""/></li>
                            <li><p>众多个性主题、百变锁屏与自由桌面让你的手机与众不同！</p><a href="javascript:void(0)">MIUI主题市场</a><img src="<?php echo (HOME_IMG_URL); ?>more-miui.jpg" alt=""/></li>
                        </ol>
                        <ol><li class="aactive"></li><li></li><li></li><li></li></ol>
                        <p><a href="javascript:void(0)">&lt;</a><a href="javascript:void(0)">&gt;</a></p>
                    </li>
                    <li>
                        <h2>游戏</h2>
                        <ol>
                            <li><h4>米柚手游模拟器</h4><p>在电脑上玩遍小米所有手游</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>T1czW_BXCv1R4cSCrK.png" alt=""/></li>
                            <li><h4>剑侠世界</h4><p>一生不容错过的浪漫武侠！！</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>695c909b-f541-4575-bace-d08b6465025b.jpg" alt=""/></li>
                            <li><p>免费下载海量的手机游戏天天都有现金福利赠送</p><a href="javascript:void(0)">前往小米游戏商店</a><img src="<?php echo (HOME_IMG_URL); ?>more-game.jpg" alt=""/></li>
                        </ol>
                        <ol><li class="aactive"></li><li></li><li></li></ol>
                        <p><a href="javascript:void(0)">&lt;</a><a href="javascript:void(0)">&gt;</a></p>
                    </li>
                    <li>
                        <h2>应用</h2>
                        <ol>
                            <li><h4>2017金米奖</h4><p>最优秀的应用和游戏</p><p>&nbsp;</p><img src="<?php echo (HOME_IMG_URL); ?>3332da7d-4056-4694-9548-c83b7b3af7d3.png" alt=""/></li>
                            <li><h4>Forest</h4><p>帮助您专心于生活中每个重要时刻</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>T1TkKvBCKv1R4cSCrK.png" alt=""/></li>
                            <li><h4>小米应用</h4><p>小米出品 必属精品</p><p>免费</p><img src="<?php echo (HOME_IMG_URL); ?>T15VZvB5Kv1R4cSCrK.png" alt=""/></li>
                            <li><p>帮助小米手机和其他安卓手机用户发现好用的安卓应用</p><a href="javascript:void(0)">前往小米应用商店</a><img src="<?php echo (HOME_IMG_URL); ?>more-app.jpg" alt=""/></li>
                        </ol>
                        <ol><li class="aactive"></li><li></li><li></li><li></li></ol>
                        <p><a href="javascript:void(0)">&lt;</a><a href="javascript:void(0)">&gt;</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <!--E:内容-->
        <!--S:视频-->
        <div class="video louti">
            <div class="box-hd">
                <h2>视频</h2>
            </div>
            <div class="box-bd">
                <ul>
                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15053784427187_fmBed.jpg" alt=""/><span title="点击播放视频"><i class="style icon-play3"></i></span></a><p>雷军与斯塔克打造全面屏2.0</p><p>一场关于小米MIX 2 极致工艺的巅峰对话 </p></li>
                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15053796058409_uQmGq.jpg" alt=""/><span title="点击播放视频"><i class="style icon-play3"></i></span></a><p>小米Note 3 与吴亦凡 </p><p>看看小米Note 3 与吴亦凡谁更帅？</p></li>
                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15028039011215_UXSoK.jpg" alt=""/><span title="点击播放视频"><i class="style icon-play3"></i></span></a><p>MIUI 9 理念视频</p><p>快如闪电，前所未有的流畅</p></li>
                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmad_15053796919952_QBfTR.jpg" alt=""/><span title="点击播放视频"><i class="style icon-play3"></i></span></a><p>拍人更美的背后故事</p><p>小米手机工程师采访视频</p></li>
                </ul>
            </div>
        </div>
        <!--E:视频-->
    </div>
</div>
<!--S:showVideo-->
<div id="showVideo">
    <div class="showVideo" id="showVideo1">
        <div class="svtit"><h3>MIUI 9 理念视频</h3><span class="style icon-cross" title="点击关闭视频" id="closevideo"></span></div>
        <div class="mp4img"></div>
        <div class="mp4play"><span></span></div>
        <div class="mp4"><video src="<?php echo (HOME_VIDEO_URL); ?>miui9.mp4" width="880px" height="536px" id="mp4"/></div>
        <div class="mp4con">
            <div><i></i><b id="bcon"></b></div>
            <div>
                <p><i class="style icon-play3" id="icon-play3"></i></p><!--icon-pause2-->
                <p onclick="return false"><i id="videotime">00:00</i><i>/</i><i>01:00</i></p>
                <p><span class="style icon-volume-medium" id="volume"></span><span><i></i><b id="bvoice"></b></span></p><!--icon-volume-mute2-->
            </div>
        </div>
    </div>
</div>
<!--E:showVideo-->
<!--S:楼梯导航-->
<div id="daonav">
    <ul id="navul1">
        <li>Top</li>
    </ul>
    <ol>
        <li>1-单品</li>
        <li>2-家电</li>
        <li>3-智能</li>
        <li>4-搭配</li>
        <li>5-配件</li>
        <li>6-周边</li>
        <li>7-推荐</li>
        <li>8-热评</li>
        <li>9-内容</li>
        <li>10-视频</li>
    </ol>
    <ul id="navul2">
        <li>Bot</li>
    </ul>
</div>
<!--E:楼梯导航-->
<!--S:创建网页footer底部模板-->
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

<script>

    var oImg=document.getElementById('img');

    var oPrev=document.getElementById('prev');
    var oNext=document.getElementById('next');

    var timer=null;
    var m=1;
    var n=1;
    var b=1;



    var yuan=document.getElementById('imgyuan');
    var li=yuan.getElementsByTagName('li');


    oPrev.onclick=function(){
        if(b<1){
            b=7;
        }
        change();
        b--;
    }
    oNext.onclick=function(){
        if(b==8){
            b=1;
        }
        change();
        b++;
    }
    function change(){
        oImg.src='<?php echo (HOME_IMG_URL); ?>show'+b+'.jpg';
    }

</script>
</html>
<script src="<?php echo (HOME_JS_URL); ?>jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>cookie.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="<?php echo (HOME_JS_URL); ?>startMove.js" type="text/javascript" charset="utf-8"></script>-->
<script src="<?php echo (HOME_JS_URL); ?>index.js" async="" type="text/javascript" charset="utf-8"></script>
<!--<script src="<?php echo (HOME_JS_URL); ?>slide.js" type="text/javascript" charset="utf-8"></script>-->
<!--<script type="text/javascript">
	new Slide(imgright);
</script>-->