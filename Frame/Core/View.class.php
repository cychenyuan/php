<?php 
class View{
	public $smarty;
	public function __construct()
	{
		require_once FRAME_PATH.'Smarty/Smarty.class.php';
		$this->smarty=new Smarty();
		$this->smarty->setTemplateDir(VIEW_PATH.C);
		$this->smarty->setCompileDir(APP_PATH.'Runtime');
	}
}


 ?>