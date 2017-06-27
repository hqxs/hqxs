<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="Keywords" content="注册通行证">
    <meta name="Description" content="注册通行证">
    <title>@yield('title','注册')</title>
    <meta http-equiv="x-ua-compatible" content="ie=7">
    @yield('css')
    @yield('js')
</head>
<body nowidget="nowidget">
<div class="status_space">&nbsp;</div>
<div class="new_status clearfix">
    <div class="warpb clearfix">
        <div class="fl">
            <a href="" target="_blank">好豆网</a> |
            <a href="" target="_blank">菜谱</a> |
            <a href="" target="_blank">广场</a> |
            <a href="" target="_blank">商城</a>
        </div>
        <div class="befor_login fr fans_act">
			<span class="tabrow">
				&nbsp;欢迎您来到好豆！请
				<a href="" class="green" rel="nofollow">登录</a> 或
				<a href="" class="green" rel="nofollow">注册</a>
                {{--qq微信登入--}}
				<a class="login_vbn" href="http://login.haodou.com/call.php?do=connect&amp;site=6&amp;action=bind&amp;product=1&amp;is_new=1" rel="nofollow"><i class="ico20 login_qq">&nbsp;</i>QQ登录</a>
				<a class="login_vbn" href="http://login.haodou.com/call.php?do=connect&amp;site=3&amp;action=bind&amp;product=1&amp;is_new=1" rel="nofollow"><i class="ico20 login_sina">&nbsp;</i>微博登录</a>
			</span>
        </div>
    </div>
</div>
<div class="def_header clearfix">
    <div class="warpb clearfix">
        <div class="row def_pad_td">
            <h2 class="fl permit_title fv">好豆通行证</h2>
            <p class="fr permit_breakpoint">
                <a title="好豆网" href="" class="fl">&nbsp;</a>
            </p>
        </div>
    </div>
</div>
@section('register')

    @show

@section('loginUp')

    @endsection

<div class="xfooter dn_permit">
    <div class="warpb clearfix">
        <dl class="xf_box xf_first">
            <dt>关于我们</dt>
            <dd>
                <a title="关于好豆" href="">关于好豆</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>好豆旗下应用</dt>
            <dd>
                <a title="手机菜谱" href="">手机菜谱</a>
                <a title="好豆wap版" href="">好豆wap版</a>
                <a title="好豆win8版" href="">好豆win8版</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>关注好豆产品</dt>
            <dd class="box">
                <span class="fl">好豆网&nbsp;</span>
                <div class="fl frame">
                    <iframe scrolling="no" frameborder="0" style="width:400px;height:30px;border:none;overflow:hidden;" border="0" allowtransparency="true" src="./注册通行证，开启您的美食之旅_好豆网_files/like.html"></iframe>
                </div>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>好豆频道</dt>
            <dd>
                <a title="好豆网" href="">好豆网</a>
            </dd>
        </dl>
        <p class="xf_ver">
            © 2009-2016
            <a class="gray9" href="">好豆网</a>
            All Rights Reserved.
            <br>湘ICP备B2-20080075-3
            <br>
            <a target="_blank" href="http://img4.hoto.cn/public/images3/beian.jpg">长公网技(备)第43010239000021号</a>
        </p>
    </div>
</div>

</body></html>