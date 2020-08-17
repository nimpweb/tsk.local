<?php


namespace app\controllers\board;

use app\models\User;

class UserController extends AppController {

    public function indexAction() {
        $userList = User::getUserList();
        $this->set(compact('userList'));
    }

    public function testAction() {

    }

    public function addAction() {
        if ($_POST) {
            $post = self::xss($_POST);
            if ($post['submit'] === '1') {
                if ($post['password'] === $post['confirm-password']) {
                    $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
                    $user = new User();
                    $user->load($post);
                    $user_id = $user->save('user');
                    if (!$user->validate($post) || !$user->checkUnique()) {
                        $user->getErrors();
                        redirect();
                    }
                    if ($user_id) {
                        $u = \R::load('user', $user_id);
                        $u->uid = $this->GUID();
                        \R::store($u);
                        $_SESSION['success'] = "Пользователь <{$post['login']}> успешно добавлен!";
                    }
                    else {
                        $_SESSION['error'] = 'Произошла ошибка при добавлении пользователя!';
                    }
                } else {
                    $_SESSION['error'] = 'Пароли не совпадают!';
                }
            }
            redirect();
        }
        $this->setMeta('Добавление нового пользователя', '', '');
    }

    public function editAction() {
//        debug($_REQUEST['id'], 1);
        if ($_REQUEST['id']) {
            $userId = (int)$_REQUEST['id'];
            if (!empty($_POST)) {
                $post = self::xss($_POST);
                $user = new User();
                $user->load($post);
                if (isset($user->attributes['uid'])) { unset($user->attributes['uid']); }
                if ($user->attributes['password']) { unset($user->attributes['password']); }
                else { $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT); }

                if (!$user->validate($post) || !$user->checkUnique()) {
                    $user->getErrors();
                    redirect();
                }
                if ($user->update('user', $userId)) {
                    $_SESSION['success'] = 'Изменения сохранены!';
                }
            }
            $user = \R::getRow('SELECT * FROM user WHERE id=?', [$userId]);
            $this->setMeta('Редактирование профиля пользователя!');
            $this->set(compact('user'));
        } else {
            throw new \Exception('Пользователь не найден!', 404);
        }
    }

    private function GUID()
    {
        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

}