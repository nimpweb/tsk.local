

<div class="login-page__body login-page__body--white pt-5" >
    <div class="login-page__top-container-wrap">
        <div class="container login-page__container">

            <?php if (isset($_SESSION['success'])): ?>
                <div class="notification-user success"><?=$_SESSION['success']?></div>
            <?php unset($_SESSION['success']); endif;?>

            <?php if (isset($_SESSION['errors'])): ?>
                <div class="notification-user error"><?=$_SESSION['errors']?></div>
            <?php unset($_SESSION['errors']); endif;?>



            <div class="row login-page__row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="login-page__title-wrap"><div class="login-page__title">Личный кабинет</div></div>
                    <div class="start-tabs fav_inpd">
                        <div class="tpl-block-list tpl-component-netcat-module-auth-user tpl-template-163" id="nc-block-0081da47737b68825f547632f72dd8a3">
                            <div id="polzovateli-polzovateli-sluzhebnyy"></div>
                            <div class="block-scroll"><div class="width-content">
                                    <ul class="nav nav-tabs start-tabs__top" id="loginTab" role="tablist">

                                        <li class="nav-item start-tabs__link-wrap">
                                            <a class="nav-link start-tabs__link active" id="user_login-tab" data-toggle="tab" href="#user_login" role="tab" aria-controls="user_login" aria-selected="true" aria-expanded="true">Вход</a>
                                        </li>

                                        <li class="nav-item start-tabs__link-wrap">
                                            <a class="nav-link start-tabs__link" id="user_reg-tab" data-toggle="tab" href="#user_reg" role="tab" aria-controls="user_reg" aria-selected="false" aria-expanded="false">Регистрация</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="tab-content start-tabs__bottom" id="loginTabContent">

                                <div class="tab-pane start-tabs__tab-pane fade active show" id="user_login" role="tabpanel" aria-labelledby="user_login-tab" aria-expanded="true">

                                    <div class="reg-form">

                                        <form id="fav_auth_phase" class="reg-form__el" action="/auth" data-path="/user/login" method="post">
                                            <div class="reg-form__box">
                                                <div class="reg-form__row-wrap">
                                                    <div class="reg-form__row">

                                                        <div class="reg-form__col">
                                                            <div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap">
                                                                        <div class="fti-item__h">E-mail<sup>*</sup></div>
                                                                    </div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="email" name="email" value="" required="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="reg-form__col"></div>

                                                        <div class="reg-form__col">
                                                            <div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap"><div class="fti-item__h">Пароль <sup>*</sup></div></div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="password" name="password" value="" required="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="reg-form__restart-pass-wrap">
                                                                <span class="reg-form__restart-pass" onclick="nc_fav.password_recovery( this )">Восстановить пароль</span>
                                                            </div>
                                                        </div>

                                                        <div class="reg-form__col"></div>

                                                        <div class="reg-form__col">
                                                            <div class="reg-form__btn-wrap">
                                                                <button type="submit" class="sm-blue-btn text-center">Войти</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane start-tabs__tab-pane fade" id="user_reg" role="tabpanel" aria-labelledby="user_reg-tab" aria-expanded="false">


                                    <div class="reg-form">

                                        <form id="user_registration" class="reg-form__el fav_show_block" action="/user/registration" method="post">

                                            <div id="nc_moderate_form">
                                                <input name="role" type="hidden" value="ABONENT">
                                                <input name="parent_id" type="hidden" value="">
                                                <input name="uid" type="hidden" value="4">
                                            </div>

                                            <div class="reg-form__box">

                                                <div class="reg-form__row-wrap">
                                                    <div class="reg-form__row">

                                                        <div class="reg-form__col"><div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap">
                                                                        <div class="fti-item__h fav_showing " data-sid="1">Фамилия Имя Отчество <sup>*</sup></div>
                                                                    </div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="text" name="fio" value="" required="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div></div></div>

                                                        <div class="reg-form__col"><div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap"><div class="fti-item__h">E-mail <sup>*</sup></div></div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="text" name="email" required="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="reg-form__col">
                                                            <div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap"><div class="fti-item__h">Телефон</div></div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="text" name="phone" value="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="reg-form__col fav_showing" data-sid="2">
                                                            <div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap"><div class="fti-item__h">ИНН <sup>*</sup></div></div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="text" name="inn" value="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="reg-form__col"><div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap"><div class="fti-item__h">Пароль <sup>*</sup></div></div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="password" name="password1" value="" required="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div></div></div>

                                                        <div class="reg-form__col"><div class="reg-form__item-wrap">
                                                                <div class="fti-item reg-form__item">
                                                                    <div class="fti-item__h-wrap"><div class="fti-item__h">Пароль ещё раз <sup>*</sup></div></div>
                                                                    <div class="fti-item__input-wrap">
                                                                        <input class="fti-input reg-form__input" type="password" name="password2" value="" required="">
                                                                    </div>
                                                                    <div class="fti-item__error-wrap"><div class="fti-item__error"></div></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="registration_message new-connect__ti-col-100 fav_warn_text"></div>

                                                        <div class="reg-form__col"><div class="reg-form__checkbox-wrap">
                                                                <div class="fti-checkbox reg-form__checkbox"><div class="fti-checkbox__item">
                                                                        <input class="fti-checkbox__check-real" type="checkbox" name="privacy_confirm" id="privacy_confirm" checked="">
                                                                        <label class="fti-checkbox__label-real" for="privacy_confirm">
                                                                            <div class="fti-checkbox__check-wrap"><div class="fti-checkbox__check">
                                                                                    <div class="fti-checkbox__check-v"></div>
                                                                                </div></div>
                                                                            <div class="fti-checkbox__ch-text-wrap">
                                                                                <div class="fti-checkbox__ch-text">Я ознакомлен(а) с соглашением на&nbsp;передачу персональных данных, в&nbsp;соответствии с <a href="/netcat_files/c/privacy.pdf" target="_blank">политикой конфиденциальности</a></div>
                                                                            </div>
                                                                        </label>
                                                                    </div></div></div></div>

                                                        <div class="reg-form__col">
                                                            <div class="reg-form__btn-wrap">
                                                                <button type="submit" class="sm-blue-btn text-center">Зарегистрироваться</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tpl-block-list tpl-component-239" id="nc-block-e74ee088168a8ff31aa706bf82a259e8"><div class="login-page__bottom-container-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="start-news">
                            <div class="start-news__row-wrap">
                                <div class="start-news__row"></div></div></div></div></div></div></div></div></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
       const registrationForm = document.querySelector('#user_registration');
       const privacyConfirm = document.querySelector('#privacy_confirm');
       if (registrationForm) {
           registrationForm.addEventListener('submit', event => {
               event.preventDefault();

               if (!privacyConfirm.checked) {
                   alert('Зарегистрироваться без согласия с политикой конфиденциальности нельзя!');
                   return false;
               }

               // Проверяем на соответствие паролей
               const pwd1 = registrationForm.querySelector('[name=password1]');
               const pwd2 = registrationForm.querySelector('[name=password2]');
               const registrationMessage = registrationForm.querySelector('.registration_message');
               if (pwd1.value.trim() === '') {
                   registrationMessage.innerHTML = '<span>Пароль не может быть пустым</span>';
                   return false;
               }
               if (pwd1.value === pwd2.value) {
                   event.target.submit();
               } else {
                  registrationMessage.innerHTML = '<span>Пароли не совпадают</span>';
                  pwd1.querySelector('.fti-item__error').innerHTML = 'Обязательное поле';
                  pwd2.querySelector('.fti-item__error').innerHTML = 'Обязательное поле';
               }
           })
       }
    });
</script>