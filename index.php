<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Петрович</title>

        <link href="/css/style.css" rel="stylesheet" />

        <script src="/js/jquery-2.1.4.min.js"></script>
        <script src="/js/jquery.bxslider.min.js"></script>
        <script src="/js/fotorama.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div class="menu">
            <a href="javascript:void(0)"
               class="menu__item">О компании</a>
            <a href="javascript:void(0)"
               class="menu__item">Вакансии</a>
            <a href="javascript:void(0)"
               class="menu__item menu__item--type-list">Культура</a>
            <a href="javascript:void(0)"
               class="menu__item menu__item--type-list">Обучение</a>
            <a href="javascript:void(0)"
               class="menu__item">Благотворительность</a>
        </div>

        <div class="layout">
            <header class="header">
                <div class="header__logo"></div>
                <div class="header__title">Для тех, кто строит жизнь</div>
                <a href="javascript:void(0)"
                   class="button header__send-resume">Отправить резюме</a>
                <div class="clear"></div>
                <div class="header__honors">
                    Пятый год — самый привлекательный работодатель
                </div>
            </header>

            <div class="main-slider">
                <div class="main-bxslider">
                    <div class="main-slider__slide"
                         style="background-image: url('/pictures/main/slide-1.jpg');">
                        <div class="main-slider__background">
                            <blockquote class="main-slider__quote quote">
                                <strong>Я&nbsp;работаю в&nbsp;этой компании, потому что здесь есть возможность расти</strong>
                                Можно устроиться, напрмер, оператором, и&nbsp;вырасти до&nbsp;администратора. Насклоько я&nbsp;знаю, половина &laquo;топов&raquo; компании когда-то устраивались на&nbsp;базовые должности.
                                <i class="quote__close"></i>
                            </blockquote>

                            <div class="main-slider__author">Андрей Иванов</div>
                        </div>
                    </div>

                    <div class="main-slider__slide"
                         style="background-image: url('/pictures/main/slide-1.jpg');">
                        <div class="main-slider__background">
                            <blockquote class="main-slider__quote quote">
                                <strong>Я&nbsp;работаю в&nbsp;этой компании, потому что здесь есть возможность расти</strong>
                                Можно устроиться, напрмер, оператором, и&nbsp;вырасти до&nbsp;администратора. Насклоько я&nbsp;знаю, половина &laquo;топов&raquo; компании когда-то устраивались на&nbsp;базовые должности.
                                <i class="quote__close"></i>
                            </blockquote>

                            <div class="main-slider__author">Андрей Иванов</div>
                        </div>
                    </div>

                    <div class="main-slider__slide"
                         style="background-image: url('/pictures/main/slide-1.jpg');">
                        <div class="main-slider__background">
                            <blockquote class="main-slider__quote quote">
                                <strong>Я&nbsp;работаю в&nbsp;этой компании, потому что здесь есть возможность расти</strong>
                                Можно устроиться, напрмер, оператором, и&nbsp;вырасти до&nbsp;администратора. Насклоько я&nbsp;знаю, половина &laquo;топов&raquo; компании когда-то устраивались на&nbsp;базовые должности.
                                <i class="quote__close"></i>
                            </blockquote>

                            <div class="main-slider__author">Андрей Иванов</div>
                        </div>
                    </div>

                    <div class="main-slider__slide"
                         style="background-image: url('/pictures/main/slide-1.jpg');">
                        <div class="main-slider__background">
                            <blockquote class="main-slider__quote quote">
                                <strong>Я&nbsp;работаю в&nbsp;этой компании, потому что здесь есть возможность расти</strong>
                                Можно устроиться, напрмер, оператором, и&nbsp;вырасти до&nbsp;администратора. Насклоько я&nbsp;знаю, половина &laquo;топов&raquo; компании когда-то устраивались на&nbsp;базовые должности.
                                <i class="quote__close"></i>
                            </blockquote>

                            <div class="main-slider__author">Андрей Иванов</div>
                        </div>
                    </div>
                </div>

                <div class="main-slider__pager">
                    <a href="javascript:void(0)"
                       class="main-slider__pager-item"
                       data-slide-index="0"
                       style="background-image: url('/pictures/main/slider-pager-1.png');">
                        <strong>Анастасия Жаркова</strong><br />
                        <i>Кассир</i>
                    </a>

                    <a href="javascript:void(0)"
                       class="main-slider__pager-item"
                       data-slide-index="1"
                       style="background-image: url('/pictures/main/slider-pager-2.png');">
                        <strong>Светлана Родионова</strong><br />
                        <i>Старший бухгалтер</i>
                    </a>

                    <a href="javascript:void(0)"
                       class="main-slider__pager-item"
                       data-slide-index="2"
                       style="background-image: url('/pictures/main/slider-pager-3.png');">
                        <strong>Андрей Иванов</strong><br />
                        <i>Логист</i>
                    </a>

                    <a href="javascript:void(0)"
                       class="main-slider__pager-item"
                       data-slide-index="3"
                       style="background-image: url('/pictures/main/slider-pager-4.png');">
                        <strong>Мария Яшкова</strong><br />
                        <i>Администратор</i>
                    </a>
                </div>
            </div>

            <h1>
                Вакансии в городе
                <select>
                    <option value="">Санкт-Петербург</option>
                </select>
            </h1>

            <footer class="footer">
                <div class="footer__item">
                    Строительный Торговый дом Петрович<br />
                    HR служба
                </div>
                <div class="footer__item">
                    Контактные данные отдела кадров<br />
                    personal@stdp.ru +7 (812) 622-17-07
                </div>
                <div class="footer__item">
                    При использовании материалов с сайта ссылка на источник обязательна.
                </div>
                <div class="footer__item">
                    <div class="logo-dev"></div>
                </div>
            </footer>
        </div>
    </body>
</html>
