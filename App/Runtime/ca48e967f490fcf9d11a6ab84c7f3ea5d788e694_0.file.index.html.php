<?php
/* Smarty version 3.1.30, created on 2017-03-08 22:28:29
  from "D:\blog\App\Home\View\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0150d9598a2_21318209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca48e967f490fcf9d11a6ab84c7f3ea5d788e694' => 
    array (
      0 => 'D:\\blog\\App\\Home\\View\\Article\\index.html',
      1 => 1488983277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_58c0150d9598a2_21318209 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="stylesheet" href="<?php echo __PUBLIC__;?>
highlight/school_book.css">
<?php echo '<script'; ?>
 src="<?php echo __PUBLIC__;?>
highlight.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>hljs.initHighlightingOnLoad();<?php echo '</script'; ?>
>

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
    <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo $_smarty_tpl->tpl_vars['row']->value['ptime'];?>
</span>
      <span>分类：<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span>
      <span>浏览（<?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
）</span>
      <span>评论览（14）</span></p>
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：黑色,个人博客,时间轴,响应式</p>
      </div>
      <div class="nextinfo">
      <?php if (isset($_smarty_tpl->tpl_vars['up']->value['title'])) {?>
        <p>上一篇：<a href="index.php?c=Article&articleid=<?php echo $_smarty_tpl->tpl_vars['up']->value['articleid'];?>
&categoryid=<?php echo $_smarty_tpl->tpl_vars['up']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['up']->value['title'];?>
</a></p>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['next']->value['title'])) {?>
        <p>下一篇：<a href="index.php?c=Article&articleid=<?php echo $_smarty_tpl->tpl_vars['next']->value['articleid'];?>
&categoryid=<?php echo $_smarty_tpl->tpl_vars['next']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>
</a></p>
        <?php }?>
      
      </div>
      <!--评论 start-->
            <div class="pinglun">
                <h2>精彩评论</h2>
                <ul>

                    <li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pinglun']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                      <div  style="padding-left:<?php echo $_smarty_tpl->tpl_vars['val']->value['lev']*60;?>
px;">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
">
                        <div class="parea">
                            <div class="sender"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</div>
                            <p class="pcontent"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</p>
                            <div>
                                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['ctime'],"%Y-%m-%d");?>
</span>
                            </div>
                        </div>
                      </div>
                        <?php if (isset($_SESSION['uname'])) {?>
                        <div align="right"><a href ="#" onclick="document.form<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
.style='display:block;'">回复</a></div>
                <form name="form<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" style="display:none;" action="?c=Comment&a=huifu&userid=<?php echo $_smarty_tpl->tpl_vars['val']->value['userid'];?>
&commentid=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
&articleid=<?php echo $_smarty_tpl->tpl_vars['val']->value['articleid'];?>
&categoryid=<?php echo $_GET['categoryid'];?>
" method="post">
                    <textarea name="content"></textarea>
                    <input type="submit" value="回复">
                </form>
                <?php } else { ?>
                <p style="color:#02231; font-size:16px; padding:8px;">如果想回复，先<a href="index.php?c=Login&a=login">登录</a>
                <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </li>
                    
                </ul>
                <?php if (isset($_SESSION['uname'])) {?>
                <form name="form" style="display:block" action="?c=Comment&a=addComment&categoryid=<?php echo $_GET['categoryid'];?>
" method="post">
                    <textarea name="content"></textarea>
                    <input type="hidden" name="articleid" value="<?php echo $_GET['articleid'];?>
">
                    <input type="submit" value="发表">
                </form>
                <?php } else { ?>
                <p style="color:#02231; font-size:16px; padding:8px;">如果想评论，先<a href="index.php?c=Login&a=login">登录</a>
                <?php }?>
            </div>
            <!--评论 end-->
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>
          <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>
          <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
          <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
          <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
        </ul>
      </div>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newPinglun']->value, 'val');
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
