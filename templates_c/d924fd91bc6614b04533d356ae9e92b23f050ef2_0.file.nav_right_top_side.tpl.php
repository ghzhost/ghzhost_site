<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/nav_right_top_side.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dcb8471_05107208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd924fd91bc6614b04533d356ae9e92b23f050ef2' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/nav_right_top_side.tpl',
      1 => 1683169200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dcb8471_05107208 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="adminx-top-right-nav">
    <div class="top-left-nav-sec">
        <ul class="left-nav">
            <li class="bt visible-sidebar">
                <a href="#" onclick="return false;" class="nav-toggle-adminx" id="btnNavbarToggleAdminX" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'global.navigation'),$_smarty_tpl ) );?>
">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>
            </li>
        </ul>
        <a href="index.php" class="logo admin-logo" title="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['title'];?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['adminXSettingsData']->value) && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo'] != '') {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo'];?>
" class="adminX-logo-header" <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_width'] != '') {?>width="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_width'];?>
"<?php }?>  <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_height'] != '') {?>height="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_height'];?>
"<?php }?>>
            <?php } else { ?>
                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo.svg" class="adminX-logo-header" <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_width'] != '') {?>width="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_width'];?>
"<?php }?>  <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_height'] != '') {?>height="<?php echo $_smarty_tpl->tpl_vars['adminXSettingsData']->value['header_logo_height'];?>
"<?php }?>>
            <?php }?>
        </a>
    </div>
    <div class="top-right-nav-sec">
        <div class="intellisearchAdminX" id="intelliSearchForm">
            <form method="post" action="<?php echo routePath('admin-search-intellisearch');?>
">
                <input type="hidden" id="intelliSearchHideInactive" name="hide_inactive" value="1">
                <i class="fas fa-search loader"></i>
                <div class="input-group">
                    <input type="text" name="searchterm" class="form-control" id="inputIntelliSearchValue" placeholder="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['searchPlaceholder'];?>
