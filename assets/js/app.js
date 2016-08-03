// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. BURGER MENU
// == B. HOMEPAGE CAROUSEL
// ==
// ====== INDEX  ======================================================================================================

jQuery(document).ready(function($) {

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
// A.1. BURGER MENU --------------------------------------------------------------------------------------------------- 
    
$('.reveal').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hide-nav') ) {
        
        $(target).removeClass('hide-nav');
        $('.reveal').addClass('is-active');
        
    } else {
        
        $(target).addClass('hide-nav');
        $('.reveal').removeClass('is-active');
        
    }
    
    e.preventDefault();
    
  });
    
// A.1. END -----------------------------------------------------------------------------------------------------------
  
// A.2. GENERAL SHOW --------------------------------------------------------------------------------------------------
    
$('.showhide').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.showhide').addClass('close');
        
    } else {
        
        $(target).addClass('hidden');
        $('.showhide').removeClass('close');
        
    }
    
    e.preventDefault();
    
  });
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.3. SHOW/HIDE -----------------------------------------------------------------------------------------------------
    
var currentContent = '';
	$(".toggle-div").on('click', function(){
		currentContent = $(this).attr('name');
		if($('#'+currentContent).hasClass('on')){
			$('#'+currentContent).removeClass('on');
            $("body").removeClass("modal-open");
		}else{
			hideAllContent();
			showCurrentContent(currentContent);
		}
	});

	function hideAllContent(){
		$('.toggle-content').removeClass('on');
        $("body").removeClass("modal-open");
	};
	
	function showCurrentContent(currentContentDiv){
		$('#'+currentContentDiv).addClass('on');
        $("body").addClass("modal-open");
	};	
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.3. SCROLL TO LINK ------------------------------------------------------------------------------------------------
    
    $('.textLink, .email-us, .home-link').click(function(event){
        
        event.preventDefault();
        // calculate destination place
        var dest=0;
        if($(this.hash).offset().top > $(document).height()-$(window).height()){
            dest=$(document).height()-$(window).height();
        }else{
            dest=$(this.hash).offset().top;
        }
        // go to destination
        $('html,body').animate({scrollTop:dest}, 1000,'swing');
        
        // BURGER MENU
        $('#mobi-nav').addClass('hide-nav');
        $('.burger').removeClass('is-active');
        
    });
    
// A.3. END -----------------------------------------------------------------------------------------------------------
    
// A.4. SHOW HIDE LOGO ------------------------------------------------------------------------------------------------

    var t = $('.wrapper').offset().top;

    $(document).scroll(function(){

        if (document.documentElement.clientWidth > 540) {

            // Hide the logo, and show as you scroll
            if($(this).scrollTop() > t)
            {   
                $('#masthead').addClass('grow');

            }else{
                $('#masthead').removeClass('grow');
            }


        } else {}


    });
    
// A.4. END -----------------------------------------------------------------------------------------------------------
    
// A.5. SCREEN SIZE CHECK ---------------------------------------------------------------------------------------------
    
    var screen = $( window ).width();
    console.log('I am a phone, and my width is: ' + screen);
    
// A.5. END -----------------------------------------------------------------------------------------------------------
    
// A.6. RESOURCE PATHS ------------------------------------------------------------------------------------------------
    
    var icons = 'assets/includes/icons/'; 
    
// A.6. END -----------------------------------------------------------------------------------------------------------
    
// A.7. JCAROUSEL MAIN SCREEN -----------------------------------------------------------------------------------------

    (function($) {
        $(function() {
            var jcarousel = $('.jcarousel');
            
            if ($(window).width() < 769) {
                $('.home-carousel .carousel-pic .image').addClass('set-left');
            }
            
            if ($(window).width() > 1023) {
                $('.home-carousel .carousel-pic .image').addClass('set-top');
            }

            jcarousel
                .on('jcarousel:reload jcarousel:create', function () {
                    var carousel = $(this),
                        width = carousel.innerWidth();

                    carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
                })

                .jcarousel({
                    wrap: 'circular'
                });

            $('.jcarousel').jcarouselAutoscroll({
                autostart: false
            });

            $('.jcarousel-control-prev')
                .jcarouselControl({
                    target: '-=1'
                });

            $('.jcarousel-control-next')
                .jcarouselControl({
                    target: '+=1'
                });

            $('.jcarousel-pagination')
                .on('jcarouselpagination:active', 'a', function() {
                    $(this).addClass('active');
                })
                .on('jcarouselpagination:inactive', 'a', function() {
                    $(this).removeClass('active');
                })
                .on('click', function(e) {
                    e.preventDefault();
                })
                .jcarouselPagination({
                    perPage: 1,
                    item: function(page) {
                        return '<a href="#' + page + '">' + page + '</a>';
                    }
                });
        });
    })(jQuery);
    
// A.7. END -----------------------------------------------------------------------------------------------------------
    
// A.8. RANDOM IMAGE SELECTOR -----------------------------------------------------------------------------------------
	
    var totalImages = 4;

    var RandomNum = Math.floor( Math.random() * totalImages);

    $(document).ready(function(){

        //$('.section-home').attr("style","background-image:url('wp-content/themes/iimg/assets/images/background/iimg"+RandomNum+".jpg')");

    }); 
    
// A.8. END -----------------------------------------------------------------------------------------------------------
    
// A.9. BACK BUTTON ---------------------------------------------------------------------------------------------------
    
// A.9. END -----------------------------------------------------------------------------------------------------------

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
});