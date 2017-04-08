<?php 
class ArticleController extends CommonController{
	public function index()
	{
		if(isset($_GET['categoryid']) && $_GET['categoryid']!=0)
		{
			$where="where cid=".$_GET['categoryid'];
		}else{
			$where='';
		}
		$art=new ArticleModel();
		$arr=$art->getArticles($where);
		$this->smarty->assign('data',$arr['data']);
		$this->smarty->assign('show',$arr['show']);
		$this->smarty->display('index.html');
	}

	public function add(){
		$category=new CategoryModel();
		$cate=$category->getAllCates();
		$cate=$category->sortCate($cate);
		$this->smarty->assign('cate',$cate);
		$this->smarty->display('add.html');
	}
	public function addHandle(){
		$arr=$_POST;
		$arr['ctime']=time();
		$arr['utime']=time();
		$arr['pic']='';
		if($_FILES['myfile']['name']){
			$upload=new Upload();
			$file = $upload->up();
			$arr['pic']=$file;
		}


		$art=new ArticleModel();
		// $art->insert($arr);

		if($art->insert($arr))
		{
			$this->jump('添加成功','?m=admin&c=article&a=index&categoryid='.$_POST['cid']);
		}else{

			$this->jump('添加失败','?m=admin&c=article&a=add&categoryid='.$_POST['cid']);
		}

	}
	public function del(){
		$articleid=$_GET['articleid'];
		$categoryid=$_GET['categoryid'];
		$art=new ArticleModel();
		$res=$art->delArt($articleid);
		if($res)
		{
			$this->jump('删除成功','?m=admin&c=article&a=index&categoryid='.$categoryid);
		}else{
			$this->jump('删除成功','?m=admin&c=article&a=index&categoryid='.$categoryid);

		}
	}
	public function update(){
		$articleid=$_GET['articleid'];
		$categoryid=$_GET['categoryid'];

		$category=new CategoryModel();
		$cate=$category->getAllCates();
		$cate=$category->sortCate($cate);
		$this->smarty->assign('cate',$cate);

		$article=new ArticleModel();
		$row=$article->updateOne($articleid);

		$this->smarty->assign('row',$row);

		$this->smarty->display('update.html');
	}
	public function updateHandle(){
		
		
		$categoryid=$_GET['categoryid'];
		$art=new ArticleModel();
		

		if($art->updateSave())
			{

			$this->jump('修改成功','?m=admin&c=article&a=index&categoryid='.$categoryid);
		}else{
			$this->jump('修改失败','?m=admin&c=article&a=index&categoryid='.$categoryid);

		}
	}
	public function delAll(){
		$cid=$_POST['categoryid'];

		$art=new ArticleModel();
		if($art->del($cid))
		{

			$this->jump('删除成功','?m=admin&c=category&a=index');
		}else{
			$this->jump('删除失败','?m=admin&c=article&a=index&categoryid='.$cid);

		}

	}
}

 ?>