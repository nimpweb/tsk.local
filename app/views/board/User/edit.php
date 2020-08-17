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

                <?php if ($user): ?>
                <div class="form-validation">
                    <form class="form-valide" action="<?=ADMIN?>/user/edit" method="post" novalidate="novalidate">
                        <input type="hidden" name="id" value="<?=$user['id']?>">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Логин пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="login" placeholder="Укажите логин пользователя" value="<?=$user['login']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Фамилия пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="f_name" placeholder="Укажите Фамилию пользователя" value="<?=$user['f_name']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Имя пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="n_name" placeholder="Укажите имя пользователя"  value="<?=$user['n_name']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-login">Отчество пользователя <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-login" name="o_name" placeholder="Укажите отчетство пользователя"  value="<?=$user['o_name']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Укажите валидный emil пользователя"  value="<?=$user['email']?>">
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
                                    <option value="DISABLED" <?=($user['role'] === 'DISABLED') ? ' selected' : ''?>>Учетная запись отключена</option>
                                    <option value="CLIENT" <?=($user['role'] === 'CLIENT') ? ' selected' : ''?>>Клиент</option>
                                    <option value="MANAGER" <?=($user['role'] === 'MANAGER') ? ' selected' : ''?>>Менеджер подразделения</option>
                                    <option value="ADMIN" <?=($user['role'] === 'ADMIN') ? ' selected' : ''?>>Администратор системы</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-role">Подразделение <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="val-skill" name="vk_code">
                                    <option value="0">Укажите подразделение</option>
                                    <option value="801" <?=($user['vk_code'] === '801') ? ' selected' : ''?>>Воронежская область</option>
                                    <option value="802" <?=($user['vk_code'] === '802') ? ' selected' : ''?>>Оренбургская область</option>
                                    <option value="803" <?=($user['vk_code'] === '803') ? ' selected' : ''?>>Краснодарская область</option>
                                    <option value="804" <?=($user['vk_code'] === '804') ? ' selected' : ''?>>Амурская область</option>
                                    <option value="805" <?=($user['vk_code'] === '805') ? ' selected' : ''?>>Калужская область</option>
                                    <option value="806" <?=($user['vk_code'] === '806') ? ' selected' : ''?>>Астраханская область</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto pull-right">
                                <button type="submit" class="btn btn-primary" name="submit" value="1">Сохранить изменения</button>
                                <button class="btn btn-secondary js-btn-cancel">Отмена</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/plugins/validation/jquery.validate.min.js"></script>
<script src="../../assets/plugins/validation/jquery.validate-init.js"></script>