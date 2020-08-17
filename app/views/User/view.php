

<div class="section-overlay" style="background-size:cover; background-attachment: fixed;  background-image: url('./images/front_background.jpg'")></div>
<div class="row login-page__row pt63">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="start-tabs fav_inpd">
            <section class="sec">
                <div class="container">
                    <div class="row">
                        <div class="body-for">
                            <?php if (isset($_SESSION['warning'])): ?>
                                <div class="alert alert-warning"><?=$_SESSION['warning']?></div>
                            <?php unset($_SESSION['warning']); endif; ?>
                            <?php if (isset($info) && !empty($info)): ?>
                            <div class="col-12 mb-3"><h2 class="mb-2 red-line-h2">Оплата онлайн физических лиц <span class="billing-title"><?= $params['billing_title']?> <img src="http://rosvodokanal.ru/HTML/img/vr-s.png"></span></h2></div>
                            <div class="col-12 col-lg-7 pb-3">
                                <div class="hi">
                                    <span class="pb-2">Здравствуйте, <?=$info['fio_code']?>!</span>
                                    <div><?=$info['address_code']?></div>
                                </div>
                                <div class="dok-text"><span>Лицевой счет: </span><span><b><?=$info['account']?></b></span></div>
                                <div class="dok-text fav-inputs">
                                    <span>Номер телефона: </span>
                                    <span><input class="fav-input jkh-2_right fti-input-phone" type="text" name="phone" value="<?=isset($info['tel']) ? $info['tel'] : ''?>"></span>
                                </div>
                                <div class="dok-text fti-inputs fav-inputs">
                                    <span>Электронная почта: </span>
                                    <span><input class="fav-input jkh-2_right fav-input-mail" type="text" name="email" value="<?=isset($info['em']) ? $info['em'] : ''?>"></span>
                                </div>
                            </div>

                            <?php if (isset($info['debts']) && count($info['debts']) > 1): ?>
                            <div class="col-12 col-lg-5 pb-3">
                                <div class="item-right_t-1">Задолженность на <b><?=$info['summary']['date']?></b></div>
                                <?php foreach($info['debts'] as $key => $item): ?>
                                    <?php if ((double)$item['all_debt'] <> 0.00): ?>
                                    <div class="jkh-2 fav-inputs">
                                        <div class="jkh-2_left"><?=$item['title']?></div>
                                        <input type="hidden" name="payments[<?=$key?>][name]" value="<?=$item['title']?>">
                                        <input type="hidden" name="payments[<?=$key?>][dolg]" value="<?=$item['debt']?>">
                                        <input type="hidden" name="payments[<?=$key?>][fine]" value="<?=$item['fine']?>">
                                        <input class="fav-input jkh-2_right fav_summ_pay" type="number" min="196.1" step="0.01" name="payments[16][summ]" value="<?= priceFormat($item['all_debt'])?>" ">
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <div class="itog">Итого: <span class="account_pay_summ"><?=priceFormat($info['summary']['all_debt'])?></span> руб.</div>
                            </div>
                            <?php endif;?>
                            <div class="col-12">
                                <div class="item-bot">
                                    <div class="text-primary pb-3">* - Информация по состоянию счета обновляется в течение нескольких дней</div>
                                    <div class="BTN"><div class="button-bl" onclick="makeAPay()">Оплатить</div>
                                        <div class="tr">Отправляя заявку, Вы соглашаетесь на обработку своих персональных данных</div>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="col-12"><h2 class="mb-2 red-line-h2">Оплата услуг<span class="billing-title"><?= $params['billing_title']?></span></h2></div>
                            <form class="fav_show_block" data-path="/user/view" method="GET">
                                <div class="row">
                                    <div class="col-12 wr-inp fti-inputs">
                                        <div class="reg-form__radio-bl">
                                            <div class="reg-form__radio-wrap">
                                                <div class="radio-btns reg-form__radio">
                                                    <div class="radio-btns__item-wrap">
                                                        <div class="radio-btns__item">
                                                            <input id="profile_uid-1" class="radio-btns__radio-real fav_show" type="radio" name="sid" value="1" checked="">
                                                            <label class="radio-btns__label-real" for="profile_uid-1">
                                                                <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                <div class="radio-btns__text-wrap"><div class="radio-btns__text">Физическое лицо</div></div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="radio-btns__item-wrap">
                                                        <div class="radio-btns__item">
                                                            <input id="profile_uid-2" class="radio-btns__radio-real fav_show" type="radio" name="sid" value="2">
                                                            <label class="radio-btns__label-real" for="profile_uid-2">
                                                                <div class="radio-btns__radio-wrap"><div class="radio-btns__radio"><div class="radio-btns__radio-v"></div></div></div>
                                                                <div class="radio-btns__text-wrap"><div class="radio-btns__text">Юридическое лицо</div></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if (isset($params['b']) && !empty($params['b'])): ?>
                                        <input type="hidden" name="b" value="<?php echo $params['b']; ?>">
                                    <?php else: ?>
                                        <?php if ($params['billingList'] && !empty($params['billingList'])): ?>
                                        <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                            <div class="title-unp pb-2">Укажите Ваш биллинг <sup>*</sup></div>
                                            <select name="b" id="billing" class="fti-input fti-select form-control">
                                                <option value="-1">Выберите правильный биллинг</option>
                                                <?php foreach ($params['billingList'] as $billing): ?>
                                                <option value="<?=$billing['code']?>"><?=$billing['title']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?php endif; ?>
                                    <?php endif;?>

                                    <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs fav_showing " data-sid="1">
                                        <div class="title-unp pb-2">Лицевой счет <sup>*</sup></div>
                                        <input type="text" class="fti-input form-control fti-required " placeholder="Введите лицевой счет" name="ls" value="">
                                    </div>

                                    <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs fav_showing display--hidden" data-sid="2">
                                        <div class="title-unp pb-2">Номер договора <sup>*</sup></div>
                                        <input type="text" class="fti-input form-control fti-required " placeholder="Введите номер договора" name="nd" value="" disabled="">
                                    </div>

                                    <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs fav_showing display--hidden" data-sid="2">
                                        <div class="title-unp pb-2">ИНН <sup>*</sup></div>
                                        <input type="text" class="fti-input form-control fti-required " placeholder="Введите ИНН" name="inn" value="" disabled="">
                                    </div>

                                    <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                        <div class="title-unp pb-2">Номер телефона <sup>*</sup></div>
                                        <input type="text" class="fti-input form-control fti-input-phone fti-required " placeholder="Ваш номер телефона" name="tel" value="">
                                    </div>

                                    <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                                        <div class="title-unp pb-2">Отправить электронный чек на почту</div>
                                        <input type="text" class="fti-input form-control fav-input-mail " placeholder="Ваш e-mail" name="em" value="">
                                    </div>

                                    <div class="col-12"><hr></div>

                                    <div class="col-12 fav_warn_text"></div>

                                    <div class="col-12">
                                        <div class="tr left">Отправляя заявку Вы соглашаетесь на обработку своих персональных данных</div>
                                        <button type="submit" class="button-bl width">Получить информацию о задолженности</button>
                                    </div>

                                </div>

                            </form>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<form id="client_form" action="https://vp.ru/common-modal/" target="_blank" method="POST">
    <div class="vp_widget__form_row">
    <label class="vp_widget__button"><input type="submit" style="background-color: blanchedalmond; padding: 10px; border-radius: 3px; "></label></div>
    <input type="hidden" name="action" value="provider">
    <input type="hidden" name="guid" value="rvkvoronezh">
    <input type="hidden" name="utm_source" value="widget">

    <input type="hidden" name="acc" value="<?=$params['account']?>>">

    <input type="hidden" name="utm_medium" value="rvkvoronezh">
    <input type="hidden" name="utm_campaign" value="rvkvoronezh_knopkavma">
</form>
<script type="text/javascript">VP.widget.form('client_form');</script>


<script type="text/javascript" src="https://widget.vp.ru/vpjs1.1/common.js"></script>
<script src="https://testgate.vseplatezhi.ru/resources/js/widget-script.js"></script>
<script>
    function makeAPay() {
        const params = {
            merchant: '20000094',
            terminal: '200000941',
            amount: 12.04,
            description: 'Тестовая оплата',
            email: 'nimpweb@yandex.ru',
            orderId: '123',
            frame: true
        }
        goPay(params);
    }

</script>

