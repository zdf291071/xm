// 模块配置  
require.config({
	shim : {
		"startMove" : {
			exports : "startMove"	
		},
		"Slide" : {
			exports : "Slide"	
		}
	}
});

// 模块使用  导航图片轮播
require(["startMove", "Slide"], function(startMove, Slide){
	new Slide(imgright);
});
