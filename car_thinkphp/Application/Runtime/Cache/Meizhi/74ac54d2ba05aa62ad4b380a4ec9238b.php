<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>计算利润</title>
		<link rel="stylesheet" href="/Public/meizhi/css/CssReset.css" />
		<script type="text/javascript" src="/Public/meizhi/jquery-2.1.1/jquery.js" ></script>
		<script type="text/javascript" src="/Public/meizhi/jquery-2.1.1/jquery.min.js" ></script>
	<!--	<script type="text/javascript" src="/Public/Meizhi/js/revise_password.js" ></script>-->
	<!--	<script type="text/javascript" src="/Public/meizhi/js/echarts.js" ></script>-->
	</head>
	<body style="background: #f0f0f0;">
		<script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
	
		<div id="picturePlace" style=" height: 400px; width: 1000px;"><div>
	</body>
	
</html>
<script type="text/javascript">  
//      var month1=<?php echo ($sum_sale_01); ?>-<?php echo ($sum_01); ?>;  
//      var month2=<?php echo ($sum_sale_02); ?>-<?php echo ($sum_02); ?>;
//      var month3=<?php echo ($sum_sale_03); ?>-<?php echo ($sum_03); ?>;
//      var month4=<?php echo ($sum_sale_04); ?>-<?php echo ($sum_04); ?>;
//      var month5=<?php echo ($sum_sale_05); ?>-<?php echo ($sum_05); ?>;
//      var month6=<?php echo ($sum_sale_06); ?>-<?php echo ($sum_06); ?>;
//      var month7=<?php echo ($sum_sale_07); ?>-<?php echo ($sum_07); ?>;  
//      var month8=<?php echo ($sum_sale_08); ?>-<?php echo ($sum_08); ?>;
//      var month9=<?php echo ($sum_sale_09); ?>-<?php echo ($sum_09); ?>;
//      var month10=<?php echo ($sum_sale_10); ?>-<?php echo ($sum_10); ?>;
//      var month11=<?php echo ($sum_sale_11); ?>-<?php echo ($sum_11); ?>;
//      var month12=<?php echo ($sum_sale_12); ?>-<?php echo ($sum_12); ?>;
        
		month1=<?php echo ($month1); ?>;
		month2=<?php echo ($month2); ?>;
		month3=<?php echo ($month3); ?>;
		month4=<?php echo ($month4); ?>;
		month5=<?php echo ($month5); ?>;
		month6=<?php echo ($month6); ?>;
		month7=<?php echo ($month7); ?>;
		month8=<?php echo ($month8); ?>;
		month9=<?php echo ($month9); ?>;
		month10=<?php echo ($month10); ?>;
		month11=<?php echo ($month11); ?>;
		month12=<?php echo ($month12); ?>;

        require.config({  
            paths:{   
            	echarts:'http://echarts.baidu.com/build/dist'
            }  
        });        
        require(  
            [  
                'echarts',  
                'echarts/chart/line' 
            ],  
            function (ec) {  
                var myChart = ec.init(document.getElementById('picturePlace'));   
                  
					option = {
					    title: {
					        text: '计算今年的利润'
					    },
					    tooltip: {
					        trigger: 'axis'
					    },
					    legend: {
					        data:['利润线']
					    },
					    grid: {
					        left: '3%',
					        right: '4%',
					        bottom: '3%',
					        containLabel: true
					    },
					    toolbox: {
					        feature: {
					            saveAsImage: {}
					        }
					    },
					    xAxis: {
					        type: 'category',
					        data: ['一月', '二月', '三月', '四月', '五月', '六月', '七月','八月','九月','十月','十一月','十二月']
					    },
					    yAxis: {
					        type: 'value'
					    },
					    series: [
					        {
					            name:'利润线',
					            type:'line',
					           // step: 'start',
					            data:[<?php echo ($month1); ?>, <?php echo ($month2); ?>, <?php echo ($month3); ?>, <?php echo ($month4); ?>, <?php echo ($month5); ?>, <?php echo ($month6); ?>, <?php echo ($month7); ?>,<?php echo ($month8); ?>, <?php echo ($month9); ?>, <?php echo ($month10); ?>, <?php echo ($month11); ?>, <?php echo ($month12); ?>]
					        },
					    ]
					};
                myChart.setOption(option);
            }  
        );  
  </script>