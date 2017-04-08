<?php 
class CategoryController extends CommonController{
	public function index(){
		$category=new CategoryModel();
		$data=$category->getAllCates();
		$data=$category->sortCate($data);
		$this->smarty->assign('data',$data);
		$this->smarty->display('index.html');
	}
	public function add(){
		$category=new CategoryModel();
		$data=$category->getAllCates();
		$data=$category->sortCate($data);
		$this->smarty->assign('data',$data);

		$this->smarty->display('add.html');
	}
	public function insert(){
		$category=new CategoryModel();
		if($category->tianJia()){
			$this->jump('添加成功','?c=category&a=index');
		}else{
			$this->jump('添加失败','?a=add');
		}
		

	}
	public function update(){
		$category=new CategoryModel();
		$data=$category->getAllCates();
		$data=$category->sortCate($data);
		$this->smarty->assign('data',$data);
		
		

		
		$row=$category->getOne();

		$this->smarty->assign('row',$row);
		$this->smarty->display('update.html');

	}
	public function updateHandle()
	{
		$category=new CategoryModel();
		if($category->updateSave()){
			$this->jump('修改成功','?c=category&a=index');
		}else{
			$this->jump('修改失败','?c=category&a=update');
		}
	}
	public function del()
	{	$id=$_GET['id'];
	
		$category=new CategoryModel();
		if($category->delHandle($id)){
			$this->jump('删除成功','?c=category&a=index');
		}else{
			$this->jump('删除失败','?c=category&a=index');
		}
	}

}
 ?>
