<?php

namespace app\controllers;


use app\api\BillingClass;
use app\api\DBBilling;
use app\api\OrenBilling;
use app\api\VorBilling;
use app\models\User;
use core\App;

class UserController extends AppController {

    const TYPE_CLIENT = 'CLIENT';
    const TYPE_ABONENT = 'ABONENT';

    public function viewAction() {

    }

    public function authAction() {
        if (!empty($_POST)) {
            $user = new User();
            if ($result = $user->login()) {
                if ($result['success']) {
                    $u = User::currentUser();
                    $this->redirectUserByRole($u['role']);
                }
//                debug($user, 1);
            }
            redirect('/auth');
        }
        $this->layout = 'abonent';
    }

    public function registrationAction() {
        $body = (isset($_POST)) ? $this->xss($_POST) : null;
        $body['password'] = $body['password1'];
        $user = new User();
        $user->load($body);
        if ($res = $user->register()) {
            if ($res['success']) {
                User::sendCreateUserEmail($res['newUserId']);
                $_SESSION['success'] = $res['message'];
            } else {
                $_SESSION['errors'] = $res['message'];
            }
        }
        redirect('/');

//        // Если регистрация абонента для подачи заявок
//        if ($post['role'] === self::TYPE_ABONENT) {
//            if (!$post['privacy_confirm']) {
//                $_SESSION['errors'][] = 'Не указано согласие с политикой конфиденциальности';
//            }
//            $user = new User();
//            $user->load($post);
//            if (!$user->checkUnique()) {
//                $_SESSION['errors'][] = 'Такой пользователь уже зарегистрирован в системе! Если это вы, можете попробовать воспользоваться системой восстановления доступа!';
//                redirect();
//            }
//            if (!$user->validate()) {
//                $_SESSION['errors'][] = 'Не удалось зарегистрироваться в системе! Попробуйте позднее...';
//                redirect();
//            } else {
//                 $user -> attributes['hash'] = password_hash($post['password1'], PASSWORD_DEFAULT);
//                 $user->save('user');
//            }
//        }


    }

    public function confirmAction() {
        $body = self::xss($_REQUEST);
        $code = $body['code'] ?? null;
        if ($code) {
            $user = new User();
            if ($user->doConfirmCode($code)){
                $_SESSION['success'] = "Пользователь успешно активирован! Можете авторизоваться в системе!";
            } else {
                $_SESSION['errors'] = "Произошла ошибка при активации пользователя. Попробуйте чуть позже!";
            }
        }
        redirect('/auth');
    }

    public function profileAction() {

    }

    public function logoutAction() {
        User::logout();
    }

    private function redirectUserByRole($role) {
        $value = "/";
        switch ($role) {
            case "ROOT":
                $value = '/board';
                break;
            case "CLIENT":
                $value = '/board';
                break;
            case "ABONENT":
                $value = '/profile';
                break;
            default:
                $value = '/';
        }
        redirect($value);
    }


}