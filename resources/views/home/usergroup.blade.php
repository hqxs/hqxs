<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <title>我的收藏_好豆网</title>
    <meta name="Keywords" content="好豆,美食" />
    <meta name="Description" content="" />
    <link rel="stylesheet" type="text/css" href="/css/publish5.css" />
    <script type="text/javascript" src="/js/publish8.js"></script>
    <style>
        .center-username strong{ font-size:20px; }
        .center_topicTd h3{
            display: inline;
            font-weight: normal;
            font-size: 14px;
        }
        #feed-list .box h3 {
            display: inline;
            font-size: 14px;
        }
        .center_topicThtd dt {  width:380px;  }
        .center_topicThtd dd.wd3 {  width:85px;  }
    </style>
</head>
<body>
<div class="status_space">&nbsp;</div>
<div class="new_status clearfix">
    <div class="warpb clearfix" id="hd_head">
        <div class="fl">
            <a href="{{url('/group_index')}}" target="_blank">广场</a>
        </div>
        <div class="fr area_ct">
            <div class="uid_center fr" data-toggle="user">
				<span class="ctrl">
					<a class="tab_link" href="http://www.haodou.com/cook-10673352/">
						<span class="inner">
							<img src="http://avatar0.hoto.cn/c8/dc/10673352_22.jpg" class="pto noevent" alt="" style="height: 22px; width: 22px;"/>
							<span class="angle_down">{{$name->name}}</span><i class="ico12 arrdown">&nbsp;</i>
						</span>
					</a>
				</span>
                <div class="sub_box">
                    <a href="http://www.haodou.com/cook-10673352/recipe/"><i class="ico20 icon_recipe"></i>我的菜谱</a>
                    <a href="{{url('/groups/usergroup/'.session('id'))}}"><i class="ico20 icon_talk"></i>我的话题</a>
                    <a href="" title=""><i class="ico20 icon_wealth"></i>我的豆币</a>
                    <a href="http://wo.haodou.com/settings.php?do=sync" title=""><i class="ico20 icon_bind"></i>同步分享</a>
                    <a href="{{url('/groups/user/'.session('id'))}}" title=""><i class="ico20 icon_set"></i>个人设置</a>
                    <a href="http://login.haodou.com?do=logout"><i class="ico20 icon_quit"></i>退出</a>
                </div>
            </div>
            <span class="fr line">|</span>
            <div class="messages fr" data-toggle="notice">
				<span class="ctrl">
					<a class="tab_link" href="http://wo.haodou.com/user/message.php">
						<span class="inner">
							消息(<b class="num">1</b>)<i class="ico12 arrdown">&nbsp;</i>						</span>
					</a>
				</span>
                <div class="sub_box">
                    <div class="option clearfix">加载中...</div>
                </div>
            </div>
            <span class="fr line">|</span>

            <a class="fr tab_link glodpd" title="等级" href="http://wo.haodou.com/settings.php?do=level" target="_blank">
				<span class="inner">
					<span class="angle_down">等级: 豆芽</span>
				</span>
            </a>
            <span class="fr line">|</span>

            <div class="sign_in fr" data-toggle="sign">
				<span class="ctrl">
					<a class="tab_link" href="javascript://">
                        <span class="sign_okay">已签到</span>
                    </a>
				</span>
                <div class="sub_box gray9">
                    加载中...
                </div>
            </div>
            <span class="fr line">|</span>

            <a class="fr tab_link glodpd" title="豆币" href="http://shop.haodou.com/my.php" target="_blank">
				<span class="inner">
					<span class="angle_down">豆币: <span id="hd_wealth">5</span></span>
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
    </div>
