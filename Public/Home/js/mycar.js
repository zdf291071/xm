/*购物车的隐藏与显示
 */

var is=document.getElementById('mycar').getElementsByTagName('i')[1];//总数显示
$(function(){
	var bg1,col1;
	$('.topbar-cart').mouseenter(function(){
		bg1=$('#mycar').css('background-color');
		col1=$('#mycar').css('color');
		$('#mycar').css({'background':'#fff','color':'#ff6700'})
		$('.showr-cart').stop().slideDown();
		setTimeout(function(){
			$('.loader').show();
		},10);
		if(getGoods()){
			setTimeout(function(){
				/*$(p'.loader').hide();
				$('.loading').html('');*/
				$('.showr-cart').hide();
				$('.showr-list').show();
			},900)
		}else{
			setTimeout(function(){
				$('.loader').hide();
				$('.loading').html('购物车中还没有商品，赶紧选购吧!')
			},900)
		}

	}).mouseleave(function(){
		$('#mycar').css({'background':bg1,'color':col1})
		$('.showr-cart').stop().slideUp();
		$('.loading').text('');
		$('.showr-list').hide();
	})


		/*
		 * 显示数量
		 */

		showNum();
		function showNum(){
			var $listul=$('.showr-list ul');
			var $tspan=$('.jie a span:nth-child(1)');
			var $pspan=$('.jie a span:nth-child(3)');
			$listul.html("");
			is.innerHTML=getGoodsCookies(function(_name,obj3){
				var $li=$("<li></li>");
				$listul.append($li);
				var $img=$("<img />");
				$img.attr({'src':'img/'+obj3.img});
				$li.append($img);
				var $span1=$("<span>"+obj3.title+"</span>");				$li.append($span1);
				var $span2=$("<span></span>");
				var $b=$("<b>"+obj3.price+"元x"+"</b>");
				$span2.append($b);
				var $i=$("<i>"+obj3.num+"</i>");
				$span2.append($i);
				$li.append($span2);
				var $span3=$("<span></span>");
				$span3.addClass('style icon-cancel-circle');
				$li.append($span3);
				$span3.click(function(){
					setCookie('g'+obj3.id,obj3,-1);
					$li.remove();
					is.innerHTML=getGoodsCookies(function(_name,obj3){});
					$tspan.html("共"+is.innerHTML+"件商品");
					$pspan[0].innerHTML=getPrice(function(_name,obj3){})+"元";
					if(is.innerHTML==0){
						$('.showr-list').hide();
						$('#mycar').css({'background':'#333','color':'#b0b0b0'})
					}
				})
			});
			$('#cartBartotal').html(is.innerHTML);
			$tspan.html("共"+is.innerHTML+"件商品");
			$pspan[0].innerHTML=getPrice(function(_name,obj3){})+"元";
			if(is.innerHTML>=1){
				$('#mycar').css({'background':'#ff6700','color':'#fff'})
			}else{
				$('#mycar').css({'background':'#424242','color':'#b0b0b0'})
			}
		}
})
/*用户名的显示效果
 */
$('#infor3').mouseenter(function(){
	$(this).css({'background':'#fff'});
	$(this).children('a').css({'color':'#f56600'});
	$(this).children('b').removeClass('icon-circle-down').addClass('icon-circle-up').css({'color':'#f56600'});
	$(this).children('ul').stop().slideDown();
	$(this).children('ul').children('li').mouseenter(function(){
		$(this).css({'background':'#f5f5f5'});
		$(this).children('a').css({'color':'#f56600'});
	}).mouseleave(function(){
		$(this).css({'background':'#fff'});
		$(this).children('a').css({'color':'#b0b0b0'});
	})
}).mouseleave(function(){
	$(this).children('ul').stop().slideUp();
	$(this).children('b').removeClass('icon-circle-up').addClass('icon-circle-down').css({'color':'#b0b0b0'});
	$(this).children('a').css({'color':'#b0b0b0'});
	$(this).css({'background':'#333'});
})
var infor1=document.getElementById("infor1");
var infor2=document.getElementById("infor2");
var myname=document.getElementById("myname");
var logout=document.getElementById("logout");
var obj=getCookie('obj');
if(obj.user && obj.pass ){
	infor1.style.display='none';
	infor2.style.display='block';
	myname.innerHTML=obj.user;
}
logout.onclick=function(){
	setCookie('obj','',-1);
	location.reload();
}


/*商品订单页面
 */
