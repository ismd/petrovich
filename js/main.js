$(function() {
    $('.main-bxslider').bxSlider({
        auto: true,
        pagerCustom: '.main-slider__pager',
        pause: 7000
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
        vacancyActiveClass  = 'vacancy-slider__page--state-active';

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

        $currentVacancy.animate({
            left: vacancyLeft
        });

        currentVacancySlide = index;
    });
});
