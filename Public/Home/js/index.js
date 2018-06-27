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
				/*$('.loader').hide();
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
/*$(function(){
	$li=$('.nav-list>ul>li');
	$li.mouseenter(function(){
		$(this).children('a').css({color:'#FF6700'});
		$(this).children('.item-children').stop().slideDown();
	}).mouseleave(function(){
		$(this).children('a').css({color:'#333'});
		$(this).children('.item-children').stop().slideUp();
	})
})*/
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


/*导航图片的轮播
 */
/*var imgright=document.getElementsByClassName('img-right')[0];
var imgrightul=imgright.getElementsByTagName('ul')[0];
var imgrightol=imgright.getElementsByTagName('ol')[0];
var imgrightulli=Array.from(imgrightul.children);
var imgrightolli=Array.from(imgrightol.children);
var lBtn=imgright.getElementsByTagName('p')[0];
var rBtn=imgright.getElementsByTagName('p')[1];
imgrightolli.forEach(function(li,index){
	li.onclick=function(){
		now=index;
		tab();
	}
});

var now=0;
tab();
lBtn.onmouseover=function(){
	this.style.backgroundPosition='0 50%';
}
rBtn.onmouseover=function(){
	this.style.backgroundPosition='-42px 50%';
}
lBtn.onmouseout=function(){
	this.style.backgroundPosition='-84px 50%';
}
rBtn.onmouseout=function(){
	this.style.backgroundPosition='-125px 50%';
}
lBtn.onclick=function(){
	now--;
	if(now==-1){
		now=6;
	}
	tab();
}
rBtn.onclick=function(){
	now++;
	if(now==7){
		now=0;
	}
	tab();
}
function tab(){
	imgrightolli.forEach(function(li,index){
		li.className='';
		startMove(imgrightulli[index],{"opacity":0},function(){
			imgrightulli[index].style.dispaly='none';
		});
	})
	imgrightolli[now].className='selected';
	imgrightulli[now].style.dispaly='block';
	startMove(imgrightulli[now],{'opacity':100});
	
}
function next(){
	now++;
	if(now==7){
		now=0;
	}
	tab();
}
var timer=setInterval(next,3000);
imgright.onmouseover=function(){
	clearInterval(timer);
}
imgright.onmouseout=function(){
	timer=setInterval(next,3000);
}*/

/*搜索框的动画效果
 */


/*左侧列表导航的隐藏与显示
 */
$(function(){
	var $li=$('.img-left>ul>li');
	$li.bind('mouseenter',function(){
		$(this).children('.children').stop().show(500);
	})
	$li.bind('mouseleave',function(){
		$(this).children('.children').stop().hide(500);
	})
})
/*小米明星单品的轮播
 */
$(function(){
	var $ul=$('.xm-plain-box .box-bd ul');
	$('#morea1,#morea3').click(function(){
		marginleft2();
	})
	$('#morea2,#morea4').click(function(){
		marginleft1();
	})
	var timer=setInterval(marginleft,5000);
	function marginleft(){
		var marginLeft=$ul.css('marginLeft');
		if(marginLeft=='0px'){
			marginleft1();
		}else{
			marginleft2();	
		}
	}
	function marginleft1(){
		$ul.stop().animate({'marginLeft':'-1240px'});
		$('#morea2,#morea4').removeClass('morea2');
		$('#morea1,#morea3').addClass('morea2');
	}
	function marginleft2(){
		$ul.stop().animate({'marginLeft':'0px'});
		$('#morea1,#morea3').removeClass('morea2');
		$('#morea2,#morea4').addClass('morea2');
	}
	$(".xm-plain-box .box-bd ul,#morea1,#morea2,#morea3,#morea4").mouseenter(function(){
		clearInterval(timer);
		console.log($(this).css('color'));
		if($(this).css('color')=='rgb(153, 153, 153)'){
			$(this).addClass('morea3');
		};
	});
	$(".xm-plain-box .box-bd ul,#morea1,#morea2,#morea3,#morea4").mouseleave(function(){
		timer=setInterval(marginleft,5000);
		if($(this).css('color')=='rgb(255, 172, 19)'){
			$(this).removeClass('morea3');
		};
	});

})

