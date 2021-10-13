var sdg_length, cur_gslide = height = 0;
var next_gslide = 1;
var gslide_timer;
var gslide_duration = 7000;

$(document).ready(function () {
    
    if ($('.sd-gallery').length > 0) {
        sdg_length = $('.sd-gallery .slide').length;
        cur_gslide = 0;
        next_gslide = 1;
        height = 0;
        gslide_timer = setInterval(function () {
            nextGSlide(next_gslide);
        }, gslide_duration);
        
        $('.sd-gallery .slides-wrap').css({
            'width': 100 * sdg_length + '%',
            'height': $(window).height() + 'px'
        });
        
        $('.sd-gallery .slide').each(function (i, slide) {
            $(this).css({
                'width': $(window).width() + 'px'
            });
            
            //$('.sd-gallery .slider-controls').append('<a href="#" class="slider-button button-' + (i + 1) + '"><span class="fa fa-circle"></span></a>');
            
            $(slide).find('.sd-effect').each(function (i, elem) {
                $(elem).css({
                    'transitionDelay': $(this).attr('data-delay')
                });
            });
        });
        
        $('.sd-gallery .gallery-button').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            nextGSlide($(this).index());
            
        });
        
        $('.sd-gallery .slide:eq(0)').addClass('selected');
        nextGSlide(0);
    }
    
});

function nextGSlide(n) {
    if (n == sdg_length) n = 0;
    next_gslide = n + 1;
    
    $('.sd-gallery .slide').removeClass('selected');
    $('.sd-gallery .slide').removeClass('previous');
    $('.sd-gallery .slide').eq(n).addClass('selected');
    $('.sd-gallery .slide').eq(cur_gslide).addClass('previous');
    setTimeout(function () {
        $('.sd-gallery .slide').removeClass('previous'); 
    }, gslide_duration/2);

    $('.sd-gallery .gallery-button').removeClass('selected');
    $('.sd-gallery .gallery-button').eq(n).addClass('selected');
    cur_gslide = n;
    
    if ($('.sd-gallery .slide').eq(n).hasClass('light')) {
        $('.main-nav').addClass('light');
        $('.logo').addClass('light');
    }
    else {
        $('.main-nav').removeClass('light');
        $('.logo').removeClass('light');        
    }
}