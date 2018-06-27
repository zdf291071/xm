/*根据url中的id参数来显示不同的商品情况
 */
$(function(){
	//获取url中的参数
	function query(_name){
		var str=location.search;
		if(str != ""){
			str=str.substr(1);
			var arr=str.split("&");
			for(var i=0,l=arr.length;i<l;i++){
				var col=arr[i].split('=');
				if(col[0]==_name){
					return col[1];
				}
			}
			return "";
		}else{
			return "";
		}
	}
	//根据id,获取对象(用$.get方式获取不到返回值)
	//异步方式，还不等ajax赋完值，函数就return了。 
	//此种为同步async:false,ajax执行不完不会return 
	function getList(id){
		var obj2;
		$.ajax({
			type:"get",
			url:"date/db.json",
			async:false,
			success:function(str){
				var arr=str.list;
				for(var i=0,l=arr.length;i<l;i++){
					var obj1=arr[i];
					if(obj1.id==id){
						obj2=obj1;
					}
				}
			}
		});
		return obj2;
	}
	var id1=query('id');
	var obj3=getList(id1);
	//根据传值过来的id来显示对应的fen 和 title
	$('#fen').html(obj3.fen);
	$('#fen1').html(obj3.fen);
	$('#title').html(obj3.title);
	$('#title1').html(obj3.title);
	$('.shop_right h1:nth-child(1)').html(obj3.title);
	$('.shop_right p:nth-of-type(1)').html(obj3.content);
	$('.shop_right p:nth-of-type(3)').html("总 价: "+obj3.price+" 元");
	
	
/*商品添加到购物车效果
 */
		$('#add').click(function(){
			var o=getCookie('g'+obj3.id,obj3);
			if(o){obj3.num=Number(o.num)+1;}
			else{obj3.num=1;}
			setCookie('g'+obj3.id,obj3,10);
			var $tmpImg=$('<img />');
			 $tmpImg.attr({'src':'img/'+obj3.img});
			 $tmpImg.addClass('tmpImg');
			 $tmpImg.css({
			 	'left':$('#small').offset().left,
			 	'top':$('#small').offset().top
			 })
			 $('body').append($tmpImg);
			 $tmpImg.animate({
			 	'left':$('#mycar').offset().left,
			 	'top':$('#mycar').offset().top,
			 	'width':80,
			 	'height':35
			 },function(){
			 	 $tmpImg.remove();
			 	 showNum();
			 })
		 
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
	/*商品放大镜效果加滚轮缩放效果
	 */
	function Scale(){
		this.init();
	}
	Scale.prototype={
		init:function(){
			$('#small').attr({'src':'img/'+obj3.img});
			$('#big').attr({'src':'img/'+obj3.img});
			$('#gimg').attr({'src':'img/'+obj3.img});
			$('.before').bind('mouseenter',this.enter.bind(this));
			$('.before').bind('mousemove',this.move.bind(this));
			$('.before').bind('mouseleave',this.leave.bind(this));
			$('.before').bind('mousewheel',this.wheel.bind(this));
			$('.then').bind('mouseleave',this.leave.bind(this));
			$('.then').bind('mouseenter',this.enter.bind(this));
		},
		move:function(e){
			e=e||window.event;
			var x=e.offsetX-$('#glass').outerWidth(true)/2;
			var y=e.offsetY-$('#glass').outerHeight(true)/2;
			if(x<0)x=0;
			if(y<0)y=0;
			if(x+$('#glass').width()>$('.before').width())x=$('.before').width()-$('#glass').width();
			if(y+$('#glass').height()>$('.before').height())y=$('.before').height()-$('#glass').height();
			$('#glass').css({'left':x,'top':y});
			$('#gimg').css({'left':-x,'top':-y});
			$('#big').css({'left':-x*3,'top':-y*3});
		},
		enter:function(){
			this.min=450/3;
			this.max=450*3;
			$('#glass').css({
				'width':150,
				'height':150
			});
			$('.then').stop().animate({
				'left':460,
				'top':0,
				'width':450,
				'height':450,
				'borderWidth':1
			})
			$('#glass').stop().fadeIn();
			$('#mask').stop().fadeIn();
		},
		leave:function(){
			
			$('.then').stop().animate({
				'left':450/2,
				'top':450/2,
				'width':0,
				'height':0,
				'borderWidth':0

			})
			$('#glass').stop().fadeOut();
			$('#mask').stop().fadeOut();
		},
		wheel:function(e,delta){
			if(delta>0){
				if(this.min<=40){
					this.min=40;
					return;
				}
				this.min-=6;
				this.max+=18;
				$('#glass').css({
					'width':this.min,
					'height':this.min
				});
				$('#big').css({
					'width':this.max,
					'height':this.max
				});
			}else{
				if(this.min>=450){
					this.min=450;
					return;
				}
				this.min+=6;
				this.max-=18;
				$('#glass').css({
					'width':this.min,
					'height':this.min
				});
				$('#big').css({
					'width':this.max,
					'height':this.max
				});
		}
		return false;
	}
}
	new Scale();
	
	
	/*小图的加载与切换
	 */
	var arr1=obj3.imgs;
	if(arr1 != ""){
		var l=arr1.length;
		$('.spec-list').show();
		var tmp=document.createDocumentFragment();
		$.each(arr1,function(ind){
			var $li=$("<li></li>");
			var $img=$("<img src=img/"+arr1[ind]+" />");
			$li.append($img);
			tmp.appendChild($li[0]);
		})
		var wx=$li.outerWidth(true);
		$('.spec-items ul').css({'width':l*wx});
		$('.spec-items ul')[0].appendChild(tmp);
		var $Uli=$('.spec-items ul li');
		//放大镜中的图片切换
		$Uli.click(function(){
			$('#small').attr({'src':$(this).children('img').attr('src')});
			$('#big').attr({'src':$(this).children('img').attr('src')});
			$('#gimg').attr({'src':$(this).children('img').attr('src')});
		}).mouseenter(function(){
			$(this).children('img').css({'border':'2px solid #ff6700'});
			$(this).siblings().children('img').css({'border':'2px solid #fff'});
			$('#small').attr({'src':$(this).children('img').attr('src')});
			$('#big').attr({'src':$(this).children('img').attr('src')});
			$('#gimg').attr({'src':$(this).children('img').attr('src')});
		})
		//左右按钮的切换
		if(l>=6){
			$('#forward').click(function(){
				$('#specUl').stop().animate({'left':-wx});
				$(this).children('i').css({'color':'#666'})
				if(parseInt($('#specUl').css('left'))==-84){
					$('#forward').unbind('mouseenter mouseleave');	
				}else{
					$('#forward').bind('mouseenter',function(){
						$(this).children('i').css({'color':'#ff6700'})
					})
					$('#forward').bind('mouseleave',function(){
						$(this).children('i').css({'color':'#666'})
					})
				}
			})
			$('#forward,#backward').bind('mouseenter',function(){
				$(this).children('i').css({'color':'#ff6700'})
			})
			$('#forward,#backward').bind('mouseleave',function(){
				$(this).children('i').css({'color':'#666'})
			})
			$('#backward').click(function(){
				$('#specUl').stop().animate({'left':0});
				console.log($('#specUl').css('left'));
				$(this).children('i').css({'color':'#666'});
				if(parseInt($('#specUl').css('left'))==0){
					$('#backward').unbind('mouseenter mouseleave');	
				}else{
					$('#backward').bind('mouseenter',function(){
						$(this).children('i').css({'color':'#ff6700'})
					})
					$('#backward').bind('mouseleave',function(){
						$(this).children('i').css({'color':'#666'})
					})
				}
			})
		}
	}
	
$(window).scroll(function(){
  if( $(this).scrollTop() >=200){
  	$('.piao').css({
  		'margin-top':0
  	})
  }else{
  	$('.piao').css({
  		'margin-top':-60
  	})
  }
});
/*视频上文字的显示
 */
$('.preload').mouseenter(function(){
	$(this).children('.name-box').stop().animate({
		'bottom':280
	});
	$(this).children('.tit-box').stop().slideDown();
})
})

/*城市选择的三级联动
 */
var s1 = document.getElementById("s1");
var s2 = document.getElementById("s2");
var s3 = document.getElementById("s3");

// 省
var l=citys.length;
for( var i in citys ){
	s1.options.add( new Option(citys[i].name) );
}
s1.onchange = sheng;
sheng();	
function sheng(){
	var str = s1.value;	// 省
	s2.length = 0;
	for(var i=0;i<l;i++){
		if(str==citys[i].name){
			var citys1=citys[i].city;
			for(var j=0;j<citys1.length;j++){
				s2.options.add( new Option(citys1[j].name) );
			}
		}
	}
	shi();	// 把该市所对应的区，显示在s3中
}

s2.onchange = shi;
function shi(){
	var str1 = s1.value;	// 省
	var str2 = s2.value;	// 市
	s3.length = 0;
	for(var i=0;i<l;i++){
		if(str1==citys[i].name){
			var citys1=citys[i].city;
			for(var j=0;j<citys1.length;j++){
				if(str2==citys1[j].name){	
					for(var m=0;m<citys1[j].area.length;m++){
						s3.options.add( new Option(citys1[j].area[m]) );
					}
				}
			}
		}
	}
}

