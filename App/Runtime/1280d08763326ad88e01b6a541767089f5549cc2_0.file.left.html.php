<?php
/* Smarty version 3.1.30, created on 2017-03-08 15:41:38
  from "D:\blog\App\admin\View\public\left.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfb5b2a75950_31902795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1280d08763326ad88e01b6a541767089f5549cc2' => 
    array (
      0 => 'D:\\blog\\App\\admin\\View\\public\\left.html',
      1 => 1488956631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfb5b2a75950_31902795 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--左侧菜单栏 begin-->
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        
                        <li><a href="?m=admin&c=Article&a=index&categoryid=0"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="?m=admin&c=category&a=index"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="?m=admin&c=comment&a=index"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="#"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--左侧菜单栏 begin--><?php }
}
