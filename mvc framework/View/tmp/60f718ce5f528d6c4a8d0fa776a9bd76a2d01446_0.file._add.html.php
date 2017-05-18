<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:44:21
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\View\panel\_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d0a52161c4_15439672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f718ce5f528d6c4a8d0fa776a9bd76a2d01446' => 
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
function content_5909d0a52161c4_15439672 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="add">
    <form action="<?php echo '<?php ';?>echo $this->path . "panel/" . $this->action . (empty($this->category) ? "" : "/" . $this->category); <?php echo '?>';?>" method="post">
        <input type="hidden" name="action" value="add" />
        <input type="text" name="name" />
        <input type="submit" value="+" />
    </form>
</div><?php }
}
