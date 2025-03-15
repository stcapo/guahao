<?php /* Smarty version Smarty-3.1.8, created on 2025-03-13 23:19:53
         compiled from "tpl/default\roomSelect.htm" */ ?>
<?php /*%%SmartyHeaderCode:3206167d2f79952a503-05598454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '056bf1addf233d3bb7d1a8868756b2832e65cc52' => 
    array (
      0 => 'tpl/default\\roomSelect.htm',
      1 => 1340697348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3206167d2f79952a503-05598454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'room' => 0,
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_67d2f79954ea13_96899586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67d2f79954ea13_96899586')) {function content_67d2f79954ea13_96899586($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="roomList">
  <h2>在线挂号 - <?php echo $_smarty_tpl->tpl_vars['room']->value['name'];?>
</h2>
  <div class="schedule">
    <?php echo $_smarty_tpl->tpl_vars['table']->value;?>

  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/user.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>