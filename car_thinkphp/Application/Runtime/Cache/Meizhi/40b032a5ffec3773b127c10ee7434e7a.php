<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="background: whitesmoke">
	<head>
		<meta charset="UTF-8">
		<title>查询业务-SIM卡</title>
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/find_business_table.css" />
		<script type="text/javascript" src="/Public/meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/meizhi/js/find_business_sim_table.js" ></script>
		<script type="text/javascript" src="/Public/meizhi/js/My97DatePicker/WdatePicker.js" ></script>
		<script language="javascript" type="text/javascript" src="jquery.js"></script>
	</head>
	<body>
		<div style="width:1030px ;height: 400px; ">
		<div class="cout">
						
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="first" style="width: 100%; height: 30px; margin-top: 20px;">
									<div class="car_number1" style="float: left;margin-left: 20px" >单据编号：<input type="text"  name="receipt_number" value="<?php echo ($vol["receipt_number"]); ?>"/></div>    
										<div class="contact1"  style="float: left;margin-left: 20px" >供货单位：<input type="text" name="supplier" value="<?php echo ($vol["supplier"]); ?>"/></div>
								       <div class="install_people1" style="float: left;margin-left: 20px;" >经手人：<input type="text" name="person_handing" value="<?php echo ($vol["person_handing"]); ?>"/></div>
								</div>
								<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
									<div class="charge_date1" style="float: left; margin-left: 20px;" >进货日期：<input type="text" id="time2" class="text2" name="entering_date" onclick="WdatePicker()" value="<?php echo ($vol["entering_date"]); ?>"/></div>								
									<div class="phone_number1"  style="float: left; margin-left: 20px;" >联系方式：<input type="text" name="contact_way" value="<?php echo ($vol["contact_way"]); ?>"/></div>
								</div>
								
								<table class="tablenumber">
									<tr>								
										<td ><input type="text" readonly="true" id="inputid" style="visibility: hidden;"/></td><td>商品全名</td><td>设备型号</td><td>设备号</td><td>单位</td><td>数量</td><td>单价</td><td>金额</td><td>备注</td>
	  								</tr>
		  							<tr class="trnumber">					           					    
										<td><input type="text" readonly="true" value="1"/></td> 
										<td><input type="text" name="goods_name1" value="<?php echo ($vol["goods_name"]); ?>"/></td>
										<td><input type="text" name="equipment_style1"  value="<?php echo ($vol["equipment_style"]); ?>"/></td> 
										<td><input type="text" name="equipment_number1" value="<?php echo ($vol["equipment_number"]); ?>"/></td> 
										<td><input type="text" name="unit1" value="<?php echo ($vol["unit"]); ?>"/></td> 
										<td><input type="text" name="number1" value="<?php echo ($vol["number"]); ?>"/></td> 
										<td><input type="text" name="price1" value="<?php echo ($vol["price"]); ?>"/></td>
										<td><input type="text" name="total_money1" value="<?php echo ($vol["total_money"]); ?>"/></td> 
										<td><input type="text"name="to_remark1" value="<?php echo ($vol["to_remark"]); ?>"/></td>							
									</tr>								
								</table><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="pages">  
			           		<?php echo ($page); ?>  
			      		 </div>  
						<form action="<?php echo U ('Sales/find_business');?>" method="post">
							<div class="submit_box"> 
								<div class="submit"><input type="submit" name="submit" value="返回" /></div>
							</div>
						</form>
						
					</div>
					</div>
	</body>
</html>