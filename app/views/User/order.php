<div class="login-page__body">
    <div class="login-page__top-container-wrap">
        <div class="container login-page__container">
            <div class="row login-page__row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="start-tabs fav_inpd">

                        <form class="fav_show_block" data-path="/fastpay/" method="GET">
                            <section class="sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h2 class="mb-2 red-line-h2">Подача заявки на технологическое присоединение</h2></div>


                                            <div class="row">
                                                <div class="col-12 wr-inp fti-inputs">
                                                    <div class="reg-form__radio-bl">
                                                        <div class="reg-form__radio-wrap">

                                                            <div class="radio-btns reg-form__radio">
                                                                <div class="radio-btns__item-wrap">
                                                                    <div class="radio-btns__item">
                                                                        <input id="profile_uid-1" class="radio-btns__radio-real fav_show" type="radio" name="sid" value="1" onclick="switchPageType( this )" checked="">
                                                                        <label class="radio-btns__label-real" for="profile_uid-1">
                                                                            <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                            <div class="radio-btns__text-wrap"><div class="radio-btns__text">
                                                                                    Физического лица на присоединение по одному источнику электроснабжения энергопринимающих устройств с максимальной мощностью до 15 кВт включительно (используемых для бытовых и иных нужд, не связанных с осуществлением предпринимательской деятельности)
                                                                                </div></div>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="radio-btns__item-wrap">
                                                                    <div class="radio-btns__item">
                                                                        <input id="profile_uid-2" class="radio-btns__radio-real fav_show" type="radio" name="sid" value="2" onclick="switchPageType( this )">
                                                                        <label class="radio-btns__label-real" for="profile_uid-2">
                                                                            <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                            <div class="radio-btns__text-wrap"><div class="radio-btns__text">
                                                                                    Юридического лица (индивидуального предпринимателя), физического лица на присоединение по одному источнику электроснабжения энергопринимающих устройств с максимальной мощностью до 150 кВт включительно
                                                                                </div></div>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="radio-btns__item-wrap">
                                                                    <div class="radio-btns__item">
                                                                        <input id="profile_uid-3" class="radio-btns__radio-real fav_show" type="radio" name="sid" value="3" onclick="switchPageType( this )">
                                                                        <label class="radio-btns__label-real" for="profile_uid-3">
                                                                            <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                            <div class="radio-btns__text-wrap"><div class="radio-btns__text">
                                                                                    Юридического лица (индивидуального предпринимателя), физического лица на временное присоединение энергопринимающих устройств
                                                                                </div></div>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="radio-btns__item-wrap">
                                                                    <div class="radio-btns__item">
                                                                        <input id="profile_uid-4" class="radio-btns__radio-real fav_show" type="radio" name="sid" value="4" onclick="switchPageType( this )">
                                                                        <label class="radio-btns__label-real" for="profile_uid-4">
                                                                            <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                            <div class="radio-btns__text-wrap"><div class="radio-btns__text">
                                                                                    Форма заявки юридического лица (индивидуального предпринимателя), физического лица на присоединение энергопринимающих устройств
                                                                                </div></div>
                                                                        </label>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12"><hr class="no-margin"></div>

                                                <div class="col-12 wr-inp fti-inputs fav-inputs fav_showing display--hidden" data-in-sid="2,3,4">
                                                    <div class="title-unp pb-2">Выберите вид Вашей деятельности <sup>*</sup></div>
                                                    <select class="fti-select form-control fti-required" name="guaranteeSupplier" placeholder="Выберите гарантирующего поставщика">
                                                        <option value="0">Выберите из списка</option>
                                                        <option value="1">Юридическое лицо</option>
                                                        <option value="2">Индивидуальный предприниматель</option>
                                                        <option value="3">Физическое лицо</option>
                                                    </select>
                                                </div>

                                                <div class="col-12 fav_showing erg_block" data-in-sid="2,3,4">
                                                    <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                        <div class="row2">
                                                            <div class="col-12">
                                                                <div class="title-unp pb-2">Полное наименование организации <sup>*</sup></div>
                                                                <textarea class="fti-input form-control " name="applicantOrganizationName" rows="2" placeholder="Укажите полное наименование организации (юридического лица) либо ФИО (индивидуального предпринимателя)"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="row2 mt-3">
                                                            <h4 class="col-12 mt-2 text-center">Запись в едином государственном реестре</h4>

                                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                                <div class="title-unp pb-2">Номер записи <span id="egr_label">ЕГРЮЛ</span> <sup>*</sup></div>
                                                                <input type="text" class="fti-input form-control fti-required " placeholder="Укажите номер записи" name="egrNumber" value="">
                                                            </div>

                                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                                <div class="title-unp pb-2">Дата внесения <sup>*</sup></div>
                                                                <input type="text" class="fti-input form-control fti-required " placeholder="Укажите дату внесения" name="egrDate" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr>


                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">ФИО заявителя <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите ФИО заявителя" name="applicantFio" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Номер телефона заявителя<sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-input-phone fti-required " placeholder="Укажите номер телефона заявителя" name="applicantPhone" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs fav_showing display--hidden" data-in-sid="2,3">
                                                    <div class="title-unp pb-2">Должность <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите должность заявителя" name="applicantPosition" value="" disabled="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Электронная почта заявителя <sup>*</sup></div>
                                                    <input type="email" class="fti-input form-control fav-input-mail fti-required" placeholder="Укажите e-mail заявителя" name="applicantEmail" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs ">
                                                    <div class="title-unp pb-2">ИНН</div>
                                                    <input type="text" class="fti-input form-control" placeholder="Введите ИНН" name="applicantInn" value="">
                                                </div>


                                            </div>
                                            <div class="col-12 wr-inp"><hr></div>
                                            <div class="row">

                                                <div class="radio-btns__item-wrap">
                                                    <div class="radio-btns__item">
                                                        <input id="hasRepresentative" class="radio-btns__radio-real fav_show" type="checkbox" name="hasRepresentative">
                                                        <label class="radio-btns__label-real" for="hasRepresentative">
                                                            <div class="radio-btns__radio-wrap"><div class="checkbox-btns__checkbox"><div class="checkbox-btns__checkbox-v"><i class="fa fa-check"></i></div></div></div>
                                                            <div class="radio-btns__text-wrap"><div class="radio-btns__text">Представитель заявителя</div></div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row representativeBlock display--hidden">
                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs display--hidden">
                                                    <div class="title-unp pb-2">Фамилия Имя Отчетство <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-input-phone fti-required " placeholder="Иванов Иван Иванович" name="representativeFio" value="">
                                                </div>
                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs display--hidden">
                                                    <div class="title-unp pb-2">Телефон <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-input-phone" placeholder="+7(999)999-99-99" name="representativePhone" value="">
                                                </div>
                                                <div class="col-12 wr-inp fti-inputs fav-inputs display--hidden">
                                                    <div class="title-unp pb-2">Документ подтверждающий полномочия(вид документа, номер документа, дата выдачи) <sup>*</sup></div>
                                                    <textarea class="fti-input form-control " name="representativeDocument" rows="3" placeholder="Например: доверенность №123 от 01.01.2020г."></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Паспортные данные -->
                            <section class="sec wr-inp">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Паспортные данные заявителя</h5></div>
                                            <div class="col-12">
                                                <div class="row2">
                                                    <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs ">
                                                        <div class="title-unp pb-2">Вид документа <sup>*</sup></div>
                                                        <input type="text" class="fti-input form-control fti-required" placeholder="Например: Паспорт" name="passpName" value="">
                                                    </div>
                                                    <div class="col-md-6 col-12 wr-inp">
                                                        <div class="row">
                                                            <div class="col-md-4 col-12 fti-inputs fav-inputs">
                                                                <div class="title-unp pb-2">Серия <sup>*</sup></div>
                                                                <input type="text" class="fti-input form-control fti-required" placeholder="5300" name="passpSerial" value="">
                                                            </div>
                                                            <div class="col-md-4 col-12 fti-inputs fav-inputs">
                                                                <div class="title-unp pb-2">Номер <sup>*</sup></div>
                                                                <input type="text" class="fti-input form-control fti-required" placeholder="001122" name="passpNumber" value="">
                                                            </div>
                                                            <div class="col-md-4 col-12 fti-inputs fav-inputs">
                                                                <div class="title-unp pb-2">Дата выдачи <sup>*</sup></div>
                                                                <input type="text" class="fti-input form-control fti-required" placeholder="01.01.1990" name="passpDate" value="">
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="row">
                                                    <div class="title-unp pb-2">Кем выдан <sup>*</sup></div>
                                                    <textarea class="fti-input form-control fti-required" name="passpOtdel" rows="2" placeholder="Например: Отел внутренних дел Центрального р-на г.Оренбурга"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </section>

                            <!-- Адрес регистрации заявителя -->
                            <section class="sec wr-inp fav_showing" data-in-sid="1">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="row">
                                                <div class="col-12"><h5 class="mb-2 red-line-h5">Адрес регистрации заявителя</h5></div>
                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Область <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите область(край)" name="registryAddressObl" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Населенный пункт <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите населенный пункт" name="registryAddressTown" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Улица <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите улицу" name="registryAddressStreet" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="title-unp pb-2">Дом <sup>*</sup></div>
                                                            <input type="text" class="fti-input form-control fti-required " placeholder="Укажите дом" name="registryAddressDom" value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="title-unp pb-2">Корпус </div>
                                                            <input type="text" class="fti-input form-control " placeholder="Укажите корпус" name="registryAddressKorpus" value="">

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="title-unp pb-2">Квартира</div>
                                                            <input type="text" class="fti-input form-control " placeholder="Укажите квартиру" name="registryAddressFlat" value="">

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 wr-inp">

                                                    <div class="radio-btns__item-wrap">
                                                        <div class="radio-btns__item">
                                                            <input id="equalsFaktAddressLink" class="radio-btns__radio-real fav_show" type="checkbox" name="equalsFaktAddressLink">
                                                            <label class="radio-btns__label-real" for="equalsFaktAddressLink">
                                                                <div class="radio-btns__radio-wrap"><div class="checkbox-btns__checkbox"><div class="checkbox-btns__checkbox-v"><i class="fa fa-check"></i></div></div></div>
                                                                <div class="radio-btns__text-wrap"><div class="radio-btns__text">Совпадает с адресом фактического проживания</div></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Фактический адрес регистрации заявителя -->
                            <section class="sec wr-inp block_fakt_addr">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="row">
                                                <div class="col-12"><h5 class="mb-2 red-line-h5">Фактический адрес регистрации заявителя</h5></div>
                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Область <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите область(край)" name="faktAddressObl" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Населенный пункт <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите населенный пункт" name="faktAddressTown" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Улица <sup>*</sup></div>
                                                    <input type="text" class="fti-input form-control fti-required " placeholder="Укажите улицу" name="faktAddressStreet" value="">
                                                </div>

                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="title-unp pb-2">Дом <sup>*</sup></div>
                                                            <input type="text" class="fti-input form-control fti-required " placeholder="Укажите дом" name="faktAddressDom" value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="title-unp pb-2">Корпус </div>
                                                            <input type="text" class="fti-input form-control " placeholder="Укажите корпус" name="faktAddressKorpus" value="">

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="title-unp pb-2">Квартира</div>
                                                            <input type="text" class="fti-input form-control " placeholder="Укажите квартиру" name="faktAddressFlat" value="">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- В связи с  ...  -->
                            <section class="sec wr-inp">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="row">
                                                    <div class="title-unp pb-2">В связи с <sup>*</sup></div>
                                                    <textarea class="fti-input form-control " name="inRelation" rows="2" placeholder="Например: увеличением объема максимальной мощности, новое строительство и др."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="row">
                                                    <div class="title-unp pb-2">Наименование энергопринимающих устройств для присоединения <sup>*</sup></div>
                                                    <textarea class="fti-input form-control " name="nameOfPowerRecevingDevices" rows="2" placeholder="Например: что-то придумать"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="row">
                                                    <div class="title-unp pb-2">Место нахождения энергопринимающих устройств <sup>*</sup></div>
                                                    <textarea class="fti-input form-control " name="placeOfPowerRecevingDevices" rows="2" placeholder="Адрес по которому расположены энергопринимающие устройства"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Максимальная мощность -->
                            <section class="sec wr-inp">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">

                                            <div class="col-12 text-uppercase text-center mb-2"><h5 class="mb-2 red-line-h5">Максимальная мощность энергопринимающих устройств присоединяемых и ранее присоединенных</h5></div>
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Максимальная мощность энергопринимающих устройств</h5></div>

                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">составляет (кВтч),  <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="" name="maxPowerKA" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">уровень напряжения, кВ <sup>*</sup></div>
                                                <select class="fti-select form-control fti-required" name="maxPowerVA" onchange="doCalculateMaxUnn()">
                                                    <option value="0.23">0,23 кВ</option>
                                                    <option value="0.4">0,4 кВ</option>
                                                    <option value="6">6 кВ</option>
                                                    <option value="10">10 кВ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Максимальная мощность ранее присоединенных энергопринимающих устройств</h5></div>

                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">составляет (кВтч),  <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="" name="maxPowerKB" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">уровень напряжения, кВ <sup>*</sup></div>
                                                <select class="fti-select form-control fti-required" name="maxPowerVB" onchange="doCalculateMaxUnn()">
                                                    <option value="0.23">0,23 кВ</option>
                                                    <option value="0.4">0,4 кВ</option>
                                                    <option value="6">6 кВ</option>
                                                    <option value="10">10 кВ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="border-top: 1px solid rgba(100, 100, 100, 0.2); background-color: rgba(200, 200, 200, 0.2); ">
                                        <div class="body-for" style="width: 100%; ">

                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">составляет (кВтч)</div>
                                                <input type="text" class="fti-input form-control fti-required disabled" placeholder="" name="maxPowerK" value="0" readonly>
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">уровень напряжения, кВ</div>
                                                <input type="text" class="fti-input form-control fti-required disabled" placeholder="" name="maxPowerV" value="0,23 кВ" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>

                            <!-- Этапы строительства -->
                            <section class="sec wr-inp plan fav_showing" data-sid="1">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Сроки проектирования и поэтапного введения в эксплуатацию энергопринимающих устройств (в том числе по этапам и очередям)</h5></div>
                                            <div class="col-12"><h5 class="mb-2 red-line-h5 line-upper">1 очередь (этап) строительства</h5></div>
                                            <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Наименование объекта <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="Например: Строительная площадка, магазин, жилой дом и т.п." name="stage1Name" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Планируемый срок проектирования энергопринимающего устройства <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage1TermDesign" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Планируемый срок введения энергопринимающего устройства в эксплуатацию  <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage1PowerReceivingDevice" value="">
                                            </div>

                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Максимальная мощность, кВт <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage1MaxPower" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Категория надежности  <sup>*</sup></div>
                                                <select class="fti-select form-control fti-required" name="stage1CategoryReliability" placeholder="Выберите гарантирующего поставщика">
                                                    <option value="1">1-ая категория</option>
                                                    <option value="2">2-ая категория</option>
                                                    <option value="3">3-ья категория</option>
                                                </select>
                                            </div>

                                            <div class="col-12 wr-inp text-center stage-button-container"><button type="button" class="button-bl width stage-add">Добавить очередь</button></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="sec wr-inp plan fav_showing display--hidden" data-sid="2">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Сроки проектирования и поэтапного введения в эксплуатацию энергопринимающих устройств (в том числе по этапам и очередям)</h5></div>
                                            <div class="col-12"><h5 class="mb-2 red-line-h5 line-upper">1 очередь (этап) строительства</h5></div>
                                            <div class="col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Наименование объекта <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="Например: Строительная площадка, магазин, жилой дом и т.п." name="stage1Name" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Планируемый срок проектирования энергопринимающего устройства <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage1TermDesign" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Планируемый срок введения энергопринимающего устройства в эксплуатацию  <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage1PowerReceivingDevice" value="">
                                            </div>

                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Максимальная мощность, кВт <sup>*</sup></div>
                                                <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage1MaxPower" value="">
                                            </div>
                                            <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                <div class="title-unp pb-2">Категория надежности  <sup>*</sup></div>
                                                <select class="fti-select form-control fti-required" name="stage1CategoryReliability" placeholder="Выберите гарантирующего поставщика">
                                                    <option value="1">1-ая категория</option>
                                                    <option value="2">2-ая категория</option>
                                                    <option value="3">3-ья категория</option>
                                                </select>
                                            </div>

                                            <div class="col-12 wr-inp text-center stage-button-container"><button type="button" class="button-bl width stage-add">Добавить очередь</button></div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Гарантирующий поставщик -->
                            <section class="sec wr-inp">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="row">
                                                <div class="col-12"><h5 class="mb-2 red-line-h5">Гарантирующий поставщик (энергосбытовая организация), с которым планируется заключение договора электроснабжения (купли-продажи электрической энергии (мощности)</h5></div>
                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs fav-showing">
                                                    <div class="title-unp pb-2">Укажите Вашего гарантирующего поставщика <sup>*</sup></div>
                                                    <select id="guaranteeSupplier" class="fti-select form-control fti-required" name="guaranteeSupplier" placeholder="Выберите гарантирующего поставщика">
                                                        <option value="1" data-email="energo@mail.ru">АО "ЭнергосбыТ Плюс"</option>
                                                        <option value="2" data-email="vostok@mail.ru">АО "Энергосбытовая компания "Восток"</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                                    <div class="title-unp pb-2">Отправить уведомление на (email) <sup>*</sup></div>
                                                    <input type="email" class="fti-input form-control fti-required " name="guaranteeEmail" value="orensbyt@orensbyt.ru">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="sec wr-inp">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">

                                            <div class="col-md-8">

                                                <h3 class="docs-h3">Список необходимых документов</h3>

                                                <div class="docs__list">

                                                    <ol>
                                                        <li id="bx_3218110189_138">
                                                            <a href="/upload/iblock/fc8/fc815257d76b448007ed8ee7c3eef01e..docx">
                                                                <p class="name"><span>Федеральный закон от 7 декабря 2011 г. № 416-ФЗ «О водоснабжении и водоотведении» регулирует отношения в сфере водоснабжения и водоотведения</span>,
                                                                    определяет требования к качеству и безопасности воды, подаваемой с использованием централизованных и нецентрализованных систем водоснабжения.</p>
                                                                <span class="filename ">№416.docx <span>|</span> 91 kB</span>
                                                            </a>

                                                        </li>

                                                        <li id="bx_3218110189_139">
                                                            <a href="/upload/iblock/138/138d1ae2bba3d4d3e47d9e64bf546a4a..docx">
                                                                <p class="name"><span>Правила предоставления коммунальных услуг собственникам и пользователям помещений в многоквартирных домах и жилых домах, утвержденные постановлением Правительства РФ от 6 мая 2011 г. № 354</span>,
                                                                    регулируют отношения по предоставлению коммунальных услуг собственникам и&nbsp;&nbsp;пользователям помещений в жилых домах, в том числе отношения между исполнителями и потребителями коммунальных услуг.</p>
                                                                <span class="filename ">№354.docx <span>|</span> 264.9 kB</span>
                                                            </a>

                                                        </li>

                                                        <li id="bx_3218110189_140">
                                                            <a href="/upload/iblock/22b/22b218e3fcc330caf41907c848d602fb..docx">
                                                                <p class="name"><span>Правила организации коммерческого учета воды, сточных вод, утвержденные постановлением Правительства РФ от 4 сентября 2013 г. № 776</span>,
                                                                    определяют порядок коммерческого учета воды, сточных вод с использованием приборов учета, соответствующих требованиям законодательства Российской Федерации.</p>
                                                                <span class="filename ">№776.docx <span>|</span> 27.6 kB</span>
                                                            </a>

                                                        </li>

                                                        <li id="bx_3218110189_141">
                                                            <a href="/upload/iblock/d7b/d7ba2ec098ebc5344033d38d11c2096e..docx">
                                                                <p class="name"><span>Правила холодного водоснабжения и водоотведения, утвержденные постановлением Правительства РФ от 29 июля 2013 г. № 644</span>,
                                                                    регулируют отношения органов власти, организаций водопроводно-канализационного хозяйства, заявителей, абонентов по предоставлению холодной (питьевой и (или) технической) воды из централизованных и нецентрализованных систем холодного водоснабжения и по отводу сточных вод.</p>
                                                                <span class="filename ">№644.docx <span>|</span> 92.4 kB</span>
                                                            </a>

                                                        </li>

                                                        <li id="bx_3218110189_142">
                                                            <a href="/upload/iblock/8de/8de194ffb881bbf16085c51dd057216e..docx">
                                                                <p class="name"><span>Правила установления и определения нормативов потребления коммунальных услуг и нормативов потребления коммунальных ресурсов в целях содержания общего имущества в многоквартирном доме, утвержденные постановлением Правительства РФ от 23 мая 2006 г. № 306</span>,
                                                                    определяют порядок установления нормативов потребления коммунальных услуг (холодное и горячее водоснабжение, водоотведение, электроснабжение, газоснабжение, отопление), нормативов потребления коммунальных ресурсов в целях содержания общего имущества в многоквартирном доме и требования к их формированию.</p>
                                                                <span class="filename ">№306.docx <span>|</span> 99.3 kB</span>
                                                            </a>

                                                        </li>

                                                        <li id="bx_3218110189_143">
                                                            <a href="/upload/iblock/242/242f8dadb10e1aafc58cf4ce90892a77..docx">
                                                                <p class="name"><span>Правила содержания общего имущества в многоквартирном доме и правил изменения размера платы за содержание и ремонт жилого помещения в случае оказания услуг и выполнения работ по управлению, содержанию и ремонту общего имущества в многоквартирном доме ненадлежащего качества и (или) с перерывами, превышающими установленную продолжительность, утвержденные постановлением Правительства РФ от 13 августа 2006 г. № 491</span>,
                                                                    регулируют отношения по содержанию общего имущества, принадлежащего на праве общей долевой собственности собственникам помещений в многоквартирном доме.</p>
                                                                <span class="filename ">№491.docx <span>|</span> 42 kB</span>
                                                            </a>

                                                        </li>

                                                        <li id="bx_3218110189_144">
                                                            <a href="/upload/iblock/90f/90fc711c47b76cfd5d4241aad81157f6..docx">
                                                                <p class="name"><span>Постановление Правительства РФ от 14.02.2012 № 124 «О правилах, обязательных при заключении договоров снабжения коммунальными ресурсами»</span>,
                                                                    устанавливающих обязательные требования при заключении товариществами, кооперативами или управляющей организацией с ресурсоснабжающими организациями договоров холодного водоснабжения, водоотведения в целях обеспечения предоставления потребителям коммунальной услуги и приобретения коммунальных ресурсов, потребляемых при содержании общего имущества в многоквартирном доме.</p>
                                                                <span class="filename ">№124.docx <span>|</span> 41.7 kB</span>
                                                            </a>

                                                        </li>

                                                    </ol>
                                                    <br></div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Ошибка и submit -->
                            <section class="sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="row w100">
                                                <div class="col-12"><hr></div>
                                                <div class="col-12 fav_warn_text"></div>

                                                <div class="col-12">
                                                    <div class="tr left">Отправляя заявку Вы соглашаетесь на обработку своих персональных данных</div>
                                                    <div class="pull-right">
                                                        <button type="submit" class="button-bl width submit-button">Следующий шаг <i class="fa fa-forward" aria-hidden="true"></i></button>
                                                    </div>
                                                    <div style="padding-top: 20px; color: #ccc; text-align: center;"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;Далеек блок: <strong>Добавление электронных документов</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Порядок рассчета -->
                            <section class="sec fav_showing display--hidden" data-sid="2">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Порядок расчета и условиям рассрочки внесения платы за технологическое присоединение по договору осуществляется:</h5></div>
                                            <div class="col-12 wr-inp fti-inputs">
                                                <div class="reg-form__radio-bl">
                                                    <div class="reg-form__radio-wrap">

                                                        <div class="radio-btns reg-form__radio">
                                                            <div class="radio-btns__item-wrap">
                                                                <div class="radio-btns__item">
                                                                    <input id="procedureOfSettlements-1" class="radio-btns__radio-real fav_show" type="radio" name="pos" value="1" onclick="switchPageType( this )" checked="">
                                                                    <label class="radio-btns__label-real" for="procedureOfSettlements-1">
                                                                        <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                        <div class="radio-btns__text-wrap"><div class="radio-btns__text">
                                                                                <strong>вариант 1 </strong>
                                                                                <hr>
                                                                                15 процентов платы за технологическое присоединение вносятся в течение 15 дней со дня заключения договора; <br />
                                                                                30 процентов платы за технологическое присоединение вносятся в течение 60 дней со дня заключения договора, но не позже дня фактического присоединения; <br />
                                                                                45 процентов платы за технологическое присоединение вносятся в течение 15 дней со дня фактического присоединения; <br />
                                                                                10 процентов платы за технологическое присоединение вносятся в течение 15 дней со дня подписания акта об осуществлении технологического присоединения
                                                                            </div></div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 wr-inp fti-inputs">
                                                <div class="reg-form__radio-bl">
                                                    <div class="reg-form__radio-wrap">

                                                        <div class="radio-btns reg-form__radio">
                                                            <div class="radio-btns__item-wrap">
                                                                <div class="radio-btns__item">
                                                                    <input id="procedureOfSettlements-2" class="radio-btns__radio-real fav_show" type="radio" name="pos" value="2" onclick="switchPageType( this )" checked="">
                                                                    <label class="radio-btns__label-real" for="procedureOfSettlements-2">
                                                                        <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                        <div class="radio-btns__text-wrap"><div class="radio-btns__text">
                                                                                <strong>вариант 2</strong>
                                                                                <hr>
                                                                                авансовый платеж вносится в размере 5 процентов размера платы за технологическое присоединение;<br />
                                                                                осуществляется беспроцентная рассрочка платежа в размере 95 процентов платы за технологическое присоединение с условием ежеквартального внесения платы равными долями от общей суммы рассрочки на период до 3 лет со дня подписания сторонами акта об осуществлении технологического присоединения
                                                                            </div></div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <!-- Шаблон секции -->
                            <section class="sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="body-for">
                                            <div class="col-12"><h5 class="mb-2 red-line-h5">Максимальная мощность энергопринимающих устройств присоединяемых и ранее присоединенных</h5></div>
                                            <div class="row"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="body-for" style="width: 100% !important;">
                        <ul class="menu__sidebar">
                            <li><a href="/profile"><span class="fa fa-user-o"></span>&nbsp;&nbsp;Профиль</a></li>
                            <li class="separator"></li>
                            <li><a href="#"><span class="fa fa-list"></span>&nbsp;&nbsp;Список моих заявок</a></li>
                            <li><a href="#"><span class="fa fa-file-text"></span>&nbsp;&nbsp;Подать новую заявку</a></li>
                            <li class="separator"></li>
                            <li><a href="#"><span class="fa fa-sort-numeric-asc"></span>&nbsp;&nbsp;Передать показания приборов учета</a></li>
                            <li><a href="#"><span class="fa fa-list-ol"></span>&nbsp;&nbsp;История переданных показаний</a></li>
                            <li class="separator"></li>
                            <li><a href="#"><span class="fa fa-pencil-square-o"></span>&nbsp;&nbsp;Обращение в сетевую компанию</a></li>
                            <li><a href="#"><span class="fa fa-info"></span>&nbsp;&nbsp;Информаиця для потребителей</a></li>

                        </ul>
                    </div>

                    <span>наверх</span>
                </div>
            </div>
        </div>
    </div>

    <div class="tpl-block-list tpl-component-239" id="nc-block-04ea08e72b6b542f840445b28906b3d5">
        <div class="login-page__bottom-container-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="start-news">
                            <div class="start-news__row-wrap">
                                <div class="start-news__row"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
