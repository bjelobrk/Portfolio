$(document).ready(function () {

    $(".cv").click(function () {

        $(".win1").fadeIn(100);
        $('body').css('overflow', 'hidden');
        $('.win1').css('overflow', 'scroll');

    });

    $(".cl").click(function () {

        $(".win2").fadeIn(100);
        $('body').css('overflow', 'hidden');
        $('.win2').css('overflow', 'scroll');

    });

    $(".ser").click(function () {

        $(".win3").fadeIn(100);
        $('body').css('overflow', 'hidden');
        $('.win3').css('overflow', 'scroll');

    });


    $(".close").click(function () {

        $('body').css('overflow', 'visible');
        // $(".win1,.win2,.win3").animate({
        //	        scrollTop:  -1000
        //  	   });
        $(".win1,.win2,.win3").fadeOut(500);


    });

});