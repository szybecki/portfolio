<?php
/* Smarty version 3.1.30, created on 2017-05-14 12:06:26
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\layout\panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59184842f3f582_42244603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7fdb89e3d17328d7bf6856893d25eab287e7746' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\layout\\panel.tpl',
      1 => 1494752162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59184842f3f582_42244603 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array("category","param","user","product"), 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
                <div <?php if ($_smarty_tpl->tpl_vars['action']->value == $_smarty_tpl->tpl_vars['nav']->value) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</a></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
