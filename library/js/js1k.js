
var js1k = function() {
	var div = document.getElementById('js1k-demo');
	var c = document.getElementById('canvas');
	var b = document.body;
	var a = c.getContext('2d');
	
	d=document;
	
	// context abbreviation loop
	for(var numz in a){
		a[numz[0]+(numz[6]||numz[2])]=a[numz];
	}
	
	// commonly used integers
	x=150;
	y=120;
	
	c.width=c.height=x*2;
	k='background:#';
	z=c.style;
	z.cssText=k+"416012";
	
	// pen color array
	A=['000','0e943a','C0C0C0','C5B358'];
	co = '#'+A[0];
	
	//create color squares
	for(i=0;i<4;i++){
	  sqr(A[i]);
	}
	// not overlapping circle
	oLp = 0;
	// not drawing
	drw = 0;
	
	onmousemove=function(e){
	
		// get mouse/canvas properties
		gTs(e,c);
		
		// mouse intersects circle
		if(dI(eX-oL, eY-oT)){
			
			z.cursor='crosshair';
			oLp = 1;
			// if the mouse is down, leave a mark
			if (drw == 1) {
			with(a){
	                ln(eX-oL, eY-oT); // lineTo
	                strokeStyle = co;
	                sr(); // stroke
	            }
            }
		}
		// mouse off circle
		else {
			z.cursor='default';
			oLp = 0;
			drw = 0;
		}
	};
    onmouseup=function(){ drw = 0};
    onmousedown=function(e){
    	// if overlapping
		if(oLp) {
			gTs(e,e.target)
			drw = 1;
			with(a){
				ba(); // beginPath
				lineWidth=3;
				mv(eX-oL, eY-oT); // moveTo
			}
        }
	}
	// get target values
	function gTs(e,t){
		eX=e.pageX;
		eY=e.pageY;
		oL=t.offsetLeft;
		oT=t.offsetTop;
	}
	// create square: k='background:#', v=color from array
	function sqr(v){
		n=d.createElement('a');
		n.id=v;
		n.style.cssText=k + v +';border:1px solid #fff;cursor:pointer;height:15px;float:left;margin:0 8px 0 0;width:15px';
		n.onclick=function(e){co='#'+e.target.id};
		div.appendChild(n);
	}
	// does intersect: a=pageX, b=pageY, x=circleX/circleY, y=circleRadius
	function dI(a,b) {
	    f = a-x;
	    g = b-x;
	    return f*f+g*g <= y*y;
	}
	// create sphere
	with(a){
		g=cR(x,y,0,x,y,200); // createRadialGradient
		g.addColorStop(0,'#f00');
		g.addColorStop(1,'#600');
		ba(); // beginPath
		fillStyle=g;
		ac(x, x, y, 0, Math.PI*2,false); // arc
		ca(); // closePath
		fl(); // fill
	}
}();