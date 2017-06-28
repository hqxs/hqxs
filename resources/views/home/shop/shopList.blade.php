@extends("home/shop/shopExtends")
@section("title","商品详情")
@section("css")
    <link rel="stylesheet" href="/css/shopList.css">
    @endsection
@section("js")
    <script src="/js/home/shoplist/analytics.js"></script>
    <script src="/js/home/shoplist/hm.js"></script>
    <script src="/js/home/shoplist/saved_resource(1)"></script>
    <script src="/js/home/shoplist/saved_resource(2)"></script>
    @endsection
@section("shopList")
    <div class="ie6hack">&nbsp;</div>
    <div class="warpb clearfix">
        <div class="auto pdt20 fs">
            <a title="商城" href="/">商城</a> &gt;
            <a title="礼品馆" href="shop/gift">礼品馆</a> &gt;
        </div>
        <div class="shop_imbgbox">
            @foreach($list as $list)
            <div class="treasure_lt" id="shop_roll">
                <div class="sp_bigims_ex">
                    <img alt="{{$list->name}}" src="/images/{{$list->icon}}">
                </div>
                <div class="sp_bigims_ctrl">
                    <p class="sp_ctrl">
                        <i class="ico32 lti">&nbsp;</i>
                        <i class="ico32 rti">&nbsp;</i>
                    </p>
                    <div class="sp_shift">
                        <ul>
                            @foreach($icon as $v)
                            <li class="vt">
                                <img alt="" src="{{$v->icon}}">
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="treasure_rt">
                <h1 class="pdb10">{{$list->name}}</h1>
                <p class="f14 b orange"></p>
                <ul class="sp_imbox_ctrl fs clearfix">
                    <li>
                        <p class="dt pos_is_up">单&nbsp;价：</p>
                        <div class="dd"><span class="f16 red b">{{$list->price}}</span></div>
                    </li>
                    <li class="dline">
                        <p class="dt">购买量：</p>
                        <div class="dd shorten">{{$list->sold}}次</div>
                        <p class="dt">关注人次：</p>
                        <div class="dd shorten">{{$list->focus}}次</div>
                    </li>
                    <li>
                        <p class="dt">购买数量：</p>
                        <div class="dd">
                            <a id="delnum" title="减少" href="javascript://" class="math_cut">-</a>						<input id="buynum" type="text" value="1" size="4" class="inpx tc">
                            <a title="增加" id="addnum" href="javascript://" class="math_add">+</a>库存<span id="goodsstock">102</span>件
                        </div>
                    </li>
                    <li class="dline">
                        <p class="dt pos_is_upx">支付方式：</p>
                        <div class="dd">
                            <em class="ev">支付宝</em><!-- <em>现金支付</em><em>混合支付</em> -->
                        </div>
                    </li>
                    <li class="mgt10">
                        <p class="dt">&nbsp;</p>
                        <div class="dd">
                            <a id="buy_837" name="buynow" title="立即兑换" href="javascript:///" class="dbtn btn_orange f14">立即购买</a>
                            <a id="buy_837" name="buynow" title="加入购物车" href="javascript:///" class="dbtn btn_orange f14">加入购物车</a>
                        </div>
                    </li>
                </ul>
            </div>
                @endforeach
        </div>
        <div class="fl area_sp mgt20">
            <div class="shop_idx_rt_box">
                <div class="shop_idx_rt_box">
                    <div class="sir_box">
                        <h3>销售排行榜</h3>
                        <ul class="sib_gift_list" id="shop_side_top">
                            @foreach($sold as $v)
                            <li>
                                <div class="exc" style="display:block;height: 300px;">
                                    <p style="text-align: center">
                                        <a href="/shop/gift/li/{{$v['id']}}" title="{{$v['name']}}">{{$v['name']}}</a>
                                    </p>
                                    <div class="pimg">
                                        <a href="/images/{{$v['icon']}}" title="{{$v['name']}}">
                                            <img src="/images/{{$v['icon']}}" alt="{{$v['name']}}">
                                        </a>
                                    </div>
                                    <p class="isht">
                                        <i class="ico32 hd_money">&nbsp;</i>{{$v['price']}}豆币
                                        <p><span>已售</span><span>{{$v['sold']}}</span></p>
                                    </p>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <div class="shop_idx_rt_box">
                    <div class="sir_box mgt20">
                    </div>
                </div>
            </div>
        </div>
        <div class="fr area_gp mgt20">
            <div class="shop_results_box">
                <div class="srb_submubox" id="product_tab_title">
                    <p class="srb_mubox">
                        <a title="商品详情" href="javascript:///" class="selx">商品详情</a>
                        <a title="兑换须知" href="javascript:///">礼品描述</a>
                        <a title="产品参数" href="javascript:///">产品参数</a>
                        <a title="商品评论" href="javascript:///">商品评论</a>
                    </p>
                </div>
                <div class="product_tab_content">
                    <div class="srb_unit">
                        <h2>商品详情</h2>
                        <div class="qx_code gray6">
                            @foreach($det as $v)
                            <img src="/images/{{$v->pic}}"><br>
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="product_tab_content">
                    <div class="srb_unit">
                        <h2>礼品描述</h2>
                        <div class="qx_code gray6 fs">
                            @foreach($desc as $v)
                            <span style="font-size: 14px; line-height: 28px; background-color: rgb(255, 255, 255); font-family: 微软雅黑; color: rgb(102, 102, 102);">{{$v->describe}}</span><br style="font-size: 14px; line-height: 28px; background-color: rgb(255, 255, 255); font-family: 微软雅黑; color: rgb(102, 102, 102);">
                                @endforeach
                        </div>
                    </div>
                </div>
                <!-- 产品参数 -->
                <div class="product_tab_content">
                    <div class="srb_unit">
                        <h2>产品参数</h2>
                        <div class="qx_code gray6">
                            @foreach($detail as $v)
                            <img src="/images/{{$v->pic}}">
                                @endforeach
                        </div>
                    </div>
                </div>
                <!-- 评论功能 -->
                <div class="product_tab_content">
                    <div class="srb_comment_embed">
                        <a name="comment"></a>
                        <p class="ie6hack">&nbsp;</p>
                        <div id="hd-comment" data-item_id="837" data-channel="giftshop" data-version="3" class="mod_exlt"><div class="mod_comment">
                                <div class="pub_cmt_title">
                                    <h2>全部评论<span class="n font12" id="__cmt_count">(0条)</span><i class="lt"></i><i class="rt"></i></h2>
                                </div>
                                <div class="write clearfix mgt20 mgb20">
                                    <div class="photo">
                                        <a href="javascript:///" title=""><img width="70" height="70" id="__cmt_avatar" alt="" src="./实智P1.智能排插_商城_好豆网_files/48901_48.jpg"></a>
                                    </div>
                                    <div class="cmt_main clearfix">
                                        <div class="aera_up clearfix fl">
                                            <div class="fl">
                                                <a href="javascript:///" id="__cmt_face_comment" class="area_face vtl"><img src="./实智P1.智能排插_商城_好豆网_files/temp-14.gif"></a>
                                            </div>
                                            <div class="syn fr mgt5" id="_cmt_syn_comment" style="width:auto"></div>
                                        </div>
                                        <textarea class="fl gray9" rows="" cols="" id="__cmt_content_comment"></textarea>
                                        <div style="position:relative;" class="clearfix cb pdt5">
                                            <input type="submit" value="发布" id="__cmt_post_comment" class="dbtn btn_green fr">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="__cmt_reply_box" style="display:none">
                                <div class="write clearfix">
                                    <div class="cmt_main clearfix">
                                        <textarea class="fl gray9 mgb10 big_sub" rows="" id="__cmt_content_reply" cols=""></textarea>
                                        <div style="position:relative;" class="clearfix cb mgt5 pdb5">
                                            <input type="submit" value="回复" id="__cmt_reply_comment" class="dbtn btn_green re_dbtn">
                                            <div class="fl">
                                                <a href="javascript:///" id="__cmt_face_reply" class="area_face"><img alt="" src="./实智P1.智能排插_商城_好豆网_files/temp-14.gif"></a>
                                            </div>
                                            <div class="syn fl" id="_cmt_syn_reply"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection