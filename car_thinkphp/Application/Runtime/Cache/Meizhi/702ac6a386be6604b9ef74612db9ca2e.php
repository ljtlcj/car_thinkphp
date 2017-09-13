<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="background: whitesmoke">
	<head>
		<meta charset="UTF-8">
		<title>进货单</title>
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/Meizhi/css/add_equipment.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/add_equipment.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/My97DatePicker/WdatePicker.js" ></script>
		<script language="javascript" type="text/javascript" src="jquery.js"></script>
	</head>
	<body>
		<div style="width:1030px ;height: 400px; ">
		<div class="cout">
						<form action="" method="post" name="myform" onsubmit="return addcheck()">
							<div class="first" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="car_number1" style="float: left;margin-left: 20px">单据编号：<input type="text" name="car_number" /></div>    
									<div class="contact1"  style="float: left;margin-left: 20px">供货单位：<input type="text" name="contact" /></div>
							       <div class="install_people1" style="float: left;margin-left: 20px;">经手人：<input type="text" name="install_people" /></div>
							</div>
							<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="charge_date1" style="float: left; margin-left: 20px;" >录单日期：<input type="text" id="time2" class="text2" name="charge_date" onclick="WdatePicker()"/></div>								
								<div class="phone_number1"  style="float: left; margin-left: 20px;">联系方式：<input type="text" name="phone_number" /></div>
							</div>
							
							<table class="tablenumber">
								<tr>
									
									<td ><input type="text" readonly="true" id="inputid"/></td><td>商品全名</td><td>设备型号</td><td>设备号</td><td>单位</td><td>数量</td><td>单价</td><td>金额</td><td>备注</td>
  							</tr>
  							<tr class="trnumber">					           
					           <?php  for($i=0,$b=1;$i<10;$i++,$b++){?>
									<td><input type="text" readonly="true" id="inputtd" value=<?php echo "$b";?>></td> <td><input type="text"/></td> <td><input type="text"/></td> <td><input type="text"/></td> <td><input type="text"/></td> <td><input type="text"/></td> <td><input type="text"/></td> <td><input type="text"/></td> <td ><input type="text" id="classtd"/></td> <tr/>
								   <?php } ?>
								</tr>
							</table>
							<div class="submit_box">  <!--为了提交按钮居中-->
							<div class="submit"><input type="submit" name="submit" value="确认" /></div>
							</div>
						</form>
					</div>
					</div>
	</body>
</html>