<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:32:50
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/six/includes/captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66975782a58cd8_46369301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cda5e768e76b49554f10389cb833cbc33efeb33' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/six/includes/captcha.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66975782a58cd8_46369301 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {?>
    <div class="text-center<?php if ($_smarty_tpl->tpl_vars['containerClass']->value) {
echo $_smarty_tpl->tpl_vars['containerClass']->value;
} else { ?> row<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
            <div class="domainchecker-homepage-captcha">
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
            <div id="google-recaptcha-domainchecker" class="form-group recaptcha-container"></div>
        <?php } elseif (!in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible','recaptcha'))) {?>
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <div id="default-captcha-domainchecker" class="<?php if ($_smarty_tpl->tpl_vars['filename']->value == 'domainchecker') {?>input-group input-group-box <?php }?>text-center">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"captchaverify"),$_smarty_tpl ) );?>
</p>

                    <div class="col-xs-6 captchaimage">
                        <img id="inputCaptchaImage" data-src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" align="middle" />
                    </div>

                    <div class="col-xs-6">
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control <?php if ($_smarty_tpl->tpl_vars['filename']->value == 'register') {?>pull-left<?php }?>"
                               data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
"/>
                    </div>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
            </div>
        <?php }?>
    </div>
<?php }
}
}
