<?php
/* Smarty version 3.1.30, created on 2017-05-16 10:54:00
  from "/home/u956036775/public_html/netarticles/View/view/panel/_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ada483c9bd7_78494607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e0e4356c2acdfcb227f179d4482e1c396d9d77' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/panel/_add.tpl',
      1 => 1494931996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591ada483c9bd7_78494607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="add">
    <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/<?php echo $_smarty_tpl->tpl_vars['action']->value;
if (isset($_smarty_tpl->tpl_vars['curentCategory']->value)) {?>/<?php echo $_smarty_tpl->tpl_vars['curentCategory']->value;
}?>" method="post">
        <input type="hidden" name="action" value="add" />
        <input type="text" name="name" />
        <input type="submit" value="+" />
    </form>
</div><?php }
}
