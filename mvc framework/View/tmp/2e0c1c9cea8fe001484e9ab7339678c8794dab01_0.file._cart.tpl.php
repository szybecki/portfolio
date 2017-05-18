<?php
/* Smarty version 3.1.30, created on 2017-05-14 19:10:55
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\home\_cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5918abbfb70f19_78099867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0c1c9cea8fe001484e9ab7339678c8794dab01' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\home\\_cart.tpl',
      1 => 1494789041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5918abbfb70f19_78099867 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="home cart">
<?php if ($_smarty_tpl->tpl_vars['cart']->value['length'] == 0) {?>
    <div class="container">
        <p>Your cart is empty</p>
    </div>
<?php } else { ?>
    <form method="post" action="/cart">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="container">
            <div class="row">
                <div>
                    <img alt="" src="/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['object']['img'];?>
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
