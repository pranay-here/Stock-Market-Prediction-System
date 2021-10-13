var counter_length = 1;

if ($('.homepage-scroll').length > 0 && $(window).width() > 991) {
    var controller = new ScrollMagic.Controller();

    $('body').imagesLoaded(function () {
        $('.sd-scroll').each(function (i, elem) {
            var effects_length = $(elem).find('.sd-effect').length;

            new ScrollMagic.Scene({
                duration: $(elem).height() * effects_length,   
                offset: $(elem).offset().top
            }).setPin(elem).addTo(controller);


            $(elem).find('.sd-effect').each(function (j, effect) {
                new ScrollMagic.Scene({
                    offset: $(effect).offset().top + j * $(elem).height()
                }).setClassToggle(effect, 'sd-on').addTo(controller);
            });
        });

        $('.sd-scroll-stick').each(function (i, elem) {
            $(elem).nextAll().css('position', 'relative');
            new ScrollMagic.Scene({
                offset: $(elem).offset().top
            }).setPin(elem).addTo(controller);

        });
    });
}

$(document).ready(function () {
    
    $.stellar({
        horizontalScrolling: false
    });
    
    
    $('a.btn').each(function (i, btn) {
        $(btn).html('<span class="btn-text">' + $(btn).html() + '</span>');
    });
    
    $('.sd-progress').each(function () {
        var num = $(this).children('.progress-value');
        
        var value = parseInt(num.html());
        
        $(this).find('.progress-bar').css({
            'width': value + '%'
        });
    });
    
    $('.sd-line-chart').each(function () {
        var ctx = $(this);
        
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: $(this).attr('data-x-axis').split(','),
                datasets: [{
                    data: $(this).attr('data-values-1').split(','),
                    backgroundColor: [
                        'rgba(167, 197, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(167,197,255,1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                },
                {
                    data: $(this).attr('data-values-2').split(','),
                    backgroundColor: [
                        'rgba(84, 98, 127, 0.2)'
                    ],
                    borderColor: [
                        'rgba(84, 98, 127, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

    });
    
    $('.sd-bar-chart').each(function () {
        var ctx = $(this);
        
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: $(this).attr('data-x-axis').split(','),
                datasets: [{
                    data: $(this).attr('data-values-1').split(','),
                    backgroundColor: [
                        'rgba(167, 197, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(167,197,255,1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                },
                {
                    data: $(this).attr('data-values-2').split(','),
                    backgroundColor: [
                        'rgba(84, 98, 127, 0.2)'
                    ],
                    borderColor: [
                        'rgba(84, 98, 127, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

    });
    
    $('.sd-pie-chart').each(function () {
        var ctx = $(this);
        
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: $(this).attr('data-x-axis').split(','),
                datasets: [{
                    label: '# of Votes',
                    data: $(this).attr('data-values-1').split(','),
                    backgroundColor: [
                        'rgba(167, 197, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(167,197,255,1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                },
                {
                    data: $(this).attr('data-values-2').split(','),
                    backgroundColor: [
                        'rgba(84, 98, 127, 0.2)'
                    ],
                    borderColor: [
                        'rgba(84, 98, 127, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

    });
    
    $('.sd-donut-chart').each(function () {
        var ctx = $(this);
        
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: $(this).attr('data-x-axis').split(','),
                datasets: [{
                    data: $(this).attr('data-values-1').split(','),
                    backgroundColor: [
                        'rgba(167, 197, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(167,197,255,1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                },
                {
                    data: $(this).attr('data-values-2').split(','),
                    backgroundColor: [
                        'rgba(84, 98, 127, 0.2)'
                    ],
                    borderColor: [
                        'rgba(84, 98, 127, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

    });
    
    $('.sd-polar-chart').each(function () {
        var ctx = $(this);
        
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: $(this).attr('data-x-axis').split(','),
                datasets: [{
                    data: $(this).attr('data-values-1').split(','),
                    backgroundColor: [
                        'rgba(167, 197, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(167,197,255,1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                },
                {
                    data: $(this).attr('data-values-2').split(','),
                    backgroundColor: [
                        'rgba(84, 98, 127, 0.2)'
                    ],
                    borderColor: [
                        'rgba(84, 98, 127, 1)'
                    ],
                    borderWidth: 1,
                    lineTension: 0
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

    });
    
    if ($('.portfolio').length > 0) {
        $('.port-link').click(function (e) {
            $('.modal img').attr('src', $(this).attr('data-src'));
        });
    }
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            animation: true
        })
    });
    
    $('.loading').removeClass();
    
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $("button.navbar-toggle").click();
        }
    });
});