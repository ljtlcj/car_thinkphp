<?php
namespace Meizhi\Controller;
use Think\Controller;
class StockController extends Controller{
	public function Goodsused()
	{
		$m=M('add_goods');
		
		$different_number_array=$m->where('sign="以用"')->field('sum(number),goods_name,to_remark')->group('goods_name,equipment_style,specific_time')->select();
		$different_number=count($different_number_array,0);

		$p = new \Think\Page($different_number,5);  
	    $p->setConfig('header', '<li class="rows">&nbsp共<b>%TOTAL_ROW%</b>条记录 </li>');  
	    $p->setConfig('prev', '上一页');  
	    $p->setConfig('next', '下一页');  
	    $p->setConfig('last', '末页');  
	    $p->setConfig('first', '首页');  
	    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');  
	    $p->lastSuffix = false;
	  
	    $show=$p->show();  
		$list=$m->limit($p->firstRow,$p->listRows)->where('sign="以用"')->field('sum(number),goods_name,to_remark')->group('goods_name,equipment_style,price,to_remark')->select();
		
		$this->assign('data',$list);
		$this->assign('page',$show);
		
		$this->display();	
	}
	public function Goodsnoused()
	{
		$m=M('add_goods');
//		$all_data=$model->select();
//		$this->assign('all_data',$all_data);
		
		$different_number_array=$m->where('sign="未用"')->field('sum(number),goods_name,to_remark,specific_time,entering_date,price')->group('goods_name,equipment_style,specific_time')->select();
		$different_number=count($different_number_array,0);	
		
		$p = new \Think\Page($different_number,4);  
	    $p->setConfig('header', '<li class="rows">&nbsp共<b>%TOTAL_ROW%</b>条记录 </li>');  
	    $p->setConfig('prev', '上一页');  
	    $p->setConfig('next', '下一页');  
	    $p->setConfig('last', '末页');  
	    $p->setConfig('first', '首页');  
	    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');  
	    $p->lastSuffix = false;//最后一页不显示为总页数  
	  
	    $show=$p->show();  //生产URL地址
		$list=$m->limit($p->firstRow,$p->listRows)->where('sign="未用"')->field('sum(number),goods_name,to_remark,specific_time,entering_date,price')->group('goods_name,equipment_style,specific_time')->select();
		
		$this->assign('data',$list);
		$this->assign('page',$show);
		$this->display();			
	}
	public function add_equipment()
	{
		//需要【商品全名】既可以填写，又可以下拉，这里需要传递之前所有填写过的【商品全名】,因此不需要判断条件
		$model=M('add_goods');
		$all_data=$model->group('goods_name')->select();
		$this->assign('all_data',$all_data);
		$this->display();	//展示模板
	}
	public function delete_equipment()
	{
		$this->display();	//展示模板
	}
	public function revise_equipment()
	{
		$this->display();	//展示模板
	}
	
