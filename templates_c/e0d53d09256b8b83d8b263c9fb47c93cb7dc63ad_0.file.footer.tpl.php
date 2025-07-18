<?php
/* Smarty version 3.1.48, created on 2024-07-22 22:38:15
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669f0987434523_70290246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d53d09256b8b83d8b263c9fb47c93cb7dc63ad' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/footer.tpl',
      1 => 1721698659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669f0987434523_70290246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ghzhost/web/ghzhost.com/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('flag_url', explode(".",$_SERVER['HTTP_HOST']));?>
                </div><!-- /.main-content -->
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                    <div class="col-md-3 pull-md-left sidebar sidebar-secondary">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>
                    </div>
                <?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>



    <footer id="footer-area"> <!-- START FOOTER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
					
                    <span class="spacing"></span>

                    <div class="row footer-links"><!-- FOOTER LINK -->
                        <div class="hosing-pakages col-md-3 wow fadeIn" data-wow-delay="0.1s">
                            <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductselection'];?>
</h4>
                            <ul>
                            
                            <?php if ($_smarty_tpl->tpl_vars['groupList']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupList']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                <li><a href="cart.php?&gid=<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</a></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            </ul>
                        </div>
                        
                        <div class="company-pakages col-md-3 wow fadeIn" data-wow-delay="0.5s">
                            <h4>Mapa</h4>
                            <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryNavbar']->value, 'navItem');
$_smarty_tpl->tpl_vars['navItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem']->value) {
$_smarty_tpl->tpl_vars['navItem']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['navItem']->value->getUri() && $_smarty_tpl->tpl_vars['navItem']->value->getLabel()) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['navItem']->value->getUri();?>
"><?php echo $_smarty_tpl->tpl_vars['navItem']->value->getLabel();?>
</a></li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
                                                        <ul>
                                                            </ul>
                        </div>


                        <div class="col-md-3 footer-cntct-info wow fadeIn" data-wow-delay="0.7s">
                    
                            <div class="mobandmail">
                                <span><b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
:</b> <a href="tel:+5553991844430">+55 53-99184-4430</a></span>
                                <span><b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincontactdetails']['Email'];?>
:</b> <a href="mailto:support@ghzhost.com">support@ghzhost.com</a></span>
                            </div>
                                                              <a class="footer-logo" href="/">Ghz<span>Host </span><b><img id="flag"
                                           src="https://flagcdn.com/w40/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');?>
.png" alt="flag"></b></a>
                               <div class="mobandmail">
                                   <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['copyright'];?>
 <?php echo smarty_modifier_date_format(time(),'%Y');?>
</span>
                                   <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['copyright2_span'];?>
</span>
                            </div>
                    </div><!-- END FOOTER LINK -->
                </div>
            </div>
        </div>

    </footer><!-- END FOOTER -->
	
	
<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>





    <!-- JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/text-changer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/contact.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/counter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/page.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/preloader.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/responsive-menu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/particles.js"><?php echo '</script'; ?>
>


	
    <?php echo '<script'; ?>
>
	$("[data-toggle=offcanvas]").click(function(){
    $("body").toggleClass("offcanvas-stop-scrolling");
	$(".navbar-offcanvas").toggleClass("in");
	$(".navbar-offcanvas").toggleClass("offcanvas-transform");
	$(".offcanvas-toggle").toggleClass("is-open");
    });
    <?php echo '</script'; ?>
>

  
</body>
</html>
<?php }
}
