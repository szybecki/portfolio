<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:01:07
  from "/home/u956036775/public_html/netarticles/View/view/user/panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c11530e0152_65348607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76caacab12b91ef60c49439084648dbf7b1edcd' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/user/panel.tpl',
      1 => 1495008996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c11530e0152_65348607 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "admin" || $_smarty_tpl->tpl_vars['type']->value == "supervisior") {?>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel">Administrator's panel</a></p>
            <?php }?>
        </div>
    </div>
</main><?php }
}
