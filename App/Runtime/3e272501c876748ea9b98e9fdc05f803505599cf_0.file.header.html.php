<?php
/* Smarty version 3.1.30, created on 2017-03-07 22:06:34
  from "D:\blog\App\Home\View\Public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bebe6abb61c7_70389081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e272501c876748ea9b98e9fdc05f803505599cf' => 
    array (
      0 => 'D:\\blog\\App\\Home\\View\\Public\\header.html',
      1 => 1488894072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bebe6abb61c7_70389081 (Smarty_Internal_Template $_smarty_tpl) {
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

 </style>
 <?php echo '<script'; ?>
 type="text/javascript">
 	window.onload=function()
 	{
 		
 		document.getElementById('log').onclick=function(){
 			location.href='index.php?c=Login&a=login';
 		}
 		document.getElementById('reg').onclick=function(){
 			location.href='index.php?c=Login&a=register';
 		}
        document.getElementById('out').onclick=function(){
            location.href='index.php?c=Login&a=logout';
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
  </header><?php }
}
