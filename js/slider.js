var sd_length, cur_slide = height = 0;
var next_slide = 1;
var slide_timer;
var slide_duration = 7000;

$(document).ready(function () {
    
    if ($('.sd-slider').length > 0) {
        sd_length = $('.sd-slider .slide').length;
        cur_slide = 0;
        next_slide = 1;
        height = 0;
        slide_timer = setInterval(function () {
            nextSlide(next_slide);
        }, slide_duration);
        
        $('.sd-slider .slides-wrap').css({
            'width': 100 * sd_length + '%',
            'height': $(window).height() + 'px'
        });
        
        $('.sd-slider .slide').each(function (i, slide) {
            $(this).css({
                'backgroundImage': 'url(' + $(this).attr('data-img') + ')',
                'width': $(window).width() + 'px'
            });
            
            $('.sd-slider .slider-controls').append('<a href="#" class="slider-button button-' + (i + 1) + '"><span class="fa fa-circle"></span></a>');
            
            if ($('.sd-slider .slides-wrap').outerHeight() < $(this).find('.btn').offset().top + $(this).find('.btn').outerHeight()) {
                $('.sd-slider .slides-wrap').css('height', ($(this).find('.btn').offset().top + $(this).find('.btn').outerHeight() + $('.sd-slider .slider-controls').outerHeight()) + 'px');
                $(this).attr('data-offset', $(this).find('.btn').offset().top);
                $(this).attr('data-height', $(this).find('.btn').outerHeight());
            }
            
            $(slide).find('.sd-effect').each(function (i, elem) {
                $(elem).css({
                    'transitionDelay': $(this).attr('data-delay')
                });
            });
        });
        
        $('.sd-slider .slider-button').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            nextSlide($(this).index());
            
        });
        
        $('.sd-slider .slide:eq(0)').addClass('selected');
        nextSlide(0);
        
        $(window).resize(function () {
            sizeSlides();
        });
    }
    
});

function nextSlide(n) {
    if (n == sd_length) n = 0;
    next_slide = n + 1;
    
    $('.sd-slider .slide').removeClass('selected');
    $('.sd-slider .slide').removeClass('previous');
    $('.sd-slider .slide').eq(n).addClass('selected');
    $('.sd-slider .slide').eq(cur_slide).addClass('previous');
    setTimeout(function () {
        $('.sd-slider .slide').removeClass('previous'); 
    }, slide_duration/2);

    $('.sd-slider .slider-button').removeClass('selected');
    $('.sd-slider .slider-button').eq(n).addClass('selected');
    cur_slide = n;
    
    if ($('.sd-slider .slide').eq(n).hasClass('light')) {
        $('.main-nav').addClass('light');
        $('.sd-slider').addClass('light');
        $('.logo').addClass('light');
    }
    else {
        $('.main-nav').removeClass('light');
        $('.sd-slider').removeClass('light');
        $('.logo').removeClass('light');        
    }
}

function sizeSlides() {
    $('.sd-slider .slides-wrap').css({
        'height': $(window).height() + 'px'
    });
    
    $('.sd-slider .slide').each(function (i, slide) {
        $(this).css({
            'width': $('.wrapper').width() + 'px'
        });
    });
}