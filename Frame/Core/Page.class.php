<?php 
class Page{
	public $nowPage=1;
	public $start=0; //用于查询的sql语句，表示limit开始的位置
	public $length=5;  //用于查询你的sql语句，表示limit的截取的长度
	public $count;  //表示总记录数
	public $config=array(
		'first'=>'首页',
		'prev'=>'上一页',
		'next'=>'下一页',
		'last'=>'首页',
		'current_tag'=>'a',
		'theme'=>array('first','prev','num','next','last','jump'),
		);
	//构造方法
	//作用是处理分页类中所需的变量

	public function __construct($count,$length=5,$config=array()){
		//当前的页码，当前位第几页
		$this->nowPage=isset($_GET['p'])? $_GET['p']:1;
		$this->length=$length;  //先获得length,然后在计算start。
		$this->start=($this->nowPage-1)*$this->length; //根据当前页和显示的长度取得起始的位置
		$this->count=$count;  //得到总的分页数
		$this->config=array_merge($this->config,$config); //根据需求覆盖掉原来的属性

	}
	public function show(){
		$str='';  //用来保存分页样式
			
			//获取地址栏已有的参数，处理成一个字符串
			//判断P是否是$_GET的键值
		if(array_key_exists('p',$_GET)){
			unset($_GET['p']);
		}
		$params='';
		$formStr='';
		//根据要跳转的需求把$_GET中的值处理成字符串
		foreach($_GET as $k=>$v)
		{
			$params .= "$k=$v&";
			$formStr .="<input type='hidden' name='$k' value='$v' />";
		}

		//首页  第一页  加个判断如果$this->nowPage大于1的时候就给$first，$prev赋值
		if($this->nowPage>1){
			$first= "<a href='index.php?{$params}p=1'>{$this->config['first']}</a>";
			$prev="<a href='index.php?{$params}p=".($this->nowPage-1)."'>{$this->config['prev']}</a>";
		}else{
			$first='';
			$prev='';
		}
		//$最大页
		$maxPage=ceil($this->count/$this->length);
		
		//在配置项中有配置网页中显示几个连接
		$link=$GLOBALS['conf']['PAGE_LINK'];

		//循环的起始页
		$s=$this->nowPage - floor($link/2);
		if($this->nowPage<=ceil($link/2)){
			//判断如果页码过小
			$s=1;
			}
		
		if($this->nowPage>($maxPage-floor($link/2))){
			//如果页码过大
			$s=$maxPage - $link +1;
		}	
		if($maxPage < $link){
			//判断总页码没有$link多，只能强制让循环从1循环，$link就等于$maxPage
			$s=1;
			$link=$maxPage;
		}
		$num='';
		for ($i=$s; $i<$s+$link ; $i++) { 
			if($i==$this->nowPage){
			$num.="<{$this->config['current_tag']}>$i</{$this->config['current_tag']}>";
		}else{
			$num.="<a href='index.php?{$params}p=$i'>$i</a>";
		}
		}

		//下一页
		
		if($this->nowPage < $maxPage){
		$next = "<a href='index.php?{$params}p=".($this->nowPage+1)."'>{$this->config['next']}</a>";
		$last = "<a href='index.php?{$params}p={$maxPage}'>{$this->config['last']}</a>";
			}else{
				$next='';
				$last='';
			}

		$jump = <<<ads
<form>
			$formStr
			<input type='text' name='p' size=3 />
			<input type='submit' value='GO' />
</form>";
ads;

		foreach ($this->config['theme'] as $val) {
			$str.=$$val;
		}


		return $str;
	
	}
}
?> 