<?php
namespace Meizhi\Controller;
use Think\Controller;
class SalesController extends Controller {

	public function searchbusiness() {
		
		$m=M('sale');
				
		$different_number_array=$m->group('specific_time')->select();		 //$different_number【具体时间】来区分后的【数目的数组】
		$different_number=count($different_number_array,0);    //$different_number【具体时间】来区分后的【数目】
				
		$temp_id['id']=I('get.id');    //为了删除而设置的
		$m->where($temp_id)->setField('sign','未用');  //删除后设置为未用
		
		$p = new \Think\Page($different_number,7);  
	    $p->setConfig('header', '<li class="rows">&nbsp共<b>%TOTAL_ROW%</b>条记录 </li>');  
	    $p->setConfig('prev', '上一页');  
	    $p->setConfig('next', '下一页');  
	    $p->setConfig('last', '末页');  
	    $p->setConfig('first', '首页');  
	    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');  
	    $p->lastSuffix = false;
	  
	    $show=$p->show();  
		$list=$m->limit($p->firstRow,$p->listRows)->group('specific_time')->select();
		
		$this->assign('data',$list);
		$this->assign('page',$show);
		
		$this->display();			
	}
	public function add_business() {
		$model=M('add_goods');
		
		$equipment_style_data=$model->field('equipment_style')->group('equipment_style')->select();  //不同【设备类型】的数据集
		$equipment_style_count=count($equipment_style_data,0);  //不同【设备类型】的数目
		
		$this->assign('equipment_style_count',$equipment_style_count);
		

		for($i=0;$i<$equipment_style_count;$i++)
		{
			$this->assign('equipment_style_data',$equipment_style_data);
		}
		//dump($equipment_style_data);
		$this -> display();
	}

