<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>进货单</title>
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/find_business_table.css" />
		<script type="text/javascript" src="/Public/meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/meizhi/js/find_business_table.js" ></script>
		<script type="text/javascript" src="/Public/meizhi/js/My97DatePicker/WdatePicker.js" ></script>
		<script language="javascript" type="text/javascript" src="jquery.js"></script>
	</head>
	<body>
		<div style="width:1030px ;height: 1000px; ">
			<div class="cout">
						
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="first" style="width: 100%; height: 30px; margin-top: 20px;">
									<div class="car_number1" style="float: left;margin-left: 20px">单据编号：<input type="text" name="receipt_number" value="<?php echo ($vol["receipts_number"]); ?>"/></div>    
										<div class="charge_date1" style="float: left; margin-left: 20px;" >录单日期：<input type="text" id="time2" class="text2" name="entering_date" onclick="WdatePicker()" value="<?php echo ($vol["entering_date"]); ?>"/></div>									
								       <div class="install_people1" style="float: left;margin-left: 20px;">经手人：<input type="text" name="person_handing" value="<?php echo ($vol["person_handing"]); ?>"/></div>
								</div>
								<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
									<div class="contact1"  style="float: left;margin-left: 20px">购买单位：<input type="text" name="buyer" value="<?php echo ($vol["buyer"]); ?>"/></div>							
									<div class="phone_number1"  style="float: left; margin-left: 20px;">联系方式：<input type="text" name="contact_way" value="<?php echo ($vol["contact_way"]); ?>"/></div>
									<div class="phone_number1"  style="float: left; margin-left: 20px;">联系人：<input type="text" name="linkman" value="<?php echo ($vol["linkman"]); ?>"/></div>							
								</div>
								<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
									<div class="contact1"  style="float: left;margin-left: 20px">车牌号：<input type="text" name="car_number" value="<?php echo ($vol["car_number"]); ?>" /></div>							
									<div class="phone_number1"  style="float: left; margin-left: 20px;">附加说明：<input type="text" name="to_explain" value="<?php echo ($vol["to_explain"]); ?>"/></div>
								</div>												
								<table class="tablenumber">
								<tr>
									<td>商品全名</td>
									<td>数量</td>
									<td>单价</td>
									<td>金额</td>
									<td>设备类型</td>
									<td>设备号</td>
									<td>安装日期</td>
									<td>收费人</td>
									<td>收费日期</td>
									<td>有效时间</td>
									<td>备注</td>
	  							</tr>
	  							<tr class="trnumber">					         
						           <td><input type="text"  value="<?php echo ($vol["goods_name"]); ?>"/></td> 
						           <td><input type="text"  value="<?php echo ($vol["number"]); ?>"/></td> 
						           <td ><input type="text" value="<?php echo ($vol["price"]); ?>"/></td> 	
						           <td><input type="text"  value="<?php echo ($vol["total_price"]); ?>"/></td>
						           <td><input type="text"  value="<?php echo ($vol["equipment_style"]); ?>"/></td>
						           <td><input type="text"  value="<?php echo ($vol["equipment_number"]); ?>"/></td>
						           <td><input type="text"  value="<?php echo ($vol["install_date"]); ?>"/></td>
						           <td><input type="text"  value="<?php echo ($vol["get_money_people"]); ?>"/></td> 
						           <td><input type="text"  value="<?php echo ($vol["get_money_date"]); ?>"/></td> 
						           <td><input type="text"  value="<?php echo ($vol["vaild_date"]); ?>"/></td> 
						           <td><input type="text" value="<?php echo ($vol["to_remark"]); ?>"/></td>
								</tr>
								</table><?php endforeach; endif; else: echo "" ;endif; ?>	
					        <div class="pages" style="margin-top: 15px;">  
					            <?php echo ($page); ?>  
					        </div>
					    <form action="<?php echo U('Sales/find_business');?>" method="post" name="myform" onsubmit="return addcheck()">
							<div class="submit_box">  
								<div class="submit"><input type="submit" value="返回继续查询" onclick="delete_session()"/></div>
							</div>
						</form>
						<!--<script>
							function delete_session()
							{
								session('car_number',null);
							}
						</script>-->

				</div>
		</div>
	</body>
</html>