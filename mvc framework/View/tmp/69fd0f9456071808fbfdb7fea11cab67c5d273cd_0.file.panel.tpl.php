<?php
/* Smarty version 3.1.30, created on 2017-05-16 12:32:39
  from "/home/u956036775/public_html/netarticles/View/layout/panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591af16717b1b7_63299061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69fd0f9456071808fbfdb7fea11cab67c5d273cd' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/layout/panel.tpl',
      1 => 1494935953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591af16717b1b7_63299061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

    <head>
        
        <title>NetArticles' panel</title>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
    
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
favicon.ico" />

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
css/panel.css">
        
    </head>

    <body>

        <header>
            <div>
                <h1>NetArticles</h1>
                <h2>panel</h2>
            </div>

            <nav>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array("category","param","user","product","attendant"), 'nav');
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
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
js/panel.js"><?php echo '</script'; ?>
>

    </body>

</html><?php }
}
