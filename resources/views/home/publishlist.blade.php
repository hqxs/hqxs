@extends('layouts.master')
@section('title', $cate->cate_title)
@section('name', $cate->cate_name)
@section('content')
<script>
    $(function(){
        $('#artlist').click(function(){
            alert('请先登录！');
            window.location.href="/login";
        })
    })
</script>
<div class="warp_shell clearfix">
    <div class="shell_up"></div>
    <div class="shell_mc clearfix">
        <div class="area_main">
            <div class="ftst mgb10"><a href="{{url('/group_index')}}" title="广场">广场</a> &gt; {{$cate->cate_name}}</div>
            <div class="forum_intro">
                <ul class="img_text">
                    <li>
                        <a href="http://group.haodou.com/32/" title="{{$cate->cate_name}}" target="_blank" class="img"><img src="http://img4.hoto.cn/res/images/public/group/32.jpg?v=3" width="70" height="70" alt="{{$cate->cate_name}}"/></a>
                        <div class="text">
                            <h1>{{$cate->cate_name}}</h1>
                            <p class="gray9 mgb10">创建时间：2015-06-24 | 话题数：15861</p>
                            <p><b>简　介：</b>{{$cate->cate_title   }}</p>
                            <p><b>管理员：</b>
                                <a href="http://wo.haodou.com/27655/" title="">柠檬沫</a>
                                ,
                                <a href="http://wo.haodou.com/32696/" title="">樱桃番茄果</a>
                                ,
                                <a href="http://wo.haodou.com/2563529/" title="">好豆</a>
                                ,
                                <a href="http://wo.haodou.com/5664442/" title="">好豆小组</a>
                            </p>
                            <p><b>组　长：</b>
                                <a href="http://wo.haodou.com/442332/" title="">飘儿78</a>
                            </p>
                            <p><b>小组长：</b>
                                <a href="http://wo.haodou.com/3837/" title="">爱跳舞的老太</a>
                                ,
                                <a href="http://wo.haodou.com/4098/" title="">芷萍</a>
                                ,
                                <a href="http://wo.haodou.com/113473/" title="">籣草児</a>
                                ,
                                <a href="http://wo.haodou.com/666795/" title="">夏日心语</a>
                                ,
                                <a href="http://wo.haodou.com/1118055/" title="">秋天到枫叶红</a>
                                ,
                                <a href="http://wo.haodou.com/5309324/" title="">亮晶晶妈</a>
                                ,
                                <a href="http://wo.haodou.com/20500/" title="">尚志李波</a>
                                ,
                                <a href="http://wo.haodou.com/9988915/" title="">是草莓酱啊</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <h2 class="dhead mgb10" id="group_dhead_pos">
                 @if (!empty(session('id')))
                    <a href="{{url('group/create')}}" title="发表话题" class="btn_basic btn_d fr">发表话题</a>
                 @else
                    <a href="#" title="发表话题" class="btn_basic btn_d fr" id="artlist">发表话题</a>
                @endif
                    <a href="http://group.haodou.com/32/" title="全部" class="sel">全部</a>
            </h2>

            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="posts_list">
                <tr>
                    <th width="54%" class="title"><span class="mgl20">标题</span></th>
                    <th width="16%"> <a href="http://group.haodou.com/32/?order=publish_d" class="gray3">发表人/时间<span class="sort_down_gray"></span></a></th>
                    <th width="14%">浏览/回复</th>
                </tr>
                @foreach ($data as $v)
                <tr  class="bg" >
                    <td class="title b2">
                        <span class="top"></span><a href="{{url('/aloneshow/'.$v->art_id)}}" title="{{$v->art_title}}" class="t orange" target="_blank">{{$v->art_title}}</a><span class="img"></span><span class="huo"></span>
                    </td>
                    <td class="b2">
                        <a href="http://wo.haodou.com/3690/" title="{{$v->name}}" target="_blank">{{$v->name}}</a>
                        <p class="gray9">{{$v->art_time}}</p>
                    </td>
                    <td class="b2"><span>9301/41</span></td>
                </tr>
                @endforeach
            </table>


            <style>
                .cd li{
                    float: left;
                }
            </style>
            <div class="bd_page cb">
                {{$data->links()}}
                {{--<span class="cur">1</span>--}}
                {{--<a href="http://group.haodou.com/32/p-2/">2</a>--}}
                {{--<a href="http://group.haodou.com/32/p-3/">3</a>--}}
                {{--<a href="http://group.haodou.com/32/p-4/">4</a>--}}
                {{--<a href="http://group.haodou.com/32/p-5/">5</a>--}}
                {{--<span style="margin-right:4px;">...</span>--}}
                {{--<a href="http://group.haodou.com/32/p-772/">772</a>--}}
                {{--<span class="next">--}}
                    {{--<a href="http://group.haodou.com/32/p-2/">下一页--}}
                        {{--<span class="pagePre"></span>--}}
                    {{--</a>--}}
                {{--</span>--}}
            </div>
        </div>
        <div class="area_side">
            <div class="mgb30">
                <h2 class="cb item_t noline">所有小组</h2>
                <div class="plaza_category">
                    @foreach ($datas as $v)
                        @if($v->cate_pid==0)
                            <b>·{{$v->cate_name}}</b>
                        @endif
                        <p>
                            @foreach($datas as $vv)
                                @if($vv->cate_pid==$v->cate_id)
                                    <a href="{{url('grouplist/'.$vv->cate_id)}}" title="{{$vv->cate_name}}">{{$vv->cate_name}}</a>
                                @endif
                            @endforeach
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="v2_side_ads mgb30"><a href="http://group.haodou.com/topic-521868.html"><img src="http://www.haodou.com/public/images/blank.gif" original="http://img1.hoto.cn/haodou/g/3/20170619/7c7afbe08e4.jpg?v=149785542293" width="235" alt=""></a></div>
            <script type="text/javascript">
                var cpro_id="u2311774";
                (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"300",rsi1:"250",pat:"17",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#000000",titSU:"0"}
            </script>
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
            <div class="mgb30 f_rank">
                <div class="cb item_t">
                    <a class="tab clk_act_top" id="top_tab_w" title="月" href="javascript:void(0);" _cate_id="32">月</a>
                    <a class="tab clk_act_top sel" id="top_tab_m" title="周" href="javascript:void(0);">周</a>
                    <h2>小组活跃豆子</h2>
                </div>
                <ul class="cen_list_b clearfix toggle_act_top">
                    <li>
                        <span class="num num_1">1</span>
                        <a href="http://wo.haodou.com/6486565/" title="甜丝丝的爱" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/25/fa/6486565_48.jpg?v=44" alt="甜丝丝的爱" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_6486565_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="http://wo.haodou.com/6486565/" title="甜丝丝的爱" target="_blank">甜丝丝的爱</a>
                            </p>
                            <p>本周发表了 6 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_2">2</span>
                        <a href="http://wo.haodou.com/797406/" title="食a色" class="photo" target="_blank"><img src="http://avatar0.hoto.cn/de/2a/797406_48.jpg" alt="食a色" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_797406_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="http://wo.haodou.com/797406/" title="食a色" target="_blank">食a色</a>
                            </p>
                            <p>本周发表了 6 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_3">3</span>
                        <a href="http://wo.haodou.com/3340575/" title="瑞鸾之爱" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/1f/f9/3340575_48.jpg" alt="瑞鸾之爱" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_3340575_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="http://wo.haodou.com/3340575/" title="瑞鸾之爱" target="_blank">瑞鸾之爱</a>
                            </p>
                            <p>本周发表了 4 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_4">4</span>
                        <a href="http://wo.haodou.com/5070249/" title="美食榴莲" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/a9/5d/5070249_48.jpg?v=1" alt="美食榴莲" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_5070249_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="http://wo.haodou.com/5070249/" title="美食榴莲" target="_blank">美食榴莲</a>
                            </p>
                            <p>本周发表了 3 个话题</p>
                        </div>
                    </li>
                    <li>
                        <span class="num num_5">5</span>
                        <a href="http://wo.haodou.com/7230756/" title="孩妈妮妮" class="photo" target="_blank"><img src="http://avatar0.hoto.cn/24/55/7230756_48.jpg" alt="孩妈妮妮" width="48" height="48" /></a>
                        <div class="name">
                            <p>
                                <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_7230756_w" title="加关注"><b class="orange">+</b>关注</a>
                                <a href="http://wo.haodou.com/7230756/" title="孩妈妮妮" target="_blank">孩妈妮妮</a>
                            </p>
                            <p>本周发表了 3 个话题</p>
                        </div>
                    </li>
                </ul>
                <ul class="cen_list_b non clearfix toggle_act_top"></ul>
            </div>
            <div>
                <h2 class="item_t">热门话题</h2>
                <ul class="text_list">
                    <li>
                        <a href="http://wo.haodou.com/3340575/" title="瑞鸾之爱" class="gray9 fr" target="_blank">瑞鸾之爱</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522570.html" title="【6月作业】烘焙甜点 别样的可可烤蛋白" target="_blank">【6月作业】烘焙甜点 别样</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/6427096/" title="九九味" class="gray9 fr" target="_blank">九九味</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522458.html" title="【6月作业】烘焙甜点-蔓越莓奶冻蛋糕卷" target="_blank">【6月作业】烘焙甜点-蔓越</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/7230756/" title="孩妈妮妮" class="gray9 fr" target="_blank">孩妈妮妮</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522804.html" title="【6月作业】内外反做的抹茶软欧包" target="_blank">【6月作业】内外反做的抹</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/3340575/" title="瑞鸾之爱" class="gray9 fr" target="_blank">瑞鸾之爱</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522648.html" title="【6月作业】烘焙甜点 抹茶麻薯红豆面包" target="_blank">【6月作业】烘焙甜点 抹茶</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/6427096/" title="九九味" class="gray9 fr" target="_blank">九九味</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522840.html" title="【6月作业】烘焙甜点-抹茶麻薯面包" target="_blank">【6月作业】烘焙甜点-抹茶</a>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                var cpro_id="u2286790";
                (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"250",rsi1:"250",pat:"6",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#000000",titSU:"0",ptbg:"90",piw:"0",pih:"0",ptp:"0"}
            </script>
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
        </div>
    </div>
</div>
<script type="text/javascript" src="//img4.hoto.cn/proxy/?js=group/index.js&v=59,0,1482387313"></script>

<script  type="text/javascript">

    //‘精华’ 的定位
    window.onload = function(){
        var str = location.hash, scroll_top = 0;
        if(str){
            str = str.replace('#', '');
            if(str == 'digest')
            {
                var pos = $("#group_dhead_pos").offset();

                //滚动条离顶部的高度
                if(pos){
                    if(document.documentElement && document.documentElement.scrollTop)
                        scroll_top = document.documentElement.scrollTop;
                    else if(document.body)
                        scroll_top = document.body.scrollTop;

                    if(!scroll_top) {
                        window.scroll(0, parseInt(pos.top) - 40); //用户未拉动滚动条时，重新定位
                    }
                }
            }
        }
    };
    window.onscroll = function() { return false; };

    // 去哪吃小组城市收起/展开切换
    $('#group_city_btn').click(function (){
        var $t = $(this), assign = $t.attr('_assign');
        if ('0' == assign){
            $("#group_city_info").width('659');
            $("#group_all_city").show();
            $t.attr('title', '收起').attr('_assign', '1').html('收起↑');
        }else{
            $("#group_city_info").width('400');
            $("#group_all_city").hide();
            $t.attr('title', '展开全部').attr('_assign', '0').html('展开全部↓');
        }
    });


</script>
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