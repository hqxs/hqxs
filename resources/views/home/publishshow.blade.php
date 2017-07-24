@extends('layouts.master')
@section('title', $data->cate_title)
@section('name', $data->cate_name)
@section('content')

<div class="warp_shell clearfix">
    <div class="shell_up"></div>
    <div class="shell_mc clearfix">
        <div class="area_main" id="topic-content">
            <div id="global_topic_is_pai_content" _value="" style="display: none;"></div> <!-- common.js显示左侧二维码（去哪吃的话题） -->
            <div class="ftst mgb10"><a href="http://group.haodou.com/">广场</a> &gt; <a href="http://group.haodou.com/6/">{{$data->cate_name}}</a> &gt;{{$data->art_title}}</div>
            <div class="main_t mgb10">
                <a class="btn_basic btn_d fr" title="发表话题" href="{{url('group/create')}}">发表话题</a>                            </div>
            <div class="f_article f_article_bg">
                <h1 class="article_title posts_list">{{$data->art_title}}</h1>                <div id="article_cont" class="detail" >
                    <div class="about clearfix">
                        <div class="user_pto">
                            <a href="http://wo.haodou.com/10673352/" title="{{$data->name}}" target="_blank" class="pto"><img src="http://avatar0.hoto.cn/c8/dc/10673352_70.jpg" alt="{{$data->name}}" width="70" height="70" /></a>
                        </div>
                        <div class="text">
                            <p class="mgb5">
                                <span class="manage">
                                    <span class="list tab" title="">
                                        <span>管理话题 <i style="background-position: 0px -1275px;"></i></span>
                                        <span class="sub_menu" style="display: none;">
                                                <a href="{{url('group/'.$data->art_id.'/edit')}}">编辑</a> <br/>
 											    <a id="del" href="javascript:void(0);">删除</a>
                                        </span>
                                    </span>
                                </span>
                                <a class="mgr10" title="" href="http://wo.haodou.com/10673352/">{{$data->name}}</a>                                                                                            </p>
                            <p>
                                <span class="gray9 mgr10">发表于 {{$data->art_time}}</span>
                                <span class="gray9 mgr10">收藏数:0</span>
                                <span class="gray9 mgr10">浏览数:{{$data->art_view}}</span>
                            </p>
                        </div>
                        <script>
                            $(function(){
                                $('.manage').hover(function(){
                                    $('.sub_menu').css('display','block')
                                },function(){
                                    $('.sub_menu').css('display','none')
                                })
                            })
                        </script>
                    </div>
                    <div class="main_text">
                        <p>{!! $data->art_content !!}</p>
                        <div class="wealth_record cb"></div>
                    </div>
                </div>
            </div>

            <div id="comment">
                <div class="mod_comment clearfix">

                    <!-- 回复begin -->
                    {{--<form action="?do=publicComment" method="post" class="">--}}
                        {{--<a name="__cmt_content_comment"></a>--}}
                        {{--<input type="hidden" name="reply_id" value="0" />--}}
                        {{--<input type="hidden" name="syn" id="syn_0" value="" />--}}
                        {{--<input type="hidden" name="page" value="1" />--}}
                        {{--<input type="hidden" name="floor" value="1" />--}}
                        {{--<div class="write clearfix mgt40 mgb20">--}}
                            {{--<div class="photo"><a><img width="70" height="70" src="http://avatar0.hoto.cn/c8/dc/10673352_70.jpg" alt="{{$data->name}}" /></a></div>--}}
                            {{--<div class="cmt_main clearfix">--}}
                                {{--<textarea id="topic_comment_content_reply" name="content"></textarea>--}}
                                {{--<input type="hidden" value="9ka3e3u4r1dq258lbuof4udi63" id="_UPHASH" />--}}
                                {{--<script type="text/javascript">--}}
                                    {{--KindEditor.lang({--}}
                                        {{--hide : '隐藏内容',--}}
                                        {{--phiz : '插入表情'--}}
                                    {{--});--}}
                                    {{--KindEditor.ready(function(K) {--}}
                                        {{--editor = K.create('#topic_comment_content_reply', {--}}
                                            {{--resizeType : 0,--}}
                                            {{--allowPreviewEmoticons : false,--}}
                                            {{--allowImageUpload : false,--}}
                                            {{--urlType: 'absolute',--}}
                                            {{--width: '575px',--}}
                                            {{--height: '170px',--}}
                                            {{--items : ['phiz', 'link', 'hide']--}}
                                        {{--});--}}
                                        {{--var html = '<span style="font-size:12px;float:right;padding:2px;"><a href="http://wo.haodou.com/topic.php?do=publicComment&topic_id=522809&page=1&floor=1" target="_blank">使用高级模式回复</a></span>';--}}
                                        {{--jQuery(editor.toolbar.div[0]).append(html);--}}
                                        {{--jQuery(editor.edit.iframe[0].contentWindow).focus(function() {--}}
                                            {{--if(!hd.login.isLogin())--}}
                                                {{--hd.login.showLogin();--}}
                                        {{--});--}}
                                    {{--});--}}
                                {{--</script>--}}

                                {{--<div class="clearfix cb" style="position:relative;">--}}
                                    {{--<input type="submit" class="btn_60 fr" name="reply_submit" rid="0" value="回复"  />--}}
                                    {{--<div class="mgt5 fl" id="sync_div_0"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                    <!-- 回复end -->

                </div>
            </div>
        </div>

        <div class="area_side">
            <div class="forum_intro forum_intro_side">
                <ul class="img_text">
                    <li>
                        <a class="img" title="营养健康" href="http://group.haodou.com/6/"><img alt="营养健康"   src="http://img4.hoto.cn/res/images/public/group/6.jpg?v=2" style="width: 70px"></a>
                        <div class="text">
                            <h1><a class="gray3" href="http://group.haodou.com/6/">营养健康</a></h1>
                            <p class="gray9">创建时间:2012-05-29</p>
                            <p class="gray9">话题数： 21972</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="v2_side_ads mgb30"><a href="http://group.haodou.com/topic-521512.html"><img src="http://www.haodou.com/public/images/blank.gif" original="http://img1.hoto.cn/haodou/g/3/20170616/55278f3ba1f.jpg?v=149758517756" width="235" alt=""></a></div>
            <div class="v2_side_ads mgb30" style="width:200px; height:235px; margin:0 auto;">
                <script type="text/javascript">
                    var cpro_id="u2311774";
                    (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"300",rsi1:"250",pat:"17",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#000000",titSU:"0"}
                </script>
                <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
            </div>


            <div>
                <h2 class="item_t"><a class="more_icon fr" href="http://group.haodou.com/6/">更多话题</a>本组精华话题</h2>
                <ul class="text_list">
                    <li>
                        <a class="gray9 fr" title="花花1977" href="http://wo.haodou.com/7719734/" target="_blank">花花1977</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522663.html">【考生饮食】这六瓜是宝</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="英英私房菜" href="http://wo.haodou.com/659393/" target="_blank">英英私房菜</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522649.html">【考生饮食】蒜香蒸茄子</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="玉廚娘" href="http://wo.haodou.com/5350230/" target="_blank">玉廚娘</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522793.html">【考生饮食】粉葛赤小豆</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="小英子的美食界" href="http://wo.haodou.com/2329732/" target="_blank">小英子的美食</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522642.html">【营养健康】家庭自发海</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="花花1977" href="http://wo.haodou.com/7719734/" target="_blank">花花1977</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522569.html">【女性养生】夏季吃出白</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="心随彧动" href="http://wo.haodou.com/5998583/" target="_blank">心随彧动</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522601.html">【考生饮食】黄芪炖鸡汤</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="大海微澜" href="http://wo.haodou.com/188972/" target="_blank">大海微澜</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522624.html">【考生饮食】不尽回味的</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="幸福精灵a" href="http://wo.haodou.com/7956136/" target="_blank">幸福精灵a</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-522284.html">【考生饮食】清热解毒又</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="倚兰听海" href="http://wo.haodou.com/10000484/" target="_blank">倚兰听海</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-512976.html">【春时清淡】每天一杯，</a>
                    </li>
                    <li>
                        <a class="gray9 fr" title="花花1977" href="http://wo.haodou.com/7719734/" target="_blank">花花1977</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-521719.html">【考生饮食】夏天养生10</a>
                    </li>
                </ul>
            </div>
            <div id="dt_MRecVAV"></div>

            <div id='float_show' style="width:235px; height:500px;">
                <script type="text/javascript">
                    /*自定义标签云，创建于2013-9-24*/
                    var cpro_id = "u1373771";
                </script>
                <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("div.cmt_text").each(function() {
            $(this).html(hd.tools.parse_emotion($(this).html(), 60));
        });

        $(".sub_cmt ul li .txt .ft14").each(function() {
            $(this).html(hd.tools.parse_emotion($(this).html(), 30));
        });
    });

    $(function (){
        $("div.cmt_text img").each(function() {
            var img = $(this),
                url = img.attr('src');
            if (/\/(topic|diary)\//.test(url)) {
                img.css('cursor', 'pointer')
                    .attr('title', '点击查看原图')
                    .click(function() {
                        window.open(url.replace('.jpg', '.thumb.jpg'), '_blank');
                        return false;
                    });
            }
        });
    });

    window.onload = function() {
        $("div.cmt_text img").each(function() {
            var img = $(this);
            if (img.width() > 550) {
                img.width('550px');
            }
        });
    }
</script>

<script type="text/javascript">
    $('.f_article .img_show').hover(function(){$(this).find('.share').show();},function(){$(this).find('.share').hide();});
    var __cmt_cate = 6;
    var __cmt_item = 522809;
    var __cmt_channel = 'topic';
    var __cmt_body = 'comment';
    var __cmt_sort = 'asc';
    var _topic_title = "f"; //分享--传递的标题


    $('div.main_text img:not(a img)').each(function(e){
        var src = $(this).attr('src');
        if(/^http:\/\/img3/i.test(src)) {
            src = src.replace(/\.jpg\b/ig, '.thumb.jpg');
        } else {
            return;
        }
        $(this).wrap('<a href="'+src+'" title="点击查看原图" target="_blank"></a>');
    });

</script>
<script type="text/javascript" src="//img4.hoto.cn/proxy/?js=tools/common.sync.js,tools/common.share.js,center/topic.js,tools/common.autofixed.js&v=59,0,1490086629"></script>
<script type="text/javascript">
    var cate_id = 6; //全局变量


    hd.tools.sync.spread($("#sync_div_0"));

    window.onload = function(){
        var floor = 0, str = location.hash, is_reply = false, pos=0, scroll_top = 0;
        if(str){
            str = str.replace('#', '');
            pos = str.indexOf("_");

            if(pos == -1){
                floor = str;
                pos = $("a[_name="+floor+"]").parent().parent().parent().parent().offset();
            }
            else{
                floor = str.substr(0, pos);
                pos = $("a[_name="+floor+"]").parent().parent().parent().parent().find("a[group='hidden']").eq(0).offset();
                $("#more_topic_cmt_btn_"+floor).click();
            }

            //滚动条离顶部的高度
            if(pos){
                if(document.documentElement && document.documentElement.scrollTop)
                    scroll_top = document.documentElement.scrollTop;
                else if(document.body)
                    scroll_top = document.body.scrollTop;

                if(!scroll_top) {
                    window.scroll(0, parseInt(pos.top) - 80); //用户未拉动滚动条时，重新定位
                }
            }
        }
        hd.tools.autofixed($('#float_show'), 40);
    };

    window.onscroll = function() { return false; };
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


<script>
    (function(){
        var bp = document.createElement('script');
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<script>
    $('#del').click(function(){
        var html = '<div id="_comfrim" style="position: fixed; left: 386.5px; top: 259.5px; z-index: 20000;"><div class="public_elastic_layer"><dl><dt class="f14 b" style="cursor: move;"><a href="javascript://" class="ico20 popclose">&nbsp;</a><span mod="title">好豆网温馨提示</span></dt><dd><p class="f14" mod="content" style="text-align:center">确定删除该话题？删除后不能恢复哦！</p></dd><dd class="atn tc"><a href="javascript://"  class="dbtn btn_green">确定</a><a href="javascript://" mod="cancel" class="dbtn btn_gray" style="margin-left:15px">取消</a></dd></dl></div></div><div style="position: absolute; left: 0px; top: 0px; width: 100%; z-index: 19990; background: rgb(0, 0, 0); opacity: 0.5; height: 2238px;"></div>';
        $('#flo').html(html);
        $('.btn_green').click(function(){
            $.post("{{url('/group')}}/"+{{$data->art_id}} ,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                if(data == 0){
                    alert('删除失败！')
                }else{
                    window.location.href = '/grouplist/'+ data
                }
            });
            var html = '';
            $('#flo').html(html);
        });

        $('.btn_gray').click(function(){
            var html = '';
            $('#flo').html(html);
        })
    })
</script>
</body>
</html>
@endsection