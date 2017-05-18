<?php
/* Smarty version 3.1.30, created on 2017-05-16 06:38:11
  from "/home/u956036775/public_html/netarticles/View/view/panel/_param.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591a9e53606f26_30637955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49fad1329565981e90d97e62e441a3aeb3f6307f' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/panel/_param.tpl',
      1 => 1494793690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_add.tpl' => 1,
    'file:_result.tpl' => 1,
  ),
),false)) {
function content_591a9e53606f26_30637955 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['empty']->value) {?>
    <div class="select">select category</div><div class="holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
        <p><a href='<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/param/<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="holder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'param');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/param/<?php echo $_smarty_tpl->tpl_vars['curentCategory']->value;?>
" method="post">
        <select name="category" default="<?php echo $_smarty_tpl->tpl_vars['curentCategory']->value;?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option <?php if ($_smarty_tpl->tpl_vars['category']->value['name'] == $_smarty_tpl->tpl_vars['curentCategory']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <input type="text" name="newName" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
" />
        <input type="hidden" name="oldName" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
" />
        <input type="hidden" name="action" value="edit" />
        <button type="submit" class="ico-edit"></button>
        <button type="submit" form="remove<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
" class="ico-delete"></button>
    </form>
    <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/param/<?php echo $_smarty_tpl->tpl_vars['curentCategory']->value;?>
" method="post" id="remove<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
">
        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
" />
        <input type="hidden" name="action" value="remove" />
    </form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
}
