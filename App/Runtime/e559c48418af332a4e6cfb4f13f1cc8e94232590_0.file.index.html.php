<?php
/* Smarty version 3.1.30, created on 2017-03-08 11:48:16
  from "D:\blog\App\Home\View\List\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bf7f00a147a4_86214492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e559c48418af332a4e6cfb4f13f1cc8e94232590' => 
    array (
      0 => 'D:\\blog\\App\\Home\\View\\List\\index.html',
      1 => 1488944890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_58bf7f00a147a4_86214492 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\blog\\Frame\\Smarty\\plugins\\modifier.date_format.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="<?php echo __PUBLIC__;?>
Home/css/base.css" rel="stylesheet">
<link href="<?php echo __PUBLIC__;?>
Home/css/style.css" rel="stylesheet">
<link href="<?php echo __PUBLIC__;?>
Home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo __PUBLIC__;?>
Home/js/modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
  <?php $_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['postion']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    >
    <a href="index.php?c=List&categoryid=<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
&type=<?php if ($_smarty_tpl->tpl_vars['value']->value['parent_id'] == 0) {?>da<?php } else { ?>xiao<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</h2>
    
    <div class="bloglist">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
      <div class="newblog">
        <ul>
          <h3><a href="index.php?c=Article&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
&categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></h3>
          <div class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['val']->value['author'];?>
</span><span>分类：[<a href="index.php?c=List&categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
&type=xiao"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a>]</span><span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['val']->value['hits'];?>
</a>）</span><span>评论（<a href="/">30</a>）</span></div>
          <p><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
 <a href="index.php?c=Article&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
" target="" class="readmore">全文</a></p>
        </ul>
        <figure><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
" ></figure>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['val']->value['ptime'];?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="page"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</div>
  </article>
  <aside>
    <div class="rnav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
      <li class="rnav<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
"><a href="index.php?c=List&categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
&type=xiao"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <!-- <li class="rnav2 "><a href="/">欣赏</a></li>
      <li class="rnav3 "><a href="/">程序人生</a></li>
      <li class="rnav4 "><a href="/">经典语录</a></li> -->
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hits']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <li><span <?php if ($_smarty_tpl->tpl_vars['key']->value+1 < 4) {?>class="num<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span><a href="index.php?c=Article&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
&categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <!-- <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
        <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
        <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li> -->
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotClass']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <li><a href="index.php?c=List&categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
&type=<?php if ($_smarty_tpl->tpl_vars['val']->value['parent_id'] == 0) {?>da<?php } else { ?>xiao<?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <!-- <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="/">女生清新个人博客网站模板</a></li>
        <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/">时间煮雨-个人网站模板</a></li>
        <li><a href="/">花气袭人是酒香—个人网站模板</a></li> -->
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pinglun']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
"> </dt>
          <dt> </dt>
          <dd><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>

            <time><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['ctime'],"%Y-%m-%d");?>
</time>
          </dd>
          <dd><a href="index.php?c=Article&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
&categoryid=<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</a></dd>
        </dl>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="<?php echo __PUBLIC__;?>
Home/images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <?php echo '<script'; ?>
 src="<?php echo __PUBLIC__;?>
Home/js/silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}
