{assign var=flag_url value="."|explode:$smarty.server.HTTP_HOST}
{assign var=ipcontry value=$smarty.server.HTTP_CF_IPCOUNTRY}
{assign var=urlcontry value=$smarty.server.HTTP_HOST|replace:$flag_url[0]:$ipcontry|lower}

<meta name="title" content=".:: {$companyname}{$flag_url[0]|upper} ::. — {$LANG.title_slug}" />
<meta name="description" content="{$LANG.og_description}" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://{$ipcontry|lower}.ghzhost.com/" />
<meta property="og:title" content=".:: {$companyname}{$flag_url[0]|upper} ::. — {$LANG.title_slug}" />
<meta property="og:description" content="{$LANG.og_description}" />
<meta property="og:image" content="https://{$ipcontry|lower}.ghzhost.com/img/og.png" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content=".:: {$companyname}{$flag_url[0]|upper} ::. — {$LANG.title_slug}" />
<meta property="twitter:description" content="{$LANG.og_description}" />
<meta property="twitter:image" content="https://{$ipcontry|lower}.ghzhost.com/img/og.png" />
