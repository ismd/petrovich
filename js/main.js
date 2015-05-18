$(function() {
    $('.main-bxslider').bxSlider({
        auto: true,
        pagerCustom: '.main-slider__pager',
        pause: 7000
    });

    $('select').select2({
        minimumResultsForSearch: Infinity
    });
});
