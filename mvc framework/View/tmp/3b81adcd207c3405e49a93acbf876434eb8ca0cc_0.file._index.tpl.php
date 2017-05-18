<?php
/* Smarty version 3.1.30, created on 2017-05-04 17:59:11
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\error\_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590b6bef4faed5_06652415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b81adcd207c3405e49a93acbf876434eb8ca0cc' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\error\\_index.tpl',
      1 => 1493920736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590b6bef4faed5_06652415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Error page</p>
<?php if (!!$_smarty_tpl->tpl_vars['preview']->value) {?>
<p>Click here to back to website: <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['preview']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['path']->value;
echo $_smarty_tpl->tpl_vars['preview']->value;?>
</a></p>
<?php }
}
}