">
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
            <?php if (in_array("Automation Status",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                <li class="bt automation-whmcs-btn">
                    <a href="automationstatus.php" id="Menu-Automation-Status" data-toggle="tooltip" data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['automationStatus'];?>
">
                        <?php if (!$_smarty_tpl->tpl_vars['isNewInstallation']->value && ($_smarty_tpl->tpl_vars['isCronError']->value || $_smarty_tpl->tpl_vars['isCronWarning']->value)) {?>
                            <div class="badge-container">
                                <img class="top-right-img-icon" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/automatoin_top.svg">
                                <span class="badge"><span class="fas fa-<?php if ($_smarty_tpl->tpl_vars['isCronError']->value) {?>times<?php } else { ?>exclamation<?php }?>"></span></span>
                            </div>
                        <?php } else { ?>
                            <img class="top-right-img-icon" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/automatoin_top.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['automationStatus'];?>
">
                        <?php }?>
                        <span class="visible-sidebar"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['automationStatus'];?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['showUpdateAvailable']->value) {?>
                <li class="bt update-whmcs-btn">
                    <a href="update.php" class="update-btn" data-toggle="tooltip" data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['updateavailable'];?>
">
                        <img class="top-right-img-icon" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/download_top.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['updateAvailabile'];?>
">
                        <span class="visible-sidebar"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['updateAvailabile'];?>
</span>
                    </a>
                </li>
            <?php }?>
            <li class="bt has-dropdown right-nav-bar-settings">
                <a id="Menu-Setup" href="#" onclick="return false;">
                    <img class="top-right-img-icon have-drop-down-right-nav" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/setting_top.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['config'];?>
">
                    <span class="visible-sidebar"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['config'];?>
</span>
                </a>
                <ul class="drop-icons settings-node drop-down-node">
                    <?php if ($_smarty_tpl->tpl_vars['hasSetupMenuAccess']->value) {?>
                        <li>
                            <a id="Menu-Config-Setup" href="<?php echo routePath('admin-setup-index');?>
">
                                <img class="setting-node-img" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/system-setting.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['title'];?>
">
                                <span class="node-text-content"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['title'];?>
</span>
                            </a>
                        </li>
                    <?php }?>
                    <li>
                        <a id="Menu-Config-Apps-Integrations" href="<?php echo routePath('admin-apps-index');?>
">
                            <img class="setting-node-img" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/app-integration.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['appsAndIntegrations'];?>
">
                            <span class="node-text-content"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['appsAndIntegrations'];?>
</span>
                        </a>
                    </li>
                    <?php if (in_array("Configure Administrators",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li>
                            <a id="Menu-Config-Admins" href="configadmins.php">
                                <img class="setting-node-img" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/manage-admin.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['config']['manageAdmins'];?>
">
                                <span class="node-text-content"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['config']['manageAdmins'];?>
</span>
                            </a>
                        </li>
                    <?php }?>
                    <?php if (in_array("Health and Updates",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li>
                            <a id="Menu-Config-HealthStatus" href="systemhealthandupdates.php">
                                <img class="setting-node-img" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/system-health.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['healthCheck']['menuTitle'];?>
">
                                <span class="node-text-content"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['healthCheck']['menuTitle'];?>
</span>
                            </a>
                        </li>
                    <?php }?>
                    <?php if (in_array("Configure General Settings",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li>
                            <a id="Menu-Config-SetupWizard" href="#" onclick="openSetupWizard();return false;">
                                <img class="setting-node-img" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/setup-wizard.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['setupWizard'];?>
">
                                <span class="node-text-content"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['setupWizard'];?>
</span>
                            </a>
                        </li>
                    <?php }?>
                    <?php if (in_array("View Activity Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Admin Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Module Debug Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Email Message Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View Ticket Mail Import Log",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View WHOIS Lookup Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li>
                            <a id="Menu-Config-SysLogs" href="systemactivitylog.php">
                                <img class="setting-node-img" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/system-log.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['config']['sysLogs'];?>
">
                                <span class="node-text-content"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['config']['sysLogs'];?>
</span>
                            </a>
                        </li>
                    <?php }?>
                </ul>
            </li>
            <li class="bt help has-dropdown right-nav-bar-settings">
                <a id="Menu-Help" href="#" onclick="return false;">
                    <img class="top-right-img-icon have-drop-down-right-nav" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/help-icon.svg" alt="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['title'];?>
">
                    <span class="visible-sidebar"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['title'];?>
</span>
                </a>
                <ul class="drop-left help-node drop-down-node">
                    <li><a href="https://docs.whmcs.com/<?php echo $_smarty_tpl->tpl_vars['helplink']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['docs'];?>
</a></li>
                    <li><a href="systemsupportrequest.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['techSupport'];?>
</a></li>
                    <li><a id="Menu-Help-Community_Forums" href="https://whmcs.community/?utm_source=InApp&utm_medium=Help_Menu" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['forums'];?>
</a></li>
                    <?php if (in_array("View What's New",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li><a href="javascript:openFeatureHighlights()"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['whatsNew']['menuTitle'];?>
</a></li>
                    <?php }?>
                    <?php if (in_array("Main Homepage",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li><a href="<?php echo routePath('admin-help-license');?>
"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['licenseinfo'];?>
</a></li>
                    <?php }?>
                </ul>
            </li>
            <li class="bt account has-dropdown right-nav-bar-settings">
                <a id="Menu-Account" href="#" onclick="return false;">
                    <?php $_smarty_tpl->_assignInScope('gravatarHash', '');?>
                    <?php if ((!empty(\WHMCS\User\Admin::getAuthenticatedUser()->email))) {?>
                        <?php $_smarty_tpl->_assignInScope('gravatarHash', md5(\WHMCS\User\Admin::getAuthenticatedUser()->email));?>
                    <?php }?>
                    <img src="https://www.gravatar.com/avatar/<?php echo $_smarty_tpl->tpl_vars['gravatarHash']->value;?>
?s=25&d=mp" class="profile-icon have-drop-down-right-nav" alt="Gravatar">
                    <span class="visible-sidebar"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['account'];?>
</span>
                </a>
                <ul class="slim drop-left myaccount-node drop-down-node">
                    <li><a href="myaccount.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['myaccount'];?>
</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modalMyNotes"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</a></li>
                    <li><a href="../"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['clientarea'];?>
</a></li>
                    <li><a id="Menu-Account-Logout" href="logout.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['logout'];?>
</a></li>
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
<?php }
}
