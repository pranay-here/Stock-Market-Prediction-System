var sdc_length, cur_cslide = cheight = 0;
var next_cslide = 1;
var carousel_timer;

$(document).ready(function () {
    
    if ($('.sd-carousel').length > 0) {
        sdc_length = $('.sd-carousel .slide').length;
        cur_cslide = 0;
        next_cslide = 1;
        height = 0;
        carousel_timer = setInterval(function () {
            nextCSlide(next_cslide);
        }, 5000);
        
        $('.sd-carousel .slides-wrap').css({
            'width': 100 * sdc_length + '%'
        });
        
        $('.sd-carousel .slide').each(function (i) {
            $(this).css({
                'width': $('.sd-carousel').width() + 'px'
            });
            
            if ($(this).height() > cheight) cheight = $(this).height();
            
            $('.sd-carousel .slider-controls').append('<a href="#" class="slider-button button-' + (i + 1) + '"><span class="fa fa-circle"></span></a>')
        });
        
        $('.sd-carousel .slide').css('height', cheight + 'px');
        
        $('.sd-carousel .slider-button').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            next_cslide = $(this).index();
            
            $('.sd-carousel .slide').removeClass('selected');
            $('.sd-carousel .slide').eq(next_cslide).addClass('selected');
            
            $('.sd-carousel .slider-button').removeClass('selected');
            $('.sd-carousel .slider-button').eq(next_cslide).addClass('selected');
            
        });
        
        $('.sd-carousel .slide:eq(0)').addClass('selected');
    }
    
});

function nextCSlide(n) {
    if (n == sdc_length) n = 0;
    next_cslide = n + 1;
    
    $('.sd-carousel .slide').removeClass('selected');
    $('.sd-carousel .slide').eq(n).addClass('selected');

    $('.sd-carousel .slider-button').removeClass('selected');
    $('.sd-carousel .slider-button').eq(n).addClass('selected');
}