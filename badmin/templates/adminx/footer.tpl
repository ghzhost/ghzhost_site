</div></div>
<div class="clear"></div>
</div> <!-- main section contentarea -->
<div class="footerbar">
    <div class="copyright">
        <!-- Removal of the WHMCS copyright notice is strictly prohibited -->
        <!-- Branding removal entitlement does not permit this line to be removed -->
        Copyright &copy;
        <a href="https://www.whmcs.com/" target="_blank">WHMCS</a> {date('Y')}.
        All Rights Reserved.
    </div>
    <div class="links">
        <a href="https://www.whmcs.com/report-a-bug" target="_blank">Report a Bug</a>
        |
        <a href="https://docs.whmcs.com/" target="_blank">Documentation</a>
        |
        <a href="https://www.whmcs.com/contact" target="_blank">Contact Us</a>
    </div>
    <div class="time-bar">
        {$carbon->translateTimestampToFormat($smarty.now, "l, j F Y, H:i")}
    </div>
</div>
<aside class="right-side-control-admin-x">
    {include file="$template/custom_files/nav_right_side_control.tpl"}
</aside>
</div> <!-- wrapper end -->
    {include file="$template/intellisearch-results.tpl"}
    {include file="$template/includes.tpl"}
    {$footeroutput}
</body>
</html>
