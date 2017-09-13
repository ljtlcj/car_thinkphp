<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html style="background: whitesmoke">
	<head>
		<meta charset="UTF-8">
		<title>进货单</title>
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<link rel="stylesheet" href="/Public/meizhi/css/add_business.css" />
	
		<script type="text/javascript" src="../../../../Public/meizhi/js/chosen.jquery.min.js" ></script>
		<script type="text/javascript" src="../../../../Public/meizhi/js/jquery-2.1.1.min.js" ></script>
		<script type="text/javascript" src="../../../../Public/meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		
		<script type="text/javascript" src="/Public/meizhi/js/add_business.js" ></script>
		
		<script type="text/javascript" src="/Public/meizhi/js/My97DatePicker/WdatePicker.js" ></script>
		
		<script language="javascript" type="text/javascript" src="jquery.js"></script>
		
		<script type="text/javascript" src="../../../../Public/plugin/layer/layer.js" ></script>
		<link rel="stylesheet" href="../../../../Public/plugin/layer/skin/default/layer.css" />

	</head>

	<body style="background: #F0F0F0;">
		<div style="width:1030px ;height: 400px; ">
			<div class="cout">
						<form action="<?php echo U('Sales/add');?>" method="post" name="myform" onsubmit="return addcheck()">
							<div class="first" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="car_number1" style="float: left;margin-left: 20px">单据编号：<input type="text" name="receipts_number"/></div>    
									<div class="charge_date1" style="float: left; margin-left: 20px;" >录单日期：<input type="text" id="time2" class="text2" name="entering_date" onclick="WdatePicker()"style="background: white;"/></div>									
							       <div class="install_people1" style="float: left;margin-left: 20px;">经手人：<input type="text" name="person_handing" /></div>
							</div>
							<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="contact1"  style="float: left;margin-left: 20px">购买单位：<input type="text" name="buyer" /></div>							
								<div class="phone_number1"  style="float: left; margin-left: 20px;">联系方式：<input type="text" name="contact_way" /></div>
								<div class="phone_number1"  style="float: left; margin-left: 20px;">联系人：<input type="text" name="linkman" /></div>							
							</div>
							<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="contact1"  style="float: left;margin-left: 20px">车 牌 号：<input type="text" name="car_number" /></div>							
								<div class="phone_number1"  style="float: left; margin-left: 20px;">附加说明：<input type="text" name="to_explain" /></div>
								<div class="phone_number1"  style="float: left; margin-left: 20px;"><input type="button" value="计算总金额" onclick="total_price()" style="width: 70px; height: 26px;"/> <input type="text" id="calculate_all"/></div>
								<!--<div class="phone_number1"  style="float: left; margin-left: 20px;">总数量：<input type="text"  /></div>-->
							</div>												
							<table class="tablenumber">
								<tr>
									
									<td ><input type="text" readonly="true" id="inputid" style="visibility: hidden;"/></td><td>商品全名</td><td>数量</td><td>单价</td><td>金额</td><td>设备类型</td><td>设备号</td><td>安装日期</td><td>收费人</td><td>收费日期</td><td>有效时间</td><td>备注</td>
  							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="1"/></td> 
					           <td><input type="text" name="goods_name1"/></td> 
					           <td><input type="text" name="number1" id="number1" onkeyup="calculate1()" onblur="calculate1()" /></td> 
					           <td><input type="text" id="price1" name="price1"  onkeyup="calculate1()" onblur="calculate1()"  /></td> 	
					           <td><input type="text" name="total_price1" id="total_price1"  /></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style1" style="width: 80px; height: 30px; font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>				        
					           <td><input type="text" name="equipment_number1"/></td>
					           <td><input type="text" name="install_date1" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people1"/></td> 
					           <td><input type="text" name="get_money_date1" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date1" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark1" name="to_remark1" placeholder="可以双击"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="2"/></td> 
					           <td><input type="text" name="goods_name2"/></td> 
					           <td><input type="text" name="number2" id="number2" onkeyup="calculate2()" onblur="calculate2()"/></td> 
					           <td ><input type="text" id="price2" name="price2" onkeyup="calculate2()" onblur="calculate2()" /></td> 	
					           <td><input type="text" name="total_price2" id="total_price2"/></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style2" style="width: 80px; height: 30px;font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>					     
					           <td><input type="text" name="equipment_number2"/></td>
					           <td><input type="text" name="install_date2" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people2"/></td> 
					           <td><input type="text" name="get_money_date2" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date2" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark2" name="to_remark2" placeholder="可以双击"/></td>
							</tr>		
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="3"/></td> 
					           <td><input type="text" name="goods_name3"/></td> 
					           <td><input type="text" name="number3" id="number3" onkeyup="calculate3()" onblur="calculate3()"/></td> 
					           <td ><input type="text" id="price3" name="price3" onkeyup="calculate3()" onblur="calculate3()"/></td> 	
					           <td><input type="text" name="total_price3" id="total_price3"/></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style3" style="width: 80px; height: 30px;font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>					           
					           <td><input type="text" name="equipment_number3"/></td>
					           <td><input type="text" name="install_date3" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people3"/></td> 
					           <td><input type="text" name="get_money_date3" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date3" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark3" name="to_remark3" placeholder="可以双击"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="4"/></td> 
					           <td><input type="text" name="goods_name4"/></td> 
					           <td><input type="text" name="number4" id="number4" onkeyup="calculate4()" onblur="calculate4()"/></td> 
					           <td ><input type="text" id="price4" name="price4" onkeyup="calculate4()" onblur="calculate4()"/></td> 	
					           <td><input type="text" name="total_price4" id="total_price4"/></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style4" style="width: 80px; height: 30px;font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>					           
					           <td><input type="text" name="equipment_number4"/></td>
					           <td><input type="text" name="install_date4" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people4"/></td> 
					           <td><input type="text" name="get_money_date4" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date4" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark4" name="to_remark4" placeholder="可以双击"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="5"/></td> 
					           <td><input type="text" name="goods_name5"/></td> 
					           <td><input type="text" name="number5" id="number5" onkeyup="calculate5()" onblur="calculate5()"/></td> 
					           <td ><input type="text" id="price5" name="price5" onkeyup="calculate5()" onblur="calculate5()"/></td> 	
					           <td><input type="text" name="total_price5" id="total_price5"/></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style5" style="width: 80px; height: 30px;font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>					           
					           <td><input type="text" name="equipment_number5"/></td>
					           <td><input type="text" name="install_date5" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people5"/></td> 
					           <td><input type="text" name="get_money_date5" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date5" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark5" name="to_remark5" placeholder="可以双击"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="6"/></td> 
					           <td><input type="text" name="goods_name6"/></td> 
					           <td><input type="text" name="number6" id="number6" onkeyup="calculate6()" onblur="calculate6()"/></td> 
					           <td ><input type="text" id="price6" name="price6" onkeyup="calculate6()" onblur="calculate6()"/></td> 	
					           <td><input type="text" name="total_price6" id="total_price6"/></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style6" style="width: 80px; height: 30px;font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>					           
					           <td><input type="text" name="equipment_number6"/></td>
					           <td><input type="text" name="install_date6" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people6"/></td> 
					           <td><input type="text" name="get_money_date6" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date6" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark6" name="to_remark6" placeholder="可以双击"/></td>
							</tr>
  							<tr class="trnumber">					           
					           <td><input type="text" readonly="true" id="inputtd" value="7"/></td> 
					           <td><input type="text" name="goods_name7"/></td> 
					           <td><input type="text" name="number7" id="number7" onkeyup="calculate7()" onblur="calculate7()"/></td> 
					           <td ><input type="text" id="price7" name="price7" onkeyup="calculate7()" onblur="calculate7()"/></td> 	
					           <td><input type="text" name="total_price7" id="total_price7"/></td>
					           <td>	<!--设备类型的下拉框-->
					           		<select name="equipment_style7" style="width: 80px; height: 30px;font-size: 13px; border-radius: 5px;">				           			
					           			<?php if(is_array($equipment_style_data)): $i = 0; $__LIST__ = $equipment_style_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["equipment_style"]); ?>" ><?php echo ($vol["equipment_style"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					         		</select>
					           </td>
					           <td><input type="text" name="equipment_number7"/></td>
					           <td><input type="text" name="install_date7" onclick="WdatePicker()"/></td>
					           <td><input type="text" name="get_money_people7"/></td> 
					           <td><input type="text" name="get_money_date7" onclick="WdatePicker()"/></td> 
					           <td><input type="text" name="vaild_date7" onclick="WdatePicker()"/></td> 
					           <td ><input type="text" id="to_remark7" name="to_remark7" placeholder="可以双击"/></td>
							</tr>
							</table>
							<div class="submit_box">  <!--为了提交按钮居中-->
							<div class="submit"><input type="submit" name="$_SESSION['add_revise']" value="确认添加" /></div>
							</div>
						</form>
			</div>
		</div>

	</body>
