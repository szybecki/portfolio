<?php
/* Smarty version 3.1.30, created on 2017-05-03 20:10:22
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_result.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590a392e8be501_95565807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a27b36f4d8981f481a8eebcaaaa7b60a6cdcb5' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_result.tpl',
      1 => 1493842175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590a392e8be501_95565807 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
<div class="message">
    <p><?php if ($_smarty_tpl->tpl_vars['result']->value) {?>Action was succesfully executed<?php } else { ?>Action wasn't executed<?php }?></p>
</div>
<?php }
}
}
