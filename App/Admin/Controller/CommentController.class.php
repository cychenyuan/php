<?php 
class CommentController extends CommonController{

	public function index(){
		$model=new Model();
		$sql_count="select count(*) from comment";
		$count=$model->count($sql_count);
		
		$config=array(
			'theme'=>array('prev','num','next'),
			);
		$page=new Page($count,2,$config);
		$show=$page->show();


		$sql="select * from comment limit $page->start,$page->length";
		$data=$model->select($sql);

		$arr['show']=$show;
		$arr['data']=$data;
		
		
		$this->smarty->assign('data',$arr['data']);
		$this->smarty->assign('show',$arr['show']);

		$this->smarty->display('index.html');
	}

	public function del(){
		$id=$_GET['id'];
		$model=new Model();
		$sql="delete from comment where id = $id";

		if($model->delete($sql))
		{
			$this->jump('删除成功','index.php?m=admin&c=comment&a=index');
		}else{
			$this->jump('删除失败','index.php?m=admin&c=comment&a=index');

		}
	}

}



 ?>