<?php 
class UserModel extends Model{
	public function reg($arr){
		$sql="insert into user (username,pwd,face,email,phone,ctime)
		values
		(:username,
		:pwd,
		:face,
		:email,
		:phone,
		:ctime)";
		$params=array();
		foreach ($arr as $key => $value) {
			$params[":".$key]=$value;
		}
		return $this->add($sql,$params);
	}

	public function loginCheck($arr){
		$name=$arr['name'];
		$sql="select id,username,pwd from user where username='$name' or email='$name' or phone='$name'";
		$row=$this->find($sql);
		if($row['pwd']==$arr['pwd']){
			return $row;
		}else{
			return false;
		}
	}

	//激活方法
	public function jihuo($code){
		//解密code信息
		$code=base64_decode($code);

		//用空格把字符串分割成数组
		$info=explode(' ',$code);

		//根据信息的邮箱作为where条件来更新jihuo字段的状态
		$sql="update user set is_jihuo=1 where email='$info[2]'";
		return $this->save($sql);

	}

}

 ?>