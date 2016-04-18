 $(document).scroll(function () {
    var y = $(this).scrollTop();
    
    if (y > 50 ) {
        $('.top').fadeIn(300);
    } 
    else {
        $('.top').fadeOut(800);
        
    }

});