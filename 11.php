<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQ4BV1dWDxABVFdQAQIEX1M="};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("index.html")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"6d0ece54b7","agent":"","transactionName":"NFBbY0VUXEEEARUPXg0af0JZVkZbCgxOBV4KW1RWRV5XRgYDEUhHClBORBlBQFMLEQ0HRQZRA1pWR1lXET0CB0E8V0BoVkNTWwkDAwpUPEZMR0dZS20EDg0=","applicationID":"106263397","errorBeacon":"bam.nr-data.net","applicationTime":146}</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cryptocurrency Market Capitalizations - Page 11 of 17 | CoinMarketCap</title>
<link rel="preload" as="font" href="https://s2.coinmarketcap.com/static/cloud/fonts/glyphicons-regular.woff2" type="font/woff2" crossorigin>
<link rel="preconnect" href="https://s2.coinmarketcap.com/" crossorigin>
<link rel="preconnect" href="https://files.coinmarketcap.com/">
<link rel="preconnect" href="http://www.googletagmanager.com/">
<meta name="google-site-verification" content="EDc1reqlQ-zAgeRrrgAxRXNK-Zs9JgpE9a0wdaoSO9A">
<meta property="og:type" content="website">
<meta property="og:image" content="https://s2.coinmarketcap.com/static/cloud/img/splash_600x315_1.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="315">
<meta name="twitter:card" content="summary_large_image">
<meta property="og:title" content="Cryptocurrency Market Capitalizations | CoinMarketCap" />
<meta name="description" content="Cryptocurrency market cap rankings, charts, and more" />
<meta property="og:description" content="Cryptocurrency market cap rankings, charts, and more" />
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="canonical" href="2.html" />
<meta property="og:url" content="https://coinmarketcap.com/2">
<link rel="alternate" href="de/2.html" hreflang="de">
<link rel="alternate" href="2.html" hreflang="en">
<link rel="alternate" href="es/2.html" hreflang="es">
<link rel="alternate" href="fil/2.html" hreflang="fil">
<link rel="alternate" href="fr/2.html" hreflang="fr">
<link rel="alternate" href="hi/2.html" hreflang="hi">
<link rel="alternate" href="it/2.html" hreflang="it">
<link rel="alternate" href="ja/2.html" hreflang="ja">
<link rel="alternate" href="ko/2.html" hreflang="ko">
<link rel="alternate" href="pt-br/2.html" hreflang="pt-br">
<link rel="alternate" href="ru/2.html" hreflang="ru">
<link rel="alternate" href="vi/2.html" hreflang="vi">
<link rel="alternate" href="zh/2.html" hreflang="zh">
<meta name="apple-itunes-app" content="app-id=1282107098">
<link href="../s2.coinmarketcap.com/static/cloud/compressed/base.f79c07c9.min.css" rel='stylesheet'>
<link href="../files.coinmarketcap.com/static/header_banner/header-banner-production.css" rel='stylesheet'>
<script>
        function getCookie(e){var n=" "+document.cookie,t=" "+e+"=",i=null,o=0,u=0;return n.length>0&&-1!=(o=n.indexOf(t))&&(o+=t.length,-1==(u=n.indexOf(";",o))&&(u=n.length),i=unescape(n.substring(o,u))),i}

        var DEFAULT_CURRENCY = 'USD';
        dataLayer = [{
            'section': 'Market Cap',
            'subSection': 'Cryptocurrencies',
            'firstSessionDate': getCookie('gtm_session_first'),
            'lastSessionDate': getCookie('gtm_session_last'),
            'language': 'en',
            'currency': getCookie('currency') || DEFAULT_CURRENCY,
            'siteTheme': getCookie('theme') || 'day'
        }];
        </script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MNVXW26');
        </script>

<script src="../s2.coinmarketcap.com/static/cloud/compressed/basehead.443c6f62.min.js"></script>
<script async='async' src="../s2.coinmarketcap.com/static/cloud/compressed/prebid.1d25f515.min.js"></script>
<script async='async' src='../www.googletagservices.com/tag/js/gpt.js'></script>
<script>
            var googletag = googletag || {};
            googletag.cmd = googletag.cmd || [];
            googletag.cmd.push(function() {
                googletag.pubads().disableInitialLoad();
            });
        </script>
