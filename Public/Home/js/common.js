/*购物车的隐藏与显示
 */
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
		var is=document.getElementById('mycar').getElementsByTagName('i')[1];
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
			$tspan.html("共"+is.innerHTML+"件商品");
			$pspan[0].innerHTML=getPrice(function(_name,obj3){})+"元";
			if(is.innerHTML>=1){
				$('#mycar').css({'background':'#ff6700','color':'#fff'})
			}else{
				$('#mycar').css({'background':'#424242','color':'#b0b0b0'})
			}
		}
})
/*导航的隐藏与显示
 */
$(function(){
	$ul=$('.nav-list>ul');
	$ul.mouseenter(function(){
		$ul.find('li>.item-children').stop().slideDown();
	}).mouseleave(function(){
		$ul.find('li .item-children').stop().slideUp();
	})
	$li=$('.nav-list>ul>li');
		$li.mouseenter(function(e){
		e.stopPropagation();
			$('.item-children').stop().hide();
			$(this).children('a').css({color:'#FF6700'});
			$(this).children('.item-children').stop().show();
		}).mouseleave(function(e){
			$(this).children('a').css({color:'#333'});
			$(this).children('.item-children').stop().slideUp();
		})
})
/*搜索框的效果
 */
$(function(){
	$('#search').focus(function(){
		$(this).css({'border-color':'#ff6700'});
		$(this).next().css({'border-color':'#ff6700'});
		$(this).next().next().stop().fadeOut();
		$(this).val("");
		//获得焦点时得到本地数据
		$.get("date/search.php",function(str){
			$('#keyword').show();
			$('#keyword ul').empty();
			var arr=str.split("|");
			for( var i=1,l=arr.length; i<l; i++ ){
				var $li=$('<li><span class="keyword1"></span><span class="keyword2"></span></li>');
				$('#keyword ul').append($li);
				var col=arr[i].split(",");

				$li.children('span:nth-child(1)').html(col[0]);
				$li.children('span:nth-child(2)').html(col[1]);
			}
		})
		
	}).blur(function(){
		$('#keyword ul').empty();
		$('#keyword').hide();
		$(this).css({'border-color':'#E0E0E0'});
		$(this).next().css({'border-color':'#E0E0E0'});
		$(this).next().next().stop().fadeIn();
	})
	
})
function jsonp(url){
	var script=document.createElement('script');
	document.getElementsByTagName('head')[0].appendChild(script);
	script.src=url;
}
var keyul=document.getElementById("keyul");
function callback(json){
	keyul.innerHTML='';
	for(var i=0,l=json.length;i<l;i++){
	for(var key in json[i]){
		if(key=='Key'){
	    console.log(key+':'+json[i][key]);
	    var li=document.createElement('li');
			keyul.appendChild(li);
			li.innerHTML=json[i][key];
		}
		}
	 }
}


var index=0,lis,len;
var keya=document.getElementById("keya");
var search=document.getElementById("search");
var keya=document.getElementById("keya");
var keyword=document.getElementById("keyword");
search.onkeyup=function(e){
	e=e||window.event;
	var code=e.keyCode||e.which;
	lis=keyul.getElementsByTagName('li');
	len=lis.length;
	var url;
	switch(code){
		case 10:
		case 13:
			url='https://search.mi.com/search_'+lis[index].innerText;
			keya.href=url;
			keya.target='_blank';
			keya.click();
			keyword.style.display='none';
			break;
		case 38:
			index--;
			if(index<0)index=len-1;
			chStyle();
			break;
		case 40:
			index++;
			if(index==len)index=0;
			chStyle();
			break;
		default:
			var w=this.value;
			if(w!=''){
				var url = "https://search.mi.com/search/expand?jsonpcallback=callback&keyword="+w;
				console.log(url);
				jsonp(url);	
			}else{
				keyul.innerHTML='';
			}
	}
	
}

function chStyle(){
	Array.from(lis).forEach(function(li){
		li.style.background='';
	})
	lis[index].style.background='#E4F2FE';
	search.value=lis[index].innerText;
}
var searchbtn=document.getElementById("search-btn");
searchbtn.onclick=function(){
	url='https://search.mi.com/search_'+search.value;
	keya.href=url;
	keya.target='_blank';
	keya.click();
}
/*左侧列表导航的隐藏与显示
 */
$(function(){
	$('.alllist').mouseenter(function(){
		$('.alllist .img-left').show();
	}).mouseleave(function(){
		$('.alllist .img-left').hide();
	})
	var $li=$('.img-left>ul>li');
	$li.bind('mouseenter',function(){
		$(this).children('.children').stop().show(500);
	})
	$li.bind('mouseleave',function(){
		$(this).children('.children').stop().hide(500);
	})
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

