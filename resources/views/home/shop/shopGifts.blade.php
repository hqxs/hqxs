@extends('home/shop/shopExtends')
@section('title','礼品馆')
@section('css')
    <link rel="stylesheet" href="/css/shopGifts.css">
    @endsection
@section('js')
    <script src="/js/home/index/saved_resource(1)"></script>
    <script scr="/js/home/shopGift/hm.js"></script>
    <script src="/js/home/shopGift/analytics.js"></script>
    @endsection
@section('shopGifts')
    <div class="ie6hack">&nbsp;</div>
    <div class="warpb clearfix">
        <div class="shop_slide_box">
            <div class="shop_category">
                <ul>
                    @foreach($cate as $v)
                    <li>
                        <span class="ico32 edge ">&nbsp;</span>
                        <div class="box">
                            @if($v['path'] == "0.1.")
                            <h5>{{$v['name']}}</h5>
                            @endif
                            <p>
                                @foreach($cate as $vv)
                                    @if($vv['pid'] == $v['id'])
                                <a title="好豆生活" href="{{$vv['id']}}">{{$vv["name"]}}</a>
                                    @endif
                                    @endforeach
                            </p>
                        </div>
                    </li>
                        @endforeach
                </ul>
            </div>
            <div class="isslidebox">
                <div class="slideRoll fl">
                    {{--小轮播图--}}
                    <ul class="picture_ul">
                        @foreach($pic as $v)
                        <li style="display: list-item;">
                            <a target="_blank" title="{{$v->title}}" href="{{$v->id}}">
                                <img alt="小家电，大用场" src="/images/{{$v->icon}}">
                            </a>
                        </li>
                            @endforeach
                    </ul>
                    <ul class="thumb_ul">
                        <li>
                            <a target="_blank" title="{{$v->title}}" href="javascript:;" style="color: rgb(153, 153, 153);">
                                {{$v->title}}
                                <i style="display: inline;">&nbsp;</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 上层中间排 -->
        <div class="shop_change_box" id="shop_changge_box">
            <p class="scb_leading">
                <em class="shop_title">热门礼品</em>
                <em class="shop_title">新品上架</em>
            </p>
            <script>
                $(".shop_title").mouseover(function (){
                    var index = $(this).index();
                    $(".ulshow").hide();
                    $(".ulshow").eq(index).show();
                })
            </script>
            <div class="scb_flist">
                <ul class="ulshow" style="display:block;">
                    {{--热门商品--}}
                    @foreach($hot as $v)
                    <li>
                        <div class="imexc">
                            <a target="_blank" title="{{$v->desc}}" href="{{$v->id}}">
                                <img alt="{{$v->desc}}" src="{{$v->id}}" style="width: 304px; height: 304px">
                            </a>
                            <b>&nbsp;</b>
                        </div>
                        <p><a target="_blank" title="{{$v->desc}}" href="/images/{{$v->id}}">{{$v->name}}</a></p>
                        <p><i class="ico32 hd_money">&nbsp;</i>
                            <span class="orange">
                                <span class="f16">{{$v->price}}</span> 元
                            </span>
                        </p>
                    </li>
                        @endforeach
                </ul>
                <ul class="ulshow" style="display: none;">
                    {{--新品--}}
                    @foreach($new as $v)
                    <li>
                        <div class="imexc">
                            <a target="_blank" title="{{$v->desc}}" href="{{$v->id}}">
                                <img alt="{{$v->desc}}" src="/images/{{$v->id}}" style="width: 304px; height: 304px">
                            </a>
                            <b>&nbsp;</b>
                        </div>
                        <p><a target="_blank" title="{{$v->desc}}" href="{{$v->id}}">{{$v->name}}</a></p>
                        <p><i class="ico32 hd_money">&nbsp;</i>
                            <span class="orange">
                                <span class="f16">{{$v->price}}</span> 钱
                            </span>
                        </p>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
        <!-- 左边两排 -->
        <div class="fl area_gp">
            <div class="shop_idx_lt_box">
                <div class="sib_title"><h2 class="h2t">好豆推荐</h2></div>
                <div class="sir_box">
                    <!-- 左边那排 -->
                    <ul>
                        @foreach($hot as $v)
                        <li>
                            <div class="imgxc">
                                <a target="_blank" title="{{$v->desc}}" href="{{$v->id}}">
                                    <img alt="{{$v->desc}}" src="{{$v->icon}}"></a>
                                <b>&nbsp;</b>
                            </div>
                            <p><a target="_blank" title="{{$v->desc}}" href="{{$v->id}}">{{$v->name}}</a></p>
                            <p><i class="ico32 hd_money">&nbsp;</i><span class="orange"><span class="f16">{{$v->price}}</span> 豆币</span></p>
                            {{--虚拟的--}}
                            <p><i class="ico12 hd_trade">&nbsp;</i>购买量：61 <i class="ico12 hd_care">&nbsp;</i>关注：2473</p>
                        </li>
                            @endforeach
                    </ul>
                    <!-- 中间那排 -->
                    <ul>
                        @foreach($new as $v)
                        <li class="rex1">
                            <div class="imgxc">
                                <a target="_blank" title="{{$v->desc}}" href="">
                                    <img alt="{{$v->desc}}" src="{{$v->id}}">
                                </a>
                                <b>&nbsp;</b>
                            </div>
                            <p><a target="_blank" title="{{$v->desc}}" href="{{$v->id}}">{{$v->name}}</a></p>
                            <p><i class="ico32 hd_money">&nbsp;</i><span class="orange"><span class="f16">{{$v->price}}</span> 豆币</span></p>
                            <p><i class="ico12 hd_trade">&nbsp;</i>购买量：118 <i class="ico12 hd_care">&nbsp;</i>关注：3106</p>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- 右边那排 -->
        <div class="fr area_sp">
            <div class="shop_idx_rt_box">
                <div class="sib_title">
                    <h2 class="h2t">投票区</h2>
                    <a target="_blank" href="" title="详细规则" class="more green">
                        /详细规则
                    </a>
                </div>
                <div class="sir_box">
                    @foreach($vote as $v)
                    <p class="big_ims">
                        <a target="_blank" title="{{$v->name}}" href="{{$v->id}}">
                            <img alt="{{$v->name}}" src="/images/{{$v->icon}}">
                        </a>
                    </p>
                    <p class="ib_row mgt10 f14">{{$v->name}}</p>
                    <p class="ib_row">目前折扣：<span class="orange f14">{{$v->disc}}折</span></p>
                    <p class="ib_row mgt10">
                        <em title="投票" href="javascript:///" class="dbtn btn_orange" name="votegoods" id="goods_836_vote" value="{{$v->id}}">投 票</em>
                    </p>
                    <div class="ib_row mgt10">
                    </div>
                    @endforeach
                </div>
                <script>
