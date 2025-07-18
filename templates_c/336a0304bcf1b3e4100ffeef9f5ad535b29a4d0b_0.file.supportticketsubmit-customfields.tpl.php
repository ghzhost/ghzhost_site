<?php
/* Smarty version 3.1.48, created on 2024-07-17 03:47:01
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/supportticketsubmit-customfields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669768e584e796_45510804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336a0304bcf1b3e4100ffeef9f5ad535b29a4d0b' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/supportticketsubmit-customfields.tpl',
      1 => 1719979315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669768e584e796_45510804 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
    <div class="form-group">
        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
            <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</p>
        <?php }?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
