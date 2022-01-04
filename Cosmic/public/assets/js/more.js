let socialBox = $('.social-box');
let langBox = $('.lang-box');

$('.social-button').on('click', function (e) {
    e.stopPropagation();

    if (langBox.css('display') !== 'none') {
        langBox.fadeOut();
    }

    if (socialBox.css('display') === 'none') {
        socialBox.css("display", 'flex').hide().fadeIn();
    } else {
        socialBox.fadeOut();
    }
});

$('.lang-button').on('click', function (e) {
    e.stopPropagation();

    if (socialBox.css('display') !== 'none') {
        socialBox.fadeOut();
    }

    if (langBox.css('display') === 'none') {
        langBox.css("display", 'flex').hide().fadeIn();
    } else {
        langBox.fadeOut();
    }
});

$(window).click(function () {
    socialBox.fadeOut();
    langBox.fadeOut();
});