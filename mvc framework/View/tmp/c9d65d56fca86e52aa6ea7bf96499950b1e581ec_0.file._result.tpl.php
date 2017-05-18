<?php
/* Smarty version 3.1.30, created on 2017-05-14 21:03:50
  from "/home/u956036775/public_html/netarticles/View/view/panel/_result.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5918c636aeb769_40820210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9d65d56fca86e52aa6ea7bf96499950b1e581ec' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/panel/_result.tpl',
      1 => 1494793691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5918c636aeb769_40820210 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
<div class="message">
    <p><?php if ($_smarty_tpl->tpl_vars['result']->value) {?>Action was succesfully executed<?php } else { ?>Action wasn't executed<?php }?></p>
</div>
<?php }
}
}
