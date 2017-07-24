<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="Keywords" content="@yield('name')" />
    <meta name="Description" content="@yield('title')" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <title>@yield('name')_好豆网</title>
    <link rel="stylesheet" type="text/css" href="/css/publish2.css" />
    <link rel="stylesheet" type="text/css" href="/css/publish3.css" />
    <link rel="stylesheet" type="text/css" href="/css/publish.css" />
    <link rel="stylesheet" type="text/css" href="/css/publish1.css" />
    <link rel="stylesheet" type="text/css" href="/css/publish4.css" />
    <link rel="stylesheet" type="text/css" href="/css/publish7.css" />
    <script type="/js/publish11.js"></script>
    <script type="text/javascript" src="/js/publish6.js"></script>
    <script type="text/javascript" src="/js/jquery.tmpl.js"></script>
    <script type="text/javascript" src="/js/publish7.js"></script>
    <script type="text/javascript" src="/js/publish.js"></script>
    <script type="text/javascript" src="/js/publish1.js"></script>
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        if (!Array.prototype.indexOf)
        {
            Array.prototype.indexOf = function(elt /*, from*/)
            {
                var len = this.length >>> 0;
                var from = Number(arguments[1]) || 0;
                from = (from < 0) ? Math.ceil(from) : Math.floor(from);
                if (from < 0)
                    from += len;

                for (; from < len; from++)
                {
                    if (from in this && this[from] === elt)
                        return from;
                }
                return -1;
            };
        }
    </script>
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        if (!Array.prototype.indexOf)
        {
            Array.prototype.indexOf = function(elt /*, from*/)
            {
                var len = this.length >>> 0;
                var from = Number(arguments[1]) || 0;
                from = (from < 0) ? Math.ceil(from) : Math.floor(from);
                if (from < 0)
                    from += len;
                for (; from < len; from++)
                {
                    if (from in this && this[from] === elt)
                        return from;
                }
                return -1;
            };
        }
    </script>
    <script type="text/javascript" src="/js/publish4.js "></script>
</head>

