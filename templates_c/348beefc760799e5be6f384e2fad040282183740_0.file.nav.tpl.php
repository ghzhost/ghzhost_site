<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dc62228_58005630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348beefc760799e5be6f384e2fad040282183740' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/nav.tpl',
      1 => 1694810160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dc62228_58005630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ghzhost/web/production.ghzhost.com/public_html/site/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="adminx-navbar-collapse">
    <ul class="adminx-nav-list">
        <?php if (in_array("Add New Client",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Add New Order",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Create Invoice",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Manage Quotes",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Open New Ticket",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
            <li class="parent-nav bt has-dropdown home-menu-adminx" id="homePageMenuAdminx">
                <a href="#" onclick="return false;">
                    <span class="caret"></span>
                    <i class="fas fa-home"></i>
                    <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['title'];?>
</span>
                </a>
                <ul class="parent-sub-nav">
                    <?php if (in_array("Add New Client",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li><a href="clientsadd.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['addNew']['client'];?>
</a></li>
                    <?php }?>
                    <?php if (in_array("Add New Order",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li><a href="ordersadd.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['addNew']['order'];?>
</a></li>
                    <?php }?>
                    <?php if (in_array("Create Invoice",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li>
                            <a href="<?php echo routePath('admin-billing-invoice-new');?>
" class="open-modal" data-modal-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addNew.invoice'),$_smarty_tpl ) );?>
" <?php if (!empty($_smarty_tpl->tpl_vars['anyGatewaysActivated']->value)) {?>data-btn-submit-id="btnCreateInvoice" data-btn-submit-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'invoices.create'),$_smarty_tpl ) );?>
"<?php }?>>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addNew.invoice'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                    <?php }?>
                    <?php if (in_array("Manage Quotes",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li><a href="quotes.php?action=manage"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['addNew']['quote'];?>
</a></li>
                    <?php }?>
                    <?php if (in_array("Open New Ticket",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                        <li><a href="supporttickets.php?action=open"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['addNew']['ticket'];?>
</a></li>
                    <?php }?>
                </ul>
            </li>
        <?php }?>
        <li class="parent-nav has-dropdown" id="clientsPageMenuAdminx">
            <a id="Menu-Clients" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-users"></i>
                <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['title'];?>
</span>
            </a>
            <ul class="parent-sub-nav">
                <?php if (in_array("List Clients",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Clients-View_Search_Clients" href="clients.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['viewsearch'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if (in_array("List Users",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Clients-View_Search_Users" href="<?php echo routePath('admin-user-list');?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'user.manageUsers'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
                <?php if (in_array("Add New Client",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Clients-Add_New_Client" href="clientsadd.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['addnew'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if (in_array("List Services",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Clients-Products_Services" href="#" onclick="return false;">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['title'];?>

                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li>
                                <a id="Menu-Clients-Products_Services-Shared_Hosting" href="<?php echo routePath('admin-services-shared');?>
">
                                    -
                                    <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listhosting'];?>

                                </a>
                            </li>
                            <li>
                                <a id="Menu-Clients-Products_Services-Reseller_Accounts" href="<?php echo routePath('admin-services-reseller');?>
">
                                    -
                                    <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listreseller'];?>

                                </a>
                            </li>
                            <li>
                                <a id="Menu-Clients-Products_Services-VPS_Servers" href="<?php echo routePath('admin-services-server');?>
">
                                    -
                                    <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listservers'];?>

                                </a>
                            </li>
                            <li>
                                <a id="Menu-Clients-Products_Services-Other_Services" href="<?php echo routePath('admin-services-other');?>
">
                                    -
                                    <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listother'];?>

                                </a>
                            </li>
                        </ul>
                    </li>
                <?php }?>
                <?php if (in_array("List Addons",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Clients-Service_Addons" href="<?php echo routePath('admin-addons-index');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listaddons'];?>
</a>
                    </li>
                <?php }?>
                <?php if (in_array("List Domains",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Clients-Domain_Registration" href="<?php echo routePath('admin-domains-index');?>
">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['services']['listdomains'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if (in_array("View Cancellation Requests",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Clients-Cancelation_Requests" href="cancelrequests.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clients']['cancelrequests'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if (in_array("Manage Affiliates",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Clients-Manage_Affiliates" href="affiliates.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['affiliates']['manage'];?>

                        </a>
                    </li>
                <?php }?>
            </ul>
        </li>
        <li class="parent-nav has-dropdown" id="ordersPageMenuAdminx">
            <a id="Menu-Orders" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-shopping-cart"></i>
                <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['title'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['pending']) {?>
                    <span class="adminx-counter-parent bg-pending"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['pending'];?>
</span>
                <?php }?>
            </a>
            <ul class="parent-sub-nav">
                <?php if (in_array("View Orders",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Orders-List_All_Orders" href="orders.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listall'];?>

                        </a>
                    </li>
                    <li>
                        <a id="Menu-Orders-Pending_Orders" href="orders.php?status=Pending">
                            -
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listpending'];?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['pending']) {?>
                            <span class="adminx-counter-child bg-pending"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['pending'];?>
</span>
                        <?php }?>
                    </li>
                    <li>
                        <a id="Menu-Orders-Active_Orders" href="orders.php?status=Active">
                            -
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listactive'];?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['active']) {?>
                            <span class="adminx-counter-child bg-active"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['active'];?>
</span>
                        <?php }?>
                    </li>
                    <li>
                        <a id="Menu-Orders-Fraud_Orders" href="orders.php?status=Fraud">
                            -
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listfraud'];?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['fraud']) {?>
                            <span class="adminx-counter-child bg-fraud"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['fraud'];?>
</span>
                        <?php }?>
                    </li>
                    <li>
                        <a id="Menu-Orders-Cancelled_Orders" href="orders.php?status=Cancelled">
                            -
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['listcancelled'];?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['cancelled']) {?>
                            <span class="adminx-counter-child bg-cancelled"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['order']['cancelled'];?>
</span>
                        <?php }?>
                    </li>
                <?php }?>
                <?php if (in_array("Add New Order",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Orders-Add_New_Order" href="ordersadd.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['orders']['addnew'];?>

                        </a>
                    </li>
                <?php }?>
            </ul>
        </li>
        <li class="parent-nav has-dropdown" id="billingPageMenuAdminx">
            <a id="Menu-Billing" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-credit-card"></i>
                <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['title'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['overdue']) {?>
                    <span class="adminx-counter-parent bg-overdue"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['overdue'];?>
</span>
                <?php }?>
            </a>
            <ul class="parent-sub-nav">
                <?php if (in_array("List Transactions",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li>
                        <a id="Menu-Billing-Transactions_List" href="transactions.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['transactionslist'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if (in_array("List Invoices",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Billing-Invoices" href="invoices.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['title'];?>

                            <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['overdue']) {?>
                                <span class="adminx-counter-sub-child bg-overdue"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['overdue'];?>
</span>
                            <?php }?>
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li>
                                <a id="Menu-Billing-Invoices-all" href="invoices.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['invoices']['listall'];?>
</a>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Paid" href="invoices.php?status=Paid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['paid'];?>
</a>
                                <!-- uncomment this if you want to use this status 
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['paid']) {?>
                                    <span class="adminx-counter-child bg-paid"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['paid'];?>
</span>
                                <?php }?>
                                -->
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Draft" href="invoices.php?status=Draft">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['draft'];?>
</a>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Unpaid" href="invoices.php?status=Unpaid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['unpaid'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['unpaid']) {?>
                                    <span class="adminx-counter-child bg-unpaid"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['unpaid'];?>
</span>
                                <?php }?>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Overdue" href="invoices.php?status=Overdue">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['overdue'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['overdue']) {?>
                                    <span class="adminx-counter-child bg-overdue"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['overdue'];?>
</span>
                                <?php }?>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Cancelled" href="invoices.php?status=Cancelled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['cancelled'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['cancelled']) {?>
                                    <span class="adminx-counter-child bg-cancelled"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['cancelled'];?>
</span>
                                <?php }?>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Refunded" href="invoices.php?status=Refunded">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['refunded'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['refunded']) {?>
                                    <span class="adminx-counter-child bg-refunded"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['refunded'];?>
</span>
                                <?php }?>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Collections" href="invoices.php?status=Collections">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['collections'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['collections']) {?>
                                    <span class="adminx-counter-child bg-collections"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['collections'];?>
</span>
                                <?php }?>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Payment_Pending" href="invoices.php?status=Payment%20Pending">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['paymentpending'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['paymentpending']) {?>
                                    <span class="adminx-counter-child bg-paymentpending"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['invoice']['paymentpending'];?>
</span>
                                <?php }?>
                            </li>
                        </ul>
                    </li>
                <?php }?>
                <?php if (in_array("View Billable Items",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Billing-Billable_Items" href="billableitems.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['title'];?>

                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Billing-Billable_Items-All" href="billableitems.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['listall'];?>
</a></li>
                            <li><a id="Menu-Billing-Billable_Items-Uninvoiced_Items" href="billableitems.php?status=Uninvoiced">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['uninvoiced'];?>
</a></li>
                            <li><a id="Menu-Billing-Billable_Items-Recurring_Items" href="billableitems.php?status=Recurring">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['recurring'];?>
</a></li>
                            <?php if (in_array("Manage Billable Items",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Billing-Billable_Items-Add_New" href="billableitems.php?action=manage">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billableitems']['addnew'];?>
</a></li><?php }?>
                        </ul>
                    </li>
                <?php }?>
                <?php if (in_array("Manage Quotes",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Billing-Quotes" href="quotes.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['title'];?>

                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Billing-Quotes-All" href="quotes.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['listall'];?>
</a></li>
                            <li><a id="Menu-Billing-Quotes-Valid" href="quotes.php?validity=Valid">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['valid'];?>
</a></li>
                            <li><a id="Menu-Billing-Quotes-Expired" href="quotes.php?validity=Expired">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['status']['expired'];?>
</a></li>
                            <li><a id="Menu-Billing-Quotes-Create_New_Quote" href="quotes.php?action=manage">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['quotes']['createnew'];?>
</a></li>
                        </ul>
                    </li>
                <?php }?>
                <?php if (in_array("Offline Credit Card Processing",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Billing-Offline_CC_Processing" href="offlineccprocessing.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['offlinecc'];?>
</a></li>
                <?php }?>

                <?php if (in_array("List Disputes",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Billing-Disputes" href="<?php echo routePath('admin-billing-disputes-index');?>
"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['disputes']['title'];?>
</a></li>
                <?php }?>
                <?php if (in_array("View Gateway Log",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Billing-Gateway_Log" href="gatewaylog.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['billing']['gatewaylog'];?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <li class="parent-nav has-dropdown" id="supportPageMenuAdminx">
            <a id="Menu-Support" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-life-ring"></i>
                <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['title'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketAwaiting']) {?>
                    <span class="adminx-counter-parent waiting-ticket"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketAwaiting'];?>
</span>
                <?php }?>
            </a>
            <ul class="parent-sub-nav">
                <?php if (in_array("Support Center Overview",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Support-Support_Overview" href="supportcenter.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['supportoverview'];?>
</a></li>
                <?php }?>
                <?php if (in_array("List Support Tickets",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Support-Support_Tickets" href="supporttickets.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['supporttickets'];?>

                            <span class="caret"></span>
                            <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketAwaiting']) {?>
                                <span class="adminx-counter-sub-child waiting-ticket"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketAwaiting'];?>
</span>
                            <?php }?>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Support-Support_Tickets-All" href="supporttickets.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
 <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['tickets'];?>
</a></li>
                            <li>
                                <a id="Menu-Support-Support_Tickets-Flagged_Tickets" href="supporttickets.php?view=flagged">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['flagged'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketFlagged']) {?>
                                    <span class="adminx-counter-child flag-tickets"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketFlagged'];?>
</span>
                                <?php }?>
                            </li>
                            <li>
                                <a id="Menu-Support-Support_Tickets-All_Active_Tickets" href="supporttickets.php?view=active">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['allactive'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketActive']) {?>
                                    <span class="adminx-counter-child active-tickets"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketActive'];?>
</span>
                                <?php }?>
                            </li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuticketstatuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                <li>
                                    <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value,' ','_');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('tikSta', $_prefixVariable1);?>
                                    <a id="Menu-Support-Support_Tickets-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value,' ','_');?>
" href="supporttickets.php?view=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
">- <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</a>
                                    <?php if ($_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketCountStatus'][$_smarty_tpl->tpl_vars['tikSta']->value]) {?>
                                        <span class="adminx-counter-child <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value,' ','_');
$_prefixVariable2 = ob_get_clean();
echo mb_strtolower($_prefixVariable2, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['adminXSideBarStatData']->value['tickets']['adminxTicketCountStatus'][$_smarty_tpl->tpl_vars['tikSta']->value];?>
</span>
                                    <?php }?>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                <?php }?>
                <?php if (in_array("Open New Ticket",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Support-Open_New_Ticket" href="supporttickets.php?action=open"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['opennewticket'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Manage Predefined Replies",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Support-Predefined_Replies" href="supportticketpredefinedreplies.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['predefreplies'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Manage Announcements",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Support-Announcements" href="supportannouncements.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['announcements'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Manage Downloads",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Support-Downloads" href="supportdownloads.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['downloads'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Manage Knowledgebase",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Support-Knowledgebase" href="supportkb.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['knowledgebase'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Manage Network Issues",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Support-Network_Issues" href="networkissues.php">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['title'];?>

                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Support-Network_Issues-All" href="networkissues.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['viewall'];?>
 <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['title'];?>
</a></li>
                            <li><a id="Menu-Support-Network_Issues-Open" href="networkissues.php">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['open'];?>
</a></li>
                            <li><a id="Menu-Support-Network_Issues-Scheduled" href="networkissues.php?view=scheduled">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['scheduled'];?>
</a></li>
                            <li><a id="Menu-Support-Network_Issues-Resolved" href="networkissues.php?view=resolved">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['resolved'];?>
</a></li>
                            <li><a id="Menu-Support-Network_Issues-Create_New" href="networkissues.php?action=manage">- <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['networkissues']['addnew'];?>
</a></li>
                        </ul>
                    </li>
                <?php }?>
            </ul>
        </li>
        <?php if (in_array("View Reports",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
            <li class="parent-nav has-dropdown" id="reportsPageMenuAdminx">
                <a id="Menu-Reports" href="#" onclick="return false;">
                    <span class="caret"></span>
                    <i class="fas fa-chart-bar"></i>
                    <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['reports']['title'];?>
</span>
                </a>
                <ul class="parent-sub-nav">
                    <li><a id="Menu-Reports-Home" href="reports.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['reports']['title'];?>
</a></li>
                    <li><a id="Menu-Reports-Daily_Performance" href="reports.php?report=daily_performance">Daily Performance</a></li>
                    <li><a id="Menu-Reports-Income_Forecast" href="reports.php?report=income_forecast">Income Forecast</a></li>
                    <li><a id="Menu-Reports-Annual_Income_Report" href="reports.php?report=annual_income_report">Annual Income Report</a></li>
                    <li><a id="Menu-Reports-New_Customers" href="reports.php?report=new_customers">New Customers</a></li>
                    <li><a id="Menu-Reports-Ticket_Feedback_Scores" href="reports.php?report=ticket_feedback_scores">Ticket Feedback Scores</a></li>
                    <li><a id="Menu-Reports-Batch_Invoice_PDF_Export" href="reports.php?report=pdf_batch">Batch Invoice PDF Export</a></li>
                    <li><a id="Menu-Reports-More..." href="reports.php">More...</a></li>
                </ul>
            </li>
        <?php }?>
        <li class="parent-nav has-dropdown" id="utilityPageMenuAdminx">
            <a id="Menu-Utilities" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-file-alt"></i>
                <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['title'];?>
</span>
            </a>
            <ul class="parent-sub-nav">
                <?php if (in_array("Update WHMCS",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Update" href="update.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['update']['title'];?>
</a></li>
                <?php }?>
                <?php if (in_array("WHMCSConnect",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-WHMCS_Connect" href="whmcsconnect.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['whmcsConnect']['whmcsConnectName'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Automation Status",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-System-Automation_Status" href="automationstatus.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['automationStatus'];?>
</a></li>
                <?php }?>
                <?php if (in_array("View Module Queue",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Module_Queue" href="modulequeue.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['moduleQueue'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Configure Domain Pricing",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Tld_Sync" href="<?php echo routePath('admin-utilities-tools-tld-import-step-one');?>
"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['tldImport'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Mass Mail",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Email_Campaigns" href="<?php echo routePath('admin-utilities-tools-email-campaigns');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'utilities.emailCampaigns.title'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php if (in_array("Email Marketer",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Email_Marketer" href="utilitiesemailmarketer.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['emailmarketer'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Link Tracking",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Link_Tracking" href="utilitieslinktracking.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['linktracking'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Calendar",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Calendar" href="calendar.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['calendar'];?>
</a></li>
                <?php }?>
                <?php if (in_array("To-Do List",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-To-Do_List" href="todolist.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['todolist'];?>
</a></li>
                <?php }?>
                <?php if (in_array("WHOIS Lookups",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-WHOIS_Lookups" href="whois.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['whois'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Domain Resolver Checker",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Domain_Resolver" href="utilitiesresolvercheck.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['domainresolver'];?>
</a></li>
                <?php }?>
                <?php if (in_array("View Integration Code",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li><a id="Menu-Utilities-Integration_Code" href="systemintegrationcode.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['integrationcode'];?>
</a></li>
                <?php }?>
                <?php if (in_array("Automation Status",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("Database Status",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("System Cleanup Operations",$_smarty_tpl->tpl_vars['admin_perms']->value) || in_array("View PHP Info",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?>
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Utilities-System" href="#">
                            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['system'];?>

                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <?php if (in_array("Database Status",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-Database_Status" href="systemdatabase.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['dbstatus'];?>
</a></li><?php }?>
                            <?php if (in_array("System Cleanup Operations",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-System_Cleanup" href="systemcleanup.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['syscleanup'];?>
</a></li><?php }?>
                            <?php if (in_array("View PHP Info",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-PHP_Info" href="systemphpinfo.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['phpinfo'];?>
</a></li><?php }?>
                            <?php if (in_array("View PHP Info",$_smarty_tpl->tpl_vars['admin_perms']->value)) {?><li><a id="Menu-Utilities-System-PhpCompat" href="<?php echo routePath('admin-utilities-system-phpcompat');?>
"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['phpcompat'];?>
</a></li><?php }?>
                        </ul>
                    </li>
                <?php }?>
            </ul>
        </li>
        <li class="parent-nav has-dropdown"  id="addonsPageMenuAdminx">
            <a id="Menu-Addons" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-cube"></i>
                <span class="parent-nav-menu-name"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['utilities']['addonmodules'];?>
</span>
            </a>
            <ul class="parent-sub-nav">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon_modules']->value, 'displayname', false, 'module');
$_smarty_tpl->tpl_vars['displayname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['displayname']->value) {
$_smarty_tpl->tpl_vars['displayname']->do_else = false;
?>
                    <li><a id="Menu-Addons-<?php echo $_smarty_tpl->tpl_vars['displayname']->value;?>
" href="addonmodules.php?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['displayname']->value;?>
</a></li>
                <?php
}
if ($_smarty_tpl->tpl_vars['displayname']->do_else) {
?>
                    <li><a id="Menu-Addons-AppsAndIntegrations" href="<?php echo routePath('admin-apps-index');?>
"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['setup']['appsAndIntegrations'];?>
</a></li>
                    <li><a id="Menu-Addons-Marketplace-Link" class="autoLinked" href="https://marketplace.whmcs.com">Visit WHMCS Marketplace</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </li>
    </ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var navPageActiveAdminx = "<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == 'home') {?>homePageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'clients') {?>clientsPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'orders') {?>ordersPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'billing') {?>billingPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'support') {?>supportPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'reports') {?>reportsPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'utilities') {?>utilityPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'addonmodules') {?>addonsPageMenuAdminx<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'config') {?>configPageMenuAdminx<?php }?>";
    jQuery(document).ready(function(){
        jQuery("#"+navPageActiveAdminx).find("a").eq("0").trigger('click');
        adminxSettingSubNavigation();
    });
    function adminxSettingSubNavigation(){
        var adminxPageUrlGet = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        var adminxFriendlyUrl = jQuery(location).attr('pathname')+jQuery(location).attr('search');
        jQuery("ul.adminx-nav-list li a").each(function(){
            if((jQuery(this).attr("href") ==  decodeURI(adminxPageUrlGet)) || (jQuery(this).attr("href") == decodeURI(adminxFriendlyUrl))){
                if(jQuery(this).parent("li").parent("ul").hasClass("parent-sub-nav")){
                    if(!jQuery(this).parent("li").parent("ul").parent("li").hasClass("home-menu-adminx")){
                        jQuery(this).parent("li").parent("ul").parent("li").addClass("active");
                        jQuery(this).parent("li").parent("ul").addClass("nav-menu-open");
                        jQuery(this).parent("li").parent("ul").slideDown();
                        jQuery(this).parent("li").addClass("active");
                    }
                }else{
                    jQuery(this).parent("li").addClass("active");
                }
            }
        });
    }
<?php echo '</script'; ?>
><?php }
}
