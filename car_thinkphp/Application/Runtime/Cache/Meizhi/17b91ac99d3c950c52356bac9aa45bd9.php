<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" >
<?php
 session_start(); if(session('power')!=2&&session('power')!=3&&session('power')!=4) { echo"<script>alert('非法操作');window.location.href='../Login/login.html'</script>"; } ?>
	<head>
	
		<!-- Basic -->
    	<meta charset="UTF-8" />

		<title>梅职驾校</title>
	  
		<!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		

		<link rel="shortcut icon" href="/Public/meizhi/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/Public/meizhi/imgapple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="/Public/meizhi/img/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="/Public/meizhi/img/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="/Public/meizhi/img/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="/Public/meizhi/img/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="/Public/meizhi/img/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="/Public/meizhi/img/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="/Public/meizhi/img/apple-touch-icon-152x152.png" />
		<script type="text/javascript" src="/Public/meizhi/js/myself.js" ></script>
		<link rel="stylesheet" href="/Public/meizhi/css/myself.css" />
		
	    <!-- start: CSS file-->
		
		<!-- Vendor CSS-->
		<link href="/Public/meizhi/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Public/meizhi/css/skycons.css" rel="stylesheet" />
		<link href="/Public/meizhi/css/font-awesome.min.css" rel="stylesheet" />
		<link href="/Public/meizhi/css/pace.preloader.css" rel="stylesheet" />
		
		<!-- Plugins CSS-->
		<link href="/Public/meizhi/css/bootkit.css" rel="stylesheet" />
		<link href="/Public/meizhi/css/magnific-popup.css" rel="stylesheet" />				
		
		<!-- Theme CSS -->
		<link href="/Public/meizhi/css/jquery.mmenu.css" rel="stylesheet" />
		
		<!-- Page CSS -->		
		<link href="/Public/meizhi/css/style.css" rel="stylesheet" />
		<link href="/Public/meizhi/css/add-ons.min.css" rel="stylesheet" />
		
		<!-- end: CSS file-->	
	    
		
		<!-- Head Libs -->
		<script src="/Public/meizhi/js/modernizr.js"></script>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		<!--<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />-->
		<meta name="renderer" content="webkit" />
		<meta name="renderer" content="ie-stand" />
		<script type="text/javascript" src="/Public/meizhi/js/jquery-2.1.1/jquery.min.js" ></script>
		<script src="/Public/meizhi/js/jquery.min.js"></script>
		<script src="/Public/meizhi/js/jquery.leoweather.min.js"></script>		
	</head>
	
	<body onload="starttime()">
	
		<!-- Start: Header -->
		<div class="navbar" role="navigation">
			<div class="container-fluid container-nav">
				<!-- Navbar Action -->
				
				<!-- Navbar Left -->
				<div class="navbar-left">
                    	您好，当前时间是 <span id="help"></span> 年 <span id="help2"> </span> 月  <span id="help3"></span> 日 <span id="help4"></span>
                       
				</div>
				<!-- Navbar Right -->
				<div class="navbar-right">					
					<!-- Notifications -->

					<div class="userbox">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							
							<div class="profile-info">
								<span class="name"><?php echo session('username') ?></span>
							</div>			
							<i class="fa custom-caret"></i>
						</a>
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="dropdown-menu-header bk-bg-white bk-margin-top-15">						
									<div class="progress progress-xs  progress-striped active">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											60%
										</div>
									</div>							
								</li>	
								
								<li>
									<a href="#"><i class="fa fa-wrench"></i> 设置</a>
								</li>
								
							
								<li>
									<a href="<?php echo U('Main/cancel');?>"><i class="fa fa-power-off"></i> 注销</a>
								</li>
							</ul>
						</div>						
					</div>
					<!-- End Userbox -->
				</div>
				<!-- End Navbar Right -->
			</div>		
		</div>
		<!-- End: Header -->
		
		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
			
				<!-- Sidebar -->
				<div class="sidebar">
					<div class="sidebar-collapse">
						<!-- Sidebar Header Logo-->
						<div class="sidebar-header">
						<img src="/Public/Meizhi/img/meizhi_logo.png" style="width: 60px; height: 60px;padding-bottom: 13px;"/>
						</div>
						<!-- Sidebar Menu-->
						<div class="sidebar-menu">						
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-sidebar">
									<div class="panel-body text-center">								
										<div class="flag">
											<!--职位名称-->
										</div>
									</div>
								
										<!--
                                        	作者：1521826348@qq.com
                                        	时间：2017-07-09
                                        	描述：开始
                                        -->
                                    <li class="nav-parent nav-expanded active">
										<a>
											<i class="fa fa-bars" aria-hidden="true"></i><span>销售管理</span>
										</a>
										<ul id="gg" class="nav nav-children">
											<li><a  data-src="<?php echo U('Sales/searchbusiness');?>"><span class="text"> 查看业务</span></a></li>
											<li><a  data-src="<?php echo U('Sales/add_business');?>"><span class="text"> 添加业务</span></a></li>
											<li><a  data-src="<?php echo U('Sales/find_business');?>"><span class="text"> 查询业务</span></a></li>
											<?php
 if(session('power')==2){ ?>
											<li><a  data-src="<?php echo U('Sales/revise_business');?>"><span class="text"> 修改业务</span></a></li>
											<li><a  data-src="<?php echo U('Sales/delete_business');?>"><span class="text"> 删除业务</span></a></li>
											<?php } ?>
											<!--<li><a href="page-login.html"><span class="text"> Login Page</span></a></li>
											<li><a href="page-register.html"><span class="text"> Register Page</span></a></li>
											-->
										</ul>
									</li>  
									<!--<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i><span>SIM卡库</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="ui-basic-elements.html"><span class="text"> 查看已用</span></a></li>
											<li><a href="ui-nestable-list.html"><span class="text"> 查看未用</span></a></li>
											<li><a href="ui-buttons.html"><span class="text"> 添加SIM卡</span></a></li>
											<li><a href="ui-progress-bars.html"><span class="text"> 删除SIM卡</span></a></li>
											<li><a href="ui-sliders.html"><span class="text"> 修改SIM卡</span></a></li>
											<!--<li><a href="ui-panels.html"><span class="text"> Panels</span></a></li>
											<li><a href="ui-tabs.html"><span class="text"> Tabs</span></a></li>
											<li><a href="ui-notifications.html"><span class="text"> Notifications</span></a></li>
																	-->
										<!--</ul>
									</li>-->
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i><span>库存管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a data-src="<?php echo U('Stock/Goodsused');?>"><span class="text"> 查看已用</span></a></li>
											<li><a data-src="<?php echo U('Stock/Goodsnoused');?>"><span class="text"> 查看未用</span></a></li>
											<?php
 if(session('power')==2||session('power')==3){ ?>
											<li><a data-src="<?php echo U('Stock/add_equipment');?>"><span class="text"> 添加设备</span></a></li>
											<li><a data-src="<?php echo U('Stock/add_sim');?>"><span class="text"> EXCEL导入SIM卡</span></a></li>
											<?php } ?>
											<?php
 if(session('power')==2){ ?>
											<li><a data-src="<?php echo U('Stock/delete_stock');?>"><span class="text"> 删除设备</span></a></li>
											<li><a data-src="<?php echo U('Stock/revise_stock');?>"><span class="text"> 批量删除SIM卡</span></a></li>
											<?php } ?>
												
											<!--<li><a href="form-x-editable.html"><span class="text"> X-Editable</span></a></li>-->
										</ul>
									</li>
									<?php
 if(session('power')==2){ ?>
									<li class="nav-parent">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i><span>钱流管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a data-src="<?php echo U('Money/money');?>"><span class="text"> 计算利润</span></a></li>
											<li><a data-src="<?php echo U('Money/stuff_number');?>"><span class="text"> 员工人数</span></a></li>
											<li><a data-src="<?php echo U('Money/time_money');?>"><span class="text">时间段利润</span></a></li>
											<li><a href="table-editable.html"><span class="text"> Editable</span></a></li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-random" aria-hidden="true"></i><span>员工管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a data-src="<?php echo U('Staff/find_staff');?>"><span class="text"> 查看员工</span></a></li>
											<li><a data-src="<?php echo U('Staff/delete_staff');?>"><span class="text"> 删除员工</span></a></li>
											<li><a data-src="<?php echo U('Staff/add_salesmen');?>"><span class="text"> 添加员工</span></a></li>
										</ul>
									</li>	
									<?php } ?>
									<li class="nav-parent">	     
										<a>
											<i class="fa fa-laptop" aria-hidden="true"></i><span>续费业务</span>		
										</a>
										<ul class="nav nav-children">
											<li><a data-src="<?php echo U('Renew/renew_no_due');?>"><span class="text"> 查看续费</span></a></li>
											<li><a data-src="<?php echo U('Renew/renew_input');?>"><span class="text"> 设备续费</span></a></li>
											<li><a data-src="<?php echo U('Renew/renew_sim_input');?>"><span class="text"> SIM卡续费</span></a></li>
										</ul>
									</li>
	
									
                                    <li>
										<a data-src="<?php echo U('ReviseP/revise_password');?>">
											<i class="fa fa-laptop" aria-hidden="true"></i><span>修改密码</span>
										</a>
									</li>

								</ul>
							</nav>
						</div>
						<!-- End Sidebar Menu-->
					</div>
					<!-- Sidebar Footer-->
					<div class="sidebar-footer">					
											
					</div>
					<!-- End Sidebar Footer-->
				</div>
				<!-- End Sidebar -->			
		
				<!-- Main Page -->
				<div class="main">
					<!-- Page Header -->
					<iframe id="ifream"  style="height: 550px; width: 1050px;  " scrolling="no" frameborder="no" >
						
					</iframe>
					<div class="page-header">
										
					</div>
					<!-- End Page Header -->
					<div class="row">
						<div class="timeline">
							<div class="">
							</div>
						</div>
					</div>
				</div>
			
			
			</div>
		</div><!--/container-->
			
		
		<div class="clearfix"></div>		
		<script>
		$(document).ready(function(){
			$("a").click(function(){
				var c=$(this).attr("data-src");
				$("#ifream").attr("src",c);
				var par=$(this).parentNode;
				par.css("overflow","visible");
				
			});
		});
		</script>
		<!-- start: JavaScript-->
		
		<!-- Vendor JS-->			
		<script src="/Public/meizhi/js/main.js"></script>
		<script src="/Public/meizhi/js/jquery.min.js"></script>
		<script src="/Public/meizhi/js/jquery-2.1.1.min.js"></script>
		<script src="/Public/meizhi/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="/Public/meizhi/js/bootstrap.min.js"></script>
		<script src="/Public/meizhi/js/skycons.js"></script>	
		<script src="/Public/meizhi/js/pace.min.js"></script>
		
		<!-- Plugins JS-->
		<script src="/Public/meizhi/js/bootkit.js"></script>
		<script src="/Public/meizhi/js/magnific-popup.js"></script>
		<script src="/Public/meizhi/js/jquery.sparkline.min.js"></script>
		<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
		<script src="/Public/meizhi/gmaps.js"></script>
		
		<!-- Theme JS -->		
		<script src="/Public/meizhi/js/jquery.mmenu.min.js"></script>
		<script src="/Public/meizhi/js/core.min.js"></script>
		
		<!-- Pages JS -->
		<script src="/Public/meizhi/js/pages/page-timeline.js"></script>
		
		<!-- end: JavaScript-->
		<script type="text/javascript">
			function startTime()
			{
				var today=new Date()
				var h=today.getHours()
				var m=today.getMinutes()
				var s=today.getSeconds()
				
				m=checkTime(m)
				s=checkTime(s)
				
				document.getElementById('aaa').innerHTML=h+":"+m+":"+s
				var t=setTimeout('startTime()',500)    //每隔500毫秒调用一次startTime函数
			}
			function checkTime(i)
			{
				if(i<10)
					i="0"+i;
				return i;
			}
		</script>
	</body>
	
</html>