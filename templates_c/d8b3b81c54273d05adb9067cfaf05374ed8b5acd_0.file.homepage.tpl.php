<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:36
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669698348aa1e3_39516134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b3b81c54273d05adb9067cfaf05374ed8b5acd' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/homepage.tpl',
      1 => 1681786800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669698348aa1e3_39516134 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="clearfix"></div>

<?php echo $_smarty_tpl->tpl_vars['infobox']->value;?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_html']->value, 'addon_html');
$_smarty_tpl->tpl_vars['addon_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->do_else = false;
?>
    <div class="addon-html-output-container">
        <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<style>
.contentarea {
    background-color: #f8f8f8;
    overflow: hidden;
}
</style>

<div class="home-widgets-container" data-masonry='{ "itemSelector": ".dashboard-panel-item", "columnWidth": ".dashboard-panel-sizer", "percentPosition": "true" }'>
    <div class="dashboard-panel-sizer"></div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortableWidgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
        <div id="panel<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
" data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
" class="dashboard-panel-item dashboard-panel-item-columns-<?php echo $_smarty_tpl->tpl_vars['widget']->value->getColumnSize();
if (in_array($_smarty_tpl->tpl_vars['widget']->value->getId(),$_smarty_tpl->tpl_vars['hiddenWidgets']->value)) {?> hidden<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['widget']->value->showWrapper()) {?>
                <div class="panel panel-default widget-<?php echo strtolower($_smarty_tpl->tpl_vars['widget']->value->getId());?>
" data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value->getId();?>
">
                    <div class="panel-heading">
                        <div class="widget-tools">
                            <a href="#" class="widget-refresh"><i class="fas fa-sync"></i></a>
                            <a href="#" class="widget-minimise"><i class="fas fa-chevron-up"></i></a>
                            <a href="#" class="widget-hide"><i class="fas fa-times"></i></a>
                        </div>
                        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['widget']->value->getTitle();?>
</h3>
                    </div>
                    <div class="panel-body">
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['widget']->value->render();?>


            <?php if ($_smarty_tpl->tpl_vars['widget']->value->showWrapper()) {?>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['generateInvoices']->value;?>

<?php echo $_smarty_tpl->tpl_vars['creditCardCapture']->value;?>

<?php }
}
