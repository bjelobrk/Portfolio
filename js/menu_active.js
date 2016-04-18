$(document).ready(function () {

    $('menu a').each(function (index) {
        if (this.href.trim() == window.location)
            $(this).parent().addClass("selected");



    });
});