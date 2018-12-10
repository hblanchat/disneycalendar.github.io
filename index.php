<!doctype html>
<html>
<head><script data-cfasync='false' data-pagespeed-no-defer>var __ez=__ez||{};__ez.evt={};__ez.ck={};__ez.dot={};__ez.template={};__ez.template.isOrig=true;__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.ck.get=function(e,n){null!==n&&(e=e+"_"+n);for(var o=e+"=",t=decodeURIComponent(document.cookie).split(";"),i=0;i<t.length;i++){for(var c=t[i];" "===c.charAt(0);)c=c.substring(1);if(0===c.indexOf(o))return c.substring(o.length,c.length)}return""},__ez.ck.setByCat=function(e,n){if("undefined"!=typeof cmpIsOn){if(null!=n){var o=__ez.ck.get("ezCMPCookieConsent",null);-1!==(o=o.substring(1,o.length)).indexOf(n+"=1")?document.cookie=e:""===o&&"undefined"!=typeof cmpCookies&&(void 0===cmpCookies[n]&&(cmpCookies[n]=[]),cmpCookies[n].push(e))}}else document.cookie=e};__ez.queue=function(){var e=0,i=0,t=[],n=[],r=[],o=!0,s={func:function(e,i,n,r,o,s,a){var l=this;this.name=e,this.funcName=i,this.parameters=null===n?null:n instanceof Array?n:[n],this.isBlock=r,this.blockedBy=o,this.deleteWhenComplete=s,this.isError=!1,this.isComplete=!1,this.isInitialized=!1,this.proceedIfError=a,this.process=function(){c("... func = "+e),l.isInitialized=!0,l.isComplete=!0;var i=l.funcName.split(".");i.length>3||(3===i.length?window[i[0]][i[1]][i[2]].apply(null,this.parameters):2===i.length?window[i[0]][i[1]].apply(null,this.parameters):window[l.funcName].apply(null,this.parameters)),!0===l.deleteWhenComplete&&delete t[e],!0===l.isBlock&&(c("----- F'D: "+l.name),d())}},file:function(e,i,t,n,r,o,s){var a=this;this.name=e,this.path=i,this.async=r,this.defer=o,this.isBlock=t,this.blockedBy=n,this.isInitialized=!1,this.isError=!1,this.isComplete=!1,this.proceedIfError=s,this.process=function(){a.isInitialized=!0,c("... file = "+e);var t=document.createElement("script");t.src=i,!0===r?t.async=!0:!0===o&&(t.defer=!0),t.onerror=function(){c("----- ERR'D: "+a.name),a.isError=!0,!0===a.isBlock&&d()},t.onreadystatechange=t.onload=function(){var e=t.readyState;c("----- F'D: "+a.name),e&&!/loaded|complete/.test(e)||(a.isComplete=!0,!0===a.isBlock&&d())},document.getElementsByTagName("head")[0].appendChild(t)}}};function a(e){!0!==l(e)&&0!=o&&e.process()}function l(e){if(e.blockedBy instanceof Array)for(var i=0;i<e.blockedBy.length;i++){var n=e.blockedBy[i];if(!1===t.hasOwnProperty(n))return c(e.name+" blocked = "+n),!0;if(!0===e.proceedIfError&&!0===t[n].isError)return!1;if(!1===t[n].isComplete)return c(e.name+" blocked = "+n),!0}return!1}function c(e){var i=window.location.href,t=new RegExp("[?&]ezq=([^&#]*)","i").exec(i);"1"===(t?t[1]:null)&&console.debug(e)}function d(){++e>200||(c("let's go"),h(n),h(r))}function h(e){for(var i in e)if(!1!==e.hasOwnProperty(i)){var t=e[i];!0===t.isComplete||l(t)||!0===t.isInitialized||!0===t.isError?!0===t.isError?c(t.name+": error"):!0===t.isComplete?c(t.name+": complete already"):!0===t.isInitialized&&c(t.name+": initialized already"):t.process()}}return{addFile:function(e,i,o,l,c,d,h,f){var u=new s.file(e,i,o,l,c,d,h);!0===f?n[e]=u:r[e]=u,t[e]=u,a(u)},addFunc:function(e,o,l,c,d,h,f,u,p){!0===h&&(e=e+"_"+i++);var m=new s.func(e,o,l,c,d,f,u);!0===p?n[e]=m:r[e]=m,t[e]=m,a(m)},items:t,processAll:d,setallowLoad:function(e){o=e}}}();var __ezDotData=function(e,r){this.name=e,this.val=r};__ez.dot.b64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var r,t,n,o,a,i,d,_="",f=0;for(e=Base64._utf8_encode(e);f<e.length;)o=(r=e.charCodeAt(f++))>>2,a=(3&r)<<4|(t=e.charCodeAt(f++))>>4,i=(15&t)<<2|(n=e.charCodeAt(f++))>>6,d=63&n,isNaN(t)?i=d=64:isNaN(n)&&(d=64),_=_+this._keyStr.charAt(o)+this._keyStr.charAt(a)+this._keyStr.charAt(i)+this._keyStr.charAt(d);return _},decode:function(e){var r,t,n,o,a,i,d="",_=0;for(e=e.replace(/[^A-Za-z0-9+/=]/g,"");_<e.length;)r=this._keyStr.indexOf(e.charAt(_++))<<2|(o=this._keyStr.indexOf(e.charAt(_++)))>>4,t=(15&o)<<4|(a=this._keyStr.indexOf(e.charAt(_++)))>>2,n=(3&a)<<6|(i=this._keyStr.indexOf(e.charAt(_++))),d+=String.fromCharCode(r),64!=a&&(d+=String.fromCharCode(t)),64!=i&&(d+=String.fromCharCode(n));return d=Base64._utf8_decode(d)},_utf8_encode:function(e){e=e.replace(/rn/g,"n");for(var r="",t=0;t<e.length;t++){var n=e.charCodeAt(t);n<128?r+=String.fromCharCode(n):(127<n&&n<2048?r+=String.fromCharCode(n>>6|192):(r+=String.fromCharCode(n>>12|224),r+=String.fromCharCode(n>>6&63|128)),r+=String.fromCharCode(63&n|128))}return r},_utf8_decode:function(e){for(var r="",t=0,n=c1=c2=0;t<e.length;)(n=e.charCodeAt(t))<128?(r+=String.fromCharCode(n),t++):191<n&&n<224?(c2=e.charCodeAt(t+1),r+=String.fromCharCode((31&n)<<6|63&c2),t+=2):(c2=e.charCodeAt(t+1),c3=e.charCodeAt(t+2),r+=String.fromCharCode((15&n)<<12|(63&c2)<<6|63&c3),t+=3);return r}},__ez.dot.dataToStr=function(e){if(void 0===e)return[];try{for(var r in e)e[r].val=e[r].val+""}catch(e){}return e},__ez.dot.getCC=function(){var e="XX";return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("country")&&(e=_ezaq.country),e},__ez.dot.getDID=function(){var e="0";return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(e=_ezaq.domain_id.toString()),e},__ez.dot.getEpoch=function(e){return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("t_epoch")&&(e=_ezaq.t_epoch),e},__ez.dot.getPageviewId=function(){var e="";return"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("page_view_id")&&(e=_ezaq.page_view_id),e},__ez.dot.getURL=function(e){return("undefined"!=typeof ezJsu&&1==ezJsu||"undefined"!=typeof _ez_sa&&1==_ez_sa||"undefined"!=typeof isAmp&&!0===isAmp||"undefined"!=typeof ezWp&&!0===ezWp)&&(e="//g.ezoic.net"+e),e},__ez.dot.isValid=function(e){for(var r=0;r<e.length;r++)if(e[r]instanceof __ezDotData==!1)return console.error("Invalid data. ",e[r]),!1;return!0},__ez.dot.isDefined=function(){for(var e=0;e<arguments.length;e++)if(void 0===arguments[e]||null===arguments[e])return console.error("Argument not defined. ",arguments),!1;return!0};__ez.bit=function(){function c(a,b){d(a,b),e()}function d(b,c){__ez.dot.isDefined(b)&&__ez.dot.isValid(c)&&a.push({type:"pageview",pageview_id:b,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(c)})}function e(){void 0!==document.visibilityState&&"prerender"===document.visibilityState||(__ez.dot.isDefined(a)&&a.length>0&&((new Image).src=__ez.dot.getURL(b)+"?orig="+(!0===__ez.template.isOrig?1:0)+"&ds="+btoa(JSON.stringify(a))),a=[])}var a=[],b="/detroitchicago/greenoaks.gif";return{Add:d,AddAndFire:c,Fire:e}}();</script><script data-cfasync='false' data-pagespeed-no-defer>__ez.pel=function(){var z=[],i="/porpoiseant/army.gif";function t(e,i,t,d,_,o,n){if(__ez.dot.isDefined(e,e.getSlotElementId)){var a=parseInt(e.getTargeting("ap")[0]),r=function(e){var i=0;try{var t=e.getTargetingMap(),d=e.getSlotElementId();if(-1===d.indexOf("div-gpt-ad"))return i;if(void 0!==t)for(var _ in t)if(-1!==_.indexOf("iid")&&void 0!==t[_][0]){i=t[_][0];break}}catch(e){}return i}(e),s=e.getSlotElementId(),p=parseInt(e.getTargeting("compid")[0]),g=0,v=0;if("object"==typeof _ezim_d){var m=e.getAdUnitPath().split("/").pop();void 0!==_ezim_d[m]&&(void 0!==_ezim_d[m].creative_id&&(v=_ezim_d[m].creative_id),void 0!==_ezim_d[m].line_item_id&&(g=_ezim_d[m].line_item_id))}__ez.dot.isDefined(r,s)&&__ez.dot.isValid(i)&&z.push({type:"impression",impression_id:r,domain_id:__ez.dot.getDID(),unit:s,t_epoch:__ez.dot.getEpoch(0),revenue:t,est_revenue:d,ad_position:a,ad_size:"",bid_floor_filled:_,bid_floor_prev:o,stat_source_id:n,country_code:__ez.dot.getCC(),pageview_id:__ez.dot.getPageviewId(),comp_id:p,line_item_id:g,creative_id:v,data:__ez.dot.dataToStr(i)})}}function d(){if(void 0===document.visibilityState||"prerender"!==document.visibilityState){if(__ez.dot.isDefined(z)&&0<z.length){var e=__ez.dot.getURL(i)+"?orig="+(!0===__ez.template.isOrig?1:0)+"&sts="+btoa(JSON.stringify(z));void 0!==window.isAmp&&isAmp&&void 0!==window._ezaq&&_ezaq.hasOwnProperty("domain_id")&&(e+="&visit_uuid="+_ezaq.visit_uuid),(new Image).src=e}z=[]}}return{Add:t,AddAndFire:function(e,i){t(e,i,0,0,0,0,0),d()},AddById:function(e,i){var t=e.split("/");if(__ez.dot.isDefined(e)&&3===t.length&&__ez.dot.isValid(i)){var d=t[0],_=t[2];z.push({type:"impression",impression_id:_,domain_id:__ez.dot.getDID(),unit:d,t_epoch:__ez.dot.getEpoch(0),pageview_id:__ez.dot.getPageviewId(),data:__ez.dot.dataToStr(i)})}},Fire:d}}();var EzoicPixel=function(){this.pixels=[],this.pixelUrl="/ezoic/e.gif",("undefined"!=typeof ezJsu&&!0===ezJsu||"undefined"!=typeof _ez_sa&&!0===_ez_sa||void 0!==window.isAmp&&!0===isAmp||"undefined"!=typeof ezWp&&!0===ezWp)&&(this.pixelUrl="//g.ezoic.net"+this.pixelUrl),this.tEpoch=0,"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("t_epoch")&&(this.tEpoch=_ezaq.t_epoch)},EzoicPixelData=function(i,e){this.name=i,this.val=e};EzoicPixel.prototype={constructor:EzoicPixel,AddAndFireImpPixel:function(i,e){this.AddImpPixel(i,e,0,0,0,0,0),this.FirePixels()},AddAndFirePVPixel:function(i,e){this.AddPVPixel(i,e),this.FirePixels()},AddImpPixel:function(i,e,t,n,o,a,r){if(this.isDefined(i,i.getSlotElementId)){var d=parseInt(i.getTargeting("ap")[0]),s=i.getSizes()[0],p=s.l.toString()+"x"+s.j.toString(),l="0",h="XX";"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(l=_ezaq.domain_id.toString()),"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("country")&&(h=_ezaq.country);var f=this.getSlotIID(i),c=i.getSlotElementId();this.isDefined(f,c)&&this.validateData(e)&&(e=this.convertDataToStr(e),this.pixels.push({type:"impression",impression_id:f,domain_id:l,unit:c,t_epoch:this.tEpoch,revenue:t,est_revenue:n,ad_position:d,ad_size:p,bid_floor_filled:o,bid_floor_prev:a,stat_source_id:r,country_code:h,data:e}))}},AddImpPixelById:function(i,e){var t="0";"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(t=_ezaq.domain_id.toString());var n=i.split("/");if(this.isDefined(i)&&3===n.length&&this.validateData(e)){var o=n[0],a=n[2];e=this.convertDataToStr(e),this.pixels.push({type:"impression",impression_id:a,domain_id:t,unit:o,t_epoch:this.tEpoch,data:e})}},AddPVPixel:function(i,e){var t="0";"undefined"!=typeof _ezaq&&_ezaq.hasOwnProperty("domain_id")&&(t=_ezaq.domain_id.toString()),this.isDefined(i)&&this.validateData(e)&&(e=this.convertDataToStr(e),this.pixels.push({type:"pageview",pageview_id:i,domain_id:t,t_epoch:this.tEpoch,data:e}))},FirePixels:function(){void 0!==document.visibilityState&&"prerender"===document.visibilityState||(this.isDefined(this.pixels)&&this.pixels.length>0&&((new Image).src=this.pixelUrl+"?orig="+(!0===__ez.template.isOrig?1:0)+"&pixels="+encodeURIComponent(JSON.stringify(this.pixels))),this.pixels=[])},NewData:function(i,e){return new EzoicPixelData(i,e)},convertDataToStr:function(i){if(void 0===i)return[];try{for(var e in i)i[e].val=i[e].val+""}catch(i){}return i},getSlotIID:function(i){var e=0;try{var t=i.getTargetingMap();if(-1===i.getSlotElementId().indexOf("div-gpt-ad"))return e;if(void 0!==t)for(var n in t)if(-1!==n.indexOf("iid")&&void 0!==t[n][0]){e=t[n][0];break}}catch(i){}return e},isDefined:function(){for(var i=0;i<arguments.length;i++)if(void 0===arguments[i]||null===arguments[i])return console.error("Argument not defined. ",arguments),!1;return!0},validateData:function(i){for(var e=0;e<i.length;e++)if(i[e]instanceof EzoicPixelData==!1)return console.error("Invalid pixelData. ",i[e]),!1;return!0}};</script>

<meta name="description" content="The WDW Today Channel brings you live park hours, weather and show times from the Walt Disney World Resort.  Relive your trip to the Walt Disney World Resort every day!">
<meta name="keywords" content="Walt Disney World,Hours,Park,times,waits,weather,, Today,vacation,resort,music,Disney,TV,WDW,Channel,Disney World,Epcot,LIVE,Magic,Kingdom">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src='http://assets.codepen.io/assets/editor/live/console_runner-d0a557e5cb67f9cd9bbb9673355c7e8e.js'></script><script src='http://assets.codepen.io/assets/editor/live/events_runner-21174b4c7273cfddc124acb0876792e0.js'></script><script src='http://assets.codepen.io/assets/editor/live/css_live_reload_init-7618a0de08795409d8f6c9ef6805f7b2.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="https://codepen.io/SitePoint/pen/ZbGwqe" />

<link rel='stylesheet prefetch' href='//codepen.io/assets/reset/normalize.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<style class="cp-pen-styles">
audio2{
	float:left !important;
position:absolute !important;
  bottom:0 !important;
	z-index: 100 !important;
	
	}
	
mycarousel{
	    position: relative !important;
		z-index:50;
		top:0;
		left:0;
		}
h3 {
  display: inline-block;
  padding: 10px;
  margin-top:200px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  font-size:3.1em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
   }
h4 {
  display: inline-block;
  padding: 5px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  font-size:2.5em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
      margin-left:75px;
   }
.times {
  font-size:2em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
   font-weight:bold;
   margin-left:80px;
}
.shower {
  font-size:1.6em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
   font-weight:bold;
   margin-left:80px;
}
.showtimes {
  font-size:1.6em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
   font-weight:bold;
   margin-left:80px;
   color: #001e56;
   margin-top:-15px;
}
.weatherdays {
  font-size:1.6em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
   font-weight:bold;
}
.carousel-caption{
  top:1% !important;
  text-align:left !important;
  margin-left:8%;
}
.carousel-indicators{
	visibility:hidden;
}
.full-screen {
  background-size:cover;
  background-position:center;
  background-repeat: no-repeat;
}
.RTfloated {
    position: absolute;
	float:right;
	top:0;
	right:0;
	z-index: 100;
	width:13%;
	height:100%;
	padding-top:50px;
	
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 0px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, #032867 0, #456e97 85%, rgba(69,110,151,0) 100%);
  background: -moz-linear-gradient(180deg, #032867 0, #456e97 85%, rgba(69,110,151,0) 100%);
  background: linear-gradient(180deg, #032867 0, #456e97 85%, rgba(69,110,151,0) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  
}
.RTtext {
	right: 63px;
	z-index: 200;
	font-size:1.6em;
    font-family: 'Open Sans', sans-serif;
	opacity: 0.6;
	color:#fff;
}
.months {
    margin-top: -15px;
	right: 63px;
	z-index: 200;
	font-size:2em;
    font-family: 'Open Sans', sans-serif;
	opacity: 0.6;
	color:#fff;
}.headers {
    top: 33px;
	right: 63px;
	z-index: 200;
	font-size:1.3em;
    font-family: 'Open Sans', sans-serif;
	opacity: 0.8;
	color:#fff;
	padding-top:15px;
}.parks {
    top: 33px;
	right: 63px;
	z-index: 200;
	font-size:1.2em;
    font-family: 'Open Sans', sans-serif;
	opacity: 0.8;
	color:#fff;
}
.hours {
    top: 33px;
	right: 63px;
	z-index: 200;
	font-size:.9em;
    font-family: 'Open Sans', sans-serif;
	opacity: 0.6;
	color:#fff;
	padding-left:20px;
	padding-top:7px;
	padding-bottom:7px;
}
.clouds {
	z-index: 200;
	opacity: 0.8;
	color:#fff;
	padding:5px;
}
.cloudtext {
  font-size:2em;
  font-family: 'Open Sans', sans-serif;
   opacity: 0.8;
   font-weight:bold;
}
.weatherpos {
 	margin-left:-70px !important;
	}
hr.one {
border-top: 2px dotted #fff;
color: #ffffff;
height: .5px;
width: 95%;
opacity: 0.6;
margin-top:8px;
margin-bottom:4px;
padding:0;
}
hr.two {
border-top: 2px dotted #001e56;
color: #001e56;
height: .5px;
opacity: 0.4;
margin-top:8px;
margin-bottom:4px;
margin-left:80px;
margin-right:0;
padding:0;
    max-width: 430px;
}
/* make keyframes that tell the start state and the end state of our object */
 
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:.8; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:.8; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:.8; } }
 
.fade-in {
	opacity:0;  /* make things invisible upon start */
	-webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
	-moz-animation:fadeIn ease-in 1;
	animation:fadeIn ease-in 1;
 
	-webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
	-moz-animation-fill-mode:forwards;
	animation-fill-mode:forwards;
 
	-webkit-animation-duration:1s;
	-moz-animation-duration:1s;
	animation-duration:1s;
}
.fade-in.one {
-webkit-animation-delay: 0.7s;
-moz-animation-delay: 0.7s;
animation-delay: 0.7s;
}
 
.fade-in.two {
-webkit-animation-delay: 1.2s;
-moz-animation-delay:1.2s;
animation-delay: 1.2s;
}
#main-menu .nav-bar { list-style:none; margin-top: 5px; }
#main-menu .nav-bar li { display:inline; padding:0; margin-top: 3px; }
#main-menu .adfloat { 
position: absolute;
    top: 0 !important;
    right: 0 !important;
float:right !important; 
padding-top:7px; }
#main-menu .nav-bar li a {
	font-size:12px !important;
  text-decoration: none;
  padding-left: 25px;
  text-transform: uppercase;
  color: #333;
}
.nav-bar .nav-button-home a { background:url() no-repeat 0px -2px transparent; }
.nav-bar .nav-button-services a { background:url() no-repeat 0px -2px transparent; }
.nav-bar .nav-button-products a { background:url() no-repeat 0px -2px transparent; }
</style>


