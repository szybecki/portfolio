<?php
/* Smarty version 3.1.30, created on 2017-05-16 09:38:55
  from "/home/u956036775/public_html/netarticles/View/view/user/_panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ac8afa410d0_93113764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c05a54136e5f8c193aa2ac1acd3bd220381936c' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/user/_panel.tpl',
      1 => 1494925492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591ac8afa410d0_93113764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
            <p>Witaj <strong><?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
</strong></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
change/password">Kliknij aby zmienić hasło</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
change/email">Kliknij aby zmienić email</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
logout">Kliknij aby wylogować</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
signout">Kliknij aby usunąć konto</a></p>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "admin") {?>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel">Administrator's panel</a></p>
            <?php }?>
        </div>
    </div>
</main><?php }
}
