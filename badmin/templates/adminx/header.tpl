<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="{$charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="referrer" content="same-origin">
    <title>WHMCS - {$pagetitle}</title>
    {if !empty($adminXSettingsData) && $adminXSettingsData.fav_icon neq ''}
        <link rel="shortcut icon" href="{$adminXSettingsData.fav_icon}" type="image/x-icon">
        <link rel="icon" type="image/x-icon" href="{$adminXSettingsData.fav_icon}">
    {else}
        <link rel="shortcut icon" href="templates/{$template}/images/favicon.ico" type="image/x-icon">
        <link rel="icon" type="image/x-icon" href="templates/{$template}/images/favicon.ico">
    {/if}
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link href="templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet" />
    <link href="templates/{$template}/css/theme.min.css?v={$versionHash}" rel="stylesheet"/>
    <link href="templates/{$template}/css/adminx.css?v={$versionHash}" rel="stylesheet" />
    <link href="templates/{$template}/css/adminx_responsive.css?v={$versionHash}" rel="stylesheet" />
    <link href="{\WHMCS\Utility\Environment\WebHelper::getBaseUrl()}/assets/css/fontawesome-all.min.css" rel="stylesheet" />
    {if $_ADMINLANG.locale == "ar_AR" || $_ADMINLANG.locale == "fa_IR" || $_ADMINLANG.locale == "he_IL"}
        <link href="templates/{$template}/css/rtl.bootstrap.min.css?v={$versionHash}" rel="stylesheet" />
        <link href="templates/{$template}/css/adminx_rtl.css?v={$versionHash}" rel="stylesheet" />
        <link href="templates/{$template}/css/adminx_rtl_responsive.css?v={$versionHash}" rel="stylesheet" />
    {/if}
    <link href="templates/{$template}/css/adminx_colors.css?v={$versionHash}" rel="stylesheet" />
    {if $adminXOverrideCssState eq 'active'}
        <link href="templates/{$template}/css/adminx_overrides.css?v={$versionHash}" rel="stylesheet" /> 
    {/if}
    <script type="text/javascript" src="templates/{$template}/js/vendor.min.js?v={$versionHash}"></script>
    <script type="text/javascript" src="templates/{$template}/js/scripts.min.js?v={$versionHash}"></script>
    <script type="text/javascript" src="templates/{$template}/js/adminx.js"></script>
    <script>
        var datepickerformat = "{$datepickerformat}",
            csrfToken="{$csrfToken}",
            adminBaseRoutePath = "{\WHMCS\Admin\AdminServiceProvider::getAdminRouteBase()}",
            whmcsBaseUrl = "{\WHMCS\Utility\Environment\WebHelper::getBaseUrl()}",
            adminxTemplateImageName = "{\WHMCS\Utility\Environment\WebHelper::getBaseUrl()}{\WHMCS\Admin\AdminServiceProvider::getAdminRouteBase()}/templates/{$template}/images/",
            adminxTemplateName = "templates/{$template}/";

        {if $jquerycode}
            $(document).ready(function(){ldelim}
                {$jquerycode}
            {rdelim});
        {/if}
        {if $jscode}
            {$jscode}
        {/if}
    </script>
    {$headoutput}
</head>
<body class="{if empty($sidebar)}no-sidebar{/if}{if !empty($globalAdminWarningMsg)} has-warning-banner{/if} control-bar-collapse {if !empty($adminXSettingsData) && $adminXSettingsData.enable_sticky_header eq 'on'}adminxHeaderSticky{/if}{if $_ADMINLANG.locale == 'ar_AR' || $_ADMINLANG.locale == 'fa_IR' || $_ADMINLANG.locale == 'he_IL'} adminx-rtl-view{/if} {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx neq ''}{$adminXSettingsData.color_style_adminx}{else}style_adminx_0{/if}" data-phone-cc-input="{if !empty($phoneNumberInputStyle)}{$phoneNumberInputStyle}{/if}">
    <!-- wrapper start -->
    <div class="adminx-wrapper">
    {$headeroutput}
    <div class="alert alert-warning global-admin-warning">
        {$globalAdminWarningMsg}
    </div>
    <aside class="side-navigation-admin-x">
        {include file="$template/nav.tpl"}
    </aside>
    {include file="$template/custom_files/nav_right_top_side.tpl"}
    <div class="{$contentAreaClasses} adminx-main-section{if $pagetemplate eq 'homepage'} adminx-home-page{/if} {if $adminXOnlyPagesNameClass eq 'addonmodules'} addonModulesSection{/if}" id="contentarea">
        {if $pagetemplate eq 'homepage'}
            <div class="home-page-static-widget-upper">
                {foreach $staticWidgets as $widget}
                    <div id="panel{$widget->getId()}" class="dashboard-panel-static-item dashboard-panel-item-columns-{$widget->getColumnSize()}{if in_array($widget->getId(), $hiddenWidgets)} hidden{/if}">
                        {if $widget->showWrapper()}
                        <div class="panel panel-default widget-{$widget->getId()|strtolower}" data-widget="{$widget->getId()}">
                            <div class="panel-heading">
                                <div class="widget-tools">
                                    <a href="#" class="widget-refresh"><i class="fas fa-sync"></i></a>
                                    <a href="#" class="widget-minimise"><i class="fas fa-chevron-up"></i></a>
                                    <a href="#" class="widget-hide"><i class="fas fa-times"></i></a>
                                </div>
                                <h3 class="panel-title">{$widget->getTitle()}</h3>
                            </div>
                            <div class="panel-body">
                        {/if}
                        {$widget->render()}
                        {if $widget->showWrapper()}
                                </div>
                            </div>
                        {/if}
                    </div>
                {/foreach}
            </div>
        {/if}
        <div class="adminx-inner-section {$adminXPagesClass}">
            <div class="{$adminXPagesInnerClass}">
            {if $pagetemplate neq 'homepage'}
                <h1 class="{if $pagetitle == $_ADMINLANG.global.hometitle} pull-left{/if}">{$pagetitle}</h1>
            {/if}