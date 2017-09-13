<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>修改库存</title>
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/revise_stock.css" />
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/from.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/revise_stock.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/My97DatePicker/WdatePicker.js" ></script>
	</head>
	<body>
		<div class="the_biggest">
			<div class="revise_stock_box">
				<div>设备类型:<input type="text" class="equipment_style"></div>
				<div style="margin-top: 15px;">进货时间:<input type="text" class="time_day" onclick="WdatePicker()"></div>
				<div style="margin-top: 15px;">时 间:<input type="text" class="time_hour" ></div>
				<input type="submit" class="submit" />
			</div>
		</div>
	</body>
</html>