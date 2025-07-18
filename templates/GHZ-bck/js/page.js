jQuery(document).ready(function() {
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).fadeIn("fast");
        },
        function() {
            $('.dropdown-menu', this).fadeOut("fast");
        });
    $('[data-toggle="tooltip"]').tooltip();
    new WOW().init();

	
	 $('body').append('<div id="toTop" class="btn"><span class="fa fa-chevron-up"></span></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	
    $('.se-pre-con').delay(1200).fadeOut('slow');
	
	
	$("[data-toggle=offcanvas]").click(function(){
    $("body").toggleClass("offcanvas-stop-scrolling");
	$(".navbar-offcanvas").toggleClass("in");
	$(".navbar-offcanvas").toggleClass("offcanvas-transform");
	$(".offcanvas-toggle").toggleClass("is-open");
    });
	
	
});