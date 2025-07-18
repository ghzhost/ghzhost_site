jQuery(document).ready(function(){
    jQuery(document).off("click","ul.adminx-nav-list li a").on("click","ul.adminx-nav-list li a", function(anc) {
        if(!jQuery("body").hasClass("side-bar-collapse") || jQuery("body").hasClass("mobile-device-orientation")){
            var currentNode = jQuery(this),
            nextNode = currentNode.next();
            if (nextNode.is(".parent-sub-nav") && nextNode.is(":visible") && !jQuery("body").hasClass("sidebar-minimized")){
                nextNode.slideUp();
                nextNode.removeClass("nav-menu-open"); 
                nextNode.parent("li").removeClass("active");
            }else if (nextNode.is(".parent-sub-nav") && !nextNode.is(":visible")) {
                var anotherUl = nextNode.parents("ul").first(),
                    parentUl = anotherUl.find("ul:visible").slideUp();
                    parentUl.removeClass("nav-menu-open");
                var parentMainLi = nextNode.parent("li");
                nextNode.slideDown();
                nextNode.addClass("nav-menu-open"); 
                anotherUl.find("li.active").removeClass("active");
                parentMainLi.addClass("active");
                /*
                if(parentMainLi.find("li.second-level-menu").find("ul.parent-sub-nav").first().is(":visible")){
                    parentMainLi.find("li.second-level-menu").addClass("active");
                }
                */
            }
            nextNode.is(".parent-sub-nav") && anc.preventDefault();
        }
    });
    jQuery(document).off("click","#btnNavbarToggleAdminX").on("click","#btnNavbarToggleAdminX", function(toggleArea) {
        jQuery("body").toggleClass("side-bar-collapse");
        jQuery(this).toggleClass("side-nav-closed");
        if(jQuery("body").hasClass("side-bar-collapse")){
            //jQuery("ul.adminx-nav-list").find("ul.parent-sub-nav").removeClass("nav-menu-open");
            //jQuery("ul.adminx-nav-list").find("ul.parent-sub-nav").css('display','none');
        }
    });
    jQuery(document).off("click","#btnControlbarToggleAdminX").on("click","#btnControlbarToggleAdminX", function(toggleControlArea) {
        jQuery("body").toggleClass("control-bar-collapse");
        jQuery("body").toggleClass("control-bar-open-mobile");
        jQuery(this).toggleClass("side-nav-closed");
    });
    jQuery(document).off("click",".right-nav-bar-settings a").on("click",".right-nav-bar-settings a", function(rightBrTgl) {
        var currentNodeRight = jQuery(this),
        nextNodeRight = currentNodeRight.next();
        if(nextNodeRight.is(".drop-down-node") && nextNodeRight.is(":visible")){
            nextNodeRight.slideUp();
            nextNodeRight.removeClass("drop-node-open"); 
            nextNodeRight.parent("li").removeClass("active");
        }else if (nextNodeRight.is(".drop-down-node") && !nextNodeRight.is(":visible")) {
            jQuery(".drop-down-node.drop-node-open").slideUp();
            jQuery(".drop-down-node").removeClass("drop-node-open");
            var parentMainLi = nextNodeRight.parent("li");
            nextNodeRight.slideDown();
            nextNodeRight.addClass("drop-node-open");
            var parentMainLiNode = nextNodeRight.parent("li");
            parentMainLiNode.addClass("active");
        }
    });
    jQuery(document).off("click","span.searchTypeSpan").on("click","span.searchTypeSpan", function(ctrlBr) {
        var currentNodeShorcut = jQuery(this),
        nextNodeShortCut = currentNodeShorcut.next();
        if(nextNodeShortCut.is("#searchtypeCustomFn") && nextNodeShortCut.is(":visible")){
            nextNodeShortCut.slideUp();
        }else if(nextNodeShortCut.is("#searchtypeCustomFn") && !nextNodeShortCut.is(":visible")) {
            nextNodeShortCut.slideDown();
        }
    });
    jQuery(document).off("click","span.searchFieldSpan").on("click","span.searchFieldSpan", function(ctrlB) {
        var currentNodeShort = jQuery(this),
        nextNodeShort = currentNodeShort.next();
        if(nextNodeShort.is("#searchfieldCustomFn") && nextNodeShort.is(":visible")){
            nextNodeShort.slideUp();
        }else if(nextNodeShort.is("#searchfieldCustomFn") && !nextNodeShort.is(":visible")) {
            nextNodeShort.slideDown();
        }
    });
    jQuery(document).off("click","li.control-li-bar").on("click","li.control-li-bar", function(ctrlG) {
        if(!jQuery(this).hasClass("active")){
            jQuery("li.control-li-bar").removeClass("active");
            jQuery(".inner-body-ctrl").removeClass("active");
            var atrributeopen = jQuery(this).attr("data-tab-role");
            jQuery(this).addClass("active");
            jQuery('#'+atrributeopen).addClass("active");
        }
    });
    jQuery(document).off("click","#searchtypeCustomFn li").on("click","#searchtypeCustomFn li", function(ctrlV) {
        var triggerVal = jQuery(this).attr("data-trigger");
        jQuery("#searchtype").val(triggerVal).trigger("change");
        jQuery(".searchTypeSpan").text(jQuery(this).text());
        jQuery("#searchtypeCustomFn").slideUp();
        var liHtmlData = '';
        jQuery("#searchfield > option").each(function() {
            var selectText = this.text;
            var selectVal = this.value;
            liHtmlData += '<li>'+selectText+'</li>';
        });
        if(triggerVal == 'clients' || triggerVal == 'services' || triggerVal == 'domains'){
            jQuery(".searchFieldSpan").text(jQuery("#searchfield option:eq(1)").val());
        }else{
            jQuery(".searchFieldSpan").text(jQuery("#searchfield > option:first-child").val());
        }
        jQuery("#searchfieldCustomFn").html(liHtmlData);
    });
    jQuery(document).off("click","#searchfieldCustomFn li").on("click","#searchfieldCustomFn li", function(ctrGh) {
        var liText = jQuery(this).text();
        jQuery(".searchFieldSpan").text(liText);
        jQuery("#searchfield > option").each(function() {
            if(this.text == liText){
                jQuery(this).attr('selected','selected'); 
            }
        });
        jQuery("#searchfieldCustomFn").slideUp();
    });
    jQuery(document).off("click","ul.color-selection li").on("click","ul.color-selection li", function(colorsc) {
        jQuery("ul.color-selection li").removeClass("active");
        jQuery(this).addClass("active");
        var colorStyle = jQuery(this).attr("data-color-pallate");
        var presentclass = '';
        for(ad=0; ad<=10; ad++){
            if(jQuery("body").hasClass('style_adminx_'+ad)){
                presentclass = 'style_adminx_'+ad;
            }
        }
        if(presentclass != ''){
            jQuery("body").removeClass(presentclass);
            jQuery("body").addClass(colorStyle);
        }else{
            jQuery("body").addClass(colorStyle);
        }
        wgsAdminxStyleChanged(colorStyle);
    });
    jQuery(document).click(function(event) {
        if(!jQuery(event.target).hasClass('have-drop-down-right-nav')) {
            if(jQuery(".drop-down-node.drop-node-open").length > 0){
                jQuery(".drop-down-node.drop-node-open").slideUp();
                jQuery(".drop-down-node").removeClass("drop-node-open");
            }
        }
    });
    if(window.matchMedia("(max-width: 767px)").matches){
        if(!jQuery(".side-navigation-admin-x").hasClass("mobile-device-sidebar-nav")){
            jQuery(".side-navigation-admin-x").addClass("mobile-device-sidebar-nav");
        }
        if(!jQuery(".right-side-control-admin-x").hasClass("mobile-device-control-bar-nav")){
            jQuery(".right-side-control-admin-x").addClass("mobile-device-control-bar-nav");
        }
        if(!jQuery("body").hasClass("mobile-device-orientation")){
            jQuery("body").addClass("mobile-device-orientation");
        }
    } else{
        jQuery(".side-navigation-admin-x").removeClass("mobile-device-sidebar-nav");
        jQuery(".right-side-control-admin-x").removeClass("mobile-device-control-bar-nav");
        jQuery("body").removeClass("mobile-device-orientation");
    }
});
function wgsAdminxStyleChanged(clrStyleAdminx){
    jQuery.ajax({
		type: "POST",
		url: "",
		data: {
			'ajaxCallAdminxThemeStyle':'proceed',
			'colorStyle':clrStyleAdminx,
		},
		success: function (result) {
		}
	});  
}