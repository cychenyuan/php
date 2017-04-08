<?php 
class CommonController extends Controller{

	public function yanzheng(){
		if(!isset($_SESSION['adminname']))
		{
		$this->jump('请登录',"index.php?m=admin&c=Login&a=login");
		}
	
	}
}


 ?>