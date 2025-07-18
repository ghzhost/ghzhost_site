<?php
/* Smarty version 3.1.48, created on 2024-07-18 12:20:41
  from '/home/ghzhost/web/ghzhost.com/public_html/badmin/templates/blend/generate-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669932c94bd383_67599316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a4bcd046702c6a23596a75591d65554996bda5' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/badmin/templates/blend/generate-password.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669932c94bd383_67599316 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="#" id="frmGeneratePassword">
    <div class="modal fade" id="modalGeneratePassword">
        <div class="modal-dialog">
            <div class="modal-content panel panel-primary">
                <div class="modal-header panel-heading">
                    <button id="modalGeneratePasswordCloseSmall" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalGeneratePasswordTitle">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.title'),$_smarty_tpl ) );?>

                    </h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger w-hidden" id="generatePwLengthError">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.lengthValidationError'),$_smarty_tpl ) );?>

                    </div>
                    <div class="form-group row">
                        <label for="generatePwLength" class="col-sm-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.pwLength'),$_smarty_tpl ) );?>
</label>
                        <div class="col-sm-8">
                            <input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="generatePwOutput" class="col-sm-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.generatedPw'),$_smarty_tpl ) );?>
</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputGeneratePasswordOutput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="fas fa-plus fa-fw"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.generateNew'),$_smarty_tpl ) );?>

                            </button>
                            <button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/clippy.svg" alt="Copy to clipboard" width="15">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'copy'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'global.close'),$_smarty_tpl ) );?>

                    </button>
                    <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.copyAndInsert'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
}
