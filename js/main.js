$(function() {
    $('.main-bxslider').bxSlider({
        auto: true,
        controls: false,
        pagerCustom: '.main-slider__pager',
        pause: 7000
    });

    var $carousel = $('.js-carousel');

    $carousel.bxSlider({
        controls: $carousel.find('> div').length > 3,
        minSlides: 1,
        maxSlides: 3,
        moveSlides: 1,
        nextText: '',
        prevText: '',
        pager: false,
        slideWidth: 307
    });

    $('.fancybox').fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        },
        padding: 0,
        scrolling: false
    });

    $('.fancybox-fotorama').fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        },
        padding: 38,
        scrolling: false,
        afterShow: function() {
            $('.fotorama').fotorama({
                caption: 'overlay'
            });
            $.fancybox.update();
        }
    });

    $.each($('select'), function(i, select) {
        var $select     = $(select),
            placeholder = $select.data('placeholder'),
            width       = $select.data('width');

        $select.select2({
            minimumResultsForSearch: Infinity,
            placeholder: placeholder,
            width: width
        });
    });

    // Меню
    var $menuLinks      = $('.js-menu-open'),
        menuActiveClass = 'menu__item-list--state-opened';

    $menuLinks.click(function(ev) {
        var $this    = $(this),
            hasClass = $this.hasClass(menuActiveClass);

        $menuLinks.removeClass(menuActiveClass);

        if (!hasClass) {
            $(this).addClass(menuActiveClass);
        }

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

    // Боковая панель на странице "О компании"
    var $aboutItems      = $('.js-about-sidepanel-item'),
        aboutActiveClass = 'about-sidepanel__item--state-active',
        $aboutPageItems  = [];

    $.each($aboutItems, function(i, item) {
        $aboutPageItems.push($($(item).data('id')));
    });

    $aboutItems.click(function(ev) {
        var $this = $(this);

        if ($this.hasClass(aboutActiveClass)) {
            return;
        }

        $.scrollTo($this.data('id'), 400);
    });

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();

        for (var i = 0; i < $aboutPageItems.length; i++) {
            if ($aboutPageItems[i].offset().top > scrollTop - 100) {
                $aboutItems.removeClass(aboutActiveClass);
                $aboutItems.eq(i).addClass(aboutActiveClass);
                return;
            }
        }
    });

    // Блоки на странице вакансии
    var $vacancyFixed = $('.js-vacancy-fixed');

    $.each($vacancyFixed, function(i, fixed) {
        var $fixed = $(fixed),
            left   = $fixed.offset().left,
            top    = $fixed.offset().top,
            right  = $fixed.css('right');

        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();

            if (scrollTop + 90 > top) {
                $fixed.css({
                    position: 'fixed',
                    left: left,
                    right: 'auto',
                    top: '100px'
                });
            } else {
                $fixed.css({
                    position: 'absolute',
                    left: 'auto',
                    right: right,
                    top: 'auto'
                });
            }
        });
    });

    // Masked input
    $('.js-phone-mask').mask('+7 (999) 999-99-99');

    var formRowClass   = 'vacancy-form__table-row',
        formErrorClass = 'vacancy-form__table-row--error-yes';

    function validate(formData, jqForm, options) {
        var $items = jqForm.find('[data-required="y"]'),
            result = true,
            $firstError;

        $.each($items, function(i, item) {
            var $item   = $(item),
                $parent = $item.closest('.' + formRowClass);

            if ('' === $item.val()) {
                result = false;

                $parent.addClass(formErrorClass);
                if (!$firstError) {
                    $firstError = $item;
                }
            } else {
                $parent.removeClass(formErrorClass);
            }
        });

        if ($firstError) {
            $.scrollTo($firstError.offset().top - 100);
        }

        return !result;
    }

    // Form
    $('.js-form').ajaxForm({
        beforeSubmit: validate
    });

    $('.js-vacancy-add-block').click(function(ev, item) {
        var $this = $(this);

        $($this.data('id')).show();
        $this.remove();
    });
});