<script>
          googletag.cmd.push(function() {
            
                
                    googletag.defineSlot('/48901027/landing_leaderboard_top', [728, 90], 'div-gpt-ad-1488495260324-1').addService(googletag.pubads());
                    googletag.defineSlot('/48901027/leaderboard_side', [160, 600], 'div-gpt-ad-1488495260324-2').addService(googletag.pubads());
                    googletag.defineSlot('/48901027/landing_leaderboard_bottom', [728, 90], 'div-gpt-ad-1488495260324-0').addService(googletag.pubads());
                
            

            

            
            var mapping = googletag.sizeMapping()
              .addSize([1280,0], [1280, 90])
              .addSize([970,0], [970, 90])
              .addSize([750,0], [750, 90])
              .addSize([0,0], [320, 100])
              .build();
            var headerBannerSlot = googletag.defineSlot('/48901027/full_width_top', [960, 90], 'div-gpt-ad-1517714727704-0')
                .defineSizeMapping(mapping)
                .addService(googletag.pubads())
                .setCollapseEmptyDiv(true);

            googletag.pubads().addEventListener('slotRenderEnded', function(event) {
                if (event.slot === headerBannerSlot) {
                    var display = document.getElementById('div-gpt-ad-1517714727704-0').style.display,
                        el = document.getElementById('header-banner-wrapper');
                    if (display === 'none') {
                        el.style.display = 'none';
                    } else {
                        el.style.visibility = 'visible';
                    }
                }
            });

            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
<script>

        //Load the UAM JavaScript Library
        !function(a9,a,p,s,t,A,g){if(a[a9])return;function
        q(c,r){a[a9]._Q.push([c,r])}a[a9]={init:function(){q("i",arguments)},fetchBids:function(){q("f",arguments)},setDisplayBids:function(){},targetingKeys:function(){return[]},_Q:[]};A=p.createElement(s);A.async=!0;A.src=t;g=p.getElementsByTagName(s)[0];g.parentNode.insertBefore(A,g)}("apstag",window,document,"script","../c.amazon-adsystem.com/aax2/apstag.js");
        apstag.init({
            pubID: '1edde03c-121e-457d-9c35-ad4fca989bac',
            adServer: 'googletag',
            bidTimeout: 2000
        });

        var pbjs = pbjs || {};
        pbjs.que = pbjs.que || [];

        </script>
<script>
        function fetchHeaderBids() {
            var bidTimeout = 2000;
            var adUnits = [
            
                
                    {
                        code: 'div-gpt-ad-1488495260324-1',
                        mediaTypes: {
                            banner: {
                                sizes: [[728, 90]]
                            }
                        },
                        bids: [
                        {
                            "bidder": "ix",
                            "params": {
                                "size": [728, 90],
                                "siteId": "219064" // coinmarketcap.com_Desktop_728x90_ATF Home

                            }
                        },
                        {
                            "bidder": "purchs2s"
                        }]
                    },{
                        code: 'div-gpt-ad-1488495260324-2',
                        mediaTypes: {
                            banner: {
                                sizes: [[160, 600]]
                            }
                        },
                        bids: [
                        {
                            "bidder": "openx",
                            "params": {
                                "unit": "539181151",
                                "delDomain": "coinmarketcap-d.openx.net" // Desktop - 160x600 Homepage
                            }
                        },
                        {
                            "bidder": "ix",
                            "params": {
                                "size": [160, 600],
                                "siteId": "219065" // coinmarketcap.com_Desktop_160x600_Side Home
                            }
                        },        
                        {
                            "bidder": "sovrn",
                            "params": {
                                "tagid": "496632" // CoinMarketCap_AiH_160x600_Side_HOMEPAGE_Desktop
                            }
                        },
                        {
                            "bidder": "purchs2s"
                        }]
                    },{
                        code: 'div-gpt-ad-1488495260324-0',
                        mediaTypes: {
                            banner: {
                                sizes: [[728, 90]]
                            }
                        },                        
                        bids: [
                        {
                            "bidder": "openx",
                            "params": {
                                "unit": "539181149",
                                "delDomain": "coinmarketcap-d.openx.net" // Desktop - 728x90 BTF Home page
                            }
                        },
                        {
                            "bidder": "ix",
                            "params": {
                                "size": [728, 90],
                                "siteId": "219066" // coinmarketcap.com_Desktop_728x90_BTF Home
                            }
                        },        
                        {
                            "bidder": "sovrn",
                            "params": {
                                "tagid": "496630" // CoinMarketCap_AiH_728x90_BTF_HOMEPAGE_Desktop
                            }
                        },
                        {
                            "bidder": "purchs2s"
                        }]
                    }
                
            
            ];

            var apstagSlots = [
            
                                        
                    {
                        slotID: 'div-gpt-ad-1488495260324-1',
                        slotName: '/48901027/landing_leaderboard_top',
                        sizes: [[728, 90]]
                    },
                    {
                        slotID: 'div-gpt-ad-1488495260324-2',
                        slotName: '/48901027/leaderboard_side',
                        sizes: [[160, 600]]
                    },
                    {
                        slotID: 'div-gpt-ad-1488495260324-0',
                        slotName: '/48901027/landing_leaderboard_bottom',
                        sizes: [[728, 90]]
                    }
                
            
            ];

            var bidders = ['a9', 'prebid'];

            var requestManager = {
                adserverRequestSent: false,
            };
            
                bidders.forEach(function(bidder) {
                requestManager[bidder] = false;
            })

            function allBiddersBack() {
                var allBiddersBack = bidders
                .map(function(bidder) {
                    return requestManager[bidder];
                })
                .filter(Boolean)
                .length === bidders.length;
                return allBiddersBack;
            }
            
            function headerBidderBack(bidder) {
                if (requestManager.adserverRequestSent === true) {
                    return;
                }
                if (bidder === 'a9') {
                    requestManager.a9 = true;
                } else if (bidder === 'prebid') {
                    requestManager.prebid = true;
                }
                if (allBiddersBack()) {
                    sendAdserverRequest();
                }
            }

            function sendAdserverRequest() {
                if (requestManager.adserverRequestSent === true) {
                    return;
                }

                requestManager.adserverRequestSent = true;
                pbjs.adserverRequestSent = true;
                requestManager.sendAdserverRequest = true;
                googletag.cmd.push(function() {
                    apstag.setDisplayBids();
                    if (pbjs.version) {
                        pbjs.setTargetingForGPTAsync();
                    }
                    googletag.pubads().refresh();
                });
            }

            function requestBids(apstagSlots, adUnits, bidTimeout) {
                apstag.fetchBids({
                    slots: apstagSlots,
                    timeout: bidTimeout
                    }, function(bids) {
                        headerBidderBack('a9');
                    });

                // request bids from prebid
                pbjs.que.push(function() {
                    pbjs.setConfig({
                        enableSendAllBids: true,
                        priceGranularity: "high",
                        userSync: {
                            iframeEnabled: true
                        }
                    });
                    pbjs.addAdUnits(adUnits);
                    pbjs.requestBids({
                        bidsBackHandler: function (bids) {
                            headerBidderBack('prebid');
                        }
                    });
                });
            }

            requestBids(apstagSlots, adUnits, bidTimeout)
            window.setTimeout(function() {
                sendAdserverRequest();
            }, bidTimeout);
        };

        fetchHeaderBids();

        </script>
<script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "CoinMarketCap",
                "url": "https://coinmarketcap.com",
                "sameAs": [
                    "https://www.facebook.com/CoinMarketCap/",
                    "https://twitter.com/coinmarketcap"
                ]
            }
        </script>
<script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Table",
                "about": "Cryptocurrency Prices Today"
            }
        </script>
<script>
        window.lazySizesConfig = {
            expFactor: 4
        };
    </script>
<script src="../s2.coinmarketcap.com/static/cloud/compressed/currencies_top.06f5ed29.min.js"></script>
</head>
<body>

<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-MNVXW26" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<script>
            NightMode.init();
        </script>
<div id="header-banner-wrapper">

<div id="div-gpt-ad-1517714727704-0" class="centered">
<script>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1517714727704-0'); });
            </script>
</div>
<div class="header-banner-close banner-alert-close pointer">&times;</div>
</div>
<script>
            if (getCookie("header-banner-noshow") === "1") {
                document.getElementById('header-banner-wrapper').style.display = 'none';
            }
        </script>
