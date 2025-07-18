<?php
/* Smarty version 3.1.48, created on 2024-07-19 16:50:07
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/viewannouncement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669ac36fae9ab6_29215121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b19a7d741e31a54d914fb6844a5a3f6308e8735' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/viewannouncement.tpl',
      1 => 1719979316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669ac36fae9ab6_29215121 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['twittertweet']->value) {?>
    <div class="pull-right">
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="<?php echo $_smarty_tpl->tpl_vars['twitterusername']->value;?>
">Tweet</a><?php echo '<script'; ?>
 type="text/javascript" src="//platform.twitter.com/widgets.js"><?php echo '</script'; ?>
>
    </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>


<br />
<br />

<?php if ($_smarty_tpl->tpl_vars['editLink']->value) {?>
    <p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['editLink']->value;?>
" class="btn btn-default btn-sm pull-right">
            <i class="fas fa-pencil-alt fa-fw"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>

        </a>
    </p>
<?php }?>

<p>
    <strong><?php echo $_smarty_tpl->tpl_vars['carbon']->value->createFromTimestamp($_smarty_tpl->tpl_vars['timestamp']->value)->format('l, F j, Y');?>
</strong>
</p>

<?php if ($_smarty_tpl->tpl_vars['googleplus1']->value) {?>
    <br />
    <br />
    <g:plusone annotation="inline"></g:plusone>
    <?php echo '<script'; ?>
 type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebookrecommend']->value) {?>
    <br />
    <br />
    
    <div id="fb-root">
    </div>
    <?php echo '<script'; ?>
>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
    
    <div class="fb-like" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['urlfriendlytitle']->value);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebookcomments']->value) {?>
    <br />
    <br />
    
    <div id="fb-root">
    </div>
    <?php echo '<script'; ?>
>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
    
    <fb:comments href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['urlfriendlytitle']->value);?>
" num_posts="5" width="500"></fb:comments>
<?php }?>

<p>
    <a href="<?php echo routePath('announcement-index');?>
" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
</a>
</p>
<?php }
}
