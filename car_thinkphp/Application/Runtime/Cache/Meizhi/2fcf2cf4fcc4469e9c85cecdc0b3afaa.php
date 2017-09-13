<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="../../../../Public/meizhi/css/Goodsused.css" />
	</head>
	<body style="background: #F0F0F0;">
		<div class="first" >
				<div class="bigests" >
					<table class="big">
						<tr class="big2">
							<td style="width: 300px;">商品</td> <td>数量</td> <td style="width: 300px;">备注</td>  
						</tr>
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($vol["goods_name"]); ?></td>
								<td><?php echo ($vol["sum(number)"]); ?></td>
								<td><?php echo ($vol["to_remark"]); ?></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
				    <div class="pages">  
				        <?php echo ($page); ?>  
				    </div> 				
				</div>
			<form action="<?php echo U('Stock/export_goodsused');?>">
				<div class="search_button"><input type="submit" value="导出EXCEL"  class="search_submit" /></div>
			</from>
		</div>
	</body>
</html>