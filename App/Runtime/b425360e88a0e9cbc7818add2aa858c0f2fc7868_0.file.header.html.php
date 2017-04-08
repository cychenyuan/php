<?php
/* Smarty version 3.1.30, created on 2017-03-11 17:20:43
  from "D:\blog\App\Home\View\Public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c3c16bb24da0_42243404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b425360e88a0e9cbc7818add2aa858c0f2fc7868' => 
    array (
      0 => 'D:\\blog\\App\\Home\\View\\Public\\header.html',
      1 => 1489223392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3c16bb24da0_42243404 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <style type="text/css">
	#topnav span{
		float:right;
		color:white;
		padding:0 15px;
		text-align:center;
		background-color:red;
		margin-left:10px;

	}
    #sub{
        float:right;
        color:red;
    }
    

 </style>
 <?php echo '<script'; ?>
 type="text/javascript">
 	window.onload=function()
 	{
 		
 		document.getElementById('log').onclick=function(){
 			// location.href='index.php?c=Login&a=login';
            var sub= document.getElementById("sub").style="display:block";

        
 		}
 		document.getElementById('reg').onclick=function(){
 			location.href='index.php?c=Login&a=register';
 		}
        document.getElementById('out').onclick=function(){
            location.href='index.php?c=Login&a=logout';
        }
        document.login.onsubmit=function(){
            var uname=this.username.value;
            var password=this.password.value;
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange=function(){
                if(this.readyState==this.DONE && this.statusText=="OK"){
                    document.getElementById("preview").innerHTML=this.responseText;
                    location.href="http://www.blog.com";
                }
            }
            xhr.open("post","index.php?c=Login&a=loginHandle",true);
            xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
            xhr.send("name="+uname+"&pwd="+password);
            return false;
        }
 	}
 <?php echo '</script'; ?>
>

 <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav">
    <a href="/">首页</a>
    <a href="index.php?c=List&categoryid=1&type=da">关于我</a>
    <a href="index.php?c=List&categoryid=2&type=da">慢生活</a>
    <a href="index.php?c=List&categoryid=3&type=da">学无止境</a>
    <a href="new.html">模板主题</a>
    
    <span id="out" href="#"  <?php if (isset($_SESSION['uname'])) {?>style="display:block"<?php } else { ?>style="display:none"<?php }?>>退出</span>
    <span <?php if (isset($_SESSION['uname'])) {?>style="display:block"<?php } else { ?>style="display:none"<?php }?>><?php echo $_SESSION['uname'];?>
</span>
    <span id="reg" <?php if (isset($_SESSION['uname'])) {?>style="display:none"<?php } else { ?>style="display:block"<?php }?>>注册</span>
    <span id="log" <?php if (isset($_SESSION['uname'])) {?>style="display:none"<?php } else { ?>style="display:block"<?php }?>>登录</span>
    
    </nav>
    <div id="sub"  style="display:none">
    <div>
        <form name="login" method="post" action="">
        用户名:<input type="text" name="username"><br>
        密码：<input type="password" name="password"><br>
        <input type="submit" name="submit" value="登录">
        </form>
    </div>
    <div id="preview"></div>
    </div>
  </header><?php }
}
