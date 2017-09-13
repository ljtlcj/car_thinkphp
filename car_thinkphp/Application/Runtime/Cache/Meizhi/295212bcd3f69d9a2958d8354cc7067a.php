<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="background: #f0f0f0;">
	<head>
		<meta charset="UTF-8">
		<title>员工管理-添加员工</title>
    		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/add_salesman.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/add_salesman.js" ></script>
	</head>
	<body >
		<form action="" method="post" style="width:1030px ;height: 400px;">
			<div style="width: 100%;height: 100%;">
				<div class="choice_add_people">
					<div class="div1"><input type="radio" name="choice_add_people" value="添加业务员"/>添加业务员</div>
					<div class="div2"><input type="radio" name="choice_add_people"  value="添加财务员"/>添加财务员</div>
				</div>
				<div class="register1">
				<div class="div3">注册员工账号：<input type="text" placeholder="账号" class="search_name" name="search_name" style="cursor:text";/></div>
				<div class="div4">注册员工密码：<input type="password" placeholder="密码" class="search_num" name="search_num" style="cursor:text"/></div>
				<div class="div5">确认员工密码：<input type="password" placeholder="确认密码" class="sure_password" name="sure_password" style="cursor:text"/></div>
				</div>
				<div class="search_button"><input type="submit" value="注册" name="search_submit" id="4" class="search_submit" /></div>
			</div>
		</form>
	</body>
</html>