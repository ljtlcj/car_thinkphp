<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/add_business.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/add_business.js"></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
	
		
		<title>销售单</title>
	</head>
	<body>
		<div class="the_biggest">
			<div class="Date_and_Number">
				<button class="date_and_number_button" >录单日期</button>
				<input type="text" class="date_and_number_text" onclick=""/>
				<button class="receipts_number_button">单据编号</button>
				<input type="text" class="receipts_number_text" onfocus=""/>				
			</div>
			<div class="Buyer">
				<button class="buyer_button">购买单位</button>
				<input type="text" class="buyer_text"/>
			</div>
			<div class="Person_handing">
				<button class="person_handing_button">经手人</button>
				<input type="text" class="person_handing_text"/>	
				<button class="explain_button">附加说明</button>
				<input type="text" class="explain_text"/>
			</div>
			<div class="Connect">
				<button class="car_number_button">车牌号</button>
				<input type="text" class="car_number_text"/>		
				<button class="connect_people_button">联系人</button>
				<input type="text" class="connect_people_text"/>
				<button class="connect_style_button">联系方式</button>
				<input type="text" class="connect_style_text"/>
			</div>
			<div class="Table" style="font-size: 8px;">
				<table width="1050px" height="190px" border="solid 1px red">
					<tr height="20px">
						<td>商品编号</td>
						<td style="width: 60px;">数量</td>
						<td style="width: 60px;">单价</td>
						<td style="width: 60px;">金额</td>
						<td>设备类型</td>
						<td>设备号</td>
						<td>安装日期</td>
						<td style="width: 70px;">收费人</td>
						<td>收费日期</td>
						<td>有效时间</td>
						<td>备注</td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
				</table>
			</div>
			<div class="Money">
				<div class="summary_number">合计数量：</div>
				<div class="summary_money">合计金额：</div>
				<button class="receipt_account_button">收款账户</button>
				<input type="text" class="receipt_account_text"/>
				<button class="receipt_money_button">收款金额</button>
				<input type="text" class="receipt_money_text"/>		
				<button type="button" class="print">打印</button>
				<button type="button" class="exit">退出</button>
			</div>
		</div>
	</body>
</html>