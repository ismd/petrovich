<? require '_header.php' ?>

<div class="layout">
    <div class="vacancies__center">
        <h3>
            Город

            <select class="vacancies__select select select--type-transparent">
                <option value="1">Санкт-Петербург</option>
                <option value="2">Ленинградская область</option>
                <option value="3">Новгород</option>
                <option value="4">Петрозаводск</option>
                <option value="5">Выборг</option>
            </select>
        </h3>

        <div class="vacancies-radio-wrapper">
            <input name="place"
                   id="place-1"
                   class="vacancies-radio"
                   type="radio"
                   value="1"
                   checked="checked" />
            <label class="vacancies-radio__container"
                   for="place-1">Офис <i>15</i></label>

            <input name="place"
                   id="place-2"
                   class="vacancies-radio"
                   type="radio"
                   value="2" />
            <label class="vacancies-radio__container"
                   for="place-2">Склад <i>7</i></label>

            <input name="place"
                   id="place-3"
                   class="vacancies-radio"
                   type="radio"
                   value="3" />
            <label class="vacancies-radio__container"
                   for="place-3">Магазин <i>21</i></label>

            <input name="place"
                   id="place-4"
                   class="vacancies-radio"
                   type="radio"
                   value="4" />
            <label class="vacancies-radio__container"
                   for="place-4">Студентам <i>3</i></label>

            <input name="place"
                   id="place-5"
                   class="vacancies-radio"
                   type="radio"
                   value="5" />
            <label class="vacancies-radio__container"
                   for="place-5">Все вакансии</label>
        </div>
    </div>

    <div class="vacancies-sidepanel">
        <div class="vacancies-sidepanel__block">
            <div class="vacancies-sidepanel__title">Режим работы</div>

            <input id="vacancy-1-1"
                   type="checkbox" />
            <label for="vacancy-1-1">Полная занятость</label><br />
            <input id="vacancy-1-2"
                   type="checkbox" />
            <label for="vacancy-1-2">Проектная работа</label><br />
            <input id="vacancy-1-3"
                   type="checkbox" />
            <label for="vacancy-1-3">Вахтовый метод</label><br />
            <input id="vacancy-1-4"
                   type="checkbox" />
            <label for="vacancy-1-4">Частичная занятость</label><br />
            </ul>
        </div>

        <div class="vacancies-sidepanel__block">
            <div class="vacancies-sidepanel__title">Направление деятельности</div>

            <input id="vacancy-2-1"
                   type="checkbox" />
            <label for="vacancy-2-1">Административная деятельность</label><br />
            <input id="vacancy-2-2"
                   type="checkbox" />
            <label for="vacancy-2-2">Безопасность</label><br />
            <input id="vacancy-2-3"
                   type="checkbox" />
            <label for="vacancy-2-3">Внутренний аудит</label><br />
            <input id="vacancy-2-4"
                   type="checkbox" />
            <label for="vacancy-2-4">Закупки</label><br />
            <input id="vacancy-2-5"
                   type="checkbox" />
            <label for="vacancy-2-5">Интернет, маркетинг</label><br />
            <input id="vacancy-2-6"
                   type="checkbox" />
            <label for="vacancy-2-6">Информационные технологии</label><br />
            <input id="vacancy-2-7"
                   type="checkbox" />
            <label for="vacancy-2-7">Бухгалтерия</label><br />
            <input id="vacancy-2-8"
                   type="checkbox" />
            <label for="vacancy-2-8">Управление проектами</label><br />
            </ul>
        </div>

        <div class="vacancies-sidepanel__block">
            <div class="vacancies-sidepanel__title">График работы</div>

            <input id="vacancy-3-1"
                   type="checkbox" />
            <label for="vacancy-3-1">Суточный</label><br />
            <input id="vacancy-3-2"
                   type="checkbox" />
            <label for="vacancy-3-2">Днём</label><br />
        </div>
    </div>

    <div class="vacancies-list">
        <div class="vacancies-list__item">
            <div class="vacancies-list__date">10 декабря</div>
            <a href="/vacancy.php"
               class="vacancies-list__title">Заместитель руководителя отдела закупок</a>
            <div class="vacancies-list__description">
                Руководство менеджерами товарных направлений Обеспечение выполнения целевых показателей отдела Обеспечение потребностей товара в&nbsp;разрезе товарных групп/поставщиков Планирование графика внешних поставок и&nbsp;внутренних перемещений Взаимодействие с&nbsp;поставщиками по&nbsp;оптимизации условий поставок
            </div>

            <table class="vacancies-list-info">
                <thead>
                    <tr>
                        <th class="vacancies-list-info__title">Направление</th>
                        <th class="vacancies-list-info__title">Зарплата</th>
                        <th class="vacancies-list-info__title">Место работы</th>
                        <th class="vacancies-list-info__title">График работы</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="vacancies-list-info__value"><b>Офис</b></td>
                        <td class="vacancies-list-info__value">от&nbsp;<b>25000&nbsp;руб</b></td>
                        <td class="vacancies-list-info__value"><b>м.&nbsp;Пионерская</b></td>
                        <td class="vacancies-list-info__value"><b>5&nbsp;/&nbsp;2</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="vacancies-list__item">
            <div class="vacancies-list__date">10 декабря</div>
            <a href="javascript:void(0)"
               class="vacancies-list__title">Инженер по эксплуатации зданий и сооружений</a>
            <div class="vacancies-list__description">
                Организация работы по&nbsp;техобслуживанию и&nbsp;безаварийной эксплуатации зданий и&nbsp;сооружений. Организация подрядных компаний на&nbsp;строительно-монтажные работы. Контроль выполнения заявок. Бюджетирование и&nbsp;контроль затрат на&nbsp;выполнение инженерно-технических мероприятий. Заключение и&nbsp;ведение договоров по&nbsp;обслуживанию инженерных сетей.
            </div>

            <table class="vacancies-list-info">
                <thead>
                    <tr>
                        <th class="vacancies-list-info__title">Направление</th>
                        <th class="vacancies-list-info__title">Зарплата</th>
                        <th class="vacancies-list-info__title">Место работы</th>
                        <th class="vacancies-list-info__title">График работы</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="vacancies-list-info__value"><b>Офис</b></td>
                        <td class="vacancies-list-info__value"><b>33&nbsp;000&nbsp;руб</b></td>
                        <td class="vacancies-list-info__value"><b>Приморский район</b></td>
                        <td class="vacancies-list-info__value"><b>5*2&nbsp;с&nbsp;9:00-18:00.</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="vacancies-list__item">
            <div class="vacancies-list__date">9 декабря</div>
            <a href="javascript:void(0)"
               class="vacancies-list__title">Помощник администратора</a>
            <div class="vacancies-list__description">
                Ведение документации, табеля учета рабочего времени; &mdash;&nbsp;Оформление служебных записок, приказов, распоряжений, карточек постоянного покупателя; &mdash;&nbsp;Контроль сертификатов на&nbsp;продукцию; &mdash;&nbsp;Заказ рекламной продукции и&nbsp;оборудования; &mdash;&nbsp;Работа с&nbsp;клиентами: оформление возвратов и&nbsp;т.д.
            </div>

            <table class="vacancies-list-info">
                <thead>
                    <tr>
                        <th class="vacancies-list-info__title">Направление</th>
                        <th class="vacancies-list-info__title">Зарплата</th>
                        <th class="vacancies-list-info__title">Место работы</th>
                        <th class="vacancies-list-info__title">График работы</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="vacancies-list-info__value"><b>Офис</b></td>
                        <td class="vacancies-list-info__value">от&nbsp;<b>25000 руб</b></td>
                        <td class="vacancies-list-info__value"><b>м.&nbsp;Пионерская</b></td>
                        <td class="vacancies-list-info__value"><b>5&nbsp;/&nbsp;2</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="vacancies-list__item">
            <div class="vacancies-list__date">9 декабря</div>
            <a href="javascript:void(0)"
               class="vacancies-list__title">Руководитель отдела закупок</a>
            <div class="vacancies-list__description">
                Руководство менеджерами товарных направлений Обеспечение выполнения целевых показателей отдела Обеспечение потребностей товара в&nbsp;разрезе товарных групп/поставщиков Планирование графика внешних поставок и&nbsp;внутренних перемещений Взаимодействие с&nbsp;поставщиками по&nbsp;оптимизации условий поставок
            </div>

            <table class="vacancies-list-info">
                <thead>
                    <tr>
                        <th class="vacancies-list-info__title">Направление</th>
                        <th class="vacancies-list-info__title">Зарплата</th>
                        <th class="vacancies-list-info__title">Место работы</th>
                        <th class="vacancies-list-info__title">График работы</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="vacancies-list-info__value"><b>Офис</b></td>
                        <td class="vacancies-list-info__value">от&nbsp;<b>25000 руб</b></td>
                        <td class="vacancies-list-info__value"><b>м.&nbsp;Пионерская</b></td>
                        <td class="vacancies-list-info__value"><b>5&nbsp;/&nbsp;2</b></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pager">
            <div class="pager__title">Страницы</div>

            <div class="pager__items-block">
                <a href="javascript:void(0)"
                   class="pager__item pager__item--state-active">1</a>
                <a href="javascript:void(0)"
                   class="pager__item">2</a>
                <a href="javascript:void(0)"
                   class="pager__item">3</a>
                <a href="javascript:void(0)"
                   class="pager__item">4</a>
                <a href="javascript:void(0)"
                   class="pager__item">5</a>
            </div>

            <div class="pager__items-block">
              <a href="javascript:void(0)"
                 class="pager__item">Следующая</a>
            </div>
        </div>
    </div>

    <div class="vacancies-right-info">
        <div class="vacancies-right-info__title">Ищем водителей любой категории</div>
        <div class="vacancies-right-info__description">Нам всегда нужны водители любой категории, со&nbsp;своим транспортом.</div>
    </div>

    <div class="clear"></div>
</div>

<div class="vacancies-right-car"></div>

<? require '_footer.php' ?>
