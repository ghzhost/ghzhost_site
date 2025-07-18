<?php
/* Smarty version 3.1.48, created on 2024-07-16 15:36:53
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/GHZ/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696bdc53eb162_45615298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96853b8e32d364191e4f6cdd4d05bf7d9c68f7d0' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/GHZ/footer.tpl',
      1 => 1720065458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696bdc53eb162_45615298 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
					<div class="cntct-footer">
                        <div class="col-md-5">
                            <div class="phone-support">
                                <h6>need help? <span>call us:</span></h6>
                                <b>+213 123-455-678</b>
                            </div>

                            <ul class="social-links"> <!-- SOCIAL ICONS -->
                                <li class="social-icon twitter">
                                    <a href=""><span><i><span class="fa fa-twitter"></span></i></span><span><i><span class="fa fa-twitter"></span></i></span></a>
                                </li>
                                <li class="social-icon facebook">
                                    <a href=""><span><i><span class="fa fa-facebook"></span></i></span><span><i><span class="fa fa-facebook"></span></i></span></a>
                                </li>
                                <li class="social-icon dribbble">
                                    <a href=""><span><i><span class="fa fa-dribbble"></span></i></span><span><i><span class="fa fa-dribbble"></span></i></span></a>
                                </li>
                                <li class="social-icon behance">
                                    <a href=""><span><i><span class="fa fa-behance"></span></i></span><span><i><span class="fa fa-behance"></span></i></span></a>
                                </li>
                                <li class="social-icon youtube">
                                    <a href=""><span><i><span class="fa fa-youtube"></span></i></span><span><i><span class="fa fa-youtube"></span></i></span></a>
                                </li>
                            </ul>

                        </div>

                        <div class="col-md-7">
                            <div class="msj-send-area wow fadeIn">
                                <span class="head-tittle">or Send us a message if you have a question</span>

                                <div id="form-messages"></div>

                                <form id="ajax-contact" method="post" action="mailer.php"> <!-- CONTACT FORM -->
                                    <!-- START FORM -->
                                    <div class="col-md-5">
                                        <div class="field">
                                            <input type="text" id="name" name="name" placeholder="Name *" required>
                                            <!-- NAME INPUT -->
                                        </div>

                                        <div class="field">
                                            <input type="email" id="email" name="email" placeholder="Email *" required>
                                            <!-- EMAIL INPUT -->
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="field">
                                            <textarea id="message" name="message" placeholder="Message *" required></textarea>
                                            <!-- TEXTAREA -->
                                        </div>
                                    </div>

                                    <div class="btn-holder-contect">
                                        <button type="submit">Send</button>
                                        <!-- SEND BUTTON -->
                                    </div>
                                </form> <!-- END CONTACT FORM -->

                            </div>
                        </div>
                    </div>
					</div>

                    <span class="spacing"></span>

                    <div class="row footer-links"><!-- FOOTER LINK -->
                        <div class="hosing-pakages col-md-3 wow fadeIn" data-wow-delay="0.1s">
                            <h4>hosting pakages</h4>
                            <ul>
                                <li><a href="#">web hosting</a></li>
                                <li><a href="#">reseller hosting</a></li>
                                <li><a href="#">VPS hosting</a></li>
                                <li><a href="#">web hosting</a></li>
                                <li><a href="#">reseller hosting</a></li>
                                <li><a href="#">VPS hosting</a></li>
                            </ul>
                        </div>

                        <div class="services-pakages col-md-3 wow fadeIn" data-wow-delay="0.3s">
                            <h4>our services</h4>
                            <ul>
                                <li><a href="#">website builder</a></li>
                                <li><a href="#">web design</a></li>
                                <li><a href="#">logo design</a></li>
                                <li><a href="#">email markting</a></li>
                                <li><a href="#">logo design</a></li>
                                <li><a href="#">email markting</a></li>
                            </ul>
                        </div>

                        <div class="company-pakages col-md-3 wow fadeIn" data-wow-delay="0.5s">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#">homepage</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">blogs</a></li>
                                <li><a href="#">homepage</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">blogs</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 footer-cntct-info wow fadeIn" data-wow-delay="0.7s">
                    <!-- adicionar logo -->

                            <div class="mobandmail">
                                <span><b>phone:</b> +213 123-456-789</span>
                                <span><b>mail:</b> support@yourdomain.com</span>
                            </div>
                            <a href="#"><img style="max-width: 250px;" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/payment/payment.png" alt="payment" /></a>

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
