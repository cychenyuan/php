<?php 
class Db{
	private static $ins=null;
	public $pdo=null;
	private function __construct()
	{
		$this->connect();
	}
	private function __clone()
	{

	}
	public static function getIns()
	{
		if(self::$ins===null)
		{
			self::$ins=new self();
		}
		return self::$ins;
	}
	private function connect(){
		try{
			$dsn="{$GLOBALS['conf']['DB_TYPE']}:host={$GLOBALS['conf']['DB_HOST']};dbname={$GLOBALS['conf']['DB_NAME']};charset={$GLOBALS['conf']['DB_CHARSET']}";
			$this->pdo=new PDO($dsn,$GLOBALS['conf']['DB_USER'],$GLOBALS['conf']['DB_PWD'],array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		}catch (PDOException $e){
			exit($e->getMessage());
		}
	}
}


 ?>