<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/revise_business.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/revise_business.js"></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<title>修改业务</title>
	</head>
	<body>
		<div class="the_biggest">
			<div class="delete_box">
				<div style="margin-left: 70px; margin-bottom: 20px;">请输入车牌号<b>或</b>SIM卡号</div>
				<div style="width=30px">输入车牌号：
					<input type="text" class="delete_car_number"placeholder="车牌号"/>
				</div>
				<div style="width=30px">输入SIM卡：
					<input type="text" class="delete_sim" placeholder="卡号"/>
				</div>
				<input type="submit" value="确认" class="delete_submit"/>
			</div>
		</div>
	</body>
</html>