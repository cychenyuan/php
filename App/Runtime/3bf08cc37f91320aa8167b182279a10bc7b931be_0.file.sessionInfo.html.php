<?php
/* Smarty version 3.1.30, created on 2017-03-08 15:06:42
  from "D:\blog\App\admin\View\public\sessionInfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfad824b0a78_30816212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf08cc37f91320aa8167b182279a10bc7b931be' => 
    array (
      0 => 'D:\\blog\\App\\admin\\View\\public\\sessionInfo.html',
      1 => 1488288175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfad824b0a78_30816212 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="top-info-list clearfix">
                <li><a href=""><?php echo $_SESSION['adminname'];?>
</a></li>
                <li><a href="?p=back&c=Index&a=ChangePswd">修改密码</a></li>
                <li><a href="index.php?a=logout">退出</a></li>
            </ul><?php }
}
