<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="用户登录" />
    <meta name="Description" content="用户登录" />
    <title>只需一步，快速开始您的美食生活_好豆网</title>
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link rel="stylesheet" type="text/css" href="/css/publish8.css" />
    <script type="text/javascript" src="/js/publish12.js"></script>
</head>
<body nowidget="nowidget">
<div class="status_space">&nbsp;</div>
<div class="new_status clearfix">
    <div class="warpb clearfix">
        <div class="fl">
            <a href="{{url('/group_index')}}" target="_blank">广场</a>
        </div>
        <div class="befor_login fr fans_act">
				<span class="tabrow">
					&nbsp;欢迎您来到好豆！请
					<a href="{{url('/login')}}" class="green" rel="nofollow">登录</a> 或
					<a href="{{url('/register')}}" class="green" rel="nofollow">注册</a>
					<a class="login_vbn" href="/call.php?do=connect&site=6&action=bind&product=1&referer=http%3A%2F%2Fgroup.haodou.com%2F&is_new=1" rel="nofollow"><i class="ico20 login_qq">&nbsp;</i>QQ登录</a>
					<a class="login_vbn" href="/call.php?do=connect&site=3&action=bind&product=1&referer=http%3A%2F%2Fgroup.haodou.com%2F&is_new=1" rel="nofollow"><i class="ico20 login_sina">&nbsp;</i>微博登录</a>
				</span>
        </div>
    </div>
</div>
<div class="def_header clearfix">
    <div class="warpb clearfix">
        <div class="row def_pad_td">
            <h2 class="fl permit_title fv">好豆通行证</h2>
            <p class="fr permit_breakpoint">
                <a title="好豆网" href="http://www.haodou.com/" class="fl">&nbsp;</a>
            </p>
        </div>
    </div>
</div>

<!-- 主体内容 -->
<div class="warpb clearfix">
    <div class="regbox">
        <h1>登录好豆网</h1>
        <h2>在好豆网可以查看菜谱，发现美食，结交朋友</h2>
        <div class="box">
            <form class="reg_main" action="{{url('/dologin')}}" method="post">
                {{csrf_field()}}
                <p class="all_prompt" id="all_prompt" style="visibility: hidden;"><i class="ico20 ico_warning">&nbsp;</i><span></span></p>
                <div class="flex_row">
                    <span class="grid_name">账号：</span>
                    <div class="grid_input"><input maxlength="11" class="inptx" name="phone" id="account" type="text" placeholder="手机号码" value=""></div>
                    <p class="side_prompt" style="visibility: hidden;"><i>&nbsp;</i><span></span></p>
                </div>
                <div class="flex_row">
                    <span class="grid_name">密码：</span>
                    <div class="grid_input"><input class="inptx" name="password" id="password" type="password" placeholder="请输入您的密码" value=""></div>
                    <p classs="side_prompt" style="visibility: hidden;"><i>&nbsp;</i><span></span></p>
                </div>
                <div class="flex_row">
                    <span class="grid_name">&nbsp;</span>
                    <div class="grid_input fet">
                        <label class="fl"><input id="auto_login" type="checkbox" name="radio" class="radio" checked="checked">自动登录</label>
                        <a href="http://login.haodou.com/find.php?do=lostPassword" title="忘记密码？">忘记密码？</a>
                    </div>
                </div>
                <div class="btn_box">
                    <input name="登录" type="submit"  value="登  录" class="btn_green dbtn"  id="subbb"/>
                </div>
            </form>
            <div class="reg_side">
                <p>还没有注册？<a title="立即注册" href="{{url('/register')}}" class="green">立即注册！</a></p>
            </div>

            <div class="reg_side">
                <p class="mgt10">使用以下账号快速登录：</p>
                <div class="other_login clearfix">
                    <a title="新浪微博" href="/call.php?do=connect&site=3&action=bind&product=1&referer=http%3A%2F%2Fgroup.haodou.com%2F" class="ico32 gl_sina">&nbsp;</a>
                    <a title="QQ账号" href="/call.php?do=connect&site=6&action=bind&product=1&referer=http%3A%2F%2Fgroup.haodou.com%2F" class="ico32 gl_tencent">&nbsp;</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="xfooter dn_permit">
    <div class="warpb clearfix">
        <dl class="xf_box xf_first">
            <dt>关于我们</dt>
            <dd>
                <a title="关于好豆" href="http://www.haodou.com/help/about.php">关于好豆</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>好豆旗下应用</dt>
            <dd>
                <a title="手机菜谱" href="http://www.haodou.com/help/mobile.php">手机菜谱</a>
                <a title="好豆wap版" href="http://www.haodou.com/help/mobile.php?do=Wap">好豆wap版</a>
                <a title="好豆win8版" href="http://www.haodou.com/help/mobile.php?do=Windows">好豆win8版</a>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>关注好豆产品</dt>
            <dd class="box">
                <span class="fl">好豆网&nbsp;</span>
                <div class="fl frame">
                    <iframe scrolling="no" frameborder="0" style="width:400px;height:30px;border:none;overflow:hidden;" border="0" allowtransparency="true" src="http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F1766685013&amp;type=button&amp;width=400&amp;height=30&amp;style=2"></iframe>
                </div>
            </dd>
        </dl>
        <dl class="xf_box">
            <dt>好豆频道</dt>
            <dd>
                <a title="好豆网" href="http://www.haodou.com/">好豆网</a>
            </dd>
        </dl>
        <p class="xf_ver">
            &copy; 2009-2016 <a class="gray9" href="http://www.haodou.com/">好豆网</a> All Rights Reserved.
            <br />湘ICP备B2-20080075-3
            <br /><a target="_blank" href="http://img4.hoto.cn/public/images3/beian.jpg">长公网技(备)第43010239000021号</a>
        </p>
    </div>
</div>
</body>
</html>
