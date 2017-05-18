<?php
/* Smarty version 3.1.30, created on 2017-05-14 20:56:48
  from "/home/u956036775/public_html/netarticles/View/view/home/_cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5918c490ce14b3_01480330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a10500ed35b1677ec6856b2908fc477f1db974f' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/home/_cart.tpl',
      1 => 1494795033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5918c490ce14b3_01480330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="home cart">
<?php if ($_smarty_tpl->tpl_vars['cart']->value['length'] == 0) {?>
    <div class="container">
        <p>Your cart is empty</p>
    </div>
<?php } else { ?>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
cart">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="container">
            <div class="row">
                <div>
                    <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['product']->value['object']['img'];?>
" />
                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value['object']['name'];?>
</p>
                </div>
                <div>
                    <p>Number of product/-s</p>
                    <input type="text" name="product[<?php echo $_smarty_tpl->tpl_vars['product']->value['object']['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['number'];?>
" />
                </div>
                <div>
                    <p>Parameters</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['object']['params'], 'param');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['param']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['param']->value['value'];?>
</p>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <input type="submit" value="Save cart" />
    </form>
<?php }?>
</main><?php }
}
