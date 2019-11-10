<style>

@import url('https://fonts.googleapis.com/css?family=Roboto+Mono');

html, body {
  height: 100%;
  font-family: Roboto Mono;
  background-color: hsl(243,12%,29%);
}
</style>
<svg viewBox="0 0 500 500" width=100% height=100%>
    <defs>
    </defs>
    <g id="ring2">
      <g id="ring2-1">
        <circle class="c3" cx="50%" cy="50%" r=150
                fill="none"
                stroke="hsl(218,38%,76%)"
                stroke-width=15
                stroke-dasharray="1 34"></circle>
        <circle class="c3" cx="50%" cy="50%" r=162
                fill="none"
                stroke="hsl(218,38%,76%)"
                stroke-width=1></circle>
      </g>
      <g transform="translate(80,80)">
        <text fill="hsl(218,38%,56%)"
              font-size=14>Time</text>
        <text id="time-text" y=13
              fill="hsl(218,38%,76%)"
              font-size=11></text>
        <circle cx="-20" fill="none" stroke="hsla(218,38%,76%,0.3)"
                stroke-width=3
                r=12></circle>
        <circle class="c4" cx="-20"
                fill="none" stroke="hsl(218,38%,76%)"
                stroke-width=3
                r=12></circle>
      </g>
      <g transform="translate(80,115)">
        <text fill="hsl(218,38%,56%)"
              font-size=14>Energy</text>
        <text id="energy-text" y=13
              fill="hsl(218,38%,76%)"
              font-size=11></text>
        <circle cx="-20" fill="none" stroke="hsla(218,38%,76%,0.3)"
                stroke-width=3
                r=12></circle>
        <circle class="c5" cx="-20"
                fill="none" stroke="hsl(218,38%,76%)"
                stroke-width=3
                r=12></circle>
      </g>
      <g transform="translate(420,80)">
        <text fill="hsl(218,38%,56%)"
              font-size=14 text-anchor="end">Bandwidth</text>
        <text id="bandwidth-text" y=13
              fill="hsl(218,38%,76%)"
              font-size=11 text-anchor="end"></text>
        <circle cx="20" fill="none" stroke="hsla(218,38%,76%,0.3)"
                stroke-width=3
                r=12></circle>
        <circle class="c6" cx="20"
                fill="none" stroke="hsl(218,38%,76%)"
                stroke-width=3
                r=12></circle>
      </g>
      <g transform="translate(420,115)">
        <text fill="hsl(218,38%,56%)"
              font-size=14 text-anchor="end">Disk</text>
        <text id="disk-text" y=13
              fill="hsl(218,38%,76%)"
              font-size=11 text-anchor="end"></text>
        <circle cx="20" fill="none" stroke="hsla(218,38%,76%,0.3)"
                stroke-width=3
                r=12></circle>
        <circle class="c7" cx="20"
                fill="none" stroke="hsl(218,38%,76%)"
                stroke-width=3
                r=12></circle>
      </g>
      <text id="move-text"
            x="50%" y=460 fill="hsl(218,38%,76%)"
            text-anchor="middle"
            font-size=24>Basic Info Of Your System</text>
    </g>
    <g id="ring3">
      <g id="ring3-1">
        <circle class="c1" cx="50%" cy="50%" r=75
                fill="none"
                stroke="hsl(8,34%,45%)"
                stroke-width=4></circle>
        <circle class="c2" cx="50%" cy="50%" r=75
                fill="none"
                stroke="hsl(8,34%,45%)"
                stroke-width=4></circle>
        <circle class="c3" cx="50%" cy="50%" r=73
                fill="none"
                stroke="hsl(8,34%,45%)"
                stroke-width=2></circle>
      </g>
      <circle class="c4" cx="50%" cy="50%" r=60
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=2></circle>
    </g>
    <g id="ring4">
      <circle class="c1" cx="50%" cy="50%" r=40
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=1></circle>
      <circle class="c2" cx="50%" cy="50%" r=35
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=1></circle>
      <circle class="c3" cx="50%" cy="50%" r=30
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=1></circle>
      <circle class="c4" cx="50%" cy="50%" r=18
              fill="hsl(218,38%,76%)"></circle>
    </g>
    <g id="ring1">
      <circle class="c1" cx="50%" cy="50%" r=125
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=6></circle>
      <circle class="c2" cx="50%" cy="50%" r=125
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=6></circle>
      <circle class="c3" cx="50%" cy="50%" r=122
              fill="none"
              stroke="hsl(218,38%,76%)"
              stroke-width=2></circle>
    </g>
  </svg>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <script>var _gsScope="undefined"!=typeof module&&module.exports&&"undefined"!=typeof global?global:this||window;(_gsScope._gsQueue||(_gsScope._gsQueue=[])).push(function(){"use strict";function t(t,e,i,r){return i=parseFloat(i)-parseFloat(t),r=parseFloat(r)-parseFloat(e),Math.sqrt(i*i+r*r)}function e(t){return"string"!=typeof t&&t.nodeType||(t=_gsScope.TweenLite.selector(t),t.length&&(t=t[0])),t}function i(t,e,i){var r,s,n=t.indexOf(" ");return-1===n?(r=void 0!==i?i+"":t,s=t):(r=t.substr(0,n),s=t.substr(n+1)),r=-1!==r.indexOf("%")?parseFloat(r)/100*e:parseFloat(r),s=-1!==s.indexOf("%")?parseFloat(s)/100*e:parseFloat(s),r>s?[s,r]:[r,s]}function r(i){if(!i)return 0;i=e(i);var r,s,n,a,o,l,h,u,f=i.tagName.toLowerCase();if("path"===f)o=i.style.strokeDasharray,i.style.strokeDasharray="none",r=i.getTotalLength()||0,i.style.strokeDasharray=o;else if("rect"===f)s=i.getBBox(),r=2*(s.width+s.height);else if("circle"===f)r=2*Math.PI*parseFloat(i.getAttribute("r"));else if("line"===f)r=t(i.getAttribute("x1"),i.getAttribute("y1"),i.getAttribute("x2"),i.getAttribute("y2"));else if("polyline"===f||"polygon"===f)for(n=i.getAttribute("points").split(" "),r=0,o=n[0].split(","),"polygon"===f&&(n.push(n[0]),-1===n[0].indexOf(",")&&n.push(n[1])),l=1;n.length>l;l++)a=n[l].split(","),1===a.length&&(a[1]=n[l++]),2===a.length&&(r+=t(o[0],o[1],a[0],a[1])||0,o=a);else"ellipse"===f&&(h=parseFloat(i.getAttribute("rx")),u=parseFloat(i.getAttribute("ry")),r=Math.PI*(3*(h+u)-Math.sqrt((3*h+u)*(h+3*u))));return r||0}function s(t,i){if(!t)return[0,0];t=e(t),i=i||r(t)+1;var s=a(t),n=s.strokeDasharray||"",o=parseFloat(s.strokeDashoffset),l=n.indexOf(",");return 0>l&&(l=n.indexOf(" ")),n=0>l?i:parseFloat(n.substr(0,l))||1e-5,n>i&&(n=i),[Math.max(0,-o),Math.max(0,n-o)]}var n,a=document.defaultView?document.defaultView.getComputedStyle:function(){};n=_gsScope._gsDefine.plugin({propName:"drawSVG",API:2,version:"0.0.6",global:!0,overwriteProps:["drawSVG"],init:function(t,e){if(!t.getBBox)return!1;var n,a,o,l=r(t)+1;return this._style=t.style,e===!0||"true"===e?e="0 100%":e?-1===(e+"").indexOf(" ")&&(e="0 "+e):e="0 0",n=s(t,l),a=i(e,l,n[0]),this._length=l+10,0===n[0]&&0===a[0]?(o=Math.max(1e-5,a[1]-l),this._dash=l+o,this._offset=l-n[1]+o,this._addTween(this,"_offset",this._offset,l-a[1]+o,"drawSVG")):(this._dash=n[1]-n[0]||1e-6,this._offset=-n[0],this._addTween(this,"_dash",this._dash,a[1]-a[0]||1e-5,"drawSVG"),this._addTween(this,"_offset",this._offset,-a[0],"drawSVG")),!0},set:function(t){this._firstPT&&(this._super.setRatio.call(this,t),this._style.strokeDashoffset=this._offset,this._style.strokeDasharray=1===t||0===t?.001>this._offset&&10>=this._length-this._dash?"none":this._offset===this._dash?"0px, 999999px":this._dash+"px,"+this._length+"px":this._dash+"px,"+this._length+"px")}}),n.getLength=r,n.getPosition=s}),_gsScope._gsDefine&&_gsScope._gsQueue.pop()();
