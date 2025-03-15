<?php /* Smarty version Smarty-3.1.8, created on 2025-03-13 23:19:44
         compiled from "tpl/default\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:776367d2f790ed7514-13560809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10ec5f4a35c363c3daa1c0ad322b88cce66459a5' => 
    array (
      0 => 'tpl/default\\footer.htm',
      1 => 1340601842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '776367d2f790ed7514-13560809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_67d2f790edaea8_46883795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67d2f790edaea8_46883795')) {function content_67d2f790edaea8_46883795($_smarty_tpl) {?><div class="cl"></div>
</div>
<div id="footer">
  <div class="box">
    <p class="botNav">咨询电话：<?php echo $_smarty_tpl->tpl_vars['cfg']->value['serviceTel'];?>
，医院地址：<?php echo $_smarty_tpl->tpl_vars['cfg']->value['serviceAdd'];?>
。</p>
  </div>
</div>
</body>
</html>
<?php }} ?>