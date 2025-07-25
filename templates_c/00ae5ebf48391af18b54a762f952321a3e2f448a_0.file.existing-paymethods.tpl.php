<?php
/* Smarty version 3.1.48, created on 2024-07-18 16:05:03
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/orderforms/standard_cart/includes/existing-paymethods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6699675fd0c322_33972701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ae5ebf48391af18b54a762f952321a3e2f448a' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/orderforms/standard_cart/includes/existing-paymethods.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699675fd0c322_33972701 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['selectedAccountId']->value === $_smarty_tpl->tpl_vars['client']->value->id) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value->payMethods->validateGateways()->sortByExpiryDate(), 'payMethod');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('payMethodExpired', 0);?>
        <?php $_smarty_tpl->_assignInScope('expiryDate', '');?>
        <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isCreditCard()) {?>
            <?php if (($_smarty_tpl->tpl_vars['payMethod']->value->payment->isExpired())) {?>
                <?php $_smarty_tpl->_assignInScope('payMethodExpired', 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->payment->getExpiryDate()) {?>
                <?php $_smarty_tpl->_assignInScope('expiryDate', $_smarty_tpl->tpl_vars['payMethod']->value->payment->getExpiryDate()->format('m/Y'));?>
            <?php }?>
        <?php }?>

        <div class="paymethod-info radio-inline" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <input type="radio"
                   name="ccinfo"
                   class="existing-card"
                   <?php if ($_smarty_tpl->tpl_vars['payMethodExpired']->value) {?>disabled<?php }?>
                   data-payment-type="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getType();?>
"
                   data-payment-gateway="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->gateway_name;?>
"
                   data-order-preference="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->order_preference;?>
"
                   value="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
        </div>

        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <i class="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getFontAwesomeIcon();?>
"></i>
        </div>
        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isCreditCard() || $_smarty_tpl->tpl_vars['payMethod']->value->isRemoteBankAccount()) {?>
                <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName();?>

            <?php } else { ?>
                <span class="type">
                <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getAccountType();?>

            </span>
                <?php echo substr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getAccountNumber(),-4);?>

            <?php }?>
        </div>
        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getDescription();?>

        </div>
        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <?php echo $_smarty_tpl->tpl_vars['expiryDate']->value;
if ($_smarty_tpl->tpl_vars['payMethodExpired']->value) {?><br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaexpired'];?>
</small><?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
