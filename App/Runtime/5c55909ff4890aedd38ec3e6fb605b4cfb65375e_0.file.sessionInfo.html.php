<?php
/* Smarty version 3.1.30, created on 2017-02-28 21:27:50
  from "D:\blog\App\admin\View\public\sessionInfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b57ad6ced458_22463160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c55909ff4890aedd38ec3e6fb605b4cfb65375e' => 
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
function content_58b57ad6ced458_22463160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="top-info-list clearfix">
                <li><a href=""><?php echo $_SESSION['adminname'];?>
</a></li>
                <li><a href="?p=back&c=Index&a=ChangePswd">修改密码</a></li>
                <li><a href="index.php?a=logout">退出</a></li>
            </ul><?php }
}
