<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:01:40
  from "/home/u956036775/public_html/netarticles/View/view/home/product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c11747989c7_09334829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18bb6feb84120f912b857a152033fbe47d4af6a5' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/home/product.tpl',
      1 => 1494795692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c11747989c7_09334829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="home product">
    <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['exist']->value) {?>
        <div class="row">
            <div>
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
            </div>
            <div>
                <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" />
            </div>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['params'], 'param');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
?>
            <div class="row">
                <p><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['param']->value['value'];?>
</p>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
cart/add?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
        <?php if (empty($_smarty_tpl->tpl_vars['product']->value['sale'])) {?>
            <span><?php echo $_smarty_tpl->tpl_vars['product']->value['prize'];?>
 zł</span>
        <?php } else { ?>
            <span><?php echo $_smarty_tpl->tpl_vars['product']->value['sale'];?>
 zł<span><?php echo $_smarty_tpl->tpl_vars['product']->value['prize'];?>
 zł</span></span>
        <?php }?>
        </a>
    <?php }?>
    </div>
</main><?php }
}
