<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:44:27
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d0abd51249_31667121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10920bad3a8ac5717bbf009a07db83fd2e40e4ad' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_add.html',
      1 => 1493805237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5909d0abd51249_31667121 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="add">
    <form action="<?php echo '<?php ';?>echo $this->path . "panel/" . $this->action . (empty($this->category) ? "" : "/" . $this->category); <?php echo '?>';?>" method="post">
        <input type="hidden" name="action" value="add" />
        <input type="text" name="name" />
        <input type="submit" value="+" />
    </form>
</div><?php }
}
