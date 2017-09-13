<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head >
		<meta charset="UTF-8">
		<title>删除库存</title>
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/delete_stock.css" />
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/from.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/delete_stock.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/My97DatePicker/WdatePicker.js" ></script>
	</head>
	<body style="background: #F0F0F0;">
		<form action="<?php echo U('Stock/delete_one');?>" method="post" style="width:1030px ;height: 400px;">
			<div style="width: 100%;height: 100%;">	
				<div class="register1">
				<div class="div3">商品全名： <input type="text"  class="search_name" placeholder="设备类型" name="goods_name" style="cursor:text";/></div>
				<div class="div3">设备类型： <input type="text"  class="search_name" placeholder="设备类型" name="equipment_style" style="cursor:text";/></div>
				<div class="div4">进货时间： <input type="text"  class="search_num" placeholder="进货时间" name="time" style="cursor:text"/></div>
				<div class="div5">具体时间： <input type="text"  class="sure_password" placeholder="具体时间" name="specific_time" style="cursor:text"/></div>
				</div>
				<div class="search_button"><input type="submit" value="删除" name="search_submit" id="4" class="search_submit" /></div>
			</div>
		</form>
	</body>
</html>
<!--<div class="the_biggest">
			<div class="revise_stock_box">
				<div>设备类型:<input type="text" class="equipment_style"></div>
				<div style="margin-top: 15px;">进货时间:<input type="text" class="time_day" onclick="WdatePicker()"></div>
				<div style="margin-top: 15px;">时 间:<input type="text" class="time_hour" ></div>
				<input type="submit" class="submit" />
			</div>
		</div>-->