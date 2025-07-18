<div class="search-short-cut">
    <div class="sidebar-header">
        <i class="fas fa-search contrl-search-ic"></i>
        {$_ADMINLANG.global.advancedsearch}
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
{if $sidebar eq "support"}
    <div class="search-ticket-short-cut">
        <div class="sidebar-header">
            <i class="fas fa-solid fa-filter"></i>
            {$_ADMINLANG.support.filtertickets}
        </div>
        <form method="post" action="supporttickets.php">
            <span class="sub-header">{$_ADMINLANG.fields.status}</span>
            <select name="view" class="form-control">
                <option value="any">- Any -</option>
                <option value=""{if $ticketfilterdata.view eq ""} selected{/if}>{$_ADMINLANG.support.awaitingreply} ({$ticketsawaitingreply})</option>
                <option value="flagged"{if $ticketfilterdata.view eq "flagged"} selected{/if}>{$_ADMINLANG.support.flagged} ({$ticketsflagged})</option>
                <option value="active"{if $ticketfilterdata.view eq "active"} selected{/if}>{$_ADMINLANG.support.allactive} ({$ticketsallactive})</option>
                {foreach from=$ticketstatuses item=status}
                    <option value="{$status.title}"{if $status.title eq $ticketfilterdata.view} selected{/if}>{$status.title} ({$status.count})</option>
                {/foreach}
            </select>
            <span class="sub-header">{$_ADMINLANG.support.department}</span>
            <select name="deptid" class="form-control">
                <option value="">- Any -</option>
                {foreach from=$ticketdepts item=dept}
                    <option value="{$dept.id}"{if $dept.id eq $ticketfilterdata.deptid} selected{/if}>{$dept.name}</option>
                {/foreach}
            </select>
            <span class="sub-header">{$_ADMINLANG.support.subjectmessage}</span>
            <input type="text" name="subject" value="{$ticketfilterdata.subject}" class="form-control" />
            <span class="sub-header">{$_ADMINLANG.fields.email}</span>
            <input type="text" name="email" value="{$ticketfilterdata.email}" class="form-control" />
            <input type="submit" value="{$_ADMINLANG.global.filter}  &raquo;" class="btn btn-primary btn-block btn-sm top-margin-5" />
        </form>     
    </div>
{/if}