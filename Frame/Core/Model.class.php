<?php 
class Model{
	private $pdo;
	public function __construct(){
		$db=Db::getIns();
		$this->pdo=$db->pdo;

	}
	public function select($sql,$params=array()){
		$PDOStatement=$this->pdo->prepare($sql);
		if($params){
			foreach($params as $key=>$value){
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
		$PDOStatement->execute();
		return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
	}catch (PDOException $e){
		$path = APP_PATH.'Runtime/Log/';
			if(!file_exists($path)){
				mkdir($path, 0777, true);
			}
			file_put_contents($path . 'sql.log', $e->getMessage()."\r\n");
			return false;
	}
	}

	public function find($sql,$params=array()){
		
		$PDOStatement=$this->pdo->prepare($sql);
		if($params){
			foreach($params as $key=>$value){
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
		$PDOStatement->execute();
		return $PDOStatement->fetch(PDO::FETCH_ASSOC);
	}catch (PDOException $e){
		$path = APP_PATH.'Runtime/Log/';
			if(!file_exists($path)){
				mkdir($path, 0777, true);
			}
			file_put_contents($path . 'sql.log', $e->getMessage()."\r\n");
			return false;
	}
	}
	public function add($sql,$params=array())
	{
		$PDOStatement=$this->pdo->prepare($sql);
				
		if($params){
			foreach($params as $key=>$value){
				
				$PDOStatement->bindValue($key,$value);
				
			}
		}
		try{
		return $PDOStatement->execute();
		}catch (PDOException $e)
		{
			$path = APP_PATH.'Runtime/Log/';
			if(!file_exists($path)){
				mkdir($path, 0777, true);
			}
			file_put_contents($path . 'sql.log', $e->getMessage()."\r\n");
			return false;
		}
	}
public function save($sql,$params=array())
	{
		
		$PDOStatement=$this->pdo->prepare($sql);
		
		
		if($params){
			foreach($params as $key=>$value){
					$temp=$PDOStatement->bindValue($key,$value);
				
			}

			
		}
	

		try{

		return $PDOStatement->execute();
		}catch (PDOException $e)
		{
			
			$path = APP_PATH.'Runtime/Log/';
			if(!file_exists($path)){
				mkdir($path, 0777, true);
			}
			file_put_contents($path . 'sql.log', $e->getMessage()."\r\n");
			return false;
		}
	}	
	public function delete($sql,$params=array())
	{
		$PDOStatement=$this->pdo->prepare($sql);
		
		
		if($params){
			foreach($params as $key=>$value){
				
				$PDOStatement->bindValue($key,$value);
				
			}
		}
		try{
		return $PDOStatement->execute();
		}catch (PDOException $e)
		{
			$path = APP_PATH.'Runtime/Log/';
			if(!file_exists($path)){
				mkdir($path, 0777, true);
			}
			file_put_contents($path . 'sql.log', $e->getMessage()."\r\n");
			return false;
		}
	}	
	public function count($sql){
		$PDOStatement=$this->pdo->query($sql);
		return $PDOStatement->fetchColumn();
	}
}


 ?>