<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/search_global_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dcf4ae2_42879069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a017d871a5eb474a30cc2eee1e99db20d08e66' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/custom_files/search_global_section.tpl',
      1 => 1686625200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dcf4ae2_42879069 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-short-cut">
    <div class="sidebar-header">
        <i class="fas fa-search contrl-search-ic"></i>
        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['advancedsearch'];?>

    </div>
    <div class="content-padded">
        <form method="get" action="search.php">
                <div class="searchTypeMainSec">
                    <span class="searchTypeSpan">Clients</span>
                    <ul class="searchFormShortcut" id="searchtypeCustomFn">
                        <li data-trigger="clients">Clients</li>
                        <li data-trigger="orders">Orders</li>
                        <li data-trigger="services">Services</li>
                        <li data-trigger="domains">Domains</li>
                        <li data-trigger="invoices">Invoices</li>
                        <li data-trigger="tickets">Tickets</li>
                    </ul>
                </div>
                <div class="searchFieldMainSec">
                    <span class="searchFieldSpan">Client Name</span>
                    <ul class="searchFormShortcut" id="searchfieldCustomFn">
                        <li>Client ID</li>
                        <li>Client Name</li>
                        <li>Company Name</li>
                        <li>Email Address</li>
                        <li>Address 1</li>
                        <li>Address 2</li>
                        <li>City</li>
                        <li>State</li>
                        <li>Postcode</li>
                        <li>Country</li>
                        <li>Phone Number</li>
                        <li>CC Last Four</li>
                    </ul>
                </div>
                <select name="type" id="searchtype" onchange="populate(this)" class="hidden">
                    <option value="clients">Clients </option>
                    <option value="orders">Orders </option>
                    <option value="services">Services </option>
                    <option value="domains">Domains </option>
                    <option value="invoices">Invoices </option>
                    <option value="tickets">Tickets </option>
                </select>                
                <select name="field" id="searchfield" class="hidden">
                    <option>Client ID</option>
                    <option selected="selected">Client Name</option>
                    <option>Company Name</option>
                    <option>Email Address</option>
                    <option>Address 1</option>
                    <option>Address 2</option>
                    <option>City</option>
                    <option>State</option>
                    <option>Postcode</option>
                    <option>Country</option>
                    <option>Phone Number</option>
                    <option>CC Last Four</option>
                </select>
                <div class="input-group search-contol-ar">
                    <input type="text" name="q" class="form-control" />
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
        </form>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "support") {?>
    <div class="search-ticket-short-cut">
        <div class="sidebar-header">
            <i class="fas fa-solid fa-filter"></i>
            <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['filtertickets'];?>

        </div>
        <form method="post" action="supporttickets.php">
            <span class="sub-header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['status'];?>
</span>
            <select name="view" class="form-control">
                <option value="any">- Any -</option>
                <option value=""<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view'] == '') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['awaitingreply'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsawaitingreply']->value;?>
)</option>
                <option value="flagged"<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view'] == "flagged") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['flagged'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsflagged']->value;?>
)</option>
                <option value="active"<?php if ($_smarty_tpl->tpl_vars['ticketfilterdata']->value['view'] == "active") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['allactive'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ticketsallactive']->value;?>
)</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketstatuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
"<?php if ($_smarty_tpl->tpl_vars['status']->value['title'] == $_smarty_tpl->tpl_vars['ticketfilterdata']->value['view']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['status']->value['count'];?>
)</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <span class="sub-header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['department'];?>
</span>
            <select name="deptid" class="form-control">
                <option value="">- Any -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketdepts']->value, 'dept');
$_smarty_tpl->tpl_vars['dept']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['dept']->value['id'] == $_smarty_tpl->tpl_vars['ticketfilterdata']->value['deptid']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dept']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <span class="sub-header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['support']['subjectmessage'];?>
</span>
            <input type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['ticketfilterdata']->value['subject'];?>
" class="form-control" />
            <span class="sub-header"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['fields']['email'];?>
</span>
            <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['ticketfilterdata']->value['email'];?>
" class="form-control" />
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['filter'];?>
  &raquo;" class="btn btn-primary btn-block btn-sm top-margin-5" />
        </form>     
    </div>
<?php }
}
}
