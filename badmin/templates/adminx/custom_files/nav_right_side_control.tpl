<div class="adminx-nav-right-control-main">
    <ul class="control-bar-nav-sec">
        <li data-tab-role="default-shortcut-bar" class="control-li-bar active"><i class="fas fa-search"></i></li>
        {if $sidebar eq "home"}
            <li data-tab-role="home-page-widget" class="control-li-bar"><i class="fas fa-tachometer-alt-fast"></i></li>
        {/if}
        {if $sidebar eq "home" || $sidebar eq "clients" || $sidebar eq "orders" || $sidebar eq "billing" || $sidebar eq "support" || $sidebar eq "reports" || $sidebar eq "utilities" || $sidebar eq "logs" || $sidebar eq "addonmodules" || $sidebar eq "config"}
            <li data-tab-role="default-shortcut-links" class="control-li-bar"><i class="fas fa-arrow-square-right"></i></li>
        {/if}
        {if $adminXLicenseState eq 'active'}
            <li data-tab-role="default-color-palate" class="control-li-bar"><i class="fas fa-paint-brush"></i></li>
        {/if}
    </ul>
    <div class="control-bar-body-section">
        <div id="default-shortcut-bar" class="inner-body-ctrl active">
            {include file="$template/custom_files/search_global_section.tpl"}
            {if $sidebar eq "home"}
                <div class="sys-info-data">
                    <div class="label-sys-inf"><i class="fas fa-info-circle"></i> {$_ADMINLANG.global.systeminfo}</div>       
                    <ul class="content-padded-sysinfo">
                        <li><span class="label-info-system">{$_ADMINLANG.license.regto}</span><span class="data-info-system">{$licenseinfo.registeredname}</span></li>
                        <li><span class="label-info-system">{$_ADMINLANG.license.type}</span><span class="data-info-system">{$licenseinfo.productname}</span></li>
                        <li><span class="label-info-system">{$_ADMINLANG.license.expires}</span><span class="data-info-system">{$licenseinfo.expires}</span></li>
                        <li><span class="label-info-system">{$_ADMINLANG.global.version}</span><span class="data-info-system"> {$licenseinfo.currentversion}</span></li>
                    </ul>
                </div>
                {if $licenseinfo.updateavailable}
                    {if in_array("Update WHMCS",$admin_perms)}
                        <div class="updateAvailableList"><a href="update.php">{$_ADMINLANG.license.updateavailable}</a></div>
                    {/if}
                {/if}
            {/if}
            {include file="$template/custom_files/admin_list_global.tpl"}
        </div>
        {if $sidebar eq "home"}
            <div id="home-page-widget" class="inner-body-ctrl">
                <div class="sys-widget-data">
                    <div class="label-hm-widget"><i class="fas fa-eye-slash"></i> {lang key='home.configureWidgetDisplayTitle'}</div>
                </div>
                <div class="widget-hide-show-home open">
                    <ul id="widgetSettingsDropdownMenu" class="dropdown-menu pull-right" aria-labelledby="widgetSettings">
                        {foreach $widgets as $widget}
                            <li{if !in_array($widget->getId(), $hiddenWidgets)} class="active"{/if}>
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="display-widget"{if !in_array($widget->getId(), $hiddenWidgets)} checked="checked"{/if} data-widget="{$widget->getId()}" value="1">
                                    {$widget->getTitle()}
                                </label>
                            </li>
                        {/foreach}
                    </ul>
                </div>          
            </div>
        {/if}
        <div id="default-shortcut-links" class="inner-body-ctrl">
            {include file="$template/sidebar.tpl"}
        </div>
        {if $adminXLicenseState eq 'active'}
        <div id="default-color-palate" class="inner-body-ctrl">
            <div class="heading-title-color">
                <h3><i class="fas fa-palette"></i> {$_ADMINLANG.adminx.skinsTitle}</h3>
                <p>{$_ADMINLANG.adminx.skinsDesciption}</p>
            </div>
            <div class="color-body-section">
                <ul class="color-selection">
                    <li class="color-pallate-0 {if $adminXSettingsData.color_style_adminx && ($adminXSettingsData.color_style_adminx eq '' || $adminXSettingsData.color_style_adminx eq 'style_adminx_0')}active{/if}" data-color-pallate="style_adminx_0">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-1 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_1'}active{/if}" data-color-pallate="style_adminx_1">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-2 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_2'}active{/if}" data-color-pallate="style_adminx_2">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-3 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_3'}active{/if}" data-color-pallate="style_adminx_3">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-4 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_4'}active{/if}" data-color-pallate="style_adminx_4">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-5 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_5'}active{/if}" data-color-pallate="style_adminx_5">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-6 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_6'}active{/if}" data-color-pallate="style_adminx_6">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-7 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_7'}active{/if}" data-color-pallate="style_adminx_7">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-8 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_8'}active{/if}" data-color-pallate="style_adminx_8">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-9 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_9'}active{/if}" data-color-pallate="style_adminx_9">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-10 {if $adminXSettingsData.color_style_adminx && $adminXSettingsData.color_style_adminx eq 'style_adminx_10'}active{/if}" data-color-pallate="style_adminx_10">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {/if}
    </div>
</div>
