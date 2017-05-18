<?php
/* Smarty version 3.1.30, created on 2017-05-14 12:08:30
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\user\_panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591848be33d2c7_91453033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65c9f8c0d93175b5de26e2441da7a7c816fdc9f' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\user\\_panel.tpl',
      1 => 1494763707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591848be33d2c7_91453033 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
            <p>Witaj <strong><?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
</strong></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/change/password">Kliknij aby zmienić hasło</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/change/email">Kliknij aby zmienić email</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/logout">Kliknij aby wylogować</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/signout">Kliknij aby usunąć konto</a></p>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "admin") {?>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel">Administrator's panel</a></p>
            <?php }?>
        </div>
    </div>
</main><?php }
}
