{assign var=flag_url value="."|explode:$smarty.server.HTTP_HOST}
                </div><!-- /.main-content -->
                {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                    <div class="col-md-3 pull-md-left sidebar sidebar-secondary">
                        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                    </div>
                {/if}
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
					{* <div class="cntct-footer">
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
					</div> *}

                    <span class="spacing"></span>

                    <div class="row footer-links"><!-- FOOTER LINK -->
                        <div class="hosing-pakages col-md-3 wow fadeIn" data-wow-delay="0.1s">
                            <h4>{$LANG.cartproductselection}</h4>
                            <ul>
                            
                            {if $groupList}
                                {foreach from=$groupList item=group}
                                <li><a href="cart.php?&gid={$group.id}">{$group.name}</a></li>
                                {/foreach}
                            {/if}
                            </ul>
                        </div>
                        
                        <div class="company-pakages col-md-3 wow fadeIn" data-wow-delay="0.5s">
                            <h4>Mapa</h4>
                            <ul>
                            {foreach from=$primaryNavbar item=navItem}
                                {if $navItem->getUri() && $navItem->getLabel()}
                                    <li><a href="{$navItem->getUri()}">{$navItem->getLabel()}</a></li>
                                {/if}
                            {/foreach}
                            </ul>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
                            {* <h4>our services</h4> *}
                            <ul>
                                {* <li><a href="#">website builder</a></li>
                                <li><a href="#">web design</a></li>
                                <li><a href="#">logo design</a></li>
                                <li><a href="#">email markting</a></li>
                                <li><a href="#">logo design</a></li>
                                <li><a href="#">email markting</a></li> *}
                            </ul>
                        </div>


                        <div class="col-md-3 footer-cntct-info wow fadeIn" data-wow-delay="0.7s">
                    
                            <div class="mobandmail">
                                <span><b>{$LANG.orderForm.phoneNumber}:</b> <a href="tel:+5553991844430">+55 53-99184-4430</a></span>
                                <span><b>{$LANG.domaincontactdetails.Email}:</b> <a href="mailto:support@ghzhost.com">support@ghzhost.com</a></span>
                            </div>
                               {* <a href="#"><img style="max-width: 250px;" src="{$WEB_ROOT}/templates/{$template}/img/payment/payment.png" alt="payment" /></a>
Adicionar um copyght com ano e GhzHost *}
                               <a class="footer-logo" href="/">Ghz<span>Host </span><b><img id="flag"
                                           src="https://flagcdn.com/w40/{$flag_url[0]|lower}.png" alt="flag"></b></a>
                               <div class="mobandmail">
                                   <span>{$LANG.copyright} {$smarty.now|date_format:'%Y'}</span>
                                   <span>{$LANG.copyright2_span}</span>
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

{$footeroutput}




    <!-- JAVASCRIPT -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/wow.min.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/text-changer.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/contact.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/smoothscroll.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/counter.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/page.js"></script>
	<script src="{$WEB_ROOT}/templates/{$template}/js/preloader.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/responsive-menu.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/particles.js"></script>


	
    <script>
	$("[data-toggle=offcanvas]").click(function(){
    $("body").toggleClass("offcanvas-stop-scrolling");
	$(".navbar-offcanvas").toggleClass("in");
	$(".navbar-offcanvas").toggleClass("offcanvas-transform");
	$(".offcanvas-toggle").toggleClass("is-open");
    });
    </script>

  
</body>
</html>
