<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="../../../../Public/meizhi/css/renew_input.css" />
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<title>续费业务-续费-填写信息页面</title>
	</head>
	<body style="background: #F0F0F0;">
		<div class="the_biggest">
			<div class="box">
				<form action="<?php echo U('Renew/....');?>" method="post">
					<div class="text">请输入车牌号<b style="color: red;">或</b>SIM卡号</div>
					<div style="width=30px" class="car_number_box">输入车牌号：
						<input type="text" class="car_number" placeholder="车牌号" name="car_number"/>
					</div>
					<div style="width=30px" class="username_box">输入用户名：
						<input type="text" class="username" placeholder="用户名" name="username"/>
					</div>
					<input type="submit" value="确认" class="submit"/>
				</form>
			</div>
		</div>
	</body>
</html>