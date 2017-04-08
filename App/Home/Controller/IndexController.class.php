<?php 
class IndexController extends Controller{
	public function index(){
		$art=new ArticleModel();
		$data=$art->getFiveArtsByHits();
		$hits=$art->getMaxHits();

		$newArticle=$art->getNewArticle();
		$this->smarty->assign('newArticle',$newArticle);
		$this->smarty->assign('hits',$hits);
		
		$this->smarty->assign('data',$data);
		$this->smarty->display('index.html');
	}
}


 ?>