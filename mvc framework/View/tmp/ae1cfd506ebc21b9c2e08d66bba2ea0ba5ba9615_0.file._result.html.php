<?php
/* Smarty version 3.1.30, created on 2017-05-03 12:49:34
  from "C:\Users\mszyb\Source\Repos\NetArticles\NetArticles\View\view\panel\_result.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5909d1de929087_23375768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae1cfd506ebc21b9c2e08d66bba2ea0ba5ba9615' => 
    array (
      0 => 'C:\\Users\\mszyb\\Source\\Repos\\NetArticles\\NetArticles\\View\\view\\panel\\_result.html',
      1 => 1493452332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5909d1de929087_23375768 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>if ( isset($this->result) ) : <?php echo '?>';?>
<div class="message">
    <p><?php echo '<?php ';?>if($this->result)echo "Action was succesfully executed";else echo "Action wasn\'t executed";<?php echo '?>';?></p>
</div>
<?php echo '<?php ';?>endif; <?php echo '?>';
}
}
