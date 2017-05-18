<?php
/* Smarty version 3.1.30, created on 2017-05-14 12:15:55
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\user\_change.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59184a7b35dd99_90375319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2faf3f31364b5c79d4c65be018180c6489d187a4' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\user\\_change.tpl',
      1 => 1494764152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59184a7b35dd99_90375319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
            <p>Change <?php echo $_smarty_tpl->tpl_vars['what']->value;?>
</p>

            <?php if (isset($_smarty_tpl->tpl_vars['change']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['change']->value) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['what']->value;?>
 was change</p>
                <?php } else { ?>
                    <p>Something went wrong, try again</p>
                <?php }?>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['what']->value == "email") {?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/change/email">
                    <label for="email">New email:</label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->email)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->email;?>
</p><?php }?>
                    <input type="email" name="email" id="email" />
                    <label for="password">Confirm your password:</label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->password)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->password;?>
</p><?php }?>
                    <input type="password" name="password" id="password" />
                    <input type="submit" value="Change email" />
                </form>
            <?php } elseif ($_smarty_tpl->tpl_vars['what']->value == "password") {?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/change/password">
                    <label for="old_password">Old password:</label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->old_password)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->old_password;?>
</p><?php }?>
                    <input type="password" name="old_password" id="old_password" />
                    <label for="new_password">New password:</label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->new_password)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->new_password;?>
</p><?php }?>
                    <input type="password" name="new_password" id="new_password" />
                    <label for="new_repeat_password">Repeat new password:</label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value->new_repeat_password)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value->new_repeat_password;?>
</p><?php }?>
                    <input type="password" name="new_repeat_password" id="new_repeat_password" />
                    <input type="submit" value="Change password" />
                </form>
            <?php }?>
        </div>
    </div>
</main><?php }
}
