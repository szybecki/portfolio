<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:44:21
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\View\panel\param.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d0a517c980_97827336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89e160630d5a4240a3c8dacad4c18ac0dc24304b' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\View\\panel\\param.tpl',
      1 => 1493815241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../panel/_add.html' => 1,
  ),
),false)) {
function content_5909d0a517c980_97827336 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:../panel/_add.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<?php ';?>include '_result.html'; <?php echo '?>';?>
<div class="holder">
    <?php echo '<?php ';?>foreach ( $this->params as $param ) : <?php echo '?>';?>
    <form action="<?php echo '<?php ';?>echo $this->path . "panel/param/" . $this->category; <?php echo '?>';?>" method="post">
        <select name="category" default="<?php echo '<?php ';?>echo $this->category; <?php echo '?>';?>"><?php echo '<?php ';?>foreach ( $this->categories as $category ) {
                echo "<option " . ($category['name'] == $this->category ? "selected" : "") . " value='" .  $category['name'] . "'>" . $category['name'] . "</option>";
                } <?php echo '?>';?>
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
    </form><?php echo '<?php ';?>endforeach; <?php echo '?>';
echo '<?php ';?>} <?php echo '?>';?>
</div>
<?php }
}
}
