<?php
/**
 * Created by PhpStorm.
 * User: Nimp
 * Date: 11.05.2020
 * Time: 18:27
 */

namespace app\models;


class User extends AppModel {

    const TABLE_NAME = 'user';
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_CLIENT = 'CLIENT';
    const ROLE_ABONENT = 'ABONENT';
    const ROLE_DISABLED = 'DISABLED';

    const STATE_ACTIVE = 'ACTIVE';
    const STATE_NOT_CONFIRMED = 'NOT_CONFIRMED';
    const STATE_DISABLED = 'DISABLED';

    public $attributes = [
        'uid' => '',
        'login' => '',
        'fio' => '',
        'phone' => '',
        'email' => '',
        'role' => self::ROLE_CLIENT,
        'password' => '',
        'state' => self::STATE_DISABLED
//        'f_name' => '',
//        'n_name' => '',
//        'o_name' => '',
    ];

    public $rules = [
        'required' => [
//            ['login'],
            ['email'],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' => [
            ['password1', 6],
        ]
    ];

    public function checkUnique() {
        $user = \R::findOne('user', '(login=? OR email=?) AND (uid <> ?)', [
            $this->attributes['login'], $this->attributes['email'], $this->attributes['uid']
        ]);
        if ($user) {
            if ($user->login === $this->attributes['login']) {
                $this->errors['unique'][] = 'Такой логин уже зарегистрирован в системе!';
            }
            if ($user->email === $this->attributes['email']) {
                $this->errors['unique'][] = 'Такой email уже зарегистрирован в системе!';
            }
            return false;
        }
        return true;
    }

    public function getUserInfo($id) {
        return \R::findOne('user', 'id=?', [$id]);
    }

    public function login() {
        $login = !empty(trim($_POST['email']))  ? trim($_POST['email']) : null;
        $password = !empty(trim($_POST['password']))  ? trim($_POST['password']) : null;
        $arResult = ['success' => false];

        if ($login && $password) {
            $user = \R::findOne('user', 'login=? or email=?', [$login, $login]);
            if ($user) {
                if (password_verify($password, $user->hash)) {
                    foreach ($user as $key => $value) {
                        if ($key != 'password') $_SESSION['user'][$key] = $value;
                    }
                    $arResult['success'] = true;
                    return $arResult;
                } else {
                    $arResult['message'] = 'Произошла ошибка при авторизации!';
                }
            } else {
                $arResult['message'] = 'Произошла ошибка при авторизации пользователя!';
            }
        } else {
            $arResult['message'] = 'Произошла ошибка при авторизции пользователя: пользователь не существует!';
        }

        return false;
    }

    public function register() {
        $arResult = ['success' => false, 'message' => 'Не известная ошибка...'];
        if ($this->attributes['role'] === self::ROLE_ADMIN) {
            $arResult['message'] = "Нельзя так делать!";
            return $arResult;
        }
        $candidate = \R::getRow("SELECT * FROM user WHERE email=?", [$this->attributes['email']]);
        if ($candidate) {
            $arResult['message'] = "Пользователь с таким электронным адресом уже зарегистрирован в системе!";
            return $arResult;
        }

        if ($this->validate($this->attributes)) {
            $this->attributes['hash'] = password_hash($this->attributes['password'], PASSWORD_DEFAULT);
            unset($this->attributes['password']);
            $this->attributes['confirm_code'] = uniqid('cnf', true);
            $this->attributes['state'] = self::STATE_NOT_CONFIRMED;
            if ($id = $this->save('user')) {
                $uid = uniqid('u');
                $newUser = \R::load('user', $id);
                $newUser['uid'] = $uid;
                \R::store($newUser);
                $arResult['success'] = true;
                $arResult['newUser'] = $newUser;
                $arResult['newUserId'] = $id;
                $arResult['message'] = 'Регистрация успешно выполнена! Проверьте email указанный Вами при регистрации.';
            }

        } else {
            $str = "";
            foreach ($this->errors as $key => $error) {
                foreach ($error as $message) {
                    $str .= "<li class='list-item'>" . $message . "</li>";
                }
            }
            $str = "<ul class='list'>".$str."</ul>";
            $arResult['message'] = $str; // 'Вы не прошли валидацию! Проверьте вводимые данные!';
        }
        return $arResult;
    }

    public function doConfirmCode($code) {
        $code = htmlspecialchars($code);
        $user = \R::getRow('SELECT * FROM user WHERE confirm_code=?', [$code]);
        if ($user && $user['state'] === self::STATE_NOT_CONFIRMED) {
            $u = \R::load('user', $user['id']);
            $u['state'] = self::STATE_ACTIVE;
            \R::store($u);
            return true;
        }
        return false;
    }

    public static function roleList() {
        return [
            'ROLE_ADMIN' => 'ADMIN',
            'ROLE_CLIENT' => 'CLIENT',
            'ROLE_ABONENT' => 'ABONENT',
            'ROLE_DISABLED' => 'DISABLED'
        ];
    }

    public static function getRoleName($role) {
        switch ($role) {
            case self::ROLE_ADMIN: {
                return 'Администратор сайта';
            }
            case self::ROLE_CLIENT: {
                return 'Клиент сайта';
            }
            case self::ROLE_MANAGER: {
                return 'Менеджер подразделения';
            }
            case self::ROLE_DISABLED: {
                return 'Учетаня запись отключена';
            }
        }
    }

    public static function logout() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
//            $_SESSION['success'] = 'Вы вышли из системы успешно!';
        }
        redirect('/');
    }

    public static function currentUser() {
        $user = $_SESSION['user'] ?? null;
        return $user;
    }

    public static function getUserList() {
        if (self::isAdmin()) {
            return \R::getAll('SELECT * FROM '.self::TABLE_NAME);
        }
        return false;
    }

    public static function isAdmin(){
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == self::ROLE_ADMIN);
    }

    public static function isClient(){
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == self::ROLE_CLIENT);
    }

    public static function isAbonent(){
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == self::ROLE_ABONENT);
    }

    public static function getUserById($id) {
        $id = (int)$id;
        return \R::getRow('SELECT * FROM user WHERE id=?', [$id]);
    }

    public static function sendCreateUserEmail($newUserId) {
        $user = self::getUserById($newUserId) ?? null;
        if ($user && $user['state'] === self::STATE_NOT_CONFIRMED) {
            $confirmCode = $user['confirm_code'];
            $body = "<h2>Поздравляем, регистрация выполнена успешно!</h2>";
            $body .= "<br />";
            $body = "<p>Для подтверждения регистрация пройдти по сссылке: <a href='".SITE."/user/confirm?code=".$confirmCode."'>".$confirmCode."</a></p>";
            self::sendEmail([
                'email_list' => $user['email'],
                'subject' => 'Пользователь успешно добавлен в систему',
                'body' => $body
            ]);
        }
    }

}