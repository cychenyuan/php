<?php
/* Smarty version 3.1.30, created on 2017-02-26 23:42:06
  from "D:\blog\App\Admin\View\article\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2f74eb71207_81650814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e369a4eac7178e26805961200ab5ce6e93d5542' => 
    array (
      0 => 'D:\\blog\\App\\Admin\\View\\article\\update.html',
      1 => 1488122934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/left.html' => 1,
  ),
),false)) {
function content_58b2f74eb71207_81650814 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>
Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>
Admin/css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __PUBLIC__;?>
Admin/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../../web/home/js/jquery1.42.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        window.onload=function(){
            var ptime=document.getElementById('ptime');
            var d = new Date();
            var year=d.getFullYear();
            var month=d.getMonth()+1;
            month=month<10?'0'+month:month;

            var day=d.getDate();
            day=day<10?'0'+day:day;

            var str=year+'-'+month+'-'+day;

            ptime.value=str;

            var hits=(500-50)*Math.random()+50;
            hits=Math.round(hits);
            document.getElementById('hits').value=hits
        }
    <?php echo '</script'; ?>
>
</head>
<body>


<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    
    <!--左侧菜单栏-->
    
    <!--左侧菜单栏 begin-->
       <?php $_smarty_tpl->_subTemplateRender("file:../public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!--左侧菜单栏 begin-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">添加博文</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?c=article&a=updatehandle&categoryid=<?php echo $_GET['categoryid'];?>
" method="post" id="myform" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>所属分类：</th>
                                <td>
                                   <select name="cid">
                                       <option value="">请选择</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                       <option <?php if ($_smarty_tpl->tpl_vars['val']->value['categoryid'] == $_GET['categoryid']) {?>selected<?php }?> style="padding-left:<?php echo $_smarty_tpl->tpl_vars['val']->value['lev']*15;?>
px;" value='<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
'><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                   </select>
                                       
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" name="title" size="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>发布时间：</th>
                                <td>
                                    <input class="common-text required" id="ptime" name="ptime" size="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ptime'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                    <input class="common-text required" name="author" size="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>关键字：</th>
                                <td>
                                    <input class="common-text required" name="keywords" size="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>别名：</th>
                                <td>
                                    <input class="common-text required" name="alias" size="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['alias'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>点击量：</th>
                                <td>
                                    <input class="common-text required" id="hits" name="hits" size="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>描述：</th>
                                <td>
                                    <textarea name="description" class="common-textarea" cols="100" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <textarea name="content" class="common-textarea" cols="100" rows="20"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="articleid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['articleid'];?>
">
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
