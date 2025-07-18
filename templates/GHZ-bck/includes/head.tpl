<!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/custom.css" rel="stylesheet">


<!-- SKYHOST template -->
<link href="{$WEB_ROOT}/templates/{$template}/css/style.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/responsive.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/flaticon.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/font-awesome.min.css" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/animate.css" rel="stylesheet" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{$mdeLocale}{else}en{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}',
        whmcsBaseUrl = "{\WHMCS\Utility\Environment\WebHelper::getBaseUrl()}",
        recaptchaSiteKey = "{$recaptchaSiteKey}";
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/scripts.min.js?v={$versionHash}"></script>

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}

{if $adminMasqueradingAsClient || $adminLoggedIn && isset($smarty.get.dev) && $smarty.get.dev eq 'true'}
  {* THIS IS TRIGGERED IF ADMIN X IS LOGGED IN. *}


<pre>
Modo desenvolvedor GHZHOST!
<a href='lang/int/'  target="_blank"><button>Traduzir</button></a>
<a href="{$currentpagelinkback}devsmarty=true"><button>Smartyvars</button></a>

</pre>
{if $smarty.get.devsmarty eq 'true'}{debug}{/if}

{/if}
