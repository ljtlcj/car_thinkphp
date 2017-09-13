<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html style="background: #f0f0f0;">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/search_business.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/search_business.js"></script>
		<script type="text/javascript" src="/Public/Meizhi/jquery-2.1.1/jquery.js" ></script>
		<title>查看业务</title>
	</head>
	<body>
		<div class="first" >
				<div class="bigests" >
				<table class="big">
					<tr class="big2">
						<td>车牌号码</td>
						<td>联系人</td>
						<td style="width: 150px;">联系方式</td>
						<td>购买单位</td>
						<td>总金额</td>
						<td>收费日期</td>
						<td>到期日期</td>
						<td>备注</td>
						<td>操作</td>
					</tr>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($vol["car_number"]); ?></td>
							<td><?php echo ($vol["linkman"]); ?></td>
							<td><?php echo ($vol["contact_way"]); ?></td>
							<td><?php echo ($vol["buyer"]); ?></td>
							<td><?php echo ($vol["receivable_amount"]); ?></td>
							<td><?php echo ($vol["get_money_date"]); ?></td>
							<td><?php echo ($vol["vaild_date"]); ?></td>
							<td><?php echo ($vol["to_remark"]); ?></td>
							<td><a href="/index.php/Meizhi/Sales/searchbusiness/id/<?php echo ($vol["id"]); ?>" style="color: blue;">删除</a></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
 			        <div class="pages">  
			            <?php echo ($page); ?>  
			        </div>  
				</div>
				<div class="search_button">
					<form action="<?php echo U('Sales/export_searchbusiness');?>">
						<input type="submit" value="导出EXCEL" class="search_submit" style="position: fixed; top: 0%;"  />
					</form>
				</div>
			</div>
	</body>
</html>