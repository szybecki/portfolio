<?php
/* Smarty version 3.1.30, created on 2017-05-14 12:58:08
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\user\_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59185460016695_67599022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36fad97ae2a3db889056be90e1625aa09081040f' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\user\\_login.tpl',
      1 => 1494766686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59185460016695_67599022 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user">
    <div class="container">
        <div>
        <?php if (isset($_smarty_tpl->tpl_vars['try']->value) && $_smarty_tpl->tpl_vars['try']->value) {?>
            <p style='color:red;'>Uncorrect input data</p>
        <?php }?>
        <form action="/user/login" method="post">
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
