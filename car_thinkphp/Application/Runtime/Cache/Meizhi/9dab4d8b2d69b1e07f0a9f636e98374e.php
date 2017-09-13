<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/find_business.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/find_business.js"></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<title>查询业务</title>
	</head>
	<body style="background: #F0F0F0;">
		<div class="the_biggest">
			<div class="delete_box">
				<form action="<?php echo U('Sales/find_business');?>" method="post">
						<div style="margin-left: 70px; margin-bottom: 20px;">请输入车牌号<b style="color: red;">或</b>SIM卡号</div>
						<div style="width=30px">输入车牌号：
							<input type="text" class="delete_car_number" placeholder="车牌号" name="car_number"/>
						</div>
						<div style="width=30px">输入SIM卡：
							<input type="text" class="delete_sim" placeholder="卡号" name="sim_number" style="margin-left: 8px;"/>
						</div>
						<input type="submit" value="确认" class="delete_submit"/>
				</form>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol["goods_name"]); ?>;<?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="pages" style="margin-top: 15px;">  
					<?php echo ($car_number); ?>  
				</div>				
			</div>
		</div>
	</body>
</html>