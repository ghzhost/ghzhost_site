<!DOCTYPE html>
<html lang="{$LANG.locale}">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {assign var=flag_url value="."|explode:$smarty.server.HTTP_HOST}
    {assign var=ipcontry value=$smarty.server.HTTP_CF_IPCOUNTRY}
    {assign var=urlcontry value=$smarty.server.HTTP_HOST|replace:$flag_url[0]:$ipcontry|lower}
    <title>.:: {$companyname} {$flag_url[0]|upper} ::. {$pagetitle}  {if $kbarticle.title}- {$kbarticle.title}{/if}</title>
     
    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body data-phone-cc-input="{$phoneNumberInputStyle}">


{$headeroutput}

<!-- HEADER START -->
{if $templatefile == 'homepage'}
 <header>
 {else}
 <header class="not-index-header contact-page-header">
 {/if}

 <div class="animation-header"><!-- HEADRR ANIMATION -->
			{if $templatefile == 'homepage'}
            <span class="white-background-header"></span>
            <span class="space-ship"></span>
			{/if}
        </div><!-- END HEADER ANIMATION -->
		
		<section id="header">
    <div class="container">
        <ul class="top-nav">


		{include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}


            {if $languagechangeenabled && count($locales) > 1}
                <li>
                    <a href="#" class="choose-language wow fadeIn" data-wow-delay="0.1s" data-toggle="popover" id="languageChooser">
					<i class="fa fa-globe"></i>
                        {$activeLocale.localisedName}
                        <b class="caret"></b>
                    </a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            {foreach $locales as $locale}
                                <li>
                                    <a href="{$currentpagelinkback}language={$locale.language}"> {$locale.localisedName}</a>
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                </li>
            {/if}
            {if $loggedin}
                <li>
                    <a class="wow fadeIn" data-wow-delay="0.1s" href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        {$LANG.notifications}
                        {if count($clientAlerts) > 0}<span class="label label-info">{$LANG.notificationsnew}</span>{/if}
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                        {foreach $clientAlerts as $alert}
                            <li>
                                <a href="{$alert->getLink()}">
                                    <i class="fa fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}warning{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
                                    <div class="message">{$alert->getMessage()}</div>
                                </a>
                            </li>
                        {foreachelse}
                            <li class="none">
                                {$LANG.notificationsnone}
                            </li>
                        {/foreach}
                        </ul>
                    </div>
                </li>
            {else}
                {if $condlinks.allowClientRegistration}
                    <li>
                        <a class="wow fadeIn" data-wow-delay="0.3s" href="{$WEB_ROOT}/register.php">{$LANG.register}</a>
                    </li>
                {/if}
                <li class="primary-action">
                    <a class="wow fadeIn" data-wow-delay="0.5s"" href="{$WEB_ROOT}/cart.php?a=view" >
                        {$LANG.viewcart}
                    </a>
                </li>
            {/if}
            {if $adminMasqueradingAsClient || $adminLoggedIn}
                <li>
                    <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{$LANG.adminmasqueradingasclient} {$LANG.logoutandreturntoadminarea}{else}{$LANG.adminloggedin} {$LANG.returntoadminarea}{/if}">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
            {/if}
        </ul>
        <div class="head-whmcs-info">
		{* <a class="wow fadeIn" data-wow-delay="0.1s"><i class="fa fa-phone" aria-hidden="true"></i>  00213 123 456 798</a> *}
		<a class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-at" aria-hidden="true"></i>  support@ghzhost.com</a>
        {if {$ipcontry|lower} != {$flag_url[0]|lower}}
        <a  href="//{$urlcontry}" class="wow fadeIn urlcontry" data-wow-delay="0.5s"> <img src="https://flagcdn.com/w20/{$ipcontry|strtolower}.png"> {$urlcontry} </a>
        {/if}
        </div>
    </div>
