<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:32:50
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/six/includes/verifyemail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66975782a62fe6_34690245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5927375f724a1376b33fc837b943ad0c203420bc' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/six/includes/verifyemail.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66975782a62fe6_34690245 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showEmailVerificationBanner']->value) {?>
    <div class="verification-banner email-verification">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-xs-push-10 col-sm-1 col-sm-push-11">
                    <button id="btnEmailVerificationClose" type="button" class="btn close" data-uri="<?php echo routePath('dismiss-email-verification');?>
"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="col-xs-10 col-xs-pull-2 col-sm-7 col-sm-pull-1 col-md-8">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>
</span>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-1">
                    <button id="btnResendVerificationEmail" class="btn btn-default btn-sm btn-block btn-resend-verify-email btn-action" data-email-sent="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailSent'];?>
" data-error-msg="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['error'];?>
" data-uri="<?php echo routePath('user-email-verification-resend');?>
">
                        <span class="loader hidden"><i class="fa fa-spinner fa-spin"></i></span>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                    </button>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