<meta charset="UTF-8">
<title>Walt Disney World Resort: Today's Calendar</title>

<script data-cfasync="false" type="text/javascript">window.google_analytics_uacct = "UA-115877619-37";</script>
<script data-cfasync="false" type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['e._setAccount', 'UA-115877619-37']);
_gaq.push(['f._setAccount', 'UA-38339005-1']);
_gaq.push(['e._setDomainName', 'disneylivecams.com']);
_gaq.push(['f._setDomainName', 'disneylivecams.com']);
_gaq.push(['e._setCustomVar',1,'template','old_site_excl',3]);
_gaq.push(['e._setCustomVar',2,'t','131',3]);
_gaq.push(['e._setCustomVar',3,'rid','0',2]);
_gaq.push(['e._setCustomVar',4,'bra','mod1',3]);
_gaq.push(['e._setAllowAnchor',true]);
_gaq.push(['e._setSiteSpeedSampleRate', 10]);
_gaq.push(['f._setCustomVar',1,'template','old_site_excl',3]);
_gaq.push(['f._setCustomVar',2,'domain','disneylivecams.com',3]);
_gaq.push(['f._setSiteSpeedSampleRate', 20]);
_gaq.push(['e._trackPageview']);
_gaq.push(['f._trackPageview']);
(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">var ezouid = "1";</script><base href="http://disneylivecams.com/WDWtoday/index.php"><script type='text/javascript'>
var ezoTemplate = 'old_site_excl';
if(typeof ezouid == 'undefined')
{
    var ezouid = 'none';
}
var ezoFormfactor = '1';
var ezo_elements_to_check = Array();
</script><!-- START EZHEAD -->
<script type='text/javascript'>
var soc_app_id = '0';
var did = 65086;
var ezdomain = 'disneylivecams.com';
var ezoicSearchable = 1;
</script>
<!--{jquery}-->
<!-- END EZHEAD -->
<script type="text/javascript" data-cfasync="false">var _ezaq = {"ad_cache_level":0,"city":"Mandeville","country":"US","days_since_last_visit":0,"domain_id":65086,"engaged_time_visit":22,"ezcache_level":1,"forensiq_score":-1,"form_factor_id":1,"framework_id":1,"is_return_visitor":true,"last_page_load":"1544399151329","last_pageview_id":"95b4b0af-c0b0-42b2-5501-10f4acdd114f","lt_cache_level":0,"metro_code":622,"page_ad_positions":"","page_view_count":4,"page_view_id":"83f3a639-24b3-497f-6134-da08312df0e3","position_selection_id":0,"postal_code":"70448","pv_event_count":0,"response_time_orig":123,"serverid":"18.214.40.78:25587","state":"LA","t_epoch":1544399293,"template_id":131,"time_on_site_visit":139,"url":"http://disneylivecams.com/WDWtoday/index.php","user_id":0,"word_count":154,"worst_bad_word_level":0};var _ezExtraQueries = "&ez_orig=1";</script><script data-cfasync='false' type="text/javascript" src="/detroitchicago/rochester.js?cb=182-0&v=8" async></script><script data-pagespeed-no-defer data-cfasync='false'>
function create_ezolpl() {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    __ez.ck.setByCat("ezux_lpl_65086=" + new Date().getTime() + "|83f3a639-24b3-497f-6134-da08312df0e3; " + expires, 3);
}
function attach_ezolpl() {
    if(window.attachEvent) {
        window.attachEvent('onload', create_ezolpl);
    } else {
        if(window.onload) {
            var curronload = window.onload;
            var newonload = function(evt) {
                curronload(evt);
                create_ezolpl();
            };
            window.onload = newonload;
        } else {
            window.onload = create_ezolpl;
        }
    }
}
attach_ezolpl();
</script></head>

<body>

<nav id="main-menu">
     <ul class="nav-bar">
		 <li>
			 	<audio autoplay loop controlsList="nodownload">
  <source src="http://disneylivecams.com/WDWtoday/WDW_Today_Channel_audio_small.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
     </ul>
<span class="adfloat">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- WDW Today Text Ad Top -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-7527672280351074"
     data-ad-slot="6485733579"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</span>
</nav>

<!-- Weather block open -->
<script src="http://disneylivecams.com/simple_weather/jquery.simpleWeather.js"></script> 
<script>
// Docs at http://simpleweatherjs.com
jQuery(document).ready(function ($) {
    // your code
$(document).ready(function() {
  $.simpleWeather({
    location: 'Orlando, Fl',
    woeid: '',
    unit: 'f',
    success: function(weather) {
      html = '<img src='+weather.thumbnail+' />'+weather.high+'&deg;'+weather.units.temp+'</td><td> / </td><td>'+weather.low+'&deg;'+weather.units.temp;
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});
});
</script>
<!-- Weather block -->
<!-- Weather block open LARGE -->
<script src="http://disneylivecams.com/simple_weather/jquery.simpleWeather.js"></script> 
<script>
// Docs at http://simpleweatherjs.com
jQuery(document).ready(function ($) {
    // your code
$(document).ready(function() {
  $.simpleWeather({
    location: 'Orlando, Fl',
    woeid: '',
    unit: 'f',
	success: function(weather) {
		html = '<table width=85% cellpadding=20px> <tr align=center  class=cloudtext>';
		html += '<td width=20%>Today</td>';
		html += '<td width=20%>'+weather.forecast[1].day+'</td>';
		html += '<td width=20%>'+weather.forecast[2].day+'</td>';
		html += '<td width=20%>'+weather.forecast[3].day+'</td>';
		html += '<td width=20%>'+weather.forecast[4].day+'</td>';
		html += '</tr><tr align=center>';
		html += '<td width=20%><img width=100px src='+weather.forecast[0].image+' /></td>';
		html += '<td width=20%><img width=100px src='+weather.forecast[1].image+' /></td>';
		html += '<td width=20%><img width=100px src='+weather.forecast[2].image+' /></td>';
		html += '<td width=20%><img width=100px src='+weather.forecast[3].image+' /></td>';
		html += '<td width=20%><img width=100px src='+weather.forecast[4].image+' /></td>';
		html += '</tr><tr align=center>';
		html += '<td width=20%><span class=cloudtext>'+weather.forecast[0].high+'&deg;</span><br>'+weather.forecast[0].text+'</td>';
		html += '<td width=20%><span class=cloudtext>'+weather.forecast[1].high+'&deg;</span><br>'+weather.forecast[1].text+'</td>';
		html += '<td width=20%><span class=cloudtext>'+weather.forecast[2].high+'&deg;</span><br>'+weather.forecast[2].text+'</td>';
		html += '<td width=20%><span class=cloudtext>'+weather.forecast[3].high+'&deg;</span><br>'+weather.forecast[3].text+'</td>';
		html += '<td width=20%><span class=cloudtext>'+weather.forecast[4].high+'&deg;</span><br>'+weather.forecast[4].text+'</td>';
		html += '</tr></table>';
		$("#weather2").html(html);
	},
    error: function(error) {
      $("#weather2").html('<p>'+error+'</p>');
    }
  });
});
});
</script>
<!-- Weather block close LARGE -->

<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
    <li data-target="#mycarousel" data-slide-to="5"></li>
	<li data-target="#mycarousel" data-slide-to="6"></li>
	<li data-target="#mycarousel" data-slide-to="7"></li>
	<li data-target="#mycarousel" data-slide-to="8"></li>
	<li data-target="#mycarousel" data-slide-to="9"></li>
	<li data-target="#mycarousel" data-slide-to="10"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="https://raw.githubusercontent.com/hblanchat/disneycalendar.github.io/master/MK.png" data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
            <h3 class="fade-in one"> <span class="glyphicon glyphicon-time"></span> Today's Park Hours</h3>
            <p class="times fade-in two">9:00am to 6:00pm</p>
                    </div>
    </div>
        <div class="item">
        <img src="https://raw.githubusercontent.com/hblanchat/disneycalendar.github.io/master/MK.png" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3 class="fade-in one">&nbsp;</h3>
  			<p class="shower fade-in one">Festival of Fantasy Parade 2pm</p>
        </div>
    </div>

    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/EP.png" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3 class="fade-in one"> <span class="glyphicon glyphicon-time"></span> Today's Park Hours</h3>
  			<p class="times fade-in two">9:00am to 9:30pm</p>
            
        </div>
    </div>

    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/EP.png" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3 class="fade-in one">&nbsp;</h3>
  			<p class="shower fade-in one">IllumiNations 9:30pm</p>
        </div>
    </div>
    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/DHS.png" data-color="violet" alt="Third Image">
        <div class="carousel-caption">
            <h3 class="fade-in one"> <span class="glyphicon glyphicon-time"></span> Today's Park Hours</h3>
 			<p class="times fade-in two">9:00am to 8:00pm</p>
            <hr class='two'><h4 class='fade-in two'>Extra Magic Hours</h4>
			<p class='times fade-in two'>8:00am to 9:00am</p>        </div>
    </div>
         <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/DHS.png" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3 class="fade-in one">&nbsp;</h3>
  			<p class="shower fade-in one">Fantasmic! 8:00pm</p><hr class=two><p class="shower fade-in one"> Jingle Bell</p><hr class=two><p class="shower fade-in one"> Jingle Bam! 8:30pm</p>
        </div>
    </div>

    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/AK.png" data-color="lightgreen" alt="Fourth Image">
        <div class="carousel-caption">
            <h3 class="fade-in one"> <span class="glyphicon glyphicon-time"></span> Today's Park Hours</h3>
            <p class="times fade-in two">9:00am to 8:00pm</p>
                                </div>
    </div>
    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/AK.png" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3 class="fade-in one">&nbsp;</h3>
  			<p class="shower fade-in one"></p>
        </div>
	  </div>
    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/WaterParks.png" data-color="tomato" alt="Fifth Image">
        <div class="carousel-caption">
            <h3 class="fade-in one"> <span class="glyphicon glyphicon-time"></span> Today's Park Hours</h3>
            <br>
            <h4 class='fade-in one'> Blizzard Beach</h4><p class='times fade-in two'>Closed</p> 			<hr class='two'>
            <h4 class='fade-in one'> Typhoon Lagoon</h4>
			<p class='times fade-in two'>10:00am to 5:00pm</p>
        </div>
    </div>
    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/DisSprings.png" data-color="lightgreen" alt="Fourth Image">
        <div class="carousel-caption">
            <h3 class="fade-in one"> <span class="glyphicon glyphicon-time"></span> Today's Hours</h3>
			<p class="times  fade-in two">10:00 AM to 12:00 AM</p>
        </div>
    </div>
    <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/transportation.png" data-color="tomato" alt="Fifth Image">
        <div class="carousel-caption">
            <h3> </h3>
        </div>
    </div>
        <div class="item">
        <img src="http://disneylivecams.com/WDWtoday/images/blank.png" data-color="tomato" alt="Fifth Image">
        <div class="carousel-caption weatherpos">
  		<h3 class="fade-in one">  Weather</h3>
<div  class="fade-in two weatherdays "  id="weather2"></div>
        </div>
    </div>
    

  </div>


<!-- Right Panel -->
<div class="RTfloated">
<p class="RTtext">
Sunday</p>
<p class="months">
December, 09</p>
<p class="headers">Weather</p>
<table>
<tbody align="center">
<tr><td>Today</td><td colspan="2">Hi  /  Lo</td></tr>
<tr><td colspan="3"><div id="weather"></div></td></tr>
</tbody>
</table>
<p class="headers">Park Hours</p>
<table>
<tr class='parks'><td>
<object width='10%' type='image/svg+xml' data='images/icon_mk.svg'>Your browser does not support SVG</object>
Magic Kingdom:</td></tr>
<tr><td><span class=hours>9:00am to 6:00pm</span></td></tr><tr class='parks'><td><hr class='one'>
<object width='10%' type='image/svg+xml' data='images/icon_epcot.svg'>Your browser does not support SVG</object>
Epcot:</td></tr>
<tr><td><span class=hours>9:00am to 9:30pm</span></td></tr><tr class='parks'><td><hr class='one'>
<object width='10%' type='image/svg+xml' data='images/icon_dhs.svg'>Your browser does not support SVG</object>
Disney's Hollywood Studios:</td></tr>
<tr><td><span class=hours>9:00am to 8:00pm</span></td></tr><tr><td><span class=hours>Extra Magic Hours</span></td></tr>
<tr><td><span class=hours>8:00am to 9:00am</span></td></tr><tr class='parks'><td><hr class='one'>
<object width='10%' type='image/svg+xml' data='images/icon_ak.svg'>Your browser does not support SVG</object>
Disney's Animal Kingdom:</td></tr>
<tr><td><span class=hours>9:00am to 8:00pm</span></td></tr></table>
</span>

</div>
  <!-- Controls -->
  <!--<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>	
<!--<iframe style='position: absolute; bottom: 0; left: 0; z-index:2;'
src=https://www.youtube.com/embed/edmK8r0HduA?&autoplay=1&controls=0&loop=1&playlist=8HSr8BjcufM&amp;showinfo=0 width=1px height=1px frameborder=0 webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->

	
	<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout-53beeb1a007ec32040abaf4c9385ebfc.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script>var $item = $('.carousel .item');
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight);
$item.addClass('full-screen');
$('.carousel img').each(function () {
    var $src = $(this).attr('src');
    var $color = $(this).attr('data-color');
    $(this).parent().css({
        'background-image': 'url(' + $src + ')',
        'background-color': $color
    });
    $(this).remove();
});
$(window).on('resize', function () {
    $wHeight = $(window).height();
    $item.height($wHeight);
});
$('.carousel').carousel({
    interval: 10000,
    pause: 'false'
});
//# sourceURL=pen.js
</script>

<center>
<!-- Floating sticky Begins-->
<script type='text/javascript'>
$(document).ready(function() {$(&#39;img#closed&#39;).click(function(){$(&#39;#bl_banner&#39;).hide(90);});});
</script>
<div id='fixedban' style='width:100%;margin:auto;text-align:center;float:none;overflow:hidden;display:scroll;position:fixed;bottom:300px;z-index:999;-webkit-transform:translateZ(0);'>
<div><a id='close-fixedban' onclick='document.getElementById(&apos;fixedban&apos;).style.display = &apos;none&apos;;' style='cursor:pointer;'><img alt='close' src='http://1.bp.blogspot.com/-_A83iDM6JYc/VhtxROLILrI/AAAAAAAADK4/aM4ikIA6aqI/s1600/btn_close.gif' title='close button' style='vertical-align:middle;'/></a></div>
<div style='text-align:center;display:block;max-width:728px;height:auto;overflow:hidden;margin:auto'>

<!-- medialink insert begin -->
<script id="mNCC" language="javascript">
   medianet_width = "728";
   medianet_height = "90";
   medianet_crid = "363484850";
   medianet_versionId = "111299";
   (function() {
       var isSSL = 'https:' == document.location.protocol;
       var mnSrc = (isSSL ? 'https:' : 'http:') + '//contextual.media.net/nmedianet.js?cid=8CU2T25SP' + (isSSL ? '&https=1' : '');
       document.write('<scr' + 'ipt type="text/javascript" id="mNSC" src="' + mnSrc + '"></scr' + 'ipt>');
   })();
</script>

<!-- medialink insert end -->
</div>
</div>
<!-- Floating sticky Ends-->

</center>
<!--Begin comScore Tag--><script>var _comscore=_comscore||[];_comscore.push({c1:"2",c2:"20015427"});(function(){var s=document.createElement("script"),el=document.getElementsByTagName("script")[0];s.async=true;s.src=(document.location.protocol=="https:"?"https://sb":"http://b")+".scorecardresearch.com/beacon.js";el.parentNode.insertBefore(s,el)})();</script><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&c2=20015427&cv=2.0&cj=1"/></noscript><!--End comScore Tag-->
<!--Quantcast Tag--><script type="text/javascript">var _qevents=_qevents||[];(function(){var elem=document.createElement('script');elem.src=(document.location.protocol=="https:"?"https://secure":"http://edge")+".quantserve.com/quant.js";elem.async=true;elem.type="text/javascript";var scpt=document.getElementsByTagName('script')[0];scpt.parentNode.insertBefore(elem,scpt)})();_qevents.push({qacct:"p-31iz6hfFutd16",labels:"Domain.disneylivecams_com,DomainId.65086"});</script><noscript><div style="display:none;"><img src="//pixel.quantserve.com/pixel/p-31iz6hfFutd16.gif?labels=Domain.disneylivecams_com,DomainId.65086"border="0"height="1"width="1"alt="Quantcast"/></div></noscript><!--End Quantcast tag-->
<script type='text/javascript' style='display:none;' async>
__ez.queue.addFile('edmonton.php', '/detroitchicago/edmonton.webp?a=a&cb=0&shcb=31', true, [], true, false, false, false);
__ez.queue.addFile('jellyfish.php', '/porpoiseant/jellyfish.webp?a=a&cb=0&shcb=31', false, [], true, false, false, false);
</script>
</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-1359397-4', 'auto');
  ga('send', 'pageview');
</script>
