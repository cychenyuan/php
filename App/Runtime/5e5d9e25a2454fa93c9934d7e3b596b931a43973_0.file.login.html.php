<?php
/* Smarty version 3.1.30, created on 2017-03-03 11:12:32
  from "D:\blog\App\Home\View\Login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b8df202f19f3_95826676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e5d9e25a2454fa93c9934d7e3b596b931a43973' => 
    array (
      0 => 'D:\\blog\\App\\Home\\View\\Login\\login.html',
      1 => 1488509158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_58b8df202f19f3_95826676 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
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
    <style>
        #login{
            background: none;
            width:100%;
        }
        table{
            width:600px;
            margin:0 auto;
        }
        td{
            font-family: 微软雅黑;
            font-size: 16px;
            border-bottom: solid 1px #8e8d8d;
            padding:5px 10px;
        }
        input[type=text], input[type=password]{
            background-color: #ffffff;
            border: 1px solid #cccccc;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
            border-radius: 5px;
            height: 23px;
            line-height: 23px;
            padding: 2px 4px;
            width:250px;
        }
        input[type=submit]{
            background-color: #006dcc;
            background-image: linear-gradient(to bottom, #0088cc, #0044cc);
            background-repeat: repeat-x;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #f5f5f5;
            background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
            background-repeat: repeat-x;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #a2a2a2;
            border-image: none;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
            color: #333333;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 0;
            padding: 4px 12px;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
        }
        #yzm{
            width:50px;
            float:left;
            margin-right:10px;
        }
    </style>
</head>
<body>
<div class="ibody">
      <?php $_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <article id="login">
        <h2 class="c_titile">用户登录</h2>

        <form action="?c=Login&a=loginHandle" method="post">
            <table>
                <tr>
                    <td align="right" width="180">用户名</td>
                    <td><input type="text" name="name" placeholder="用户名/手机号/邮箱"></td>
                </tr>
                <tr>
                    <td align="right">密码</td>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <td align="right">验证码</td>
                    <td>
                        <input type="text" name="yzm" id="yzm">
                        <img src="?c=Public&a=verify" width="80" height="30" onclick="this.src='?c=Public&a=verify&t='+Math.random()">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="登录">
                    </td>
                </tr>
            </table>
        </form>
    </article>

    <?php echo '<script'; ?>
 src="<?php echo __PUBLIC__;?>
Home/js/silder.js"><?php echo '</script'; ?>
>

    <!-- 清除浮动 -->
</div>
</body>
</html>
<?php }
}
