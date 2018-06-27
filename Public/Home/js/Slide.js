/*导航图片的轮播
 */
function Slide(elem){
	this.elem=elem;
	var a=this.elem.children;
	this.ul=a[0];
	this.ol=a[1];
	this.ulli=a[0].children;
	this.olli=a[1].children;
	this.lBtn=a[2];
	this.rBtn=a[3];
	this.now=0;
	var that=this;
	
	this.run = function(){
		Array.from(that.olli).forEach(function(li,index){
			li.onclick=function(){
				that.now=index;
				that.tab();
			}
		})
		
		that.timer=setInterval(that.next,3000);
		that.elem.onmouseover = that.over;
		that.elem.onmouseout = that.out;
		that.lBtn.onmouseover = that.overl;
		that.lBtn.onmouseout = that.outl;
		that.rBtn.onmouseover = that.overr;
		that.rBtn.onmouseout = that.outr;
		
		that.lBtn.onclick = function(){
			that.now--;
			if(that.now==-1){
				that.now=6;
			}
			that.tab();
		}
		
		that.rBtn.onclick = function(){
			that.now++;
			if(that.now==7){
				that.now=0;
			}
			that.tab();
		}
	}
	this.tab = function(){
		Array.from(that.olli).forEach(function(li,index){
			li.className='';
			startMove(that.ulli[index],{'opacity':0},function(){
				that.olli[index].style.disyplay='none';
			});
		})
		that.olli[that.now].className='selected';
		that.ulli[that.now].style.display='block';
		startMove(that.ulli[that.now],{'opacity':100});
	}
	this.next = function(){
		that.now++;
		if(that.now==7){
			that.now=0;
		}
		that.tab();
	}
	this.over = function(){clearInterval(that.timer);}
	this.out = function(){that.timer=setInterval(that.next,3000);}
	this.overl = function(){this.style.backgroundPosition='0 50%';}
	this.outl = function(){this.style.backgroundPosition='-84px 50%';}
	this.overr = function(){this.style.backgroundPosition='-42px 50%';}
	this.outr = function(){this.style.backgroundPosition='-125px 50%';}
	
	this.tab();
	this.run();
}
