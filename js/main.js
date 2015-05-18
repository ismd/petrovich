$(function() {
    $('.main-bxslider').bxSlider({
        auto: true,
        pagerCustom: '.main-slider__pager',
        pause: 7000
    });

    $('select').select2({
        minimumResultsForSearch: Infinity
    });

    var $menuLinks = $('.js-menu-open');

    $menuLinks.click(function(ev) {
        $menuLinks.removeClass('menu__item-list--state-opened');
        $(this).addClass('menu__item-list--state-opened');
        ev.stopPropagation();
    });

    $(window).click(function() {
        $menuLinks.removeClass('menu__item-list--state-opened');
    });
});
