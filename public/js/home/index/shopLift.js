/*!2017-06-14 17:06:47 merge: js/shop/help.js,js/shop/index.js,js/shop/countdown.js,js/shop/life.js!*/
;(function($){var help={show:function(){var gethelp=$('<div class="online_service" style="top:180px;right:10px;">'+'<p class="tr"><a title="关闭" href="javascript://" class="ico20 close">&nbsp;</a></p>'+'<p class="tc mgt5"><img alt="好豆客服" src="http://www.haodou.com/public/images/public/service_ol.jpg"></p>'+'<p class="mgt5 gray6 tc">欢迎来到好豆！<br>有任何问题都可以咨询我哦！</p>'+'<p class="mgt5 tc"><a class="dbtn btn_green" onclick="javascript:window.open(\'http://b.qq.com/webc.htm?new=0&amp;sid=800077728&amp;eid=2188z8p8p8p8y8y8y8K8z&amp;o=www.haodou.com&amp;q=7\', \'_blank\', \'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no\');" href="javascript://" title="在线咨询">在线咨询</a></p>'+'</div>');var css={'position':'fixed'};if($.browser.version=='6.0'){css.position='absolute';$(window).scroll(function(){gethelp.css({'top':$(document).scrollTop()+180})})}gethelp.css(css);$("body").append(gethelp);gethelp.find('a.close').click(function(){$('.online_service').hide()});$(window).trigger("scroll")}};$(function(){})})(jQuery);(function($){var index_slide={imgs:$('.slideRoll .picture_ul li'),overlays:$('.slideRoll .point_ul li'),count:null,cur:0,time:null,running:true,showPic:function(){index_slide.imgs.each(function(i){if(i==index_slide.cur)$(this).show();else $(this).hide()});index_slide.overlays.each(function(i){if(i==index_slide.cur){$(this).addClass('activ')}else{$(this).removeClass('activ')}});index_slide.cur++},go:function(){index_slide.count=index_slide.imgs.length;index_slide.showPic();index_slide.time=window.setInterval(function(){if(!index_slide.running)return true;if(index_slide.cur>=index_slide.count)index_slide.cur=0;index_slide.showPic()},5000)},pointer:function(x){index_slide.running=false;index_slide.cur=x;index_slide.showPic()},run:function(x){index_slide.running=true;index_slide.cur=x}};index_slide.go();index_slide.overlays.add(index_slide.imgs).hover(function(){index_slide.pointer($(this).index())},function(){index_slide.run($(this).index())});$('.slideRoll').hover(function(){index_slide.running=false},function(){index_slide.running=true})})(jQuery);(function($){var fnTimeCountDown=function(d,o){var f={zero:function(n){var n=parseInt(n,10);if(n>0){if(n<=9){n="0"+n}return String(n)}else{return"00"}},dv:function(){d=d||Date.UTC(2050,0,1);var future=new Date(d),now=new Date();var dur=Math.round((future.getTime()-now.getTime())/1000)+future.getTimezoneOffset()*60,pms={sec:"00",mini:"00",hour:"00",day:"00",month:"00",year:"0"};if(dur>0){pms.sec=f.zero(dur%60);pms.mini=Math.floor((dur/60))>0?f.zero(Math.floor((dur/60))%60):"00";pms.hour=Math.floor((dur/3600))>0?f.zero(Math.floor((dur/3600))%24):"00";pms.day=Math.floor((dur/86400))>0?f.zero(Math.floor((dur/86400))):"00";pms.month=Math.floor((dur/2629744))>0?f.zero(Math.floor((dur/2629744))%12):"00";pms.year=Math.floor((dur/31556926))>0?Math.floor((dur/31556926)):"0"}return pms},ui:function(){if(o.sec){o.sec.innerHTML=f.dv().sec+'秒'}if(o.mini){o.mini.innerHTML=f.dv().mini+'分'}if(o.hour){o.hour.innerHTML=f.dv().hour+'时'}if(o.day){o.day.innerHTML=f.dv().day+'天'}if(o.month){o.month.innerHTML=f.dv().month+'月'}if(o.year){o.year.innerHTML=f.dv().year+'年'}setTimeout(f.ui,1000)}};f.ui()};$(function(){$(".count_time_down").each(function(i){var endtime=$(this).text();if(endtime&&endtime!='undefined'){endtime=endtime.split('-');var endyear=endtime[0];var endmonth=endtime[1]-1;var endday=endtime[2];var endhour=endtime[3];var endmin=endtime[4];fnTimeCountDown(Date.UTC(endyear,endmonth,endday,endhour,endmin),{sec:$(".count_time_second").get(i),mini:$(".count_time_minute").get(i),hour:$(".count_time_hour").get(i),day:$(".count_time_day").get(i)})}})})})(jQuery);(function($){$("#life_publish_btn").click(function(){var user_id=hd.login.isLogin();if(!user_id)hd.login.showLogin();else window.open('http://shop.haodou.com/life.php?do=publish')})})(jQuery);