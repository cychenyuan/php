<?php 
class ListController extends Controller{
	public function index(){
		$categoryid=$_GET['categoryid'];
		$type=$_GET['type'];
		$art=new ArticleModel();
		$arr=$art->getArtsByCategoryId($categoryid,$type);


		
		//获取现在的位置
		$row=$art->getPostionInfo($categoryid);
		//设置一个空数组
		static $postion=array();

		//获取数组的长度，不能直接在for循环里面使用count()因为array_pop截取会导致数组的数量减少
		$len=count($row);

		for($i=0; $i<$len; $i++) { 

			//因为最大的父类在数组的后面要把它提出存到另一个数组里，然后在index.html遍历出来
			$postion[]=array_pop($row);
		}


		//获取子类
		$child=$art->getChildClass($categoryid);
		//获取点击量
		$hits=$art->getMaxHits($categoryid);
		//获取推荐栏目
		$hotClass=$art->getHotClass();
		//获取最新评论
		$pinglun=$art->getNewPinglun();
		
		$this->smarty->assign('pinglun',$pinglun);

		$this->smarty->assign('hotClass',$hotClass);

		$this->smarty->assign('hits',$hits);
		$this->smarty->assign('child',$child);
		$this->smarty->assign('postion',$postion);
		$this->smarty->assign('data',$arr['data']);
		$this->smarty->assign('show',$arr['show']);
		$this->smarty->display('index.html');



		
	}
	
}

 ?>