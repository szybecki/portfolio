<?php
/* Smarty version 3.1.30, created on 2017-05-16 09:53:48
  from "/home/u956036775/public_html/netarticles/View/view/user/_signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591acc2c921a36_89681853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3df2f5bb3c8fd8c4d7e334063eee946fce7bb2eb' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/user/_signin.tpl',
      1 => 1494927949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591acc2c921a36_89681853 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
        <?php $_smarty_tpl->_assignInScope('form', true);
?>
        <?php if (isset($_smarty_tpl->tpl_vars['signin']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['signin']->value == true) {?>
                <p>You are signed in, you can log in into our webiste</p>
                <?php $_smarty_tpl->_assignInScope('form', false);
?>
            <?php } else { ?>
                <p>Something went wrong</p>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
signin">
            <label for="nick">Nick:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->nick)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->nick;?>
</p><?php }?>
            <input type="text" name="nick" id="nick" />
            <label for="password">Password:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->password)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->password;?>
</p><?php }?>
            <input type="password" name="password" id="password" />
            <label for="repeat_password">Repeat password:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->repeat_password)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->repeat_password;?>
</p><?php }?>
            <input type="password" name="repeat_password" id="repeat_password" />
            <label for="email">Mail:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->email)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->email;?>
</p><?php }?>
            <input type="email" name="email" id="email" />
            <label for="date">Birth date:</label>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->date)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->date;?>
</p><?php }?>
            <input type="date" name="date" id="date" min="1998-01-01" />
            <input type="submit" value="Sign in" />
        </form>
        <?php }?>
        </div>
    </div>
</main><?php }
}
