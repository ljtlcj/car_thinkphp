<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="background: #F0F0F0;">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../../..//Public/meizhi/css/CssReset.css" />
		<!--<link rel="stylesheet" href="Public/meizhi/css/add_sim.css" />-->
		<link rel="stylesheet" href="../../../../Public/meizhi/css/add_sim.css" />
		<title>批量添加信用卡</title>
	</head>
	<body>
		<div class="the_biggest">
			<form action="<?php echo U('Stock/add_sim');?>" method="post">
				<div class="top">
					<div>SIM卡号码：<input type="text" placeholder="账号" class="input_sim"/></div>
					<div><input type="submit" value="确认" class="submit"/></div>
				</div>
				<br />
			</form>
			
        	<form action="<?php echo U('Stock/impUser');?>" method="post" enctype="multipart/form-data">
        		<div class="bottom">
		            <input type="file" name="import" class="file"/>
					<input type="hidden" name="table" value="tablename"/>
		            <input type="submit" value="导入" class="submit_excel"/>
	            </div>
      	    </form>
		</div>
	</body>
</html>