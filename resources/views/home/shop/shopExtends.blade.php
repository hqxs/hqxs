<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', '好豆菜谱')</title>
    <meta name="Keywords" content="商城">
    <meta name="Description" content="好豆商城">
    @yield('css')
    @yield('js')
</head>
<body>
<div class="status_space">&nbsp;</div>
<div class="new_status clearfix">
    <div class="warpb clearfix" id="hd_head">
        <div class="fl">
            <a href="">好豆网</a> |
            <a href="">菜谱</a> |
            <a href="">广场</a> |
            <a href="" class="sel" rel="nofollow">商城</a> |
            <a href="">精选专题</a> |
            <a href="" rel="nofollow">应用</a>
        </div>
        <div class="fr area_ct" id="userN" style="display: none">
            <div class="uid_center fr" data-toggle="user">
				<span class="ctrl">
					<a class="tab_link" href="">
						<span class="inner">
							<img src="" class="pto noevent" alt="" style="height: 22px; width: 22px;">
							<span class="angle_down">steven徐</span><i class="ico12 arrdown">&nbsp;</i>
						</span>
					</a>
				</span>
                <div class="sub_box">
                    <a href=""><i class="ico20 icon_recipe"></i>我的菜谱</a>
                    <a href=""><i class="ico20 icon_talk"></i>我的话题</a>
                    <a href="" title=""><i class="ico20 icon_wealth"></i>我的豆币</a>
                    <a href="" title=""><i class="ico20 icon_bind"></i>同步分享</a>
                    <a href="" title=""><i class="ico20 icon_set"></i>个人设置</a>
                    <a href="javascript:;" id="quit">
                        <i class="ico20 icon_quit"></i>退出
                    </a>
                </div>
            </div>
            <span class="fr line">|</span>
            <div class="messages fr" data-toggle="notice">
				<span class="ctrl">
					<a class="tab_link" href="">
						<span class="inner">
							消息<i class="arrnone">&nbsp;</i>
						</span>
					</a>
				</span>
            </div>
            <span class="fr line">|</span>

            <a class="fr tab_link glodpd" title="等级" href="" target="_blank">
				<span class="inner">
					<span class="angle_down">等级: 新手</span>
				</span>
            </a>
            <span class="fr line">|</span>

            <div class="sign_in fr" data-toggle="sign">
				<span class="ctrl">
					<a class="tab_link" href="javascript:;">
						<span class="sign_okay">已签到</span>
					</a>
				</span>
                <div class="sub_box gray9">
                    加载中...
                </div>
            </div>
            <span class="fr line">|</span>
            <a class="fr tab_link glodpd" title="豆币" href="" target="_blank">
				<span class="inner">
					<span class="angle_down">豆币: <span id="hd_wealth">4</span></span>
				</span>
            </a>
            <span class="fr line">|</span>
            <!-- 快速发布 -->
            <div class="quick_pub fr" data-toggle="publish" id="menu">
				<span class="ctrl">
					<a class="tab_link" href="javascript://">
						<span class="inner">
                            <span class="angle_down">快速发布</span>
                            <i class="ico12 arrdown">&nbsp;</i>
                        </span>
					</a>
				</span>
                <div class="sub_box">
                    <a href="" rel="nofollow"><i class="ico20 icon_recipe"></i>发布菜谱</a>
                    <a href="" rel="nofollow"><i class="ico20 icon_featur"></i>创建专辑</a>
                    <a href="" rel="nofollow"><i class="ico20 icon_topic"></i>发表话题</a>
                </div>
            </div>
        </div>
        <div class="befor_login fr fans_act" style="display: block" id="doLogin">
			<span class="tabrow">
				&nbsp;您尚未登录，请
				<a href="" class="green" rel="nofollow">登录</a> 或
				<a href="" class="green" rel="nofollow">注册</a>
				<a class="login_vbn" href="http://login.haodou.com/call.php?do=connect&amp;site=6&amp;action=bind&amp;product=1&amp;is_new=1" rel="nofollow"><i class="ico20 login_qq">&nbsp;</i>QQ登录</a>
				<a class="login_vbn" href="http://login.haodou.com/call.php?do=connect&amp;site=3&amp;action=bind&amp;product=1&amp;is_new=1" rel="nofollow"><i class="ico20 login_sina">&nbsp;</i>微博登录</a>
			</span>
        </div>
    </div>
