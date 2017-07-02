$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('#to-the-top').fadeIn(100);
        } else {
            $('#to-the-top').fadeOut(0);
        }
    });
    $('#to-the-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, {
            duration: 2000,
            easing: "easeOutQuint"
        });
    });


    $('.mouse').click(function () {
        $("html, body").animate({
            scrollTop: 650
        }, {
            duration: 2000,
            easing: "easeOutQuint"
        });
    });



});