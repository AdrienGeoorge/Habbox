$('.more-button').on('click', function () {
    let box = $('.more-box');

    if (box.css('display') === 'none') {
        box.css("display", 'flex').hide().fadeIn();
        $(this).html('-');
    } else {
        box.fadeOut();
        $(this).html('+');
    }
});