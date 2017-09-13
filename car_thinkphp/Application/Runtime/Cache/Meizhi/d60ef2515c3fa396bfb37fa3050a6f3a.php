<?php if (!defined('THINK_PATH')) exit();?>﻿<meta http-equiv="content-type" content="text/html" charset="utf-8" />
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
                <meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<title>驾校登录界面2.0</title>
 		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
 		<link rel="stylesheet" href="/Public/Meizhi/css/login.css" />
 		<script type="text/javascript" src="/Public/Meizhi/js/login.js" ></script>
 		
	</head>
	<body>
 	<img src="/Public/Meizhi/img/111.jpg" class="background_img"/>
		
		<!--登录开始-->
		<form action="<?php echo U('checklogin');?>" method="post">
		<div class="manager" id="manager">
			
			<div class="title_login">登录</div>
			<div class="login_username"><!--登录账号-->
				<input type="text" class="username" placeholder="账号" name="username"/>
				<div class="person_photo"><img src="/Public/Meizhi/img/person.png" class="person"/></div>
			</div>
			<div class="login_password"><!--登录密码-->
				<input type="password" class="password" placeholder="密码" name="password"/>
				<div class="key_photo"><img src="/Public/Meizhi/img/key.png" class="key"/></div>
			</div>
			<div class="login_submit"><!--登录按钮-->
				<input type="submit" class="login" value="登录" name="login"/>
			</div>
		</div>
		</form>
 		<!--登录结束-->
	</body>
</html>