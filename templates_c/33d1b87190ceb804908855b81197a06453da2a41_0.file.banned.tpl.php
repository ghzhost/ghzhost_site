<?php
/* Smarty version 3.1.48, created on 2024-07-19 14:30:07
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669aa29f3e9702_70088590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d1b87190ceb804908855b81197a06453da2a41' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/banned.tpl',
      1 => 1719979313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669aa29f3e9702_70088590 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-danger">
    <strong><i class="fas fa-gavel"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedyourip'];?>
 <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedhasbeenbanned'];?>
</strong>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedbanreason'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</strong></li>
        <li><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedbanexpires'];?>
: <?php echo $_smarty_tpl->tpl_vars['expires']->value;?>
</li>
    </ul>
</div>
<?php }
}
