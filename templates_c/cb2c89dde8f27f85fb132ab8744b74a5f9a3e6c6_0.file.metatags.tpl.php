<?php
/* Smarty version 3.1.48, created on 2024-07-24 00:35:22
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/includes/metatags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a0767ae5fda7_99560042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb2c89dde8f27f85fb132ab8744b74a5f9a3e6c6' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/includes/metatags.tpl',
      1 => 1721792103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a0767ae5fda7_99560042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ghzhost/web/ghzhost.com/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('flag_url', explode(".",$_SERVER['HTTP_HOST']));
$_smarty_tpl->_assignInScope('ipcontry', $_SERVER['HTTP_CF_IPCOUNTRY']);
$_smarty_tpl->_assignInScope('urlcontry', mb_strtolower(smarty_modifier_replace($_SERVER['HTTP_HOST'],$_smarty_tpl->tpl_vars['flag_url']->value[0],$_smarty_tpl->tpl_vars['ipcontry']->value), 'UTF-8'));?>

<meta name="title" content=".:: <?php echo $_smarty_tpl->tpl_vars['companyname']->value;
echo mb_strtoupper($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');?>
 ::. — <?php echo $_smarty_tpl->tpl_vars['LANG']->value['title_slug'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['og_description'];?>
" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://<?php echo mb_strtolower($_smarty_tpl->tpl_vars['ipcontry']->value, 'UTF-8');?>
.ghzhost.com/" />
<meta property="og:title" content=".:: <?php echo $_smarty_tpl->tpl_vars['companyname']->value;
echo mb_strtoupper($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');?>
 ::. — <?php echo $_smarty_tpl->tpl_vars['LANG']->value['title_slug'];?>
" />
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['og_description'];?>
" />
<meta property="og:image" content="https://<?php echo mb_strtolower($_smarty_tpl->tpl_vars['ipcontry']->value, 'UTF-8');?>
.ghzhost.com/img/og.png" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content=".:: <?php echo $_smarty_tpl->tpl_vars['companyname']->value;
echo mb_strtoupper($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');?>
 ::. — <?php echo $_smarty_tpl->tpl_vars['LANG']->value['title_slug'];?>
" />
<meta property="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['og_description'];?>
" />
<meta property="twitter:image" content="https://<?php echo mb_strtolower($_smarty_tpl->tpl_vars['ipcontry']->value, 'UTF-8');?>
.ghzhost.com/img/og.png" />
<?php }
}
