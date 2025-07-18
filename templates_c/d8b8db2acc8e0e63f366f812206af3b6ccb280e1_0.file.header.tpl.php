<?php
/* Smarty version 3.1.48, created on 2024-07-24 00:28:07
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a074c76cbbc6_82793989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b8db2acc8e0e63f366f812206af3b6ccb280e1' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/header.tpl',
      1 => 1721791661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a074c76cbbc6_82793989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ghzhost/web/ghzhost.com/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
 ::. | <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
  <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {?>- <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];
}?></title>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/metatags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
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

        <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
            <li>
                <a href="#" class="choose-language" data-toggle="popover" id="languageChooser"><img src="https://flagcdn.com/w20/<?php echo strtolower($_smarty_tpl->tpl_vars['activeLocale']->value['countryCode']);?>
.png">
                    <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];
if (!$_smarty_tpl->tpl_vars['loggedin']->value && count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?> / <?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['code'];?>
 [<?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['prefix'];?>
] <?php }?>
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
"><img src="https://flagcdn.com/w20/<?php echo strtolower($_smarty_tpl->tpl_vars['locale']->value['countryCode']);?>
.png"> <?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a>
                       
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    
                    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currchoice');
$_smarty_tpl->tpl_vars['currchoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currchoice']->value) {
$_smarty_tpl->tpl_vars['currchoice']->do_else = false;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
currency=<?php echo $_smarty_tpl->tpl_vars['currchoice']->value['id'];?>
"><img src="https://flagcdn.com/w20/<?php echo strtolower(substr($_smarty_tpl->tpl_vars['currchoice']->value['code'],0,2));?>
.png"> <?php echo $_smarty_tpl->tpl_vars['currchoice']->value['code'];?>
 [<?php echo $_smarty_tpl->tpl_vars['currchoice']->value['prefix'];?>
]</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                </div>
            </li>
        <?php }?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>


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



         <div id="particlesheader"></div>
        <div class="animation-header"><!-- HEADRR ANIMATION -->
            <span class="white-background-header"></span>
        </div><!-- END HEADER ANIMATION -->
  
        <nav class="navbar megamenu"><!-- MENU START -->
            <div class="container">
                <div class="navbar-header">
                                  <a class="navbar-brand mr-3" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
        
                    <?php if ($_smarty_tpl->tpl_vars['logo']->value) {?>
                                                <div class="logo-container">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" class="logo-img">
                            <img src="https://flagcdn.com/w40/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['flag_url']->value[0], 'UTF-8');?>
.png" alt="FLAG" class="flag">
                        </div>

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
                        <?php echo '<script'; ?>
 type="text/javascript">
                            var animatedTextHeader = [
                                "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['game_server'];?>
",
                                "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['web_hosting'];?>
",
                                "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomain'];?>
",
                            ];
                         <?php echo '</script'; ?>
>
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


    <!-- FETURES SECTION END -->

            <section id="fetures-section"> <!-- FETURES SECTION START -->
        <div class="container">
            <div class="row">
             
                    <div class="col-md-3">
                        <div class="fetures-place  wow fadeIn">
                            <span class="boldtrin"><b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfree'];?>
</b></span>
                            <i class="flaticon-computer-4"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
</h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport_p'];?>
</p>
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport_span'];?>
</span>
                            <a href="submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place  wow fadeIn" data-wow-delay="0.3s">
                            <i class="flaticon-internet-1"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
</h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomainchoose'];?>
</p>
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain_p'];?>
</span>
                            <a href="domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place  wow fadeIn" data-wow-delay="0.6s">
                            <i class="flaticon-shield-5"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
</h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</p>
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment_span'];?>
</span>
                            <a href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place  wow fadeIn" data-wow-delay="0.9s">
                            <i class="flaticon-server-1"></i>
                            <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
</h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting_p'];?>
</p>
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting_span'];?>
</span>
                            <a href="cart.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                        </div>
                </div>
            </div>
        </div>

    </section><!-- FETURES SERCTION END -->
    
	
	
	
            	
	


		
	
	

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
            <?php }?>
 <?php }
}
