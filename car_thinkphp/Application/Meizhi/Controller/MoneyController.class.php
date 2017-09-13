<?php
namespace Meizhi\Controller;
use Think\Controller;
class MoneyController extends Controller{

	public function money()
	{
		
		$model=M('add_goods');
		$model_sale=M('sale');
		
		$temp['year']=date('Y',time());  //获取当年的年数
		
		$number_01=$model->where('month=01')->where($temp)->count();  //数出符合条件的个数
		$find_01=$model->where('month=01')->where($temp)->select();   //拿到数据集


		$number_02=$model->where('month=02')->where($temp)->count();  //数出符合条件的个数
		$find_02=$model->where('month=02')->where($temp)->select();   //拿到数据集

		$number_03=$model->where('month=03')->where($temp)->count();  //数出符合条件的个数
		$find_03=$model->where('month=03')->where($temp)->select();   //拿到数据集

		$number_04=$model->where('month=04')->where($temp)->count();  //数出符合条件的个数
		$find_04=$model->where('month=04')->where($temp)->select();   //拿到数据集

		$number_05=$model->where('month=05')->where($temp)->count();  //数出符合条件的个数
		$find_05=$model->where('month=05')->where($temp)->select();   //拿到数据集
		
		$number_06=$model->where('month=06')->where($temp)->count();  //数出符合条件的个数
		$find_06=$model->where('month=06')->where($temp)->select();   //拿到数据集
		
		$number_07=$model->where('month=07')->where($temp)->count();  //数出符合条件的个数
		$find_07=$model->where('month=07')->where($temp)->select();   //拿到数据集

		$number_08=$model->where('month=08')->where($temp)->count();  //数出符合条件的个数
		$find_08=$model->where('month=08')->where($temp)->select();   //拿到数据集

		$number_09=$model->where('month=09')->where($temp)->count();  //数出符合条件的个数
		$find_09=$model->where('month=09')->where($temp)->select();   //拿到数据集

		$number_10=$model->where('month=10')->where($temp)->count();  //数出符合条件的个数
		$find_10=$model->where('month=10')->where($temp)->select();   //拿到数据集		
		
		$number_11=$model->where('month=11')->where($temp)->count();  //数出符合条件的个数
		$find_11=$model->where('month=11')->where($temp)->select();   //拿到数据集		
		
		$number_12=$model->where('month=12')->where($temp)->count();  //数出符合条件的个数
		$find_12=$model->where('month=12')->where($temp)->select();   //拿到数据集		
											
		for($i=0;$i<$number_01;$i++)
		{
			$sum_01=$find_01[$i]['total_money']+$sum_01;
		}	

		for($i=0;$i<$number_02;$i++)
		{
			$sum_02=$find_02[$i]['total_money']+$sum_02;
		}
		for($i=0;$i<$number_03;$i++)
		{
			$sum_03=$find_03[$i]['total_money']+$sum_03;
		}		
		for($i=0;$i<$number_04;$i++)
		{
			$sum_04=$find_04[$i]['total_money']+$sum_04;
		}		
		for($i=0;$i<$number_05;$i++)
		{
			$sum_05=$find_05[$i]['total_money']+$sum_05;
		}		
		for($i=0;$i<$number_06;$i++)
		{
			$sum_06=$find_06[$i]['total_money']+$sum_06;
		}
		for($i=0;$i<$number_07;$i++)
		{
			$sum_07=$find_07[$i]['total_money']+$sum_07;
		}
					
		for($i=0;$i<$number_08;$i++)
		{
			$sum_08=$find_08[$i]['total_money']+$sum_08;
		}
		for($i=0;$i<$number_09;$i++)
		{
			$sum_09=$find_09[$i]['total_money']+$sum_09;
		}		
		for($i=0;$i<$number_10;$i++)
		{
			$sum_10=$find_10[$i]['total_money']+$sum_10;
		}
		for($i=0;$i<$number_11;$i++)
		{
			$sum_11=$find_11[$i]['total_money']+$sum_11;
		}		
		for($i=0;$i<$number_12;$i++)
		{
			$sum_12=$find_12[$i]['total_money']+$sum_12;
		}	
//		$this->assign('sum_01',$sum_01);
//		$this->assign('sum_02',$sum_02);
//		$this->assign('sum_03',$sum_03);		
//		$this->assign('sum_04',$sum_04);
//		$this->assign('sum_05',$sum_05);
//		$this->assign('sum_06',$sum_06);	
//		$this->assign('sum_07',$sum_07);
//		$this->assign('sum_08',$sum_08);
//		$this->assign('sum_09',$sum_09);
//		$this->assign('sum_10',$sum_10);
//		$this->assign('sum_11',$sum_11);	
//		$this->assign('sum_12',$sum_12);
		
		
		
		$number_sale_01=$model_sale->where('month=01')->where($temp)->count();  //数出符合条件的个数
		$find_sale_01=$model_sale->where($temp)->select();   //拿到数据集
						
		
		$number_sale_02=$model_sale->where('month=02')->where($temp)->count();  //数出符合条件的个数
		$find_sale_02=$model_sale->where('month=02')->where($temp)->select();   //拿到数据集
	
		$number_sale_03=$model_sale->where('month=03')->where($temp)->count();  //数出符合条件的个数
		$find_sale_03=$model_sale->where('month=03')->where($temp)->select();   //拿到数据集

		$number_sale_04=$model_sale->where('month=04')->where($temp)->count();  //数出符合条件的个数
		$find_sale_04=$model_sale->where('month=04')->where($temp)->select();   //拿到数据集

		$number_sale_05=$model_sale->where('month=05')->where($temp)->count();  //数出符合条件的个数
		$find_sale_05=$model_sale->where('month=05')->where($temp)->select();   //拿到数据集
		
		$number_sale_06=$model_sale->where('month=06')->where($temp)->count();  //数出符合条件的个数
		$find_sale_06=$model_sale->where('month=06')->where($temp)->select();   //拿到数据集
		
		$number_sale_07=$model_sale->where('month=07')->where($temp)->count();  //数出符合条件的个数
		$find_sale_07=$model_sale->where('month=07')->where($temp)->select();   //拿到数据集
	
		$number_sale_08=$model_sale->where('month=08')->where($temp)->count();  //数出符合条件的个数
		$find_sale_08=$model_sale->where('month=08')->where($temp)->select();   //拿到数据集

		$number_sale_09=$model_sale->where('month=09')->where($temp)->count();  //数出符合条件的个数
		$find_sale_09=$model_sale->where('month=09')->where($temp)->select();   //拿到数据集

		$number_sale_10=$model_sale->where('month=10')->where($temp)->count();  //数出符合条件的个数
		$find_sale_10=$model_sale->where('month=10')->where($temp)->select();   //拿到数据集
		
		$number_sale_11=$model_sale->where('month=11')->where($temp)->count();  //数出符合条件的个数
		$find_sale_11=$model_sale->where('month=11')->where($temp)->select();   //拿到数据集
		
		$number_sale_12=$model_sale->where('month=12')->where($temp)->count();  //数出符合条件的个数
		$find_sale_12=$model_sale->where('month=12')->where($temp)->select();   //拿到数据集
		
		for($i=0;$i<$number_sale_01;$i++)
		{
			$sum_sale_01=$find_sale_01[$i]['total_price']+$sum_sale_01;
		}
		for($i=0;$i<$number_sale_02;$i++)
		{
			$sum_sale_02=$find_sale_02[$i]['total_price']+$sum_sale_02;
		}	
	
		for($i=0;$i<$number_sale_03;$i++)
		{
			$sum_sale_03=$find_sale_03[$i]['total_price']+$sum_sale_03;
		}
		for($i=0;$i<$number_sale_04;$i++)
		{
			$sum_sale_04=$find_sale_04[$i]['total_price']+$sum_sale_04;
		}	
		for($i=0;$i<$number_sale_05;$i++)
		{
			$sum_sale_05=$find_sale_05[$i]['total_price']+$sum_sale_05;
		}
		for($i=0;$i<$number_sale_06;$i++)
		{
			$sum_sale_06=$find_sale_06[$i]['total_price']+$sum_sale_06;
		}	
		for($i=0;$i<$number_sale_07;$i++)
		{
			$sum_sale_07=$find_sale_07[$i]['total_price']+$sum_sale_07;
		}
		for($i=0;$i<$number_sale_08;$i++)
		{
			$sum_sale_08=$find_sale_08[$i]['total_price']+$sum_sale_08;
		}
		for($i=0;$i<$number_sale_09;$i++)
		{
			$sum_sale_09=$find_sale_09[$i]['total_price']+$sum_sale_09;
		}
		for($i=0;$i<$number_sale_10;$i++)
		{
			$sum_sale_10=$find_sale_10[$i]['total_price']+$sum_sale_10;
		}	
		for($i=0;$i<$number_sale_11;$i++)
		{
			$sum_sale_11=$find_sale_11[$i]['total_price']+$sum_sale_11;
		}
		for($i=0;$i<$number_sale_12;$i++)
		{
			$sum_sale_12=$find_sale_12[$i]['total_price']+$sum_sale_12;
		}
//		$this->assign('sum_sale_01',$sum_sale_01);
//		$this->assign('sum_sale_02',$sum_sale_02);
//		$this->assign('sum_sale_03',$sum_sale_03);
//		$this->assign('sum_sale_04',$sum_sale_04);
//		$this->assign('sum_sale_05',$sum_sale_05);
//		$this->assign('sum_sale_06',$sum_sale_06);
//		$this->assign('sum_sale_07',$sum_sale_07);
//		$this->assign('sum_sale_08',$sum_sale_08);
//		$this->assign('sum_sale_09',$sum_sale_09);
//		$this->assign('sum_sale_10',$sum_sale_10);
//		$this->assign('sum_sale_11',$sum_sale_11);	
//		$this->assign('sum_sale_12',$sum_sale_12);	
		
		
		$this->assign('month1',$sum_sale_01-$sum_01);
		$this->assign('month2',$sum_sale_02-$sum_02);
		$this->assign('month3',$sum_sale_03-$sum_03);
		$this->assign('month4',$sum_sale_04-$sum_04);
		$this->assign('month5',$sum_sale_05-$sum_05);
		$this->assign('month6',$sum_sale_06-$sum_06);
		$this->assign('month7',$sum_sale_07-$sum_07);
		$this->assign('month8',$sum_sale_08-$sum_08);
		$this->assign('month9',$sum_sale_09-$sum_09);
		$this->assign('month10',$sum_sale_10-$sum_10);
		$this->assign('month11',$sum_sale_11-$sum_11);
		$this->assign('month12',$sum_sale_12-$sum_12);
	
		$this->display();
	}
	public function stuff_number()
	{
		$model_login=M('login');
		
		$salesman_number=$model_login->where('power=4')->count();
		$treasurer_number=$model_login->where('power=3')->count();
		
		$this->assign('salesman_number',$salesman_number);	
		$this->assign('treasurer_number',$treasurer_number);	
		
		$this->display();
	}
	public function time_money()
	{
		$this->display();
	}
	public function calculate_profit()
	{
		$model_add_goods=M('add_goods');//库存的模型
		$model_sale=M('sale');          //销售的模型
		
		$start_time=I('post.start_time');
		$end_time=I('post.end_time');
		
		$str_start_time=strtotime($start_time);  //开始时间转为【时间戳】
		$str_end_time=strtotime($end_time);      //结束时间转为【时间戳】
	
		$number_add_goods=$model_add_goods->where('str_to_time<='.$str_end_time)->where('str_to_time>='.$str_start_time)->count();
		$data_add_goods=$model_add_goods->where('str_to_time<='.$str_end_time)->where('str_to_time>='.$str_start_time)->select();
		
		$number_sale=$model_sale->where('str_to_time<='.$str_end_time)->where('str_to_time>='.$str_start_time)->count();
		$data_sale=$model_sale->where('str_to_time<='.$str_end_time)->where('str_to_time>='.$str_start_time)->select();		
		
		$sum_add_goods=0;
		$sum_add_goods=0;
		
		for($i=0;$i<$number_add_goods;$i++)
		{
			$temp=$data_add_goods[$i]['total_money'];
			$sum_add_goods=$sum_add_goods+$temp;
		}
		for($i=0;$i<$number_sale;$i++)
		{
			$temp=$data_add_goods[$i]['total_money'];
			$sum_sale=$sum_sale+$temp;
		}	
		$sum=$sum_sale-$sum_add_goods;
		$this->assign('sum',$sum);
		
		$this->display('time_money');
	}
}

?>