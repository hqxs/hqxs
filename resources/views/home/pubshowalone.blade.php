@extends('layouts.master')
@section('title', $data->cate_title)
@section('name', $data->cate_name)
@section('content')
    {{--收藏--}}
<script type="text/javascript">
    $(function(){
        $('#coll').click(function(){
            var id = {{session('id')}};
            var aaid = {{$data->art_id}};
            if(!id){
                alert("请先登录");
            }else{
                $.ajax({
                    url:'/group/coll',
                    type:'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    data:{aid:aaid,uid:id},
                    success:function(data){
                        console.log(data)
                        if(data == 1){
                            $('#coll').replaceWith('<span class="btn_basic btn_j fr mgr10 fav_btn" >已收藏</span>')
                        }
                    },
                    dataType:'json'
                })
            }
        });
    })
</script>
    {{--关注--}}
<script type="text/javascript">
        $(function(){
            $('#foll').click(function(){
                var uid = {{session('id')}};
                var uuid = {{$data->id}};
                if(!uid){
                    alert("请先登录");
                }else{
                    $.ajax({
                        url:'/group/foll',
                        type:'post',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        data:{uuid:uuid,uid:uid},
                        success:function(data){
                            if(data == 1){
                                $('#foll').replaceWith('<span class="cared_of">已关注</span>')
                            }
                        },
                        dataType:'json'
                    })
                }
            });
        })
    </script>
    <script>
        $(function(){
            $('.log').click(function(){
                alert('请先登录！');
                window.location.href="/login";
            })
        })
    </script>
