<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:42:36
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/orderforms/standard_cart/sidebar-categories-selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669759ccee51c2_79919323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '142e29b01d8df4c407ec8b7692a89d3a2b2d642d' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/orderforms/standard_cart/sidebar-categories-selector.tpl',
      1 => 1709668908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669759ccee51c2_79919323 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['panel']->value) {?>
    <div class="m-0 panel-heading card-header">
        <h3 class="panel-title">
            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasIcon()) {?>
                <i class="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getIcon();?>
"></i>&nbsp;
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>


            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBadge()) {?>
                &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getBadge();?>
</span>
            <?php }?>
        </h3>
    </div>

    <div class="panel-body card-body">
        <form role="form">
            <select class="form-control custom-select" onchange="selectChangeNavigate(this)">
                <?php $_smarty_tpl->_assignInScope('hasCurrent', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                    <option menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item" <?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?>selected="selected"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                        <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                            (<?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
)
                        <?php }?>
                    </option>
                    <?php if (!$_smarty_tpl->tpl_vars['hasCurrent']->value && $_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?>
                        <?php $_smarty_tpl->_assignInScope('hasCurrent', true);?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if (!$_smarty_tpl->tpl_vars['hasCurrent']->value) {?>
                    <option value="" class="list-group-item" selected=""selected>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cartchooseanothercategory"),$_smarty_tpl ) );?>
 -</option>
                <?php }?>
            </select>
        </form>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
        <div class="panel-footer card-footer">
            <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

        </div>
    <?php }
}
}
}
