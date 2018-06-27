/*商品列表的隐藏与显示
 */
$(function(){
	var $h2=$('.con_tit h2');
	$h2.click(function(){
		if($(this).parent().next().is(':hidden')){
			$(this).parent().next().fadeIn();
			$(this).children('i').removeClass('icon-circle-up').addClass('icon-circle-down');
			$(this).children('i').css({'color':'#b0b0b0'});
		}else{
			$(this).parent().next().fadeOut();
			$(this).children('i').removeClass('icon-circle-down').addClass('icon-circle-up');
			$(this).children('i').css({'color':'#ff6700'});
		}
		return false;
	}).mousedown(function(){
		return false;
	})
})
/*商品列表通过ajax读取加载
 */
$(function(){
	//加载手机 电话卡
	$.get('date/db.json',function(str){
		var arr=str.list;
		//var tmp=document.createDocumentFragment();
		$.each(arr, function(key,val) {

			var $li=$("<li></li>");
			var $a=$("<a></a>");
			$a.attr({'href':'show.html?id='+arr[key].id});
			var $img=$("<img src=img/"+arr[key].img+" />");
			$a.append($img)
			$li.append($a);
			var $b=$("<b>"+arr[key].title+"</b>");
			$li.append($b);
			//tmp.appendChild($li[0]);
			if(arr[key].type==0)$('#listphone').append($li);
			else if(arr[key].type==1)$('#listcomputer').append($li);
			else if(arr[key].type==2)$('#listmove').append($li);
			else if(arr[key].type==3)$('#listcover').append($li);
			else if(arr[key].type==4)$('#listline').append($li);
			else if(arr[key].type==5)$('#listbags').append($li);
			else if(arr[key].type==6)$('#listlife').append($li);
		});
		//$('#listphone')[0].appendChild(tmp);
	})
})
