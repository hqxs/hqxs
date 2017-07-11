@extends('layouts.master')
@section('title', "好豆美食广场,聚集天下美食爱好者,拥有庞大的美食用户群体,在这里能了解一手的美食动态,吃货们尝鲜必来的地方")
@section('name', "好豆美食广场")
@section('content')
<script>
        window.onload=function(){
            $.ajax({
                url:'/groups/weather',
                success:function(data){
                    console.log(data);
                    var a = data.weatherinfo.city;
                    var b = data.weatherinfo.weather;
                    var c = data.weatherinfo.temp1;
                    var d = data.weatherinfo.temp2;
                    $('#weath').html(a+b+c+d);
                },
                dataType:'json'
            })
        }
</script>
<div id="weath" style="color:red"></div>
<div class="warp_shell clearfix">
    <div class="shell_up"></div>
    <div class="shell_mc clearfix">
        <div class="clearfix">
            <div class="area_side_lt2x">
                <h2 class="cb item_t noline">所有小组</h2>
                <div class="plaza_category">
                    @foreach ($data as $v)
                    @if($v->cate_pid==0)
                    <b>{{$v->cate_name}}</b>
                    @endif
                    <p>
                        @foreach($data as $vv)
                        @if($vv->cate_pid==$v->cate_id)
                        <a href="{{url('grouplist/'.$vv->cate_id)}}" title="{{$vv->cate_name}}">{{$vv->cate_name}}</a>
                        @endif
                        @endforeach
                    </p>
                    @endforeach
                </div>
            </div>
            <div class="area_maincn">
                <h2 class="cb item_t noline">好豆头条</h2>
                <ul class="img_text_v index_focus">
                    <li>
                        <div class="img">
                            <a href="http://group.haodou.com/topic-522700.html" title="蒜蓉辣酱烧鮟鱇鱼" target="_blank"><img src="http://img1.hoto.cn/haodou/center/group_topline/center_group_topline_59530e1b33d69.jpg?v=14986153233" width="408" height="275" alt="蒜蓉辣酱烧鮟鱇鱼"/></a>
                            <span class="bg"></span>
                            <a href="http://group.haodou.com/topic-522700.html" title="蒜蓉辣酱烧鮟鱇鱼" class="name_up" target="_blank">蒜蓉辣酱烧鮟鱇鱼</a>
                            <p class="info">中国人特别喜欢名字带点吉祥寓意的东西，比如，你常看到葫芦与蝙蝠的搭配，其实就是福禄的意思；蝴蝶与猫嬉戏，其实就是耄耋（mào di...</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="area_side">
                <h2 class="cb item_t noline">好豆广场达人</h2>
                <div class="haodou_master">
                    <div class="uc_img"><a href="http://wo.haodou.com/188972/" title="大海微澜" target="_blank"><img src="http://avatar0.hoto.cn/2c/e2/188972_70.jpg" width="70" height="70" alt="" /></a></div>
                    <div class="auto_nt">
                        <p><a class="b" href="http://wo.haodou.com/188972/" title="大海微澜" target="_blank">大海微澜</a><i class="sex female"></i></p>
                        <p>来自：<span class="gray9">哈尔滨</span></p>
                        <p>喜欢行摄美景，热衷分享美好心情</p>
                    </div>
                </div>
                <h3 class="cb ft12">TA的人气话题</h3>
                <ul class="ttx_list padnone">
                    <li>·<a href="http://group.haodou.com/topic-225186.html" title="【小病食疗小妙招】藏传治疗便秘食疗方" target="_blank">【小病食疗小妙招】藏传治疗便秘食...</a></li>
                    <li>·<a href="http://group.haodou.com/topic-321037.html" title="【享受餐桌】冬季进补食疗小方——棉花籽蒸鹅蛋" target="_blank">【享受餐桌】冬季进补食疗小方——...</a></li>
                    <li>·<a href="http://group.haodou.com/topic-133199.html" title="【回家过年】我和姐姐撒年糕" target="_blank">【回家过年】我和姐姐撒年糕</a></li>
                    <li>·<a href="http://group.haodou.com/topic-133328.html" title="【办年货 晒风俗】终于抢上电脑晒年货了" target="_blank">【办年货 晒风俗】终于抢上电脑晒...</a></li>
                    <li>·<a href="http://group.haodou.com/topic-351479.html" title="【厨房私家小妙招】懒人版的厨房小妙招" target="_blank">【厨房私家小妙招】懒人版的厨房小...</a></li>
                    <li>·<a href="http://group.haodou.com/topic-132843.html" title="【原创】又见冰上捕鱼人" target="_blank">【原创】又见冰上捕鱼人</a></li>
                    <li>·<a href="http://group.haodou.com/topic-158655.html" title="带您见识日本舞妓舞娘" target="_blank">带您见识日本舞妓舞娘</a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix">
            <div class="area_side_lt2x">
                <h2 class="cb item_t mod_pz"><a class="more_icon fr" href="//www.haodou.com/topic/home" title="更多专题" target="_blank">更多专题</a>专题</h2>
                <div class="pho_ads mgt10">
                    <a href="http://group.haodou.com/topic-291257.html" title="【营养餐桌】健脾祛湿度暑天" target="_blank"><img src="http://img1.hoto.cn/haodou/center/group_topic/center_group_topic.jpg?v=149723582958" width="235" height="80" alt="【营养餐桌】健脾祛湿度暑天" /></a>
                    <p class="mgt10"><a href="http://group.haodou.com/topic-291257.html" title="【营养餐桌】健脾祛湿度暑天" target="_blank">【营养餐桌】健脾祛湿度暑天</a></p>
                    <p>有句古话叫：“千寒易除，一湿难去。湿性黏浊，如油入面。”</p>
                </div>
                <h2 class="cb item_t mod_pz"><a class="more_icon fr" href="//www.haodou.com/act/home" title="更多活动" target="_blank">更多活动</a>活动</h2>
                <div class="pho_ads mgt10">
                    <a href="hhttp://group.haodou.com/topic-520584.html" title="好豆广场活动集锦：6月活动ing" target="_blank"><img src="http://img1.hoto.cn/haodou/center/group_act/center_group_act_1.jpg?v=149637588952" width="235" height="106" alt="好豆广场活动集锦：6月活动ing" /></a>
                    <p class="mgt10"><a href="hhttp://group.haodou.com/topic-520584.html" title="好豆广场活动集锦：6月活动ing" target="_blank">好豆广场活动集锦：6月活动ing</a></p>
                    <p>缤纷六月，美好的节日和特殊的日子众多，中考、高考、儿童节、芒种、立夏、父...</p>
                    <ul class="ttx_list">
                    </ul>
                </div>
                <h2 class="cb item_t mgt10">热门话题</h2>
                <ul class="text_list">
                    <li>
                        <a href="http://wo.haodou.com/4098/" title="芷萍" class="gray9 fr" target="_blank">芷萍</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520290.html" title="学做家常菜6月导师课" target="_blank">学做家常菜6月导师课</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/442332/" title="飘儿78" class="gray9 fr" target="_blank">飘儿78</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520519.html" title="【长期6月活动】相约2017烘焙甜点学堂" target="_blank">【长期6月活动】相约2017</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/5309324/" title="亮晶晶妈" class="gray9 fr" target="_blank">亮晶晶妈</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520204.html" title="【6月活动】6月餐桌，美食分享" target="_blank">【6月活动】6月餐桌，美食</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/113473/" title="籣草児" class="gray9 fr" target="_blank">籣草児</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520267.html" title="6月活动【征集】厨房生活小妙招" target="_blank">6月活动【征集】厨房生活</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/5309324/" title="亮晶晶妈" class="gray9 fr" target="_blank">亮晶晶妈</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-514564.html" title="【6月活动】考生饮食  营养祛暑为主" target="_blank">【6月活动】考生饮食  营</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/20500/" title="尚志李波" class="gray9 fr" target="_blank">尚志李波</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520424.html" title="【6月活动】幸福夏日~" target="_blank">【6月活动】幸福夏日~</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/2111984/" title="哈尔滨手帕" class="gray9 fr" target="_blank">哈尔滨手帕</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520348.html" title="六月活动【花开六月】" target="_blank">六月活动【花开六月】</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/210258/" title="霜天雪舞" class="gray9 fr" target="_blank">霜天雪舞</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520486.html" title="书友会六七月活动-书山有路" target="_blank">书友会六七月活动-书山有</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/4533082/" title="fishmama" class="gray9 fr" target="_blank">fishmama</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520142.html" title="【6月活动】快乐儿童月" target="_blank">【6月活动】快乐儿童月</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/132473/" title="红豆厨坊" class="gray9 fr" target="_blank">红豆厨坊</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520531.html" title="【缤纷餐桌】家乡小吃-鸡丝辣汤" target="_blank">【缤纷餐桌】家乡小吃-鸡</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/132473/" title="红豆厨坊" class="gray9 fr" target="_blank">红豆厨坊</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-513756.html" title="【享受餐桌】鲜香松脆爽辣美味的香酱饼" target="_blank">【享受餐桌】鲜香松脆爽辣</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/489704/" title="挪红" class="gray9 fr" target="_blank">挪红</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520268.html" title="【多味五月】不会包粽看过来炒碗油饭过端午" target="_blank">【多味五月】不会包粽看过</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/3340575/" title="瑞鸾之爱" class="gray9 fr" target="_blank">瑞鸾之爱</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520255.html" title="【学做家常菜】脆爽可口的凉拌猪蹄" target="_blank">【学做家常菜】脆爽可口的</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/10000484/" title="倚兰听海" class="gray9 fr" target="_blank">倚兰听海</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520098.html" title="【初夏健脾】夏季养生，多吃新鲜时蔬调身体" target="_blank">【初夏健脾】夏季养生，多</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/6328636/" title="一品文子" class="gray9 fr" target="_blank">一品文子</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520543.html" title="【5月作业】烘焙甜点—水果红茶" target="_blank">【5月作业】烘焙甜点—水</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/3074671/" title="余甘果蜜" class="gray9 fr" target="_blank">余甘果蜜</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520210.html" title="【缤纷餐桌】简单而又鲜嫩味美——油焖茭白" target="_blank">【缤纷餐桌】简单而又鲜嫩</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/3377229/" title="嘟嘟love小悠悠" class="gray9 fr" target="_blank">嘟嘟love小</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-520205.html" title="【缤纷餐桌】如何做出翠绿的-糟毛豆" target="_blank">【缤纷餐桌】如何做出翠绿</a>
                    </li>
                    <li>
                        <a href="http://wo.haodou.com/6142501/" title="火镀红叶" class="gray9 fr" target="_blank">火镀红叶</a>
                        <span class="ftst">·</span><a href="http://group.haodou.com/topic-519965.html" title="泡面发誓：这一次不再欺骗你" target="_blank">泡面发誓：这一次不再欺骗</a>
                    </li>
                </ul>
                <!--<h2 class="cb item_t mgt10">热门豆记</h2>-->
                <!--<ul class="ttx_list last">
    </ul>-->

            </div>
            <div class="area_maincn">
                <h2 class="cb item_t mod_pz">今日热点</h2>
                <div class="">
                    <p class="hot_title"><span class="sub">做美食</span><a href="http://group.haodou.com/topic-522642.html" title="【营养健康】家庭自发海参技巧" target="_blank">【营养健康】家庭自发海参技巧</a></p>
                    <p class="auto_nt mgt7">海参的营养价值较高，海参含胆固醇极低，为一种典型的高蛋白、低脂肪、低胆固醇食物。加上其肉质细嫩，易于消化，所以，非常适宜于老年人、儿童以及体质虚弱的人食用。海参，既是宴席上的佳肴，...<a href="http://group.haodou.com/topic-522642.html" title="查看全文" target="_blank">查看全文</a></p>
                    <p class="hot_title live"><span class="sub">爱生活</span><a href="http://group.haodou.com/topic-522727.html" title="【花开六月】入夏~青青蒲草香" target="_blank">【花开六月】入夏~青青蒲草香</a></p>
                    <p class="auto_nt mgt7">在池塘边或沼泽地或草丛中看到很多像蜡烛又像香肠一样的东西，金黄略显褐色，那是植物的花穗。这种植物就是“香蒲”。在我老家，见到的多为长苞香蒲。 说起香蒲你可能不认识，但端午艾蒿你不可...<a href="http://group.haodou.com/topic-522727.html" title="查看全文" target="_blank">查看全文</a></p>
                </div>
                <h2 class="cb item_t mgt20">
					<span class="fr n ft12 gray9">
						<a href="http://group.haodou.com/8/" title="厨房宝典" target="_blank">厨房宝典</a>&nbsp;&nbsp;/&nbsp;&nbsp;
						<a href="http://group.haodou.com/6/" title="营养健康" target="_blank">营养健康</a>&nbsp;&nbsp;/&nbsp;&nbsp;
						<a class="more_icon" href="http://group.haodou.com/5/" title="" target="_blank"></a>
					</span><i></i>做美食
                </h2>
                <div class="important">
                    <a href="http://group.haodou.com/topic-522739.html" title="【初夏家常菜】水果拼盘" target="_blank"><img src="http://img1.hoto.cn/haodou/center/group/center_group_hdcf.jpg?v=149861588957" width="160" height="120" alt="【初夏家常菜】水果拼盘" /></a>
                    <div class="auto_nt">
                        <p class="ft14 b"><a href="http://group.haodou.com/topic-522739.html" title="【初夏家常菜】水果拼盘" target="_blank">【初夏家常菜】水果拼盘</a></p>
                        <p class="gray9 mgt2"><a href="http://wo.haodou.com/739120/" title="飘零星" target="_blank">飘零星</a> 发布于 06-27 21:19</p>
                        <p class="hgtx60">水果有降血压、减缓衰老、减肥瘦身、皮肤保养、 明目、抗癌、降低胆固醇补充维生素等保健作用。不同的水果拥有不同的...</p>
                    </div>
                    <ul class="ttx_list last">
                        <li><p class="date">厨奶</p><p class="auto_nt"><a href="http://group.haodou.com/33/" title="家常菜" target="_blank">[家常菜]</a> <a href="http://group.haodou.com/topic-522723.html" title="【学做家常菜】‘刺啦’~响油芦笋" target="_blank">【学做家常菜】‘刺啦’~响油芦笋</a></p></li>
                        <li><p class="date">心随彧动</p><p class="auto_nt"><a href="http://group.haodou.com/31/" title="享受餐桌" target="_blank">[享受餐桌]</a> <a href="http://group.haodou.com/topic-522605.html" title="四季豆这样做超下饭" target="_blank">四季豆这样做超下饭</a></p></li>
                        <li><p class="date">爱跳舞的老太</p><p class="auto_nt"><a href="http://group.haodou.com/31/" title="享受餐桌" target="_blank">[享受餐桌]</a> <a href="http://group.haodou.com/topic-522631.html" title="【六月餐桌】酥炸白条虾" target="_blank">【六月餐桌】酥炸白条虾</a></p></li>
                        <li><p class="date">花花1977</p><p class="auto_nt"><a href="http://group.haodou.com/6/" title="营养健康" target="_blank">[营养健康]</a> <a href="http://group.haodou.com/topic-522663.html" title="【考生饮食】这六瓜是宝物，今夏一定要吃齐" target="_blank">【考生饮食】这六瓜是宝物，今夏一定要吃齐</a></p></li>
                        <li><p class="date">英英私房菜</p><p class="auto_nt"><a href="http://group.haodou.com/6/" title="营养健康" target="_blank">[营养健康]</a> <a href="http://group.haodou.com/topic-522649.html" title="【考生饮食】蒜香蒸茄子" target="_blank">【考生饮食】蒜香蒸茄子</a></p></li>
                        <li><p class="date">食a色</p><p class="auto_nt"><a href="http://group.haodou.com/32/" title="烘焙甜点" target="_blank">[烘焙甜点]</a> <a href="http://group.haodou.com/topic-522246.html" title="【烘焙甜点】巧克力酥皮泡芙" target="_blank">【烘焙甜点】巧克力酥皮泡芙</a></p></li>
                    </ul>
                </div>

                <h2 class="cb item_t mgt20">
					<span class="fr n ft12 gray9">
						<a href="http://group.haodou.com/12/" title="" target="_blank"></a>&nbsp;&nbsp;/&nbsp;&nbsp;
						<a href="http://group.haodou.com/11/" title="" target="_blank"></a>&nbsp;&nbsp;/&nbsp;&nbsp;
						<a class="more_icon" href="http://group.haodou.com/10/" title="" target="_blank"></a>
					</span><i class="liv"></i>爱生活
                </h2>
                <div class="important">
                    <a href="http://group.haodou.com/topic-522711.html" title="【花开六月】张家界——天子山云雾" target="_blank"><img src="http://img1.hoto.cn/haodou/center/group/center_group_hdsh.jpg?v=14986159562" width="160" height="120" alt="【花开六月】张家界——天子山云雾" /></a>
                    <div class="auto_nt">
                        <p class="ft14 b"><a href="http://group.haodou.com/topic-522711.html" title="【花开六月】张家界——天子山云雾" target="_blank">【花开六月】张家界——天子山...</a></p>
                        <p class="gray9 mgt2"><a href="http://wo.haodou.com/665029/" title="英子草" target="_blank">英子草</a> 发布于 06-27 12:00</p>
                        <p class="hgtx60">早晨乘坐天子山索道来到天子山观景台。达到天子山索道观景台，云雾撩绕，连导游都说这样云雾一年也只能看到3、4回，我...</p>
                    </div>
                    <ul class="ttx_list last">
                        <li><p class="date">霜天雪舞</p><p class="auto_nt"><a href="http://group.haodou.com/34/" title="好好生活" target="_blank">[好好生活]</a> <a href="http://group.haodou.com/topic-522729.html" title="【幸福夏日】周末的吃喝玩乐" target="_blank">【幸福夏日】周末的吃喝玩乐</a></p></li>
                        <li><p class="date">坡镇小锅</p><p class="auto_nt"><a href="http://group.haodou.com/35/" title="行摄天下" target="_blank">[行摄天下]</a> <a href="http://group.haodou.com/topic-522771.html" title="【花开六月】给三姑过65岁生日" target="_blank">【花开六月】给三姑过65岁生日</a></p></li>
                        <li><p class="date">莉莉在心</p><p class="auto_nt"><a href="http://group.haodou.com/35/" title="行摄天下" target="_blank">[行摄天下]</a> <a href="http://group.haodou.com/topic-522719.html" title="【花开六月】美丽的贵州山川河流" target="_blank">【花开六月】美丽的贵州山川河流</a></p></li>
                        <li><p class="date">番茄小石头</p><p class="auto_nt"><a href="http://group.haodou.com/23/" title="亲子乐园" target="_blank">[亲子乐园]</a> <a href="http://group.haodou.com/topic-522606.html" title="【快乐儿童月】课外阅读" target="_blank">【快乐儿童月】课外阅读</a></p></li>
                        <li><p class="date">尚志李波</p><p class="auto_nt"><a href="http://group.haodou.com/38/" title="兴趣集市" target="_blank">[兴趣集市]</a> <a href="http://group.haodou.com/topic-522750.html" title="【才艺秀】芳然最近的作品~" target="_blank">【才艺秀】芳然最近的作品~</a></p></li>
                        <li><p class="date">瑗瑗baby</p><p class="auto_nt"><a href="http://group.haodou.com/34/" title="好好生活" target="_blank">[好好生活]</a> <a href="http://group.haodou.com/topic-522691.html" title="晒在好豆兑换的礼品" target="_blank">晒在好豆兑换的礼品</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="area_side">
                <h2 class="cb item_t mod_pz">
                    <a class="tab clk_act_top" id="top_tab_w" title="月" href="javascript:void(0);">月</a>
                    <span class="fr">&nbsp;</span>
                    <a class="tab clk_act_top sel" id="top_tab_m" title="周" href="javascript:void(0);">周</a>
                    活跃豆子排行榜
                </h2>
                <div class="f_rank mod_tc">
                    <ul class="cen_list_b clearfix toggle_act_top">
                        <li>
                            <span class="num num_1">1</span>
                            <a href="http://wo.haodou.com/35618/" title="jinjerry" class="photo" target="_blank"><img src="http://avatar0.hoto.cn/22/8b/35618_48.jpg" alt="jinjerry" width="48" height="48" /></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_35618_w" title="加关注"><b class="orange">+</b>关注</a>
                                    <a href="http://wo.haodou.com/35618/" title="jinjerry" target="_blank">jinjerry</a>
                                </p>
                                <p>本周发表了 41 个话题</p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_2">2</span>
                            <a href="http://wo.haodou.com/10000484/" title="倚兰听海" class="photo" target="_blank"><img src="http://avatar0.hoto.cn/64/98/10000484_48.jpg" alt="倚兰听海" width="48" height="48" /></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_10000484_w" title="加关注"><b class="orange">+</b>关注</a>
                                    <a href="http://wo.haodou.com/10000484/" title="倚兰听海" target="_blank">倚兰听海</a>
                                </p>
                                <p>本周发表了 40 个话题</p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_3">3</span>
                            <a href="http://wo.haodou.com/1997129/" title="番茄小石头" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/49/79/1997129_48.jpg" alt="番茄小石头" width="48" height="48" /></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_1997129_w" title="加关注"><b class="orange">+</b>关注</a>
                                    <a href="http://wo.haodou.com/1997129/" title="番茄小石头" target="_blank">番茄小石头</a>
                                </p>
                                <p>本周发表了 39 个话题</p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_4">4</span>
                            <a href="http://wo.haodou.com/1210271/" title="坡镇小锅" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/9f/77/1210271_48.jpg" alt="坡镇小锅" width="48" height="48" /></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_1210271_w" title="加关注"><b class="orange">+</b>关注</a>
                                    <a href="http://wo.haodou.com/1210271/" title="坡镇小锅" target="_blank">坡镇小锅</a>
                                </p>
                                <p>本周发表了 27 个话题</p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_5">5</span>
                            <a href="http://wo.haodou.com/3837/" title="爱跳舞的老太" class="photo" target="_blank"><img src="http://avatar1.hoto.cn/fd/0e/3837_48.jpg" alt="爱跳舞的老太" width="48" height="48" /></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="topic_3837_w" title="加关注"><b class="orange">+</b>关注</a>
                                    <a href="http://wo.haodou.com/3837/" title="爱跳舞的老太" target="_blank">爱跳舞的老</a>
                                </p>
                                <p>本周发表了 25 个话题</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="cen_list_b non clearfix toggle_act_top"></ul>
                </div>

                <h2 class="cb item_t mod_pz">
                    <a class="tab clk_zong_he_top" id="top_tab_wealth" href="javascript:void(0);" title="豆币">豆币</a>
                    <span class="fr">&nbsp;</span>
                    <a class="tab clk_zong_he_top sel" id="top_tab_birthday" href="javascript:void(0);" title="生日">生日</a>
                    综合榜
                </h2>
                <div class="f_rank mod_tc">
                    <ul class="cen_list_b cns clearfix toggle_zong_he_top">
                        <li>
                            <span class="num num_1">1</span>
                            <a class="photo" title="芳妮FONY" href="http://wo.haodou.com/3504510/" target="_blank"><img alt="芳妮FONY" src="http://avatar0.hoto.cn/7e/79/3504510_48.jpg"></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="birthday_3504510" title="加关注"><b class="orange">+</b>关注</a>
                                    <a title="芳妮FONY" href="http://wo.haodou.com/3504510/" target="_blank">芳妮FONY</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_2">2</span>
                            <a class="photo" title="程程love美食" href="http://wo.haodou.com/2723392/" target="_blank"><img alt="程程love美食" src="http://avatar0.hoto.cn/40/8e/2723392_48.jpg"></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="birthday_2723392" title="加关注"><b class="orange">+</b>关注</a>
                                    <a title="程程love美食" href="http://wo.haodou.com/2723392/" target="_blank">程程love美食</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_3">3</span>
                            <a class="photo" title="时性遇缘喜" href="http://wo.haodou.com/3100410/" target="_blank"><img alt="时性遇缘喜" src="http://avatar0.hoto.cn/fa/4e/3100410_48.jpg"></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="birthday_3100410" title="加关注"><b class="orange">+</b>关注</a>
                                    <a title="时性遇缘喜" href="http://wo.haodou.com/3100410/" target="_blank">时性遇缘喜</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_4">4</span>
                            <a class="photo" title="默捻" href="http://wo.haodou.com/1377175/" target="_blank"><img alt="默捻" src="http://avatar1.hoto.cn/97/03/1377175_48.jpg"></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="birthday_1377175" title="加关注"><b class="orange">+</b>关注</a>
                                    <a title="默捻" href="http://wo.haodou.com/1377175/" target="_blank">默捻</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_5">5</span>
                            <a class="photo" title="有多远走多远ab" href="http://wo.haodou.com/1168360/" target="_blank"><img alt="有多远走多远ab" src="http://avatar0.hoto.cn/e8/d3/1168360_48.jpg"></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="birthday_1168360" title="加关注"><b class="orange">+</b>关注</a>
                                    <a title="有多远走多远ab" href="http://wo.haodou.com/1168360/" target="_blank">有多远走多远ab</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <span class="num num_6">6</span>
                            <a class="photo" title="爱岗爱远" href="http://wo.haodou.com/1007638/" target="_blank"><img alt="爱岗爱远" src="http://avatar0.hoto.cn/16/60/1007638_48.jpg"></a>
                            <div class="name">
                                <p>
                                    <a class="care_of fr clk_act_adfolw" href="javascript:void(0);" id="birthday_1007638" title="加关注"><b class="orange">+</b>关注</a>
                                    <a title="爱岗爱远" href="http://wo.haodou.com/1007638/" target="_blank">爱岗爱远</a>
                                </p>
                            </div>
                        </li>
                        <li class="more"><a title="更多" href="http://group.haodou.com/topic-499747.html" target="_blank">更多...</a></li></ul>
                    <ul class="cen_list_b clearfix toggle_zong_he_top non"></ul>

                </div>

                <div class="phoneClient mod_pz">
                    <h2 class="cb item_t">好豆手机客户端</h2>
                    <ul class="imgTxt">
                        <li>
							<span class="img imgx1">
								<a href="http://www.haodou.com/help/mobile.php" title="好豆菜谱" target="_blank"></a>
							</span>
                            <div class="text">
                                <p class="ht_android"><a href="http://www.haodou.com/help/mobile.php" title="好豆菜谱" target="_blank"></a></p>
                                <p>用心成就最好的菜谱应用</p>
                                <p class="down">
                                    <a class="iph" href="http://itunes.apple.com/cn/app/id469310248" title="App Store" target="_blank"></a>
                                    <a class="and" href="http://www.haodou.com/help/mobile.php" title="Android Market" target="_blank"></a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="fl m-ad hp"><script type="text/javascript">
            var cpro_id="u2286061";
            (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"950",rsi1:"90",pat:"3",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#000000",titSU:"0",tft:"0",tlt:"1"}
        </script>
        <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script></div>
</div>
<script type="text/javascript" src="//img4.hoto.cn/proxy/?js=group/index.js&v=59,0,1482387313"></script>
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