<?php /* Smarty version Smarty-3.1.13, created on 2017-05-30 22:49:46
         compiled from "E:\InstalledApp\wamp\www\project1240\backend\protected\views\layout.html" */ ?>
<?php /*%%SmartyHeaderCode:20043592d868a0396a2-67997581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f3f8816eb0ac86bbb0b4103ee4705bba685f2f' => 
    array (
      0 => 'E:\\InstalledApp\\wamp\\www\\project1240\\backend\\protected\\views\\layout.html',
      1 => 1496149502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20043592d868a0396a2-67997581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__template_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_592d868a06c326_26412553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592d868a06c326_26412553')) {function content_592d868a06c326_26412553($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>后台</title>
<script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<!-- <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
           
        </div>
    </div>
</div> -->
    <div class="container-fluid">
        <br>
        <div class="row-fluid well">
            <h1 align="center">风杖网络管理后台</h1>
        </div>
        <div class="row-fluid">
            <ul class="col-xs-2 nav nav-pills nav-stacked">
                  <li role="presentation" class="active"><a href="#">访问日志</a></li>
                  <li role="presentation"><a href="#">审计日志</a></li>
                  <li role="presentation"><a href="#">修改密码</a></li>
            </ul>
            <div class="col-xs-10">
                <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['__template_file']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
    </div>
</body>
</html><?php }} ?>