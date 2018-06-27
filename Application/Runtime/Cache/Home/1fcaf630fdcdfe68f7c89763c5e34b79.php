<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>小米商场 -我的购物车</title>
		<link rel="icon" href="<?php echo (HOME_IMG_URL); ?>favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>cssReset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>mycar.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>footer.css"/>
		<script src="<?php echo (HOME_JS_URL); ?>template.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>base2.css">
        <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>checkout.css">
        <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>modal.css">
    </head>
	<body>
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
					<div id="infor">
						<div id="infor1">
                            <!--
                            <a href="/xm/index.php/Home/Login/login">登录</a><span>|</span>
                            <a href="/xm/index.php/Home/Login/register">注册</a><span>|</span>
                            -->
                            <ul id="list">
                                <li>
                                    <h2>hello,<span style="color:red;"><?php echo (session('name')); ?></span></h2>
                                    <ul style="display: none">
                                        <li><a href="<?php echo U('Home/Login/loginout');?>">退出</a></li>
                                    </ul>
                                </li>
                            </ul>
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
		<!--S:分界线-->




		<div class="site-header">
			<div class="container">
				<a href="/xm/index.php/Home/Index/index"></a>
				<h2>我的购物车</h2>
				<p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
			</div>
		</div>

		<div class="cartBox">
			<div class="container">
			<table id="table">
			<thead>
				<tr>
                    <td>全选<input type="checkbox" name="item" id="boxId" class="check-all check"></td>
					<td>图片</td>
					<td>商品名称</td>
					<td>单价</td>
					<td>数量</td>
                    <td>价格</td>
					<td>操作</td>
				</tr>
			</thead>
          <?php if(is_array($result)): foreach($result as $key=>$v): ?><tbody id="tbody1">
             <tr class="tr1">
                 <td><input type="checkbox" name="item" class="check-one check"></td>
                 <td><img src="<?php echo (HOME_IMG_URL); echo ($v["photo"]); ?>"></td>
                 <td><?php echo ($v["name"]); ?></td>
                 <td class="price"><?php echo ($v["price"]); ?>￥</td>
                 <td class="num"><?php echo ($v["num"]); ?></td>
                 <td class="subtotal"><?php echo ($v['num']*$v['price']); ?>￥</td>
                 <td><a href="<?php echo U('Home/Car/del_mycar',array('id'=>$v['id']));?>">
                     <img style="width:19px;height:19px;" src="<?php echo (ADMIN_IMG_URL); ?>icon_drop.gif">
                     </a>
                 </td>
             </tr>
			</tbody><?php endforeach; endif; ?>
		</table>
			</div>
			<div class="container">
				<div class="cartBar">
					<div class="section-left">
						<a href="/xm/index.php/Home/Index/index">继续购物</a>
						<span>共<i id="cartBartotal"> </i>件商品,已选择<b id="select">0</b>件</span>
					</div>
					<div class="section-right">
						<span>合计:<em id="priceTotal">0</em>元</span>
						<a href="javascript:void(0)">去结算</a>
					</div>
				</div>
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
<!-- <script src="<?php echo (HOME_JS_URL); ?>cookie.js" type="text/javascript" charset="utf-8"></script> -->
<!-- <script src="<?php echo (HOME_JS_URL); ?>mycar.js" type="text/javascript" charset="utf-8"></script> -->
<script>

    var oLi=document.querySelector('#list>li');
    var oUl=document.querySelector('#list>li>ul');
    oLi.onmouseout=function(){
        oUl.style.display='none';
    }

    oLi.onmouseover=function(){
        oUl.style.display='block';
    }
</script>
<script>
    /*function selectALLNO() {
        // 获取要操作的复选框
        var box1=document.getElementById("boxId");
        //checked判断是否选中
        if(box1.checked==true)
        {
            selectAll();
        }
        else
        {
            SelectNO();
        }
    }

    function selectAll() {
        // 获取要操作的复选框
        var box1=document.getElementsByName("item");

        //checked判断是否选中
        for(var x=0;x<box1.length;x++)
        {
            var value1=box1[x];
            value1.checked=true;
        }
    }
    function SelectNO(){
        // 获取要操作的复选框
        var box2 = document.getElementsByName("item");
        //checked判断是否选中
        for (var x = 0; x < box2.length; x++) {
            var value1=box2[x];
            value1.checked=false;
        }
    }
      */

    var table = document.getElementById('table');
    var tr = document.getElementsByClassName('tr1');
    var selectedTotal = document.getElementById('select'); //选择的商品总数
    var selectInputs = document.getElementsByClassName('check'); // 所有勾选框
    var checkAllInputs = document.getElementsByClassName('check-all') // 全选框
    var priceTotal = document.getElementById('priceTotal'); //总计
    var cartBartotal = document.getElementById('cartBartotal'); //商品总数
    
    //计算商品总数
    function total() {
        var Total = 0;
        for (var i = 0; i < tr.length; i++) {
            Total += parseInt(tr[i].cells[4].innerHTML);
        }
        cartBartotal.innerHTML = Total;
    }
    total();

    //更新总数和总价格
    function getTotal() {
        var seleted = 0;
        var price = 0;
        var HTMLstr = '';
        for (var i = 0; i < tr.length; i++) {
            if (tr[i].getElementsByTagName('input')[0].checked) {
                seleted += parseInt(tr[i].cells[4].innerHTML);
                price += parseFloat(tr[i].cells[5].innerHTML);
            }
            
        }
        selectedTotal.innerHTML = seleted;
        priceTotal.innerHTML = price.toFixed(2);
    }

    //点击选择框
    for(var i = 0; i < selectInputs.length; i++ ){
        selectInputs[i].onclick = function () {
            if (this.className.indexOf('check-all') >= 0) { //如果是全选，则把所有的选择框选中
                for (var j = 0; j < selectInputs.length; j++) {
                    selectInputs[j].checked = this.checked;
                }
            }
            if (!this.checked) { //只要有一个未勾选，则取消全选框的选中状态
                for (var i = 0; i < checkAllInputs.length; i++) {
                    checkAllInputs[i].checked = false;
                }
            }
            getTotal();//选完更新总计
        }
    }
</script>