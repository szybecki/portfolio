<?php
/* Smarty version 3.1.30, created on 2017-05-03 13:14:56
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d7d02d05d4_98162150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e014e7199e9ebfb88094429cbdea83f722958b8d' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_category.tpl',
      1 => 1493817295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_add.tpl' => 1,
    'file:_result.tpl' => 1,
  ),
),false)) {
function content_5909d7d02d05d4_98162150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/category" method="post">
        <input type="text" name="newName" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" />
        <input type="hidden" name="oldName" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" />
        <input type="hidden" name="action" value="edit" />
        <button type="submit" class="ico-edit"></button>
        <button type="submit" form="remove<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="ico-delete"></button>
    </form>
    <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/category" method="post" id="remove<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" />
        <input type="hidden" name="action" value="remove" />
    </form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
