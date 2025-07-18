jQuery(document).ready(function () {
	jQuery('.topnav-right a.bar-icon').on('click',function(){
	  jQuery('.right-menu-admin').toggle();
	});
	jQuery('.topnav-right a.bar-icon').click( function(e){
		e.stopPropagation();
	});
	jQuery('.right-menu-admin').click( function(e) {
		e.stopPropagation(); 
	 });
	jQuery('body').click( function() {
		jQuery('.right-menu-admin').hide();
	});
	jQuery('body').on('click', '.growl-close', function(){
		jQuery(this).parent().remove();
	});
});

/* Cloudx Setting feature */
function wgsSubmitAdminxSettings(obj,formId){
	jQuery(obj).attr("disable",true);
	jQuery(obj).find("i").removeClass("fas fa-save").addClass("fas fa-spinner fa-spin");		
	var formSerialize = jQuery("form#"+formId).serialize();
	jQuery.ajax({
		type: "POST",
		url: "",
		data: {
			'ajaxCallAdminxTheme':'proceed',
			'callFor':'adminxSettingsSave',
			'requested_form':formId,
			'adminxSettingData':formSerialize,
		},
		success: function (result) {
			var objData = jQuery.parseJSON(result);
			if(objData.status == 'success'){
				jQuery("#growls").html('<div class="growl growl-notice growl-large"><div class="growl-close">×</div><div class="growl-title">Success!</div><div class="growl-message">'+objData.msg+'</div></div>');
				setTimeout(function() {
					jQuery(obj).attr("disable",false);
					jQuery(obj).find("i").removeClass("fas fa-spinner fa-spin").addClass("fas fa-save");						
					jQuery("#growls").html('');
				},1000);				
			}else if(objData.status == 'error'){
				jQuery("#growls").html('<div class="growl growl-error growl-large"><div class="growl-close">×</div><div class="growl-title">Error!</div><div class="growl-message">'+objData.msg+'</div></div>');
				setTimeout(function() {
					jQuery(obj).attr("disable",false);
					jQuery(obj).find("i").removeClass("fas fa-spinner fa-spin").addClass("fas fa-save");						
					jQuery("#growls").html('');
				},1000);					
			}
			if(formId == 'styleSettingsForm'){
				location.reload();
			}
		}
	});	
}