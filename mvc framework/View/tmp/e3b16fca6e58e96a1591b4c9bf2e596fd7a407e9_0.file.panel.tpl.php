<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:32:34
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\layout\panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909cde2e02108_35865623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b16fca6e58e96a1591b4c9bf2e596fd7a407e9' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\layout\\panel.tpl',
      1 => 1493814753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5909cde2e02108_35865623 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

    <head>
        
        <title>NetArticles' panel</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="/css/panel.css">
    </head>

    <body>

        <header>
            <div>
                <h1>NetArticles</h1>
                <h2>panel</h2>
            </div>

            <nav>
                <div <?php if ($_smarty_tpl->tpl_vars['action']->value == "category") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/category">Category</a></div>
                <div <?php if ($_smarty_tpl->tpl_vars['action']->value == "param") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/param">Param</a></div>
                <div <?php if ($_smarty_tpl->tpl_vars['action']->value == "user") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/user">User</a></div>
            </nav>
        </header>

        <main>

            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        </main>

        <?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/js/panel.js"><?php echo '</script'; ?>
>

    </body>

</html><?php }
}