</script>


  <script>
  
  TweenMax.set("#ring1, #ring2,\
    #ring2 .c4, #ring2 .c5, #ring2 .c6, #ring2 .c7,\
    #ring2-1, #ring3,\
    #ring3-1, #ring3 .c4,\
    #ring4, #ring4 .c1, #ring4 .c2,\
    #ring4 .c3, #ring4 .c4", { transformOrigin: "50% 50%" })

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

TweenMax.set("#ring1 .c1", {drawSVG: "0% 25%"})
TweenMax.set("#ring1 .c2", {drawSVG: "50% 75%"})

TweenMax.set("#ring2 .c4", {drawSVG: "0% 0%"})
TweenMax.set("#ring2 .c5", {drawSVG: "0% 0%"})
TweenMax.set("#ring2 .c6", {drawSVG: "0% 0%"})
TweenMax.set("#ring2 .c7", {drawSVG: "0% 0%"})

TweenMax.set("#ring3 .c1", {drawSVG: "0% 25%"})
TweenMax.set("#ring3 .c2", {drawSVG: "50% 75%"})
TweenMax.set("#ring3 .c4", {drawSVG: "60%"})

TweenMax.set("#ring4 .c1", {drawSVG: "60%", rotation: 120})
TweenMax.set("#ring4 .c2", {drawSVG: "60%", rotation: 40})
TweenMax.set("#ring4 .c3", {drawSVG: "60%", rotation: 180})

