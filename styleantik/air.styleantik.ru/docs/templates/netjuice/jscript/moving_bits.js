// Under Water Mouse - Kurt Grigg
// http://www.btinternet.com/~kurt.grigg/javascript
//
// Reworked by AriadneCMS
// http://www.ariadnecms.it - redazione@ariadnecms.it

// Detect browser type
isN4 = (document.layers);
isN6 = (document.getElementById&&!document.all);
isIE = (document.all);
isO6 = (navigator.appName.indexOf("Opera") != -1)?true:false;

// Load bubble image
img0 = new Image();
img0.src = "templates/netjuice/images/dots.png";

// How many bubbles? 
num = (isN6)?10:15;

// Define starting coordinates for bubbles (the point from where they appear)
// Bubbles appear from bottom, but since height of browser window is variable,
// we need to detect it at runtime; x coordinate is negative
myWindowWidth=(isIE)?window.document.body.clientWidth:window.innerWidth;
x = myWindowWidth-50;
y = -100;

// Ok, now we want to give a "follow the mouse" effect, so we associate to
// the "mouse moved" event, an handler to get the new pointer position. We
// need to use two methods: one for IE and one for other browsers
if (isN4 || isN6) {
  window.captureEvents(Event.MOUSEMOVE);
  function mousePositionN4(e) {

    // Windows width could have been changed in the meanwhile
    myWindowHeight = window.innerHeight;

    // Don't get to closer to the scrollbar :-)
    y = Math.max(150, Math.min(e.pageY-4, myWindowHeight-150));
	
  } 

  if (isN4) {
    window.onMouseMove = mousePositionN4;
  }
  else {
    document.onmousemove = mousePositionN4;
  }
}

if (isIE || isO6) {
  function mousePositionIE() {
    myWindowHeight = window.document.body.clientHeight;
    y = Math.max(150, Math.min(event.clientY-4, myWindowHeight-150));
  } 

  document.onmousemove = mousePositionIE;
}

// Declare variables for moving the bubbles
xp = new Array();
yp = new Array();
sp = new Array();
rt = new Array();
gr = new Array();
s1 = new Array();
s2 = new Array();
nz = new Array();

// Initialize variables for each bubble
for (i=0; i < num; i++){                                                                
  yp[i]=Math.random()*myWindowWidth-y;
  xp[i]=x;
  sp[i]=6+Math.random()*3;
  s1[i]=0;
  s2[i]=Math.random()*0.1+0.05;
  gr[i]=24;
  nz[i]=Math.random()*15+5;
  rt[i]=Math.random()*0.5+0.1;
}

// Add bubbles to the document
if (isN4) {
  for (i=0; i < num; i++){
    document.write('<layer name="bub'+i+'" left="100" top="100">');
    document.write('<img src="/templates/netjuice/images/dots.png" width="'+nz[i]+'" height="'+nz[i]+'"></layer>');
  }
}

if (isN6 || isO6) {
  for (i=0; i < num; i++){
    document.write('<div id="bub'+i+'" style="position:absolute;top:-50px;left:-50px;z-index:15;width:20px;">');
    document.write('<img src="'+img0.src+'" width="'+nz[i]+'" height="'+nz[i]+'"></div>');
  }
}

if (isIE) {
  document.write('<div style="position:absolute;top:0px;left:0px;z-index:15;">');
    for (i=0; i < num; i++){
      document.write('<img id="bub'+i+'" src="'+img0.src+'" style="position:absolute;top:-50px;left:0px;width:20px;">');
    }
  document.write('</div>');
}

// This is the function which actually moves the bubbles
function MouseBytes() {

  // Calculate the new position
  x = ((isIE)?window.document.body.clientWidth:window.innerWidth)-50;

  for (i=0; i < num; i++){
    sy = 5*Math.cos(s1[i]);
	sx = sp[i];
    xp[i] += sx;
    yp[i] += sy;

    if (xp[i] > x-20) {
      yp[i]= 100;
      xp[i]= -40;
      sp[i]= 6+Math.random()*3;
      gr[i]= 24;
      nz[i]= Math.random()*15+5;
    }

    if (isN4) {
     document.layers["bub"+i].left = xp[i];
     document.layers["bub"+i].top = yp[i];
    }

    if (isN6 || isO6 || isIE) {
      document.getElementById("bub"+i).style.left = (xp[i])+"px";
      document.getElementById("bub"+i).style.top = (yp[i])+"px";
      document.getElementById("bub"+i).style.width = gr[i];
    }

    gr[i]+=rt[i]; 
    s1[i]+=s2[i];
    if (gr[i] > 60) gr[i]=15;
  }

  setTimeout('MouseBytes()', 50);
}

MouseBytes();