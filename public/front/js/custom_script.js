(function($) {
    $('.pilares .contenido_pilares .col-md-6').hover(function() {
        $('.pilares .img_pilares').removeClass('im1').removeClass('im2').removeClass('im3').removeClass('im4').removeClass('im5').removeClass('im6');
        $('.pilares .img_pilares').addClass($(this).attr('data-img'));
    });
    $('.save_pop a').click(function(event) {
        jQuery('#pum-1204').popmake('close');
    });
    $(window).scroll(function() {
        if ($('.pilares').length) {
            var hT = $('.pilares').offset().top,
                hH = $('.pilares').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();
            if (wS > (hT + hH - wH)) {
                $('.pilares .img_pilares').addClass('efecto_img');
                $('ul.social-icon.social_fijo').attr('style',null);
            }
            else{
                $('ul.social-icon.social_fijo').attr('style','right: -3%;opacity: 0;transition-delay: 0s;');    
            }
        }
    });
    var aporte = $('#aporte');
    if(aporte.length){
      aporte.owlCarousel({
    	    autoplay:true,
    	    autoplayTimeout:7000,
    	    autoplayHoverPause:true,
    	    touchDrag  : false,
         	mouseDrag  : false,
    	    animateOut: 'fadeOut',
    	    smartSpeed:1450,
    	    loop:true,
    	    margin:0,
    	    nav:false,
    	    items:1
    	});
    }
    $('.owl_nextI').click(function() {
       aporte.trigger('next.owl.carousel');
    });
    window.onload = function() {
        if ($('.pilares').length) {
            var estilo = '<style type="text/css">.pilares .img_pilares{background-image: url('+$('.pilares .contenido_pilares .col-md-6').last().attr('data-bg')+');}';
            $('.pilares .contenido_pilares .col-md-6').each(function(index, value) {
                estilo += '.pilares .img_pilares.'+$(this).attr('data-img')+'{background-image: url('+$(this).attr('data-bg')+');transition-delay:0s;}';
            });
            estilo +='</style>';
            $('head').append(estilo);
        }
        var lastScrollTop = 0;
        var estadoScroll ='transform:rotate(180deg);';
        $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st > lastScrollTop){
              estadoScroll ='transform:rotate(180deg);';
           } else {
              estadoScroll ='transform:rotate(0deg);';
           }
           lastScrollTop = st;
           $('#flecha_scroll').attr('style', estadoScroll);
        });
    };
})(jQuery);