<div class="adminx-navbar-collapse">
    <ul class="adminx-nav-list">
        {if in_array("Add New Client", $admin_perms) || in_array("Add New Order", $admin_perms) || in_array("Create Invoice", $admin_perms) || in_array("Manage Quotes", $admin_perms) || in_array("Open New Ticket", $admin_perms)}
            <li class="parent-nav bt has-dropdown home-menu-adminx" id="homePageMenuAdminx">
                <a href="#" onclick="return false;">
                    <span class="caret"></span>
                    <i class="fas fa-home"></i>
                    <span class="parent-nav-menu-name">{$_ADMINLANG.home.title}</span>
                </a>
                <ul class="parent-sub-nav">
                    {if in_array("Add New Client", $admin_perms)}
                        <li><a href="clientsadd.php">{$_ADMINLANG.addNew.client}</a></li>
                    {/if}
                    {if in_array("Add New Order", $admin_perms)}
                        <li><a href="ordersadd.php">{$_ADMINLANG.addNew.order}</a></li>
                    {/if}
                    {if in_array("Create Invoice", $admin_perms)}
                        <li>
                            <a href="{routePath('admin-billing-invoice-new')}" class="open-modal" data-modal-title="{lang key='addNew.invoice'}" {if !empty($anyGatewaysActivated)}data-btn-submit-id="btnCreateInvoice" data-btn-submit-label="{lang key='invoices.create'}"{/if}>
                                {lang key='addNew.invoice'}
                            </a>
                        </li>
                    {/if}
                    {if in_array("Manage Quotes", $admin_perms)}
                        <li><a href="quotes.php?action=manage">{$_ADMINLANG.addNew.quote}</a></li>
                    {/if}
                    {if in_array("Open New Ticket", $admin_perms)}
                        <li><a href="supporttickets.php?action=open">{$_ADMINLANG.addNew.ticket}</a></li>
                    {/if}
                </ul>
            </li>
        {/if}
        <li class="parent-nav has-dropdown" id="clientsPageMenuAdminx">
            <a id="Menu-Clients" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-users"></i>
                <span class="parent-nav-menu-name">{$_ADMINLANG.clients.title}</span>
            </a>
            <ul class="parent-sub-nav">
                {if in_array("List Clients",$admin_perms)}
                    <li>
                        <a id="Menu-Clients-View_Search_Clients" href="clients.php">
                            {$_ADMINLANG.clients.viewsearch}
                        </a>
                    </li>
                {/if}
                {if in_array("List Users", $admin_perms)}
                    <li>
                        <a id="Menu-Clients-View_Search_Users" href="{routePath('admin-user-list')}">
                            {lang key='user.manageUsers'}
                        </a>
                    </li>
                {/if}
                {if in_array("Add New Client",$admin_perms)}
                    <li>
                        <a id="Menu-Clients-Add_New_Client" href="clientsadd.php">
                            {$_ADMINLANG.clients.addnew}
                        </a>
                    </li>
                {/if}
                {if in_array("List Services",$admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Clients-Products_Services" href="#" onclick="return false;">
                            {$_ADMINLANG.services.title}
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li>
                                <a id="Menu-Clients-Products_Services-Shared_Hosting" href="{routePath('admin-services-shared')}">
                                    -
                                    {$_ADMINLANG.services.listhosting}
                                </a>
                            </li>
                            <li>
                                <a id="Menu-Clients-Products_Services-Reseller_Accounts" href="{routePath('admin-services-reseller')}">
                                    -
                                    {$_ADMINLANG.services.listreseller}
                                </a>
                            </li>
                            <li>
                                <a id="Menu-Clients-Products_Services-VPS_Servers" href="{routePath('admin-services-server')}">
                                    -
                                    {$_ADMINLANG.services.listservers}
                                </a>
                            </li>
                            <li>
                                <a id="Menu-Clients-Products_Services-Other_Services" href="{routePath('admin-services-other')}">
                                    -
                                    {$_ADMINLANG.services.listother}
                                </a>
                            </li>
                        </ul>
                    </li>
                {/if}
                {if in_array("List Addons",$admin_perms)}
                    <li><a id="Menu-Clients-Service_Addons" href="{routePath('admin-addons-index')}">
                        {$_ADMINLANG.services.listaddons}</a>
                    </li>
                {/if}
                {if in_array("List Domains",$admin_perms)}
                    <li>
                        <a id="Menu-Clients-Domain_Registration" href="{routePath('admin-domains-index')}">
                            {$_ADMINLANG.services.listdomains}
                        </a>
                    </li>
                {/if}
                {if in_array("View Cancellation Requests",$admin_perms)}
                    <li>
                        <a id="Menu-Clients-Cancelation_Requests" href="cancelrequests.php">
                            {$_ADMINLANG.clients.cancelrequests}
                        </a>
                    </li>
                {/if}
                {if in_array("Manage Affiliates",$admin_perms)}
                    <li>
                        <a id="Menu-Clients-Manage_Affiliates" href="affiliates.php">
                            {$_ADMINLANG.affiliates.manage}
                        </a>
                    </li>
                {/if}
            </ul>
        </li>
        <li class="parent-nav has-dropdown" id="ordersPageMenuAdminx">
            <a id="Menu-Orders" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-shopping-cart"></i>
                <span class="parent-nav-menu-name">{$_ADMINLANG.orders.title}</span>
                {if $adminXSideBarStatData.order.pending}
                    <span class="adminx-counter-parent bg-pending">{$adminXSideBarStatData.order.pending}</span>
                {/if}
            </a>
            <ul class="parent-sub-nav">
                {if in_array("View Orders",$admin_perms)}
                    <li>
                        <a id="Menu-Orders-List_All_Orders" href="orders.php">
                            {$_ADMINLANG.orders.listall}
                        </a>
                    </li>
                    <li>
                        <a id="Menu-Orders-Pending_Orders" href="orders.php?status=Pending">
                            -
                            {$_ADMINLANG.orders.listpending}
                        </a>
                        {if $adminXSideBarStatData.order.pending}
                            <span class="adminx-counter-child bg-pending">{$adminXSideBarStatData.order.pending}</span>
                        {/if}
                    </li>
                    <li>
                        <a id="Menu-Orders-Active_Orders" href="orders.php?status=Active">
                            -
                            {$_ADMINLANG.orders.listactive}
                        </a>
                        {if $adminXSideBarStatData.order.active}
                            <span class="adminx-counter-child bg-active">{$adminXSideBarStatData.order.active}</span>
                        {/if}
                    </li>
                    <li>
                        <a id="Menu-Orders-Fraud_Orders" href="orders.php?status=Fraud">
                            -
                            {$_ADMINLANG.orders.listfraud}
                        </a>
                        {if $adminXSideBarStatData.order.fraud}
                            <span class="adminx-counter-child bg-fraud">{$adminXSideBarStatData.order.fraud}</span>
                        {/if}
                    </li>
                    <li>
                        <a id="Menu-Orders-Cancelled_Orders" href="orders.php?status=Cancelled">
                            -
                            {$_ADMINLANG.orders.listcancelled}
                        </a>
                        {if $adminXSideBarStatData.order.cancelled}
                            <span class="adminx-counter-child bg-cancelled">{$adminXSideBarStatData.order.cancelled}</span>
                        {/if}
                    </li>
                {/if}
                {if in_array("Add New Order",$admin_perms)}
                    <li>
                        <a id="Menu-Orders-Add_New_Order" href="ordersadd.php">
                            {$_ADMINLANG.orders.addnew}
                        </a>
                    </li>
                {/if}
            </ul>
        </li>
        <li class="parent-nav has-dropdown" id="billingPageMenuAdminx">
            <a id="Menu-Billing" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-credit-card"></i>
                <span class="parent-nav-menu-name">{$_ADMINLANG.billing.title}</span>
                {if $adminXSideBarStatData.invoice.overdue}
                    <span class="adminx-counter-parent bg-overdue">{$adminXSideBarStatData.invoice.overdue}</span>
                {/if}
            </a>
            <ul class="parent-sub-nav">
                {if in_array("List Transactions",$admin_perms)}
                    <li>
                        <a id="Menu-Billing-Transactions_List" href="transactions.php">
                            {$_ADMINLANG.billing.transactionslist}
                        </a>
                    </li>
                {/if}
                {if in_array("List Invoices",$admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Billing-Invoices" href="invoices.php">
                            {$_ADMINLANG.invoices.title}
                            {if $adminXSideBarStatData.invoice.overdue}
                                <span class="adminx-counter-sub-child bg-overdue">{$adminXSideBarStatData.invoice.overdue}</span>
                            {/if}
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li>
                                <a id="Menu-Billing-Invoices-all" href="invoices.php">{$_ADMINLANG.invoices.listall}</a>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Paid" href="invoices.php?status=Paid">- {$_ADMINLANG.status.paid}</a>
                                <!-- uncomment this if you want to use this status 
                                {if $adminXSideBarStatData.invoice.paid}
                                    <span class="adminx-counter-child bg-paid">{$adminXSideBarStatData.invoice.paid}</span>
                                {/if}
                                -->
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Draft" href="invoices.php?status=Draft">- {$_ADMINLANG.status.draft}</a>
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Unpaid" href="invoices.php?status=Unpaid">- {$_ADMINLANG.status.unpaid}</a>
                                {if $adminXSideBarStatData.invoice.unpaid}
                                    <span class="adminx-counter-child bg-unpaid">{$adminXSideBarStatData.invoice.unpaid}</span>
                                {/if}
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Overdue" href="invoices.php?status=Overdue">- {$_ADMINLANG.status.overdue}</a>
                                {if $adminXSideBarStatData.invoice.overdue}
                                    <span class="adminx-counter-child bg-overdue">{$adminXSideBarStatData.invoice.overdue}</span>
                                {/if}
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Cancelled" href="invoices.php?status=Cancelled">- {$_ADMINLANG.status.cancelled}</a>
                                {if $adminXSideBarStatData.invoice.cancelled}
                                    <span class="adminx-counter-child bg-cancelled">{$adminXSideBarStatData.invoice.cancelled}</span>
                                {/if}
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Refunded" href="invoices.php?status=Refunded">- {$_ADMINLANG.status.refunded}</a>
                                {if $adminXSideBarStatData.invoice.refunded}
                                    <span class="adminx-counter-child bg-refunded">{$adminXSideBarStatData.invoice.refunded}</span>
                                {/if}
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Collections" href="invoices.php?status=Collections">- {$_ADMINLANG.status.collections}</a>
                                {if $adminXSideBarStatData.invoice.collections}
                                    <span class="adminx-counter-child bg-collections">{$adminXSideBarStatData.invoice.collections}</span>
                                {/if}
                            </li>
                            <li>
                                <a id="Menu-Billing-Invoices-Payment_Pending" href="invoices.php?status=Payment%20Pending">- {$_ADMINLANG.status.paymentpending}</a>
                                {if $adminXSideBarStatData.invoice.paymentpending}
                                    <span class="adminx-counter-child bg-paymentpending">{$adminXSideBarStatData.invoice.paymentpending}</span>
                                {/if}
                            </li>
                        </ul>
                    </li>
                {/if}
                {if in_array("View Billable Items",$admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Billing-Billable_Items" href="billableitems.php">
                            {$_ADMINLANG.billableitems.title}
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Billing-Billable_Items-All" href="billableitems.php">{$_ADMINLANG.billableitems.listall}</a></li>
                            <li><a id="Menu-Billing-Billable_Items-Uninvoiced_Items" href="billableitems.php?status=Uninvoiced">- {$_ADMINLANG.billableitems.uninvoiced}</a></li>
                            <li><a id="Menu-Billing-Billable_Items-Recurring_Items" href="billableitems.php?status=Recurring">- {$_ADMINLANG.billableitems.recurring}</a></li>
                            {if in_array("Manage Billable Items",$admin_perms)}<li><a id="Menu-Billing-Billable_Items-Add_New" href="billableitems.php?action=manage">- {$_ADMINLANG.billableitems.addnew}</a></li>{/if}
                        </ul>
                    </li>
                {/if}
                {if in_array("Manage Quotes",$admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Billing-Quotes" href="quotes.php">
                            {$_ADMINLANG.quotes.title}
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Billing-Quotes-All" href="quotes.php">{$_ADMINLANG.quotes.listall}</a></li>
                            <li><a id="Menu-Billing-Quotes-Valid" href="quotes.php?validity=Valid">- {$_ADMINLANG.status.valid}</a></li>
                            <li><a id="Menu-Billing-Quotes-Expired" href="quotes.php?validity=Expired">- {$_ADMINLANG.status.expired}</a></li>
                            <li><a id="Menu-Billing-Quotes-Create_New_Quote" href="quotes.php?action=manage">- {$_ADMINLANG.quotes.createnew}</a></li>
                        </ul>
                    </li>
                {/if}
                {if in_array("Offline Credit Card Processing",$admin_perms)}
                    <li><a id="Menu-Billing-Offline_CC_Processing" href="offlineccprocessing.php">{$_ADMINLANG.billing.offlinecc}</a></li>
                {/if}

                {if in_array("List Disputes",$admin_perms)}
                    <li><a id="Menu-Billing-Disputes" href="{routePath('admin-billing-disputes-index')}">{$_ADMINLANG.disputes.title}</a></li>
                {/if}
                {if in_array("View Gateway Log",$admin_perms)}
                    <li><a id="Menu-Billing-Gateway_Log" href="gatewaylog.php">{$_ADMINLANG.billing.gatewaylog}</a></li>
                {/if}
            </ul>
        </li>
        <li class="parent-nav has-dropdown" id="supportPageMenuAdminx">
            <a id="Menu-Support" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-life-ring"></i>
                <span class="parent-nav-menu-name">{$_ADMINLANG.support.title}</span>
                {if $adminXSideBarStatData.tickets.adminxTicketAwaiting}
                    <span class="adminx-counter-parent waiting-ticket">{$adminXSideBarStatData.tickets.adminxTicketAwaiting}</span>
                {/if}
            </a>
            <ul class="parent-sub-nav">
                {if in_array("Support Center Overview",$admin_perms)}
                    <li><a id="Menu-Support-Support_Overview" href="supportcenter.php">{$_ADMINLANG.support.supportoverview}</a></li>
                {/if}
                {if in_array("List Support Tickets",$admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Support-Support_Tickets" href="supporttickets.php">
                            {$_ADMINLANG.support.supporttickets}
                            <span class="caret"></span>
                            {if $adminXSideBarStatData.tickets.adminxTicketAwaiting}
                                <span class="adminx-counter-sub-child waiting-ticket">{$adminXSideBarStatData.tickets.adminxTicketAwaiting}</span>
                            {/if}
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Support-Support_Tickets-All" href="supporttickets.php">{$_ADMINLANG.home.viewall} {$_ADMINLANG.support.tickets}</a></li>
                            <li>
                                <a id="Menu-Support-Support_Tickets-Flagged_Tickets" href="supporttickets.php?view=flagged">- {$_ADMINLANG.support.flagged}</a>
                                {if $adminXSideBarStatData.tickets.adminxTicketFlagged}
                                    <span class="adminx-counter-child flag-tickets">{$adminXSideBarStatData.tickets.adminxTicketFlagged}</span>
                                {/if}
                            </li>
                            <li>
                                <a id="Menu-Support-Support_Tickets-All_Active_Tickets" href="supporttickets.php?view=active">- {$_ADMINLANG.support.allactive}</a>
                                {if $adminXSideBarStatData.tickets.adminxTicketActive}
                                    <span class="adminx-counter-child active-tickets">{$adminXSideBarStatData.tickets.adminxTicketActive}</span>
                                {/if}
                            </li>
                            {foreach $menuticketstatuses as $status}
                                <li>
                                    {assign var=tikSta value={$status|replace:' ':'_'}}
                                    <a id="Menu-Support-Support_Tickets-{$status|replace:' ':'_'}" href="supporttickets.php?view={$status}">- {$status}</a>
                                    {if $adminXSideBarStatData.tickets.adminxTicketCountStatus[$tikSta]}
                                        <span class="adminx-counter-child {{$status|replace:' ':'_'}|lower}">{$adminXSideBarStatData.tickets.adminxTicketCountStatus[$tikSta]}</span>
                                    {/if}
                                </li>
                            {/foreach}
                        </ul>
                    </li>
                {/if}
                {if in_array("Open New Ticket",$admin_perms)}
                    <li><a id="Menu-Support-Open_New_Ticket" href="supporttickets.php?action=open">{$_ADMINLANG.support.opennewticket}</a></li>
                {/if}
                {if in_array("Manage Predefined Replies",$admin_perms)}
                    <li><a id="Menu-Support-Predefined_Replies" href="supportticketpredefinedreplies.php">{$_ADMINLANG.support.predefreplies}</a></li>
                {/if}
                {if in_array("Manage Announcements",$admin_perms)}
                    <li><a id="Menu-Support-Announcements" href="supportannouncements.php">{$_ADMINLANG.support.announcements}</a></li>
                {/if}
                {if in_array("Manage Downloads",$admin_perms)}
                    <li><a id="Menu-Support-Downloads" href="supportdownloads.php">{$_ADMINLANG.support.downloads}</a></li>
                {/if}
                {if in_array("Manage Knowledgebase",$admin_perms)}
                    <li><a id="Menu-Support-Knowledgebase" href="supportkb.php">{$_ADMINLANG.support.knowledgebase}</a></li>
                {/if}
                {if in_array("Manage Network Issues",$admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Support-Network_Issues" href="networkissues.php">
                            {$_ADMINLANG.networkissues.title}
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            <li><a id="Menu-Support-Network_Issues-All" href="networkissues.php">{$_ADMINLANG.home.viewall} {$_ADMINLANG.networkissues.title}</a></li>
                            <li><a id="Menu-Support-Network_Issues-Open" href="networkissues.php">- {$_ADMINLANG.networkissues.open}</a></li>
                            <li><a id="Menu-Support-Network_Issues-Scheduled" href="networkissues.php?view=scheduled">- {$_ADMINLANG.networkissues.scheduled}</a></li>
                            <li><a id="Menu-Support-Network_Issues-Resolved" href="networkissues.php?view=resolved">- {$_ADMINLANG.networkissues.resolved}</a></li>
                            <li><a id="Menu-Support-Network_Issues-Create_New" href="networkissues.php?action=manage">- {$_ADMINLANG.networkissues.addnew}</a></li>
                        </ul>
                    </li>
                {/if}
            </ul>
        </li>
        {if in_array("View Reports",$admin_perms)}
            <li class="parent-nav has-dropdown" id="reportsPageMenuAdminx">
                <a id="Menu-Reports" href="#" onclick="return false;">
                    <span class="caret"></span>
                    <i class="fas fa-chart-bar"></i>
                    <span class="parent-nav-menu-name">{$_ADMINLANG.reports.title}</span>
                </a>
                <ul class="parent-sub-nav">
                    <li><a id="Menu-Reports-Home" href="reports.php">{$_ADMINLANG.reports.title}</a></li>
                    <li><a id="Menu-Reports-Daily_Performance" href="reports.php?report=daily_performance">Daily Performance</a></li>
                    <li><a id="Menu-Reports-Income_Forecast" href="reports.php?report=income_forecast">Income Forecast</a></li>
                    <li><a id="Menu-Reports-Annual_Income_Report" href="reports.php?report=annual_income_report">Annual Income Report</a></li>
                    <li><a id="Menu-Reports-New_Customers" href="reports.php?report=new_customers">New Customers</a></li>
                    <li><a id="Menu-Reports-Ticket_Feedback_Scores" href="reports.php?report=ticket_feedback_scores">Ticket Feedback Scores</a></li>
                    <li><a id="Menu-Reports-Batch_Invoice_PDF_Export" href="reports.php?report=pdf_batch">Batch Invoice PDF Export</a></li>
                    <li><a id="Menu-Reports-More..." href="reports.php">More...</a></li>
                </ul>
            </li>
        {/if}
        <li class="parent-nav has-dropdown" id="utilityPageMenuAdminx">
            <a id="Menu-Utilities" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-file-alt"></i>
                <span class="parent-nav-menu-name">{$_ADMINLANG.utilities.title}</span>
            </a>
            <ul class="parent-sub-nav">
                {if in_array("Update WHMCS",$admin_perms)}
                    <li><a id="Menu-Utilities-Update" href="update.php">{$_ADMINLANG.update.title}</a></li>
                {/if}
                {if in_array("WHMCSConnect",$admin_perms)}
                    <li><a id="Menu-Utilities-WHMCS_Connect" href="whmcsconnect.php">{$_ADMINLANG.whmcsConnect.whmcsConnectName}</a></li>
                {/if}
                {if in_array("Automation Status", $admin_perms)}
                    <li><a id="Menu-Utilities-System-Automation_Status" href="automationstatus.php">{$_ADMINLANG.utilities.automationStatus}</a></li>
                {/if}
                {if in_array("View Module Queue", $admin_perms)}
                    <li><a id="Menu-Utilities-Module_Queue" href="modulequeue.php">{$_ADMINLANG.utilities.moduleQueue}</a></li>
                {/if}
                {if in_array("Configure Domain Pricing",$admin_perms)}
                    <li><a id="Menu-Utilities-Tld_Sync" href="{routePath('admin-utilities-tools-tld-import-step-one')}">{$_ADMINLANG.utilities.tldImport}</a></li>
                {/if}
                {if in_array("Mass Mail",$admin_perms)}
                    <li><a id="Menu-Utilities-Email_Campaigns" href="{routePath('admin-utilities-tools-email-campaigns')}">{lang key='utilities.emailCampaigns.title'}</a></li>
                {/if}
                {if in_array("Email Marketer",$admin_perms)}
                    <li><a id="Menu-Utilities-Email_Marketer" href="utilitiesemailmarketer.php">{$_ADMINLANG.utilities.emailmarketer}</a></li>
                {/if}
                {if in_array("Link Tracking",$admin_perms)}
                    <li><a id="Menu-Utilities-Link_Tracking" href="utilitieslinktracking.php">{$_ADMINLANG.utilities.linktracking}</a></li>
                {/if}
                {if in_array("Calendar",$admin_perms)}
                    <li><a id="Menu-Utilities-Calendar" href="calendar.php">{$_ADMINLANG.utilities.calendar}</a></li>
                {/if}
                {if in_array("To-Do List",$admin_perms)}
                    <li><a id="Menu-Utilities-To-Do_List" href="todolist.php">{$_ADMINLANG.utilities.todolist}</a></li>
                {/if}
                {if in_array("WHOIS Lookups",$admin_perms)}
                    <li><a id="Menu-Utilities-WHOIS_Lookups" href="whois.php">{$_ADMINLANG.utilities.whois}</a></li>
                {/if}
                {if in_array("Domain Resolver Checker",$admin_perms)}
                    <li><a id="Menu-Utilities-Domain_Resolver" href="utilitiesresolvercheck.php">{$_ADMINLANG.utilities.domainresolver}</a></li>
                {/if}
                {if in_array("View Integration Code",$admin_perms)}
                    <li><a id="Menu-Utilities-Integration_Code" href="systemintegrationcode.php">{$_ADMINLANG.utilities.integrationcode}</a></li>
                {/if}
                {if in_array("Automation Status", $admin_perms) || in_array("Database Status", $admin_perms) || in_array("System Cleanup Operations", $admin_perms) || in_array("View PHP Info", $admin_perms)}
                    <li class="has-dropdown second-level-menu">
                        <a id="Menu-Utilities-System" href="#">
                            {$_ADMINLANG.utilities.system}
                            <span class="caret"></span>
                        </a>
                        <ul class="parent-sub-nav">
                            {if in_array("Database Status",$admin_perms)}<li><a id="Menu-Utilities-System-Database_Status" href="systemdatabase.php">{$_ADMINLANG.utilities.dbstatus}</a></li>{/if}
                            {if in_array("System Cleanup Operations",$admin_perms)}<li><a id="Menu-Utilities-System-System_Cleanup" href="systemcleanup.php">{$_ADMINLANG.utilities.syscleanup}</a></li>{/if}
                            {if in_array("View PHP Info",$admin_perms)}<li><a id="Menu-Utilities-System-PHP_Info" href="systemphpinfo.php">{$_ADMINLANG.utilities.phpinfo}</a></li>{/if}
                            {if in_array("View PHP Info",$admin_perms)}<li><a id="Menu-Utilities-System-PhpCompat" href="{routePath('admin-utilities-system-phpcompat')}">{$_ADMINLANG.utilities.phpcompat}</a></li>{/if}
                        </ul>
                    </li>
                {/if}
            </ul>
        </li>
        <li class="parent-nav has-dropdown"  id="addonsPageMenuAdminx">
            <a id="Menu-Addons" href="#" onclick="return false;">
                <span class="caret"></span>
                <i class="fas fa-cube"></i>
                <span class="parent-nav-menu-name">{$_ADMINLANG.utilities.addonmodules}</span>
            </a>
            <ul class="parent-sub-nav">
                {foreach from=$addon_modules key=module item=displayname}
                    <li><a id="Menu-Addons-{$displayname}" href="addonmodules.php?module={$module}">{$displayname}</a></li>
                {foreachelse}
                    <li><a id="Menu-Addons-AppsAndIntegrations" href="{routePath('admin-apps-index')}">{$_ADMINLANG.setup.appsAndIntegrations}</a></li>
                    <li><a id="Menu-Addons-Marketplace-Link" class="autoLinked" href="https://marketplace.whmcs.com">Visit WHMCS Marketplace</a></li>
                {/foreach}
            </ul>
        </li>
    </ul>
</div>
<script type="text/javascript">
    var navPageActiveAdminx = "{if $sidebar eq 'home'}homePageMenuAdminx{elseif $sidebar eq 'clients'}clientsPageMenuAdminx{elseif $sidebar eq 'orders'}ordersPageMenuAdminx{elseif $sidebar eq 'billing'}billingPageMenuAdminx{elseif $sidebar eq 'support'}supportPageMenuAdminx{elseif $sidebar eq 'reports'}reportsPageMenuAdminx{elseif $sidebar eq 'utilities'}utilityPageMenuAdminx{elseif $sidebar eq 'addonmodules'}addonsPageMenuAdminx{elseif $sidebar eq 'config'}configPageMenuAdminx{/if}";
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
</script>