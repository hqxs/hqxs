
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="注册通行证" />
    <meta name="Description" content="注册通行证" />
    <title>注册通行证，开启您的美食之旅_好豆网</title>
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <link rel="stylesheet" type="text/css" href="../public/css/login.css" >
</head>

<body nowidget="nowidget">
<div class="status_space">&nbsp;</div>
<div class="new_status clearfix">
    <div class="warpb clearfix">
        <div class="fl">
            <a href="http://www.haodou.com" target="_blank">好豆网</a> |
            <a href="http://www.haodou.com/recipe" target="_blank">菜谱</a> |
            <a href="http://group.haodou.com/" target="_blank">广场</a> |
            <a href="http://shop.haodou.com" target="_blank">商城</a>
        </div>
        <div class="befor_login fr fans_act">
				<span class="tabrow">
					&nbsp;欢迎您来到好豆！请
					<a href="http://login.haodou.com" class="green" rel="nofollow">登录</a> 或
					<a href="http://login.haodou.com/register.php?product=1" class="green" rel="nofollow">注册</a>
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
        <h1>注册通行证</h1>
        <div class="box">
            <form class="reg_main" action="{{url('doRegister')}}" method="post">
                {{csrf_field()}}
                <div id="reg_fields_mobile">
                    <div class="flex_row">
                        <span class="grid_name">手机号：</span>
                        <div class="grid_input"><input class="inptx" name="tel" id="mobile_account" type="text" placeholder="请输入您常用的手机号码" value="" data-tip=""></div>
                        <p class="side_prompt"></p>
                    </div>
                    <div class="flex_row">
                        <span class="grid_name">&nbsp;</span>
                        <div class="grid_txt">
                            <a class="dbtn btn_gray" id="btn_send_sms" data-left="3" href="javascript:///" title="免费获取校验码">免费获取校验码</a><span class="dbcl" style="display: none;">60秒后可重新获取校验码</span>
                        </div>
                        <p class="side_prompt"></p>
                    </div>
                    <div class="flex_row">
                        <span class="grid_name">校验码：</span>
                        <div class="grid_input code"><input class="inptx" name="sms_code" type="text" id="mobile_code" placeholder="校验码" data-tip="请查收手机短信，并填写短信中的校验码"  value=""></div>
                    </div>
                    <div class="flex_row">
                        <span class="grid_name">昵称：</span>
                        <div class="grid_input"><input class="inptx" name="name" type="text" id="mobile_nickname" placeholder="不超过8个汉字或16个字母" data-tip="让更多的豆友认识你" value=""></div>
                        <p class="side_prompt"></p>
                    </div>
                    <div class="flex_row">
                        <span class="grid_name">密码：</span>
                        <div class="grid_input"><input class="inptx" name="pwd" type="password" id="mobile_password" placeholder="不少于6位，建议包含字母和数字" data-tip="最少6位,请使用英文字母、符号或数字" value=""></div>
                        <p class="side_prompt"></p>
                    </div>
                    <div class="flex_row">
                        <span class="grid_name">确认密码：</span>
                        <div class="grid_input"><input class="inptx" name="user_pw" type="password" id="mobile_password_retype" placeholder="请确认您的密码" data-tip="请确认您的密码" value=""></div>
                        <p class="side_prompt"></p>
                    </div>
                </div><!--reg_fields_mobile-->
                <div class="btn_box">
                    <input type="submit" id="btn_register" value="同意协议并注册" class="btn_green dbtn long" />
                </div>
                <div class="flex_row">
                    <span class="grid_name">&nbsp;</span>
                    <div class="grid_txt"><a href="http://www.haodou.com/help/about.php#privacy" target="_blank">《好豆网用户协议》</a></div>
                </div>
            </form>
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
