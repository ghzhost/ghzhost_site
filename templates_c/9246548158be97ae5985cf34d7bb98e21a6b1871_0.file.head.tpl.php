<?php
/* Smarty version 3.1.48, created on 2024-07-16 15:36:53
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/GHZ/includes/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696bdc53c9791_80900944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9246548158be97ae5985cf34d7bb98e21a6b1871' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/GHZ/includes/head.tpl',
      1 => 1720768329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696bdc53c9791_80900944 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/custom.css" rel="stylesheet">


<!-- SKYHOST template -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/style.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/responsive.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/flaticon.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/animate.css" rel="stylesheet" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.title"),$_smarty_tpl ) );?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
        saved = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saved"),$_smarty_tpl ) );?>
',
        saving = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saving"),$_smarty_tpl ) );?>
',
        whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
",
        recaptchaSiteKey = "<?php echo $_smarty_tpl->tpl_vars['recaptchaSiteKey']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value || $_smarty_tpl->tpl_vars['adminLoggedIn']->value && (isset($_GET['dev'])) && $_GET['dev'] == 'true') {?>
  

<pre>
Modo desenvolvedor GHZHOST!
<a href='lang/int/'  target="_blank"><button>Traduzir</button></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
devsmarty=true"><button>Smartyvars</button></a>

</pre>
<?php if ($_GET['devsmarty'] == 'true') {
$_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
}?>

<?php }
}
}
