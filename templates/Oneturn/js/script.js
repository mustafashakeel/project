 $(document).ready(function() {


/*---------------------------------------------------------------- One Page Navigation ----------------------------*/

	$('.nav').onePageNav({
	filter: ':not(.external)',
	scrollThreshold: 0.25,
	scrollOffset: 90,
	});
         



/*--------------------------------------------------------------------------- Tooltip-------------------------------*/
	
	if( $.fn.tooltip() ) {
		$('[class="tooltip_hover"]').tooltip();
	}



	$('.carousel').carousel({
	  interval: 2000
	})

/*--------------------------------------------------------------- Team hover-------------------------------*/
	if(jQuery('.team').size() > 0) {
		
			/* Hover over item */
			jQuery('.team .teffect').hover(function() {
				jQuery(this).addClass('hover');
				jQuery(this).find('.item-overlay').stop(true,true).fadeIn();
				jQuery(this).find('.item-content').css({"bottom":"5px", "opacity":"0", "display":"block"}).stop(true,true).animate({"bottom":"20px", "opacity":"1"});
			}, function() {
				jQuery(this).removeClass('hover');
				jQuery(this).find('.item-overlay').stop(true,true).fadeOut();
				jQuery(this).find('.item-content').stop(true,true).animate({"opacity":"0"});
			});
		
	}




/*--------------------------------------------------------------- Testimonials Carousel --------------------*/

	$('.carousel').carousel({
	  interval: 2000
	})






/*--------------------------------------------------------------- Responsive Video plugin ------------------*/

	$(".video").fitVids();
	
	


/*--------------------------------------------------------------------------- ToTop -------------------------*/

	 $(window).scroll(function(){
		 if ($(this).scrollTop() > 100) {
			 $('.scrollup').fadeIn();
		 } else {
			 $('.scrollup').fadeOut();
		 }
	 }); 
 
	 $('.scrollup').click(function(){
		 $("html, body").animate({ scrollTop: 0 }, 600);
		 return false;
	 });



/*---------------------------------------------------------------------- Add shadow to the header -------------*/

	 $(window).scroll(function(){
		 if ($(this).scrollTop() > 500) {
			 $("header").addClass("shadow");
		 } else {
			 $("header").removeClass("shadow");
		 }
	 }); 



/*--------------------------------------------------------------- Logos hover------------------------------*/
    
    $('.logos ul li img').adipoli( {
    	'startEffect' : 'grayscale',
    	'hoverEffect' : 'normal'    
    });


});


 