<header class="global-stats desktop text-small hidden-xs">
<div class="container semifluid global-stats-container">
<div class="pull-right dropdowns-col hidden-sm">
<div class="btn-group">
<button type="button" class="btn btn-default btn-xs dropdown-toggle language-dropdown" data-toggle="dropdown">
<span data-language-dropdown>English</span> <span class="caret"></span>
</button>
<ul class="dropdown-menu language-dropdown-menu text-center" role="menu">
<li class="pointer"><a href="de/2.html" data-language-toggle="de">Deutsch</a></li>
<li class="pointer"><a href="2.html" data-language-toggle="en">English</a></li>
<li class="pointer"><a href="es/2.html" data-language-toggle="es">Español</a></li>
<li class="pointer"><a href="fil/2.html" data-language-toggle="fil">Filipino</a></li>
<li class="pointer"><a href="fr/2.html" data-language-toggle="fr">Français</a></li>
<li class="pointer"><a href="hi/2.html" data-language-toggle="hi">हिन्दी</a></li>
<li class="pointer"><a href="it/2.html" data-language-toggle="it">Italiano</a></li>
<li class="pointer"><a href="ja/2.html" data-language-toggle="ja">日本語</a></li>
<li class="pointer"><a href="ko/2.html" data-language-toggle="ko">한국어</a></li>
<li class="pointer"><a href="pt-br/2.html" data-language-toggle="pt-br">Português Brasil</a></li>
<li class="pointer"><a href="ru/2.html" data-language-toggle="ru">Русский</a></li>
<li class="pointer"><a href="vi/2.html" data-language-toggle="vi">Tiếng Việt</a></li>
<li class="pointer"><a href="zh/2.html" data-language-toggle="zh">简体中文</a></li>
</ul>
</div>
<div data-global-currency-switch class="btn-group global-currency-dropdown-container">
<button type="button" class="btn btn-default btn-xs dropdown-toggle global-currency-dropdown" data-toggle="dropdown">
<span data-currency-display>USD</span> <span class="caret"></span>
</button>
<ul class="dropdown-menu global-currency-dropdown-menu text-center" role="menu">
<li class="pointer"><a data-currency-toggle>USD</a></li>
<li class="pointer"><a data-currency-toggle>DKK</a></li>
<li class="pointer"><a data-currency-toggle>JPY</a></li>
<li class="pointer"><a data-currency-toggle>PLN</a></li>
<li class="pointer"><a data-currency-toggle>AUD</a></li>
<li class="pointer"><a data-currency-toggle>EUR</a></li>
<li class="pointer"><a data-currency-toggle>KRW</a></li>
<li class="pointer"><a data-currency-toggle>RUB</a></li>
<li class="pointer"><a data-currency-toggle>BRL</a></li>
<li class="pointer"><a data-currency-toggle>GBP</a></li>
<li class="pointer"><a data-currency-toggle>MXN</a></li>
<li class="pointer"><a data-currency-toggle>SEK</a></li>
<li class="pointer"><a data-currency-toggle>CAD</a></li>
<li class="pointer"><a data-currency-toggle>HKD</a></li>
<li class="pointer"><a data-currency-toggle>MYR</a></li>
<li class="pointer"><a data-currency-toggle>SGD</a></li>
<li class="pointer"><a data-currency-toggle>CHF</a></li>
<li class="pointer"><a data-currency-toggle>HUF</a></li>
<li class="pointer"><a data-currency-toggle>NOK</a></li>
<li class="pointer"><a data-currency-toggle>THB</a></li>
<li class="pointer"><a data-currency-toggle>CLP</a></li>
<li class="pointer"><a data-currency-toggle>IDR</a></li>
<li class="pointer"><a data-currency-toggle>NZD</a></li>
<li class="pointer"><a data-currency-toggle>TRY</a></li>
<li class="pointer"><a data-currency-toggle>CNY</a></li>
<li class="pointer"><a data-currency-toggle>ILS</a></li>
<li class="pointer"><a data-currency-toggle>PHP</a></li>
<li class="pointer"><a data-currency-toggle>TWD</a></li>
<li class="pointer"><a data-currency-toggle>CZK</a></li>
<li class="pointer"><a data-currency-toggle>INR</a></li>
 <li class="pointer"><a data-currency-toggle>PKR</a></li>
<li class="pointer"><a data-currency-toggle>ZAR</a></li>
</ul>
</div>
<button type="button" class="btn btn-default btn-xs js-theme-switch" title="Day/Night Mode"><span class="glyphicons glyphicons-moon glyphicons--in-button"></span></button>
</div>
<ul class="global-stats-list list-inline hidden js-global-stats text-bold">
	<?php



$json_url = "https://api.coinmarketcap.com/v2/global/";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);



  $total_active = $data['data']['active_cryptocurrencies'];
  $total_market = $data['data']['active_markets'];
  $bitcoin_percentage_of_market_cap = $data['data']['bitcoin_percentage_of_market_cap'];
  $total_market_cap = $data['data']['quotes']['USD']['total_market_cap'];
  $total_volume_24h = $data['data']['quotes']['USD']['total_volume_24h'];




	?>
