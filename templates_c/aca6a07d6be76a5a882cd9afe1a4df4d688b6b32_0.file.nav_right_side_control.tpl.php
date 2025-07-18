<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/nav_right_side_control.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dce6839_63642580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca6a07d6be76a5a882cd9afe1a4df4d688b6b32' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/nav_right_side_control.tpl',
      1 => 1689390000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dce6839_63642580 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="adminx-nav-right-control-main">
    <ul class="control-bar-nav-sec">
        <li data-tab-role="default-shortcut-bar" class="control-li-bar active"><i class="fas fa-search"></i></li>
        <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
            <li data-tab-role="home-page-widget" class="control-li-bar"><i class="fas fa-tachometer-alt-fast"></i></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home" || $_smarty_tpl->tpl_vars['sidebar']->value == "clients" || $_smarty_tpl->tpl_vars['sidebar']->value == "orders" || $_smarty_tpl->tpl_vars['sidebar']->value == "billing" || $_smarty_tpl->tpl_vars['sidebar']->value == "support" || $_smarty_tpl->tpl_vars['sidebar']->value == "reports" || $_smarty_tpl->tpl_vars['sidebar']->value == "utilities" || $_smarty_tpl->tpl_vars['sidebar']->value == "logs" || $_smarty_tpl->tpl_vars['sidebar']->value == "addonmodules" || $_smarty_tpl->tpl_vars['sidebar']->value == "config") {?>
            <li data-tab-role="default-shortcut-links" class="control-li-bar"><i class="fas fa-arrow-square-right"></i></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['adminXLicenseState']->value == 'active') {?>
            <li data-tab-role="default-color-palate" class="control-li-bar"><i class="fas fa-paint-brush"></i></li>
        <?php }?>
    </ul>
    <div class="control-bar-body-section">
        <div id="default-shortcut-bar" class="inner-body-ctrl active">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/custom_files/search_global_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
                <div class="sys-info-data">
                    <div class="label-sys-inf"><i class="fas fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['systeminfo'];?>
</div>       
                    <ul class="content-padded-sysinfo">
                        <li><span class="label-info-system"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['regto'];?>
</span><span class="data-info-system"><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['registeredname'];?>
</span></li>
                        <li><span class="label-info-system"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['type'];?>
</span><span class="data-info-system"><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['productname'];?>
</span></li>
                        <li><span class="label-info-system"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['expires'];?>
</span><span class="data-info-system"><?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['expires'];?>
</span></li>
                        <li><span class="label-info-system"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['version'];?>
</span><span class="data-info-system"> <?php echo $_smarty_tpl->tpl_vars['licenseinfo']->value['currentversion'];?>
</span></li>
                    </ul>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['licenseinfo']->value['updateavailable']) {?>
                    <?php if (in_array("Update WHMCS",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <div class="updateAvailableList"><a href="update.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['license']['updateavailable'];?>
</a></div>
                    <?php }?>
                <?php }?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/custom_files/admin_list_global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
            <div id="home-page-widget" class="inner-body-ctrl">
                <div class="sys-widget-data">
                    <div class="label-hm-widget"><i class="fas fa-eye-slash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'home.configureWidgetDisplayTitle'),$_smarty_tpl ) );?>
</div>
                </div>
                <div class="widget-hide-show-home open">
                    <ul id="widgetSettingsDropdownMenu" class="dropdown-menu pull-right" aria-labelledby="widgetSettings">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                            <li<?php if (!in_array($_smarty_tpl->tpl_vars['widget']->value->getId(),$_smarty_tpl->tpl_vars['hiddenWidgets']->value)) {?> class="active"<?php }?>>
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="display-widget"<?php if (!in_array($_smarty_tpl->tpl_vars['widget']->value->getId(),$_smarty_tpl->tpl_vars['hiddenWidgets']->value)) {?> checked="checked"<?php }?> data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
" value="1">
                                    <?php echo $_smarty_tpl->tpl_vars['widget']->value->getTitle();?>

                                </label>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>          
            </div>
        <?php }?>
        <div id="default-shortcut-links" class="inner-body-ctrl">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['adminXLicenseState']->value == 'active') {?>
        <div id="default-color-palate" class="inner-body-ctrl">
            <div class="heading-title-color">
                <h3><i class="fas fa-palette"></i> <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['adminx']['skinsTitle'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['adminx']['skinsDesciption'];?>
</p>
            </div>
            <div class="color-body-section">
                <ul class="color-selection">
                    <li class="color-pallate-0 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == '' || $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_0')) {?>active<?php }?>" data-color-pallate="style_adminx_0">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-1 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_1') {?>active<?php }?>" data-color-pallate="style_adminx_1">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-2 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_2') {?>active<?php }?>" data-color-pallate="style_adminx_2">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-3 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_3') {?>active<?php }?>" data-color-pallate="style_adminx_3">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-4 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_4') {?>active<?php }?>" data-color-pallate="style_adminx_4">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-5 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_5') {?>active<?php }?>" data-color-pallate="style_adminx_5">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-6 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_6') {?>active<?php }?>" data-color-pallate="style_adminx_6">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-7 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_7') {?>active<?php }?>" data-color-pallate="style_adminx_7">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-8 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_8') {?>active<?php }?>" data-color-pallate="style_adminx_8">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-9 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_9') {?>active<?php }?>" data-color-pallate="style_adminx_9">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                    <li class="color-pallate-10 <?php if ($_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] && $_smarty_tpl->tpl_vars['adminXSettingsData']->value['color_style_adminx'] == 'style_adminx_10') {?>active<?php }?>" data-color-pallate="style_adminx_10">
                        <div class="color-box">
                            <span class="light-color"></span>
                            <span class="dark-color"></span>
                            <span class="darker-color"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php }
}
