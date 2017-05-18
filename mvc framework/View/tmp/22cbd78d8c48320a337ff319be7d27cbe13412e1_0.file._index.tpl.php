<?php
/* Smarty version 3.1.30, created on 2017-05-16 10:23:33
  from "/home/u956036775/public_html/netarticles/View/view/error/_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ad325b3fc16_06920751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22cbd78d8c48320a337ff319be7d27cbe13412e1' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/error/_index.tpl',
      1 => 1494929380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591ad325b3fc16_06920751 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Error page</p>
<?php if (!!$_smarty_tpl->tpl_vars['preview']->value) {?>
<p>Click here to back to website: <a href="<?php echo $_smarty_tpl->tpl_vars['preview']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['preview']->value;?>
</a></p>
<?php }
}
}
