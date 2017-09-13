<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>修改密码</title>
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/revise_password.css" />
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/revise_password.js" ></script>
	</head>
	<body>
		<div class="the_biggest">
			<div class="revise_password_box">
				<div style="margin-left: 40px;">原密码:<input type="password" class="start_password" /></div>
				<div style="margin-top: 15px; margin-left: 40px;">新密码:<input type="password" class="new_password" /></div>
				<div style="margin-top: 15px; margin-left: 40px;">确认密码:<input type="password" class="affirm_password" /></div>
				<input type="submit" class="password_submit" value="确认" />
			</div>
		</div>
	</body>
</html>