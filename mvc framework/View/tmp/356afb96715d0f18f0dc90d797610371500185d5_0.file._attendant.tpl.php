<?php
/* Smarty version 3.1.30, created on 2017-05-17 07:08:53
  from "/home/u956036775/public_html/netarticles/View/view/panel/_attendant.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591bf70521a253_66276277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356afb96715d0f18f0dc90d797610371500185d5' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/panel/_attendant.tpl',
      1 => 1494967072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591bf70521a253_66276277 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['empty']->value) {?>
	<div class="holder">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
		    <p><a href='<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/attendant/<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('curentCategory', $_smarty_tpl->tpl_vars['category']->value);
?>
	<div class="add">
	    <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/attendant/<?php echo $_smarty_tpl->tpl_vars['curentCategory']->value;?>
" method="post">
	        <input type="hidden" name="action" value="add" />
	        <select name="user">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['nick'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	        </select>
	        <input type="submit" value="+" />
	    </form>
	</div>

	<div class="holder">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attendants']->value, 'attendant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attendant']->value) {
?>
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/attendant/<?php echo $_smarty_tpl->tpl_vars['curentCategory']->value;?>
">
				<input type="hidden" name="action" value="delete">
				<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['attendant']->value['id'];?>
">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['attendant']->value['nick'];?>
">
				<button type="submit" class="ico-delete"></button>
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
