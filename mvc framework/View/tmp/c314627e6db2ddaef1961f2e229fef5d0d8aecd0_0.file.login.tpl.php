<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:01:02
  from "/home/u956036775/public_html/netarticles/View/view/user/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c114eaef2e0_88893680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c314627e6db2ddaef1961f2e229fef5d0d8aecd0' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/user/login.tpl',
      1 => 1494925432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c114eaef2e0_88893680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
        <?php if (isset($_smarty_tpl->tpl_vars['try']->value) && $_smarty_tpl->tpl_vars['try']->value) {?>
            <p style='color:red;'>Uncorrect input data</p>
        <?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
login" method="post">
            <label for="nick">Nick:</label>
            <input type="text" name="nick" id="password" />
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            <input type="submit" value="Login" />
        </form>
        </div>
    </div>
</main><?php }
}
