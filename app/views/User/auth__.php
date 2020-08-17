<div class="login-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center m-t-15">Вход в админку</h4>
                            <form class="m-t-30 m-b-30" action="/user/auth" method="POST">
                                <div class="form-group">
                                    <label>Логин (или Email)</label>
                                    <input type="text" name="login" class="form-control" placeholder="Укажите логин">
                                </div>
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input type="password" name="password" class="form-control" placeholder="Укажите пароль">
                                </div>

                                <div class="text-center m-b-15 m-t-15">
                                    <a href="/" class="btn btn-success">Вернутсья на главную</a>
                                    <button type="submit" class="btn btn-primary">Авторизоваться</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>