<div class="warp_shell clearfix">
    <div class="shell_up"></div>
    <div class="shell_mc clearfix">
        <div class="area_main" id="topic-content">
            <div id="global_topic_is_pai_content" _value="" style="display: none;"></div> <!-- common.js显示左侧二维码（去哪吃的话题） -->
            <div class="ftst mgb10"><a href="{{url('/group_index')}}">广场</a> &gt; <a href="{{url('grouplist/'.$data->cate_id)}}">{{$data->cate_name}}</a> &gt; {{$data->art_title}}</div>
            <div class="main_t mgb10">
                @if (!empty(session('id')))
                    <a href="{{url('group/create')}}" title="发表话题" class="btn_basic btn_d fr">发表话题</a>
                @else
                    <a href="#" title="发表话题" class="btn_basic btn_d fr log">发表话题</a>
                @endif
                <?php $p = 0?>
                @foreach($coll as $v)
                    @if(($v->coll_uid) == session('id'))
                        <span class="btn_basic btn_j fr mgr10 fav_btn" >已收藏</span>'
                        <?php $p = 1?>
                        @break
                    @endif
                @endforeach
                @if($p == 0)
                    @if (!empty(session('id')))
                    <a class="btn_basic btn_j fr mgr10 fav_btn" id="coll" href="javascript:///">加入收藏</a>
                    @else
                    <a href="#" class="btn_basic btn_j fr mgr10 fav_btn log">加入收藏</a>
                    @endif
                @endif
            </div>
            <div class="f_article f_article_bg">
                <h1 class="article_title posts_list">{{$data->art_title}} <span class="highlight"></span></h1>                <div id="article_cont" class="detail" >
                    <div class="about clearfix">
                        <div class="user_pto">
                            <a href="http://wo.haodou.com/3690/" title="{{$data->name}}" target="_blank" class="pto"><img src="http://avatar0.hoto.cn/6a/0e/3690_70.jpg" alt="风信子" width="70" height="70" /></a>
                        </div>
                        <div class="text">
                            <p class="mgb5">
                                <a class="mgr10" title="" href="http://wo.haodou.com/3690/">{{$data->name}}</a>
                                <a href="http://www.haodou.com/recipe/expert/apply" target="_blank"><i class="ico12 mod_v"></i></a>
                                <?php $a = 0?>
                                @foreach($foll as $v)
                                    @if(($v->foll_uid) == session('id'))
                                        <span class="cared_of">已关注</span>
                                        <?php $a = 1?>
                                        @break
                                    @endif
                                @endforeach
                                @if($a == 0)
                                    @if (!empty(session('id')))
                                    <a href="javascript:///" id="foll" class="care_of"><b class="orange">+</b>关注</a>
                                    @else
                                    <a href="javascript:///"class="care_of log"><b class="orange">+</b>关注</a>
                                    @endif
                                @endif
                            </p>
                            <p>
                                <span class="gray9 mgr10">发表于 {{$data->art_time}}</span>
                                <span class="gray9 mgr10">浏览数:9528</span>
                            </p>
                        </div>
                        <span class="mark_jing"></span>
                    </div>
                    <div class="main_text">
                        <p>{!! $data->art_content !!}</p>
                        <div class="act_btns tc ft12 cb">
                            <a class="btn_basic btn_g mgr10"  title="回复" href="#__cmt_content_comment"><i class="i_reply"></i>回复</a>
                            <div class="bdsharebuttonbox" style="width:20px;position: fixed;right: 8%;bottom: 40%; ">
                                <a href="#" class="bds_more" data-cmd="more"></a>
                                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

                        </div>
                        <p class="clearfix cb">
                            <a class="mgr10" href="http://www.haodou.com/s?wd=%25E6%258A%25B9%25E8%258C%25B6&tp=topic" target="_blank">抹茶</a>
                            <a class="mgr10" href="http://www.haodou.com/s?wd=%25E9%25BA%25BB%25E8%2596%25AF&tp=topic" target="_blank">麻薯</a>
                            <a class="mgr10" href="http://www.haodou.com/s?wd=%25E8%259C%259C%25E7%25BA%25A2%25E8%25B1%2586&tp=topic" target="_blank">蜜红豆</a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="comment">
                <div class="mod_comment clearfix">
                    <div class="pub_cmt_title">
                        <h2>
                            全部评论
                            <i class="lt"></i>
                            <i class="rt"></i>
                        </h2>
                    </div>
                    <?php $i = 1?>
                    @foreach($comm as $v)
                        @if($v['com_pid']==0)
                        <div class="cmt_item" style="_float:left;">
                            <div class="photo">
                                <a href="http://www.haodou.com/cook-32696/" title="{{$v['com_id']}}" target="_blank"><img src="http://avatar0.hoto.cn/b8/7f/32696_70.jpg" alt="{{$v['name']}}" width="70" height="70" /></a>
                                <p class="tc mgt5"><a href="http://www.haodou.com/cook-32696/" title="{{$v['name']}}">{{$v['name']}}</a></p>
                                <p class="mgt2 tc"><span class="gray6 mgr10"><span class="ico32 mod_level_7"></span> 金豆</span></p>
                            </div>
                            <div class="cmt_main pdb15 topic_cmt_main">
                                <span class="corner_bg"></span>
                                <p class="tr fl user_attr" style="width:97%">
                                    <span class="ft14" ><a _name="2" class="gray9">{{$i++}}楼</a></span>
                                </p>
                                <div class="cmt_text">{{$v['com_content']}}</div>
                                <p class="gray9 pd repd">
                                    <a href="javascript:///" data="{{$v['name']}}" data1 = '{{$i}}' class="subb"  class="fr mgl10 unfold_rpl" style="display:block;">回复</a>
                                    <span class="mgr10">发表于 {{date('Y-m-d h:i:s',$v['com_time'])}}</span>
                                </p>
                                <div class="sub_cmt resct sub_cmt_33377700" id="resct{{$i}}">
                                    <div class="resct{{$i}}">
                                    <?php $a = 1?>
                                    @foreach($comm as $vv)
                                        @if($vv['com_pid']==$v['com_id'])
                                    <ul class="img_txt clearfix">
                                        <li class="hidden_33383285">
                                            <a href="#" title="{{$vv['name']}}" class="img"><img src="3" alt="{{$vv['name']}}" width="48"></a>
                                            <div class="txt">
                                                <p class="clearfix">
                                                    <a href="javascript:///" data="{{$vv['com_name']}}" data1 = '{{$vv['com_low']}}' class="subb" style="float:right">回复</a>
                                                    <span class="gray9 fr mgr10">发表于 {{date('Y-m-d h:i:s',$vv['com_time'])}}</span>
                                                    <a href="#" title="{{$vv['name']}}" class="img" target="_blank">{{$vv['name']}}</a>
                                                </p>
                                                <p class=" ft14">
                                                    @<a href="#" target="_blank">{{$vv['com_uname']}}</a> {{$vv['com_content']}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                        @endif
                                    @endforeach
                                    </div>
                                    <!-- ajax回复开始 -->
                                    <form id="reply_form{{$i}}" method="post">
                                        <input type="hidden" name='_token' value="{{csrf_token()}}">
                                        <input type="hidden" name='com_aid' value="{{$v['com_aid']}}">
                                        <input type="hidden" name='com_pid' value="{{$v['com_id']}}">
                                        {{--<input type="hidden" name='com_uname' value="{{$v['com_name']}}">--}}
                                        <input type="hidden" name='com_low' value="{{$i}}">
                                        <div class="write clearfix mgb10 rere" id="reply{{$i}}" style="display: none;">
                                            <div class="cmt_main clearfix cmt_main_reply">
                                                <textarea name="com_content" id="textarea{{$i}}" cols="" rows="" class="fl gray9 focus"></textarea>
                                                <div class="clearfix cb">
                                                    <input type="button" class="btn_60 fr ajaxreply" data = '{{$i}}' data1="{{$v['com_id']}}" data2="{{$v['name']}}" value="回复" >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- ajax回复结束-->
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <div class="bd_page" style="_zoom:1;">
                        <span class="cur">1</span><a href="?page=2">2</a><span class="next"><a href="?page=2">下一页<span class="pagePre"></span></a></span>
                    </div>

                    <!-- 回复begin -->
                    <form action={{url('group/comment')}} method="post" id="form">
                        {{csrf_field()}}
                        <a name="__cmt_content_comment"></a>
                        <input type="hidden" name="com_aid" value="{{$data->art_id}}">
                        <div class="write clearfix mgt40 mgb20">
                            <div class="photo"><a><img width="70" height="70" src="http://avatar0.hoto.cn/c8/dc/10673352_70.jpg" alt="sjason991" /></a></div>
                            <div class="cmt_main clearfix">
                                <textarea id="topic_comment_content_reply" name="com_content"></textarea>
                                <div class="clearfix cb" style="position:relative;">
                                    <input type="button" class="btn_60 fr" id='sub' value="回复"/>
                                    <div class="mgt5 fl" id="sync_div_0"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        $(function(){
                            var nam
                            $('.subb').live('click',function(){
//                            $('.subb').click(function(){
                                var id = {{session()->get('id')}};
                                if(!id){
                                    alert("请先登录");
                                }else{
                                    $('.rere').css('display','none');
                                    nam = $(this).attr("data");
                                    var idd = $(this).attr("data1");
                                    $('#textarea'+idd).html('');
                                    $('#resct'+idd).css('display','block');
                                    $('#reply'+idd).css('display','block');
                                    $('#textarea'+idd).attr('placeholder','@'+nam);
                                }
                            })
                            $('.ajaxreply').click(function(){
                                var iid = $(this).attr("data");
                                var ppd = $(this).attr("data1");
                                $( '#reply_form'+iid).each(function(index,vel){
                                    var form_data = $(this).serialize();

                                    $.ajax({
                                        type:'post',
                                        url:'/group/comment1',
                                        data:form_data + '&com_uname='+nam,
                                        success:function(data){
                                            var html
                                            for(var i=0;i<data.length;i++){
                                                if(data[i].com_nums == 2 && data[i].com_pid == ppd){
                                                    html += '<ul class="img_txt "><li class="hidden_33384497"><a href="#" title="" class="img"><img src="#" alt="'+data[i].name+'" width="48" uid="6328636"></a><div class="txt"><p class="clearfix"><a href="javascript:///" data='+ data[i].com_name +' data1 = '+ data[i].com_low +' class="subb" style="float:right">回复</a><span class="gray9 fr mgr10">发表于 <i id="timespan">' + data[i].com_time + '</i></span><a href="#" title="'+data[i].name+'" class="img" target="_blank">'+data[i].com_name+':</a></p><p class=" ft14">@<a href="#" target="_blank">'+data[i].com_uname+'</a> '+data[i].com_content+' </p></div></li></ul>';
                                                 }
                                            }
                                            $('.resct'+iid).html(html)
                                        },
                                        dataType:'json'
                                    })
                                })
                            })
                        })
                    </script>
                    <script type="text/javascript">
                        $(function(){
                            $('#sub').click(function(){
                                var id = {{session()->get('id')}};
                                if(!id){
                                    alert("请先登录");
                                }else if($('#topic_comment_content_reply').val()==''){
                                    alert("请输入内容");
                                }else{
                                    $("#form").submit()
                                }
                            })
                        })
                    </script>

                    <!-- 回复end -->

                </div>
            </div>
        </div>

        <div class="area_side">
            <div class="forum_intro forum_intro_side">
                <ul class="img_text">
                    <li>
                        <a class="img" title="烘焙甜点" href="http://group.haodou.com/32/"><img alt="烘焙甜点"   src="http://img4.hoto.cn/res/images/public/group/32.jpg?v=2" style="width: 70px"></a>
                        <div class="text">
                            <h1><a class="gray3" href="{{url('grouplist/'.$data->cate_id)}}">{{$data->cate_name}}</a></h1>
                            <p class="gray9">创建时间:2015-06-24</p>
                            <p class="gray9">话题数： 15868</p>
                        </div>
                    </li>
                </ul>
            </div>






{{--==================================================================================================================================--}}
{{--==================================================================================================================================--}}
            <div class="v2_side_ads mgb30"><a href="http://group.haodou.com/topic-521512.html"><img src="http://www.haodou.com/public/images/blank.gif" original="http://img1.hoto.cn/haodou/g/3/20170616/55278f3ba1f.jpg?v=149758517756" width="235" alt=""></a></div>
            <div id="dt_MRecVAV"></div>
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
    var __cmt_cate = 32;
    var __cmt_item = 522154;
    var __cmt_channel = 'topic';
    var __cmt_body = 'comment';
    var __cmt_sort = 'asc';
    var _topic_title = "【烘焙甜点】导师6月第4课：抹茶麻薯面包"; //分享--传递的标题


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
    var cate_id = 32; //全局变量


    hd.tools.sync.spread($("#sync_div_0"));

    window.onload = function(){
        var floor = 15, str = location.hash, is_reply = false, pos=0, scroll_top = 0;
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
@endsection