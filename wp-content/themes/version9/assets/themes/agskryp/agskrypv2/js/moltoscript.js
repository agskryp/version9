
var fixmeTop = $('.fixme').offset().top;
var currentScroll = $(window).scrollTop();
 
$(window).scroll(function() {
     if (currentScroll >= fixmeTop) {
        $('.fixme').css({
            position: 'fixed',
            top: '0'
        });
    } else {
        $('.fixme').css({
            position: 'static'
        });
    }
});