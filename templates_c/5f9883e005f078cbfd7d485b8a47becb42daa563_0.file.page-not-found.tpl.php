<?php
/* Smarty version 3.1.48, created on 2024-07-17 01:18:37
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/error/page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6697461d0e8d97_31933711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f9883e005f078cbfd7d485b8a47becb42daa563' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/error/page-not-found.tpl',
      1 => 1719979317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6697461d0e8d97_31933711 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

    <div class="error-container boxed">

        <h1><i class="fas fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.title"),$_smarty_tpl ) );?>
</h1>
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.subtitle"),$_smarty_tpl ) );?>
</h3>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.description"),$_smarty_tpl ) );?>
</p>

        <div class="buttons">
            <a href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
" class="btn btn-default">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.home"),$_smarty_tpl ) );?>

            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
submitticket.php" class="btn btn-default">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.submitTicket"),$_smarty_tpl ) );?>

            </a>
        </div>

    </div>

</div>
<?php }
}
