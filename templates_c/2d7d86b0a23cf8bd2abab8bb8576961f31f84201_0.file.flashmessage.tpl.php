<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:39:19
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66975907b81bb6_26030838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d7d86b0a23cf8bd2abab8bb8576961f31f84201' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/flashmessage.tpl',
      1 => 1721194688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66975907b81bb6_26030838 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }
if ((isset($_smarty_tpl->tpl_vars['align']->value))) {?> text-<?php echo $_smarty_tpl->tpl_vars['align']->value;
}?>">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

    </div>
<?php }
}
}
