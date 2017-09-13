<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<?php
 session_start(); ?>
<html style="background: #f0f0f0;">
	<head>
		<meta charset="UTF-8">
		<title>续费业务-已经到期</title>
    		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
<!--		<link rel="stylesheet" href="/Public/meizhi/css/renew.css" />-->
		<link rel="stylesheet" href="../../../../Public/meizhi/css/renew.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/renew.js" ></script>
		
	</head>
	<body >
		<div class="output">
			<table style="width: 100%;">
				<tr>
					<td>商品名称</td>
					<td>有效时间</td>
					<td>状态</td>
					<td>是否续费</td>
				</tr>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
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