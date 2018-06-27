
/*
 * 传入底部模板数据
 * */
var data = { 
 list: ['<span class="style icon-hammer"></span>预约维修服务', 
 		'<span class="style icon-history"></span>7天无理由退货', 
 		'<span class="style icon-loop2"></span>15天免费换货', 
 		'<span class="style icon-gift"></span>满150元包邮', 
 		'<span class="style icon-location2"></span>520余家售后网点'],
list1:[
	{'dt':'帮助中心','dd':[{'dd1':'账户管理','dd2':'购物指南','dd3':'订单操作'}]},
	{'dt':'服务支持','dd':[{'dd1':'售后政策','dd2':'自助服务','dd3':'相关下载'}]},
	{'dt':'线下门店','dd':[{'dd1':'小米之家','dd2':'服务网点','dd3':'零售网点'}]},
	{'dt':'关于小米','dd':[{'dd1':'了解小米','dd2':'加入小米','dd3':'联系我们'}]},
	{'dt':'关注我们','dd':[{'dd1':'新浪微博','dd2':'小米部落','dd3':'官方微信'}]},
	{'dt':'特色服务','dd':[{'dd1':'F 码通道','dd2':'礼物码','dd3':'防伪查询'}]},
	],
 phone:'400-100-5678',
 time:'周一至周日 8:00-18:00',
 shou:'(仅收市话费)',
 zai:'<span class="style icon-whatsapp"></span>24小时在线客服',
 list2:['小米商城','MIUI','米聊','多看书城','小米路由器','视频电话','小米天猫店','小米淘宝直营店','小米网盟','小米移动','隐私政策','Select Region'],
 list3:['&copy;mi.com','京ICP证110507号','京ICP备10046444号','京公网安备11010802020134号 ','京网文[2014]0059-0009号'],
 list4:['img/v-logo-0.png','img/v-logo-1.png','img/v-logo-2.png','img/v-logo-3.png '],
 title:'小米官网',
 title1:'探索黑科技，小米为发烧而生',
 jubao:' 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试'
}; 
var test=template('test',data);
var test1=template('test1',data);
var test2=template('test2',data);
var navs=document.getElementsByTagName('footer')[0].getElementsByTagName('nav');
navs[0].innerHTML=test;
navs[0].innerHTML+=test1;
navs[1].innerHTML=test2;
