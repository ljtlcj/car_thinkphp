<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="../../../../Public/meizhi/css/renew_sim_input.css" />
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<title>续费业务-sim卡续费-填写信息页面</title>
	</head>
	<body style="background: #F0F0F0;">
		<div class="the_biggest">
			<div class="box">
				<form action="<?php echo U('Renew/....');?>" method="post">
					<div style="width=30px" class="sim_number_box">输入SIM卡号：
						<input type="text" class="sim_number" placeholder="SIM卡号" name="sim_number"/>
					</div>
					<input type="submit" value="确认" class="submit"/>
				</form>
			</div>
		</div>
	</body>
</html>