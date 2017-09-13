<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<?php
 session_start(); ?>
<html style="background: #f0f0f0;">
	<head>
		<meta charset="UTF-8">
		<title>续费业务</title>
    		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
<!--		<link rel="stylesheet" href="/Public/meizhi/css/renew.css" />-->
		<link rel="stylesheet" href="../../../../Public/meizhi/css/renew_no_due.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<!--<script type="text/javascript" src="/Public/Meizhi/js/renew_no_due.js" ></script>-->
		<script type="text/javascript" src="../../../../Public/meizhi/js/renew_no_due.js" ></script>
	</head>
	<body onload="show_no_renew()">
		<div class="output">
			<div class="due_or_no_box">
				<select class="due_or_no" id="due_or_no" onclick="due_or_no()">
					<option>未到期</option>
					<option>已经到期</option>
				</select>
			</div>
			<table style="width: 70%;" id="due_no_table" class="due_no_table"><!-- 这个是【未到期】的表格-->
				<tr>
					<td>商品名称</td>
					<td>有效时间</td>
					<td>状态</td>
				</tr>
				<?php if(is_array($temp_data)): $i = 0; $__LIST__ = $temp_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vol["goods_name"]); ?></td>
						<td><?php echo ($vol["vaild_date"]); ?></td>
						<td>
							未过期
						</td>				
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			
			<table style="width: 70%;" id="due_table" class="due_table"> <!-- 这个是【已经到期】的表格-->
				<tr>
					<td>商品名称</td>
					<td>有效时间</td>
					<td>状态</td>
					<td>是否续费</td>
				</tr>
				<?php if(is_array($temp_data)): $i = 0; $__LIST__ = $temp_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vol["goods_name"]); ?></td>
						<td><?php echo ($vol["vaild_date"]); ?></td>
						<td>
							已经到期
						</td>
						<td>续费</td>						
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</body>
</html>