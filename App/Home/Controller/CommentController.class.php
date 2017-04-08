<?php 
class CommentController extends controller{

	public function addComment()
	{
		$categoryid=$_GET['categoryid'];
		
		$comment=new Model();
		$sql="insert into comment(content,articleid,userid,ctime)
		values
		(:content,:articleid,:userid,:ctime)";
		
		$res=$comment->add($sql,
			array(
				':content'=>$_POST['content'],
				':articleid'=>$_POST['articleid'],
				':userid'=>$_SESSION['userid'],
				':ctime'=>time()

				)
			);
		if($res){
			$this->jump('添加成功','index.php?c=Article&articleid='.$_POST['articleid'].'&categoryid='.$categoryid);
		}else{

			 $this->jump('发布失败','index.php?c=Article&articleid='.$_POST['articleid'].'&categoryid='.$categoryid);

		}
	}
	public function huifu(){
		$categoryid=$_GET['categoryid'];
		$comment=new Model();
		$content=$_POST['content'];
		$articleid=$_GET['articleid'];
		$userid=$_GET['userid'];
		$ctime=time();
		$parentid=$_GET['commentid'];
		$sql="insert into comment(content,articleid,userid,ctime,parentid)
		values
		('$content','$articleid','$userid','$ctime','$parentid')";

		$res=$comment->add($sql);
		if($res){
			$this->jump('回复成功','index.php?c=Article&articleid='.$_GET['articleid'].'&categoryid='.$categoryid);
		}else{

			 $this->jump('回复失败','index.php?c=Article&articleid='.$_GET['articleid'].'&categoryid='.$categoryid);

		}
	}
} 

 ?>