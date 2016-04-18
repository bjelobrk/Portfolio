$(document).ready(function () {

    $(".nav-button").click(function () {
        $(".nav-button,.primary-nav").toggleClass("open");

    });
    $(".primary-nav>li>a").click(function () {
        $(".nav-button,.primary-nav").removeClass("open");
    });

});