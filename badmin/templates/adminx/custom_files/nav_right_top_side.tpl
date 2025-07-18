<div class="adminx-top-right-nav">
    <div class="top-left-nav-sec">
        <ul class="left-nav">
            <li class="bt visible-sidebar">
                <a href="#" onclick="return false;" class="nav-toggle-adminx" id="btnNavbarToggleAdminX" aria-label="{lang key='global.navigation'}">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>
            </li>
        </ul>
        <a href="index.php" class="logo admin-logo" title="{$_ADMINLANG.home.title}">
            {if !empty($adminXSettingsData) && $adminXSettingsData.header_logo neq ''}
                <img src="{$adminXSettingsData.header_logo}" class="adminX-logo-header" {if $adminXSettingsData.header_logo_width neq ''}width="{$adminXSettingsData.header_logo_width}"{/if}  {if $adminXSettingsData.header_logo_height neq ''}height="{$adminXSettingsData.header_logo_height}"{/if}>
            {else}
                <img src="templates/{$template}/images/logo.svg" class="adminX-logo-header" {if $adminXSettingsData.header_logo_width neq ''}width="{$adminXSettingsData.header_logo_width}"{/if}  {if $adminXSettingsData.header_logo_height neq ''}height="{$adminXSettingsData.header_logo_height}"{/if}>
            {/if}
        </a>
    </div>
    <div class="top-right-nav-sec">
        <div class="intellisearchAdminX" id="intelliSearchForm">
            <form method="post" action="{routePath('admin-search-intellisearch')}">
                <input type="hidden" id="intelliSearchHideInactive" name="hide_inactive" value="1">
                <i class="fas fa-search loader"></i>
                <div class="input-group">
                    <input type="text" name="searchterm" class="form-control" id="inputIntelliSearchValue" placeholder="{$_ADMINLANG.searchPlaceholder}">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="btnIntelliSearchClose">
                            <i class="far fa-times closer"></i>
                        </button>
                    </span>
                </div>
                <input type="hidden" id="intelliSearchExpand" name="more" value="">
            </form>
        </div>
        <ul class="right-nav">
            {if in_array("Automation Status", $admin_perms)}
                <li class="bt automation-whmcs-btn">
                    <a href="automationstatus.php" id="Menu-Automation-Status" data-toggle="tooltip" data-placement="bottom" title="{$_ADMINLANG.utilities.automationStatus}">
                        {if !$isNewInstallation && ($isCronError || $isCronWarning)}
                            <div class="badge-container">
                                <img class="top-right-img-icon" src="templates/{$template}/images/automatoin_top.svg">
                                <span class="badge"><span class="fas fa-{if $isCronError}times{else}exclamation{/if}"></span></span>
                            </div>
                        {else}
                            <img class="top-right-img-icon" src="templates/{$template}/images/automatoin_top.svg" alt="{$_ADMINLANG.utilities.automationStatus}">
                        {/if}
                        <span class="visible-sidebar">{$_ADMINLANG.utilities.automationStatus}</span>
                    </a>
                </li>
            {/if}
            {if $showUpdateAvailable}
                <li class="bt update-whmcs-btn">
                    <a href="update.php" class="update-btn" data-toggle="tooltip" data-placement="bottom" title="{$_ADMINLANG.license.updateavailable}">
                        <img class="top-right-img-icon" src="templates/{$template}/images/download_top.svg" alt="{$_ADMINLANG.global.updateAvailabile}">
                        <span class="visible-sidebar">{$_ADMINLANG.global.updateAvailabile}</span>
                    </a>
                </li>
            {/if}
            <li class="bt has-dropdown right-nav-bar-settings">
                <a id="Menu-Setup" href="#" onclick="return false;">
                    <img class="top-right-img-icon have-drop-down-right-nav" src="templates/{$template}/images/setting_top.svg" alt="{$_ADMINLANG.setup.config}">
                    <span class="visible-sidebar">{$_ADMINLANG.setup.config}</span>
                </a>
                <ul class="drop-icons settings-node drop-down-node">
                    {if $hasSetupMenuAccess}
                        <li>
                            <a id="Menu-Config-Setup" href="{routePath('admin-setup-index')}">
                                <img class="setting-node-img" src="templates/{$template}/images/system-setting.svg" alt="{$_ADMINLANG.setup.title}">
                                <span class="node-text-content">{$_ADMINLANG.setup.title}</span>
                            </a>
                        </li>
                    {/if}
                    <li>
                        <a id="Menu-Config-Apps-Integrations" href="{routePath('admin-apps-index')}">
                            <img class="setting-node-img" src="templates/{$template}/images/app-integration.svg" alt="{$_ADMINLANG.setup.appsAndIntegrations}">
                            <span class="node-text-content">{$_ADMINLANG.setup.appsAndIntegrations}</span>
                        </a>
                    </li>
                    {if in_array("Configure Administrators",$admin_perms)}
                        <li>
                            <a id="Menu-Config-Admins" href="configadmins.php">
                                <img class="setting-node-img" src="templates/{$template}/images/manage-admin.svg" alt="{$_ADMINLANG.config.manageAdmins}">
                                <span class="node-text-content">{$_ADMINLANG.config.manageAdmins}</span>
                            </a>
                        </li>
                    {/if}
                    {if in_array("Health and Updates", $admin_perms)}
                        <li>
                            <a id="Menu-Config-HealthStatus" href="systemhealthandupdates.php">
                                <img class="setting-node-img" src="templates/{$template}/images/system-health.svg" alt="{$_ADMINLANG.healthCheck.menuTitle}">
                                <span class="node-text-content">{$_ADMINLANG.healthCheck.menuTitle}</span>
                            </a>
                        </li>
                    {/if}
                    {if in_array("Configure General Settings",$admin_perms)}
                        <li>
                            <a id="Menu-Config-SetupWizard" href="#" onclick="openSetupWizard();return false;">
                                <img class="setting-node-img" src="templates/{$template}/images/setup-wizard.svg" alt="{$_ADMINLANG.help.setupWizard}">
                                <span class="node-text-content">{$_ADMINLANG.help.setupWizard}</span>
                            </a>
                        </li>
                    {/if}
                    {if in_array("View Activity Log",$admin_perms) || in_array("View Admin Log",$admin_perms) || in_array("View Module Debug Log",$admin_perms) || in_array("View Email Message Log",$admin_perms) || in_array("View Ticket Mail Import Log",$admin_perms) || in_array("View WHOIS Lookup Log",$admin_perms)}
                        <li>
                            <a id="Menu-Config-SysLogs" href="systemactivitylog.php">
                                <img class="setting-node-img" src="templates/{$template}/images/system-log.svg" alt="{$_ADMINLANG.config.sysLogs}">
                                <span class="node-text-content">{$_ADMINLANG.config.sysLogs}</span>
                            </a>
                        </li>
                    {/if}
                </ul>
            </li>
            <li class="bt help has-dropdown right-nav-bar-settings">
                <a id="Menu-Help" href="#" onclick="return false;">
                    <img class="top-right-img-icon have-drop-down-right-nav" src="templates/{$template}/images/help-icon.svg" alt="{$_ADMINLANG.help.title}">
                    <span class="visible-sidebar">{$_ADMINLANG.help.title}</span>
                </a>
                <ul class="drop-left help-node drop-down-node">
                    <li><a href="https://docs.whmcs.com/{$helplink}" target="_blank">{$_ADMINLANG.help.docs}</a></li>
                    <li><a href="systemsupportrequest.php">{$_ADMINLANG.help.techSupport}</a></li>
                    <li><a id="Menu-Help-Community_Forums" href="https://whmcs.community/?utm_source=InApp&utm_medium=Help_Menu" target="_blank">{$_ADMINLANG.help.forums}</a></li>
                    {if in_array("View What's New",$admin_perms)}
                        <li><a href="javascript:openFeatureHighlights()">{$_ADMINLANG.whatsNew.menuTitle}</a></li>
                    {/if}
                    {if in_array("Main Homepage",$admin_perms)}
                        <li><a href="{routePath('admin-help-license')}">{$_ADMINLANG.help.licenseinfo}</a></li>
                    {/if}
                </ul>
            </li>
            <li class="bt account has-dropdown right-nav-bar-settings">
                <a id="Menu-Account" href="#" onclick="return false;">
                    {assign var="gravatarHash" value=""}
                    {if (!empty(\WHMCS\User\Admin::getAuthenticatedUser()->email))}
                        {assign var="gravatarHash" value=md5(\WHMCS\User\Admin::getAuthenticatedUser()->email)}
                    {/if}
                    <img src="https://www.gravatar.com/avatar/{$gravatarHash}?s=25&d=mp" class="profile-icon have-drop-down-right-nav" alt="Gravatar">
                    <span class="visible-sidebar">{$_ADMINLANG.account}</span>
                </a>
                <ul class="slim drop-left myaccount-node drop-down-node">
                    <li><a href="myaccount.php">{$_ADMINLANG.global.myaccount}</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modalMyNotes">{$_ADMINLANG.global.mynotes}</a></li>
                    <li><a href="../">{$_ADMINLANG.global.clientarea}</a></li>
                    <li><a id="Menu-Account-Logout" href="logout.php">{$_ADMINLANG.global.logout}</a></li>
                </ul>
            </li>
            <li class="bt control-bar-settings">
                <a href="#" onclick="return false;" class="nav-toggle-adminx" id="btnControlbarToggleAdminX">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
