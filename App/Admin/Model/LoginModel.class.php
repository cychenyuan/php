<?php 
class LoginModel extends Model{
	public function login()
	{
		$adminname=$_POST['adminname'];
		
		$pwd=md5($_POST['pwd']);
		
		$sql="select pwd from admin where adminname='$adminname'";

		$res=$this->find($sql);
		if($res)
		{
			if($res['pwd']==$pwd)
			{
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}

 ?>