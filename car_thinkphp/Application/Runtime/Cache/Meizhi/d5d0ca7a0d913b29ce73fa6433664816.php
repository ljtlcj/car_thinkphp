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
		
		<script type="text/javascript" src="../../../../Public/plugin/layer/layer.js" ></script>
		<link rel="stylesheet" href="../../../../Public/plugin/layer/skin/default/layer.css" />
	</head>
	<body>
		<div style="width:1030px ;height: 400px; ">
		<div class="cout">
						<form action="<?php echo U ('Stock/add');?>" method="post" name="myform" onsubmit="return addcheck()">
							<div class="first" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="car_number1" style="float: left;margin-left: 20px" >单据编号：<input type="text"  name="receipt_number"/></div>    
									<div class="contact1"  style="float: left;margin-left: 20px" >供货单位：<input type="text" name="supplier"/></div>
							       <div class="install_people1" style="float: left;margin-left: 20px;" >经手人：<input type="text" name="person_handing" /></div>
							</div>
							<div class="second" style="width: 100%; height: 30px; margin-top: 20px;">
								<div class="charge_date1" style="float: left; margin-left: 20px;" >进货日期：<input type="text" id="time2" class="text2" name="entering_date" onclick="WdatePicker()" style="background: white;"/></div>								
								<div class="phone_number1"  style="float: left; margin-left: 20px;" >联系方式：<input type="text" name="contact_way" /></div>
							</div>
							
							<table class="tablenumber">
								<tr>								
									<td ><input type="text" readonly="true" id="inputid" style="visibility: hidden;"/></td><td>商品全名</td><td>设备型号</td><td>设备号</td><td>单位</td><td>数量</td><td>单价</td><td>金额</td><td>备注</td>
  								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd"  value="1"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name1" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name1" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style1" /></td> 
									<td><input type="text" name="equipment_number1"/></td> 
									<td><input type="text" name="unit1"/></td> 
									<td><input type="text" name="number1"/></td> 
									<td><input type="text" name="price1" /></td>
									<td><input type="text" name="total_money1" /></td> 
									<td ><input type="text" id="to_remark1" name="to_remark1" placeholder="可以双击"/></td>							
								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd"  value="2"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name2" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name2" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style2"/></td> 
									<td><input type="text" name="equipment_number2"/></td> 
									<td><input type="text" name="unit2"/></td> 
									<td><input type="text" name="number2"/></td> 
									<td><input type="text" name="price2"/></td>
									<td><input type="text" name="total_money2"/></td> 
									<td ><input type="text" id="to_remark2" name="to_remark2" placeholder="可以双击"/></td>							
								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd" value="3"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name3" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name3" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style3"/></td> 
									<td><input type="text" name="equipment_number3"/></td> 
									<td><input type="text" name="unit3"/></td> 
									<td><input type="text" name="number3"/></td> 
									<td><input type="text" name="price3"/></td>
									<td><input type="text" name="price_total3"/></td> 
									<td ><input type="text" id="to_remark3" name="to_remark3" placeholder="可以双击"/></td>							
								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd" value="4"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name4" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name4" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style4"/></td> 
									<td><input type="text" name="equipment_number4"/></td> 
									<td><input type="text" name="unit4"/></td> 
									<td><input type="text" name="number4"/></td> 
									<td><input type="text" name="price4"/></td>
									<td><input type="text" name="total_money4"/></td> 
									<td ><input type="text" id="to_remark4" name="to_remark4"  placeholder="可以双击"/></td>							
								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd"  value="5"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name5" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name5" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style5"/></td> 
									<td><input type="text" name="equipment_number5"/></td> 
									<td><input type="text" name="unit5"/></td> 
									<td><input type="text" name="number5"/></td> 
									<td><input type="text" name="price5"/></td>
									<td><input type="text" name="total_money5"/></td> 
									<td ><input type="text" id="to_remark5" name="to_remark5" placeholder="可以双击"/></td>							
								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd"  value="6"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name6" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name6" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style6"/></td> 
									<td><input type="text" name="equipment_number6"/></td> 
									<td><input type="text" name="unit6"/></td> 
									<td><input type="text" name="number6"/></td> 
									<td><input type="text" name="price6"/></td>
									<td><input type="text" name="total_money6"/></td> 
									<td ><input type="text" id="to_remark6" name="to_remark6" placeholder="可以双击"/></td>							
								</tr>
	  							<tr class="trnumber">					           					    
									<td><input type="text" readonly="true" id="inputtd"  value="7"/></td> 
									<!--既可以下拉框选择，又可以手动输入-->
									<td>	
										<div style="position:relative;">
											<span style="margin-left:100px;width:18px;overflow:hidden;">
											<select name="goods_name7" style="width:113px;height: 33px;border-radius: 0px; margin-left:-100px" onchange="this.parentNode.nextSibling.value=this.value" >
												<?php if(is_array($all_data)): $i = 0; $__LIST__ = $all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["goods_name"]); ?>"><?php echo ($vol["goods_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											</span><input name="goods_name7" style="width:95px;position:absolute;left:0px;height: 31px;border-radius: 0px;"placeholder="可以输入">
										</div>
									</td>
									<td><input type="text" name="equipment_style7"/></td> 
									<td><input type="text" name="equipment_number7"/></td> 
									<td><input type="text" name="unit7"/></td> 
									<td><input type="text" name="number7"/></td> 
									<td><input type="text" name="price7"/></td>
									<td><input type="text" name="total_money7"/></td> 
									<td ><input type="text" id="to_remark7" name="to_remark7" placeholder="可以双击"/></td>							
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