@extends('layouts.master')
@section('title', '个人中心')
@section('content')

<div class="warpbox clearfix">
	<div class="fl area_st pe dn">
		<div class="area_menu">
			<div class="set_sort_mu ft14" id="side-menu">
				<a class="sel" href="javascript:;" title="基本设置"><i class="ico20 basic"></i>基本设置</a>
				<a href="?do=fond" title="美食偏好"><i class="ico20 like"></i>美食偏好</a>
				<a href="?do=sync" title="同步分享"><i class="ico20 share"></i>同步分享</a>
				<a href="?do=notice" title="通知设置"><i class="ico20 prompt"></i>通知设置</a>
				<a href="?do=account" title="帐号设置"><i class="ico20 account"></i>帐号设置</a>
				<a href="?do=level" title="等级权限"><i class="ico20 level"></i>等级权限</a>
			</div>
		</div>
	</div>
	<div class="fl area_lg dn sp">
				<dl class="set_area_list">
				<dt class="dhead" id="main-tab"><a href="?do=basic&t=profile" title="个人资料" class="sel">个人资料</a><a href="?do=basic&t=avatar" title="个人头像">个人头像</a></dt>
								<iframe id="sync_iframe_profile" name="sync_iframe_profile" src="about:blank" style="display:none"></iframe>
				<form name="form_profile" method="post" action="" target="sync_iframe_profile" id="form-profile">
					<dd class="gray6">填写个人介绍让大家更加了解你，方便大家为你准备一份美食惊喜！</dd>
					<dd>
						<div class="channel">昵称：</div><div class="attr">{{$data->name}}<a target="_blank" href="http://login.haodou.com/setting.php?uid=10673352" title="编辑" class="ico12 edt"></a></div>
					</dd>
					<dd>
						<div class="channel">真实姓名：</div><div class="attr tane"><input type="text" id="real_name" value="" maxlength="10" size="16" name="real_name" class="text_inp_b"></div>
					</dd>
					<dd>
						<div class="channel">性别：</div><div class="attr"><label><input class="radio_select" type="radio" name="gender" value="1" />男</label><label><input class="radio_select" type="radio" name="gender" value="0" />女</label></div>
					</dd>
					<dd>
						<div class="channel">生日：</div>
						<div class="attr none">
														<div class="sele">
								<div>
									<select id="birth-year">
										<option value="0">年</option>
									</select>
								</div>
							</div>
							<div class="sele">
								<div>
									<select id="birth-month">
										<option value="0">月</option>
									</select>
								</div>
							</div>
							<div class="sele">
								<div>
									<select id="birth-date">
										<option value="0">日</option>
									</select>
								</div>
							</div>
							<span class="prom">请放心填写，年份信息完全保密。</span>
							<input type="hidden" name="birthday" id="birthday" value="" />
						</div>
						<div class="channel">年龄：</div>
						<div class="attr none">
							<input type="text" id="age" value="" maxlength="3" size="5" name="age" class="text_inp_b" onkeyup="value=this.value.replace(/[^\d]/g,'')">
						</div>
						
					<dd>
						<div class="channel">所在地：</div>
						<div class="attr none">
							<select id="province" style="margin:6px 0 0 4px; width: 100px;"></select> <select id="city" name="city" style="margin-top:6px"></select>
						</div>
					</dd>
		
					<dd>
						<div class="channel">联系电话：</div><div class="attr tane"><input id="phone" type="text" value="" maxlength="20" size="16" name="phone" class="text_inp_b"></div>
						<div class="channel">电子邮箱：</div><div class="attr tane"><input id="user_email" type="text" value="" maxlength="50" size="24" name="user_email" class="text_inp_b"></div>
	 					</dd>
					<dd>
						<div class="channel"></div><div class="attr pdb5"><input class="dbtn btn_green ft14" type="submit" name="save_profile" id="save-profile" value="保存设置" /></div>
					</dd>
				</form>
					<script>
						$(function(){
						    $.ajax({
						        url:'',
							})
						})
					</script>
				<dd class="mgt10 bgclr" id="profile-result-tip" style="display:none;"></dd>
			</dl>
			<script type="text/javascript">var global_now_year_time = '2017'</script>
	</div>
