﻿
<html>
<head>


<html>
<script>
function getParam ( sname )
{
  var params = location.search.substr(location.search.indexOf("?")+1);
  var sval =  params.replace("sv=", "");
  
  return sval;
}
var sv = getParam("sv");

</script>


<title> Apple HLS</title>
<style>
      /* This CSS is required to avoid layout issues */
      html,
      body {
        height: 100%;
        width: 100%;
        background-color: #000;
        overflow: hidden;
        margin: 0;
        padding: 0;
      }
    </style>
</html></head>
<body>
<!-- Include  Media Player - here we use the optimised build for Shaka player -->
<script src="https://cdn.radiantmediatechs.com/rmp/5.9.2/js/rmp-shaka.min.js"></script>
<!-- Player container element -->
<div id="rmpPlayer">
</div>
<!-- Set up player configuration options -->

<script>
var src = {
dash: '("sv,")'};

var settings = {
  licenseKey: 'Y2thYWdnY2NvcyEqXyVhZW89M2VrY3NrdjI3OT9yb201ZGFzaXMzMGRiMEElXyo=',

   // Here are our iframe settings
        iframeMode: true,
        iframeAllowed: true,
        sharing: true,

        skin: 's1',
        src: src,
         // Enables picture-in-picture module
    pip: true,
        poster: '',
        // Logo settings
  logo: '-',
  logoLoc: 'https://www.kora-online.tv',
  logoPosition: 'bottom',
  logoWatermark: 'false',
   // Relevant low-latency settings
  isLive: true,
  // We set a 12 seconds buffer target (playlist chunk count x chunk duration)
  hlsJSMaxBufferLength: 12,
  // We set hlsJSLiveSyncDuration to the minimal possible duration (3 x chunk duration)
  hlsJSLiveSyncDuration: 3,

  // Our Google Analytics settings
    gaTrackingId: 'UA-151667901-1',
    gaCategory: 'E-learning video',
    gaLabel: 'How to start with HTML5 video',
    gaEvents: ['context', 'ready', 'playerstart', 'error', 'adimpression', 'adloadererror', 'aderror']
      };
      var elementID = 'rmpPlayer';
      var rmp = new RadiantMP(elementID);
      rmp.init(settings);
    </script>
<script>
            $(function() {
               var player = window.player = videojs('play');
            });
        </script>
<source src="MY_VIDEO.webm" type="video/webm"></source>

<script type="text/javascript">
//<![CDATA[

 data-pagespeed-no-defer>(function(){window.pagespeed=window.pagespeed||{};var f=window.pagespeed;function h(c,a,e,b){this.f=c;this.a=a;this.b=e;this.g=b}f.beaconUrl="";
function k(c){var a=c.f,e=window.mod_pagespeed_start,b=Number(new Date)-e,a=a+(-1==a.indexOf("?")?"?":"&"),a=a+"ets="+("load"==c.a?"load:":"unload:");if("beforeunload"!=c.a||!window.mod_pagespeed_loaded){a=a+b+("&r"+c.a+"=");if(window.performance){var b=window.performance.timing,d=b.navigationStart,g=b.requestStart,a=a+(b[c.a+"EventStart"]-d),a=a+("&nav="+(b.fetchStart-d)),a=a+("&dns="+(b.domainLookupEnd-b.domainLookupStart)),a=a+("&connect="+(b.connectEnd-b.connectStart)),a=a+("&req_start="+(g-d))+
("&ttfb="+(b.responseStart-g)),a=a+("&dwld="+(b.responseEnd-b.responseStart)),a=a+("&dom_c="+(b.domContentLoadedEventStart-d));window.performance.navigation&&(a+="&nt="+window.performance.navigation.type);d=-1;b.msFirstPaint?d=b.msFirstPaint:window.chrome&&window.chrome.loadTimes&&(d=Math.floor(1E3*window.chrome.loadTimes().firstPaintTime));d-=g;0<=d&&(a+="&fp="+d)}else a+=b;f.getResourceTimingData&&window.parent==window&&(a+=f.getResourceTimingData());a+=window.parent!=window?"&ifr=1":"&ifr=0";"load"==
c.a&&(window.mod_pagespeed_loaded=!0,(b=window.mod_pagespeed_num_resources_prefetched)&&(a+="&nrp="+b),(b=window.mod_pagespeed_prefetch_start)&&(a+="&htmlAt="+(e-b)));f.criticalCss&&(e=f.criticalCss,a+="&ccis="+e.total_critical_inlined_size+"&cces="+e.total_original_external_size+"&ccos="+e.total_overhead_size+"&ccrl="+e.num_replaced_links+"&ccul="+e.num_unreplaced_links);a+="&dpr="+window.devicePixelRatio;""!=c.b&&(a+=c.b);document.referrer&&(a+="&ref="+encodeURIComponent(document.referrer));a+=
"&url="+encodeURIComponent(c.g);f.beaconUrl=a;(new Image).src=a}}f.c=function(c,a,e,b){var d=new h(c,a,e,b);window.addEventListener?window.addEventListener(a,function(){k(d)},!1):window.attachEvent("on"+a,function(){k(d)})};f.addInstrumentationInit=f.c;})();

pagespeed.addInstrumentationInit('/ngx_pagespeed_beacon', 'load', '', 'http://raw.githack.com/gaberomar/vv2/master/vv2.html');

//]]>
</script>

<script data-cf-settings="353a711df033b7dc95aa622a-|49" defer="" src="//ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"></script>
</body>
</html>     
<span style="background: transparent; box-sizing: border-box; color: white; font-size: 10px; font-weight: bold; height: 38px; padding: 0px 5px; position: absolute; right: 60px; top: 400px; width: 70px;"></span><img pagespeed_url_hash="b8e6b5a44e2403b" src="https://4.bp.blogspot.com/-34SPx0qzBko/XV2tEcLbiVI/AAAAAAAAID8/H9j9Vrfo1jEVSq8xyWQgPvowGHt94SYvwCK4BGAYYCw/s1600/logo1.png" style="border: none; box-sizing: border-box; height: 30px; padding: 0px; position: absolute; right: 15px; top: 20px; vertical-align: middle; width: 90px;" />

