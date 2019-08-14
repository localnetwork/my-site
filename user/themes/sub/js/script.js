(function ($){
    'use strict'; 
    
    $(window).on('load', function(){
       console.log('page loaded!'); 
       
       $('.body').removeClass('is-page-loading').addClass('is-page-loaded');  
       
    });
    
    

    $(document).ready(function(){
        formValidate(); 
        sliders();
        
        
        $('.matchHeight').matchHeight();
        
        // Download File
        
        $('.link-download').each(function () {
            console.log($(this).attr('href'));  
            var url = $(this).attr("href");
            
            $(this).on('mousedown', function () {
                $(this).attr("href", url);
            }); 
        }); 
        
        
      
    });
    
    $(window).scroll(function (){ 
        
    });
    
    
    function formValidate() {
        $.validator.methods.email = function (value, element) {
			return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
		};
		
        $('.has-validator').validate({
            rules: { 
				email: {
					email: true
				},
			},
        }); 
    }
    
    
    
    function sliders() {
        $('.block-slider .block-wrapper').slick({
            dots: true,
            arrows: true, 
            infinite: false,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            lazyload: 'ondemand', 
            rows: '0',  
        });
    }

})(jQuery);