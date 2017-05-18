<?php
/* Smarty version 3.1.30, created on 2017-05-14 08:51:30
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_productDetails.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59181a925b0a64_12233697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630cf4764453adf350db0ac01ea92d7ff76439d9' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_productDetails.tpl',
      1 => 1494751889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59181a925b0a64_12233697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="holder">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
panel/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
        <!-- name + prize -->
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
        <input type="text" name="prize" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['prize'];?>
" />
        <br /><br />

        <!-- category of product -->
        <input disabled type="text" value="Category" />
        <select name="category">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['id_category']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <br /><br />
        <input type="text" value="Sale" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sale'];?>
"
        <br /><br /><br />

        <!-- params of product -->
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['product']->value['params'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['product']->value['params'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <select name="param[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][param]">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'param');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['param']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['params'][$_smarty_tpl->tpl_vars['i']->value]['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
            <input type="text" name="param[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['params'][$_smarty_tpl->tpl_vars['i']->value]['value'];?>
" style="margin-bottom: 20px;" />
            <br />
        <?php }
}
?>


        <!-- add produc -->
        <select name="param[<?php echo count($_smarty_tpl->tpl_vars['product']->value['params']);?>
][param]">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'param');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['param']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        <input type="text" name="param[<?php echo count($_smarty_tpl->tpl_vars['product']->value['params']);?>
][value]" />
        <button type="submit" class="ico-edit"></button>
    </form>
</div><?php }
}
