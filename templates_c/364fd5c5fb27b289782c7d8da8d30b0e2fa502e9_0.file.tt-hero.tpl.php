<?php
/* Smarty version 3.1.48, created on 2024-07-17 02:38:13
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-hero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669758c599b5b9_13944977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '364fd5c5fb27b289782c7d8da8d30b0e2fa502e9' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/hostlar/includes/tt/hostlar/tt-hero.tpl',
      1 => 1721194688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669758c599b5b9_13944977 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bg-gradient">
    <div class="ptb-60">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="tt-hero text-white">
                        <h1 class="text-white font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegin'];?>
</h1>
                        <p class="lead mt-3 mb-4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegininfo'];?>
</p>

                        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostlar/tt-domain-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tt-animated-img-wrap">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-servers.svg" class="hero-img img-fluid" alt="server image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-animate-icon-1.png" class="tt-animated-icon tt-a-icon-1" alt="animated">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-animate-icon-2.png" class="tt-animated-icon tt-a-icon-2" alt="animated">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-animate-icon-3.png" class="tt-animated-icon tt-a-icon-3" alt="animated">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-animate-icon-4.png" class="tt-animated-icon tt-a-icon-4" alt="animated">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-shape position-relative text-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/hero-bottom-shape-1.svg" class="img-fluid" alt="support image">
    </div>
</section>
<?php }
}
