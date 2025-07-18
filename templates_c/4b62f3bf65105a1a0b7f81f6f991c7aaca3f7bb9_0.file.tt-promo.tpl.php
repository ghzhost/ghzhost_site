<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:38:13
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-promo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669758c59b8280_19589553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b62f3bf65105a1a0b7f81f6f991c7aaca3f7bb9' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-promo.tpl',
      1 => 1721194688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669758c59b8280_19589553 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-4 col-lg">
                <a href="<?php echo routePath('announcement-index');?>
" class="card-accent-teal d-block text-center p-4 bg-white tt-promo tt-rounded">
                    <figure class="ico-container">
                        <i class="fad fa-bullhorn"></i>
                    </figure>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'announcementstitle'),$_smarty_tpl ) );?>

                </a>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <a href="serverstatus.php" class="card-accent-pomegranate d-block text-center p-4 bg-white tt-promo tt-rounded">
                    <figure class="ico-container">
                        <i class="fad fa-server"></i>
                    </figure>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkstatustitle'),$_smarty_tpl ) );?>

                </a>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <a href="<?php echo routePath('knowledgebase-index');?>
" class="card-accent-sun-flower d-block text-center p-4 bg-white tt-promo tt-rounded">
                    <figure class="ico-container">
                        <i class="fad fa-book"></i>
                    </figure>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'knowledgebasetitle'),$_smarty_tpl ) );?>

                </a>
            </div>
            <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
                <a href="<?php echo routePath('download-index');?>
" class="card-accent-asbestos d-block text-center p-4 bg-white tt-promo tt-rounded">
                    <figure class="ico-container">
                        <i class="fad fa-download"></i>
                    </figure>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadstitle'),$_smarty_tpl ) );?>

                </a>
            </div>
            <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
                <a href="submitticket.php" class="card-accent-green d-block text-center p-4 bg-white tt-promo tt-rounded">
                    <figure class="ico-container">
                        <i class="fad fa-life-ring"></i>
                    </figure>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.submitTicket'),$_smarty_tpl ) );?>

                </a>
            </div>
        </div>
    </div>
</section>
<?php }
}
