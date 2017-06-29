@extends("home/shop/shopExtends")
@section('title',"购物车")
@section('css')
    <link rel="stylesheet" href="/css/shopCart.css">
    <link rel="stylesheet" href="/css/shopCartBase.css">
    <link rel="stylesheet" href="/css/shopCartGlobal.css">
    <link rel="stylesheet" href="/css/shopList.css">
    @endsection
@section('js')
    <script src="/js/jquery-1.8.3.min.js"></script>
    {{--<script type="text/javascript" src="/js/home/shopCart/cart.js"></script>--}}
    @endsection
@section('shopCart')
    <div class="mycart w990 mt10 bc">
        <h2><span>我的购物车</span></h2>
        <table>
            <thead>
            <tr>
                <th class="col1">商品名称</th>
                <th class="col2">商品信息</th>
                <th class="col3">单价</th>
                <th class="col4">数量</th>
                <th class="col5">小计</th>
                <th class="col6">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $v)
            <tr>
                <td class="col1">
                    <a href="{{$v->id}}">
                        <img src="/images/{{$v->icon}}" alt="{{$v->desc}}" />
                    </a>
                    <strong><a href="{{$v->id}}">{{$v->name}}</a>
                    </strong>
                </td>
                <td class="col2"> <p>{{$v->desc}}</p></td>
                <td class="col3">￥<span>{{$v->price}}</span></td>
                <td class="col4">
                    <input id="store" type="hidden" value="{{$v->store}}">
                    <a href="javascript:;" class="reduce_num">-</a>
                    <input type="text" name="amount" value="{{$v->count}}" class="amount"/>
                    <a href="javascript:;" class="add_num">+</a>
                </td>
                <td class="col5">￥<span>{{$v->price * $v->count}}</span></td>
                <td class="col6"><a href="">删除</a></td>
            </tr>
            @endforeach
            <script>
                $(function () {
                    $(".add_num").click(function () {
                        var store = $(this).parent().find("input").eq(0).val();
                        var num = parseInt($(this).parent().find(".amount").val());
                        var num = num + 1;
                        //判断不能大于某一个值
                        if (num >= store)
                        {
                            $(this).parent().find(".amount").val(store);
                            return;
                        }else {
                            $(this).parent().find(".amount").val(num);
                        }
                        //获取小计的标签
                        var xiaoji = $(this).parent().parent().find(".col5 span");
                        //获取单价
                        var danjia = parseFloat($(this).parent().parent().find(".col3 span").html());
                        //计算小计
                        xiaoji.html((danjia * num).toFixed(2));
                        //声明一个总价
                        var total = 0;
                        //得到所有的小计
                        $(".col5 span").each(function () {
                            total += parseFloat($(this).html());
                        });
                        //写到html标签
                        $("#total").html(total.toFixed(2));
                    });
                    $(".reduce_num").click(function () {
                        var store = $(this).parent().find("input").eq(0).val();
                        var num = parseInt($(this).parent().find(".amount").val());
                        var num = num - 1;
                        if (num <= 1)
                        {
                            $(".amount").val(1);
                            var num = num + 1;
                        }else if(num > store){
                            $(this).parent().find(".amount").val(store);
                        }else {
                            $(this).parent().find(".amount").val(num);
                        }
                        //获取小计的标签
                        var xiaoji = $(this).parent().parent().find(".col5 span");
                        //获取单价
                        var danjia = parseFloat($(this).parent().parent().find(".col3 span").html());
                        //计算小计
                        xiaoji.html((danjia * num).toFixed(2));
                        //声明一个总价
                        var total = 0;
                        //得到所有的小计
                        $(".col5 span").each(function () {
                            total += parseFloat($(this).html());
                        });
                        //写到html标签
                        $("#total").html(total.toFixed(2));
                    });
                    var total = 0 ;
                    $(".col5 span").each(function () {
                        total += parseFloat($(this).html());
                    });
                   $("#total").html(total);
                });
            </script>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="6">购物金额总计： <strong>￥ <span id="total"> </span></strong></td>
            </tr>
            </tfoot>
        </table>
        <div class="cart_btn w990 bc mt10">
            <a href="/" class="continue">继续购物</a>
            <a href="" class="checkout">结 算</a>
        </div>
    </div>
    @endsection