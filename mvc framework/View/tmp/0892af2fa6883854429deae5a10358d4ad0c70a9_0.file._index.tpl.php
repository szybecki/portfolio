<?php
/* Smarty version 3.1.30, created on 2017-05-14 13:44:36
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\home\_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59185f44afd8b6_89140228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0892af2fa6883854429deae5a10358d4ad0c70a9' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\home\\_index.tpl',
      1 => 1494769475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59185f44afd8b6_89140228 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="home">
	<div class="baner">
		<div class="container">
			<div>
				<p><?php echo $_smarty_tpl->tpl_vars['baner']->value['name'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['baner']->value['description'];?>
</p>
				<a class="button" href="/home/product/<?php echo $_smarty_tpl->tpl_vars['baner']->value['id'];?>
">Zobacz</a>
			</div>
			<div>
				<img alt="" src="/img/<?php echo $_smarty_tpl->tpl_vars['baner']->value['img'];?>
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
						<a href="/home/product/<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
">
							<img src="/img/<?php echo $_smarty_tpl->tpl_vars['sale']->value['img'];?>
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
						<a href="/cart/add?id=<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
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
						<a href="/home/product/<?php echo $_smarty_tpl->tpl_vars['newest']->value['id'];?>
">
							<img src="/img/<?php echo $_smarty_tpl->tpl_vars['newest']->value['img'];?>
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
						<a href="/cart/add?id=<?php echo $_smarty_tpl->tpl_vars['sale']->value['id'];?>
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
