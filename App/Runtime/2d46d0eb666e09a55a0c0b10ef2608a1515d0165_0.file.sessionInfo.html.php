<?php
/* Smarty version 3.1.30, created on 2017-02-28 21:27:47
  from "D:\blog\App\admin\View\public\sessionInfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b57ad3ac51c7_76594783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d46d0eb666e09a55a0c0b10ef2608a1515d0165' => 
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
function content_58b57ad3ac51c7_76594783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="top-info-list clearfix">
                <li><a href=""><?php echo $_SESSION['adminname'];?>
</a></li>
                <li><a href="?p=back&c=Index&a=ChangePswd">修改密码</a></li>
                <li><a href="index.php?a=logout">退出</a></li>
            </ul><?php }
}
