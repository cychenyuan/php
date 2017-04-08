<?php 
class Upload{
	private $info=array();
	private $error='';
	public $size=6;
	public $ext=array('jpg','gif','png');
	public $rootPath='./Public/Uploads/';
	public $mimetp=array('image/jpeg','image/png');

	public function __construct()
	{
		foreach($_FILES as $value){
			$this->info=$value;
		}
	}
	public function up(){
		if(!$this->error() || !$this->checkSize() || !$this->checkExt() || !$this->checkType()){
			exit($this->error);
		}
		$this->setPath();
		$path = rtrim($this->rootPath,'/').'/'.date("Y-m-d");
		$filename=$this->setName().'.'.$this->getExt();
		
		if(move_uploaded_file($this->info['tmp_name'],$path.'/'.$filename)){
			return $path.'/'.$filename;

		}else{
			exit('上传失败');
		}
	}
	public function checkType(){
		$fs=finfo_open(FILEINFO_MIME_TYPE);
		$mime=finfo_file($fs,$this->info['tmp_name']);
		if(!in_array($mime,$this->mimetp)){
			$this->error='上传类型不对';
			return false;
		}
		return true;
	}
	public function setPath(){
		$subPath=date("Y-m-d");
		$path=rtrim($this->rootPath,'/').'/'.$subPath;
		if(!file_exists($path)){
			mkdir($path, 0777,true);
		}

	}
	public function setName(){
		return time().mt_rand(000,999);
	}
	public function checkSize(){
		if($this->info['size'] > $this->size*1024*1024){
			$this->error='上传文件太大';
			return false;

		}
		return true;
	}
	public function getExt(){
		return ltrim(strrchr($this->info['name'],'.'),'.');
	}
	public function checkExt(){
		$ext=$this->getExt();
		if(!in_array(strtolower($ext),$this->ext)){
			$this->error='不允许的文件后缀';
			return false;
		}
		return true;
	}
	public function error(){
		$err=array(
			1=>'上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值',
			2=>'上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值',
			3=>'文件只有部分被上传',
			4=>'没有文件被上传',
			6=>'找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进',
			7=>'文件写入失败。PHP 5.1.0 引进'
			);
		if(array_key_exists($this->info['error'],$err)){
			$this->error=$err[$this->info['error']];
			return false;
		}
		return true;

	}
}

 ?>