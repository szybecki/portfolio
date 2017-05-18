<?php
/* Smarty version 3.1.30, created on 2017-05-14 14:17:00
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\home\_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591866dcb7a1e2_56669237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3472e7b84b84cea091221c235830b3717630eca4' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\home\\_product.tpl',
      1 => 1494771419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591866dcb7a1e2_56669237 (Smarty_Internal_Template $_smarty_tpl) {
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
                <img alt="" src="/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
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
    <?php }?>
    </div>
</main><?php }
}