	public function add()    //添加设备
	{
		$model = M('add_goods');
		
		$data['receipt_number']=I('post.receipt_number');
		$data['supplier']=I('post.supplier');
		$data['person_handing']=I('post.person_handing');
		$data['entering_date']=I('post.entering_date');
		$data['contact_way']=I('post.contact_way');
		$data['sign']="未用";
		$data['month']=date('m',time());
		$data['year']=date('Y',time());
		$data['number']=1;
		
		if(I('post.goods_name1')!=NULL||I('post.equipment_style1')!=NULL||I('post.equipment_number1')!=NULL||I('post.unit1')!=NULL||I('post.number1')!=NULL||I('post.price1')!=NULL&&I('post.total_money1')!=NULL||I('post.to_remark1')!=NULL)
		{
			$number=I('post.number1');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name1');
				$data['equipment_style']=I('post.equipment_style1');
				$data['equipment_number']=I('post.equipment_number1');
				$data['unit']=I('post.unit1');
				//$data['number']=I('post.number1');
				$data['price']=I('post.price1');
				$data['total_money']=I('post.total_money1');
				$data['to_remark']=I('post.to_remark1');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}

		}
		if(I('post.goods_name2')!=NULL||I('post.equipment_style2')!=NULL||I('post.equipment_number2')!=NULL||I('post.unit2')!=NULL||I('post.number2')!=NULL||I('post.price2')!=NULL&&I('post.total_money2')!=NULL||I('post.to_remark2')!=NULL)
		{
			$number=I('post.number2');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name2');
				$data['equipment_style']=I('post.equipment_style2');
				$data['equipment_number']=I('post.equipment_number2');
				$data['unit']=I('post.unit2');
//				$data['number']=I('post.number2');
				$data['price']=I('post.price2');
				$data['total_money']=I('post.total_money2');
				$data['to_remark']=I('post.to_remark2');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}
		}
		if(I('post.goods_name3')!=NULL||I('post.equipment_style3')!=NULL||I('post.equipment_number3')!=NULL||I('post.unit3')!=NULL||I('post.number3')!=NULL||I('post.price3')!=NULL&&I('post.total_money3')!=NULL||I('post.to_remark3')!=NULL)
		{
			$number=I('post.number3');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name3');
				$data['equipment_style']=I('post.equipment_style3');
				$data['equipment_number']=I('post.equipment_number3');
				$data['unit']=I('post.unit3');
//				$data['number']=I('post.number3');
				$data['price']=I('post.price3');
				$data['total_money']=I('post.total_money3');
				$data['to_remark']=I('post.to_remark3');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}

		}
		if(I('post.goods_name4')!=NULL||I('post.equipment_style4')!=NULL||I('post.equipment_number4')!=NULL||I('post.unit4')!=NULL||I('post.number4')!=NULL||I('post.price4')!=NULL&&I('post.total_money4')!=NULL||I('post.to_remark4')!=NULL)
		{
			$number=I('post.number4');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name4');
				$data['equipment_style']=I('post.equipment_style4');
				$data['equipment_number']=I('post.equipment_number4');
				$data['unit']=I('post.unit4');
//				$data['number']=I('post.number4');
				$data['price']=I('post.price1');
				$data['total_money']=I('post.total_money4');
				$data['to_remark']=I('post.to_remark4');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}
		}
		if(I('post.goods_name5')!=NULL||I('post.equipment_style5')!=NULL||I('post.equipment_number5')!=NULL||I('post.unit5')!=NULL||I('post.number5')!=NULL||I('post.price5')!=NULL&&I('post.total_money5')!=NULL||I('post.to_remark5')!=NULL)
		{
			$number=I('post.number5');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name5');
				$data['equipment_style']=I('post.equipment_style5');
				$data['equipment_number']=I('post.equipment_number5');
				$data['unit']=I('post.unit5');
//				$data['number']=I('post.number5');
				$data['price']=I('post.price5');
				$data['total_money']=I('post.total_money5');
				$data['to_remark']=I('post.to_remark5');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}
		}
		if(I('post.goods_name6')!=NULL||I('post.equipment_style6')!=NULL||I('post.equipment_number6')!=NULL||I('post.unit6')!=NULL||I('post.number6')!=NULL||I('post.price6')!=NULL&&I('post.total_money6')!=NULL||I('post.to_remark6')!=NULL)
		{
			$number=I('post.number6');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name6');
				$data['equipment_style']=I('post.equipment_style6');
				$data['equipment_number']=I('post.equipment_number6');
				$data['unit']=I('post.unit6');
//				$data['number']=I('post.number6');
				$data['price']=I('post.price6');
				$data['total_money']=I('post.total_money6');
				$data['to_remark']=I('post.to_remark6');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}
		}
		if(I('post.goods_name7')!=NULL||I('post.equipment_style7')!=NULL||I('post.equipment_number7')!=NULL||I('post.unit7')!=NULL||I('post.number7')!=NULL||I('post.price7')!=NULL&&I('post.total_money7')!=NULL||I('post.to_remark7')!=NULL)
		{
			$number=I('post.number7');
			$star=0;
			$end=$number;
			for($i=$start;$i<$end;$i++)
			{
				$data['goods_name']=I('post.goods_name7');
				$data['equipment_style']=I('post.equipment_style7');
				$data['equipment_number']=I('post.equipment_number7');
				$data['unit']=I('post.unit7');
//				$data['number']=I('post.number7');
				$data['price']=I('post.price7');
				$data['total_money']=I('post.total_money7');
				$data['to_remark']=I('post.to_remark7');
				$temp_time=date('Y-m-d H:i:s',time());
				$data['specific_time']=$temp_time;
				$model->add($data);
			}
		}	
		$this->display('add_equipment');
	}
	public function delete_one()   //删除设备
	{
		$model=M('add_goods');
		
		$temp['goods_name']=I('post.goods_name');
		$temp['equipment_style']=I('post.equipment_style');
		$temp['specific_time']=I('post.specific_time');
		
		$result=$model->where($temp);
		if(!empty($result))
		{
			$data['sign']="导入错误";
			$model->where($temp)->save($data);
			echo "<script>alert('删除成功')</script>";
		}
		else{
			echo "<script>alert('输入具体时间错误')</script>";
		}
		$this->display('delete_stock');	
	}
	public function delete_many()     //批量删除SIM卡
	{
		$model=M('add_goods');
		$temp['specific_time']=I('post.specific_time');
		$result=$model->where($data);	
		if(!empty($result))
		{
			$data['sign']='导入错误';
			$model->where($temp)->save($data);
			echo "<script>alert('删除成功')</script>";
		}
		else{
			echo "<script>alert('输入具体时间错误')</script>";
		}
		$this->display('revise_stock');	
	}
	public function add_sim()   //导入SIM卡
	{
		$model=M('add_goods');
		$sim_number=I('sim_number');
		if(!empty($sim_number))
		{
			$temp['goods_name']=I('sim_number');
			$temp['specific_time']=date('Y-m-d H:i:s',time());
			$temp['sign']="未用";
			$result=$model->add($temp);
			if(!empty($result))
			{
				echo "<script>alert('添加成功')</script>";
			}	
		}
		$this->display('add_sim');
	}
	public function export_goodsnoused()
	{
		import("ORG.Yufan.Excel");
		$data = M('add_goods')->where('sign="未用"')->field('sum(number),goods_name,to_remark,specific_time,entering_date,price')->group('goods_name,equipment_style,specific_time')->select();
		$row=array();
		$row[0]=array('序号','商品','进货时间','具体时间','进货价格','数量','备注');
		$i=1;
		foreach($data as $v)
		{
		        $row[$i]['i'] = $i;
		        $row[$i]['goods_name'] = $v['goods_name'];
		        $row[$i]['entering_date'] = $v['entering_date'];
		        $row[$i]['specific_time'] = $v['specific_time'];
		        $row[$i]['price'] = $v['price'];
				$row[$i]['number'] = $v['sum(number)'];
		        $row[$i]['to_remark'] = $v['to_remark'];
		        $i++;
		}
		$xls = new \Excel_XML('UTF-8', false, 'datalist');
		$xls->addArray($row);
		$time=date('Y-m-d-H-i-s',time());
		$xls->generateXML($time);
	}
	public function export_goodsused()
	{
		import("ORG.Yufan.Excel");
		$data = M('add_goods')->where('sign="以用"')->field('sum(number),goods_name,to_remark')->group('goods_name,equipment_style,specific_time')->select();
		$row=array();
		$row[0]=array('序号','商品','数量','备注');
		$i=1;
		foreach($data as $v)
		{
		        $row[$i]['i'] = $i;
		        $row[$i]['goods_name'] = $v['goods_name'];
		        $row[$i]['number'] = $v['sum(number)'];
		        $row[$i]['to_remark'] = $v['to_remark'];
		        $i++;
		}
		$xls = new \Excel_XML('UTF-8', false, 'datalist');
		$xls->addArray($row);
		$time=date('Y-m-d-H-i-s',time());
		$xls->generateXML($time);
	}
		function impUser(){
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $filepath='./Public/Excle/'; 
            $upload->exts = array('xlsx','xls');// 设置附件上传类型
            $upload->rootPath  =  $filepath; // 设置附件上传根目录
            $upload->saveName  =     'time';
            $upload->autoSub   =     false;
            if (!$info=$upload->upload()) {
                $this->error($upload->getError());
            }
            foreach ($info as $key => $value) {
                unset($info);
                $info[0]=$value;
                $info[0]['savepath']=$filepath;
            }
            vendor("PHPExcel.PHPExcel");
            $file_name=$info[0]['savepath'].$info[0]['savename'];

			$data=explode('.', $info[0]['savename']);
			$end=$data[1];
			if($end=='xls'){
				$objReader = \PHPExcel_IOFactory::createReader('Excel5');
			}
			else{
				$objReader = \PHPExcel_IOFactory::createReader('excel2007');
			}
			

            $objPHPExcel = $objReader->load($file_name);
			
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            $j=0;
            for($i=1;$i<=$highestRow;$i++)
            {
                $data['goods_name']= $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();  

                    M('add_goods')->add($data);
                    $j++;
            }    
            
//          unlink($file_name);

            $this->success('导入成功！本次导入数量：'.$j);
        }else
        {
            $this->error("请选择上传的文件");
        }
    }
	
		
		
}

?>