<li>Cryptocurrencies: <strong><a href="all/views/all/index.html"><span><?php echo $total_active ;?></span></a></strong></li>
<li><span class="icon-bullet">&bull;</span> Markets: <strong><a href="currencies/volume/24-hour/index.html"><span><?php echo $total_market;?> </span></a></strong></li>
<li><span class="icon-bullet">&bull;</span> Market Cap: <strong><a href="charts/index.html"><span><?php echo number_format($total_market_cap) ;  ?></span></a></strong></li>
<li><span class="icon-bullet">&bull;</span> 24h Vol: <strong><a href="charts/index.html"><span ><?php echo number_format($total_volume_24h) ;  ?></span></a></strong></li>
<li><span class="icon-bullet">&bull;</span> BTC Dominance: <strong><a href="charts/index.html#dominance-percentage"><?php echo $bitcoin_percentage_of_market_cap ;  ?></span>%</a></strong></li>
</ul>
</div>
</header>
<nav class="navbar navbar-default sitenav sitenav--tablet hidden-md hidden-lg bottom-margin-1x">
<div class="semifluid container">
<div class="sitenav-navbar flex-container js-sitenav">
<div class="sitenav-menu-toggle">
<button type="button" class="btn-transparent padding-0x menu-toggle collapsed" data-toggle="collapse" data-target="#sitenav-tablet" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="glyphicons glyphicons-menu-hamburger sitenav__main-icon"></span>
</button>
</div>
<div class="sitenav-logo">
<a href="index.html">
<span class="cmc-logo cmc-logo_color_black cmc-logo_size_responsive"></span>
</a>
</div>
<div class="sitenav-search-box js-sitenav-search-box">
<form action="https://coinmarketcap.com/search/" class="navbar-form quick-search-container" role="search">
<div class="form-group has-feedback !bottom-margin-0x">
<input type="text" class="form-control quick-search-box quick-search-box--tablet js-quick-search" placeholder="Search" name="q">
<span class="glyphicons glyphicons-remove form-control-feedback js-sitenav-search-collapse" aria-hidden="true"></span>
</div>
</form>
</div>
<div class="sitenav-search-trigger js-sitenav-search-trigger">
<span class="glyphicons glyphicons-search sitenav__main-icon"></span>
</div>
</div>
</div>
<div class="collapse" id="sitenav-tablet">
<ul class="list-group text-small bottom-margin-0x">
<li class="list-group-item">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Market Cap <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="index.html">All Cryptocurrencies</a></li>
<li><a href="coins/index.html">Coins Only</a></li>
<li><a href="tokens/index.html">Tokens Only</a></li>
</ul>
</li>
<li class="list-group-item">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Trade Volume <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="currencies/volume/24-hour/index.html">24 Hour Volume Rankings (Currency)</a></li>
<li><a href="exchanges/volume/24-hour/index.html">24 Hour Volume Rankings (Exchange)</a></li>
<li><a href="currencies/volume/monthly/index.html">Monthly Volume Rankings (Currency)</a></li>
</ul>
</li>
<li class="list-group-item">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Trending <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="gainers-losers/index.html">Gainers and Losers</a></li>
<li><a href="new/index.html">Recently Added</a></li>
</ul>
</li>
<li class="list-group-item">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="charts/index.html">Global Charts</a></li>
<li><a href="historical/index.html">Historical Snapshots</a></li>
<li><a href="calculator/index.html">Currency Converter Calculator</a></li>
<li><a href="widget/index.html">Website Widgets</a></li>
<li><a href="watchlist/index.html">Watchlist</a></li>
<li><a href="https://payments.changelly.com/?crypto=BTC&amp;fiat=USD&amp;ref_id=coinmarketcap" target="_blank" rel="nofollow noopener">Buy Cryptocurrency</a></li>
</ul>
</li>
<li class="list-group-item">
<div class="btn-group">
<button type="button" class="btn btn-default btn-xs dropdown-toggle language-dropdown" data-toggle="dropdown">
<span data-language-dropdown>English</span> <span class="caret"></span>
</button>
<ul class="dropdown-menu language-dropdown-menu text-center" role="menu">
<li class="pointer"><a href="de/2.html" data-language-toggle="de">Deutsch</a></li>
<li class="pointer"><a href="2.html" data-language-toggle="en">English</a></li>
<li class="pointer"><a href="es/2.html" data-language-toggle="es">Español</a></li>
<li class="pointer"><a href="fil/2.html" data-language-toggle="fil">Filipino</a></li>
<li class="pointer"><a href="fr/2.html" data-language-toggle="fr">Français</a></li>
<li class="pointer"><a href="hi/2.html" data-language-toggle="hi">हिन्दी</a></li>
<li class="pointer"><a href="it/2.html" data-language-toggle="it">Italiano</a></li>
<li class="pointer"><a href="ja/2.html" data-language-toggle="ja">日本語</a></li>
<li class="pointer"><a href="ko/2.html" data-language-toggle="ko">한국어</a></li>
<li class="pointer"><a href="pt-br/2.html" data-language-toggle="pt-br">Português Brasil</a></li>
<li class="pointer"><a href="ru/2.html" data-language-toggle="ru">Русский</a></li>
<li class="pointer"><a href="vi/2.html" data-language-toggle="vi">Tiếng Việt</a></li>
<li class="pointer"><a href="zh/2.html" data-language-toggle="zh">简体中文</a></li>
</ul>
</div>
<div data-global-currency-switch class="btn-group global-currency-dropdown-container">
<button type="button" class="btn btn-default btn-xs dropdown-toggle global-currency-dropdown" data-toggle="dropdown">
<span data-currency-display>USD</span> <span class="caret"></span>
</button>
<ul class="dropdown-menu global-currency-dropdown-menu text-center" role="menu">
<li class="pointer"><a data-currency-toggle>USD</a></li>
<li class="pointer"><a data-currency-toggle>DKK</a></li>
<li class="pointer"><a data-currency-toggle>JPY</a></li>
<li class="pointer"><a data-currency-toggle>PLN</a></li>
<li class="pointer"><a data-currency-toggle>AUD</a></li>
<li class="pointer"><a data-currency-toggle>EUR</a></li>
<li class="pointer"><a data-currency-toggle>KRW</a></li>
<li class="pointer"><a data-currency-toggle>RUB</a></li>
<li class="pointer"><a data-currency-toggle>BRL</a></li>
<li class="pointer"><a data-currency-toggle>GBP</a></li>
<li class="pointer"><a data-currency-toggle>MXN</a></li>
<li class="pointer"><a data-currency-toggle>SEK</a></li>
<li class="pointer"><a data-currency-toggle>CAD</a></li>
<li class="pointer"><a data-currency-toggle>HKD</a></li>
<li class="pointer"><a data-currency-toggle>MYR</a></li>
<li class="pointer"><a data-currency-toggle>SGD</a></li>
<li class="pointer"><a data-currency-toggle>CHF</a></li>
<li class="pointer"><a data-currency-toggle>HUF</a></li>
<li class="pointer"><a data-currency-toggle>NOK</a></li>
<li class="pointer"><a data-currency-toggle>THB</a></li>
<li class="pointer"><a data-currency-toggle>CLP</a></li>
<li class="pointer"><a data-currency-toggle>IDR</a></li>
<li class="pointer"><a data-currency-toggle>NZD</a></li>
<li class="pointer"><a data-currency-toggle>TRY</a></li>
<li class="pointer"><a data-currency-toggle>CNY</a></li>
<li class="pointer"><a data-currency-toggle>ILS</a></li>
<li class="pointer"><a data-currency-toggle>PHP</a></li>
<li class="pointer"><a data-currency-toggle>TWD</a></li>
<li class="pointer"><a data-currency-toggle>CZK</a></li>
<li class="pointer"><a data-currency-toggle>INR</a></li>
<li class="pointer"><a data-currency-toggle>PKR</a></li>
<li class="pointer"><a data-currency-toggle>ZAR</a></li>
</ul>
</div>
<button type="button" class="btn btn-default btn-xs js-theme-switch" title="Day/Night Mode"><span class="glyphicons glyphicons-moon glyphicons--in-button"></span></button>
</li>
<li class="list-group-item">
<a href="https://www.facebook.com/CoinMarketCap" target="_blank" rel="noopener"><span class="social social-facebook icon_size_lg icon_color_facebook-blue"></span></a>
&nbsp;
<a href="https://twitter.com/CoinMarketCap" target="_blank" rel="noopener"><span class="social social-twitter icon_size_lg icon_color_twitter-blue"></span></a>
</li>
</ul>
</div>
</nav>
<header class="global-stats mobile text-small text-bold visible-xs js-global-stats">
<div class="global-stats-uncollapsed">
Market Cap: <strong><a href="charts/index.html"><span class="js-global-stats-market-cap" data-global-currency-market-cap></span></a></strong>
<button class="pull-right dropdown-toggle" data-toggle="collapse" data-target="#global-stats-mobile-1" aria-expanded="false" aria-controls="global-stats-mobile-1"><span class="caret"></span></button>
</div>
<div id="global-stats-mobile-1" class="collapse">
<ul class="list-group bottom-margin-0x">
<li class="list-group-item">24h Vol: <strong><a href="charts/index.html"><span class="js-global-stats-volume" data-global-currency-volume></span></a></strong></li>
<li class="list-group-item">BTC Dominance: <strong><a href="charts/index.html#dominance-percentage"><span class="js-global-stats-btc-dominance"></span>%</a></strong></li>
<li class="list-group-item">Cryptocurrencies: <strong><a href="all/views/all/index.html"><span class="js-global-stats-cryptocurrencies"></span></a></strong></li>
<li class="list-group-item last">Markets: <strong><a href="currencies/volume/24-hour/index.html"><span class="js-global-stats-markets"></span></a></strong></li>
</ul>
</div>
</header>
<nav class="navbar navbar-default sitenav sitenav--desktop hidden-xs hidden-sm bottom-margin-1x">
<div class="semifluid container">
<div class="sitenav-block">
<a href="index.php">
<span class="cmc-logo cmc-logo_color_black cmc-logo_size_lg"></span>
</a>
</div>
<div class="sitenav-block">
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Market Cap <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="index.php">All Cryptocurrencies</a></li>
<li><a href="coins/index.html">Coins Only</a></li>
<li><a href="tokens/index.html">Tokens Only</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Trade Volume <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="currencies/volume/24-hour/index.html">24 Hour Volume Rankings (Currency)</a></li>
<li><a href="exchanges/volume/24-hour/index.html">24 Hour Volume Rankings (Exchange)</a></li>
<li><a href="currencies/volume/monthly/index.html">Monthly Volume Rankings (Currency)</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Trending <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="gainers-losers/index.html">Gainers and Losers</a></li>
<li><a href="new/index.html">Recently Added</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="charts/index.html">Global Charts</a></li>
<li><a href="historical/index.html">Historical Snapshots</a></li>
<li><a href="calculator/index.html">Currency Converter Calculator</a></li>
<li><a href="widget/index.html">Website Widgets</a></li>
<li><a href="watchlist/index.html">Watchlist</a></li>
<li><a href="https://payments.changelly.com/?crypto=BTC&amp;fiat=USD&amp;ref_id=coinmarketcap" target="_blank" rel="nofollow noopener">Buy Cryptocurrency</a></li>
</ul>
</li>
</ul>
</div>
<div class="sitenav-block">
<form action="https://coinmarketcap.com/search/" class="navbar-form quick-search-container" role="search">
<div class="form-group has-feedback">
<input type="text" class="form-control quick-search-box js-quick-search" placeholder="Search" name="q">
<span class="glyphicons glyphicons-search form-control-feedback" aria-hidden="true"></span>
</div>
</form>
</div>
</div>
</nav>
<div class="container main-section">
<div class="row">
<div class="col-lg-10">
<div class="vertical-spacer"></div>
<div id="leaderboard" class="text-center">

