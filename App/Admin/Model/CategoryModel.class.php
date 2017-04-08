<?php 
class CategoryModel extends Model{
	public function getAllCates()
    {
        $sql="select * from category";
        return $this->select($sql);

    }
    public function sortCate($data,$parent_id=0,$lev=0)
    {
        static $arr=array();
        foreach($data as $key=>$value){
            if($value['parent_id']==$parent_id)
            {
                $value['lev']=$lev;
                $arr[]=$value;
                $this->sortCate($data,$value['categoryid'],$lev+1);
            }

        }
        return $arr;
    }
    public function tianJia(){
        $sql="insert into category(name,parent_id)values(:name,:parent_id)";
        $params=array();
        foreach($_POST as $key=>$value){
            $params[':'.$key]=$value;
        }
        return $this->add($sql,$params);
    }
    public function getOne(){
        $id=$_GET['id'];

        $sql="select * from Category where categoryid='$id'";
        return $this->find($sql);
    }
    public function updateSave(){
        $id=$_GET['id'];

        $sql="update category set name=:name,parent_id=:parent_id where categoryid=$id";
        $params=array();
        foreach($_POST as $key=>$value){
            $params[':'.$key]=$value;
        }
        
        return $this->save($sql,$params);
    }
    public function delHandle($id)
    {
        
        $sql="select categoryid from category where parent_id = $id";

        $arr=$this->select($sql);

        foreach($arr as $key=>$value){
            if($value['categoryid']){
                $categoryid=$value['categoryid'];
                $this->delHandle($categoryid);
            }
        }
        

        $sql="delete from category where categoryid=$id";

        return $this->delete($sql);
    }
}

 ?>