</div>
<script type="text/javascript" src="//img4.hoto.cn/proxy/?js=tools/common.date.js,tools/common.region.js,center/settings/basic.js&v=59,0,1482387313"></script>
<div class="xfooter">
	<div class="warpb clearfix">
		<dl class="xf_box">
			<dt>关于我们</dt>
			<dd>
				<a href="http://www.haodou.com/help/about.php" rel="nofollow">关于好豆</a>
				<a href="http://www.haodou.com/help/about.php#hr" rel="nofollow">加入好豆</a>
				<a href="http://www.haodou.com/help/about.php#privacy" title="用户协议" rel="nofollow">用户协议</a>
			</dd>
		</dl>
		<dl class="xf_box">
			<dt>客户服务</dt>
			<dd>
				<a href="http://www.haodou.com/help/center.php" title="帮助中心" rel="nofollow">帮助中心</a>
				<a href="http://www.haodou.com/help/center.php?do=feedback" title="意见反馈" rel="nofollow">意见反馈</a>
				<a href="http://www.haodou.com/help/center.php?do=service" title="联系客服" rel="nofollow">联系客服</a>
			</dd>
		</dl>
		<dl class="xf_box">
			<dt>关注好豆</dt>
			<dd>
				
				
				<div class="frame"><iframe src="about:blank" allowtransparency="true" scrolling="no" border="0" frameborder="0" original="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=136&height=24&uid=1770277210&style=1&btn=light&dpc=1"></iframe></div>
			</dd>
		</dl>
		<p class="xf_logo">
			<a href="http://www.haodou.com/" rel="nofollow"><i class="im24bit">&nbsp;</i></a>
		</p>
		<dl class="xf_box">
			<dt>手机好豆</dt>
			<dd>
				<a href="http://www.haodou.com/help/mobile.php" rel="nofollow">好豆菜谱</a>
				<a href="http://www.haodou.com/help/mobile.php?do=Wap" rel="nofollow">好豆wap版</a>
				<a href="http://www.haodou.com/help/mobile.php?do=Windows" rel="nofollow">好豆win8版</a>
			</dd>
		</dl>
		<dl class="xf_box">
			<dt>微信二维码</dt>
			<dd>
				<img class="mgt5" src="//www.haodou.com/public/images3/semacode_x64.png" alt="好豆微信二维码" />
			</dd>
		</dl>
		<dl class="xf_box">
			<dt>好豆频道</dt>
			<dd>
				<a href="http://www.haodou.com/" rel="nofollow">好豆网</a>
				<a href="http://www.haodou.com/recipe" rel="nofollow">好豆菜谱</a>
				<a href="http://www.haodou.com/topic/home" rel="nofollow">好豆精选</a>
				<a href="http://shop.haodou.com/" rel="nofollow">好豆商城</a>
			</dd>
		</dl>
		<p class="xf_ver">
            &copy; 2009-2017 <a class="gray9" href="http://www.haodou.com/">好豆网</a> All Rights Reserved.
            <br />湘ICP备B2-20080075-3
            <br /><a target="_blank" href="http://img4.hoto.cn/public/images3/beian.jpg">长公网技(备)第43010239000021号</a>
		</p>
	</div>
</div>
<p class="ie6hack">&nbsp;</p>

			
<script type="text/javascript">
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?06a54a6e8150679f4839ee359171f563";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
		
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97853293-1', 'auto');
  ga('send', 'pageview');
</script>


<script type="text/javascript">
    var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan style='display:none;' id='cnzz_stat_icon_1257055259'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1257055259' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>
@endsection