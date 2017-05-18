<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:00:52
  from "/home/u956036775/public_html/netarticles/View/view/error/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c11446ef7b1_22649177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e29499f392e2dc0823c11151921471f83a057be' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/error/index.tpl',
      1 => 1494929380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c11446ef7b1_22649177 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Error page</p>
<?php if (!!$_smarty_tpl->tpl_vars['preview']->value) {?>
<p>Click here to back to website: <a href="<?php echo $_smarty_tpl->tpl_vars['preview']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['preview']->value;?>
</a></p>
<?php }
}
}
