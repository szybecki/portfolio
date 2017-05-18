<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:50:10
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d20252bb29_19799844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbce3d3414904ccbe7aa2ba87d002d85f6473516' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\user.tpl',
      1 => 1493815010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5909d20252bb29_19799844 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/user">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nick'];?>
" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birth'];?>
" />
        <select>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "normal") {?>selected<?php }?>>normal</option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "supervisior") {?>selected<?php }?>>supervisior</option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == "admin") {?>selected<?php }?>>admin</option>
        </select>
        <button type="submit" class="ico-edit"></button>
        <button type="submit" class="ico-delete" form="remove<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></button>
    </form>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/user" id="remove<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">

    </form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
