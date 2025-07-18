{if $twitterusername}
    <div style="padding: 80px 0;">
    <h2 style="    text-transform: uppercase;
    font-size: 19px;
    font-weight: bold;
    color: #607D8B;
    padding-top: 5px;
    margin-bottom: 30px;">{$LANG.twitterlatesttweets}</h2>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="{$BASE_PATH_IMG}/loading.gif" /></p>
    </div>
  
    <script type="text/javascript" src="templates/{$template}/js/twitter.js"></script>
</div>
{elseif $announcements}


    {foreach $announcements as $announcement}
        {if $announcement@index < 2}
		<div style="padding:80px 0">
            <div class="announcement-single">
                <h3>
                    <span class="label label-succes">
                        {$announcement.rawDate|date_format:"M d"}
                    </span>
                    <a class="anoncementhraf" href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}">{$announcement.title}</a>
                </h3>

                <blockquote>
                    <p class="anoncementhraftext">
                        {if $announcement.text|strip_tags|strlen < 350}
                            {$announcement.text}
                        {else}
                            {$announcement.summary}
                            <a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" class="label label-warning">{$LANG.readmore} &raquo;</a>
                        {/if}
                    </p>
                </blockquote>

                {if $announcementsFbRecommend}
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="{$systemurl}{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="{$systemurl}{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                {/if}
            </div>
			</div>
        {/if}
    {/foreach}
{/if}


</section>
</div>
</div>
</div>
 {* <div class="domain-search-info-plus"><!-- DOMAIN OFFRE -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <h5 class="wow fadeIn" data-wow-delay="0.3s"><span>free privacy</span>protrction</h5>
                    </div>

                    <div class="col-md-3">
                        <h5 class="wow fadeIn" data-wow-delay="0.6s"><span>advenced dns</span>controls</h5>
                    </div>

                    <div class="col-md-3">
                        <h5 class="thelast wow fadeIn" data-wow-delay="0.9s"><span>unlimited</span>support</h5>
                    </div>

                    <div class="col-md-3">
                        <h4 class="wow fadeIn" data-wow-delay="1.1s"><span>for just</span>$15<b>yearly</b></h4>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- END DOMAIN OFFRE --> *}

