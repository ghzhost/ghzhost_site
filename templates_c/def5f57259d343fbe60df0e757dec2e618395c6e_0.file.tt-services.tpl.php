<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:38:13
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669758c59e1f42_36138993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def5f57259d343fbe60df0e757dec2e618395c6e' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-services.tpl',
      1 => 1721194688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669758c59e1f42_36138993 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bg-dark ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading text-center mb-4">
                    <h2 class="text-white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientHomePanels.productsAndServices'),$_smarty_tpl ) );?>
</h2>
                </div>
            </div>
        </div>
        <div class="row row-equal-height justify-content-center">
            <?php if (!empty($_smarty_tpl->tpl_vars['productGroups']->value) || $_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                    <div class="col-lg-4 col-md-6">
                        <div class="tt-service-single mb-4">
                            <div class="tt-service-info">
                                <h3 class="h5 text-white mb-3">
                                    <?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>

                                </h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->tagline;?>
</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->getRoutePath();?>
" class="tt-read-more">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'browseProducts'),$_smarty_tpl ) );?>
 <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
</section>
<?php }
}
