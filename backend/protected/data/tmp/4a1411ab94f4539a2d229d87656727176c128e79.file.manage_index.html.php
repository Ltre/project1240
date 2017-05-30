<?php /* Smarty version Smarty-3.1.13, created on 2017-05-30 22:51:44
         compiled from "E:\InstalledApp\wamp\www\project1240\backend\protected\views\manage_index.html" */ ?>
<?php /*%%SmartyHeaderCode:24616592d868a074037-56300361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1411ab94f4539a2d229d87656727176c128e79' => 
    array (
      0 => 'E:\\InstalledApp\\wamp\\www\\project1240\\backend\\protected\\views\\manage_index.html',
      1 => 1496155903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24616592d868a074037-56300361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_592d868a0a2e39_23572773',
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592d868a0a2e39_23572773')) {function content_592d868a0a2e39_23572773($_smarty_tpl) {?><div class="row-fluid col-xs-12 well well-sm">
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
    </form>
</div>

<div class="row-fluid">
    <?php if (empty($_smarty_tpl->tpl_vars['list']->value)){?>
        <p align="center">没有记录</p>
    <?php }else{ ?>
        <table class="table table-bordered table-striped">
            <colgroup>
                <col class="col-xs-1">
                <col class="col-xs-7">
            </colgroup>
            <thead>
                <tr>
                    <th id="sb1">流水号</th>
                    <th>IP</th>
                    <th>访问时间</th>
                    <th>URL</th>
                    <th>游客标识</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                    <th scope="row">
                        <code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</code>
                    </th>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['ip'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars(date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['vtime']), ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td style="overflow-x: auto;">http://fdsafdslfjdsiofjfdsa.com/fdsafdsfji.html</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['cookie'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php }?>
</div>

<script>
setInterval(function(){
    $('#sb').css('width', '600px !important');
}, 500);
</script><?php }} ?>