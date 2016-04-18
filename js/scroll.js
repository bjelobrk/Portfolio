$(document).ready(function () {
    if ($(window).width() > 600) {
        $(window).bind('scroll', function () {
            var navHeight = $(window).height() - 70;

            if ($(window).scrollTop() > navHeight) {
                $('nav').addClass('fixed');
            }
            else {
                $('nav').removeClass('fixed');
            }


        });
    } else {
        $(window).bind('scroll', function () {
            var navHeight = 200;

            if ($(window).scrollTop() > navHeight) {
                $('nav').addClass('fixed');
            }
            else {
                $('nav').removeClass('fixed');
            }


        });
    }

    var targetOffset1 = $("#screen1").offset().top;
    var targetOffset2 = $("#screen2").offset().top;
    var targetOffset3 = $("#screen3").offset().top;
    var targetOffset4 = $("#screen4").offset().top;


    $('.primary-nav li a:eq(0)').css({"color": "#00bae0"});

    var $w = $(window).scroll(function () {
        if ($w.scrollTop() > targetOffset1 - 75) {
            $('.primary-nav li a:eq(0)').css({"color": "#00bae0"});
            $('.primary-nav li a:eq(1)').css({"color": "#000000"});
            $('.primary-nav li a:eq(2)').css({"color": "#000000"});
            $('.primary-nav li a:eq(3)').css({"color": "#000000"});

        }
        if ($w.scrollTop() > targetOffset2 - 75) {
            $('.primary-nav li a:eq(0)').css({"color": "#000000"});
            $('.primary-nav li a:eq(1)').css({"color": "#00bae0"});
            $('.primary-nav li a:eq(2)').css({"color": "#000000"});
            $('.primary-nav li a:eq(3)').css({"color": "#000000"});

        }
        if ($w.scrollTop() > targetOffset3 - 75) {
            $('.primary-nav li a:eq(0)').css({"color": "#000000"});
            $('.primary-nav li a:eq(1)').css({"color": "#000000"});
            $('.primary-nav li a:eq(2)').css({"color": "#00bae0"});
            $('.primary-nav li a:eq(3)').css({"color": "#000000"});
        }
        if ($w.scrollTop() > targetOffset4 - 75) {
            $('.primary-nav li a:eq(0)').css({"color": "#000000"});
            $('.primary-nav li a:eq(1)').css({"color": "#000000"});
            $('.primary-nav li a:eq(2)').css({"color": "#000000"});
            $('.primary-nav li a:eq(3)').css({"color": "#00bae0"});
        }
    });


});
