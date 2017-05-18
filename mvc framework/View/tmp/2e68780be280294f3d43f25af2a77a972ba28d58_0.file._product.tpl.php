<?php
/* Smarty version 3.1.30, created on 2017-05-08 20:45:02
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910d8cec34583_56475484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e68780be280294f3d43f25af2a77a972ba28d58' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_product.tpl',
      1 => 1494276297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_add.tpl' => 1,
  ),
),false)) {
function content_5910d8cec34583_56475484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/product">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['prize'];?>
" />
        <button type="submit" class="ico-delete" form="delete<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"></button>
        <button type="submit" class="ico-edit" form="details<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"></button>
    </form>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/product" id="delete<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
        <input type="hidden" name="action" value="delete" />
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" />
    </form>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" id="details<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"></form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