/*商品列表的动画显示
 */
$(function(){
	//单个商品的动画显示
	$('.box-list1 ul li,.recommend .box-bd ul li,.comment .box-bd ul li,.content>.box-bd>ul>li,.video>.box-bd>ul>li').mouseenter(function(){
		$(this).addClass('boxlist');
		$(this).children('div').stop().animate({
			'opacity':1,
			'height':'75px'
		},300);
	}).mouseleave(function(){
		$(this).removeClass('boxlist');
		$(this).children('div').stop().animate({
			'opacity':0,
			'height':0
		},300);
	})
	//tab栏切换
	$li1=$('.homeelec .box-list ul li');
	$ul1=$('.homeelec .box-span2 ul');
	$li1.mouseenter(function(){
		var ind=$(this).index();
		$(this).addClass('tab-active').siblings().removeClass('tab-active');
		$ul1.eq(ind).addClass('tab-show').siblings().removeClass('tab-show');
	})
	
	$li2=$('.smart .box-list ul li');
	$ul2=$('.smart .box-span2 ul');
	$li2.mouseenter(function(){
		var ind=$(this).index();
		$(this).addClass('tab-active').siblings().removeClass('tab-active');
		$ul2.eq(ind).addClass('tab-show').siblings().removeClass('tab-show');
	})
	
	$li3=$('.match .box-list ul li');
	$ul3=$('.match .box-span2 ul');
	$li3.mouseenter(function(){
		var ind=$(this).index();
		$(this).addClass('tab-active').siblings().removeClass('tab-active');
		$ul3.eq(ind).addClass('tab-show').siblings().removeClass('tab-show');
	})
	
	$li4=$('.accessories .box-list ul li');
	$ul4=$('.accessories .box-span2 ul');
	$li4.mouseenter(function(){
		var ind=$(this).index();
		$(this).addClass('tab-active').siblings().removeClass('tab-active');
		$ul4.eq(ind).addClass('tab-show').siblings().removeClass('tab-show');
	})
	
	$li5=$('.around .box-list ul li');
	$ul5=$('.around .box-span2 ul');
	$li5.mouseenter(function(){
		var ind=$(this).index();
		$(this).addClass('tab-active').siblings().removeClass('tab-active');
		$ul5.eq(ind).addClass('tab-show').siblings().removeClass('tab-show');
	})
})

/*内容的图片轮播
 */
$(function(){
	var $cona1=$('.content ul li p a:nth-child(1)');
	var $cona2=$('.content ul li p a:nth-child(2)');
	$cona1.click(function(){
	var conleft=parseInt($(this).parent().prev().prev().css('left'));
	var width1=parseInt($(this).parent().prev().prev().css('width'));
	var $conli=$(this).parent().prev().children();
	var cona=(Math.abs(conleft/296))-1;
	if(conleft==0){
		return false;
	}else{
		conleft+=296;
		$conli.eq(cona).addClass('aactive').siblings().removeClass('aactive');
		$(this).parent().prev().prev().stop().animate({
			'left':conleft+'px'
		})
	}
	}).mouseenter(function(){
		var conleft=parseInt($(this).parent().prev().prev().css('left'));
		if(conleft==0){
		$(this).css({'cursor':'default'});
		}else{
			$(this).css({'cursor':'pointer'});
		}
	})
	$cona2.click(function(){
		var conleft=parseInt($(this).parent().prev().prev().css('left'));
		var width1=parseInt($(this).parent().prev().prev().css('width'));
		var $conli=$(this).parent().prev().children();
		var cona=(Math.abs(conleft/296))+1;
		if(conleft==-(width1-296)){
			return false;
		}else{
			conleft-=296;
			$conli.eq(cona).addClass('aactive').siblings().removeClass('aactive');
			$(this).parent().prev().prev().stop().animate({
				'left':conleft+'px'
			})
		}
		$(this).parent().prev().prev().animate({
			'left':conleft+'px'
		})
	}).mouseenter(function(){
		var conleft=parseInt($(this).parent().prev().prev().css('left'));
		var width1=parseInt($(this).parent().prev().prev().css('width'));
		if(conleft==-(width1-296)){
		$(this).css({'cursor':'default'});
		}else{
			$(this).css({'cursor':'pointer'});
		}
	})
	//点击圆点进行切换
	var $conli1=$('.content ul li:nth-child(1) ol:nth-child(3) li');
	var $conli2=$('.content ul li:nth-child(2) ol:nth-child(3) li');
	var $conli3=$('.content ul li:nth-child(3) ol:nth-child(3) li');
	var $conli4=$('.content ul li:nth-child(4) ol:nth-child(3) li');
	function lunBo(elem){
		elem.click(function(){
			var ind=$(this).index();
			var nowLeft=-ind*296;
			$(this).addClass('aactive').siblings().removeClass('aactive');
			$(this).parent().prev().animate({
				'left':nowLeft+'px'
			})
		})
	}
	lunBo($conli1);
	lunBo($conli2);
	lunBo($conli3);
	lunBo($conli4);
})

