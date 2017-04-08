<?php 
class ArticleController extends Controller{

	public function index(){
		$articleid=$_GET['articleid'];
		$categoryid=$_GET['categoryid'];
		$art=new ArticleModel();
		$row=$art->getArtByArticleid($articleid);
		
		$this->smarty->assign('row',$row);


		//评论
		$model=new Model();
		$sql="select  c.face,c.username,a.content,a.ctime,a.id,a.userid,a.articleid,a.parentid from comment a join user c on a.userid=c.id where articleid=$articleid";
		$pinglun=$model->select($sql);

		$paixipinglun=$art->getPingLun($pinglun);


		$row=$art->getPostionInfo($categoryid);
		//设置一个空数组
		static $postion=array();

		//获取数组的长度，不能直接在for循环里面使用count()因为array_pop截取会导致数组的数量减少
		$len=count($row);

		for($i=0; $i<$len; $i++) { 

			//因为最大的父类在数组的后面要把它提出存到另一个数组里，然后在index.html遍历出来
			$postion[]=array_pop($row);
		}

		//上一篇 下一篇
		$sql="select a.articleid,a.title,b.categoryid from article a inner join category b on a.cid=b.categoryid where a.articleid<$articleid order by a.articleid desc limit 1";
		$up=$model->find($sql);

		$sql="select a.articleid,a.title,b.categoryid from article a inner join category b on a.cid=b.categoryid where a.articleid>$articleid limit 1";
		$next=$model->find($sql);
		//获取子类
		$child=$art->getChildClass($categoryid);
		//获取点击量
		$hits=$art->getMaxHits($categoryid);
		//获取推荐栏目
		$hotClass=$art->getHotClass();
		//获取最新评论
		$newPinglun=$art->getNewPinglun();
		$this->smarty->assign('newPinglun',$newPinglun);
		$this->smarty->assign('hotClass',$hotClass);
		$this->smarty->assign('hits',$hits);
		$this->smarty->assign('child',$child);
		$this->smarty->assign('up',$up);
		$this->smarty->assign('next',$next);
		$this->smarty->assign('postion',$postion);
		$this->smarty->assign('pinglun',$paixipinglun);
		$this->smarty->display('index.html');



	}
}

 ?>