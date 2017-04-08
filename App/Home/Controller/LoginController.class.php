<?php 
class LoginController extends Controller{

	public function register(){
		$this->smarty->display('register.html');
	}
	public function registerHandle()
	{
		$arr=$_POST;
		$pattern='/^1(30|50|80|86|35|52|55)\d{8}$/';
		if(!preg_match($pattern,$arr['phone'])){
			exit('手机格式不正确');
		}
		$pattern='/(?!_)^[a-z0-9_]{3,15}[a-z0-9]@(sina|qq|163)\.(com|cn)$/';
		if(!preg_match($pattern,$arr['email']))
		{
			exit('邮箱格式不正确');
		}
		unset($arr['yzm']);
		unset($arr['repwd']);
		$arr['ctime']=time();
		$arr['pwd']=md5(md5($arr['pwd']).'blog');
		$arr['face']='';
		if($_FILES['face']['name']){
			$upload=new Upload();
			$upload->rootPath='./Public/face';
			$arr['face']=$upload->up();
		}
		$user=new UserModel();
		$result=$user->reg($arr);
		
		if($result)
		{	
			$sendmail=new sendmail();
			$to=$arr['email'];
			$subject='如影随形'.$arr['username'];
			$code=base64_encode(md5('如影随形').' '.time().' '.$to);
			$url="http://www.blog.com/index.php?c=Login&a=jihuo&code=$code";
			 $content = <<<sd
您好！<br>
感谢您在如影随行网站注册帐户！<br>
帐户需要激活才能使用，赶紧激活成为如影随行正式的一员吧:)
点击下面的链接立即激活帐户(或将网址复制到浏览器中打开)：
<a href='$url'>$url</a>
sd;
			
			$sendmail->postmail($to,$subject,$content,'如影随形',$arr['username']);
			
			$this->jump('注册成功','index.php?c=Login&a=login');
		}else{
			$this->jump('注册失败','index.php?c=Login&a=register');

		}

	}
	public function login(){
		$this->smarty->display('login.html');
	}
	public function loginHandle(){
		$arr=$_POST;
		$arr['pwd']=md5(md5($arr['pwd']).'blog');
		$user=new UserModel();
		$result=$user->loginCheck($arr);

		if($result){
			$_SESSION['uname']=$result['username'];
			$_SESSION['userid']=$result['id'];
			echo '登录成功';
			// $this->jump('登录成功','index.php');

		}else{
			echo '密码或用户名不正确';
			// $this->jump('登录失败','index.php?c=Login&a=login');
		}
	}


	public function jihuo(){
		//从地址栏中过去地址栏中获取code的值
		$code=$_GET['code'];

		//创建usermodel对象用jihuo方法更改激活状态
		$user=new UserModel();
		if($user->jihuo($code)){
			$this->jump('激活成功','index.php?c=Long&a=long');
		}else{
			$this->jump('激活失败','index.php');
		}

	}
	public function logout()
	{
	unset($_SESSION['uname']);
	$this->jump('退出成功', 'index.php');

	}
}

 ?>