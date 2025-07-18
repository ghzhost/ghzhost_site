
<!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/custom.css" rel="stylesheet">


<!-- template -->
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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5787db25a272acff5c8946b6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


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



<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

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

{if $smarty.get.launch eq 'true'}
  <script>
  document.addEventListener('DOMContentLoaded', function() {
      function executeFireworks() {
          // Add the script
          let script = document.createElement('script');
          script.src = '{$WEB_ROOT}/assets/js/fireworks.js';
          script.id = 'fireworksScript';
          document.body.appendChild(script);
  
          // Add the CSS
          let link = document.createElement('link');
          link.rel = 'stylesheet';
          link.href = '{$WEB_ROOT}/assets/css/fireworks.css';
          link.id = 'fireworksCSS';
          document.head.appendChild(link);
  
          // Add the canvas
          let canvas = document.createElement('canvas');
          canvas.id = 'canvasfireworks';
          document.body.appendChild(canvas);
  
          // Wait for the script to load before starting the fireworks
          script.onload = () => {
              onLoad();
  
           //   Stop the fireworks and remove elements after 30 seconds
               setTimeout(() => {
                stopFireworks();
                 removeFireworksElements();
            }, 15000);
          };
      }
  
      function removeFireworksElements() {
          // Remove the script
          let script = document.getElementById('fireworksScript');
          if (script) {
              script.remove();
          }
  
          // Remove the CSS link
          let link = document.getElementById('fireworksCSS');
          if (link) {
              link.remove();
          }
  
          // Remove the canvas
          let canvas = document.getElementById('canvasfireworks');
          if (canvas) {
              canvas.remove();
          }
      }
  
      // Call the function
      executeFireworks();
  });
  </script>
  {/if}