//                    $(".dbtn .btn_orange").click(function (){
//                        index = $(this).attr("value");
//                        console.log(index);
//                        alert(index);
//                        $.ajax({
//                            url:"shop/gift",
//                            type:"POST",
//                            data:index,
//                            success:function (data,status,xhr){
//                                console.log(index);
//                            },
//                            error:function (xhr,status,message){
//
//                            },
//                            async:true,
//                            dataType:"json",
//                        })
//                    })
                </script>
                <div class="sib_title"><h2 class="h2t">兑换排行榜</h2></div>
                <div class="sir_box">
                    <ul class="sib_gift_list" id="shop_side_top">
                        <li class="act">
                            <div class="def">
                                <p>
                                    <b>1</b>
                                    <a href="" title="面包分片器">面包分片器</a>
                                </p>
                            </div>
                            <div class="exc">
                                <p><i class="ico20 imperial">&nbsp;</i>
                                    <a href="" title="面包分片器">面包分片器</a></p>
                                <div class="pimg">
                                    <a href="" title="面包分片器">
                                        <img src="" alt="面包分片器">
                                    </a>
                                </div>
                                <p class="isht"><i class="ico32 hd_money">&nbsp;</i>1豆币</p>
                            </div>
                        </li>
                        <li class="act">
                            <div class="def">
                                <p>
                                    <b>1</b>
                                    <a href="" title="面包分片器">面包分片器</a>
                                </p>
                            </div>
                            <div class="exc">
                                <p><i class="ico20 imperial">&nbsp;</i>
                                    <a href="" title="面包分片器">面包分片器</a></p>
                                <div class="pimg">
                                    <a href="" title="面包分片器">
                                        <img src="" alt="面包分片器">
                                    </a>
                                </div>
                                <p class="isht"><i class="ico32 hd_money">&nbsp;</i>1豆币</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sib_title"><h2 class="h2t">最新兑换</h2></div>
                <div class="sir_box">
                    <ul class="sib_uid_list">
                        <li>
                            <a title="烤鱼盘（接受预定）" href="">
                                <img alt="烤鱼盘（接受预定）" src="">
                            </a>
                            <div class="ohz">
                                <p><a title="烤鱼盘（接受预定）" href="">烤鱼盘（接受预定）</a></p>
                                <p>兑换价：<span class="orange">9520豆币</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @endsection