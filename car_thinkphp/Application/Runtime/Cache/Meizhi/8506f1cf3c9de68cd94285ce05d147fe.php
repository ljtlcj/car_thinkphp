<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html style="background: whitesmoke">
	<head>
		<meta charset="UTF-8">
		<title>进货单</title>
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<link rel="stylesheet" href="/Public/Meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/revise_business_table.css" />
		<script type="text/javascript" src="/Public/Meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/revise_business_table.js" ></script>
		<script type="text/javascript" src="/Public/Meizhi/js/My97DatePicker/WdatePicker.js" ></script>
		<script language="javascript" type="text/javascript" src="jquery.js"></script>
	</head>
	<body>
		<div style="width:1030px ;height: 400px; ">
		<div class="cout">
						<form action="<?php echo U('Sales/revise_business_table_add');?>" method="post" name="myform" onsubmit="return addcheck()">
							<div class="first" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="car_number1" style="float: left;margin-left: 20px">单据编号：<input type="text" name="receipts_number"/></div>    
									<div class="charge_date1" style="float: left; margin-left: 20px;" >录单日期：<input type="text" id="time2" class="text2" name="entering_date" onclick="WdatePicker()"/></div>									
							       <div class="install_people1" style="float: left;margin-left: 20px;">经手人：<input type="text" name="person_handing" /></div>
							</div>
							<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="contact1"  style="float: left;margin-left: 20px">购买单位：<input type="text" name="buyer" /></div>							
								<div class="phone_number1"  style="float: left; margin-left: 20px;">联系方式：<input type="text" name="contact_way" /></div>
								<div class="phone_number1"  style="float: left; margin-left: 20px;">联系人：<input type="text" name="linkman" /></div>							
							</div>
							<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="contact1"  style="float: left;margin-left: 20px">车牌号：<input type="text" name="car_number" /></div>							
								<div class="phone_number1"  style="float: left; margin-left: 20px;">附加说明：<input type="text" name="to_explain" /></div>
							</div>												
							<table class="tablenumber">
								<tr>
									
									<td ><input type="text" readonly="true" id="inputid" style="visibility: hidden;"/></td><td>商品全名</td><td>数量</td><td>单价</td><td>金额</td><td>设备类型</td><td>设备号</td><td>安装日期</td><td>收费人</td><td>收费日期</td><td>有效时间</td><td>备注</td>
  							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="1"/></td> 
					           <td><input type="text" name="goods_name1"/></td> 
					           <td><input type="text" name="number1"/></td> 
					           <td ><input type="text" id="classtd" name="price1"/></td> 	
					           <td><input type="text" name="total_price1"/></td>
					           <td><input type="text" name="equipment_style1"/></td>
					           <td><input type="text" name="equipment_number1"/></td>
					           <td><input type="text" name="install_date1"/></td>
					           <td><input type="text" name="get_money_people1"/></td> 
					           <td><input type="text" name="get_money_date1"/></td> 
					           <td><input type="text" name="vaild_date1"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark1"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="2"/></td> 
					           <td><input type="text" name="goods_name2"/></td> 
					           <td><input type="text" name="number2"/></td> 
					           <td ><input type="text" id="classtd" name="price2"/></td> 	
					           <td><input type="text" name="total_price2"/></td>
					           <td><input type="text" name="equipment_style2"/></td>
					           <td><input type="text" name="equipment_number2"/></td>
					           <td><input type="text" name="install_date2"/></td>
					           <td><input type="text" name="get_money_people2"/></td> 
					           <td><input type="text" name="get_money_date2"/></td> 
					           <td><input type="text" name="vaild_date2"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark2"/></td>
							</tr>		
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="3"/></td> 
					           <td><input type="text" name="goods_name3"/></td> 
					           <td><input type="text" name="number3"/></td> 
					           <td ><input type="text" id="classtd" name="price3"/></td> 	
					           <td><input type="text" name="total_price3"/></td>
					           <td><input type="text" name="equipment_style3"/></td>
					           <td><input type="text" name="equipment_number3"/></td>
					           <td><input type="text" name="install_date3"/></td>
					           <td><input type="text" name="get_money_people3"/></td> 
					           <td><input type="text" name="get_money_date3"/></td> 
					           <td><input type="text" name="vaild_date3"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark3"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="4"/></td> 
					           <td><input type="text" name="goods_name4"/></td> 
					           <td><input type="text" name="number4"/></td> 
					           <td ><input type="text" id="classtd" name="price4"/></td> 	
					           <td><input type="text" name="total_price4"/></td>
					           <td><input type="text" name="equipment_style4"/></td>
					           <td><input type="text" name="equipment_number4"/></td>
					           <td><input type="text" name="install_date4"/></td>
					           <td><input type="text" name="get_money_people4"/></td> 
					           <td><input type="text" name="get_money_date4"/></td> 
					           <td><input type="text" name="vaild_date4"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark4"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="5"/></td> 
					           <td><input type="text" name="goods_name5"/></td> 
					           <td><input type="text" name="number5"/></td> 
					           <td ><input type="text" id="classtd" name="price5"/></td> 	
					           <td><input type="text" name="total_price5"/></td>
					           <td><input type="text" name="equipment_style5"/></td>
					           <td><input type="text" name="equipment_number5"/></td>
					           <td><input type="text" name="install_date5"/></td>
					           <td><input type="text" name="get_money_people5"/></td> 
					           <td><input type="text" name="get_money_date5"/></td> 
					           <td><input type="text" name="vaild_date5"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark5"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="6"/></td> 
					           <td><input type="text" name="goods_name6"/></td> 
					           <td><input type="text" name="number6"/></td> 
					           <td ><input type="text" id="classtd" name="price6"/></td> 	
					           <td><input type="text" name="total_price6"/></td>
					           <td><input type="text" name="equipment_style6"/></td>
					           <td><input type="text" name="equipment_number6"/></td>
					           <td><input type="text" name="install_date6"/></td>
					           <td><input type="text" name="get_money_people6"/></td> 
					           <td><input type="text" name="get_money_date6"/></td> 
					           <td><input type="text" name="vaild_date6"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark6"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="7"/></td> 
					           <td><input type="text" name="goods_name7"/></td> 
					           <td><input type="text" name="number7"/></td> 
					           <td ><input type="text" id="classtd" name="price7"/></td> 	
					           <td><input type="text" name="total_price7"/></td>
					           <td><input type="text" name="equipment_style7"/></td>
					           <td><input type="text" name="equipment_number7"/></td>
					           <td><input type="text" name="install_date7"/></td>
					           <td><input type="text" name="get_money_people7"/></td> 
					           <td><input type="text" name="get_money_date7"/></td> 
					           <td><input type="text" name="vaild_date7"/></td> 
					           <td ><input type="text" id="classtd" name="to_remark7"/></td>
							</tr>
							</table>
							<div class="submit_box">  
							<div class="submit"><input type="submit" name="$_SESSION['add_revise']" value="确认修改" /></div>
							</div>
						</form>
					</div>
					</div>
	</body>
</html>