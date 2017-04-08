<?php
/* Smarty version 3.1.30, created on 2017-03-01 14:54:14
  from "D:\blog\App\admin\View\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b670161fb6e0_57176719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ff8fdcf96fbbad82424b457222de3b6840b5bc' => 
    array (
      0 => 'D:\\blog\\App\\admin\\View\\Article\\index.html',
      1 => 1488351151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/sessionInfo.html' => 1,
    'file:../public/left.html' => 1,
  ),
),false)) {
function content_58b670161fb6e0_57176719 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="<?php echo __PUBLIC__;?>
Admin/js/jquery.js"><?php echo '</script'; ?>
>
            

    <?php echo '<script'; ?>
 >
    $(function(){
        $('.fanxuan').click(function(){
            $("input[type='checkbox']").prop("checked", function (i,val){
                return !val;
            });
        });
        $('.quxiao').click(function(){
            $("input[type='checkbox']").prop("checked", function(i, val){
                return false;
            });
        });
        $('.quanxuan').click(function(){
            $("input[type='checkbox']").prop("checked", function(i,val){
                return true;
            });
        });
        $('#batchDel').click(function(){
            $('#myform').submit();
        });
    });


        $(function(){
            $("#nowtime").css({color:'red'});
            window.setInterval('ShowTime()',1000);
        });
        function ShowTime(){
            var t = new Date();
            var str = t.getFullYear() + '年';
            str += t.getMonth() + '月';
            str += t.getDate() + '日 ';
            str += t.getHours() + ':';
            str += t.getMinutes() + ':';
            str += t.getSeconds() + '';
            $("#nowtime").html(str);
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
           <!-- 导航栏 -->
         <?php $_smarty_tpl->_subTemplateRender("file:../public/sessionInfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <span class="crumb-name">分类管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            
                <div class="result-title">
                    <div class="result-list">
                        <a href="?m=admin&c=article&a=add&categoryid=<?php echo $_GET['categoryid'];?>
"><i class="icon-font"></i>添加文章</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <span style="cursor:pointer;" class="quanxuan">全选</span>
                        <span style="cursor:pointer;" class="quxiao">取消</span>
                        <span style="cursor:pointer;" class="fanxuan">反选</span>
                    </div>
                </div>
                <div class="result-content">
                <form name="myform" id="myform" method="post" action="?m=admin&c=article&a=delAll">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input class="allChoose" name="" type="checkbox">
                            </th>
                            <th>标题</th>
                            <th>所属分类</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>点击数</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                                <tr>
                            <td class="tc">
                                <input name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
" type="checkbox">
                            </td>
                            <td ><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['author'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['ptime'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['hits'];?>
</td>
                            <td>
                                <a class="link-update" href="?m=admin&c=article&a=update&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
&<?php ob_start();
echo $_GET['categoryid'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 0) {?> categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
 <?php } else { ?> categoryid=<?php echo $_GET['categoryid'];?>
 <?php }?>">修改</a>
                                <a class="link-del" href="?m=admin&c=article&a=del&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
&categoryid=<?php echo $_GET['categoryid'];?>
">删除</a>
                            </td>
                        </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
             
                                            </table>
                       <input type="hidden" name="categoryid" value="<?php echo $_GET['categoryid'];?>
">

                                            </form>
                    <div class="list-page"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</div>
                </div>
                <input type="hidden" name="categoryid" value="<?php echo $_GET['categoryid'];?>
">
            
        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
