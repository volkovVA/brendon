"use strict";
$(window).on( 'load', function() {

	/*------------------ Hover Main Menu ------------------*/
	if($('.mnu>ul>li').hasClass('selected')){
		$('.selected').addClass('active');
		var currentleft=$('.selected').position().left+"px";
		var currentwidth=$('.selected').css('width');
		$('.lamp').css({"left":currentleft,"width":currentwidth});
	}
	else{
		$('.mnu>ul>li').first().addClass('active');
		var currentleft=$('.active').position().left+"px";
		var currentwidth=$('.active').css('width');
		$('.lamp').css({"left":currentleft,"width":currentwidth});
	}
	$('.mnu>ul>li').on({
	 mouseenter: function(){
		$('.mnu ul li').removeClass('active');
		$(this).addClass('active');
		var currentleft=$('.active').position().left+"px";
		var currentwidth=$('.active').css('width');
		$('.lamp').css({"left":currentleft,"width":currentwidth});
	},
	 mouseleave: function(){
		if($('.mnu>ul>li').hasClass('selected')){
			$('.selected').addClass('active');
			var currentleft=$('.selected').position().left+"px";
			var currentwidth=$('.selected').css('width');
			$('.lamp').css({"left":currentleft,"width":currentwidth});
		}
		else{
			$('.mnu>ul>li').first().addClass('active');
			var currentleft=$('.active').position().left+"px";
			var currentwidth=$('.active').css('width');
			$('.lamp').css({"left":currentleft,"width":currentwidth});
		}
	}});


	/*------------------ Mobile Main Menu ------------------*/
	$(".toggle-mnu").on( 'click', function(){
		$(this).toggleClass("on");
		$(".top_mnu").slideToggle();
		return false;
	});

	/*------------------ First Window Height Detected ------------------*/
	
	$(".head_bg").height($(window).height());
	$(window).on( 'resize', function(){
		$(".head_bg").height($(window).height());
	}); 


	/*------------------ Animate WOW ------------------*/

	new WOW().init();


	/*------------------ Scroll Menu------------------*/

	$(".mnu ul li a, .slide_mnu ul li a, .scroll_bottom a, .scrollup").mPageScroll2id(); 


	/*------------------ Popup Window Effect------------------*/

	$('.link').magnificPopup({
        type:'image',
        gallery:{enabled:true},
        zoom:{enabled: true, duration: 300}
    });


	/*------------------ Button to Top------------------*/
	
	$(window).on( 'scroll', function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	}); 

	// PORTFOLIO ISOTOPE
    var $container = $('.isotope_items');
    $container.isotope();

    $('.portfolio_filter ul li').on("click", function(){
        $(".portfolio_filter ul li").removeClass("select-cat");
        $(this).addClass("select-cat");				 
        var selector = $(this).attr('data-filter');
        $(".isotope_items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
    });
        return false;
    }); 

});


/*------------------Preloader------------------*/
$(window).on( 'load', function(){

	$(".loader").delay(1000).fadeOut("slow");
	$(".content_name .hello").addClass('animated zoomIn');
	$(".content_name .name").addClass('animated zoomIn');
	$(".content_prof p").addClass('animated zoomIn');
	$(".content_download p").addClass('animated zoomIn');

}); 

/*------------------CountUp------------------*/

$('.counter').countUp({
  'time': 2000,
  'delay': 10
});


	