</div>
<div id="center_header_back_ground_div" back_ground_src="http://www.haodou.com/public/images3/background/1/1004.jpg"  style="background:url('http://www.haodou.com/public/images3/background/1/1004.jpg') no-repeat center top;" class="vip_super"><!-- 全站个人背景图片开始div -->
    <div class="center_header clearfix">
        <p class="img">&nbsp;</p>
        <div class="fly">
            <div class="tht" id="center_tht">
                <div id="hd_search" class="xsearch" data-mod='recipe'>
                    <div id="hd_search_set" class="append_mode">
                        <span class="nested"><span class="gray6">菜谱</span><i class="ico12 arr">&nbsp;</i></span>
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
                <h1>{{$name->name}}</h1>
                <p>http://www.haodou.com/cook-10673352/</p>
                <p class="setblock"><a class="" href="javascript:///" title="更改封面" id="center_back_ground"><i class="ico20">&nbsp;</i>更改封面</a></p>
            </div>
            <div class="view">
                <div class="warpbox clearfix">
                    <div class="box bw center_infoview">
                        <p class="fl"><img id="center_avatar" class="noevent" src="http://avatar0.hoto.cn/c8/dc/10673352_185.jpg" width="100" alt="" /><a href="http://wo.haodou.com/settings.php?do=basic&t=avatar" id="center_change_avatar" title="更换头像"><i class="ico20">&nbsp;</i>更换头像</a></p>

                        <ul class="val fr">
                            <li><a title="我的好友" href="http://www.haodou.com/cook-10673352/follow/"><span class="num">0</span><br>好友</a></li>
                            <li class="gray9">|</li>
                            <li><a title="我的关注" href="{{url('/groups/friend/'.$name->id)}}"><span class="num">{{$fri}}</span><br>关注</a></li>
                            <li class="gray9">|</li>
                            <li><a title="我的粉丝" href="http://www.haodou.com/cook-10673352/follow/fans/"><span class="num">0</span><br>粉丝</a></li>
                        </ul>

                        <div class="box">
                            <p class="center-username">
                                <strong>{{$name->name}}</strong>
                                <a  href="http://www.haodou.com/recipe/expert/apply" target="_blank" rel="nofollow">&nbsp;</a>
                            </p>
                            <p class="gray9">
                           <span title="快给自己添加个人介绍吧~~"  id="owner_intro">
                                                              快给自己添加个人介绍吧~~
                               <a target="_blank" href="http://wo.haodou.com/settings.php#intro" title="编辑" class="ico12 ico bi"></a>                           </span>
                            </p>
                            <p class="pdt5"><a class="btn_gray" title="编辑我的资料" href="http://wo.haodou.com/settings.php">编辑我的资料</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="warpbox clearfix">
        <div class="center_menu_row">
            <div class="bg">&nbsp;</div>
            <div class="mu">
                <a  href="http://www.haodou.com/cook-10673352/" title="动态"> &nbsp;动&nbsp; &nbsp;态&nbsp; </a>
                <a href="http://www.haodou.com/cook-10673352/recipe/"  title="我的菜谱">我的菜谱</a>
                <a href="http://www.haodou.com/cook-10673352/album/"  title="我的专辑">我的专辑</a>
                <a href="http://www.haodou.com/cook-10673352/userphoto/"  title="我的成果照" rel="nofollow">我的成果照</a>
                <a href="http://www.haodou.com/cook-10673352/topic/" class="sel" title="我的话题">我的话题</a>
                <a href="{{url('/groups/friend/'.$name->id)}}"  title="我的豆友">我的豆友</a>
                <a id="owner_profile" href="http://www.haodou.com/cook-10673352/profile/"  title="我的资料">我的资料</a>
                <a href="http://wo.haodou.com/10673352/diary/"  title="我的豆记" rel="nofollow">我的豆记</a>		</div>
        </div>

        <div class="fl area_db pe dn">
            <div class="center_sidemenu box hp">
                <p class="menubox">
                    <a title="我发表的话题" href="#" class="end sel " id="coll">我发表的话题</a><a title="我收藏的话题" href="#" class="fst" id="colldo">我收藏的话题</a>
                </p>
            </div>
            <script>
                $(function(){
                    $('#down').click(function(){
                        $('#up').attr('class','hover')
                        $('#down').attr('class','hover b')
                        $('#upstatus').css('display','none')
                        $('#downstatus').css('display','block')
                    })
                    $('#up').click(function(){
                        $('#down').attr('class','hover')
                        $('#up').attr('class','hover b')
                        $('#downstatus').css('display','none')
                        $('#upstatus').css('display','block')
                    })
                    $('#colldo').click(function(){
                        $('#colldo').attr('class','end sel')
                        $('#coll').attr('class','fst')
                        $('#huati').css('display','none')
                        $('#colllist').css('display','block')
                    })
                    $('#coll').click(function(){
                        $('#colldo').attr('class','fst')
                        $('#coll').attr('class','end sel')
                        $('#huati').css('display','block')
                        $('#colllist').css('display','none')
                    })
                    $('.select').click(function(){
                        var iid = $(this).attr('data')
                        var uid = $(this).attr('data1')
                        $.ajax({
                            url:'/groups/colldel',
                            type:'get',
                            data:'iid='+ iid + '&uid='+ uid,
                            success:function(data){
                                if(data == 1){
                                    alert('取消成功');
                                    $('.click_action_favorite').html('已取消收藏');
                                    return back()
                                }else{
                                    alert('取消失败')
                                }
                            }
                        })
                    })
                })

            </script>
            {{--=================话题=================--}}
            <div class="clearfix 0" id="huati">
                <div class="center_topicTitle">
                    <a title="我发布的话题" class="hover b " href="#" id="up">我发布的话题</a>
                    <a title="审核中的话题" class="hover  " href="#" id="down">审核中的话题</a>
                </div>
                <div class="center_topicThtd center_topicTh box mgt10">
                    <dl>
                        <dt>标题</dt>
                        <dd class="wd1">发表</dd>
                    </dl>
                </div>
                <div class="center_topicThtd center_topicTd box" id="upstatus" style="display:block ">
                    @foreach($artup as $v)
                    <dl class=" ">
                        <dt>
                            <i>&nbsp;</i>
                            <h3><a  href="{{url('http://hd.com/aloneshow/'.$v->art_id)}}">{{$v->art_title}}</a></h3>
                            <i class="ico20 icoPos6"> </i>
                        </dt>
                        <dd class="wd1">
                            {{$v->art_uid}}
                            <p class="gray9">{{$v->art_time}}</p>
                        </dd>
                    </dl>
                    @endforeach
                </div>
                <div class="center_topicThtd center_topicTd box" id="downstatus" style="display:none">
                    @foreach($artdown as $v)
                        <dl class=" ">
                            <dt>
                                <i>&nbsp;</i>
                            <h3><a title="121" href="{{url('http://hd.com/group/'.$v->art_id)}}">{{$v->art_title}}</a></h3>
                            <i class="ico20 icoPos6"> </i>
                            </dt>
                            <dd class="wd1">
                                {{$v->art_uid}}
                                <p class="gray9">{{$v->art_time}}</p>
                            </dd>
                        </dl>
                    @endforeach
                </div>
            </div>
            {{--==============收藏===============--}}
            <div class="clearfix" id = 'colllist' style="display:none">
                <div class="center_topicThtd center_topicTh box gray3 mgt10">
                    <dl>
                        <dt>标题</dt>
                        <dd class="wd1 pdt8">小组名称</dd>
                        <dd class="wd3 pdt8">操作</dd>
                    </dl>
                </div>
                <div class="center_topicThtd center_topicTd box">
                    @if(empty($datas))
                        <dl class=" " style="color:red; font_size:30px">无收藏</dl>
                    @else
                        @foreach($datas as $v)
                            <dl class=" ">
                                <dt>
                                    <i class="ico20 icoPos1">&nbsp;</i>
                                    <a href="{{url('/aloneshow/'.$v->art_id)}}" title="{{$v->art_title}}" class="t">{{$v->art_title}}</a>
                                    <i class="ico20 icoPos4"> </i>
                                    <i class="ico20 icoPos5"> </i>
                                </dt>
                                <dd class="wd1 lh"><a title="" href="http://group.haodou.com/32/">{{$v->cate_name }}</a></dd>
                                <dd class="wd3 lh"><a href="#" title="取消收藏" class="click_action_favorite select" data1 = "{{session('id')}}" data = '{{$v->art_id}}'>取消收藏</a><br /></dd>
                            </dl>
                        @endforeach
                    @endif
                </div>
            </div>


            <div class="bd_page mgt10"></div></div>
    <script type="text/javascript" src="//img4.hoto.cn/proxy/?js=center/center.js,center/enterprise.js,center/center/side.js&v=59,1,1482387313"></script>
</div><!-- 全站个人背景图片结尾div --><div class="xfooter">
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


<script>
    (function(){
        var bp = document.createElement('script');
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
</body>
</html>
