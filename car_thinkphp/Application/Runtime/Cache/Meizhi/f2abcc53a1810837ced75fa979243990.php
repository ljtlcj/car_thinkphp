<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html style="background: #f0f0f0;">
	<head>
		<meta charset="UTF-8">
		<title>员工管理-添加员工</title>
    		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/delete_staff.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/delete_staff.js" ></script>
	</head>
	<body >
		<form action="<?php echo U('Staff/delete');?>" method="post" style="width:1030px ;height: 400px;">
			<div style="width: 100%;height: 100%;">
				
				<div class="register1">
				<div class="div3">删除员工名称：<input type="text" placeholder="账号" class="search_name" name="username" style="cursor:text";/></div>
				</div>
				<div class="search_button"><input type="submit" value="确认" name="search_submit" id="4" class="search_submit" /></div>
			</div>
		</form>
	</body>
</html>