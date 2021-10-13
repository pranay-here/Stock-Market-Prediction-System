$(document).ready(function () {
    $('.main-reveal').css('height', $(window).height());
    
    if ($(window).width() > 991) {
        var controller = new ScrollMagic.Controller();

        new ScrollMagic.Scene({
            duration: $('.main-reveal').height() * 2,   
            offset: $('.main-reveal').offset().top
        }).setPin('.main-reveal').addTo(controller);

        new ScrollMagic.Scene({offset: 0, duration: $('.main-reveal').height() * 2}).setTween('.main-screen', {backgroundColor: 'rgba(0, 0, 0, 0)'}).addTo(controller);

        new ScrollMagic.Scene({offset: $('.section-text').offset().top, duration: $('.homepage-blurbs').height() * 3}).setPin('.copy').addTo(controller);

        $('.homepage-blurbs').find('.sd-effect').each(function (i, effect) {
            new ScrollMagic.Scene({
                offset: $(effect).offset().top + i * $('.homepage-blurbs').height()
            }).setClassToggle(effect, 'sd-on').addTo(controller);
        });
    }
});