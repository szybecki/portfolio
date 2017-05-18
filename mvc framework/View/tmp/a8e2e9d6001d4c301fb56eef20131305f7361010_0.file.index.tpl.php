<?php
/* Smarty version 3.1.30, created on 2017-05-17 09:00:52
  from "/home/u956036775/public_html/netarticles/View/view/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591c11443baec8_71593110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e2e9d6001d4c301fb56eef20131305f7361010' => 
    array (
      0 => '/home/u956036775/public_html/netarticles/View/view/home/index.tpl',
      1 => 1494925338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591c11443baec8_71593110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="home">
	<div class="baner">
		<div class="container">
			<div>
				<p><?php echo $_smarty_tpl->tpl_vars['baner']->value['name'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['baner']->value['description'];?>
</p>
				<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
product/<?php echo $_smarty_tpl->tpl_vars['baner']->value['id'];?>
">Zobacz</a>
			</div>
			<div>
				<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['baner']->value['img'];?>
">
			</div>
		</div>
	</div>
	<div class="sales">
		<div class="container">
			<div class="products">
				<span>Sales</span>
				<div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales']->value, 'sale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
?>
					<div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
product/<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['sale']->value['img'];?>
" alt="">
							<div class="stars">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
							<p><?php echo $_smarty_tpl->tpl_vars['sale']->value['name'];?>
</p>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
cart/add?id=<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
">
                        <?php if (empty($_smarty_tpl->tpl_vars['sale']->value['sale'])) {?>
                            <span><?php echo $_smarty_tpl->tpl_vars['sale']->value['prize'];?>
 zł</span>
                        <?php } else { ?>
                            <span><?php echo $_smarty_tpl->tpl_vars['sale']->value['sale'];?>
 zł<span><?php echo $_smarty_tpl->tpl_vars['sale']->value['prize'];?>
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
	</div>
	<div class="newest">
		<div class="container">
			<div class="products">
				<span>Newest</span>
				<div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newestes']->value, 'newest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['newest']->value) {
?>
					<div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
product/<?php echo $_smarty_tpl->tpl_vars['newest']->value['id'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['newest']->value['img'];?>
" alt="">
							<div class="stars">
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
								<div class="star"></div>
							</div>
							<p><?php echo $_smarty_tpl->tpl_vars['newest']->value['name'];?>
</p>
						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
cart/add?id=<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['newest']->value['prize'];?>
 zł</span></a>
					</div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</div>
			</div>
		</div>
	</div>
</main><?php }
}
