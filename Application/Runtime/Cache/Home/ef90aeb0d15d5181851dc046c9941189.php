<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>小米商场 -单个商品展示</title>
    <link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>cssReset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>show.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>footer.css"/>
    <script src="<?php echo (HOME_JS_URL); ?>template.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<!--S:header-->
<style>
    .gw_num{border: 1px solid #dbdbdb;width: 110px;line-height: 26px;overflow: hidden;}
    .gw_num em{display: block;height: 26px;width: 26px;float: left;color: #7A7979;border-right: 1px solid #dbdbdb;text-align: center;cursor: pointer;}
    .gw_num .num{display: block;float: left;text-align: center;width: 52px;font-style: normal;font-size: 14px;line-height: 24px;border: 0;}
    .gw_num em.add{float: right;border-right: 0;border-left: 1px solid #dbdbdb;}
</style>
<header>
    <div class="container">
        <div class="topbar-nav">
            <ul>
                <li><a href="/xiaomi">小米商城</a><span>|</span></li>
                <li><a href="http://www.miui.com/">MIUI</a><span>|</span></li>
                <li><a href="http://www.miliao.com/">米聊</a><span>|</span></li>
                <li><a href="http://game.xiaomi.com/">游戏</a><span>|</span></li>
                <li><a href="http://www.duokan.com/">多看阅读</a><span>|</span></li>
                <li><a href="https://i.mi.com/">云服务</a><span>|</span></li>
                <li><a href="javascript:void(0)">问题反馈</a></li>
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
                    <?php if($_SESSION['name']== null): ?><a href="login.html">登录</a><span>|</span>
                    <a href="register.html">注册</a><span>|</span>
                        <?php else: ?>
                        <?php if($_SESSION['name']!= null): ?><a href="#">hello,<span style="color:red;"><?php echo (session('name')); ?></span></a>
                            <a href="<?php echo U('Home/Login/loginout');?>">退出</a><span>|</span><?php endif; endif; ?>
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


        </div>
    </div>
</header>
<!--E:header-->
<!--S:nav-->
<nav>
    <div class="container">
        <div class="header-logo">
            <a href="index.html">小米官网</a>
        </div>

        <div class="nav-list">
            <div class="alllist">
                <div class="img-left">
                    <ul>
                        <li><a href="javascript:void(0)">手机 电话卡<i>&gt;</i></a>
                            <div class="children  children-col-1">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>note3-80-2.png"/><span>小米Note 3</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>小米MIX 2</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xm6_80.png"/><span>小米6</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80pc-5x.png"/><span>小米5X</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>max2_80.jpg"/><span>小米Max 2</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>5c_80.png"/><span>小米手机5c</span></a><a href="javascript:void(0)">选购</a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>note3-80-2.png"/><span>小米Note 3</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>小米MIX 2</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xm6_80.png"/><span>小米6</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80pc-5x.png"/><span>小米5X</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>max2_80.jpg"/><span>小米Max 2</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>5c_80.png"/><span>小米手机5c</span></a><a href="javascript:void(0)">选购</a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>note3-80-2.png"/><span>小米Note 3</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>小米MIX 2</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80.jpg"/><span>移动4G+专区</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>compare.jpg"/><span>对比手机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mifenka-1.jpg"/><span>米粉卡 日租卡 2</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mimobile.jpg"/><span>小米移动 电话卡</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">笔记本 平板<i>&gt;</i></a>
                            <div class="children  children-col-2">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>bijiben80.jpg"/><span>笔记本12.5英寸</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>笔记本13.3英寸</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mix2-80.png"/><span>笔记本Pro15英寸</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mipad3_80.jpg"/><span>小米平板3</span></a><a href="javascript:void(0)">选购</a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>bjbcdq80.jpg"/><span>USB-C电源适配器</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>usbzjqggg80.jpg"/><span>USB-C转接器</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>neidanbao80.jpg"/><span>小米笔记本内胆包</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>ymjp80.jpg"/><span>悦米机械键盘</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>shubiao80.jpg"/><span>小米便携鼠标</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>wxsb80.png"/><span>小米无线鼠标</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmsbd80.jpg"/><span>鼠标垫</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>USBC80.jpg"/><span>DisplayPort转接器</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">电视 盒子<i>&gt;</i></a>
                            <div class="children  children-col-1">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_55.jpg"/><span>小米电视4 55英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_65.jpg"/><span>小米电视4 65英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zuodaohang.jpg"/><span>小米电视4 32英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>4A43.jpg"/><span>小米电视4 43英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xp80_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_55.jpg"/><span>小米电视4 55英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80xmds_65.jpg"/><span>小米电视4 65英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zuodaohang.jpg"/><span>小米电视4 32英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>4A43.jpg"/><span>小米电视4 43英寸</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xp80_49.jpg"/><span>小米电视4 49英寸</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>hezizengqiangban80side.jpg"/><span>小米盒子3 增强版</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>80x80.jpg"/><span>家庭音响</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>iconaz80.jpg"/><span>安装服务</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>dianshipeijian.jpg"/><span>电视盒子配件</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>huiyuan.png"/><span>小米电视会员</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>ertong1.png"/><span>小米儿童会员</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">路由器 智能硬件<i>&gt;</i></a>
                            <div class="children  children-col-3">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>phcplus80.jpg"/><span>九号平衡车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiqiren.jpg"/><span>米家扫地机器人</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>VRPLAY2.png"/><span>小米VR眼镜</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>luyouqi-80.jpg"/><span>小米路由器</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zxc80-80.jpg"/><span>电助力折叠自行车</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>shuihu80.jpg"/><span>电水壶</span></a></li>
                                </ol>

                            </div>
                        </li>
                        <li><a href="javascript:void(0)">移动电源 电池 插线板<i>&gt;</i></a>
                            <div class="children  children-col-2">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>dianyuan280.jpg"/><span>小米移动电源</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>c1xb343.jpg"/><span>插线板</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>yidongdianyuan.jpg"/><span>品牌移动电源</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>dianyuanfujian.jpg"/><span>移动电源附件</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>chongdianqi-80.jpg"/><span>充电器</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>5Battery1.jpg"/><span>彩虹5号电池</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>7Battery1.jpg"/><span>彩虹7号电池</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">耳机 音箱<i>&gt;</i></a>
                            <div class="children  children-col-3">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>quantie.jpg"/><span>小米圈铁耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiaonang80.jpg"/><span>小米胶囊耳机</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>quantie.jpg"/><span>小米圈铁耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiaonang80.jpg"/><span>小米胶囊耳机</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>quantie.jpg"/><span>小米圈铁耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jiaonang80.jpg"/><span>小米胶囊耳机</span></a></li>
                                </ol>
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>toudai80.jpg"/><span>小米头戴式耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>tdsqs80.jpg"/><span>头戴式耳机轻松版</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmjzej80.jpg"/><span>小米降噪耳机</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>qtpro80.jpg"/><span>小米圈铁耳机 Pro</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">保护套 贴膜<i>&gt;</i></a>
                            <div class="children  children-col-4">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>tiemo.jpg"/><span>贴膜</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>baohu.jpg"/><span>保护套/保护壳</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">线材 支架 存储卡<i>&gt;</i></a>
                            <div class="children  children-col-4">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xiancai.jpg"/><span>线材</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zipaigan.jpg"/><span>自拍杆</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zhijia.jpg"/><span>手机支架</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>cunchu.jpg"/><span>存储卡</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">箱包 服饰 鞋 眼镜<i>&gt;</i></a>
                            <div class="children  children-col-4">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xiangbao-80.jpg"/><span>箱包</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>lvxingxiang.jpg"/><span>90分旅行箱</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>huise2-80.jpg"/><span>服饰</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>ydx80.jpg"/><span>运动鞋 板鞋</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>tyj80.jpg"/><span>眼镜</span></a></li>
                                </ol>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">米兔 生活周边<i>&gt;</i></a>
                            <div class="children  children-col-4">
                                <ol>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mitu-80.jpg"/><span>米兔玩偶</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zhoubian1.jpg"/><span>生活周边</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>zazhi1021-80.jpg"/><span>《小米》会刊</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mj80.jpg"/><span>毛巾/浴巾 Pro</span></a></li>
                                    <li><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>rjcd80.jpg"/><span>8H乳胶床品</span></a></li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul>
                <li><a href="javascript:void(0)">小米手机</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mix2320-220.png"/></a></p><p>小米MIX2</p><p>3299元起</p></li>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>note2320x220.png"/></a></p><p>小米Note3</p><p>2499元起</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xm6-320.png"/></a></p><p>小米6</p><p>2499元起</p></li>
                                <li><p>享多重优惠</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>max2_toubu.png"/></a></p><p>小米Max2</p><p>1599元起</p></li>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>5x-2!160x110.jpg"/></a></p><p>小米5X</p><p>1299元起</p></li>
                                <li><p>下单立减600</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xiaomiNOTE2-320-220!160x110.jpg"/></a></p><p>小米Note2</p><p>2099元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">红米</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>3205a.png"/></a></p><p>红米Note 5A 标准版</p><p>699元</p></li>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>320-220!160x110.jpg"/></a></p><p>红米Note 5A 高配版</p><p>899元起</p></li>
                                <li><p>享免息</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>hmn4xtb!160x110.jpg"/></a></p><p>红米Note 4X</</p><p>999元起</p></li>
                                <li><p>享免息</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>hm4x!160x110.jpg"/></a></p><p>红米4X</p><p>699元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">平板 · 笔记本</a>
                    <div class="item-children">
                        <div class="container">

                            <ul>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mipad3_320.png"/></a></p><p>小米平板3 64GB</p><p>1499元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>bijiben32012.5!160x110.jpg"/></a></p><p>小米笔记本Air 12.5"</p><p>3599元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>bijiben320!160x110.jpg"/></a></p><p>小米笔记本Air 12.5"</</p>4999元<p>p></li>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>WechatIMG603.png"/></a></p><p>小米笔记本Air 12.5"</p><p>5999元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">电视</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>超薄旗舰</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmds_49.png"/></a></p><p>小米电视4 49英寸</p><p>3599元</p></li>
                                <li><p>超薄旗舰</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmds_55.png"/></a></p><p>小米电视4 55英寸</p><p>4499元</p></li>
                                <li><p>超薄旗舰</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>dianshi465.png"/></a></p><p>小米电视4 65英寸</</p>9999元<p>p></li>
                                <li><p>超薄旗舰</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>320_43.png"/></a></p><p>小米电视4A 43英寸</p><p>1999元</p></li>
                                <li><p>热卖</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>320_49.png"/></a></p><p>小米电视4A 49英寸</p><p>2199元</p></li>
                                <li><p>热卖</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>70dianshi.png"/></a></p><p class="itmem-children-three">查看全部</p><p>小米电视</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">盒子 · 影音</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mihezi.png"/></a></p><p>小米盒子3s</p><p>399元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>mihezi.png"/></a></p><p>小米盒子3c</p><p>229元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>hezi3s!160x110.jpg"/></a></p><p>小米盒子3 增强版</p><p>399元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>320x220.png"/></a></p><p>小米家庭影院</p><p>1999元起</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">路由器</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>大容量</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>HD-Pro.png"/></a></p><p>小米路由器 HD/Pro</p><p>499元起</p></li>
                                <li><p>双千兆</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>3G.png"/></a></p><p>小米路由器 3G</p><p>249元</p></li>
                                <li><p>双频</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>xmlyq3.png"/></a></p><p>小米路由器 3</p><p>149元</p></li>
                                <li><p>包邮</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>3C.png"/></a></p><p>小米路由器 3C</p><p>99元</p></li>
                                <li><p>新品</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>dlm01.png"/></a></p><p>小米WiFi电力猫</p><p>249元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>fdq2!160x110.jpg"/></a></p><p>小米WiFi放大器 2</p><p>49元</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)">智能硬件</a>
                    <div class="item-children">
                        <div class="container">
                            <ul>
                                <li><p>航拍利器</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>123321!160x110.jpg"/></a></p><p>小米无人机</p><p>2999元</p></li>
                                <li><p>包邮</p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>sh2-320-220.png"/></a></p><p>小米手环2</p><p>149元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>jsqcs-320-220.png"/></a></p><p>小米净水器</p><p>1499元起</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>saodijiqiren320-220!160x110.jpg"/></a></p><p>米家扫地机器人</p><p>1699元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>dfb!160x110.jpg"/></a></p><p>米家压力IH电饭煲</p><p>999元</p></li>
                                <li><p class="itmem-children-none"></p><p><a href="javascript:void(0)"><img src="<?php echo (HOME_IMG_URL); ?>air2!160x110.jpg"/></a></p><p class="itmem-children-three">查看全部</p><p>智能硬件</p></li>
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
                <a href="show.html?id=2">小米Max 2</a>
                <a href="show.html?id=1">小米Note 3</a>
            </div>
            <div id="keyword"><ul id="keyul"></ul></div><a id="keya"></a>
        </div>
    </div>
</nav>
<!--E:nav-->
<!--S:分界线-->
<div class="breadcrumbs">
    <div class="bread_con">
        <a href="index.html">首页</a>
        <span>></span>
        <a href="list.html">所有分类</a>
        <span>></span>
        <a href="javascript:void(0)" id="fen"></a>
        <span>></span>
        <a href="javascript:void(0)" id="title"></a>
    </div>
</div>
<div class="breadcrumbs piao">
    <div class="bread_con">
        <a href="index.html">首页</a>
        <span>></span>
        <a href="list.html">所有分类</a>
        <span>></span>
        <a href="javascript:void(0)" id="fen1"></a>
        <span>></span>
        <a href="javascript:void(0)" id="title1"></a>
    </div>
</div>
<!--E:分界线-->
<!--S:商品详情-->
<div class="shop">
    <div class="shop_left">
        <div class="before">
            <div id="mask"></div>
            <div id="glass">
                <img src="http://localhost/xiaomi/Public/Home/img/<?php echo ($photo); ?>" id="gimg"/>
            </div>
            <img src="http://localhost/xiaomi/Public/Home/img/<?php echo ($photo); ?>" id="small"/>
        </div>
        <div class="then">
            <img src="http://localhost/xiaomi/Public/Home/img/<?php echo ($photo); ?>" id="big"/>
        </div>
        <div class="spec-list">
            <a href="javascript:void(0)" id="forward"><i class="style icon-point-left"></i></a>
            <a href="javascript:void(0)" id="backward"><i class="style icon-point-right"></i></a>
            <div class="spec-items">
                <ul id="specUl">
                </ul>
            </div>
        </div>
    </div>



    <div class="shop_right">
        <form method="post" action="<?php echo U('Home/Car/add_mycar');?>">
            <input type="hidden" name="name" value="<?php echo ($name); ?>">
            <input type="hidden" name="price" value="<?php echo ($price); ?>">
            <input type="hidden" name="photo" value="<?php echo ($photo); ?>">
        <h1></h1>
        <p></p>
        <p>
            <span>赠品</span><span>无限流量米粉卡 含100元话费</span>
        </p>
        <h1>地区选择</h1>
            <div class="styled-select"><select name="s1" id="s1"> </select></div>
            <div class="styled-select"><select name="s2" id="s2"> </select></div>
            <div class="styled-select"><select name="s3" id="s3"> </select></div>
            <p style="font-family: 'kaiti';font-size:23px;"><span style="color:#000;">商品名称：</span><strong style="color:orange;"><?php echo ($name); ?></strong></p><br/>
            <p style="font-family: 'kaiti';font-size:23px;"><span>商品价格：</span><strong style="color:orange;"><?php echo ($price); ?>￥</strong></p><br/>
            <div style="float:left;"><span style="font-family: 'kaiti';font-size:23px;">商品数量：</span>
            <div class="gw_num" style="float:right;">
                <em class="jian">-</em>
                <input type="text" value="1" name="num" class="num"/>
                <em class="add">+</em>
            </div>
           </div>

            <br/>
            <br/>
            <br/>
            <br/>

            <input type="image" style="margin-left:30px;" src="<?php echo (HOME_IMG_URL); ?>buy.jpg" name="img">
        </form>
    </div>








</div>
<!--E:商品详情-->
<!--S:商品图片介绍-->
<div class="proInfo">
    <div class="infor-con">
        <h3>小米承诺 </h3>
        <img src="<?php echo (HOME_IMG_URL); ?>913dbcde8a3e02bded640b3cd12837a9.png"/>
    </div>
</div>
<!--E:商品图片介绍-->
<!--S:创建网页footer底部模板-->
<footer>
    <nav></nav>
    <nav></nav>
</footer>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js" ></script>

<script>
    $(document).ready(function(){
//加的效果
        $(".add").click(function(){
            var n=$(this).prev().val();
            var num=parseInt(n)+1;
            if(num==0){ return;}
            $(this).prev().val(num);
        });
//减的效果
        $(".jian").click(function(){
            var n=$(this).next().val();
            var num=parseInt(n)-1;
            if(num==0){ return}
            $(this).next().val(num);
        });
    })
</script>
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
<script src="<?php echo (HOME_JS_URL); ?>jquery.mousewheel.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>common.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>citys.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>show.js" type="text/javascript" charset="utf-8"></script>