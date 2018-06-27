/*登录的选项卡切换
 */
$(function(){
	$a=$('.nav a');
	$tab=$('.wrap .tab');

	$a.click(function(){
		var ind=$(this).index();
		$(this).addClass('check').siblings().removeClass('check');
		if(ind==0){
			$('.tab2').removeClass('select');
			$('.tab1').addClass('select');
		}else{
			$('.tab1').removeClass('select');
			$('.tab2').addClass('select');
		}
	})
})
/*验证码的验证
 */
var login=document.getElementById("login");
var uname=document.getElementById("uname");
var upass=document.getElementById("upass");
var uyan=document.getElementById("uyan");
var yan=document.getElementById("yan");
var suc=document.getElementById("suc");
var checkb=document.getElementById("checkb");
var showerr=document.getElementById("showerr");
var st=suc.getElementsByTagName('span')[0];
var show=document.getElementsByClassName('show')[0];
var whole=document.getElementsByClassName('whole')[0];
//随机颜色
function bg(){
	var r=Math.round(Math.random()*256);
	var g=Math.round(Math.random()*256);
	var b=Math.round(Math.random()*256);
	return "rgb("+r+','+g+','+b+")"
}
//验证码的产生
function csyzm(){
	var yzm='abcdefghijkmnpqrstuvwxyz23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
	var l=yzm.length;
	var i1=parseInt(Math.random()*l);
	var i2=parseInt(Math.random()*l);
	var i3=parseInt(Math.random()*l);
	var i4=parseInt(Math.random()*l);
	return yzm[i1]+yzm[i2]+yzm[i3]+yzm[i4];
}
yan.innerText=csyzm();
yan.style.background=bg()
yan.onclick=function(){
	yan.innerText=csyzm();
	yan.style.background=bg();
	return false;
}
yan.onmousedown=function(){
	return false;
}
/*表单的验证
 */
var obj=getCookie('obj');
//console.log(obj.user,obj.pass);
login.onclick=function(){
	if(obj.user && obj.pass){
		if(uname.value=="" || upass.value=="" || uyan.value==""){
			if(uyan.value==""){
				uyan.style.borderColor='#f56600';
				show.style.display='block';
				showerr.innerHTML='请输入验证码';
			}else{
				uyan.style.borderColor='';
			}
			if(upass.value==""){
				upass.style.borderColor='#f56600';
				uyan.style.borderColor='';
				show.style.display='block';
				showerr.innerHTML='请输入密码';
			}else{
				upass.style.borderColor='';
			}
			if(uname.value==""){
				uname.style.borderColor='#f56600';
				upass.style.borderColor='';
				uyan.style.borderColor='';
				show.style.display='block';
				showerr.innerHTML='请输入帐号';
			}else{
				uname.style.borderColor='';
			}
		}else{
			if(uname.value == obj.user && upass.value==obj.pass && uyan.value.toLocaleLowerCase() == yan.innerText.toLocaleLowerCase()){
				obj.user=obj.user;
				obj.pass=obj.pass;
				show.style.display='block';
				uname.style.borderColor='';
				showerr.innerHTML='验证成功';
				if(checkb.checked){
					setCookie('obj',obj,7);
				}else{
					setCookie('obj',obj);
				}
				whole.style.display='none';
				suc.style.display='block';
				var time=parseInt(st.innerHTML);
				var timer=setInterval(function(){
					time--;
					st.innerHTML=time;
					if(time==0){
						clearInterval(timer);
						window.location.href = "index.html";
					}
				},1000)
			}else if(uyan.value.toLocaleLowerCase() != yan.innerText.toLocaleLowerCase()){
				uname.style.borderColor='';
				upass.style.borderColor='';
				uyan.style.borderColor='#f56600';
				show.style.display='block';
				showerr.innerHTML='验证码不正确';
			}else if(uname.value != obj.user || upass.value !=obj.pass){
				uyan.style.borderColor='';
				uname.style.borderColor='#f56600';
				show.style.display='block';
				showerr.innerHTML='用户名或者密码错误';
			}
		}
	}else{
		show.style.display='block';
		showerr.innerHTML='账号不存在,请注册';
	}
	
	
}
