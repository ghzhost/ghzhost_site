<div class="admin-on-line">
    <div class="sidebar-header">
        <i class="fas fa-users"></i>
        {$_ADMINLANG.global.staffonline}
    </div>
    <ul class="admin-online-list">
        {assign var=adminsData value=","|explode:$adminsonline}
        {foreach $adminsData as $adminsDataName}
            <li><i class="fas fa-user-circle"></i> {$adminsDataName}</li>
        {/foreach}
    </ul>
</div>