<div id='div-gpt-ad-1488495260324-1' class="centered leaderboard">
<script>
                                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1488495260324-1'); });
                                    </script>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="header header-1x">
<h1 class="text-center h2">
Top Cryptocurrencies by Market Capitalization (Page 11)
</h1>
</div>
</div>
</div>
<div class="row bottom-margin-1x">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-3 col-md-2 col-md-push-5">
<div id="currency-switch" class="btn-group">
<button id="currency-switch-button" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
USD <span class="caret"></span>
</button>
<ul class="dropdown-menu text-center" role="menu">
<li class="pointer" data-fiat-item><a class="price-toggle" data-currency="usd" data-fiat>USD</a></li>
<li class="divider" data-fiat-item></li>
<li class="pointer"><a class="price-toggle" data-currency="usd">USD</a></li>
<li class="divider"></li>
<li class="pointer"><a class="price-toggle" data-currency="btc" data-currencyid="bitcoin">BTC</a></li>
<li class="divider"></li>
<li class="pointer"><a class="price-toggle" data-currency="eth" data-currencyid="ethereum">ETH</a></li>
<li class="divider"></li>
<li class="pointer"><a class="price-toggle" data-currency="xrp" data-currencyid="ripple">XRP</a></li>
<li class="divider"></li>
<li class="pointer"><a class="price-toggle" data-currency="bch" data-currencyid="bitcoin-cash">BCH</a></li>
<li class="divider"></li>
<li class="pointer"><a class="price-toggle" data-currency="ltc" data-currencyid="litecoin">LTC</a></li>
</ul>
</div>
</div>
<div class="col-xs-9 col-md-5 col-md-push-5 text-right">
<ul class="pagination top-paginator">
<li><a href="10.php">&larr; Previous 100</a></li>
<li><a href="12.php">Next 100 &rarr;</a></li>
<li>
<a href="all/views/all/index.php">View All</a>
</li>
</ul>
</div>
<div class="clearfix visible-xs visible-sm"></div>
<div class="col-md-5 col-md-pull-7">
 <ul id="category-tabs" class="nav nav-tabs text-left no-border-bottom" role="tablist">