var is=document.getElementById('mycar').getElementsByTagName('i')[1];
getGoodsCookies(function(_name, obj3) {


	var carty=$('.cartBar').offset().top;
	var wy=$(window).height()-$('.cartBar').height();
	var $tr=$("<tr></tr>");
	$('#tbody1').append($tr);
	//checkbox框
	var $td1=$('<td></td>');
	var $input1=$('<input />');
	$input1.attr({'type':'checkbox','name':'checkbox'});
	$td1.append($input1);
	$tr.append($td1);
	//img图片
	var $td2=$('<td></td>');
	var $a1=$("<a></a>");
	$a1.attr({'href':'show.html?id='+obj3.id,'target':'_blank'});
	var $img=$("<img src=img/"+obj3.img+" />");
	$img.attr({'title':'点击查看详情'})
	$a1.append($img)
	$td2.append($a1);
	$tr.append($td2);
	//title标题
	var $td3=$('<td></td>');
	$td3.html(obj3.title);
	$tr.append($td3);
	//单价
	var $td4=$('<td></td>');
	$td4.html(obj3.price+"元");
	$tr.append($td4);
	//数量
	var $td5=$('<td></td>');
	var $input2=$('<input />');
	$input2.attr({'type':'button','value':'-'});
	$td5.append($input2);
	$input2.click(function(){
		obj3.num-=1;

		if(obj3.num<1){
			$tr.remove();
			setCookie('g'+obj3.id,"",-1);
			location.reload();
		}
		setNum($input3,$td6,obj3);

	})
	var $input3=$('<input />');
	$input3.attr({'type':'text','value':obj3.num});
	$td5.append($input3);
	$input3.blur(function(){
		if(/^\d+$/.test($(this).val())){
			obj3.num=Number($(this).val());

		}else{
			//$(this).val()=obj3.num;
		}
			setNum($input3,$td6,obj3);

	})
	var $input4=$('<input />');
	$input4.attr({'type':'button','value':'+'});
	$td5.append($input4);
	$input4.click(function(){
		obj3.num+=1;
		setNum($input3,$td6,obj3);

	})
	$tr.append($td5);
	//小计
	var $td6=$('<td></td>');
	$td6.html(obj3.price*obj3.num+"元");
	$tr.append($td6);
	//操作
	var $td7=$('<td></td>');
	var $a2=$("<a href='javascript:void(0)'>x</a>");
	$td7.append($a2);
	$a2.click(function(){
		$('.sure').stop().fadeIn(function(){
			$('.con-sure').stop().slideDown();
		});
		$('.con-sure a').click(function(){
			$('.con-sure').stop().slideUp(function(){
				$('.sure').stop().fadeOut();
			});
		});
		$('#alertCancel').click(function(){
			$('.con-sure').stop().slideUp(function(){
				$('.sure').stop().fadeOut();
			});
		});
		$('#alertOk').click(function(){
			$('.con-sure').stop().slideUp(function(){
				$('.sure').stop().fadeOut(function(){
					$tr.remove();
					setCookie('g'+obj3.id,"",-1);
					is.innerHTML=getGoodsCookies(function(_name,obj3){});
					$('#cartBartotal').html(is.innerHTML);
					$('#select').html(is.innerHTML);
					location.reload();
				});

			});

		});
	})
	$tr.append($td7);

	//cartBar的动态显示效果

	if(carty>wy){
		$('.cartBar').addClass('cartBar-fixed');
	}else{
		$('.cartBar').removeClass('cartBar-fixed');
	}
	$(document).bind('scroll',function(){
		var sy=$(document).scrollTop();
		if(wy+sy>carty){
			$('.cartBar').removeClass('cartBar-fixed');
		}else if(wy+sy<carty){
			$('.cartBar').addClass('cartBar-fixed');
		}
	})
})
/*数量价格的更新
 */
function setNum($input3,$td6,obj3){
	$input3.val(obj3.num);
	$td6.html(obj3.price*obj3.num+"元");
	setCookie('g'+obj3.id,obj3,10);
	$('.showr-list ul li i').html(obj3.num);
	$('.jie a span:nth-child(3)')[0].innerHTML=getPrice(function(_name,obj3){})+"元";
	is.innerHTML=getGoodsCookies(function(_name,obj3){});
	$('#cartBartotal').html(is.innerHTML);
}
$(function(){

	//cartBar的数字显示情况
	var sum=a=mon=summon=b=0;
	$('#all').prop("checked", false);
	$('#all').click(function(){
		if(this.checked){
			sum=a=mon=summon=b=0;
        	$("#tbody1 :checkbox").prop("checked", true);
        	$("#tbody1 :checkbox").each(function(){
        		a=$(this).parent().siblings().children(":text").val();
        		mon=$(this).parent().parent().children('td:nth-child(6)').html();
        		summon=summon+parseInt(mon);
				sum=sum+parseInt(a);
				$('.section-right a').addClass('select');
        	})
    	}else{
			$("#tbody1 :checkbox").prop("checked", false);
			$("#tbody1 :checkbox").each(function(){
        		a=$(this).parent().siblings().children(":text").val();
        		mon=$(this).parent().parent().children('td:nth-child(6)').html();
        		summon=summon-parseInt(mon);
				sum=sum-parseInt(a);
				$('.section-right a').removeClass('select');

        	})
    	}
    	$('#select').html(sum);
		$('em').html(summon);
	})
	var len=$("#tbody1 :checkbox").length;


	$("#tbody1 :checkbox").click(function(e){
		e.stopPropagation();
		if(this.checked){
			a=$(this).parent().siblings().children(":text").val();
			mon=$(this).parent().parent().children('td:nth-child(6)').html();
			summon=summon+parseInt(mon);
			sum=sum+parseInt(a);
			b+=1;

		}else{
			a=$(this).parent().siblings().children(":text").val();
			mon=$(this).parent().parent().children('td:nth-child(6)').html();
			summon=summon-parseInt(mon);
			sum=sum-parseInt(a);
			b-=1;
		}
		$('#select').html(sum);
		$('em').html(summon);
		if(b==len){
			$('#all').prop("checked", true);
		}else{
			$('#all').prop("checked", false);
		}
		if(b>=1){
			$('.section-right a').addClass('select');

		}else if(b==0){
			$('.section-right a').removeClass('select');

		}
	})

    /*

		$('.section-right a').click(function(){
			var obj=getCookie('obj');
			if(obj.user && obj.pass && b>=1){
				$('.section-right a').attr({'href':'index.html'});
			}else if(b==0){
				alert('请选择要购买的商品');
				$('.section-right a').attr({'href':'javascript:void(0)'});
			}else{
				alert('请先注册本网站');
				window.location.href = "register.html";
			}
		})
*/
})
