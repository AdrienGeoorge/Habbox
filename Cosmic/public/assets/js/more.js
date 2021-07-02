$('.more-button').on('click', function (e) {
    e.stopPropagation();
    let box = $('.more-box');

    if (box.css('display') === 'none') {
        box.css("display", 'flex').hide().fadeIn();
    } else {
        box.fadeOut();
    }
});

$(window).click(function() {
    $('.more-box').fadeOut();
});