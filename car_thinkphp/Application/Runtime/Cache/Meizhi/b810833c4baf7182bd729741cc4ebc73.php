<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>计算时间段利润</title>
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="../../../../Public/meizhi/css/time_money.css" />
		<script type="text/javascript" src="/Public/meizhi/jquery-2.1.1/jquery.js" ></script>
		<script type="text/javascript" src="/Public/meizhi/jquery-2.1.1/jquery.min.js" ></script>	
		<script type="text/javascript" src="../../../../Public/meizhi/js/My97DatePicker/WdatePicker.js"></script>
	</head>
	<body style="background: #F0F0F0;">
		<div class="the_biggest">
			<div class="time" style="float: left;">
				<form action="<?php echo U('Money/calculate_profit');?>" method="post">
					<div class="start_time">开始时间:<input type="text" placeholder="开始时间" onclick="WdatePicker()" name="start_time"/></div>
					<div class="end_time">结束时间:<input type="text"   placeholder="结束时间" onclick="WdatePicker()" name="end_time"/></div>
					<div class="money">
						<input type="submit" value="计算利润" style="font-size: 13px; width: 70px; height: 20px; color: white; background: orangered;"/>
						<input type="text" placeholder="利润" value="<?php echo ($sum); ?>"/>
					</div>
				</form>
			</div>
		<div>
	</body>
</html>