<li class="active">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cryptocurrencies <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li class="section-heading">All Cryptocurrencies</li>
<li><a href="index.php">Top 100</a></li>
<li><a href="all/views/all/index.php">Full List</a></li>
<li class="section-heading">Coins Only</li>
<li><a href="coins/index.html">Top 100</a></li>
<li><a href="coins/views/all/index.html">Full List</a></li>
<li class="divider"></li>
<li><a href="coins/index.html">Market Cap by Circulating Supply</a></li>
<li><a href="coins/views/market-cap-by-total-supply/index.html">Market Cap by Total Supply</a></li>
<li><a href="coins/views/filter-non-mineable/index.html">Filter Non-Mineable</a></li>
<li class="section-heading">Tokens Only</li>
<li><a href="tokens/index.html">Top 100</a></li>
<li><a href="tokens/views/all/index.html">Full List</a></li>
<li class="divider"></li>
<li><a href="tokens/index.html">Market Cap by Circulating Supply</a></li>
<li><a href="tokens/views/market-cap-by-total-supply/index.html">Market Cap by Total Supply</a></li>
</ul>
</li>
<li role="presentation"><a href="watchlist/index.html">Watchlist</a></li>
</ul>
</div>
</div>
<div class="table-fixed-column-mobile compact-name-column">
<table class="table floating-header " id="currencies">
<thead>
<tr>
<th class="col-rank text-center sortable">#</th>
<th id="th-name" class="sortable">Name</th>
<th id="th-marketcap" class="sortable text-right" data-mobile-text="M. Cap">Market Cap</th>
<th id="th-price" class="sortable text-right">Price</th>
<th id="th-volume" class="sortable text-right" data-mobile-text="Volume">Volume (24h)</th>
<th id="th-totalsupply" class="sortable text-right" title="The number of coins in existence available to the public" data-mobile-text="Supply">Circulating Supply</th>
<th id="th-change" class="sortable text-right" data-mobile-text="Change">Change (24h)</th>
<th id="th-marketcap-graph" class="text-right">Price Graph (7d)</th>
<th id="th-more-options"></th>
</tr>
</thead>
<tbody>
<?php
	
	    
$json_url = "https://api.coinmarketcap.com/v2/ticker/?start=1001&limit=100&structure=array";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);

for ($x = 0; $x < 100; $x++) {


  $id[$x] = $data['data'][$x]['id'];
  $name[$x]=$data['data'][$x]['name'];
  $symbol[$x]=$data['data'][$x]['symbol'];
  $website_slug[$x]=$data['data'][$x]['website_slug'];
  $rank[$x]=$data['data'][$x]['rank'];
  $circulating_supply[$x]=$data['data'][$x]['circulating_supply'];
  $total_supply[$x]=$data['data'][$x]['total_supply'];
  $max_supply[$x]=$data['data'][$x]['max_supply'];
  $price[$x]=$data['data'][$x]['quotes']['USD']['price'];
    $volume_24h[$x]=$data['data'][$x]['quotes']['USD']['volume_24h'];

  $market_cap[$x]=$data['data'][$x]['quotes']['USD']['market_cap'];

  $percent_change_1h[$x]=$data['data'][$x]['quotes']['USD']['percent_change_1h'];

  $percent_change_24h[$x]=$data['data'][$x]['quotes']['USD']['percent_change_24h'];

  $percent_change_7d[$x]=$data['data'][$x]['quotes']['USD']['percent_change_7d'];


  $last_updated[$x]=$data['data'][$x]['last_updated'];




?>


<tr id="id-bitcoin" class="">
<td class="text-center">
<?php echo $rank[$x]; ?>
</td>
<td class="no-wrap currency-name" data-sort="Bitcoin">
<img src="https://images.coinviewer.io/currencies/16x16/<?php echo $website_slug[$x]?>.png  
" class="logo-sprite"  height="16" width="16">
<span class="currency-symbol visible-xs"><a class="link-secondary" href="currencies/bitcoin/index.html"><?php echo $symbol[$x]; ?></a></span>
<br class="visible-xs">
<a class="currency-name-container link-secondary" href="currencies/coin/?coin=<?php echo $id[$x]?>"><?php echo $name[$x]; ?></a>
</td>
<td> <?php echo number_format($market_cap[$x]); ?>
</td>
<td>
<a href="currencies/coin/?coin=<?php echo $id[$x]?>"  > <?php echo number_format($price[$x],2) ; ?> </a>
</td>
<td >
<a href="currencies/coin/?coin=<?php echo $id[$x]?>" ><?php echo number_format($volume_24h[$x]) ;?></a>
</td>
<td >
<a href="https://blockchain.info/" target="_blank" rel="nofollow noopener" data-supply="17147225.0">
<span data-supply-container><?php echo number_format($circulating_supply[$x])." ".$symbol[$x] ; ?></span>
</a>
</td>
<td >  <?php 
	if($percent_change_24h[$x] > 0)
	{
		echo '<i style="color:green;">'.$percent_change_24h[$x].' </i> ';
	}
	else 
	{
		echo '<i style="color:red;">'.$percent_change_24h[$x].' </i> ';
	}

?> %</td>
<td><a href="currencies/coin/?coin=<?php echo $id[$x]?>">
<img alt="sparkline" src="../s2.coinmarketcap.com/generated/sparklines/web/7d/usd/1.png">
</a></td>
<td class="dropdown" data-more-options data-cc-id="1" data-cc-slug="<?php echo $id[$x]?>">
<button class="btn btn-transparent dropdown-toggle" type="button" id="dropdown-menu-1" data-toggle="dropdown">
<span class="glyphicons glyphicons-more text-gray"></span>
</button>
<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdown-menu-1">
<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-watchlist-add>Add to Watchlist</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-watchlist-remove>Remove from Watchlist</a></li>
<li class="disabled" role="presentation"><a role="menuitem" tabindex="-1" href="#" data-watchlist-full>Watchlist full!</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="currencies/coin/?coin=<?php echo $id[$x]?>">View Chart</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="currencies/coin/?coin=<?php echo $id[$x]?>">View Markets</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="currencies/coin/?coin=<?php echo $id[$x]?>">View Historical Data</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="https://payments.changelly.com/?crypto=<?php echo $symbol[$x]; ?>&amp;fiat=USD&amp;ref_id=coinmarketcap" target="_blank" rel="nofollow noopener">Buy / Sell Instantly</a></li>
</ul>
</td>
</tr>
<?php } ?>

</tbody>
</table>
</div>
<div class="pull-right">
<ul class="pagination bottom-paginator">
<li><a href="10.php">&larr; Previous 100</a></li>
<li><a href="12.php">Next 100 &rarr;</a></li>
<li>
<a href="all/views/all/index.php">View All</a>
</li>
</ul>
</div>
<div id="asterisks">* Not Mineable</div>
</div>
</div>
<div class="row text-center h3 margin-bottom--lv2">
<strong> Total Market Cap: $<span ><?php echo number_format($total_market_cap); ?>
</span></strong>
</div>
<div class="row">
<div class="col-xs-12 text-center text-gray">
Last updated: <?php
  $timestamp=$last_updated[$x-1];
