<?php
/* Smarty version 3.1.48, created on 2024-07-22 22:38:15
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/includes/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669f0987415a16_40602001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515f4e522be9301dfa1bd639a2c7649dca61ee55' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/includes/head.tpl',
      1 => 1721698647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669f0987415a16_40602001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Styling -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/custom.css" rel="stylesheet">


<!-- template -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/style.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/responsive.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/flaticon.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/animate.css" rel="stylesheet" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<!--Start of Tawk.to Script-->
<?php echo '<script'; ?>
 type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5787db25a272acff5c8946b6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
<?php echo '</script'; ?>
>
<!--End of Tawk.to Script-->


<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.title"),$_smarty_tpl ) );?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
        saved = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saved"),$_smarty_tpl ) );?>
',
        saving = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saving"),$_smarty_tpl ) );?>
',
        whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
",
        recaptchaSiteKey = "<?php echo $_smarty_tpl->tpl_vars['recaptchaSiteKey']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value || $_smarty_tpl->tpl_vars['adminLoggedIn']->value && (isset($_GET['dev'])) && $_GET['dev'] == 'true') {?>
  <pre>
Modo desenvolvedor GHZHOST!
<a href='lang/int/'  target="_blank"><button>Traduzir</button></a>
<a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
devsmarty=true"><button>Smartyvars</button></a>

</pre>
<?php if ($_GET['devsmarty'] == 'true') {
$_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
}?>

<?php }?>

<?php if ($_GET['launch'] == 'true') {?>
  <?php echo '<script'; ?>
>
  document.addEventListener('DOMContentLoaded', function() {
      function executeFireworks() {
          // Add the script
          let script = document.createElement('script');
          script.src = '<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/js/fireworks.js';
          script.id = 'fireworksScript';
          document.body.appendChild(script);
  
          // Add the CSS
          let link = document.createElement('link');
          link.rel = 'stylesheet';
          link.href = '<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/css/fireworks.css';
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
  <?php echo '</script'; ?>
>
  <?php }?>





<?php }
}