</section>


	
	
        <div class="animation-header"><!-- HEADRR ANIMATION -->>
            <span class="white-background-header"></span>
        </div><!-- END HEADER ANIMATION -->
		
        <nav class="navbar megamenu"><!-- MENU START -->
            <div class="container">
                <div class="navbar-header">
                                  <a class="navbar-brand mr-3" href="{$WEB_ROOT}/index.php">
        
                    {if $logo}
                        <img src="{$logo}" alt="{$companyname}" class="logo-img">
                    {else}
                        {$companyname}
                    {/if}
                  </a>
                   <!-- LOGO -->
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                        <span class="sr-only">{$toggleNav}</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar btmone"></span>
                    </button>
                    <!-- LOGO -->
                </div>
                <div id="js-bootstrap-offcanvas" class="navbar-offcanvas navbar-offcanvas-touch main-nav">
                    <ul class="nav navbar-nav navbar-right wow fadeIn" data-wow-delay="0.3s">
                        {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                        {if $loggedin}
                        <li><a href="{$WEB_ROOT}/logout.php" class="login-out">{$LANG.logouttitle}</a></li>
						{else}
						<li><a href="{$WEB_ROOT}/login.php" class="login-btn wow fadeIn" data-wow-delay="0.5s">{$LANG.loginbutton}</a></li>
						{/if}
                    </ul>
                </div>
            </div>
        </nav><!-- END NAV -->

		{if $templatefile == 'homepage'}
		<div class="domain-section"><!-- DOMAIN SERCTION START -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title">
                        {$LANG.bigtitle}, <span class="wow fadeIn" data-wow-delay="0.2s">{$LANG.bigtitlefadein}</span></div>
                        <div class="head-light-title">{$LANG.headlighttitle} <span class="text-change"></span></div>
                        <div class="domain-search-holder">
                            <form action="domainchecker.php" id="domain-search" class="wow fadeIn" data-wow-delay="0.5s">
                                <input id="domain-text" type="text" name="domain" placeholder="{$LANG.exampledomain}" />
                                {* <select>
                                    <option value="com">com</option>
                                    <option value="net">net</option>
                                    <option value="info">info</option>
                                    <option value="org">org</option>
                                </select> *}
                                <span class="inline-button">
                                <button id="search-btn" type="submit" name="submit" value="Search"> <img src="{$WEB_ROOT}/templates/{$template}/img/search.svg" alt="search icon" /> </button>
                            </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- DOMAIN SECTION END -->
		{/if}

    </header><!-- END HEADER -->


{if $templatefile == 'homepage'}


       <section id="fetures-section"> <!-- FETURES SECTION START -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn">
                            <span class="boldtrin"><b>{$LANG.orderpaymenttermfree}</b></span>
                            <i class="flaticon-computer-4"></i>
                            <h5>{$LANG.getsupport}</h5>
                            <p>{$LANG.getsupport_p}</p>
                            <span>{$LANG.getsupport_span}</span>
                            <a href="submitticket.php">{$LANG.clientareaviewdetails}</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn" data-wow-delay="0.3s">
                            <i class="flaticon-internet-1"></i>
                            <h5>{$LANG.buyadomain}</h5>
                            <p>best team</p>
                            <span>a domain helps customers drive directly to your website. We can help you find one you’ll love.</span>
                            <a href="domainchecker.php">{$LANG.clientareaviewdetails}</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn" data-wow-delay="0.6s">
                            <i class="flaticon-shield-5"></i>
                            <h5>{$LANG.makepayment}</h5>
                            <p>best team</p>
                            <span>You can make the payment process directly and with the highest degree of privacy and protection</span>
                            <a href="clientarea.php">{$LANG.clientareaviewdetails}</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="fetures-place ripplehover wow fadeIn" data-wow-delay="0.9s">
                            <i class="flaticon-server-1"></i>
                            <h5>{$LANG.orderhosting}</h5>
                            <p>best team</p>
                            <span>Hosting is what makes your site visible on the web. We offer fast, eliable plans for every need </span>
                            <a href="cart.php">{$LANG.clientareaviewdetails}</a>
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
                        <h5>{$LANG.navservicesorder}</h5>
                        <span>{$LANG.orderForm.packagesForBudget}</span>
                    </div>
                    <div class="col-md-10 col-md-push-1">
                        <div class="pricing-container">
                            <div class="col-md-4">
                                <div class="plan wow fadeInLeft" data-wow-delay="0.1s"><!-- START PLAN -->
                                    <div class="paln-head planone">
                                        <span>{$LANG.orderpaymenttermfree} <i>all-time</i></span>
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
                                    <div class="ribbon"><span>{$LANG.feedbackbest}</span></div>
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
                        <h5>{$LANG.whyus}</h5>
                        <h4>awesome features come with evry plan <span>monitored 24/7 by our technical support staff.</span></h4>
                    </div>

                    <div class="col-md-10 col-md-push-1">
                        <div class="plans-fut">
                            <div class="row phone-no-last">
                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host wow fadeIn" data-wow-delay="0.1s">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/icons/ic01.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host wow fadeIn" data-wow-delay="0.3s">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/icons/ic02.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-right wow fadeIn" data-wow-delay="0.5s">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/icons/ic03.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div>
                            </div> <!-- END WHY US -->

                            <div class="row phone-no-last">
                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm wow fadeIn" data-wow-delay="0.7s">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/icons/ic04.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm wow fadeIn" data-wow-delay="0.9s">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/icons/ic05.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm no-right wow fadeIn" data-wow-delay="1.1s">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/icons/ic06.png" alt="" />
                                        <h5>Immediate delivery</h5>
                                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Elit.</p>
                                    </div>
                                </div> <!-- END WHY US -->
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- END WHY US -->

            {* <div class="row techologhie-on-host">  <!-- TEC ON SERVER START -->
                <div class="col-md-2">
                    <a class="wow fadeIn" data-wow-delay="0.1s" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/themeforest-light-background.png" alt="logos" /></a><!-- LOGO -->
                </div>

                <div class="col-md-2">
                    <a class="wow fadeIn" data-wow-delay="0.3s" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/3docean-light-background.png" alt="logos" /></a><!-- LOGO -->
                </div>

                <div class="col-md-2">
                    <a class="wow fadeIn" data-wow-delay="0.5s" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/activeden-light-background.png" alt="logos" /></a><!-- LOGO -->
                </div>

                <div class="col-md-2">
                    <a class="wow fadeIn" data-wow-delay="0.7s" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/audiojungle-light-background.png" alt="logos" /></a><!-- LOGO -->
                </div>

                <div class="col-md-2">
                    <a class="wow fadeIn" data-wow-delay="0.9s" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/codecanyon-light-background.png" alt="logos" /></a><!-- LOGO -->
                </div>

                <div class="col-md-2">
                    <a class="wow fadeIn" data-wow-delay="1.1s" href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/graphicriver-light-background.png" alt="logos" /></a><!-- LOGO -->
                </div>
            </div> <!-- TEC ON SERVER END -->
        </div>
    </section><!-- END HOST SERCTION --> *}
	
	
		
		
		 <div class="plans-no-index"><!-- START PLANS -->
            <div class="container"><!-- CONTAINER -->
                <div class="col-md-6">
                    <div class="plans-no-index-info">
                        <h4>great price plan for you</h4><!-- TITTLE -->
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor. Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor.</p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor. Lorem Ipsum Dolor Sit Amet,</p>
                        <p class="logosplan">
                            <a href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/themeforest-light-background.png" alt="logo" /></a><!-- IMAGE -->
                            <a href="#"><img src="{$WEB_ROOT}/templates/{$template}/img/tech/codecanyon-light-background.png" alt="logo" /></a><!-- IMAGE -->
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



		
	
	

{/if}

{include file="$template/includes/verifyemail.tpl"}

<section id="main-body">
    <div class="container{if $skipMainBodyContainer}-fluid without-padding{/if}">
        <div class="row">

        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            {if $primarySidebar->hasChildren() && !$skipMainBodyContainer}
                <div class="col-md-9 pull-md-right">
                    {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                </div>
            {/if}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
            </div>
        {/if}
        <!-- Container for main page display content -->
        <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
            {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage' && !$skipMainBodyContainer}
                {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
            {/if}
