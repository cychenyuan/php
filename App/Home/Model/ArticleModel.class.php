<?php 
class ArticleModel extends Model{
	public function getFiveArtsByHits(){
		// $sql ="select * from article order by hits desc limit 0,5";
		$sql="select a.articleid,a.title,a.description,a.pic,a.ptime,a.hits,a.author,c.categoryid,c.name from article a join category c on a.cid=c.categoryid order by a.hits desc limit 5";
		
		return $this->select($sql);
	}
	public function getArtByArticleid($articleid){
		$sql="select a.articleid,a.title,a.content,a.ptime,a.hits,c.categoryid,c.name from article a join category c on a.cid=c.categoryid where a.articleid=$articleid";
		return $this->find($sql);
	}
	public function getArtsByCategoryId($categoryid,$type){
		$config=array(
			'first' =>'<<',
			'prev' => '<',
			'next' =>'>',
			'last' =>'>>',
			'current_tag' =>'b',
			'theme' => array('first','prev','num','next','last')
			);
		if($type=='da'){
			$sql_count="select count(*) from article where cid in(select categoryid from category where parent_id=$categoryid)";
			$count = $this->count($sql_count);
					
			$page=new Page($count, 10,$config);
			$sql="select * from article a join category c on a.cid=c.categoryid where cid in(select categoryid from category where parent_id=$categoryid) limit $page->start,$page->length";
		}else{
			$sql_count = "select count(*) from article where cid=$categoryid";
			$count=$this->count($sql_count);
			$page=new Page($count,10,$config);

			$sql="select * from article a join category c on a.cid=c.categoryid where cid=$categoryid limit $page->start,$page->length";
			}
			$show=$page->show();
			$arr['data']=$this->select($sql);
			$arr['show']=$show;
			return $arr;
			
	}
	public function getPostionInfo($categoryid){
		static $arr=array();
		/*$sql="select name,categoryid from category where categoryid =(select parent_id from category where categoryid = $categoryid)";
		$row=$this->find($sql);*/
		//根据categoryid查询一条类数据
		$sql="select categoryid,name,parent_id from category where categoryid=$categoryid";
		
		$row=$this->find($sql);
		

		if($row)
		{	
			//把数据存到数组arr是二维的数组
			$arr[]=$row;
			//递归调用查询所有的父类
			$this->getPostionInfo($row['parent_id']);
		}

			//返回一个二维数组
			return $arr;

	}

	//获取子类
	public function getChildClass($categoryid)
	{
		$sql="select * from category where parent_id=$categoryid";

		return $this->select($sql);
	}

	//获取最大点击量
	public function getMaxHits(){
		$sql="select a.articleid,a.title,b.categoryid from article a join category b on a.cid=b.categoryid order by a.hits desc limit 9";
		return $this->select($sql);
	}

	//获取最火栏目
	public function getHotClass()
	{
		$sql="select a.name,a.categoryid,a.parent_id from category a right join (select cid,count(*) from article group by cid order by count(*) desc) c on a.categoryid=c.cid limit 9";
		
		return $this->select($sql);

	}
	//最新评论
	public function getNewPinglun(){
		$sql="select a.id,a.content,a.ctime,b.username,b.face,c.articleid,c.cid from comment a, user b, article c where a.userid=b.id and a.articleid=c.articleid order by a.ctime desc limit 5";
		return $this->select($sql);

	}
	//最新文章
	
	public function getNewArticle(){
		$sql="select a.articleid,a.title,b.categoryid from article a join category b on a.cid=b.categoryid order by a.ctime desc limit 8";
		return $this->select($sql);
	}

	public function getPingLun($data,$parentid=0,$len=0)
	{
		static $arr=array();
		foreach($data as $key=>$value){
			if($value['parentid']==$parentid)
			{
				$value['lev']=$len;
				$arr[]=$value;
				$this->getPingLun($data,$value['id'],$len+1);
			}
		}
		return $arr;
	}
}
 ?>