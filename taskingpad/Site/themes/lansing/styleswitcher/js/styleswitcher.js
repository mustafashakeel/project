// Styleswitcher by UnitedThemes
(function($){
		
	$(document).ready(function(){

		$('#ut_styleswitcher').stop().delay(800).animate({ left: ( $( '#ut_styleswitcher' ).css('left')== '0px' ? '-' +$('#ut_styleswitcher').outerWidth()+'px':'0px')}, 800);
        
		$('#ut_styleswitcher .toggle').click(function(e){
        
			e.preventDefault();
        	$( '#ut_styleswitcher' ).stop().animate({ left: ( $( '#ut_styleswitcher' ).css('left')== '0px' ? '-' +$('#ut_styleswitcher').outerWidth()+'px':'0px')})
			
        });
                
	});               
	
})(jQuery);	