                                   

function updateTimer() {
  future  = Date.parse("Feb 11, 2017 11:30:00");
  now     = new Date();
  diff    = future - now;

  days  = Math.floor( diff / (1000*60*60*24) );
  hours = Math.floor( diff / (1000*60*60) );
  mins  = Math.floor( diff / (1000*60) );
  secs  = Math.floor( diff / 1000 );

  d = String(days);
  h = String(hours - days  * 24);
  m = String(mins  - hours * 60);
  s = String(secs  - mins  * 60);
if(d.length<2)
	d="0"+d;
if(h.length<2)
	h="0"+h;
if(m.length<2)
	m="0"+m;
if(s.length<2)
	s="0"+s;

    document.getElementById("ti")
    .innerHTML =
    '<span>'+d+'<div>Days</div></span>'+
    '<span>'+h+'<div>Hours</div></span>'+
    '<span>'+m+'<div>Minutes</div></span>'+
    '<span>'+s+'<div>Seconds</div></span>';
}
setInterval('updateTimer()', 1000);