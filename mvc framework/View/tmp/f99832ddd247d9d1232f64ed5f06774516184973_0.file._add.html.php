<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:41:39
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\View\panel\_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d003b683e0_42084876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f99832ddd247d9d1232f64ed5f06774516184973' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\View\\panel\\_add.html',
      1 => 1493805237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5909d003b683e0_42084876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="add">
    <form action="<?php echo '<?php ';?>echo $this->path . "panel/" . $this->action . (empty($this->category) ? "" : "/" . $this->category); <?php echo '?>';?>" method="post">
        <input type="hidden" name="action" value="add" />
        <input type="text" name="name" />
        <input type="submit" value="+" />
    </form>
</div><?php }
}
