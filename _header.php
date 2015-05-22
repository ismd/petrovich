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
        <script src="/js/select2.min.js"></script>
        <script src="/js/jquery.scrollTo.min.js"></script>
        <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        <script src="/js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="/js/jquery.fancybox.pack.js"></script>
        <script src="/js/social-likes.min.js"></script>
        <script src="/js/jquery.maskedinput.min.js"></script>
        <script src="/js/jquery.form.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div class="menu">
            <a href="/about.php"
               class="menu__item">О компании</a>

            <a href="/vacancies.php"
               class="menu__item">Вакансии</a>

            <div class="menu__item">
                <a href="javascript:void(0)"
                   class="js-menu-open menu__item-list">
                    Культура</a>

                <ul class="menu__dropdown">
                    <li>
                        <a href="/culture-idea.php"
                           class="menu__dropdown-item">Есть идея!</a>
                    </li>
                    <li>
                        <a href="/culture-communication.php"
                           class="menu__dropdown-item">Общение</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Признание</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Спортивные мероприятия</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Традиции</a>
                    </li>
                </ul>
            </div>

            <div class="menu__item">
                <a href="javascript:void(0)"
                   class="js-menu-open menu__item-list">
                    Обучение</a>

                <ul class="menu__dropdown">
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Есть идея!</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Общение</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Признание</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Спортивные мероприятия</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="menu__dropdown-item">Традиции</a>
                    </li>
                </ul>
            </div>

            <a href="javascript:void(0)"
               class="menu__item">Благотворительность</a>
        </div>

        <div class="content-wrapper">
            <div class="content-wrapper__layout">
                <div class="layout layout--type-main">
                    <header class="header<?= '/index.php' == $_SERVER['PHP_SELF'] ? ' header--page-main' : ''; ?>">
                        <? if ('/index.php' == $_SERVER['PHP_SELF']): ?>
                            <div class="header__logo header__logo--page-main"></div>
                        <? else: ?>
                            <a href="/" class="header__logo"></a>
                        <? endif; ?>

                        <? if ('/index.php' == $_SERVER['PHP_SELF']): ?>
                            <div class="header__title header__title--page-main">Для тех, кто строит жизнь</div>

                            <a href="javascript:void(0)"
                               class="button header__send-resume">Отправить резюме</a>
                        <? else: ?>
                            <div class="header__title">
                                <? if ('/about.php' == $_SERVER['PHP_SELF']): ?>
                                    Мы строим жизнь
                                <? elseif ('/vacancies.php' == $_SERVER['PHP_SELF']): ?>
                                    Вакансии компании Петрович
                                <? elseif ('/vacancy.php' == $_SERVER['PHP_SELF']): ?>
                                    Инженер по эксплуатации зданий и сооружений
                                <? elseif ('/vacancy-form.php' == $_SERVER['PHP_SELF']): ?>
                                    Анкета на вакансию
                                <? elseif ('/vacancy-form-success.php' == $_SERVER['PHP_SELF']): ?>
                                    Анкета отправлена
                                <? elseif ('/culture-idea.php' == $_SERVER['PHP_SELF']): ?>
                                    Есть идея!
                                <? elseif ('/culture-communication.php' == $_SERVER['PHP_SELF']): ?>
                                    Общение
                                <? endif; ?>
                            </div>

                            <div class="header__honors"></div>
                        <? endif; ?>

                        <div class="clear"></div>

                        <? if ('/index.php' == $_SERVER['PHP_SELF']): ?>
                            <div class="header__honors header__honors--page-main">
                                Пятый год — самый привлекательный работодатель
                            </div>
                        <? endif; ?>
                    </header>
                </div>
