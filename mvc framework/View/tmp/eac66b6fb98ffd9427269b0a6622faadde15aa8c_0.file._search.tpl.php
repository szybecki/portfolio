<?php
/* Smarty version 3.1.30, created on 2017-05-14 13:45:17
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\home\_search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59185f6dbd26d7_18748660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac66b6fb98ffd9427269b0a6622faadde15aa8c' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\home\\_search.tpl',
      1 => 1494769516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59185f6dbd26d7_18748660 (Smarty_Internal_Template $_smarty_tpl) {
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
					        <a href="/home/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
						        <img src="/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
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
					        <a href="/cart/add?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
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
