var sdt_length, cur_tslide = theight = 0;
var next_tslide = 1;
var timeline_timer;

$(document).ready(function () {
    
    if ($('.sd-timeline').length > 0) {
        sdt_length = $('.sd-timeline .slide').length;
        cur_tslide = 0;
        next_tslide = 1;
        height = 0;
        /*timeline_timer = setInterval(function () {
            nextTSlide(next_tslide);
        }, 5000);*/
        
        $('.sd-timeline .slides-wrap').css({
            'width': 100 * sdt_length + '%'
        });
        
        $('.sd-timeline .slide').each(function (i, slide) {
            $(this).css({
                'width': $('.sd-timeline').width() + 'px'
            });
            
            if ($(this).height() > theight) theight = $(this).height();
            
            $('.sd-timeline .slider-controls').append('<a href="#" class="time-button button-' + (i + 1) + (i == sdt_length - 1 ? ' last' : '') + '"><span class="time-text">' + $(this).find('.year').html() + '</span><span class="fa fa-circle-o"></span><span class="fa fa-dot-circle-o"></span></a>');
            
            $(slide).find('.sd-effect').each(function (i, elem) {
                $(elem).css({
                    'transitionDelay': $(this).attr('data-delay')
                });
            });
        });
        
        $('.sd-timeline .slide').css('height', theight + 'px');
        
        $('.sd-timeline .time-button').click(function (e) {
            e.preventDefault();
            e.stopPropagation();           
            
            nextTSlide($(this).index());
            
        });
        
        $('.sd-timeline .slide:eq(0)').addClass('selected');
        cur_tslide = 0
        nextTSlide(0);
    }
    
});

function nextTSlide(n) {
    if (n == sdt_length) n = 0;
    next_tslide = n + 1;
    
    $('.sd-timeline .slide').removeClass('selected');
    $('.sd-timeline .slide').removeClass('previous');
    if (cur_tslide != n) $('.sd-timeline .slide').eq(cur_tslide).addClass('previous');
    $('.sd-timeline .slide').eq(n).addClass('selected');

    $('.sd-timeline .active').removeClass('active');
    $('.sd-timeline .time-button').removeClass('selected');
    $('.sd-timeline .time-button').eq(n).addClass('selected').addClass('active');
    
    for (var i = 0; i < n; i++) {
        $('.sd-timeline .time-button').eq(i).addClass('active');
    }
    
    setTimeout(function () {cur_tslide = n;}, 300);
}