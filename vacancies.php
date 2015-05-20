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
</div>

<? require '_footer.php' ?>
