<?php 
class LoginController extends Controller{
	public function Login(){
		$this->smarty->display('login.html');
	}
	public function LoginCheck(){
		if(strtolower($_POST['yzm']) != strtolower($_SESSION['yzm']))
		{
			$this->jump('验证码错误','index.php');
			die;
		}
			$_SESSION['adminname']=$_POST['adminname'];

		$login=new loginModel();
		if($login->login())
		{
			$this->jump('登陆成功','?m=admin&c=Index&a=index');
		}else{
			$this->jump('登录失败','?m=admin&c=Login&a=login');
		}

		
	}
	public function logout(){
		unset($_SESSION['adminname']);
		$this->jump('成功退出','index.php');
	}
	public function code(){
		Verify::code();
	}
}
 ?>
