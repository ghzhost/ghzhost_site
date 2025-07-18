<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:26:14
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/includes/pageheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669755f6a13262_95946205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '835a2eb5a156513a603c041f75c228270aa0688f' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/includes/pageheader.tpl',
      1 => 1719979319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669755f6a13262_95946205 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</div>
<?php }
}
