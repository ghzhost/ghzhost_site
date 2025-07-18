<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/admin_list_global.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dcfcc43_74610481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53eaf63ae5046c0916ebfc0c03c9fd26bc258ca6' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/admin_list_global.tpl',
      1 => 1681786800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dcfcc43_74610481 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="admin-on-line">
    <div class="sidebar-header">
        <i class="fas fa-users"></i>
        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['staffonline'];?>

    </div>
    <ul class="admin-online-list">
        <?php $_smarty_tpl->_assignInScope('adminsData', explode(",",$_smarty_tpl->tpl_vars['adminsonline']->value));?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminsData']->value, 'adminsDataName');
$_smarty_tpl->tpl_vars['adminsDataName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['adminsDataName']->value) {
$_smarty_tpl->tpl_vars['adminsDataName']->do_else = false;
?>
            <li><i class="fas fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['adminsDataName']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
