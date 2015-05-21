<? require '_header.php' ?>

<div class="layout">
    <div class="vacancy-form">
        <form class="js-form form">
            <select class="vacancy-form__select select select--type-no-shadow select--borders-yes"
                    data-placeholder="Город, в котором ищете работу"
                    data-width="100%">
                <option></option>
                <option value="1">Санкт-Петербург</option>
                <option value="2">Москва</option>
            </select>

            <select class="select select--type-no-shadow select--borders-yes"
                    data-placeholder="Вакансия"
                    data-width="100%">
                <option></option>
                <option value="1">Вакансия 1</option>
                <option value="2">Вакансия 2</option>
            </select>

            <h5 class="vacancy-form__block-title">Личная информация</h5>
            <div class="form-block">
                <table>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Фамилия:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   data-required="y"
                                   type="text" placeholder="Иванов" />

                            <div class="vacancy-form__table-error">Необходимое поле</div>
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Имя:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   data-required="y"
                                   type="text" placeholder="Иван" />

                            <div class="vacancy-form__table-error">Необходимое поле</div>
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Отчество:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   data-required="y"
                                   type="text" placeholder="Иванович" />

                            <div class="vacancy-form__table-error">Необходимое поле</div>
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Дата рождения:</td>
                        <td class="vacancy-form__table-cell-value">
                            <div class="vacancy-form__table-date-cell">
                                <input class="vacancy-form__input-text"
                                       type="text" placeholder="День" />
                            </div>

                            <div class="vacancy-form__table-date-cell vacancy-form__table-date-cell--type-month">
                                <input class="vacancy-form__input-text"
                                       type="text" placeholder="Месяц" />
                            </div>

                            <div class="vacancy-form__table-date-cell">
                                <input class="vacancy-form__input-text"
                                       type="text" placeholder="Год" />
                            </div>

                            <div class="clear"></div>
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Гражданство:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="РФ" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Семейное положение:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="Холост" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Контактный телефон:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="js-phone-mask vacancy-form__input-text"
                                   data-required="y"
                                   type="text" placeholder="+7 (XXX) XXX-XX-XX" />

                            <div class="vacancy-form__table-error">Необходимое поле</div>
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Электронная почта:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="Необязательно" />
                        </td>
                    </tr>
                </table>
            </div>

            <h5 class="vacancy-form__block-title">Образование</h5>
            <div class="form-block">
                <table>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Образование:</td>
                        <td class="vacancy-form__table-cell-value">
                            <select class="vacancy-form-select select select--type-no-shadow"
                                    data-width="100%">
                                <option></option>
                                <option value="1">Образование 1</option>
                                <option value="2">Образование 2</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Название учебного заведения:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   type="text" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Специальность:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   type="text" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Год окончания учёбы:</td>
                        <td class="vacancy-form__table-cell-value">
                            <input class="vacancy-form__input-text"
                                   type="text" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Дополнтельное образование:</td>
                        <td class="vacancy-form__table-cell-value">
                            <textarea class="vacancy-form__input-text vacancy-form__input-text--type-textarea"
                                      placeholder="Курсы, повышение квалификации и т.д."></textarea>
                        </td>
                    </tr>
                </table>
            </div>

            <h5 class="vacancy-form__block-title">Резюме</h5>
            <div class="vacancy-form-resume">
                <input id="vacancy-form-resume__file"
                       class="vacancy-form-resume__file"
                       type="file" />
                <label for="vacancy-form-resume__file"></label>

                <p class="vacancy-form-resume__top-p">
                    <b>Загрузите ваше резюме</b><br />
                    pdf или doc файл
                </p>

                <p>
                    <b>или вставьте на него ссылку</b>
                </p>

                <input class="vacancy-form-resume__file-link"
                       type="text"
                       placeholder="hh.ru, moikrug.ru, linkedin.com и т.п." />
            </div>

            <input class="vacancy-form__submit button button--type-transparent"
                   type="submit"
                   value="Отправить" />
        </form>
    </div>

    <div class="vacancy-form-additional">
        <h5>Дополнительные поля</h5>
        Чем больше полей заполнено, тем проще нам будем понять нашу совместимость

        <div class="vacancy-form-additional__buttons">
            <a href="javascript:void(0)"
               class="button button--type-dim vacancy-form-additional__button">Знание иностранного языка</a><br />
            <a href="javascript:void(0)"
               class="button button--type-dim vacancy-form-additional__button">Увлечения и привычки</a><br />
            <a href="javascript:void(0)"
               class="button button--type-dim vacancy-form-additional__button">Пожелания к будущей работе</a><br />
        </div>

        <i>Не заполняйте эти поля, если всё это есть в резюме</i>
    </div>

    <div class="clear"></div>
</div>

<? require '_footer.php' ?>
