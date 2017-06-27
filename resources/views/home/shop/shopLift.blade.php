@extends("home/shop/shopExtends")
@section('title','生活馆_商城')
@section('css')
    <link rel="stylesheet" href="/css/shopLift.css">
    @endsection
@section('js')
    <script src="/js/home/index/shopLift.js"></script>
    <script async="" src="/js/home/index/analytics.js"></script>
    <script src="/js/home/index/hm.js"></script>
    <script src="/js/home/index/sdk.js"></script>
    {{--计时器--}}
    <script type="text/javascript" src="/js/home/index/saved_resource(1)"></script>
    @endsection
@section('shopLift')
    <div class="ie6hack">&nbsp;</div>
    <div class="warpb clearfix">
        <div class="shop_life_slide">
            <div class="sh_slidebox">
                <div class="slideRoll fl">
                    <ul class="picture_ul">
                        <li style="display: none;">
                            <a target="_blank" title="餐具" href="">
                                <img width="700" height="322" alt="餐具" src="">
                            </a>
                        </li>
                        <li style="display: list-item;">
                            <a target="_blank" title="大米" href="">
                                <img width="700" height="322" alt="大米" src="">
                            </a>
                        </li>
                    </ul>
                    <ul class="point_ul">
                        <li class="">&nbsp;</li>
                        <li class="activ">&nbsp;</li>
                    </ul>
                </div>
            </div>
            <div class="inforside">
                <h3><i class="ico32">&nbsp;</i>每日推荐</h3>
                <div class="imgb">
                    <a title="每日推荐" href="">
                        <img alt="每日推荐" src="">
                        <span class="price">￥15.8</span>
                    </a>
                </div>
                <a class="gbtn btn_orange f20" href="javascript:///" id="life_publish_btn"><b>+</b> 分享你的新发现</a>
            </div>
        </div>
        <div class="shop_life_lis">
            <h2>美食</h2>
            <div class="category">
                <p class="box">
                    <a target="_blank" title="熟食" href="">熟食</a>
                    <a class="orange" target="_blank" title="葡萄干" href="">葡萄干</a>
                    <a target="_blank" title="饼干" href="">饼干</a>
                    <a target="_blank" title="巧克力" href="">巧克力</a>
                </p>
                <p class="box">
                    <a class="orange" target="_blank" title="糕点" href="">糕点</a>
                    <a target="_blank" title="香肠" href="">香肠</a>
                    <a target="_blank" title="坚果" href="">坚果</a>
                    <a target="_blank" title="膨化食品" href="">膨化食品</a>
                </p>
                <p class="box">
                    <a class="orange" target="_blank" title="燕窝" href="">燕窝</a>
                    <a target="_blank" title="私房菜" href="">私房菜</a>
                    <a target="_blank" title="银耳" href="">银耳</a>
                    <a target="_blank" title="南北干货" href="">南北干货</a>
                </p>
                <p class="box">
                    <a target="_blank" title="茶" href="">茶</a>
                    <a target="_blank" title="杂粮" href="">杂粮</a>
                    <a target="_blank" title="食用油" href="">食用油</a>
                    <a target="_blank" title="黄油" href="">黄油</a>
                </p>
                <p class="tc f14 mgt10">
                    <a target="_blank" title="全部查看" href="">全部查看</a>
                </p>
            </div>
            <div class="imlist">
                <ul>
                    <li class="long">
                        <a target="_blank" title="饼干" href="">
                            <img alt="饼干" src="">
                            <span class="title">饼干</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a target="_blank" title="坚果" href="">
                            <img alt="坚果" src="">
                            <span class="title">坚果</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="好想你枣" href="">
                            <img alt="好想你枣" src="">
                            <span class="title">好想你枣</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="shop_life_lis">
            <h2>试吃试用</h2>
            <div class="life_try">
                <ul>
                    <li>
                        <a target="_blank" title="巧克力模具" href="">
                            <img alt="巧克力模具" src="">
                        </a>
                        <div class="box gray6">
                            <p class="whsp">
                                <a target="_blank" title="巧克力模具" href="" class="f14 blue">巧克力模具</a>
                            </p>
                            <p class="cross mgt10">兑换价：3850豆币</p>
                            <p class="mgt5">试用价：<span class="zm">1</span>豆币</p>
                            <p class="gk">
                                <span class="count_time_down" style="display:none;">2017-6-27-9-59-59</span>
                                剩余 <span class="count_time_day">07天</span><span class="count_time_hour">00时</span>
                                <span class="count_time_minute">50分</span><span class="count_time_second">55秒</span>
                            </p>
                            <p class="mgt10">商品数量：1 件</p>
                            <p class="mgt10">申请人数：23 人</p>
                            <p class="mgt10">
                                <a target="_blank" title="申请试用" href="" class="dbtn btn_orange">申请试用</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a target="_blank" title="面包分片器" href="">
                            <img alt="面包分片器" src=""></a>
                        <div class="box gray6">
                            <p class="whsp">
                                <a target="_blank" title="面包分片器" href="" class="f14 blue">面包分片器</a>
                            </p>
                            <p class="cross mgt10">兑换价：4556豆币</p>
                            <p class="mgt5">试用价：<span class="zm">1</span>豆币</p>
                            <p class="gk">
                                <span class="count_time_down" style="display:none;">2017-6-27-9-59-59</span>
                                剩余 <span class="count_time_day">07天</span><span class="count_time_hour">00时</span>
                                <span class="count_time_minute">50分</span><span class="count_time_second">55秒</span>
                            </p>
                            <p class="mgt10">商品数量：1 件</p>
                            <p class="mgt10">申请人数：990 人</p>
                            <p class="mgt10">
                                <a target="_blank" title="申请试用" href="" class="dbtn btn_orange">申请试用</a>
                            </p>
                        </div>
                    </li>
                </ul>
                <span class="hr">&nbsp;</span>
                <!-- 空了就做 -->
                <dl>
                    <dt>试用报告</dt>
                    <dd>
                        <a target="_blank" title="【美豆儿面包机试用报告】试用报告" href="">
                            <img alt="【美豆儿面包机试用报告】试用报告" src="">
                        </a>
                        <div class="box">
                            <p class="whsp">
                                <a target="_blank" title="【美豆儿面包机试用报告】试用报告" href="">【美豆儿面包机试用报告】试用报告</a>
                            </p>
                            <p class="mgt5 orange">前天傍晚，面包机送到了，其实这之前我早已经做足了功课，就等它了，迫不及待的拆开包装箱...</p>
                        </div>
                    </dd>
                    <dd>
                        <a target="_blank" title="【年味到家--蔓越莓饼干】" href="">
                            <img alt="【年味到家--蔓越莓饼干】" src="">
                        </a>
                        <div class="box">
                            <p class="whsp">
                                <a target="_blank" title="【年味到家--蔓越莓饼干】" href="">【年味到家--蔓越莓饼干】</a>
                            </p>
                            <p class="mgt5 orange">然妈烘焙家的也就是好豆太阳公公波波家的【蔓越莓饼干（250克）】中午快递送到家啦。这...</p>
                        </div>
                    </dd>
                    <dd>
                        <a target="_blank" title="【美的mini食代电磁炉】试用报告" href="">
                            <img alt="【美的mini食代电磁炉】试用报告" src="">
                        </a>
                        <div class="box">
                            <p class="whsp">
                                <a target="_blank" title="【美的mini食代电磁炉】试用报告" href="">【美的mini食代电磁炉】试用报告</a>
                            </p>
                            <p class="mgt5 orange">
                                鸡蛋裹糍粑是家乡传统甜点，适合早餐时候吃，外焦里嫩，用美的MINI食代电磁炉和自带的...
                            </p>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    @endsection