$last_updated[$x-1] = gmdate("Y-m-d  H:i:s", $timestamp);
 echo $last_updated[$x-1]; ?>
</div>
</div>
<div id="leaderboard-bottom" class="row text-center">

<div id='div-gpt-ad-1488495260324-0' class="centered leaderboard">
<script>
                                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1488495260324-0'); });
                                    </script>
</div>
</div>

<div class="modal fade" id="donate_btc" tabindex="-1" role="dialog" aria-labelledby="donate_btc_label" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header text-center">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="donate_btc_label">Donate Bitcoin</h4>
</div>
<div class="modal-body text-center">
<strong>3CMCRgEm8HVz3DrWaCCid3vAANE42jcEv9</strong> <br /> <img src="../s2.coinmarketcap.com/static/cloud/img/qrcodes/donate_bitcoin.png" alt="Donate Bitcoin"><br />
</div>
</div>
</div>
</div>
<div class="modal fade" id="donate_ltc" tabindex="-1" role="dialog" aria-labelledby="donate_ltc_label" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header text-center">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="donate_ltc_label">Donate Litecoin</h4>
</div>
<div class="modal-body text-center">
<strong>LTdsVS8VDw6syvfQADdhf2PHAm3rMGJvPX</strong> <br /> <img src="../s2.coinmarketcap.com/static/cloud/img/qrcodes/donate_litecoin.png" alt="Donate Litecoin"><br />
</div>
</div>
</div>
</div>
<div class="modal fade" id="donate_eth" tabindex="-1" role="dialog" aria-labelledby="donate_eth_label" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header text-center">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="donate_eth_label">Donate Ethereum</h4>
</div>
<div class="modal-body text-center">
<strong>0x0074709077B8AE5a245E4ED161C971Dc4c3C8E2B</strong> <br /> <img src="../s2.coinmarketcap.com/static/cloud/img/qrcodes/donate_ethereum.png" alt="Donate Ethereum"><br />
</div>
</div>
</div>
</div>
<div class="modal fade" id="donate_bch" tabindex="-1" role="dialog" aria-labelledby="donate_bch_label" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header text-center">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="donate_bch_label">Donate Bitcoin Cash</h4>
</div>
<div class="modal-body text-center">
<strong>1LVXG4Z4oF6TrJfmUfSuLX8nqb8c5eCwha</strong> <br /> <img src="../s2.coinmarketcap.com/static/cloud/img/qrcodes/donate_bitcoin_cash.png" alt="Donate Bitcoin Cash"><br />
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
<div style="margin-top:200px;float:right;">
<div style='width:160px; height:600px;'>

<div id='div-gpt-ad-1488495260324-2' class="skyscraper">
<script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1488495260324-2'); });
                                </script>
</div>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="semifluid container flex-container">
<div class="footer-section footer-section--brand text-center">
<div class="margin-bottom--lv1">
<span class="cmc-logo cmc-logo_color_grey cmc-logo_size_md footer__cmc-logo"></span>
</div>
<div class="text-gray-light">&copy; 2018 CoinMarketCap</div>
</div>
<div class="footer-section footer-section--links">
<section class="margin-bottom--lv2">
<h5 class="footer-header">Useful Links</h5>
<div class="row">
<div class="col-xs-6">
<ul class="list-unstyled">
<li><a href="advertising/index.html" target="_blank">Advertise</a></li>
<li><a href="api/index.html">API</a></li>
<li><a href="disclaimer/index.html">Disclaimer</a></li>
<li><a href="privacy/index.html">Privacy</a></li>
<li><a href="terms/index.html">Terms</a></li>
<li><a href="faq/index.html">FAQ</a></li>
</ul>
</div>
<div class="col-xs-6">
<ul class="list-unstyled">
<li><a href="request/index.html" target="_blank">Request Form</a></li>
<li><a href="careers/index.html">Careers</a></li>
<li><a href="https://medium.com/@CoinMarketCap" target="_blank" rel="noopener">Blog</a></li>
<li><a href="newsletter/index.html" target="_blank">Newsletter</a></li>
<li><a href="https://www.facebook.com/CoinMarketCap" target="_blank" rel="noopener">Facebook</a></li>
<li><a href="https://twitter.com/CoinMarketCap" target="_blank" rel="noopener">Twitter</a></li>
</ul>
</div>
</div>
</section>
<section class="margin-bottom--lv2">
<div class="row">
<div class="col-xs-6">
<h5 class="footer-header">Night Mode</h5>
<div class="btn-group" data-toggle="buttons">
<label class="btn btn-default btn-sm" data-night-mode-off>
<input type="radio"> Off
</label>
<label class="btn btn-default btn-sm" data-night-mode-on>
<input type="radio"> On
</label>
</div>
</div>
<div class="col-xs-6">
<h5 class="footer-header">Downloads</h5>
<a href="https://appstore.com/coinmarketcapcom/" target="_blank" rel="noopener">
<span class="app-store-badge"></span>
</a>
</div>
</div>
</section>
</div>
<div class="footer-section footer-section--donate overflow-ellipsis">
<section class="margin-bottom--lv2">
<h5 class="footer-header">Donate</h5>
<ul class="list-unstyled">
<li class="overflow-ellipsis">BTC: <a data-toggle="modal" data-target="#donate_btc">3CMCRgEm8HVz3DrWaCCid3vAANE42jcEv9</a></li>
<li class="overflow-ellipsis">LTC: <a data-toggle="modal" data-target="#donate_ltc">LTdsVS8VDw6syvfQADdhf2PHAm3rMGJvPX</a></li>
<li class="overflow-ellipsis">ETH: <a data-toggle="modal" data-target="#donate_eth">0x0074709077B8AE5a245E4ED161C971Dc4c3C8E2B</a></li>
<li class="overflow-ellipsis">BCH: <a data-toggle="modal" data-target="#donate_bch">1LVXG4Z4oF6TrJfmUfSuLX8nqb8c5eCwha</a></li>
</ul>
</section>
<section class="margin-bottom--lv2">
<h5 class="footer-header">Buy Cryptocurrency</h5>
<ul class="list-unstyled">
<li><a href="https://payments.changelly.com/?crypto=BTC&amp;fiat=USD&amp;ref_id=coinmarketcap" target="_blank" rel="nofollow noopener">Changelly</a></li>
</ul>
</section>
</div>
</div>
</footer>
<div class="banner-alert banner-alert-fixed-bottom hide js-cookie-policy-banner">
<div class="banner-alert-close">
<button type="button" class="banner-alert-close-button js-close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="banner-alert-body">
We use cookies to offer you a better browsing experience, analyze site traffic, personalize content, and serve targeted advertisements. Read about how we use cookies and how you can control them on our <a href="privacy/index.html">Privacy Policy</a>. If you continue to use this site, you consent to our use of cookies.
</div>
</div>
<div id="currency-exchange-rates" data-pkr="0.00822707" data-ars="0.036764" data-ron="0.249524" data-myr="0.247015" data-inr="0.014608" data-jpy="0.0088805" data-czk="0.044825" data-brl="0.257586" data-btc="6282.47" data-sek="0.112063" data-sgd="0.730709" data-aed="0.272248" data-try="0.206274" data-usd="1.0" data-aud="0.73819" data-chf="0.994185" data-mur="0.0290445" data-zar="0.0749291" data-ngn="0.00277008" data-cny="0.149277" data-pen="0.305595" data-hrk="0.157144" data-clp="0.00154059" data-xrp="0.440079" data-eur="1.16243" data-huf="0.00358335" data-vnd="4.34811e-05" data-nok="0.122477" data-rub="0.0160532" data-mxn="0.0524564" data-pln="0.268565" data-php="0.0186789" data-bob="0.144761" data-hkd="0.127406" data-cop="0.00034422" data-isk="0.00928561" data-bch="702.058" data-twd="0.032611" data-uah="0.0381345" data-idr="7.00853e-05" data-krw="0.000882418" data-bgn="0.594423" data-thb="0.029976" data-ltc="77.6722" data-ils="0.27428" data-gbp="1.3127" data-nzd="0.6734" data-eth="439.182" data-dkk="0.155921" data-cad="0.757844"></div>
<div id="percentage_gains_data" data-bch1h="0.0359669" data-eth1h="-0.138979" data-xrp7d="-7.26437" data-btc1h="0.111415" data-bch7d="-3.71036" data-xrp24h="1.00425" data-ltc7d="-6.59307" data-xrp1h="0.0410848" data-bch24h="2.91458" data-ltc24h="1.06717" data-eth24h="1.359" data-ltc1h="-0.394976" data-btc24h="1.29967" data-btc7d="-5.47166" data-eth7d="-7.35476"></div>
<div class="scroll-to-top">
<button class="btn"><span class="glyphicons glyphicons-chevron-up"></span></button>
</div>
<script>
            var LANG_CODE = 'en';
            var STATIC_DOMAIN = 's2.coinmarketcap.com';
        </script>
