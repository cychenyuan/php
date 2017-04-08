<?php 
class Controller{
	protected $smarty;

	public function __construct()
	{
		if(method_exists($this,'yanzheng'))
		{
			$this->yanzheng();
		}
		$view=new View();
		$this->smarty=$view->smarty;
	}
	protected function jump($msg,$url,$time=2)
	{
		header('content-type:text/html;charset=utf-8');
		echo $msg;
		header("refresh:$time;url=$url");
		exit;
	}

}

 ?>