	public function find_business() {
		session('car_number',null);
		session('sim_number',null);
		
		$car_number=I('post.car_number');
		$temp_car_number['car_number']=I('post.car_number');
		$sim_number=I('post.sim_number');
		$temp_sim_number['goods_name']=I('post.sim_number');
			
		$model_sale=M('sale');
		$model_add_goods=M('add_goods');
		
		$result_car_number=$model_sale->where($temp_car_number)->find();
		$result_sim_number=$model_add_goods->where($temp_sim_number)->find();
		
		if(!empty($result_car_number))
		{
			session('car_number',$car_number);
			$this->success('查询成功',U('Sales/find_business_table'),1);exit;
		}
		if(!empty($result_sim_number))
		{
			session('sim_number',$sim_number);
			$this->success('查询成功',U('Sales/find_business_sim_table'),1);exit;
		}
		if($car_number!=NULL&&$result_car_number==NULL)
		{
			echo "<script>alert('查询失败');</script>";
			$this->display();
		}
		if($sim_number!=NULL&&$result_sim_number==NULL)
		{
			echo "<script>alert('查询失败');</script>";
			$this->display();			
		}
		if($car_number==NULL&&$sim_number==NULL)
		{
			$this->display();
		}
	}
	public function find_business_sim_table()     //查询业务的SIM卡输出
	{
		$m=M('add_goods');
		$temp['goods_name']=session('sim_number');
		$count=$m->where($temp)->count();
	
		$p= new\Think\Page($count,1);
		$p->setConfig('header', '<li class="rows">&nbsp共<b>%TOTAL_ROW%</b>条记录 </li>');
		
		$p->setConfig('prev','上一页');
		$p->setConfig('next','下一页');
		$p->setConfig('last','末页');
		$p->setConfig('first','首页');
		$p->setConfig('theme','%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
		$p->lastSuffix=false;
		$show=$p->show();
		$list=$m->limit($p->firstRow,$p->listRows)->where($temp)->select();
		$this->assign('data',$list);
		$this->assign('page',$show);
		$this->display('find_business_sim_table');
	}
	public function find_business_table()     //查询业务的车牌号输出
	{
			$m=M('sale');
			$temp['car_number']=session('car_number');
			$count=$m->where($temp)->count();
			$p = new \Think\Page($count,1);  
		    $p->setConfig('header', '<li class="rows">&nbsp共<b>%TOTAL_ROW%</b>条记录 </li>');  
		    $p->setConfig('prev', '上一页');  
		    $p->setConfig('next', '下一页');  
		    $p->setConfig('last', '末页');  
		    $p->setConfig('first', '首页');  
		    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');  
		    $p->lastSuffix = false;
			$show=$p->show();
			$list=$m->limit($p->firstRow , $p->listRows)->where($temp)->select();
			$this->assign('data',$list);
			$this->assign('page',$show);
			$this->display('find_business_table');
	}
	public function revise_business() {
		$this -> display();
		//展示模板
	}

	public function delete_business() {
		$this -> display();
		//展示模板
	}
	
	public function add()    //添加业务
	{
		
		$model=M('sale');     //业务的模型
		$model_add_goods=M('add_goods');  //商品库存的模型[用于查找库存中的【数量】和匹配【商品全名】+【设备类型】]
		
		$temp['receipts_number']=I('post.receipts_number');
		$temp['entering_date']=I('post.entering_date');
		$temp['person_handing']=I('post.person_handing');
		$temp['buyer']=I('post.buyer');
		$temp['contact_way']=I('post.contact_way');
		$temp['linkman']=I('post.linkman');
		$temp['car_number']=I('post.car_number');
		$temp['to_explain']=I('post.to_explain');
		$temp['specific_time']=date('Y-m-d H:i:s',time());
		$temp['receivable_amount']=I('post.price1')*I('post.number1')+I('post.price2')*I('post.number2')+I('post.price3')*I('post.number3')+I('post.price4')*I('post.number4')+I('post.price5')*I('post.number5')+I('post.price6')*I('post.number6')+I('post.price7')*I('post.number7');
		$temp['sign']="以用";
		$temp['year']=date('Y',time());
		$temp['month']=date('m',time());
		$temp['str_to_time']=time();


		
		if(I('post.goods_name1')!=NULL||I('post.number1')!=NULL||I('post.price1')!=NULL||I('post.total_price1')!=NULL||I('post.equipment_style1')!=NULL||I('post.equipment_number1')!=NULL||I('post.install_date1')!=NULL||I('post.get_money_people1')!=NULL||I('post.get_money_date1')!=NULL||I('post.vaild_date1')!=NULL||I('post.to_remark1')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style1');  //查询仓库里有没有
			$temp_find['goods_name']=I('post.goods_name1');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style1');    //后面提示用
			$goods_name=I('post.goods_name1');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number1');   //$input_number是【用户输入的数量】
			
			if((!empty($result))&&($practical_number >= $input_number))
			{			
					$temp['number']=I('post.number1');
					$temp['goods_name']=I('post.goods_name1');
					$temp['price']=I('post.price1');
					$temp['total_price']=I('post.price1')*I('post.number1');    //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style1');
					$temp['equipment_number']=I('post.equipment_number1');
					$temp['install_date']=I('post.install_date1');
					$temp['get_money_people']=I('post.get_money_people1');
					$temp['get_money_date']=I('post.get_money_date1');
					$temp['vaild_date']=I('post.vaild_date1');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date1'));
					$temp['to_remark']=I('post.to_remark1');
						
					$model->add($temp);	
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的			
			}
			if(empty($result))
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		if(I('post.goods_name2')!=NULL||I('post.number2')!=NULL||I('post.price2')!=NULL||I('post.total_price2')!=NULL||I('post.equipment_style2')!=NULL||I('post.equipment_number2')!=NULL||I('post.install_date2')!=NULL||I('post.get_money_people2')!=NULL||I('post.get_money_date2')!=NULL||I('post.vaild_date2')!=NULL||I('post.to_remark2')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style2');
			$temp_find['goods_name']=I('post.goods_name2');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style2');
			$goods_name=I('post.goods_name2');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number2');   //$input_number是【用户输入的数量】
			
			if((!empty($result))&&($practical_number <= $input_number))
			{				
					$temp['goods_name']=I('post.goods_name2');
					$temp['number']=I('post.number2');
					$temp['price']=I('post.price2');
					$temp['total_price']=I('post.price2')*I('post.number2'); //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style2');
					$temp['equipment_number']=I('post.equipment_number2');
					$temp['install_date']=I('post.install_date2');
					$temp['get_money_people']=I('post.get_money_people2');
					$temp['get_money_date']=I('post.get_money_date2');
					$temp['vaild_date']=I('post.vaild_date2');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date2'));
					$temp['to_remark']=I('post.to_remark2');
					$model->add($temp);
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的
			}
			if(empty($result))
			{
				echo "<script>alert('类型为{$equipment_style}的{$goods_name}的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		if(I('post.goods_name3')!=NULL||I('post.number3')!=NULL||I('post.price3')!=NULL||I('post.total_price3')!=NULL||I('post.equipment_style3')!=NULL||I('post.equipment_number3')!=NULL||I('post.install_date3')!=NULL||I('post.get_money_people3')!=NULL||I('post.get_money_date3')!=NULL||I('post.vaild_date3')!=NULL||I('post.to_remark3')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style3');
			$temp_find['goods_name']=I('post.goods_name3');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style3');
			$goods_name=I('post.goods_name3');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number3');   //$input_number是【用户输入的数量】
			
			if((!empty($result))&&($practical_number <= $input_number))
			{
					$temp['goods_name']=I('post.goods_name3');
					$temp['number']=I('post.number3');
					$temp['price']=I('post.price3');
					$temp['total_price']=I('post.price3')*I('post.number3');  //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style3');
					$temp['equipment_number']=I('post.equipment_number3');
					$temp['install_date']=I('post.install_date3');
					$temp['get_money_people']=I('post.get_money_people3');
					$temp['get_money_date']=I('post.get_money_date3');
					$temp['vaild_date']=I('post.vaild_date3');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date3'));
					$temp['to_remark']=I('post.to_remark3');
					$model->add($temp);
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的
			}
			if(empty($result))
			{
				echo "<script>alert('类型为{$equipment_style}的{$goods_name}的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		if(I('post.goods_name4')!=NULL||I('post.number4')!=NULL||I('post.price4')!=NULL||I('post.total_price4')!=NULL||I('post.equipment_style4')!=NULL||I('post.equipment_number4')!=NULL||I('post.install_date4')!=NULL||I('post.get_money_people4')!=NULL||I('post.get_money_date4')!=NULL||I('post.vaild_date4')!=NULL||I('post.to_remark4')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style4');
			$temp_find['goods_name']=I('post.goods_name4');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style4');
			$goods_name=I('post.goods_name4');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number4');   //$input_number是【用户输入的数量】
			
			if((!empty($result))&&($practical_number <= $input_number))
			{
					$temp['goods_name']=I('post.goods_name4');
					$temp['number']=I('post.number4');
					$temp['price']=I('post.price4');
					$temp['total_price']=I('post.price4')*I('post.number4');   //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style4');
					$temp['equipment_number']=I('post.equipment_number4');
					$temp['install_date']=I('post.install_date4');
					$temp['get_money_people']=I('post.get_money_people4');
					$temp['get_money_date']=I('post.get_money_date4');
					$temp['vaild_date']=I('post.vaild_date4');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date4'));
					$temp['to_remark']=I('post.to_remark4');
					$model->add($temp);
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的
			}
			if(empty($result))
			{
				echo "<script>alert('类型为{$equipment_style}的{$goods_name}的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		if(I('post.goods_name5')!=NULL||I('post.number5')!=NULL||I('post.price5')!=NULL||I('post.total_price5')!=NULL||I('post.equipment_style5')!=NULL||I('post.equipment_number5')!=NULL||I('post.install_date5')!=NULL||I('post.get_money_people5')!=NULL||I('post.get_money_date5')!=NULL||I('post.vaild_date5')!=NULL||I('post.to_remark5')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style5');
			$temp_find['goods_name']=I('post.goods_name5');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style5');
			$goods_name=I('post.goods_name5');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number5');   //$input_number是【用户输入的数量】
			
			if((!empty($result))&&($practical_number <= $input_number))
			{
					$temp['goods_name']=I('post.goods_name5');
					$temp['number']=I('post.number5');
					$temp['price']=I('post.price5');
					$temp['total_price']=I('post.price5')*I('post.number5');    //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style5');
					$temp['equipment_number']=I('post.equipment_number5');
					$temp['install_date']=I('post.install_date5');
					$temp['get_money_people']=I('post.get_money_people5');
					$temp['get_money_date']=I('post.get_money_date5');
					$temp['vaild_date']=I('post.vaild_date5');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date5'));
					$temp['to_remark']=I('post.to_remark5');
					$model->add($temp);
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的
			}
			if(empty($result))
			{
				echo "<script>alert('类型为{$equipment_style}的{$goods_name}的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		if(I('post.goods_name6')!=NULL||I('post.number6')!=NULL||I('post.price6')!=NULL||I('post.total_price6')!=NULL||I('post.equipment_style6')!=NULL||I('post.equipment_number6')!=NULL||I('post.install_date6')!=NULL||I('post.get_money_people6')!=NULL||I('post.get_money_date6')!=NULL||I('post.vaild_date6')!=NULL||I('post.to_remark6')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style6');
			$temp_find['goods_name']=I('post.goods_name6');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style6');
			$goods_name=I('post.goods_name6');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number6');   //$input_number是【用户输入的数量】
			
			
			if((!empty($result))&&($practical_number <= $input_number))
			{
					$temp['goods_name']=I('post.goods_name6');
					$temp['number']=I('post.number6');
					$temp['price']=I('post.price6');
					$temp['total_price']=I('post.price6')*I('post.number6');   //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style6');
					$temp['equipment_number']=I('post.equipment_number6');
					$temp['install_date']=I('post.install_date6');
					$temp['get_money_people']=I('post.get_money_people6');
					$temp['get_money_date']=I('post.get_money_date6');
					$temp['vaild_date']=I('post.vaild_date6');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date6'));
					$temp['to_remark']=I('post.to_remark6');
					$model->add($temp);
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的
			}
			if(empty($result))
			{
				echo "<script>alert('类型为{$equipment_style}的{$goods_name}的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		if(I('post.goods_name7')!=NULL||I('post.number7')!=NULL||I('post.price7')!=NULL||I('post.total_price7')!=NULL||I('post.equipment_style7')!=NULL||I('post.equipment_number7')!=NULL||I('post.install_date7')!=NULL||I('post.get_money_people7')!=NULL||I('post.get_money_date7')!=NULL||I('post.vaild_date7')!=NULL||I('post.to_remark7')!=NULL)
		{
			$temp_find['equipment_style']=I('post.equipment_style7');
			$temp_find['goods_name']=I('post.goods_name7');
			$result=$model_add_goods->where($temp_find)->find();
			
			$equipment_style=I('post.equipment_style7');
			$goods_name=I('post.goods_name7');
			
			$practical_number=$model_add_goods-> where($temp_find)->count();  //$practical_number【仓库中实际有的数量】
			$input_number=I('post.number7');   //$input_number是【用户输入的数量】
			
			if((!empty($result))&&($practical_number <= $input_number))
			{
					$temp['goods_name']=I('post.goods_name7');
					$temp['number']=I('post.number7');
					$temp['price']=I('post.price7');
					$temp['total_price']=I('post.price7')*I('post.number7');   //计算一行的金额
					$temp['equipment_style']=I('post.equipment_style7');
					$temp['equipment_number']=I('post.equipment_number7');
					$temp['install_date']=I('post.install_date7');
					$temp['get_money_people']=I('post.get_money_people7');
					$temp['get_money_date']=I('post.get_money_date7');
					$temp['vaild_date']=I('post.vaild_date7');
					$temp['temp_vaild_date']=strtotime(I('post.vaild_date7'));
					$temp['to_remark']=I('post.to_remark7');
					$model->add($temp);
					$model_add_goods->where($temp_find)->where('sign="未用"')->limit($input_number)->setField('sign','以用');		//删除从库存拿走的
			}
			if(empty($result))
			{
				echo "<script>alert('类型为{$equipment_style}的{$goods_name}的商品，库存里没有');</script>";
			}
			if($practical_number < $input_number)
			{
				echo "<script>alert('类型为【{$equipment_style}】的【{$goods_name}】仓库里数量不足');</script>";
			}
		}
		$this->display('add_business');
	}  
	public function delete()    //删除业务
	{
		$sale_model=M('sale');
		$add_goods_model=M('add_goods');
		
		$find_car_number['car_number']=I('post.car_number');
		$find_sim_number['goods_name']=I('post.sim_number');
		
		$find_car_number_result=$sale_model->where($find_car_number)->select();
		$find_sim_number_result=$sale_model->where($find_sim_number)->select();
		
		if(!empty($find_car_number_result))
		{
			$temp_car_number['car_number']=I('post.car_number');
	
			$data=$sale_model->where($temp_car_number)->select();
			$number_array=count($data,0);      //查找符合条件的【一维数组】有多少个
			for($i=0;$i<$number_array;$i++)
			{
				$number=$data[$i]['number'];   //查找某个【一维数组】的【number】的值
				for($j=0;$j<$number;$j++)
				{
					
					$temp_array=$data[$i];
					$temp_array['sign']="未用";
					$temp_array['number']=1;		
					$temp_array['id']=NULL;   //因为id设置了主键 是不能重复的 但是这里不设置NULL 那会出现很多重复的 会报错
					$add_goods_model->add($temp_array);
				}
			}
			$result=$sale_model->where($temp_car_number)->delete();
		}
		if(!empty($find_sim_number_result))
		{
			$temp_goods_name['goods_name']=I('post.sim_number');
			
			$data=$sale_model->where($temp_goods_name)->select();
			$number_array=count($data,0);      //查找符合条件的【一维数组】有多少个
			for($i=0;$i<$number_array;$i++)
			{
				$number=$data[$i]['number'];   //查找某个【一维数组】的【number】的值
				for($j=0;$j<$number;$j++)
				{
					$temp_array=$data[$i];
					$temp_array['sign']="未用";
					$temp_array['number']=1;		
					$temp_array['id']=NULL;   //因为id设置了主键 是不能重复的 但是这里不设置NULL 那会出现很多重复的 会报错
					$add_goods_model->add($temp_array);
				}
			}			
			$result=$sale_model->where($temp_goods_name)->delete();
		}	
		if(empty($find_sim_number_result) && empty($find_car_number_result))
		{
			echo "<script>alert('输入数据错误');</script>";
		}
		if($result)
		{
			echo "<script>alert('删除成功');</script>";
		}
		$this->display('delete_business');	
	}
	public function revise()    //修改业务
	{
		$sale_model=M('sale');
		$add_goods_model=M('add_goods');
		
		$temp1['car_number']=I('post.car_number');
		$temp2['goods_name']=I('post.sim_number');
		$sign['sign']="被修改了";
		

		if(I('post.car_number')!=NULL)
		{
			$result=$sale_model->where($temp1);		
			$sale_model->where($temp1)->save($sign);
			$this->display('revise_business_table');
		}	
		if(I('post.sim_number')!=NULL)
		{
			$result=$add_goods_model->where($temp2);
			$add_goods_model->where($temp2)->save($sign);
			$this->display('revise_business_table');
		}	
		if(empty($result))
		{
			echo "<script>alert('输入错误');</script>";
			$this->display('revise_business');
		}
	}
	public function revise_business_table_add()
	{
		$model=M('sale');
		
		$temp['receipts_number']=I('post.receipts_number');
		$temp['entering_date']=I('post.entering_date');
		$temp['person_handing']=I('post.person_handing');
		$temp['buyer']=I('post.buyer');
		$temp['contact_way']=I('post.contact_way');
		$temp['linkman']=I('post.linkman');
		$temp['car_number']=I('post.car_number');
		$temp['to_explain']=I('post.to_explain');
		$temp['specific_time']=date('Y-m-d H:i:s',time());
		$temp['sign']="以用";
		
		if(I('post.goods_name1')!=NULL||I('post.number1')!=NULL||I('post.price1')!=NULL||I('post.total_price1')!=NULL||I('post.equipment_style1')!=NULL||I('post.equipment_number1')!=NULL||I('post.install_date1')!=NULL||I('post.get_money_people1')!=NULL||I('post.get_money_date1')!=NULL||I('post.vaild_date1')!=NULL||I('post.to_remark1')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name1');
				$temp['number']=I('post.number1');
				$temp['price']=I('post.price1');
				$temp['total_price']=I('post.total_price1');
				$temp['equipment_style']=I('post.equipment_style1');
				$temp['equipment_number']=I('post.equipment_number1');
				$temp['install_date']=I('post.install_date1');
				$temp['get_money_people']=I('post.get_money_people1');
				$temp['get_money_date']=I('post.get_money_date1');
				$temp['vaild_date']=I('post.vaild_date1');
				$temp['to_remark']=I('post.to_remark1');
				$model->add($temp);				
		}

		if(I('post.goods_name2')!=NULL||I('post.number2')!=NULL||I('post.price2')!=NULL||I('post.total_price2')!=NULL||I('post.equipment_style2')!=NULL||I('post.equipment_number2')!=NULL||I('post.install_date2')!=NULL||I('post.get_money_people2')!=NULL||I('post.get_money_date2')!=NULL||I('post.vaild_date2')!=NULL||I('post.to_remark2')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name2');
				$temp['number']=I('post.number2');
				$temp['price']=I('post.price2');
				$temp['total_price']=I('post.total_price2');
				$temp['equipment_style']=I('post.equipment_style2');
				$temp['equipment_number']=I('post.equipment_number2');
				$temp['install_date']=I('post.install_date2');
				$temp['get_money_people']=I('post.get_money_people2');
				$temp['get_money_date']=I('post.get_money_date2');
				$temp['vaild_date']=I('post.vaild_date2');
				$temp['to_remark']=I('post.to_remark2');
				$model->add($temp);
		}
		if(I('post.goods_name3')!=NULL||I('post.number3')!=NULL||I('post.price3')!=NULL||I('post.total_price3')!=NULL||I('post.equipment_style3')!=NULL||I('post.equipment_number3')!=NULL||I('post.install_date3')!=NULL||I('post.get_money_people3')!=NULL||I('post.get_money_date3')!=NULL||I('post.vaild_date3')!=NULL||I('post.to_remark3')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name3');
				$temp['number']=I('post.number3');
				$temp['price']=I('post.price3');
				$temp['total_price']=I('post.total_price3');
				$temp['equipment_style']=I('post.equipment_style3');
				$temp['equipment_number']=I('post.equipment_number3');
				$temp['install_date']=I('post.install_date3');
				$temp['get_money_people']=I('post.get_money_people3');
				$temp['get_money_date']=I('post.get_money_date3');
				$temp['vaild_date']=I('post.vaild_date3');
				$temp['to_remark']=I('post.to_remark3');
				$model->add($temp);
		}
		if(I('post.goods_name4')!=NULL||I('post.number4')!=NULL||I('post.price4')!=NULL||I('post.total_price4')!=NULL||I('post.equipment_style4')!=NULL||I('post.equipment_number4')!=NULL||I('post.install_date4')!=NULL||I('post.get_money_people4')!=NULL||I('post.get_money_date4')!=NULL||I('post.vaild_date4')!=NULL||I('post.to_remark4')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name4');
				$temp['number']=I('post.number4');
				$temp['price']=I('post.price4');
				$temp['total_price']=I('post.total_price4');
				$temp['equipment_style']=I('post.equipment_style4');
				$temp['equipment_number']=I('post.equipment_number4');
				$temp['install_date']=I('post.install_date4');
				$temp['get_money_people']=I('post.get_money_people4');
				$temp['get_money_date']=I('post.get_money_date4');
				$temp['vaild_date']=I('post.vaild_date4');
				$temp['to_remark']=I('post.to_remark4');
				$model->add($temp);
		}
		if(I('post.goods_name5')!=NULL||I('post.number5')!=NULL||I('post.price5')!=NULL||I('post.total_price5')!=NULL||I('post.equipment_style5')!=NULL||I('post.equipment_number5')!=NULL||I('post.install_date5')!=NULL||I('post.get_money_people5')!=NULL||I('post.get_money_date5')!=NULL||I('post.vaild_date5')!=NULL||I('post.to_remark5')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name5');
				$temp['number']=I('post.number5');
				$temp['price']=I('post.price5');
				$temp['total_price']=I('post.total_price5');
				$temp['equipment_style']=I('post.equipment_style5');
				$temp['equipment_number']=I('post.equipment_number5');
				$temp['install_date']=I('post.install_date5');
				$temp['get_money_people']=I('post.get_money_people5');
				$temp['get_money_date']=I('post.get_money_date5');
				$temp['vaild_date']=I('post.vaild_date5');
				$temp['to_remark']=I('post.to_remark5');
				$model->add($temp);
		}
		if(I('post.goods_name6')!=NULL||I('post.number6')!=NULL||I('post.price6')!=NULL||I('post.total_price6')!=NULL||I('post.equipment_style6')!=NULL||I('post.equipment_number6')!=NULL||I('post.install_date6')!=NULL||I('post.get_money_people6')!=NULL||I('post.get_money_date6')!=NULL||I('post.vaild_date6')!=NULL||I('post.to_remark6')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name6');
				$temp['number']=I('post.number6');
				$temp['price']=I('post.price6');
				$temp['total_price']=I('post.total_price6');
				$temp['equipment_style']=I('post.equipment_style6');
				$temp['equipment_number']=I('post.equipment_number6');
				$temp['install_date']=I('post.install_date6');
				$temp['get_money_people']=I('post.get_money_people6');
				$temp['get_money_date']=I('post.get_money_date6');
				$temp['vaild_date']=I('post.vaild_date6');
				$temp['to_remark']=I('post.to_remark6');
				$model->add($temp);
		}
		if(I('post.goods_name7')!=NULL||I('post.number7')!=NULL||I('post.price7')!=NULL||I('post.total_price7')!=NULL||I('post.equipment_style7')!=NULL||I('post.equipment_number7')!=NULL||I('post.install_date7')!=NULL||I('post.get_money_people7')!=NULL||I('post.get_money_date7')!=NULL||I('post.vaild_date7')!=NULL||I('post.to_remark7')!=NULL)
		{
				$temp['goods_name']=I('post.goods_name7');
				$temp['number']=I('post.number7');
				$temp['price']=I('post.price7');
				$temp['total_price']=I('post.total_price7');
				$temp['equipment_style']=I('post.equipment_style7');
				$temp['equipment_number']=I('post.equipment_number7');
				$temp['install_date']=I('post.install_date7');
				$temp['get_money_people']=I('post.get_money_people7');
				$temp['get_money_date']=I('post.get_money_date7');
				$temp['vaild_date']=I('post.vaild_date7');
				$temp['to_remark']=I('post.to_remark7');
				$model->add($temp);
		}
		$this->display('revise_business');
	}
	public function export_searchbusiness()
	{
		import("ORG.Yufan.Excel");
		
		$data = M('sale')->group('specific_time')->select();
		
		$row=array();
		$row[0]=array('序号','车牌号码','联系人','联系方式','购买单位','总金额','收费日期','到期日期','备注');
		$i=1;
		foreach($data as $v)
		{
		        $row[$i]['i'] = $i;
		        $row[$i]['car_number'] = $v['car_number'];
		        $row[$i]['linkman'] = $v['linkman'];
		        $row[$i]['contact_way'] = $v['contact_way'];
		        $row[$i]['buyer'] = $v['buyer'];
				$row[$i]['total_price'] = $v['total_price'];
		        $row[$i]['get_money_date'] = $v['get_money_date'];
				$row[$i]['vaild_date'] = $v['vaild_date'];
		        $row[$i]['get_money_date'] = $v['get_money_date'];
				$row[$i]['to_remark'] = $v['to_remark'];
		        $i++;
		}
		$xls = new \Excel_XML('UTF-8', false, 'datalist');
		$xls->addArray($row);
		$time=date('Y-m-d-H-i-s',time());
		$xls->generateXML($time);
	}
}
?>