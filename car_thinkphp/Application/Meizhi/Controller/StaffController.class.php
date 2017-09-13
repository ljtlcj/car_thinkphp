<?php
namespace Meizhi\Controller;
use Think\Controller;
class StaffController extends Controller{
	public function find_staff()    //查看员工
	{
		
		$m=M('login');
		$find_id=I('get.id');
		$m->delete($find_id);
//		$staff=$m->select();
	//	$this->assign('data',$staff);
		
		$count=$m->count();
		
		$p = new \Think\Page($count,10);  
	    $p->setConfig('header', '<li class="rows">&nbsp共<b>%TOTAL_ROW%</b>条记录 </li>');  
	    $p->setConfig('prev', '上一页');  
	    $p->setConfig('next', '下一页');  
	    $p->setConfig('last', '末页');  
	    $p->setConfig('first', '首页');  
	    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');  
	    $p->lastSuffix = false;//最后一页不显示为总页数  
	  
	    $show=$p->show();  //生产URL地址
		$list=$m->order('power')->limit($p->firstRow,$p->listRows)->select();
		
		$this->assign('data',$list);
		$this->assign('page',$show);
		$this->display();	
	}
	public function delete_staff()
	{
		$this->display();	//展示模板
	}
	public function add_salesmen()
	{
		$this->display();	//展示模板
	}
	
	public function add()     //添加员工
	{
		$model=M('login');
		
		$choice_add_people=I('post.choice_add_people');
		$username=I('post.username');
		$password=I('post.password');
		$sure_password=I('post.sure_password');
		
		$temp['username']=$username;    //判断有没有相同用户名使用
		$temp_username=$model->where($temp)->getField('username');
		
		if($password!=$sure_password)
		{
			echo "<script>alert('注册密码和确认密码不同');</script>";
		}
		else
		{
			if(!empty($temp_username))
			{
				echo "<script>alert('用户名已存在');</script>";
			}
			else
			{
				if($choice_add_people=='添加业务员')
				{
					$data['username']=$username;
					$data['password']=md5($password);
					$data['power']='4';
					$model->add($data);
					echo "<script>alert('添加成功');</script>";
				}
				if($choice_add_people=='添加财务员')
				{
					$data['username']=$username;
					$data['password']=md5($password);
					$data['power']='3';
					$model->add($data);
					echo "<script>alert('添加成功');</script>";
				}
			}
		}
		$this->display('add_salesmen');
	}
	public function delete()    //删除员工
	{
		$model=M('login');
		$username=I('post.username');
		
		$temp['username']=$username;
		$id=$model->where($temp)->getField('id');
		
		$temp['id']=$id;
		if(!empty($id))
		{
			$model->where($temp)->delete();
			echo "<script>alert('删除成功')</script>";
		}
		else{
			echo "<script>alert('没有此用户名')</script>";
		}
		$this->display('delete_staff');	
	}
	public function export()
	{
		import("ORG.Yufan.Excel");
		$data = M('login')->select();
		$row=array();
		$row[0]=array('序号','职位','姓名');
		$i=1;
		foreach($data as $v)
		{
		        $row[$i]['i'] = $i;
				if( $v['power']=='2')
				{
					$row[$i]['power'] ="老板";
				}
				if( $v['power']=='3')
				{
					$row[$i]['power'] ="财务员";
				}	  
				if( $v['power']=='4')
				{
					$row[$i]['power'] ="业务员";
				}				     
		        $row[$i]['username'] = $v['username'];
		        $i++;
		}
		$xls = new \Excel_XML('UTF-8', false, 'datalist');
		$xls->addArray($row);
		$time=date('Y-m-d-H-i-s',time());
		$xls->generateXML($time);		
	}

}

?>