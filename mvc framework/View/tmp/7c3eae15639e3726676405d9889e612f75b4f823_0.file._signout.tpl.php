<?php
/* Smarty version 3.1.30, created on 2017-05-14 12:23:52
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\user\_signout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59184c58320e39_27434884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3eae15639e3726676405d9889e612f75b4f823' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\user\\_signout.tpl',
      1 => 1494764630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59184c58320e39_27434884 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
        <?php if ($_smarty_tpl->tpl_vars['signout']->value) {?>
            <p>Thanks for using our website</p>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['try']->value) {?>
                <p>Something went wrong with deleting your account</p>
            <?php } else { ?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
user/signout">
                    <label>Do you really want delete you account?</label>
                    <input type="hidden" name="confirm" value="true" />
                    <input type="submit" value="Yes, I want delete my accout" />
                </form>
            <?php }?>
        <?php }?>
        </div>
    </div>
</main><?php }
}
