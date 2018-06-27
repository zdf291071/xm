//跨浏览器添加事件
function addEvent(obj,evt,fn){
	if(obj.addEventListener){
		return obj.addEventListener(evt,fn);
	}else if(obj.attachEvent){
		return obj.attachEvent('on'+evt,fn);
	}
}
//跨浏览器删除事件
function removeEvent(obj,evt,fn){
	if(obj.removeEventListener){
		return obj.removeEventListener(evt,fn);
	}else if(obj.detachEvent){
		return obj.detachEvent('on'+evt,fn);
	}
}
//跨浏览器获取目标元素
function getTarget(evt){
	if(evt.target){
		return evt.target;
	}else if(evt.srcElement){
		return evt.srcElement;
	}
}
