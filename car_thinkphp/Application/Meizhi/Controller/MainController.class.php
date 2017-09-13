<?php
namespace Meizhi\Controller;
use Think\Controller;
class MainController extends Controller{
	public function main()
	{
		$this->display();	//展示模板
	}
	public function login()
	{
		$this->display();
	}
	public function cancel()
	{
		session(null);
		$this->redirect('Login/login');
	}
}

?>