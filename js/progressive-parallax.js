$(document).ready(function () {
    if ($('.pp-target').length > 0 && $(window).width() > 991) {
        $('.pp-target').each(function (i, elem) {
            var pp_prev_height = $(elem).parents('.container').height();
            var pp_prev_width = $(elem).parents('.container').width();

            $(elem).parent().html('<div class="pp-window">' + $(elem).addClass('pp-content')[0].outerHTML);
            //$('.pp-target').children().addClass('pp-item pp-off');
            $('.pp-window').css({'height': pp_prev_height * 3 + 'px'});

            $(window).scroll(function () {
                var scroll_top = $(window).scrollTop();
                var pp_top = $('.pp-window').offset().top;
                var pp_height = $('.pp-window').height();

                if (scroll_top >= pp_top && scroll_top < pp_top + pp_height - pp_prev_height) {
                    $('.pp-content').css({
                        'position': 'fixed',
                        'top': 0,
                        'bottom': 'auto',
                        'width': $('.pp-window').width() + 'px'
                    });

                    for (var i = 0; i < $('.pp-item').length; i++) {
                        if (scroll_top >= pp_top + pp_height/($('.pp-item').length * 2) * (i + 1)) {
                            $('.pp-item').eq(i).removeClass('pp-off').addClass('pp-on');
                        }
                        else {
                            $('.pp-item').eq(i).removeClass('pp-on').addClass('pp-off');
                        }
                    }
                }
                else if (scroll_top < pp_top) {
                    $('.pp-content').css({
                        'position': 'absolute',
                        'top': 0,
                        'bottom': 'auto'
                    });
                }
                else {
                    $('.pp-content').css({
                        'position': 'absolute',
                        'top': 'auto',
                        'bottom': 0
                    });
                }
            });
        });
    }
});