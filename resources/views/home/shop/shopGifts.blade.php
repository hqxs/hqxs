@extends('home/shop/shopExtends')
@section('title','礼品馆')
@section('css')
    <link rel="stylesheet" href="/css/shopGifts.css">
    @endsection
@section('js')
    <script src="/js/home/index/saved_resource(1)"></script>
    <script scr="/js/home/shopGift/hm.js"></script>
    <script src="/js/home/shopGift/analytics.js"></script>
    <script type="text/javascript" src="/js/home/index/saved_resource(2)"></script>
    <script src="/js/jquery-1.8.3.min.js"></script>
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
                                <a title="好豆生活" href="/shop/gift/all/{{$vv['id']}}">{{$vv["name"]}}</a>
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
                            <a title="{{$v->title}}" href="{{$v->id}}">
                                <img alt="小家电，大用场" src="/images/{{$v->icon}}">
                            </a>
                        </li>
                            @endforeach
                    </ul>
                    <ul class="thumb_ul">
                        <li>
                            <a title="{{$v->title}}" href="javascript:;" style="color: rgb(153, 153, 153);">
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
                            <a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">
                                <img alt="{{$v->desc}}" src="{{$v->icon}}" style="width: 304px; height: 304px">
                            </a>
                            <b>&nbsp;</b>
                        </div>
                        <p><a title="{{$v->desc}}" href="/images/{{$v->id}}">{{$v->name}}</a></p>
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
                            <a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">
                                <img alt="{{$v->desc}}" src="/images/{{$v->id}}" style="width: 304px; height: 304px">
                            </a>
                            <b>&nbsp;</b>
                        </div>
                        <p><a title="{{$v->desc}}" href="{{$v->id}}">{{$v->name}}</a></p>
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
                                <a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">
                                    <img alt="{{$v->desc}}" src="{{$v->icon}}"></a>
                                <b>&nbsp;</b>
                            </div>
                            <p><a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">{{$v->name}}</a></p>
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
                                <a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">
                                    <img alt="{{$v->desc}}" src="{{$v->icon}}">
                                </a>
                                <b>&nbsp;</b>
                            </div>
                            <p><a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">{{$v->name}}</a></p>
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
                    <p class="ib_row">目前折扣：
                        @if((10-floor($v->count/1000)) >= 5)
                           <span class="orange f14">{!! 10-floor($v->count/1000) !!}折</span>
                        @else
                            <span class="orange f14">5折</span>
                        @endif
                    </p>
                    <p class="ib_row mgt10">
                        <input type="hidden" name="count" value="1" class="value">
                        <input type="hidden" name="id" value="{{$v->id}}" class="id">
                        <a title="投票" href="javascript:///" class="dbtn btn_orange goods_836_vote" name="votegoods">投 票</a>
                    </p>
                    <div class="ib_row mgt10">
                    </div>
                    @endforeach
                </div>
                <script>
                    $(".goods_836_vote").click(function () {
                        var val = $(".sir_box .value").val();
                        var id = $(this).prev().val();
                        $.ajax({
                            url:"/shop/gift2",
                            type:"get",
                            data:{count:val,id:id},
                            success:function (data){
                                alert(data);
                            },
                            error:function(xhr,status,message){
                                alert(message);
                            }
                       });
                    });

                </script>
                <div class="sib_title"><h2 class="h2t">购买排行榜</h2></div>
                <div class="sir_box">
                    <ul class="sib_gift_list" id="shop_side_top">
                        @foreach($buy as $v)
                        <li class="act">
                            <div class="def">
                                <p>
                                    <a href="/shop/gift/li/{{$v->id}}" title="{{$v->desc}}">{{$v->name}}</a>
                                </p>
                            </div>
                            <div class="exc">
                                <p><i class="ico20 imperial">&nbsp;</i>
                                    <a href="/shop/gift/li/{{$v->id}}" title="{{$v->desc}}">{{$v->name}}</a></p>
                                <div class="pimg">
                                    <a href="/shop/gift/li/{{$v->id}}" title="{{$v->desc}}">
                                        <img src="/images/{{$v->icon}}" alt="{{$v->desc}}">
                                    </a>
                                </div>
                                <p class="isht"><i class="ico32 hd_money">&nbsp;</i>{{$v->price}}豆币</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @endsection