<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:38:13
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-account-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669758c59edf42_81394636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07cc55b5c4f6d0a4dd96d21776216115e6dc9f57' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-account-link.tpl',
      1 => 1721194688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669758c59edf42_81394636 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bg-gradient pt-60 mb-lg-5 mb-md-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading text-center mb-4">
                    <h2 class="text-white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.yourAccount'),$_smarty_tpl ) );?>
</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-4 col-lg">
                <a href="clientarea.php" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-account-1.svg" alt="icon" class="mx-auto">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.yourAccount'),$_smarty_tpl ) );?>

                </a>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <a href="clientarea.php?action=services" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-account-2.svg" alt="icon" class="mx-auto">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.manageServices'),$_smarty_tpl ) );?>

                </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value || $_smarty_tpl->tpl_vars['numberOfDomains']->value) {?>
                <div class="col-6 col-md-4 col-lg">
                    <a href="clientarea.php?action=domains" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-account-3.svg" alt="icon" class="mx-auto">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.manageDomains'),$_smarty_tpl ) );?>

                    </a>
                </div>
            <?php }?>
            <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
                <a href="supporttickets.php" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-account-4.svg" alt="icon" class="mx-auto">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.supportRequests'),$_smarty_tpl ) );?>

                </a>
            </div>
            <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
                <a href="clientarea.php?action=masspay&all=true" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-account-5.svg" alt="icon" class="mx-auto">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.makeAPayment'),$_smarty_tpl ) );?>

                </a>
            </div>
        </div>
    </div>
</section>
<?php }
}