var u = 0.75

TweenMax.to("#ring1", 60*u, {rotation: -360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring2-1", 120*u, {rotation: 360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring2 .c4", 10*u, {rotation: 360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring2 .c5", 10*u, {rotation: 360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring2 .c6", 10*u, {rotation: 360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring2 .c7", 10*u, {rotation: 360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring3-1", 30*u, {rotation: 360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring3 .c4", 10*u, {rotation: -360, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring4 .c1", 5*u, {rotation: 360 + 120, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring4 .c2", 10*u, {rotation: -360 + 40, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring4 .c3", 2*u, {rotation: 360 + 180, repeat: -1, ease: Linear.easeNone})
TweenMax.to("#ring4 .c4", 2*u, {scale: 1.15, yoyo: true, repeat: -1, ease: Power2.easeInOut})

var timeout
document.body.addEventListener("mousemove", move)
document.body.addEventListener("touchmove", move)

function move(e) {
  e.preventDefault()
  clearTimeout(timeout)
  TweenMax.to("#move-text", 1, { opacity: 0 })
  var px = e.clientX
  var py = e.clientY
  if (e.touches) {
    px = e.touches[0].clientX
    py = e.touches[0].clientY
  }
  var w = window.innerWidth / 2
  var h = window.innerHeight / 2
  var nx = (px - w) / w
  var ny = (py - h) / h

  var tx = nx * 150
  var ty = ny * 60

  animCircles(tx, ty)  
  timeout = setTimeout(function() {
    animCircles(0,0)
  }, 2000)
}

function animCircles(tx, ty) {
  var tl = new TimelineMax()
  var rf = [1,0.5,0.25,0.125]
  for (var i = 1; i < 5; i++) {
    tl.to("#ring" + i, 2.5, {x: tx * rf[i], y: ty * rf[i - 1]}, "a")
  }
}

var diskTotal = 423
var diskMax = 2048
var energyMax = 50
var bandwidthMax = 32
var timeMax = 2400

function updateData() {
    var date = new Date();
    var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
    var am_pm = date.getHours() >= 12 ? "PM" : "AM";
    hours = hours < 10 ? "0" + hours : hours;
    var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
    
    time = hours + ":" + minutes +  " " + am_pm;

  var timeValue = pad(date.getHours() * 100 + date.getMinutes(),4)
  var tp = timeValue/timeMax*100
   document.getElementById("time-text").textContent = time 
  TweenMax.to("#ring2 .c4", 0.5, { drawSVG: "0% "+ tp +"%" })
  
  var energy = Math.floor(Math.random()*30 + 10)
  var ep = energy/energyMax*100
  document.getElementById("energy-text").textContent = energy + "W"
  TweenMax.to("#ring2 .c5", 0.5, { drawSVG: "0% "+ ep +"%" })
  
  var bandwidth = Math.floor(Math.random()*20 + 5)
  var dp = bandwidth/bandwidthMax*100
  document.getElementById("bandwidth-text").textContent = bandwidth + "Mbps"
  TweenMax.to("#ring2 .c6", 0.5, { drawSVG: "0% "+ dp +"%" })
  
  diskTotal = Math.floor(diskTotal*10 + 1) / 10
  diskTotal = diskTotal > diskMax ? 423 : diskTotal
  var dip = diskTotal/diskMax*100
  document.getElementById("disk-text").textContent = diskTotal + "GB"
  TweenMax.to("#ring2 .c7", 0.5, { drawSVG: "0% "+ dip +"%" })
  
  setTimeout(updateData, 2000)
}
updateData()
  </script>