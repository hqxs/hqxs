@extends('layouts.master')
@section('title', $datas->cate_title)
@section('name', $datas->cate_name)
@section('content')

<div class="warp_shell clearfix">
    <div class="shell_up"></div>
    <div class="shell_mc clearfix">
        <div class="area_main">
            <div class="mgb10">
                <a title="广场" href="http://group.haodou.com">广场</a>
                <span class="ftst">&nbsp;&gt;&nbsp;</span><span>发表话题</span>
                @if(!empty(session('sim')))
                    <b style="color:blue;font-weight:600;font-size:20px">{{ session('sim') }}</b>
                @endif
            </div>
            <h2 class="dhead mgb5"><a href="javascript://" class="sel">发表话题</a></h2>
            <h3 class="main_t ft14 n ft12">豆亲们的聊吧，说生活、谈美食、畅旅行、言美图...让我们畅所欲言。</h3>
            <span id="topic_enterprise" is_enterprise="0" enterprise_cate="26" style="display: none;"></span>


            <form action="{{url('group/'.$datas->art_id)}}" method="post">
                <input type="hidden" name="_method" value="put">
                {{csrf_field()}}
                <!--特殊处理显示豆友会的资料-->
                <!--特殊处理显示豆友会的资料-->

                <h3 class="main_t ft14 mgt20">标题</h3>
                @if(count($errors)>0)
                    <p style="color:red;font-weight:600;font-size:20px">{{$errors->first('art_title')}}</p>
                @endif
                <div>
                    <input class="title_input" style="float: left;  margin-right: 10px;" name="art_title" id="title" value="{{$datas->art_title}}" placeholder="请输入标题" type="text" maxlength="20">
                    <div style="line-height: 26px;">0/20</div>
                </div>
                <h3 class="main_t ft14 mgt20">内容</h3>
                @if(count($errors)>0)
                    <p style="color:red;font-weight:600;font-size:20px">{{$errors->first('art_content')}}</p>
                @endif
                <divs>
                    <script type="text/javascript" charset="utf-8" src="{{asset('/org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('/org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="art_content" type="text/plain" style="width:661px;height:500px;">{!! $datas->art_content !!}</script>
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
                </divs>
                <h3 class="main_t ft14 mgt20">标签</h3>
                <input class="title_input" name="art_tag" id="tags" value="{{$datas->art_tag}}" placeholder="在此输入标签，多个标签之间请用空格隔开" type="text">
                <p class="mgt10" id="hot_tags">热门：
                    <a href="javascript:///" title="">美食</a>&nbsp;
                    <a href="javascript:///" title="">家常菜</a>&nbsp;
                    <a href="javascript:///" title="">身边的风景</a>&nbsp;
                    <a href="javascript:///" title="">健康饮食</a>&nbsp;
                    <a href="javascript:///" title="">营养厨房</a>&nbsp;
                    <a href="javascript:///" title="">生活</a>&nbsp;
                    <a href="javascript:///" title="">烘焙</a>&nbsp;
                    <a href="javascript:///" title="">厨房宝典</a>&nbsp;
                    <a href="javascript:///" title="">有奖活动</a>&nbsp;
                    <a href="javascript:///" title="">蛋糕</a>&nbsp;
                </p>
                <!--特殊处理显示豆友会的资料-->
                <!--特殊处理显示豆友会的资料-->
                <!--特殊处理显示豆友会的资料-->

                <div class="mgt10 fl"><span class="mod_sync"></span></div>
                {{--<input type="hidden" name="art_uid" value= "{{session('id')}}" />--}}
                {{--<input type="hidden" id="topic_status" value="" />--}}
                <div class="area_auto mgt10">
                    <input type="submit" class="btn_basic btn_g mgr10 topic_publish_btn" id="publish_btn" href="javascript:///" value="保存发布">
                </div>
                <script type="text/javascript" src="http://www.haodou.com/public/editor/kindeditor-min.js"></script>
                <script  type="text/javascript">
                    var is_white = "";
                    var friends_map = eval('('+'{"f_catename":"\u8c46\u53cb\u4f1a","f_whitelist":[2506277,4587724,3351909,6032773,114753,1802171,2106290,2110151,1652146,5829235,7780090,179369,31779,3351909,6032773,4587724],"f_city":{"2":"\u5317\u4eac","1":"\u4e0a\u6d77","226":"\u5e7f\u5dde","257":"\u6d4e\u5357","20":"\u54c8\u5c14\u6ee8","270":"\u6c55\u5934","306":"\u6df1\u5733","163":"\u53a6\u95e8","47":"\u6210\u90fd","187":"\u6b66\u6c49","202":"\u897f\u5b89","30":"\u6c88\u9633","148":"\u676d\u5dde","98":"\u5408\u80a5","4":"\u91cd\u5e86","75":"\u6606\u660e"},"f_interest":{"1":"\u4e2d\u9910\u4ea4\u6d41","2":"\u897f\u70b9\u4ea4\u6d41","3":"\u7f8e\u98df\u6444\u5f71","4":"\u4eb2\u5b50\u6d3b\u52a8","5":"\u8425\u517b\u8bfe\u5802"},"level":["\u5165\u95e8","\u4e00\u822c","\u719f\u7ec3","\u8fbe\u4eba"]}'+')');
                    var topicid = "";
                </script>

                <script type="text/javascript" src="/js/publish3.js"></script>
                <script type="text/javascript"src="http://www.haodou.com/admin/v2/data/js/calendar/WdatePicker.js"></script>
            </form>
        </div>

        <div class="area_side">
            <!-- 所有小组  -->
            <div class="mgb30">
                <h2 class="cb item_t noline">所有小组</h2>
                <div class="plaza_category">
                    <b>·做美食</b>
                    <p>
                        <a href="http://group.haodou.com/33/" title="家常菜">家常菜</a>
                        <a href="http://group.haodou.com/32/" title="烘焙甜点">烘焙甜点</a>
                        <a href="http://group.haodou.com/31/" title="享受餐桌">享受餐桌</a>
                        <a href="http://group.haodou.com/8/" title="厨房宝典">厨房宝典</a>
                        <a href="http://group.haodou.com/6/" title="营养健康">营养健康</a>
                    </p>
                    <b>·爱生活</b>
                    <p>
                        <a href="http://group.haodou.com/34/" title="好好生活">好好生活</a>
                        <a href="http://group.haodou.com/26/" title="生活品牌馆">生活品牌馆</a>
                        <a href="http://group.haodou.com/35/" title="行摄天下">行摄天下</a>
                        <a href="http://group.haodou.com/23/" title="亲子乐园">亲子乐园</a>
                        <a href="http://group.haodou.com/38/" title="兴趣集市">兴趣集市</a>
                        <a href="http://group.haodou.com/30/" title="豆购联盟">豆购联盟</a>
                        <a href="http://group.haodou.com/28/" title="豆友会">豆友会</a>
                    </p>
                    <b>·站务交流</b>
                    <p>
                        <a href="http://www.haodou.com/help/center.php?do=feedback" title="意见反馈">意见反馈</a>
                        <a href="http://group.haodou.com/17/" title="公告">公告</a>
                    </p>
                </div>
            </div>
            <div class="mgb30 f_rank">
                <div class="cb item_t">
                    <a class="tab clk_act_top" id="top_tab_w" title="月" href="javascript:void(0);">月</a>
                    <span class="fr">&nbsp;</span>
                    <a class="tab clk_act_top sel" id="top_tab_m" title="周" href="javascript:void(0);">周</a>
                    <h2>小组活跃豆子</h2>
                </div>
                <ul class="cen_list_b clearfix toggle_act_top">
                    <li>
                        <span class="num num_1">1</span>
                        <a href="35618/" title="jinjerry" class="photo" target="_blank"><img src="http://avatar0.hoto.cn/22/8b/35618_48.jpg" alt="jinjerry" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_35618_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="35618/" title="jinjerry" target="_blank">jinjerry</a>
                            </p>
                            <p>本周发表了 66 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_2">2</span>
                        <a href="10000484/" title="倚兰听海" class="photo" target="_blank"><img src="http://avatar0.hoto.cn/64/98/10000484_48.jpg" alt="倚兰听海" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_10000484_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="10000484/" title="倚兰听海" target="_blank">倚兰听海</a>
                            </p>
                            <p>本周发表了 42 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_3">3</span>
                        <a href="1997129/" title="番茄小石头" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/49/79/1997129_48.jpg" alt="番茄小石头" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_1997129_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="1997129/" title="番茄小石头" target="_blank">番茄小石头</a>
                            </p>
                            <p>本周发表了 40 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_4">4</span>
                        <a href="7041633/" title="太原市小莉" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/61/72/7041633_48.jpg?v=15" alt="太原市小莉" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_7041633_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="7041633/" title="太原市小莉" target="_blank">太原市小莉</a>
                            </p>
                            <p>本周发表了 25 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_5">5</span>
                        <a href="3837/" title="爱跳舞的老太" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/fd/0e/3837_48.jpg" alt="爱跳舞的老太" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_3837_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="3837/" title="爱跳舞的老太" target="_blank">爱跳舞的老</a>
                            </p>
                            <p>本周发表了 21 个话题</p>
                        </div>
                    </li>
                </ul>
                <ul class="cen_list_b non clearfix toggle_act_top"></ul>
            </div>
            <div>
                <h2 class="item_t"><a href="#" title="" class="more_icon fr"><!-- 更多话题 --></a>热门话题</h2>
                <ul class="text_list">
                    <li>
                        <a href="5572987/" title="老方小雨" class="gray9 fr" target="_blank">老方小雨</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522384.html" title="【第128期】好问豆答：脆皮豆腐制作技巧" target="_blank">【第128期】好问豆答：脆</a>
                    </li>
                    <li>
                        <a href="3690/" title="风信子" class="gray9 fr" target="_blank">风信子</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522154.html" title="【烘焙甜点】导师6月第4课：抹茶麻薯面包" target="_blank">【烘焙甜点】导师6月第4课</a>
                    </li>
                    <li>
                        <a href="5572987/" title="老方小雨" class="gray9 fr" target="_blank">老方小雨</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522290.html" title="【烘焙甜点】无盐素油~南瓜酸奶亚麻籽面包" target="_blank">【烘焙甜点】无盐素油~南</a>
                    </li>
                    <li>
                        <a href="3340575/" title="瑞鸾之爱" class="gray9 fr" target="_blank">瑞鸾之爱</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522257.html" title="【学做家常菜】自制香辣多用途菌子油" target="_blank">【学做家常菜】自制香辣多</a>
                    </li>
                    <li>
                        <a href="7956136/" title="幸福精灵a" class="gray9 fr" target="_blank">幸福精灵a</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522330.html" title="【6月餐桌】叠出来的美味~葱香千层肉饼" target="_blank">【6月餐桌】叠出来的美味~</a>
                    </li>
                    <li>
                        <a href="6427096/" title="九九味" class="gray9 fr" target="_blank">九九味</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522282.html" title="【6月作业】烘焙甜点~流心芝士挞" target="_blank">【6月作业】烘焙甜点~流心</a>
                    </li>
                    <li>
                        <a href="683256/" title="紫豌豆" class="gray9 fr" target="_blank">紫豌豆</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522292.html" title="【初夏家常菜】酿枇杷酒" target="_blank">【初夏家常菜】酿枇杷酒</a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript" src="http://www.haodou.com/public/js/group/index.js"></script>
    </div>
</div>
<script type="text/javascript" src="/js/publish2.js"></script>
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
<div id="flo"></div>
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