<script src="../s2.coinmarketcap.com/static/cloud/compressed/base.98246358.min.js"></script>
<script src="../s2.coinmarketcap.com/static/cloud/compressed/currencies_main.0b58a796.min.js"></script>
<script>
        const PHRASES = {
            emptyTable: "No data available in table",
    zeroRecords: "No matching records found",
    sortAscending: ": activate to sort column ascending",
    sortDescending: ": activate to sort column descending",
            'K': "K",
    'M': "M",
    'B': "B",
    'T': "T"
        };
        var polyglot = new Polyglot({phrases: PHRASES});

        var watchlistStore = WatchlistStore();
        var watchlistActions = $.map($('[data-more-options]'), function (elem) {
            return new WatchlistAction({
                element: elem,
                watchlistStore: watchlistStore,
                watchlistIsFull: watchlistStore.isFull()
            });
        });
        $(document).on(watchlistStore.WATCHLIST_AT_CAPACITY, function (event) {
            for (var i=0; i < watchlistActions.length; i++) {
                watchlistActions[i].render({watchlistIsFull: true});
            }
        });
        $(document).on(watchlistStore.WATCHLIST_UNDER_CAPACITY, function (event) {
            for (var i=0; i < watchlistActions.length; i++) {
                watchlistActions[i].render({watchlistIsFull: false});
            }
        });
    </script>
<script>
            $( document ).ready(function() {
                // GTM Session Set
                var maxExpire = new Date('2038-01-19 00:00:00');
                if (Cookies.get("gtm_session_first") === undefined) {
                    Cookies.set("gtm_session_first", new Date(), {expires: maxExpire})
                }            

                Cookies.set("gtm_session_last", new Date(), {expires: maxExpire})
                
                // Header Banner Prefs
                $(".header-banner-close").on('click', function () {
                    Cookies.set("header-banner-noshow", "1", {expires: 1})
                    $('#header-banner-wrapper').fadeOut();
                    dataLayer.push({
                        'event': 'customEvent',
                        'eventCategory': 'Header Banner',
                        'eventAction': 'Close',
                    });
                });

            });

            (function () {
                var polyglot = new Polyglot({phrases: {
                    cryptocurrencies: "Cryptocurrencies",
                    exchanges: "Exchanges"
                }});

                initQuickSearch({
                    currencyDataURL: 'https://' + STATIC_DOMAIN + '/generated/search/quick_search.json',
                    exchangeDataURL: 'https://' + STATIC_DOMAIN + '/generated/search/quick_search_exchanges.json',
                    currencySuggestionTemplate: function (context) {
                        var template = "/coin/website/test/coinmarketcap.com/currencies/coin/?coin=%25s";
                        context.url = template.replace('%25s', context.id);
                        return Handlebars.templates['quick_search'](context);
                    },
                    exchangeSuggestionTemplate: function (context) {
                        var template = "/exchanges/%25s/";
                        context.url = template.replace('%25s', context.slug);
                        return Handlebars.templates['quick_search_exchanges'](context);
                    },
                    currencyLimit: 6,
                    exchangeLimit: 4
                }, polyglot);
                SiteNav('.js-sitenav');


                $('[data-language-toggle]').on('click', function () {
                    dataLayer.push({
                        'event': 'customEvent',
                        'eventCategory': 'Language Dropdown',
                        'eventAction': 'Language Selected',
                        'eventLabel': $(this).data('language-toggle')
                    });
                });

                var language = $('[data-language-toggle="' + 'en' + '"]').html();
                $('[data-language-dropdown]').html(language);

                NightMode.initSwitch();
                ThemeSwitch('.js-theme-switch');
                ScrollToTop('.scroll-to-top');
                CookiedDismissableAlert({
                    selector: '.js-cookie-policy-banner',
                    cookieKey: 'cmc_gdpr_hide'
                });
            })();
        </script>
</body>

<!-- Mirrored from coinmarketcap.com/2 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 18:15:27 GMT -->
</html>