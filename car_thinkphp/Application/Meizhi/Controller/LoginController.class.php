<?php
	namespace Meizhi\Controller;
	use Think\Controller;
	class LoginController extends Controller{
		public function login(){
			$this->display();
		}
		public function checklogin(){
			$post=I('post.');
			$model=M('login');
			$password=md5($post['password']);
			$username=$post['username'];
			$data=$model->where("password = '$password' and username='$username'")->find();	
//			$data=$model->where($map)->find();	where 可以采用数组的形式
			if($data){
				session('id',$data['id']);
				session('username',$data['username']);
				session('password',$data['password']);
				session('power',$data['power']);
//				$this->success('登陆成功',u('Main/main'),0);
				$this->redirect('Main/main');
			}
			else{
				$this->error('用户或密码错误');
			}
		}
	}
?>