/* ==============================================
Flexslider
=============================================== */
$(window).load(function() {

    $('.flexslider').flexslider({
    	pauseOnHover: true,
    	directionNav: false
    });
    
});

$(document).ready(function() {

    /* ==============================================
    Checkboxes
    =============================================== */
    $('.label-checkbox').on('click', function() {
    	setupLabel();
    });

    function setupLabel() {
        if ($('.label-checkbox input').length) {
            $('.label-checkbox').each(function(){ 
                $(this).removeClass('checkbox-on');
            });
            $('.label-checkbox input:checked').each(function(){ 
                $(this).parent('label').addClass('checkbox-on');
            });                
        };
    };

    /* ==============================================
    Smooth Scrolling
    =============================================== */
    $('ul.nav li a, .logo a, .featured a, .hero-section a, .prices a').on('click', function(e){
        el = $(this).attr('href');
        $('html, body').animate({scrollTop: $(el).offset().top - 74}, 750);
        e.preventDefault();
    });

    /* ==============================================
    Mobile Menu
    =============================================== */
    if ($('.mobile-nav').length && $('.mobile-nav').attr('data-autogenerate') == 'true') {
        var mobileMenu = $('.mobile-nav');
        $('ul.nav li a').each(function(index, elem) {
            mobileMenu.append($('<option></option>').val($(elem).attr('href')).html($(elem).html()));
        });
    }

    $('.mobile-nav').on('change', function() {
        link = $(this).val();
        if (!link) {
            return;
        }

        if (link.substring(0,1) == '#') {
            $('html, body').animate({scrollTop: $(link).offset().top - 74}, 750);
        } else {
            document.location.href = link;
        }
    });

    /* ==============================================
    Fancybox
    =============================================== */
    $("a[rel=fancybox]").fancybox({
        'overlayShow'   : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic'
    });


});