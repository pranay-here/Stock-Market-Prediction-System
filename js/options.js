$(document).ready(function () {
    //$('body').append('<div class="sd-theme-options"><span class="options-toggle fa fa-gear"></span><div class="sd-to-wrap"></div></div>');
    $('.colors-list a').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        
        $('link[data-sd-dynamic]').remove();
        
        $('<link>')
        .appendTo('head')
        .attr({type : 'text/css', rel : 'stylesheet'})
        .attr('data-sd-dynamic','1')
        .attr('href', 'css/_' + $(e.currentTarget).attr('data-css') + '.css');

    });
    
    $('.ui-toggle').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        
        var option = $(e.currentTarget);
        option.toggleClass('active');
        $('body').toggleClass(option.attr('id'));
        $('.option-bg').toggleClass('hide');
        
        sizeSlides();
    });
    
    $('.bg-list a').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        
        var option = $(e.currentTarget);
        $('.option-boxed').css('backgroundImage', 'url("' + option.attr('data-url') + '")');
    });
});