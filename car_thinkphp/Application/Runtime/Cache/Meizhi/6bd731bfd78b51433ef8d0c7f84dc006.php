<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

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
	
	<body>
	
		<!-- Start: Header -->
		<div class="navbar" role="navigation">
			<div class="container-fluid container-nav">
				<!-- Navbar Action -->
				
				<!-- Navbar Left -->
				<div class="navbar-left">
					<div class="welcome-info" style=" width: 800px; height: 60px;">
						<div><span id="weather"></span></div>
					</div>
					<script type="text/javascript">
						$('#weather').leoweather({format:'{时段}好！<span id="colock">现在时间是：<strong>{年}年{月}月{日}日 星期{周} {时}:{分}:{秒}</strong>，</span> <b>{城市}天气</b> {天气} {夜间气温}℃ ~ {白天气温}℃'});
					</script>					
				</div>
				 
				<!-- Navbar Right -->
				<div class="navbar-right">		
					
					<!-- Notifications -->
									

						
							
								
								
							
														
								
							
					
					<div class="userbox">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							
							<div class="profile-info">
								<span class="name">John Smith Doe</span>
								
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
									<a href="page-login.html"><i class="fa fa-power-off"></i> 注销</a>
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
							<img src="/Public/meizhi/img/meizhi_logo.png" style="width: 60px; height: 60px; padding-bottom: 13px;">
							
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
										<ul class="nav nav-children">
											<li><a href="page-profile.html"><span class="text"> 查看业务</span></a></li>
											<li><a href="page-activity.html"><span class="text"> 添加业务</span></a></li>
											<li><a href="page-timeline.html"><span class="text"> 查询业务</span></a></li>
											<li><a href="page-invoice.html"><span class="text"> 修改业务</span></a></li>
											<li><a href="page-pricing-tables.html"><span class="text"> 删除业务</span></a></li>
											<!--<li><a href="page-login.html"><span class="text"> Login Page</span></a></li>
											<li><a href="page-register.html"><span class="text"> Register Page</span></a></li>
											<li><a href="page-recover-password.html"><span class="text"> Recover Password</span></a></li>
											<li><a href="page-lockscreen1.html"><span class="text"> Lock Screen 1</span></a></li>
											<li><a href="page-lockscreen2.html"><span class="text"> Lock Screen 2</span></a></li>
											<li><a href="page-404.html"><span class="text"> Page 404</span></a></li>
											<li><a href="page-500.html"><span class="text"> Page 500</span></a></li>-->
										</ul>
									</li>  
									<li class="nav-parent">
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
											<li><a href="ui-modals.html"><span class="text"> Modals</span></a></li>
											<li><a href="ui-portlets.html"><span class="text"> Portlets</span></a></li>	
											<li><a href="ui-lightbox.html"><span class="text"> Lightbox</span></a></li>
											<li><a href="ui-carousels.html"><span class="text"> Carousels</span></a></li>
											<li><a href="ui-animation.html"><span class="text"> Animation</span></a></li>											-->
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i><span>设备库</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="form-elements.html"><span class="text"> 查看已用</span></a></li>
											<li><a href="form-wizard.html"><span class="text"> 查看未用</a></li>
											<li><a href="form-validation.html"><span class="text"> 添加设备</span></a></li>
											<li><a href="form-dropzone.html"><span class="text"> 删除设备</span></a></li>
											<li><a href="form-editors.html"><span class="text"> 修改信息</span></a></li>
											<!--<li><a href="form-x-editable.html"><span class="text"> X-Editable</span></a></li>-->
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i><span>钱流管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="table-basic.html"><span class="text"> Basic</span></a></li>
											<li><a href="table-advanced.html"><span class="text"> Advanced</span></a></li>
											<li><a href="table-responsive.html"><span class="text"> Responsive</span></a></li>
											<li><a href="table-editable.html"><span class="text"> Editable</span></a></li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-random" aria-hidden="true"></i><span>员工管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="chart-flot.html"><span class="text"> 查看员工</span></a></li>
											<li><a href="chart-xchart.html"><span class="text"> 删除员工</span></a></li>
											<li><a href="chart-other.html"><span class="text"> 添加员工</span></a></li>
										</ul>
									</li>								
                                    <li>
										<a href="index.html">
											<i class="fa fa-laptop" aria-hidden="true"></i><span>修改密码</span>
										</a>
									</li>
									<!--<li>
										<a href="mailbox-inbox.html">
											
											<i class="fa fa-envelope" aria-hidden="true"></i><span>Mail</span>
										</a>
									</li>
									
										
									<li>
										<a href="widgets.html">
											<i class="fa fa-life-bouy" aria-hidden="true"></i><span>Widgets</span>
										</a>
									</li>
									<li>
										<a href="gallery.html">
											<i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span>
										</a>
									</li>
									<li>
										<a href="calendar.html">
											<i class="fa fa-calendar" aria-hidden="true"></i><span>Calendar</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i><span>Maps</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="map-basic.html"><span class="text"> Basic</span></a></li>
											<li><a href="map-vector.html"><span class="text"> Vector</span></a></li>
										</ul>
									</li>
									<li>
										<a href="typography.html">
											<i class="fa fa-font" aria-hidden="true"></i><span>Typography</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-bolt" aria-hidden="true"></i><span>Icons</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="icons-font-awesome.html"><span class="text"> Font Awesome</span></a></li>
											<li><a href="icons-weathericons.html"><span class="text"> Weather Icons</span></a></li>
											<li><a href="icons-glyphicons.html"><span class="text"> Glyphicons</span></a></li>
										</ul>
									</li>-->
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
					<iframe src="Main/sales" style="width: 1050px; height: 600px;"></iframe>
<!--				
					<!-- Page Header -->
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
				<!-- End Main Page -->		
		
				<!-- Footer -->
				<!--<div id="footer">
					<ul>
						<li>
							<div class="title">Memory</div>
							<div class="bar">
								<div class="progress light progress-sm  progress-striped active">
									<div class="progress-bar progress-squared progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
										60%
									</div>
								</div>
							</div>			
							<div class="desc">4GB of 8GB</div>
						</li>
						<li>
							<div class="title">HDD</div>
							<div class="bar">
								<div class="progress light progress-sm  progress-striped active">
									<div class="progress-bar progress-squared progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
										40%
									</div>
								</div>
							</div>			
							<div class="desc">250GB of 1TB</div>
						</li>
						<li>
							<div class="title">SSD</div>
							<div class="bar">
								<div class="progress light progress-sm  progress-striped active">
									<div class="progress-bar progress-squared progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
										70%
									</div>
								</div>
							</div>			
							<div class="desc">700GB of 1TB</div>
						</li>
						<li>
							<div class="copyright">
								<p class="text-muted text-right">Fire <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
							</div>
						</li>				
					</ul>	
				</div>-->
				<!-- End Footer -->
			
			</div>
		</div><!--/container-->
			
		
		<div class="clearfix"></div>		
		
		
		<!-- start: JavaScript-->
		
		<!-- Vendor JS-->				
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