</html>				


<!--引入修改麻烦 JS直接丢下面了  一个是计算价钱的   一个是layer-->
<script>
function calculate1()
{
	char_price1=document.getElementById('price1').value;
	char_number1=document.getElementById('number1').value;
	if(char_price1!=""&&char_number1!="")
	{
		int_price1=parseFloat(char_price1);
		int_number1=parseFloat(char_number1);
		document.getElementById("total_price1").value=int_price1*int_number1;
	}
}
function calculate2()
{
	char_price2=document.getElementById('price2').value;
	char_number2=document.getElementById('number2').value;
	if(char_price2!=""&&char_number2!="")
	{
		int_price2=parseFloat(char_price2);
		int_number2=parseFloat(char_number2);
		document.getElementById("total_price2").value=int_price2*int_number2;			
	}
}
function calculate3()
{
	char_price3=document.getElementById('price3').value;
	char_number3=document.getElementById('number3').value;
	if(char_price3!=""&&char_number3!="")
	{
		int_price3=parseFloat(char_price3);
		int_number3=parseFloat(char_number3);
		document.getElementById("total_price3").value=int_price3*int_number3;				
	}
}
function calculate4()
{
	char_price4=document.getElementById('price4').value;
	char_number4=document.getElementById('number4').value;	
	if(char_price4!=""&&char_number4!="")
	{
		int_price4=parseFloat(char_price4);
		int_number4=parseFloat(char_number4);	
		document.getElementById("total_price4").value=int_price4*int_number4;
	}
}
function calculate5()
{
	char_price5=document.getElementById('price5').value;
	char_number5=document.getElementById('number5').value;
	if(char_price5!=""&&char_number5!="")
	{
		int_price5=parseFloat(char_price5);
		int_number5=parseFloat(char_number5);
		document.getElementById("total_price5").value=int_price5*int_number5;		
	}
}
function calculate6()
{
	char_price6=document.getElementById('price6').value;
	char_number6=document.getElementById('number6').value;
	if(char_price6!=""&&char_number6!="")
	{
		int_price6=parseFloat(char_price6);
		int_number6=parseFloat(char_number6);
		document.getElementById("total_price6").value=int_price6*int_number6;
	}
}
function calculate7()
{
	char_price7=document.getElementById('price7').value;
	char_number7=document.getElementById('number7').value;
	if(char_price7!=""&&char_number7!="")
	{
		int_price7=parseFloat(char_price7);
		int_number7=parseFloat(char_number7);	
		document.getElementById("total_price7").value=int_price7*int_number7;	
	}
}
function total_price()
{
	char_total_price1=document.getElementById('total_price1').value;
	char_total_price2=document.getElementById('total_price2').value;
	char_total_price3=document.getElementById('total_price3').value;
	char_total_price4=document.getElementById('total_price4').value;
	char_total_price5=document.getElementById('total_price5').value;
	char_total_price6=document.getElementById('total_price6').value;
	char_total_price7=document.getElementById('total_price7').value;

	
	int_total_price1=parseFloat(char_total_price1);
	int_total_price2=parseFloat(char_total_price2);	
	int_total_price3=parseFloat(char_total_price3);
	int_total_price4=parseFloat(char_total_price4);
	int_total_price5=parseFloat(char_total_price5);
	int_total_price6=parseFloat(char_total_price6);
	int_total_price7=parseFloat(char_total_price7);

	var sum=0;
	if(int_total_price1>0)
	{
		sum=sum+int_total_price1;
	}
	if(int_total_price2>0)
	{
		sum=sum+int_total_price2;
	}	
	if(int_total_price3>0)
	{
		sum=sum+int_total_price3;
	}	
	if(int_total_price4>0)
	{
		sum=sum+int_total_price4;
	}
	if(int_total_price5>0)
	{
		sum=sum+int_total_price5;
	}	
	if(int_total_price6>0)
	{
		sum=sum+int_total_price6;
	}	
	if(int_total_price7>0)
	{
		sum=sum+int_total_price7;
	}	
	document.getElementById('calculate_all').value=sum;
}
</script>


<!--layer-->
<script>
	$('#to_remark1').on('dblclick', function(){
		to_remark=document.getElementById('to_remark1').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>
<script>
	$('#to_remark2').on('dblclick', function(){
		to_remark=document.getElementById('to_remark2').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>
<script>
	$('#to_remark3').on('dblclick', function(){
		to_remark=document.getElementById('to_remark3').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>
<script>
	$('#to_remark4').on('dblclick', function(){
		to_remark=document.getElementById('to_remark4').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>
<script>
	$('#to_remark5').on('dblclick', function(){
		to_remark=document.getElementById('to_remark5').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>
<script>
	$('#to_remark6').on('dblclick', function(){
		to_remark=document.getElementById('to_remark6').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>
<script>
	$('#to_remark7').on('dblclick', function(){
		to_remark=document.getElementById('to_remark7').value;
		layer.open({
		  type: 1,
		  skin: 'layui-layer-rim', //加上边框
		  area: ['400px', '300px'], //宽高
		  content: to_remark
		});
	});
</script>