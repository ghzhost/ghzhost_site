<?php
/* Smarty version 3.1.48, created on 2024-07-18 12:23:15
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/clientareaproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669933631ff758_05676612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9527416567e491e9abbd44270aa238a01804b4b7' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/clientareaproducts.tpl',
      1 => 1719979314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669933631ff758_05676612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"ServicesList",'filterColumn'=>"3"), 0, true);
echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'product') {?>
            table.order([0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [3, 'asc']);
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'amount' || $_smarty_tpl->tpl_vars['orderby']->value == 'billingcycle') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'nextduedate') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'domainstatus') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableServicesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddonpricing'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</th>
                <th class="responsive-edit-button" style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, 'num');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
', false)">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?><br /><a href="http://<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</a><?php }?></td>
                    <td class="text-center" data-order="<?php echo $_smarty_tpl->tpl_vars['service']->value['amountnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</td>
                    <td class="text-center"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>
</td>
                    <td class="text-center"><span class="label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="btn btn-block btn-info">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>

                        </a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fas fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
    </div>
</div>
<?php }
}
