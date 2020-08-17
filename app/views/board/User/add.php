<div class="row page-titles">
    <div class="col p-0">
        <h4>Добавление<span> нового пользователя</span></h4>
    </div>
    <div class="col p-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Безопасность</a>
            </li>
            <li class="breadcrumb-item">Список пользователей</li>
            <li class="breadcrumb-item active">Новый</li>
        </ol>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php unset($_SESSION['success']); endif; ?>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger"><?=$_SESSION['error']?></div>
                <?php unset($_SESSION['error']); endif; ?>

                <div class="form-validation">
                    <form class="form-valide" action="<?=ADMIN?>/user/add" method="post" novalidate="novalidate">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Логин пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="login" placeholder="Укажите логин пользователя">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Фамилия пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="f_name" placeholder="Укажите Фамилию пользователя">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Имя пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="n_name" placeholder="Укажите имя пользователя">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Отчество пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="o_name" placeholder="Укажите отчетство пользователя">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Укажите валидный emil пользователя">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-password">Пароль <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="val-password" name="password" placeholder="Используйте безопастный пароль">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Повтор пароля <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="val-confirm-password" name="confirm-password" placeholder="Повторите Ваш пароль">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-role">Роль <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="val-skill" name="role">
                                    <option value="">Укажите права пользователя</option>
                                    <option value="DISABLED">Учетная запись отключена</option>
                                    <option value="CLIENT">Клиент</option>
                                    <option value="MANAGER">Менеджер подразделения</option>
                                    <option value="ADMIN">Администратор системы</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-role">Подразделение <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="val-skill" name="vk_code">
                                    <option value="0">Укажите подразделение</option>
                                    <option value="801">Воронежская область</option>
                                    <option value="802">Оренбургская область</option>
                                    <option value="803">Краснодарская область</option>
                                    <option value="804">Амурская область</option>
                                    <option value="805">Калужская область</option>
                                    <option value="806">Астраханская область</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto pull-right">
                                <button type="submit" class="btn btn-primary" name="submit" value="1">Добавить нового пользователя</button>
                                <button class="btn btn-secondary js-btn-cancel">Отмена</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/plugins/validation/jquery.validate.min.js"></script>
<script src="../../assets/plugins/validation/jquery.validate-init.js"></script>