/*视频API
 */
var showVideo1=document.getElementById("showVideo1");
 $(window).load(function(){
	var cw=$(window).width();
	var ch=$(window).height();
	//视频播放器的拖拽效果
	function vodeoconDrag(){
	$('.showVideo').css({
		'left':(cw-$('.showVideo').width())/2,
		'top':(ch-$('.showVideo').height())/2
	})
	$('.svtit').mousedown(function(e){
		e=e||window.event;
		var X=e.clientX-$('.showVideo').offset().left;
		var Y=e.clientY-showVideo1.offsetTop;
		$(document).bind('mousemove',function(e){
			e=e||window.event;
			var x=e.clientX-X;
			var y=e.clientY-Y;
			if(x<0)x=0;
			if(y<0)y=0;
			if(x+$('.showVideo').width()>cw)x=cw-$('.showVideo').width();
			if(y+$('.showVideo').height()>ch)y=ch-$('.showVideo').height();
			$('.showVideo').css({
				'left':x,
				'top':y
			})
		})
		$(document).bind('mouseup',function(){
			$(document).unbind('mousemove mouseup');
		})
		return false;
	})
	}
	//视频进度条和音量进度条
	function videoDrag($elem,num){
		var maxtimer=parseInt($('#mp4')[0].duration);
		var _v=$('#bcon').parent().width()/maxtimer;
		$elem.mousedown(function(e){
		e=e||window.event;
		var X1=e.clientX-$elem[0].offsetLeft;
		$(document).bind('mousemove',function(e){
			e=e||window.event;
			var x1=e.clientX-X1;
			if(x1<0)x1=0;
			if(x1+$elem.width()>$elem.parent().width())x1=$elem.parent().width()-$elem.width();
			$elem.css({'left':x1});
			$elem.prev().css({'width':x1});
			if(num==1){
				$('#mp4')[0].pause();
				$('#icon-play3').removeClass('icon-pause2').addClass('icon-play3');
				movetime(x1/_v);
			}
			if(num==2){
				$('#mp4')[0].volume=x1/100;
				if(x1==0){
					$('#volume').removeClass('icon-volume-medium').addClass('icon-volume-mute2');	
				}else{
					$('#volume').removeClass('icon-volume-mute2').addClass('icon-volume-medium');
				}
			}
		})
		$(document).bind('mouseup',function(){
			if(num==1){
				$('#mp4')[0].play();
				$('#icon-play3').removeClass('icon-play3').addClass('icon-pause2');	
			}	
			$(document).unbind('mousemove mouseup');
		})
		return false;
	})
	}
	//视频进度的拖拽

	videoDrag($('#bcon'),1);
	//声音音量的拖拽

	videoDrag($('#bvoice'),2);
	//点击显示视频
	$videospan=$('.video .box-bd ul span');
	$videospan.click(function(){
		
		$('#showVideo').show();
		$('.showVideo').stop().animate({
			'opacity':1,
			'height':'596px'
		},500);
		setTimeout(function(){
			vodeoconDrag();
		},500);
		$('#mp4')[0].load();
	})
	$('#closevideo').click(function(){
		$('.showVideo').stop().animate({
			'opacity':0,
			'height':'0px'
		},500);
		setTimeout(function(){
			$('#showVideo').hide();
		},700);
		$('.mp4img').show();
		$('.mp4play').show();
		$('#mp4')[0].pause();
		$('#mp4').hide();
		$('.mp4').hide();
	})
	//点击播放视频
	$('.mp4,.mp4con').mouseenter(function(){
		$('.mp4con').stop().slideDown();
	}).mouseleave(function(){
		$('.mp4con').stop().slideUp();
	})
	$('.mp4play').click(function(){
		$('.mp4img').hide();
		$('.mp4play').hide();
		$('.mp4').show();
		$('#mp4').show();
		$('#mp4')[0].play();
		$('#mp4')[0].volume=0.5;
		showtime();
		$('#icon-play3').removeClass('icon-play3').addClass('icon-pause2');
	})
	$('#icon-play3').click(function(){
		playvideo();
	})
	$('.mp4').click(function(){
		if($('#mp4')[0].paused){
			$('#mp4')[0].play();
		}else{
			$('#mp4')[0].pause();
		}
		 playvideo();
	})
	//音量控制
	$('#volume').click(function(){
		playvoice();
	})
	//视频显示时间
	function showtime(){
			var maxtimer=parseInt($('#mp4')[0].duration);
			var _v=$('#bcon').parent().width()/maxtimer;
		$('#mp4')[0].addEventListener('timeupdate',function(){
			var _x=$('#mp4')[0].currentTime;
			if(_x>0)$('#bcon').css({'left':_v*_x-10});
			$('#bcon').prev().css({'width':_v*_x-10});
			var s=parseInt(_x);
			if(s<10)s='00:0'+s;
			if(s>=10 && s<maxtimer)s='00:'+s;
			if(s>=maxtimer)s='01:00';
			$('#videotime').html(s);
			overtieme(s);
		})
	}
	//视频控件中的速度
	function movetime(v){
		$('#mp4')[0].currentTime=v;
	}
	//到达时间后执行的事件
	function overtieme(s){
		if(s=='01:00'){
			$('#mp4')[0].currentTime=0;
			$('#mp4')[0].pause();
			$('.mp4play').show();
			$('#icon-play3').removeClass('icon-pause2').addClass('icon-play3');
			$('#bcon').css({'left':'0'});
			$('#bcon').prev().css({'width':0});
		}
	}
	//当点击暂停后执行的事件
	function playvideo(){
		if($('#icon-play3').hasClass('icon-pause2')){
			$('.mp4play').show();
			$('#mp4')[0].pause();
			$('#icon-play3').removeClass('icon-pause2').addClass('icon-play3');
		}else if($('#icon-play3').hasClass('icon-play3')){
			$('.mp4play').hide();
			$('#mp4')[0].play();
			$('#icon-play3').removeClass('icon-play3').addClass('icon-pause2');
		}
	}
	//视频声音控制
	function playvoice(){
		if($('#volume').hasClass('icon-volume-medium')){
			$('#mp4')[0].muted=true;
			$('#volume').removeClass('icon-volume-medium').addClass('icon-volume-mute2');
			$('#bvoice').css({'left':0});
			$('#bvoice').prev().css({'width':0});
		}else if($('#volume').hasClass('icon-volume-mute2')){
			$('#mp4')[0].muted=false;
			$('#volume').removeClass('icon-volume-mute2').addClass('icon-volume-medium');
			$('#bvoice').css({'left':50});
			$('#bvoice').prev().css({'width':50});
			$('#mp4')[0].volume=0.5;
		}
	}
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
	})/*.keydown(function(e){
		var index=0,$lis,len;
	function jsonp(url){
		var $script=$("<script></script>");
		$('head').append($script);
		$script.attr({"src":url});
	}
	function callback(json){
		$('#keyword ul').empty();
		for(var i=0,l=json.length;i<l;i++){
			for(var key in json[i]){
				if(key=='key'){
        	console.log(key+':'+json[i][key]);
					
					var $li=$('<li><span></span></li>');
					$('#keyword ul').append($li);
					$li.children().html(json[i][key]);
				}
			}
		}
	}
		//按下键盘时获取原网站的数据
		e=e||window.event;
		var code=e.keyCode||e.which;
		$lis=$('#keyword ul li');
		len=$lis.length;
		var url;
		switch(code){
			case 10:
			case 13:
				url='https://search.mi.com/search_'+$lis.eq(index).text();
				$('#keya').attr({'herf':url});
				$('#keya').attr({'target':'_blank'});
				$('#keya').click();
				$('#keyword').hide();
				break;
			case 38:
			    index--;
			    if(index==1)index=len-1;
			    //chStyle();
			    break;
			case 40:
				index++;
				if(index==len)index=0;
			//	chStyle();
				break;
			default:
				var w=this.value;
				if(w!=""){
					var url = "https://search.mi.com/search/expand?jsonpcallback=callback&keyword="+w;
					jsonp(url);
				}else{
					$('#keyword ul').empty();
				}
		}
	})*/
	
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
				jsonp(url);	
			}else{
				keyul.innerHTML='';
			}
	}
	
}

