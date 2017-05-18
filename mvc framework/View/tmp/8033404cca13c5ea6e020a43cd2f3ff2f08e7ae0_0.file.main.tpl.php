<?php
/* Smarty version 3.1.30, created on 2017-05-14 15:02:40
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\layout\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591871902bba31_03691110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8033404cca13c5ea6e020a43cd2f3ff2f08e7ae0' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\layout\\main.tpl',
      1 => 1494774158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591871902bba31_03691110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

	<head>

		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow">
	
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css" />

	</head>

	<body>

         <header>
			<div class="container">
				<div class="subheader">
					<h1><a href="/">NetArticles</a></h1>
					<form method="post" action="#">
						<input type="text" name="query">
						<button type="submit"></button>
					</form>
					<div class="user">
						<?php if (isset($_smarty_tpl->tpl_vars['nick']->value)) {?><a href="/user/panel"><?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
</a><?php } else { ?><a href="/user/login">Log in</a><?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['nick']->value)) {?><a href="/user/logout">Log out</a><?php } else { ?><a href="/user/signin">Sign in</a><?php }?>
					</div>
					<div class="cart">
						<a href="/cart"><?php echo $_smarty_tpl->tpl_vars['cart']->value['length'];?>
</a>
					</div>
				</div>
				<nav>
					<ul>
		            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                        <li><a href="/home/search/<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				</nav>
			</div>
		</header>

        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <footer>
			<div class="subfooter">
				<div class="container">
					<div>
						<span>O nas</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div>
						<div>
							<p>Your account</p>
							<ul>
								<li><a href="/user/card">Card</a></li>
						        <li><?php if (isset($_smarty_tpl->tpl_vars['nick']->value)) {?><a href="/user/panel">Panel</a><?php } else { ?><a href="/user/login">Log in</a><?php }?></li>
                                <li><?php if (isset($_smarty_tpl->tpl_vars['nick']->value)) {?><a href="/user/logout">Log out</a><?php } else { ?><a href="/user/signin">Sign in</a><?php }?></li>
								<li><a href="/user/order">Your order</a></li>
							</ul>
						</div>
						<div>
							<p>Sales</p>
							<ul>
		                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                <li><a href="/home/search/<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</ul>
						</div>
						<div>
							<p>Information</p>
							<ul>
								<li>Delivery</li>
								<li>Instalments</li>
								<li>Product return</li>
								<li>Warranty</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="subfooter">
				<div class="container">
					<div>
						<p>+48 503 298 222</p>
						<p>Pon-Czw 7-19</p>
						<p>Pią-Niedz 10-14</p>
					</div>
					<div>
						<p>Check out us on</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html><?php }
}
