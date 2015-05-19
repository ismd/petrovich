$(function() {
    $('.main-bxslider').bxSlider({
        auto: true,
        controls: false,
        pagerCustom: '.main-slider__pager',
        pause: 7000
    });

    $('.about-bxslider').bxSlider({
        minSlides: 1,
        maxSlides: 3,
        moveSlides: 1,
        nextText: '',
        prevText: '',
        pager: false,
        slideWidth: 307
    });

    $('select').select2({
        minimumResultsForSearch: Infinity
    });

    // Меню
    var $menuLinks = $('.js-menu-open');

    $menuLinks.click(function(ev) {
        $menuLinks.removeClass('menu__item-list--state-opened');
        $(this).addClass('menu__item-list--state-opened');
        ev.stopPropagation();
    });

    $(window).click(function() {
        $menuLinks.removeClass('menu__item-list--state-opened');
    });

    // Слайдер вакансий на главной
    var $vacancyList        = $('.js-vacancy-list'),
        $vacancyPages       = $('.js-vacancy-slider-page'),
        currentVacancySlide = 0,
        $currentVacancy     = $vacancyList.eq(currentVacancySlide),
        vacancyLeft         = parseInt($currentVacancy.css('left')),
        vacancyActiveClass  = 'vacancy-slider__page--state-active',
        vacancyIconClass    = 'vacancy-slider__icon',
        iconTop             = [],
        minVacancyHeight    = 340,
        maxVacancyHeight    = 0;

    $.each($vacancyList, function(i, vacancy) {
        var height = $(vacancy).outerHeight();

        if (height > maxVacancyHeight) {
            maxVacancyHeight = height;
        }

        if (maxVacancyHeight < minVacancyHeight) {
            maxVacancyHeight = minVacancyHeight;
        }
    });

    $('.vacancy-slider__list-wrapper').height(maxVacancyHeight);

    $.each($vacancyList.find('.' + vacancyIconClass), function(i, icon) {
        iconTop.push(parseInt($(icon).css('top')));
    });

    $vacancyPages.click(function() {
        var $this       = $(this),
            index       = $this.index(),
            windowWidth = $(window).width();

        if (index == currentVacancySlide) {
            return;
        }

        $vacancyPages.removeClass(vacancyActiveClass);
        $this.addClass(vacancyActiveClass);

        $currentVacancy.animate({
            left: index > currentVacancySlide ? - windowWidth : windowWidth
        });

        $currentVacancy = $vacancyList.eq(index);
        if (index > currentVacancySlide) {
            $currentVacancy.css('left', windowWidth);
        } else {
            $currentVacancy.css('left', -windowWidth);
        }

        var $icons = $currentVacancy.find('.' + vacancyIconClass);
        $icons.css({
            opacity: 0,
            top: -500
        });

        $currentVacancy.animate({
            left: vacancyLeft
        }, function() {
            $.each($icons, function(i, icon) {
                $(icon).animate({
                    opacity: 1,
                    top: iconTop[i]
                });
            });
        });

        currentVacancySlide = index;
    });

    // Video
    var $videoWrapper = $('.video'),
        video         = $videoWrapper.find('video').get( 0 );

    $videoWrapper.on('click', function () {
        $videoWrapper.toggleClass('paused', !video.paused);
        video.paused ? video.play() : video.pause();
    });

    // Яндекс карты
    ymaps.ready(init);
    var map;

    function init(){
        map = new ymaps.Map('about-map', {
            center: [55.76, 37.64],
            controls: [],
            state: {
                type: 'yandex#publicMap'
            },
            zoom: 7
        });

        var placemark = new ymaps.Placemark([55.76, 37.64], {
            hintContent: 'Москва!',
            balloonContent: 'Столица России'
        });

        map.geoObjects.add(placemark);
    }
});
