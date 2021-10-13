var ef_threshold = .6;
var ef_delay = .2;

var is_counter_running = [];
var is_donut_running = [];

$(document).ready(function () {
    $('.sd-counter').each(function (i) {
        is_counter_running[i] = false;
    });
    
    $('.donut-chart').each(function (i) {
        is_donut_running[i] = false;
    });
    
    $(window).scroll(function () {
        $('.sd-effects-viewport').each(function () {
            var ef_top = $(this).offset().top;
            var scroll_top = $(window).scrollTop();
            var window_height = $(window).height();
            if (scroll_top > ef_top - window_height * ef_threshold) {
                $(this).find('.sd-effect').each(function (i, obj) {
                    $(this).css({'transition-delay': ef_delay * i + 's'}).addClass('sd-on');
                });
                
                $(this).find('.sd-progress .progress-bar').addClass('sd-on');
                
                $(this).find('.sd-counter').each(function (i) {
                    startCounter($(this), i);
                });
                
                $(this).find('.donut-chart').each(function (i) {
                    drawDonut($(this), i);
                })
            }        
        });
    });
});
    
function startCounter(obj, i) {
    if (is_counter_running[i] == false) {
        is_counter_running[i] = true;
        
        var num = obj.children('.numeral');

        var value = parseInt(num.html());
        var j = 0;

        var counter = setInterval(function () {
            if (j < value) {
                num.html(++j);
            }
            else {
                clearInterval(counter);
            }
        }, counter_length * 1000 / value);
    }
}

function drawDonut(obj, i) {
        if (is_donut_running[i] == false) {
            is_donut_running[i] = true;
            
            var val = obj.attr('data-value');
            var canvas = obj;
            var c = obj[0];
            var j = 0;

            var arc = setInterval(function () {
                if (j < val) {
                    var ctx = c.getContext("2d");
                    ctx.clearRect(0, 0, canvas.width(), canvas.height());
                    ctx.beginPath();
                    ctx.arc(76, 76, 70, 0 * Math.PI, 2 * Math.PI);
                    ctx.strokeStyle = '#e4e4e4';
                    ctx.lineWidth = 6;
                    ctx.stroke();
                    ctx.beginPath();
                    ctx.arc(canvas.width()/2, canvas.height()/2, 70, 1.5 * Math.PI, (++j/100 * 2 - .5) * Math.PI, false);
                    ctx.strokeStyle = $('.donut-chart').css('color');
                    ctx.stroke();
                }
                else {
                    clearInterval(arc);
                }
            }, counter_length * 1000 / val);
        }
}