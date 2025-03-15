<?php /* Smarty version Smarty-3.1.8, created on 2025-03-13 23:19:50
         compiled from "tpl/default\roomView.htm" */ ?>
<?php /*%%SmartyHeaderCode:2501567d2f796c95fd6-58429524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50987575d9edab1192fc01c1b80aa7c250e36cf6' => 
    array (
      0 => 'tpl/default\\roomView.htm',
      1 => 1340702044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501567d2f796c95fd6-58429524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'room' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_67d2f796cbdb82_69552066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67d2f796cbdb82_69552066')) {function content_67d2f796cbdb82_69552066($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="roomList">
  <h2>科室简介：<?php echo $_smarty_tpl->tpl_vars['room']->value['name'];?>
</h2>
  <p class="intro">
  <?php echo $_smarty_tpl->tpl_vars['room']->value['intro'];?>

  </p>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/user.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>