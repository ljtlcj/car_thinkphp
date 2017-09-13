<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<?php
 session_start(); ?>
<html style="background: #f0f0f0;">
	<head>
		<meta charset="UTF-8">
		<title>员工管理-查看员工</title>
    		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/find_staffs.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/find_staff.js" ></script>
		
	</head>
	<body >
		
			<div class="first"  >
				<div class="bigests" >
					<table class="big">
						<tr class="big2">
							<td>职位</td> <td>姓名</td> <td colspan="2">操作</td>
						</tr>
						
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr class='big2'>
								<td>
									<?php if($vol["power"] == 2): ?>老板
									<?php elseif($vol["power"] == 3): ?>财务员
									<?php elseif($vol["power"] == 4): ?>业务员<?php endif; ?>
								</td> 
								<td>
									<?php echo ($vol["username"]); ?>
								</td> 
								<td >
									<?php if(($vol["power"] == 3) OR($vol["power"] == 4)): ?><a href="/index.php/Meizhi/Staff/find_staff/id/<?php echo ($vol["id"]); ?>" style="color: blue;">删除</a><?php endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
					<!--<div style="margin-left: 135px; margin-top: 25px;">-->
			        <div class="pages">  
			            <?php echo ($page); ?>  
			        </div>  
					 
				</div>
				
					<div class="search_button"><a href="<?php echo U('Staff/export');?>">导出Excell</a></div>
		
			</div>

	</body>
</html>