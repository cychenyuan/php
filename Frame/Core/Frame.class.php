<?php 
class Frame{
	public static function run(){
		self::StartSession();
		self::readConfig();
		self::getParams();
		self::setConst();
		self::autoLoad();
		self::dispatch();
	}
	public static function startSession()
	{
		session_start();
	}
	public static function readConfig(){
		$config=require_once './Frame/Config/Config.php';
		$myconfig=require_once APP_PATH.'Config/Config.php';
		$endConfig=array_merge($config, $myconfig);
		$GLOBALS['conf']=$endConfig;
	}
	public static function getParams()
	{
		$m=isset($_GET['m'])?$_GET['m']:$GLOBALS['conf']['DEFAULT_M'];
		$c=isset($_GET['c'])?$_GET['c']:$GLOBALS['conf']['DEFAULT_C'];
		$a=isset($_GET['a'])?$_GET['a']:$GLOBALS['conf']['DEFAULT_A'];
		define('M',$m);
		define('C',$c);
		define('A',$a);
	}
	public static function setConst(){
		define('CONTROLLER_PATH',APP_PATH.M.'/Controller/');
		define('MODEL_PATH',APP_PATH.M.'/Model/');
		define('VIEW_PATH',APP_PATH.M.'/View/');
		define('FRAME_PATH','./Frame/');
		define('CORE_PATH',FRAME_PATH.'Core/');
		define('__PUBLIC__','./Public/');
	}
	public static function autoLoad(){
		spl_autoload_register(function($class){
			$filename=CORE_PATH.$class.'.class.php';
			if(file_exists($filename)) require_once $filename;
			$filename=CONTROLLER_PATH.$class.'.class.php';
			if(file_exists($filename)) require_once $filename;
			$filename=MODEL_PATH.$class.'.class.php';
			if(file_exists($filename)) require_once $filename;
		});
	}
	public static function dispatch(){
		$lei=C.'Controller';
		$obj=new $lei();
		$a=A;
		$obj->$a();
	}
}


 ?>