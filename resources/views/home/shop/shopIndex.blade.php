@extends("home\shop\shopExtends")

@section('css')
    <link rel="stylesheet" href="/css/shopindex.css">
    @endsection
@section('js')
    {{--<script async="" src="/js/home/index/analytics.js"></script>--}}
    {{--<script src="/js/home/index/hm.js"></script>--}}
    {{--<script async="" src="/js/home/index/analytics(1).js"></script>--}}
    {{--<script src="/js/home/index/hm(1).js"></script>--}}
    {{--jq文件--}}
    <script type="text/javascript" src="/js/home/index/saved_resource(2)"></script>
    <script type="text/javascript" src="/js/home/index/saved_resource(1)"></script>
    @endsection
@section('title','商城_首页')

@section('shopMain')
<div class="warpb clearfix">
    <div class="shop_home_slide">
        <div class="sh_slidebox">
            <div class="slideRoll fl">
                <ul class="picture_ul">
                    {{--页面小轮播图--}}
                    @foreach($imgs as $v)
                        <li style="display: list-item;">
                            <a target="_blank" title="{{$v->title}}" href="">
                                <img alt="{{$v->title}}" src="/images/{{$v->icon}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul class="point_ul">
                    <li class="activ">&nbsp;</li>
                    <li class="">&nbsp;</li>
                </ul>
            </div>
        </div>
        <!-- 个人信息栏 -->
        <div class="informbox">
            <dl class="inform mgt10">
                <dt>最新公告<span class="green mgl5">/</span>
                    <a target="_blank" title="更多" href="" class="green">更多</a>
                </dt>
                <dd>·<a target="_blank" title="商城礼品发票相关事宜！" href="">商城礼品发票相关事宜！</a></dd>
            </dl>
        </div>
    </div>

    <div class="shop_home_lis">
        <div class="home_leading">
            <h3><a href="shop/gift">礼品馆</a></h3>
        </div>
        <div class="sh_flist">
            <ul>
                @foreach($gifts as $v)
                <li>
                    <div class="imexc">
                        <a title="{{$v->desc}}" href="/shop/gift/li/{{$v->id}}">
                            <img alt="{{$v->name}}" src="/images/{{$v->icon}}" style="width: 304px; height: 304px">
                        </a>
                    </div>
                    <p>
                        <i class="ico32 hd_money">&nbsp;</i>
                        <span class="orange">
                            <span class="f16">{{$v->price}}</span> 元
                        </span>
                    </p>
                </li>
                    @endforeach
            </ul>
        </div>
    </div>
    {{--<div class="shop_home_lis">--}}
        {{--<div class="home_leading">--}}
            {{--<h3><a href="shop/lift">生活馆</a></h3>--}}
        {{--</div>--}}
        {{--<div class="sh_second">--}}
            {{--<ul>--}}
                {{--@foreach($lifes as $v)--}}
                {{--<li>--}}
                    {{--<p>--}}
                        {{--<a target="_blank" title="{{$v->name}}" href="{{$v->id}}">--}}
                            {{--<img alt="{{$v->name}}" src="/images/{{$v->icon}}">--}}
                            {{--<span class="title">{{$v->name}}</span>--}}
                        {{--</a>--}}
                    {{--</p>--}}
                {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
            {{--<dl>--}}
                {{--@foreach($cates as $v)--}}
                    {{--@if($v['path'] == "0.2.")--}}
                        {{--<dt>--}}
                            {{--<a target="_blank" title="{{$v['name']}}" href="{{$v['gid']}}" class="green">{{$v['name']}}</a>--}}
                        {{--</dt>--}}
                        {{--<dd>--}}
                            {{--@foreach($cates as $vv)--}}
                            {{--@if($vv['pid'] == $v['cid'])--}}
                            {{--<a target="_blank" title="{{$vv['name']}}" href="{{$vv['gid']}}">{{$vv['name']}}</a>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--</dd>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
            {{--</dl>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="shop_flow">--}}
        <h2 id="shop_waterfall_title" _size="12">好豆推荐</h2>
        <div class="shop_flowbox shop_waterfall_container" id="shop_waterfall_container">
            {{--生活馆--}}
            @foreach($all as $v)
            <ul class="shop_waterfall_ul">
                <li>
                    <div class="im_bx">
                        <a target="_blank" title="{{$v->name}}" href="{{$v->id}}">
                            <img rel="nofollow" alt="{{$v->name}}" src="{{$v->icon}}">
                            <span class="price">{{$v->price}}</span>
                        </a>
                    </div>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
@endsection