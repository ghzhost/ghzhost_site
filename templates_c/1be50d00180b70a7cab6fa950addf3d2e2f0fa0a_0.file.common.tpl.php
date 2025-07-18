<?php
/* Smarty version 3.1.48, created on 2024-07-16 15:38:28
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/orderforms/standard_cart/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696be2475fc01_51580799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be50d00180b70a7cab6fa950addf3d2e2f0fa0a' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/orderforms/standard_cart/common.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696be2475fc01_51580799 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'all.min.css'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" />
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['assetExists'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['assetExists'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'assetExists'))) {
throw new SmartyException('block tag \'assetExists\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('assetExists', array('file'=>"custom.css"));
$_block_repeat=true;
echo $_block_plugin1::assetExists(array('file'=>"custom.css"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['__assetPath__']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" />
<?php $_block_repeat=false;
echo $_block_plugin1::assetExists(array('file'=>"custom.css"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'scripts.min.js'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
><?php }
}
