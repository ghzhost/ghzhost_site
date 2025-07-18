<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:38:13
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/common/tt-logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669758c59757e5_31355631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e439302a302e61d123d35dc07b1643d164b70c6' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/common/tt-logo.tpl',
      1 => 1721194688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669758c59757e5_31355631 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tt_debug_mode']->value) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php" class="navbar-brand mr-3">
        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/includes/tt/hostlar/img/logo-color.png" class="logo-img" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
">
    </a>
<?php } else { ?>   
    <a class="navbar-brand mr-3" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
        <?php if ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['assetLogoPath']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" class="logo-img">
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>

        <?php }?>
    </a>
<?php }
}
}
