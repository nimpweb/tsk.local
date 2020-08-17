<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->getMeta(); ?>
    <?= $this->getOGData(); ?>
    <!--    <title>Оплата услуг</title>-->

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid-float.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/payment.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style__.css" />

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

                <?php if (!isset($_SESSION['user'])): ?>
                <div class="header__col-2">
                    <div class="header__logout-container">
                        <div class="header__logout-wrap">
                            <div class="header__logout">
                                <a href="/user/auth" class="header__logout">Войти</a>
                            </div>
                        </div>
                    </div>

                </div>
                <?php else: ?>
                <div class="header__col-2">
                    <div class="header__logout-container">
                        <div class="header__logout-wrap">
                            <div class="header__logout">
                                <a href="<?=ADMIN?>" class="header__logout">В админку</a>
                            </div>
                        </div>
                        <div class="header__logout-wrap">
                            <div class="header__logout">
                                <a href="/user/logout" class="header__logout">Выйти</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="login-page__body">
        <div class="login-page__top-container-wrap">


                        <?= $content ?>

                        </div>
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
</div>

<script>


</script>

<script type="module" src="./assets/js/bundle.js"></script>
</body>
</html>