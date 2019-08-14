(function ($) {
    $(document).ready(function (){
      $('#backTop').on('click', function () {
        $("body,html").animate({
          scrollTop: 0,
        }, 1000);
      });
    });
    
    
    $(window).on('scroll', function (){
        var ofs = window.pageYOffset; 
        
        
        if(ofs > 300) {
            $('#backTop').addClass('show');
        }else {
            $('#backTop').removeClass('show');
        }
    });
})(jQuery);