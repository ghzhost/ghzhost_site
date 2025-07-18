<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dbf6f61_61719988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0050d45d095e7cf9c4bcf16760887682ec6c776' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/header.tpl',
      1 => 1696346820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dbf6f61_61719988 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="referrer" content="same-origin">
    <title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
    <?php if (!empty($_smarty_tpl->tpl_vars['adminXSettingsData']->value) && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['fav_icon'] != '') {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['fav_icon'];?>
" type="image/x-icon">
        <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['fav_icon'];?>
">
    <?php } else { ?>
        <link rel="shortcut icon" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/favicon.ico" type="image/x-icon">
        <link rel="icon" type="image/x-icon" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/favicon.ico">
    <?php }?>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/theme.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet"/>
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/adminx.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/adminx_responsive.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <link href="<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
/assets/css/fontawesome-all.min.css" rel="stylesheet" />
    <?php if ($_smarty_tpl->tpl_vars['_ADMINLANG']->value['locale'] == "ar_AR" || $_smarty_tpl->tpl_vars['_ADMINLANG']->value['locale'] == "fa_IR" || $_smarty_tpl->tpl_vars['_ADMINLANG']->value['locale'] == "he_IL") {?>
        <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/rtl.bootstrap.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
        <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/adminx_rtl.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
        <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/adminx_rtl_responsive.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <?php }?>
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/adminx_colors.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <?php if ($_smarty_tpl->tpl_vars['adminXOverrideCssState']->value == 'active') {?>
        <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/adminx_overrides.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" /> 
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/vendor.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/adminx.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var datepickerformat = "<?php echo $_smarty_tpl->tpl_vars['datepickerformat']->value;?>
",
            csrfToken="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
",
            adminBaseRoutePath = "<?php echo \WHMCS\Admin\AdminServiceProvider::getAdminRouteBase();?>
",
            whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
",
            adminxTemplateImageName = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();
echo \WHMCS\Admin\AdminServiceProvider::getAdminRouteBase();?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/",
            adminxTemplateName = "templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/";

        <?php if ($_smarty_tpl->tpl_vars['jquerycode']->value) {?>
            $(document).ready(function(){
                <?php echo $_smarty_tpl->tpl_vars['jquerycode']->value;?>

            });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['jscode']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>

        <?php }?>
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>

</head>
<body class="<?php if (empty($_smarty_tpl->tpl_vars['sidebar']->value)) {?>no-sidebar<?php }
if (!empty($_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value)) {?> has-warning-banner<?php }?> control-bar-collapse <?php if (!empty($_smarty_tpl->tpl_vars['adminXSettingsData']->value) && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['enable_sticky_header'] == 'on') {?>adminxHeaderSticky<?php }
if ($_smarty_tpl->tpl_vars['_ADMINLANG']->value['locale'] == 'ar_AR' || $_smarty_tpl->tpl_vars['_ADMINLANG']->value['locale'] == 'fa_IR' || $_smarty_tpl->tpl_vars['_ADMINLANG']->value['locale'] == 'he_IL') {?> adminx-rtl-view<?php }?> <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] != '') {
echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'];
} else { ?>style_adminx_0<?php }?>" data-phone-cc-input="<?php if (!empty($_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value)) {
echo $_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value;
}?>">
    <!-- wrapper start -->
    <div class="adminx-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>

    <div class="alert alert-warning global-admin-warning">
        <?php echo $_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value;?>

    </div>
    <aside class="side-navigation-admin-x">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </aside>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/custom_files/nav_right_top_side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['contentAreaClasses']->value;?>
 adminx-main-section<?php if ($_smarty_tpl->tpl_vars['pagetemplate']->value == 'homepage') {?> adminx-home-page<?php }?> <?php if ($_smarty_tpl->tpl_vars['adminXOnlyPagesNameClass']->value == 'addonmodules') {?> addonModulesSection<?php }?>" id="contentarea">
        <?php if ($_smarty_tpl->tpl_vars['pagetemplate']->value == 'homepage') {?>
            <div class="home-page-static-widget-upper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staticWidgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <div id="panel<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
" class="dashboard-panel-static-item dashboard-panel-item-columns-<?php echo $_smarty_tpl->tpl_vars['widget']->value->getColumnSize();
if (in_array($_smarty_tpl->tpl_vars['widget']->value->getId(),$_smarty_tpl->tpl_vars['hiddenWidgets']->value)) {?> hidden<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value->showWrapper()) {?>
                        <div class="panel panel-default widget-<?php echo strtolower($_smarty_tpl->tpl_vars['widget']->value->getId());?>
" data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
">
                            <div class="panel-heading">
                                <div class="widget-tools">
                                    <a href="#" class="widget-refresh"><i class="fas fa-sync"></i></a>
                                    <a href="#" class="widget-minimise"><i class="fas fa-chevron-up"></i></a>
                                    <a href="#" class="widget-hide"><i class="fas fa-times"></i></a>
                                </div>
                                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['widget']->value->getTitle();?>
</h3>
                            </div>
                            <div class="panel-body">
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['widget']->value->render();?>

                        <?php if ($_smarty_tpl->tpl_vars['widget']->value->showWrapper()) {?>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <div class="adminx-inner-section <?php echo $_smarty_tpl->tpl_vars['adminXPagesClass']->value;?>
">
            <div class="<?php echo $_smarty_tpl->tpl_vars['adminXPagesInnerClass']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['pagetemplate']->value != 'homepage') {?>
                <h1 class="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value == $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['hometitle']) {?> pull-left<?php }?>"><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
            <?php }
}
}