/*for(let i=0;i<len;i++){
	lis[i].onclick=function(){
		alert();
	this.style.background='#E4F2FE';
	search.value=this.innerText;
	url='https://search.mi.com/search_'+this.innerText;
	keya.href=url;
	keya.target='_blank';
	keya.click();
	keyword.style.display='none';
		}
	}*/
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

/*楼梯动画效果
 */
function Floor(div,nav){
	this.div=div;
	this.nav=nav;
	this.Uli1=nav.find('#navul1>li');
	this.Uli2=nav.find('#navul2>li');
	this.Oli=nav.find('ol>li');
	this.init();
}
Floor.prototype.init=function(){
	var that=this;
	this.arr=this.div.map(function(ind,elem){
		return $(elem).offset().top;
	})
	var len=this.arr.length;
	this.arr.push(this.div.eq(len-1).height()+this.arr[len-1]);
	var len1=this.arr.length-1;

	//回到顶部
	this.Uli1.click(function(){
		$('html,body').animate({
			'scrollTop':0
		})
	})
	//回到底部
	this.Uli2.click(function(){
		$(this).addClass('sel');
		$('html,body').animate({
			'scrollTop':that.arr[len1]
		})
		
	})
	//到各个楼层
	this.Oli.click(function(){
		var ind=$(this).index();
		$('html,body').animate({
			'scrollTop':that.arr[ind]
		})
	})
	$(window).scroll(function(){
		//隐藏区域的高度
		var st=$(window).scrollTop();
		//可视区域的高度一半
		var h=$(window).height()/2;
		if(st>h){
			that.nav.fadeIn();
		}else{that.nav.fadeOut();}
		//判断可视区域显示哪一层
		var ind=-1;
		for(var i=0;i<len1;i++){
			var min=that.arr[i];
			var max=that.arr[i+1];
			if(min<st+h && st+h<max){ind=i;}
		}
		
		that.Uli2.removeClass('sel');
		that.Oli.removeClass('sel');
		if(ind>-1){
			that.Oli.eq(ind).addClass('sel');
		}
		
	})
}
//当滚动发生变化时，按钮的样式发生变化

var f=new Floor($('.louti'),$('#daonav'));


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
