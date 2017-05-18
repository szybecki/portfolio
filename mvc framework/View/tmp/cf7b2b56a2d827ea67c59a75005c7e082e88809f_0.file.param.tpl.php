<?php
/* Smarty version 3.1.30, created on 2017-05-03 13:05:43
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\param.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d5a7cdbb04_48049729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf7b2b56a2d827ea67c59a75005c7e082e88809f' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\param.tpl',
      1 => 1493816739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_add.tpl' => 1,
    'file:_result.tpl' => 1,
  ),
),false)) {
function content_5909d5a7cdbb04_48049729 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="text" name="newName" value="<?php echo '<?php ';?>echo $param['name']; <?php echo '?>';?>" />
        <input type="hidden" name="oldName" value="<?php echo '<?php ';?>echo $param['name']; <?php echo '?>';?>" />
        <input type="hidden" name="action" value="edit" />
        <button type="submit" class="ico-edit"></button>
        <button type="submit" form="remove<?php echo '<?php ';?>echo $param['id']; <?php echo '?>';?>" class="ico-delete"></button>
    </form>
    <form action="<?php echo '<?php ';?>echo $this->path . "panel/param/" . $this->category; <?php echo '?>';?>" method="post" id="remove<?php echo '<?php ';?>echo $param['id']; <?php echo '?>';?>">
        <input type="hidden" name="name" value="<?php echo '<?php ';?>echo $param['name']; <?php echo '?>';?>" />
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
