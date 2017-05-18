<?php
/* Smarty version 3.1.30, created on 2017-05-03 20:10:22
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590a392e83c5d6_81648767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c86723454dd271cb03f81d7b728e5b4fd7d82b' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_add.tpl',
      1 => 1493842172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590a392e83c5d6_81648767 (Smarty_Internal_Template $_smarty_tpl) {
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
