<?php
/* Smarty version 3.1.48, created on 2024-07-18 16:05:45
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/orderforms/standard_cart/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669967891a66e3_83604409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff2dbb5e6aed7acffe22ee6296bb62692c25aa3' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/orderforms/standard_cart/complete.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
    'file:orderforms/standard_cart/includes/product-recommendations.tpl' => 1,
  ),
),false)) {
function content_669967891a66e3_83604409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="order-standard_cart">

    <div class="row">
        <div class="cart-sidebar">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="cart-body">
            <div class="header-lined">
                <h1 class="font-size-36"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfirmation'];?>
</h1>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderreceived'];?>
</p>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 offset-sm-2">
                    <div class="alert alert-info order-confirmation">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernumberis'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['ordernumber']->value;?>
</span>
                    </div>
                </div>
            </div>

            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfinalinstructions'];?>
</p>

            <?php if ($_smarty_tpl->tpl_vars['expressCheckoutInfo']->value) {?>
                <div class="alert alert-info text-center">
                    <?php echo $_smarty_tpl->tpl_vars['expressCheckoutInfo']->value;?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['expressCheckoutError']->value) {?>
                <div class="alert alert-danger text-center">
                    <?php echo $_smarty_tpl->tpl_vars['expressCheckoutError']->value;?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['invoiceid']->value && !$_smarty_tpl->tpl_vars['ispaid']->value) {?>
                <div class="alert alert-warning text-center">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordercompletebutnotpaid'];?>

                    <br /><br />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" target="_blank" class="alert-link">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicenumber'];
echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>

                    </a>
                </div>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_html']->value, 'addon_html');
$_smarty_tpl->tpl_vars['addon_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->do_else = false;
?>
                <div class="order-confirmation-addon-output">
                    <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['ispaid']->value) {?>
                <!-- Enter any HTML code which should be displayed when a user has completed checkout here -->
                <!-- Common uses of this include conversion and affiliate tracking scripts -->
            <?php }?>

            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php" class="btn btn-default">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['continueToClientArea'];?>

                    &nbsp;<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['hasRecommendations']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/includes/product-recommendations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
