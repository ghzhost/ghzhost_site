<?php
/* Smarty version 3.1.48, created on 2024-07-16 16:15:51
  from '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/GHZ/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696c6e7e09611_11653025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6282a4bcca04df42b455d1a6831975f95dd21f78' => 
    array (
      0 => '/home/ghzhost/web/production.ghzhost.com/public_html/site/templates/GHZ/header.tpl',
      1 => 1721157346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696c6e7e09611_11653025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ghzhost/web/production.ghzhost.com/public_html/site/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['locale'];?>
">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $_smarty_tpl->_assignInScope('flag_url', explode(".",$_SERVER['HTTP_HOST']));?>
    <?php $_smarty_tpl->_assignInScope('ipcontry', $_SERVER['HTTP_CF_IPCOUNTRY']);?>
    <?php $_smarty_tpl->_assignInScope('urlcontry', mb_strtolower(smarty_modifier_replace($_SERVER['HTTP_HOST'],$_smarty_tpl->tpl_vars['flag_url']->value[0],$_smarty_tpl->tpl_vars['ipcontry']->value), 'UTF-8'));?>
    <title>.:: <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');?>
 ::. <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
  <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {?>- <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];
}?></title>
     
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body data-phone-cc-input="<?php echo $_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value;?>
">


<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<!-- HEADER START -->
<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
 <header>
 <?php } else { ?>
 <header class="not-index-header contact-page-header">
 <?php }?>

 <div class="animation-header"><!-- HEADRR ANIMATION -->
			<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
            <span class="white-background-header"></span>
            <span class="space-ship"></span>
			<?php }?>
        </div><!-- END HEADER ANIMATION -->
		
		<section id="header">
    <div class="container">
        <ul class="top-nav">


		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>


            <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                <li>
                    <a href="#" class="choose-language wow fadeIn" data-wow-delay="0.1s" data-toggle="popover" id="languageChooser">
					<i class="fa fa-globe"></i>
                        <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>

                        <b class="caret"></b>
                    </a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'locale');
$_smarty_tpl->tpl_vars['locale']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->do_else = false;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"> <?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <li>
                    <a class="wow fadeIn" data-wow-delay="0.1s" href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>

                        <?php if (count($_smarty_tpl->tpl_vars['clientAlerts']->value) > 0) {?><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnew'];?>
</span><?php }?>
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientAlerts']->value, 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
">
                                    <i class="fa fa-fw fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'danger') {?>exclamation-circle<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'warning') {?>warning<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'info') {?>info-circle<?php } else { ?>check-circle<?php }?>"></i>
                                    <div class="message"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</div>
                                </a>
                            </li>
                        <?php
}
if ($_smarty_tpl->tpl_vars['alert']->do_else) {
?>
                            <li class="none">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>

                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </li>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
                    <li>
                        <a class="wow fadeIn" data-wow-delay="0.3s" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a>
                    </li>
                <?php }?>
                <li class="primary-action">
                    <a class="wow fadeIn" data-wow-delay="0.5s"" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" >
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>

                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value || $_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];
}?>">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
            <?php }?>
        </ul>
        <div class="head-whmcs-info">
				<a class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-at" aria-hidden="true"></i>  support@ghzhost.com</a>
        <?php ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['ipcontry']->value, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 != $_prefixVariable2) {?>
        <a  href="//<?php echo $_smarty_tpl->tpl_vars['urlcontry']->value;?>
" class="wow fadeIn urlcontry" data-wow-delay="0.5s"> <img src="https://flagcdn.com/w20/<?php echo strtolower($_smarty_tpl->tpl_vars['ipcontry']->value);?>
.png"> <?php echo $_smarty_tpl->tpl_vars['urlcontry']->value;?>
 </a>
        <?php }?>
        </div>
    </div>
</section>


	
	
        <div class="animation-header"><!-- HEADRR ANIMATION -->>
            <span class="white-background-header"></span>
        </div><!-- END HEADER ANIMATION -->
		
        <nav class="navbar megamenu"><!-- MENU START -->
            <div class="container">
                <div class="navbar-header">
                                  <a class="navbar-brand mr-3" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
        
                    <?php if ($_smarty_tpl->tpl_vars['logo']->value) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" class="logo-img">
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>

                    <?php }?>
                  </a>
                   <!-- LOGO -->
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                        <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['toggleNav']->value;?>
</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar btmone"></span>
                    </button>
                    <!-- LOGO -->
                </div>
                <div id="js-bootstrap-offcanvas" class="navbar-offcanvas navbar-offcanvas-touch main-nav">
                    <ul class="nav navbar-nav navbar-right wow fadeIn" data-wow-delay="0.3s">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php" class="login-out"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logouttitle'];?>
</a></li>
						<?php } else { ?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php" class="login-btn wow fadeIn" data-wow-delay="0.5s"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
</a></li>
						<?php }?>
                    </ul>
                </div>
            </div>
        </nav><!-- END NAV -->

		<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
		<div class="domain-section"><!-- DOMAIN SERCTION START -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bigtitle'];?>
, <span class="wow fadeIn" data-wow-delay="0.2s"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bigtitlefadein'];?>
</span></div>
                        <div class="head-light-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['headlighttitle'];?>
 <span class="text-change"></span></div>
                        <div class="domain-search-holder">
                            <form action="domainchecker.php" id="domain-search" class="wow fadeIn" data-wow-delay="0.5s">
                                <input id="domain-text" type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" />
                                                                <span class="inline-button">
                                <button id="search-btn" type="submit" name="submit" value="Search"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/search.svg" alt="search icon" /> </button>
                            </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- DOMAIN SECTION END -->
		<?php }?>

    </header><!-- END HEADER -->


<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>


       <section id="fetures-section"> <!-- FETURES SECTION START -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn">
                            <span class="boldtrin"><b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfree'];?>
</b></span>
                            <i class="flaticon-computer-4"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
</h5>
                            <p>best team</p>
                            <span>a domain helps customers drive directly to your website. We can help you find one you’ll love</span>
                            <a href="submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn" data-wow-delay="0.3s">
                            <i class="flaticon-internet-1"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
</h5>
                            <p>best team</p>
                            <span>a domain helps customers drive directly to your website. We can help you find one you’ll love.</span>
                            <a href="domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn" data-wow-delay="0.6s">
                            <i class="flaticon-shield-5"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
</h5>
                            <p>best team</p>
                            <span>You can make the payment process directly and with the highest degree of privacy and protection</span>
                            <a href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn" data-wow-delay="0.9s">
                            <i class="flaticon-server-1"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
</h5>
                            <p>best team</p>
                            <span>Hosting is what makes your site visible on the web. We offer fast, eliable plans for every need </span>
                            <a href="cart.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section><!-- FETURES SERCTION END -->
    
	
	
	<section id="hositng-plans"><!-- HOSTING PLANS START -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-tittle">
                        <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</h5>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['packagesForBudget'];?>
</span>
                    </div>
                    <div class="col-md-10 col-md-push-1">
                        <div class="pricing-container">
                            <div class="col-md-4">
                                <div class="plan wow fadeInLeft" data-wow-delay="0.1s"><!-- START PLAN -->
                                    <div class="paln-head planone">
                                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfree'];?>
 <i>all-time</i></span>
                                    </div>
                                    <div class="plans-tag">Economic</div>
                                    <div class="plans-body">
                                        <ul>
                                            <li><i class="fa fa-database" aria-hidden="true"></i> <b>Unlimited</b> Storage</li>
                                            <li><i class="fa fa-download" aria-hidden="true"></i> <b>Unlimited</b> Bandwith</li>
                                            <li><i class="fa fa-microchip" aria-hidden="true"></i> <b>Memory</b> 2 GB</li>
                                            <li><i class="fa fa-tachometer" aria-hidden="true"></i> <b>performance</b> standard</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> <b>SSL Certificate</b> Not included</li>
                                            <li><i class="fa fa-globe" aria-hidden="true"></i> <b>free doumain</b> Not included</li>
                                        </ul>
                                    </div>
                                    <div class="plans-footer">
                                        <a href="#">purchase</a>
                                    </div>
                                </div><!-- END PLAN -->
                            </div>

                            <div class="col-md-4">
                                <div class="plan spsl-plan wow fadeIn" data-wow-delay="0.3s"><!-- START PLAN -->
                                    <div class="ribbon"><span>$<?php echo $_smarty_tpl->tpl_vars['LANG']->value['feedbackbest'];?>
</span></div>
                                    <div class="paln-head plantwo">
                                        <span>9.59 <b>$</b> <i>monthly</i></span>
                                    </div>
                                    <div class="plans-tag">personal</div>
                                    <div class="plans-body">
                                        <ul>
                                            <li><i class="fa fa-database" aria-hidden="true"></i> <b>Unlimited</b> Storage</li>
                                            <li><i class="fa fa-download" aria-hidden="true"></i> <b>Unlimited</b> Bandwith</li>
                                            <li><i class="fa fa-microchip" aria-hidden="true"></i> <b>Memory</b> 2 GB</li>
                                            <li><i class="fa fa-tachometer" aria-hidden="true"></i> <b>performance</b> standard</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> <b>SSL Certificate</b> Not included</li>
                                            <li><i class="fa fa-globe" aria-hidden="true"></i> <b>free doumain</b> Not included</li>
                                        </ul>
                                    </div>
                                    <div class="plans-footer">
                                        <a href="#">purchase</a>
                                    </div>
                                </div><!-- END PLAN -->
                            </div>

                            <div class="col-md-4">
                                <div class="plan wow fadeInRight" data-wow-delay="0.6s">
                                    <div class="paln-head plantree"><!-- START PLAN -->
                                        <span>13.46 <b>$</b> <i>monthly</i></span>
                                    </div>
                                    <div class="plans-tag">business</div>
                                    <div class="plans-body">
                                        <ul>
                                            <li><i class="fa fa-database" aria-hidden="true"></i> <b>Unlimited</b> Storage</li>
                                            <li><i class="fa fa-download" aria-hidden="true"></i> <b>Unlimited</b> Bandwith</li>
                                            <li><i class="fa fa-microchip" aria-hidden="true"></i> <b>Memory</b> 2 GB</li>
                                            <li><i class="fa fa-tachometer" aria-hidden="true"></i> <b>performance</b> standard</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> <b>SSL Certificate</b> Not included</li>
                                            <li><i class="fa fa-globe" aria-hidden="true"></i> <b>free doumain</b> Not included</li>
                                        </ul>
                                    </div>
                                    <div class="plans-footer">
                                        <a href="#">purchase</a>
                                    </div>
                                </div><!-- END PLAN -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="whyus"><!-- START WHY US SECTION -->
                        <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['whyus'];?>
</h5>
                        <h4>awesome features come with evry plan <span>monitored 24/7 by our technical support staff.</span></h4>
                    </div>

                    <div class="col-md-10 col-md-push-1">
                        <div class="plans-fut">
                            <div class="row phone-no-last">
                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host wow fadeIn" data-wow-delay="0.1s">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/ic01.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host wow fadeIn" data-wow-delay="0.3s">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/ic02.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-right wow fadeIn" data-wow-delay="0.5s">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/ic03.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div>
                            </div> <!-- END WHY US -->

                            <div class="row phone-no-last">
                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm wow fadeIn" data-wow-delay="0.7s">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/ic04.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm wow fadeIn" data-wow-delay="0.9s">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/ic05.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm no-right wow fadeIn" data-wow-delay="1.1s">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icons/ic06.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- END WHY US -->

            	
	
		
		
		 <div class="plans-no-index"><!-- START PLANS -->
            <div class="container"><!-- CONTAINER -->
                <div class="col-md-6">
                    <div class="plans-no-index-info">
                        <h4>great price plan for you</h4><!-- TITTLE -->
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor. Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor.</p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor. Lorem Ipsum Dolor Sit Amet,</p>
                        <p class="logosplan">
                            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tech/themeforest-light-background.png" alt="logo" /></a><!-- IMAGE -->
                            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tech/codecanyon-light-background.png" alt="logo" /></a><!-- IMAGE -->
                        </p>
                    </div>
                </div>

                <div class="col-md-6 tablet-padding-plans wow fadeIn" data-wow-delay="0.3s">
                    <div class="plans-non"><!-- FIRST PLAN -->
                        <h5>flexible plan</h5>
                        <div class="price-pal"><span class="ones">$</span><span class="onts">59</span><span class="onrs">/month</span></div>
                        <div class="info-palns">
                            <span>5 gb space</span>
                            <span>10 subdomain</span>
                            <span>unlimated bandwith</span>
                            <span>unlimated user</span>
                        </div>
                        <div>
                            <a class="btn-ordr-plan" href="#">select plan</a>
                        </div>
                    </div>

                    <div class="plans-non spsclone-non-plans wow fadeIn" data-wow-delay="0.9s"><!-- SECOND PLAN -->
                        <h5>custom plan</h5>
                        <div class="price-pal"><span class="onrs">chose</span></div>
                        <div class="info-palns">
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>option space</p>
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>option subdomain</p>
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>option bandwith</p>
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>option user</p>
                        </div>
                        <div>
                            <a class="btn-ordr-plan" href="#">select plan</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>



		
	
	

<?php }?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<section id="main-body">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>-fluid without-padding<?php }?>">
        <div class="row">

        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <div class="col-md-9 pull-md-right">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>
                </div>
            <?php }?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
            </div>
        <?php }?>
        <!-- Container for main page display content -->
        <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
            <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['showingLoginPage']->value && !$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['templatefile']->value != 'homepage' && !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>
            <?php }
}
}
