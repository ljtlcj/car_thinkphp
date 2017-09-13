<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="../../../../Public/meizhi/css/delete_business.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/delete_business.js"></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<title>删除业务</title>
	</head>
	<body style="background: #F0F0F0;">
		<div class="the_biggest">
			<div class="box">
				<form action="<?php echo U('Sales/delete');?>" method="post">
					<div class="text">请输入车牌号<b style="color: red;">或</b>SIM卡号</div>
					<div style="width=30px" class="car_number_box">输入车牌号：
						<input type="text" class="car_number"placeholder="车牌号" name="car_number"/>
					</div>
					<div style="width=30px" class="sim_number_box">输入SIM卡：
						<input type="text" class="sim_number" placeholder="卡号" name="sim_number"/>
					</div>
					<input type="submit" value="确认" class="submit"/>
				</form>
			</div>
		</div>
	</body>
</html>