<?php
namespace Meizhi\Controller;
use Think\Controller;
class RenewController extends Controller{
	
	public function renew_due()
	{
		$model=M('sale');
		
		$temp['sign']='以用';  //搜索条件
		$data=$model->where($temp)->select();  //符合条件的数据集
		$number=count($data,0);   //符合条件的数组个数
		$time=time();  //time是指现在时间

		$temp_data=array();  //存放【已经到期】的数组
		
		for($i=0,$j=0;$i<$number;$i++)  //构建【到期】和【未到期】同时存在的数组后，将【已经到期】的存放到
		{
			$vaild_date=$data[$i]['vaild_date'];  // vaild_date是有效时间 2017-5-7
			$temp_vaild_time=strtotime($vaild_date);  //有效时间转为时间戳
			$status=$time>$temp_vaild_time?'已经到期':'未到期';  //利用三元运算符判断是否过期
			if($status=='已经到期')
			{
				$temp_data[$j]=$data[$i];
				$j++;
			}
		}
		$this->assign('temp_data',$temp_data);//【已经到期】的数组传到前端
		$this->display();	
	}
	public function renew_no_due()   //renew_due这个方法几乎一样  注意数组要30天后就会到期
	{
		$model=M('sale');
		
		$temp['sign']='以用';  //搜索条件
		$data=$model->where($temp)->select();  //符合条件的数据集
		$number=count($data,0);   //符合条件的数组个数
		$time=time();  //time是指现在时间

		$temp_data=array();  //存放【已经到期】的数组
		
		for($i=0,$j=0;$i<$number;$i++)  //构建【到期】和【未到期】同时存在的数组后，将【已经到期】的存放到
		{
			$vaild_date=$data[$i]['vaild_date'];  // vaild_date是有效时间 2017-5-7
			$temp_vaild_time=strtotime($vaild_date);  //有效时间转为时间戳
			$status=$time>$temp_vaild_time?'已经到期':'未到期';  //利用三元运算符判断是否过期
			if($status=='未到期')
			{
				$temp_data[$j]=$data[$i];
				$j++;
			}
		}
		$this->assign('temp_data',$temp_data);//【未到期】的数组传到前端
		$this->display();		
	}
	public function renew_input()
	{
		$this->display();
	}
	public function renew_sim_input()
	{
		$this->display();
	}
}
?>