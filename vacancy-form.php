<? require '_header.php' ?>

<div class="layout">
    <div class="vacancy-form">
        <form class="form">
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
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="Иванов" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Имя:</td>
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="Иван" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Отчество:</td>
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="Иванович" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Дата рождения:</td>
                        <td>
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
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="РФ" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Семейное положение:</td>
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="Холост" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Контактный телефон:</td>
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" placeholder="+7 (XXX) XXX-XX-XX" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Электронная почта:</td>
                        <td>
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
                        <td>
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
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Специальность:</td>
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Год окончания учёбы:</td>
                        <td>
                            <input class="vacancy-form__input-text"
                                   type="text" />
                        </td>
                    </tr>
                    <tr class="vacancy-form__table-row">
                        <td class="vacancy-form__table-cell">Дополнтельное образование:</td>
                        <td>
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
</div>

<? require '_footer.php' ?>
