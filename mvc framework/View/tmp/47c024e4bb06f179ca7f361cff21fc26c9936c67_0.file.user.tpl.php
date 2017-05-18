<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:01:11
  from "/home/u956036775/public_html/netarticles/View/view/panel/user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c1157382958_32882617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c024e4bb06f179ca7f361cff21fc26c9936c67' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/panel/user.tpl',
      1 => 1494793691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c1157382958_32882617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/user">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nick'];?>
"  name="oldName" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nick'];?>
"  name="newName" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" name="email"/>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birth'];?>
" disabled />
        <select name="type">
            <option value="normal" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "normal") {?>selected<?php }?>>normal</option>
            <option value="supervisior" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "supervisior") {?>selected<?php }?>>supervisior</option>
            <option value="admin" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "admin") {?>selected<?php }?>>admin</option>
        </select>
        <button type="submit" class="ico-edit"></button>
        <button type="submit" class="ico-delete" form="remove<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></button>
    </form>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/user" id="remove<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
