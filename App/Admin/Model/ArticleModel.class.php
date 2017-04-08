<?php 
class ArticleModel extends Model{
	public function getArticles($where)
	{
		$sql_count="select count(*) from article $where";
		$count=$this->count($sql_count);
		$config=array(
			'theme'=>array('prev','num','next'),
			);
		$page=new Page($count,5,$config);
		$show=$page->show();
		$sql="select a.articleid,a.title,c.name,a.author,a.ptime,a.hits,a.cid from article as a join category as c on a.cid=c.categoryid ". $where ." limit $page->start,$page->length";
		$data=$this->select($sql);
		$arr['show']=$show;
		$arr['data']=$data;
		return $arr;
	
	}
	public function insert($arr){
		$sql = "insert into article(title,content,ptime,ctime,utime,author,keywords,hits,description,alias,cid,pic)
		values(:title,:content,:ptime,:ctime,:utime,:author,:keywords,:hits,:description,:alias,:cid,:pic)";
		
		$params=array();
		foreach($arr as $key=>$val){
			$params[':'.$key]=$val;

		}
		return $this->add($sql,$params);
	}
	public function delArt($articleid){
		$sql="delete from article where articleid=$articleid";
		return $this->delete($sql);
	}
	public function updateOne($articleid){
		$sql="select * from article where articleid=$articleid";
		return $this->find($sql);
	}
	public function updateSave()
	{
		
	$sql="update article set cid=:cid,title=:title,ptime=:ptime,author=:author,keywords=:keywords,alias=:alias,hits=:hits,description=:description,content=:content where articleid=:articleid";

	$params=array();
	
	
	foreach($_POST as $key=>$value){
		$params[':'.$key]=$value;
	}	

	return $this->save($sql,$params);
	}
	public function del($cid)
	{
		$sql="delete from article where articleid=$cid";
		return $this->delete($sql);

	}
}

 ?>