</div>
<div class="def_header clearfix">
    <div class="warpb clearfix">
        <div class="row def_pad_td shop">
            <div class="logo">
                <a href="">
                    <img alt="" src="/images/logo_index_new.jpg" class="pn">
                </a>
                <img src="/images/logo_vice_index_new.jpg" alt="爱生活 爱美食">
            </div>
            <div id="hd_search" class="xsearch" data-mod="topic">
                <div id="hd_search_set" class="append_mode">
                    <span class="nested">
                        <span class="gray6">话题</span>
                        <i class="ico12 arr">&nbsp;</i>
                    </span>
                    <p class="area_list" style="display:none">
                        <a href="javascript://" data-mod="recipe">菜谱</a>
                        <a href="javascript://" data-mod="collect">专辑</a>
                        <a href="javascript://" data-mod="topic">话题</a>
                        <a href="javascript://" data-mod="user">豆友</a>
                    </p>
                </div>
                <input id="hd_search_txt" class="xsearch_inp" name="xsearch_txt" type="text" data-mod="topic" data-val="搜话题、专辑、豆友、菜谱">
                <a class="xsearch_btn" href="javascript://" title="搜索"><i class="ico20 srh">&nbsp;</i>搜索</a>
            </div>
            <div class="xsearch_tag">
                <a href="" target="_blank" title="减肥">减肥</a>
                <a href="" target="_blank" title="早餐">早餐</a>
                <a href="" target="_blank" title="面食">面食</a>
                <a href="" target="_blank" title="养胃">养胃</a>
            </div>
        </div>
    </div>
    <div class="main_mu_bar">
        <div class="warpb clearfix">
            <div class="row">
                <div class="site_menu exc">
                    <a title="商城首页" href="/" class="sel">商城首页</a>
                    <a title="生活馆" href="shop/lift">生活馆</a>
                    <a title="礼品馆" href="shop/gift">礼品馆</a>
                    <a target="_blank" title="帮助中心" href="">帮助中心</a>
                    <a title="我的商城" href="">我的商城</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ie6hack">&nbsp;</div>
@section('shopMain')

    @show
@section('shopGifts')

    @show
@section("shopLift")

    @show
@section('shopAll')

    @show
@section("shopList")

    @show
<!-- 悬浮登入js -->
<script type="text/javascript" src="/js/home/index/saved_resource(2)"></script>
<div class="xfooter">
    <div class="warpb clearfix">
        <dl class="xf_box">
            <dt>关于我们</dt>
            <dd>
                <a href="" rel="nofollow">关于好豆</a>
                <a href="" rel="nofollow">加入好豆</a>
                <a href="http://www.haodou.com/help/about.php#privacy" title="用户协议" rel="nofollow">用户协议</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>客户服务</dt>
            <dd>
                <a href="" title="帮助中心" rel="nofollow">帮助中心</a>
                <a href="" title="意见反馈" rel="nofollow">意见反馈</a>
                <a href="" title="联系客服" rel="nofollow">联系客服</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>关注好豆</dt>
            <dd>
                <div class="frame">
                    <iframe src="" allowtransparency="true" scrolling="no" border="0" frameborder="0" original="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&amp;width=136&amp;height=24&amp;uid=1770277210&amp;style=1&amp;btn=light&amp;dpc=1">
                    </iframe>
                </div>
            </dd>
        </dl>
        <p class="xf_logo">
            <a href="" rel="nofollow"><i class="im24bit">&nbsp;</i></a>
        </p>
        <dl class="xf_box">
            <dt>手机好豆</dt>
            <dd>
                <a href="" rel="nofollow">好豆菜谱</a>
                <a href="" rel="nofollow">好豆wap版</a>
                <a href="" rel="nofollow">好豆win8版</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>好豆频道</dt>
            <dd>
                <a href="" rel="nofollow">好豆网</a>
                <a href="" rel="nofollow">好豆菜谱</a>
                <a href="" rel="nofollow">好豆精选</a>
                <a href="" rel="nofollow">好豆商城</a>
            </dd>
        </dl>
        <p class="xf_ver">
            © 2009-2017 <a class="gray9" href="">好豆网</a> All Rights Reserved.
            <br>湘ICP备B2-20080075-3
            <br><a target="_blank" href="">长公网技(备)第43010239000021号</a>
        </p>
    </div>
</div>

</body>
</html>
