<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:00:54
  from "/home/u956036775/public_html/netarticles/View/view/home/search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c1146ccf5e5_98277966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84589d61e4360d44dbd1eef068f7c1de14e83d6c' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/home/search.tpl',
      1 => 1494925412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c1146ccf5e5_98277966 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['search']->value) && $_smarty_tpl->tpl_vars['search']->value === false) {?>
    <p>Select category</p>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value === false) {?>
        <p>Invalid category</p>
    <?php } else { ?>
        <?php if (empty($_smarty_tpl->tpl_vars['products']->value)) {?>
            <p>No products in this category</p>
        <?php } else { ?>
            <div class="products">
                <div class="container">
                    <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <div>
					        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						        <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
" alt="">
						        <div class="stars">
							        <div class="star"></div>
							        <div class="star"></div>
							        <div class="star"></div>
							        <div class="star"></div>
							        <div class="star"></div>
						        </div>
						        <p><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
					        </a>
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
				        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                </div>
            </div>
        <?php }?>
    <?php }
}
}
}
