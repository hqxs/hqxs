@extends("home\shop\shopExtends")
@section('title','商城_礼品馆_商品列表')
@section('css')
    <link rel="stylesheet" href="/css/shopAll.css">
    @endsection
@section('js')
    {{--两边悬浮/搜索--}}
    <script type="text/javascript" src="/js/home/index/saved_resource(1)"></script>
    <script src="/js/home/shopAll/hm.js"></script>
    <script async="" src="/js/home/shopAll/analytics.js"></script>
    @endsection
@section('shopAll')
    <div class="ie6hack">&nbsp;</div>
    <div class="warpb clearfix">
        <div class="auto pdt20 fs"><a title="商城" href="http://shop.haodou.com/">商城</a>
            &gt; <a title="礼品馆" href="http://shop.haodou.com/gift.php">礼品馆</a>
            &gt; 食材
        </div>
        <div class="fl area_sp mgt10">
            <div class="shop_idx_rt_box">
                <div class="shop_idx_rt_box">
                    <div class="sir_box">
                        <h3>兑换排行榜</h3>
                        <ul class="sib_gift_list" id="shop_side_top">
                            <li>
                                <div class="def">
                                    <p>
                                        <b>8</b>
                                        <a href="http://shop.haodou.com/view.php?id=837" title="实智P1.智能排插">实智P1.智能排插</a>
                                    </p>
                                </div>
                                <div class="exc">
                                    <p><b>8</b> <a href="http://shop.haodou.com /view.php?id=837" title="实智P1.智能排插">实智P1.智能排插</a></p>
                                    <div class="pimg"><a href="http://shop.haodou.com/view.php?id=837" title="实智P1.智能排插"><img src="./食材_商城_好豆网_files/837_230.jpg" alt="实智P1.智能排插"></a></div>
                                    <p class="isht"><i class="ico32 hd_money">&nbsp;</i>28000豆币</p>

                                </div>

                            </li>
                            <li>
                                <div class="def">
                                    <p>
                                        <b>8</b>
                                        <a href="http://shop.haodou.com/view.php?id=837" title="实智P1.智能排插">实智P1.智能排插</a>
                                    </p>
                                </div>
                                <div class="exc">
                                    <p><b>8</b> <a href="http://shop.haodou.com/view.php?id=837" title="实智P1.智能排插">实智P1.智能排插</a></p>
                                    <div class="pimg"><a href="http://shop.haodou.com/view.php?id=837" title="实智P1.智能排插"><img src="./食材_商城_好豆网_files/837_230.jpg" alt="实智P1.智能排插"></a></div>
                                    <p class="isht"><i class="ico32 hd_money">&nbsp;</i>28000豆币</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="shop_idx_rt_box">
                    <div class="sir_box mgt20">
                        <h3>最新兑换</h3>
                        <ul class="sib_uid_list">
                            <li>
                                <a title="迷你蛋糕卷锅（接受预定）" href="http://shop.haodou.com/view.php?id=709"><img alt="迷你蛋糕卷锅（接受预定）" src="./食材_商城_好豆网_files/709_80.jpg"></a>
                                <div class="ohz">
                                    <p><a title="迷你蛋糕卷锅（接受预定）" href="http://shop.haodou.com/view.php?id=709">迷你蛋糕卷锅（接受预定）</a></p>
                                    <p>兑换价：<span class="orange">2988豆币</span></p>
                                </div>
                            </li>
                            <li>
                                <a title="迷你家用厨房秤（接受预定）" href="http://shop.haodou.com/view.php?id=699"><img alt="迷你家用厨房秤（接受预定）" src="./食材_商城_好豆网_files/699_80.jpg"></a>
                                <div class="ohz">
                                    <p><a title="迷你家用厨房秤（接受预定）" href="http://shop.haodou.com/view.php?id=699">迷你家用厨房秤（接受预定）</a></p>
                                    <p>兑换价：<span class="orange">5500豆币</span></p>
                                </div>
                            </li>
                            <li>
                                <a title=" 祈和打蛋器（接受预定）" href="http://shop.haodou.com/view.php?id=87"><img alt=" 祈和打蛋器（接受预定）" src="./食材_商城_好豆网_files/87_80.jpg"></a>
                                <div class="ohz">
                                    <p><a title=" 祈和打蛋器（接受预定）" href="http://shop.haodou.com/view.php?id=87"> 祈和打蛋器（接受预定）</a></p>
                                    <p>兑换价：<span class="orange">8800豆币</span></p>
                                </div>
                            </li>
                            <li>
                                <a title="重型钢香槟金色法棍模具（接受预定）" href="http://shop.haodou.com/view.php?id=833"><img alt="重型钢香槟金色法棍模具（接受预定）" src="./食材_商城_好豆网_files/833_80.jpg"></a>
                                <div class="ohz">
                                    <p><a title="重型钢香槟金色法棍模具（接受预定）" href="http://shop.haodou.com/view.php?id=833">重型钢香槟金色法棍模具（接受预定）</a></p>
                                    <p>兑换价：<span class="orange">7180豆币</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fr area_gp mgt10">
            <div class="shop_idx_lt_box">
                <div class="sib_sele">
                    <p class="b"><span class="orange">食材</span> 商品筛选</p>
                    <p class="b gray9">价格：
                        <span class="sele_tag">
					<a title="10000以下" class="" href="http://shop.haodou.com/all.php?c=501&amp;w=1">10000以下</a>
					<a title="10001-20000" class="" href="http://shop.haodou.com/all.php?c=501&amp;w=2">10001-20000</a>
					<a title="20001-30000" class="" href="http://shop.haodou.com/all.php?c=501&amp;w=3">20001-30000</a>
					<a title="30001-40000" class="" href="http://shop.haodou.com/all.php?c=501&amp;w=4">30001-40000</a>
					<a title="40001-50000" class="" href="http://shop.haodou.com/all.php?c=501&amp;w=5">40001-50000</a>
					<a title="50000以上" class="" href="http://shop.haodou.com/all.php?c=501&amp;w=6">50000以上</a>
				</span>
                    </p>
                </div>
                <div class="sib_ht">
                    <p class="mbtx">排序：</p>
                    <p class="menubox">
                        <a title="兑换量" href="http://shop.haodou.com/all.php?c=501&amp;o=b1" class="fst ">兑换量<i class="ico12 sdn">&nbsp;</i></a><a title="价格" href="http://shop.haodou.com/all.php?c=501&amp;o=w2" class="">价格<i class="ico12 sup">&nbsp;</i></a><a title="上架时间" href="http://shop.haodou.com/all.php?c=501&amp;o=n2" class="end  sel">上架时间<i class="ico12 sdn">&nbsp;</i></a>
                    </p>
                </div>
                <!-- 页面商品显示主体 -->
                <p class="no_data"><i class="ico32">&nbsp;</i>
                    没有搜索到符合&nbsp;食材&nbsp;条件的礼品，您可以看看<a href="http://shop.haodou.com/all.php">其他礼品</a>。
                </p>
            </div>
            <div class="bd_pagex clearfix">
            </div>
        </div>
    </div>
    @endsection