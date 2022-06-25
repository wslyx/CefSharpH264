/* For ZBlogPHP LoginReg [ https://app.zblogcn.com/?id=1558 ] */

var lrDelay = 1, lrCkey = 1, lrCookie = 7, lrGoto = "1", lrGiway = "", lrRmail = 0, lrTools = 0;
$(function(){
	var LoginRegDom = '\
<style>#navbar-item-lrlogout{display:none;}#lr_mainbar .lr_mbg,.lr_arrow::after{background:#000000;}.lr_btn_lg{background-color:#0886A1;}.lr_btn_rg{background-color:#81AA05;}</style>\
	<div id="lr_mform">\
	<dl class="lr_login">\
		<dt>登录</dt>\
		<dd>\
			<i class="lr-icon icon-lr-nickname1"></i>\
			<input type="text" name="UserName" class="lr_int">\
			<div class="tip">用户名</div>\
		</dd>\
		<dd>\
			<i class="lr-icon icon-lr-password1"></i>\
			<input type="password" name="PassWord" class="lr_int">\
			<div class="tip">密码</div>\
		</dd>\
		<dd class="lr_code"><i class="lr-icon icon-lr-safe1"></i><input type="text" name="Vcode" maxlength="5" class="lr_int"><img class="verfiycode" title="点击切换" src="https://www.javalc.com/zb_system/script/c_validcode.php?id=LoginRegL"><div class="tip">验证码</div></dd>\
		<dd class="lr_more">\
			<div class="lr_l"><input type="checkbox" id="Remember" name="Remember" value="7" class="lr_chk" checked="checked"><label for="Remember">7天内自动登录</label></div><div class="lr_r"><a href="javascript:;" class="lr_to_find" target="_self">忘记密码</a><a href="javascript:;" class="lr_to_reg" target="_self">注册</a></div>\
		</dd>\
		<dd class="lr_act"><button type="button" class="lr_post">登录</button></dd>\
			</dl>\
		<dl class="lr_reg">\
		<dt>注册</dt>\
		<dd>\
			<i class="lr-icon icon-lr-nickname1"></i>\
			<input type="text" name="UserName" maxlength="20" autocomplete="off" class="lr_int">\
			<div class="tip">用户名</div>\
		</dd>\
		<dd>\
			<i class="lr-icon icon-lr-password"></i>\
			<input type="password" name="PassWord" maxlength="20" class="lr_int">\
			<div class="tip">密码<em>(至少8位)</em></div>\
		</dd>\
		<dd>\
			<i class="lr-icon icon-lr-cfmpassword"></i>\
			<input type="password" name="PassWord2" maxlength="20" class="lr_int">\
			<div class="tip">确认密码</div>\
		</dd>\
		<dd><i class="lr-icon icon-lr-ic_tab_username"></i><input type="text" name="PersonName" maxlength="30" class="lr_int"><div class="tip">昵称</div></dd>\
		<dd><i class="lr-icon icon-lr-webmail"></i><input type="text" name="Email" maxlength="50" class="lr_int"><div class="tip">邮箱<em>(请填写常用邮箱)</em></div></dd>\
		\
		<dd class="lr_icode"><i class="lr-icon icon-lr-invite2"></i><input type="text" name="Icode" maxlength="22" class="lr_int"><a href="javascript:;" class="geticode">获取邀请码</a><div class="tip">邀请码</div></dd>\
		<dd class="lr_code"><i class="lr-icon icon-lr-safe1"></i><input type="text" name="Vcode" maxlength="5" class="lr_int"><img class="verfiycode" title="点击切换" src="https://www.javalc.com/zb_system/script/c_validcode.php?id=LoginReg"><div class="tip">验证码</div></dd>\
		<dd class="lr_more"><div class="lr_l"><input type="checkbox" id="agreement" name="agreement" class="lr_chk" checked="checked"><label for="agreement">已读并同意《<a href="#" target="_blank">用户注册协议</a>》</label></div><div class="lr_r"><a href="javascript:;" class="lr_reset" target="_self">重填</a><a href="javascript:;" target="_self" class="lr_to_login">登录</a></div></dd>\
		<dd class="lr_act"><button type="button" class="lr_post">提交</button></dd>\
	</dl>\
			<dl class="lr_password_find">\
		<dt>找回密码</dt>\
		<dd>\
			<i class="lr-icon icon-lr-nickname1"></i>\
			<input type="text" name="UserName" maxlength="20" class="lr_int">\
			<div class="tip">用户名</div>\
		</dd>\
		<dd>\
			<i class="lr-icon icon-lr-webmail"></i>\
			<input type="text" name="Email" maxlength="50" class="lr_int">\
			<div class="tip">邮箱</div>\
		</dd>\
		<dd class="lr_more">\
			<div class="lr_l">※ 重置链接将发送到邮箱</div>\
			<div class="lr_r"><a href="javascript:;" target="_self" class="lr_to_login">登录</a><a href="javascript:;" class="lr_to_reg" target="_self">注册</a></div>\
		</dd>\
		<dd class="lr_act"><button type="button" class="lr_post">提交</button></dd>\
	</dl>\
		</div>\
';
	$("body").append(LoginRegDom);
});
