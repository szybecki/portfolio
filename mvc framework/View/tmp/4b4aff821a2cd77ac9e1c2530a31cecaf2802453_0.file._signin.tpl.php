<?php
/* Smarty version 3.1.30, created on 2017-05-14 12:54:53
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\user\_signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5918539dcfe150_54771959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4aff821a2cd77ac9e1c2530a31cecaf2802453' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\user\\_signin.tpl',
      1 => 1494766492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5918539dcfe150_54771959 (Smarty_Internal_Template $_smarty_tpl) {
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
user/signin">
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
