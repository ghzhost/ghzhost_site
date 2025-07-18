<?php
/* Smarty version 3.1.48, created on 2024-07-21 17:00:29
  from '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669d68dde20305_67573253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f86d67da5695e204d7a696b428f30fa1602119c' => 
    array (
      0 => '/home/ghzhost/web/ghzhost.com/public_html/templates/GHZ/homepage.tpl',
      1 => 1721591204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669d68dde20305_67573253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ghzhost/web/ghzhost.com/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>
    <div style="padding: 80px 0;">
    <h2 style="    text-transform: uppercase;
    font-size: 19px;
    font-weight: bold;
    color: #607D8B;
    padding-top: 5px;
    margin-bottom: 30px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" /></p>
    </div>
  
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/twitter.js"><?php echo '</script'; ?>
>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->index = -1;
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
$_smarty_tpl->tpl_vars['announcement']->index++;
$__foreach_announcement_0_saved = $_smarty_tpl->tpl_vars['announcement'];
?>
        <?php if ($_smarty_tpl->tpl_vars['announcement']->index < 2) {?>
		<div style="padding:80px 0">
            <div class="announcement-single">
                <h3>
                    <span class="label label-succes">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],"M d");?>

                    </span>
                    <a class="anoncementhraf" href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
                </h3>

                <blockquote>
                    <p class="anoncementhraftext">
                        <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) < 350) {?>
                            <?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

                            <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 &raquo;</a>
                        <?php }?>
                    </p>
                </blockquote>

                <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
                    <?php echo '<script'; ?>
>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    <?php echo '</script'; ?>
>
                    <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                <?php }?>
            </div>
			</div>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>


</section>
</div>
</div>
</div>
 
<?php }
}
