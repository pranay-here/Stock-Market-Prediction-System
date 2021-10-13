

var player;

    
if ($('.sd-video-fs').length > 0) {
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: $(window).height(),
            width: $(window).width(),
            videoId: $('.sd-video-fs').attr('data-id'),
            events: {
                'onReady': onPlayerReady
            },
            playerVars: {
                controls: 0,
                loop: 1,
                playlist: $('.sd-video-fs').attr('data-id'),
                showinfo: 0,
                modestbranding: 1,
                iv_load_policy: 3
            }
        });
    }
}

$(window).resize(function () {
    resizeVideo();
});

function onPlayerReady(event) {
    event.target.playVideo();
    resizeVideo();
}

function stopVideo() {
    player.stopVideo();
}

function resizeVideo() {
    $('.sd-video-fs').css({
        width: $(window).width(),
        height: $(window).width() * 9/16
    });
}