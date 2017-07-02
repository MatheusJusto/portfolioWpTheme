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
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);

$(function() {
    $('.toggle').click(function(){
        $('.layout').toggleClass('ativo');
        $('.hamburguerMenu').toggleClass('ativo');
        $(this).toggleClass('ativo');
    });
});