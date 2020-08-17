<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка на технологическое присоединение</title>


    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid-float.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/payment.css" />

    <script type="text/javascript" src="./assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/tether.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="page-wrapper">
    <div class="header header--start">
        <div class="header__container">
            <div class="header__row">

                <div class="header__col-1">


                    <div class="header__logo-link-wrap">
                        <a class="header__logo-link header__logo-link--rvo" href="/">
                            <img class="header__logo-rvo" src="" alt="">
                        </a>
                    </div>

                    <div class="header__start-phone-wrap">
                        <a class="header__start-phone" href="tel:+7 (3532) 70-70-60">
                            <span class="header__start-phone-text"> Телефон горячей линии:</span>
                            <span class="header__start-phone-number">+7 (3532) 70-70-60</span>
                        </a>
                    </div>
                </div>


                <div class="header__col-2">
                    <div class="header__logout-container">
                        <div class="header__logout-wrap">
                            <div class="header__logout <?php if (true) {echo " header__user";} ?>">
                                <a href="/user/lk" class="header__logout"> <span class="fa fa-user-o"></span>&nbsp;&nbsp;Личный кабиент</a>
                            </div>
                        </div>
                        <?php if (true): ?>
                        <div class="header__logout-wrap">
                            <div class="header__logout <?php if (in_array($this->view, ["auth", "login"])) {echo " header__user";} ?>">
                                <a href="/user/auth" class="header__logout"> <span class="fa fa-user-o"></span>&nbsp;&nbsp;Авторизация</a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="header__logout-wrap">
                            <div class="header__logout">
                                <a href="/user/logout" class="header__logout"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;Выйти</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?= $content ?>
</div>


<div id="modal-cookie-usage" class="modal-panel" style="display: none;">
    <div class="modal-panel-content">
        <div class="modal-panel-body">
            Работая с этим сайтом, вы даете свое согласие на использование файлов cookie сервисов «Яндекс». <a href="https://yandex.ru/support/browser/personal-data-protection/cookies.html" target="_blank">Подробнее</a>. Это необходимо для нормального функционирования сайта, показа целевой рекламы и анализа трафика. Статистика использования сайта отправляется в «Яндекс». <a href="https://yandex.ru/support/browser/personal-data-protection/cookies.html" target="_blank">Подробнее</a>
        </div>
        <div class="modal-panel-sidebar">
            <div class="modal-panel-btn" onclick="setCookie( 'oren_cookie_usage', true, { path: '/', expires: 604800 } )">Согласен</div>
        </div>
    </div>
</div>

<script src="assets/js/bundle.js"></script>
</body>
</html>