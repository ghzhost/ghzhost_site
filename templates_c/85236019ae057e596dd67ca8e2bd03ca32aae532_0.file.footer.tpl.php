<?php
/* Smarty version 3.1.48, created on 2024-07-16 12:56:29
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696982dccf0f0_23446690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85236019ae057e596dd67ca8e2bd03ca32aae532' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/admin/templates/adminx/footer.tpl',
      1 => 1682564400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696982dccf0f0_23446690 (Smarty_Internal_Template $_smarty_tpl) {
?></div></div>
<div class="clear"></div>
</div> <!-- main section contentarea -->
<div class="footerbar">
    <div class="copyright">
        <!-- Removal of the WHMCS copyright notice is strictly prohibited -->
        <!-- Branding removal entitlement does not permit this line to be removed -->
        Copyright &copy;
        <a href="https://www.whmcs.com/" target="_blank">WHMCS</a> <?php echo date('Y');?>
.
        All Rights Reserved.
    </div>
    <div class="links">
        <a href="https://www.whmcs.com/report-a-bug" target="_blank">Report a Bug</a>
        |
        <a href="https://docs.whmcs.com/" target="_blank">Documentation</a>
        |
        <a href="https://www.whmcs.com/contact" target="_blank">Contact Us</a>
    </div>
    <div class="time-bar">
        <?php echo $_smarty_tpl->tpl_vars['carbon']->value->translateTimestampToFormat(time(),"l, j F Y, H:i");?>

    </div>
</div>
<aside class="right-side-control-admin-x">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/custom_files/nav_right_side_control.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</aside>
</div> <!-- wrapper end -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/intellisearch-results.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

</body>
</html>
<?php }
}