<body>
<div class="status_space">&nbsp;</div>
<div class="new_status clearfix">
    <div class="warpb clearfix" id="hd_head">
        @if (!empty(session('id')))
        <div class="fr area_ct">
            <div class="uid_center fr" data-toggle="user">
				<span class="ctrl">
					<a class="tab_link" href="http://www.haodou.com/cook-10673352/">
						<span class="inner">
							<img src="http://avatar0.hoto.cn/c8/dc/10673352_22.jpg" class="pto noevent" alt="" style="height: 22px; width: 22px;"/>
							<span class="angle_down">{{session('name')}}</span><i class="ico12 arrdown">&nbsp;</i>
						</span>
					</a>
				</span>
                <div class="sub_box">
                    <a href="http://www.haodou.com/cook-10673352/recipe/"><i class="ico20 icon_recipe"></i>我的菜谱</a>
                    <a href="{{url('/groups/usergroup/'.session('id'))}}"><i class="ico20 icon_talk"></i>我的话题</a>
                    <a href="http://shop.haodou.com/my.php" title=""><i class="ico20 icon_wealth"></i>我的豆币</a>
                    <a href="http://wo.haodou.com/settings.php?do=sync" title=""><i class="ico20 icon_bind"></i>同步分享</a>
                    <a href="{{url('/groups/user/'.session('id'))}}" title=""><i class="ico20 icon_set"></i>个人设置</a>
                    <a href="{{url('/outLogin')}}"><i class="ico20 icon_quit"></i>退出</a>
                </div>
            </div>
            <span class="fr line">|</span>
            <div class="messages fr" data-toggle="notice">
				<span class="ctrl">
					<a class="tab_link" href="http://wo.haodou.com/user/message.php">
						<span class="inner">
							消息(<b class="num">4</b>)<i class="ico12 arrdown">&nbsp;</i>						</span>
					</a>
				</span>
                <div class="sub_box">
                    <div class="option clearfix">加载中...</div>
                </div>
            </div>
            <span class="fr line">|</span>

            <a class="fr tab_link glodpd" title="等级" href="http://wo.haodou.com/settings.php?do=level" target="_blank">
				<span class="inner">
					<span class="angle_down">等级: 新手</span>
				</span>
            </a>
            <span class="fr line">|</span>

            <div class="sign_in fr" data-toggle="sign">
				<span class="ctrl">
					<a class="tab_link" href="javascript://">
                        <span class="sbtn btn_orange cm" id="hd_sign">签到</span>
                    </a>
				</span>
                <div class="sub_box gray9">
                    加载中...
                </div>
            </div>
            <span class="fr line">|</span>

            <a class="fr tab_link glodpd" title="豆币" href="http://shop.haodou.com/my.php" target="_blank">
				<span class="inner">
					<span class="angle_down">豆币: <span id="hd_wealth">2</span></span>
				</span>
            </a>
            <span class="fr line">|</span>

            <div class="quick_pub fr" data-toggle="publish">
				<span class="ctrl">
					<a class="tab_link" href="javascript://">
						<span class="inner"><span class="angle_down">快速发布</span><i class="ico12 arrdown">&nbsp;</i></span>
					</a>
				</span>
                <div class="sub_box">
                    <a href="http://www.haodou.com/recipe/create" rel="nofollow"><i class="ico20 icon_recipe"></i>发布菜谱</a>
                    <a href="http://www.haodou.com/recipe/album/create.php" rel="nofollow"><i class="ico20 icon_featur"></i>创建专辑</a>
                    <a href="{{url('group/create')}}" rel="nofollow"><i class="ico20 icon_topic"></i>发表话题</a>
                    <!--<a href="http://wo.haodou.com/diary.php?do=Publish" rel="nofollow"><i class="ico20 icon_diary"></i>发表豆记</a>-->
                </div>
            </div>
        </div>
        @else
        <div class="fr area_ct">
            <div class="befor_login fr fans_act">
				<span class="tabrow">
					&nbsp;您尚未登录，请
					<a href="{{url('/login')}}" class="green" rel="nofollow">登录</a> 或
					<a href="{{url('/register')}}" class="green" rel="nofollow">注册</a>
					<a class="login_vbn" href="http://login.haodou.com/call.php?do=connect&site=6&action=bind&product=1&is_new=1" rel="nofollow"><i class="ico20 login_qq">&nbsp;</i>QQ登录</a>
					<a class="login_vbn" href="http://login.haodou.com/call.php?do=connect&site=3&action=bind&product=1&is_new=1" rel="nofollow"><i class="ico20 login_sina">&nbsp;</i>微博登录</a>
				</span>
            </div>
            <span class="fr line">|</span>


            <div class="quick_pub fr" data-toggle="publish">
				<span class="ctrl">
					<a class="tab_link" href="javascript://">
						<span class="inner"><span class="angle_down">快速发布</span><i class="ico12 arrdown">&nbsp;</i></span>
					</a>
				</span>
                <div class="sub_box">
                    <a href="http://www.haodou.com/recipe/create" rel="nofollow"><i class="ico20 icon_recipe"></i>发布菜谱</a>
                    <a href="http://www.haodou.com/recipe/album/create.php" rel="nofollow"><i class="ico20 icon_featur"></i>创建专辑</a>
                    <a href="http://wo.haodou.com/topic.php?do=Publish" rel="nofollow"><i class="ico20 icon_topic"></i>发表话题</a>
                    <!--<a href="http://wo.haodou.com/diary.php?do=Publish" rel="nofollow"><i class="ico20 icon_diary"></i>发表豆记</a>-->
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<div class="def_header clearfix">
    <div class="warpb clearfix">
        <div class="row def_pad_td">

            <div class="logo"><a href="{{url('/group_index')}}" title="好豆广场"><img class="pn" src="http://www.haodou.com/public/images3/logo_group.jpg" alt="好豆广场" /></a><img src="//www.haodou.com/public/images3/logo_vice_index.jpg" alt="爱生活 爱美食" /></div>

            <div id="hd_search" class="xsearch" data-mod='topic'>
                <div id="hd_search_set" class="append_mode">
                    <span class="nested"><span class="gray6">话题</span><i class="ico12 arr">&nbsp;</i></span>
                    <p class="area_list" style="display:none">
                        <a href="javascript://" data-mod='recipe'>菜谱</a>
                        <a href="javascript://" data-mod='collect'>专辑</a>
                        <a href="javascript://" data-mod='topic'>话题</a>
                        <a href="javascript://" data-mod='user'>豆友</a>
                    </p>
                </div>
                <input id="hd_search_txt" class="xsearch_inp" name="xsearch_txt" type="text" />
                <a class="xsearch_btn" href="javascript://" title="搜索"><i class="ico20 srh">&nbsp;</i>搜索</a>
            </div>
            <div class="xsearch_tag">
                <a href="http://www.haodou.com/s?wd=%25E5%2587%258F%25E8%2582%25A5&tp=recipe&from=head"  target="_blank" title="减肥">减肥</a>
                <a href="http://www.haodou.com/s?wd=%25E6%2597%25A9%25E9%25A4%2590&tp=recipe&from=head"  target="_blank" title="早餐">早餐</a>
                <a href="http://www.haodou.com/s?wd=%25E9%259D%25A2%25E9%25A3%259F&tp=recipe&from=head"  target="_blank" title="面食">面食</a>
                <a href="http://www.haodou.com/s?wd=%25E5%2585%25BB%25E8%2583%2583&tp=recipe&from=head"  target="_blank" title="养胃">养胃</a>
            </div>

        </div>
    </div>
    <div class="main_mu_bar">
        <div class="warpb clearfix">
            <div class="row">
                <div class="site_menu">
                    <a  class="sel" href="{{url('/group_index')}}" title="广场">广场</a>
                    <a  href="http://www.haodou.com/act/home" title="活动">活动</a>
                    <a  href="http://group.haodou.com/expert" title="生活盟主">生活盟主</a>
                </div>

            </div>
        </div>
    </div>
</div>
@section('content')
@show