<?php
namespace Meizhi\Controller;
use Think\Controller;
class RevisePController extends Controller{
	public function revise_password()
	{
		$this->display();	
	}
	public function revise()
	{
		$model=M('login');
		
		$start_password=md5(I('post.start_password'));
		$new_password=md5(I('post.new_password'));
		$password_submit=md5(I('post.password_submit'));
		
		if($start_password&&$new_password&&$password_submit)
		{
			if($new_password!=$password_submit)
			{
				echo "<script>alert('新密码和确认密码不一致');</script>";
			}
			else
			{
				$temp['password'] = $start_password;
				$id=$model->where($temp)->getField('id');
				if(!empty($id))
				{
					$temp['id'] = $id;
				    $model->where($temp)->setField('password',$password_submit);
					echo "<script>alert('修改成功');</script>";
				}
				else
				{
					echo "<script>alert('原密码输入不正确');</script>";
				}
			}
		}
		else
		{
			echo "<script>alert('填写不完全');</script>";
		}
		$this->display('revise_password');
	}
}
?>