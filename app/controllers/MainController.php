<?php

namespace app\controllers;


class MainController extends AppController {

    public function indexAction() {
        $user = $_SESSION['user'] ?? null;
        if (!$user) {
            redirect("/auth");
        } else {
            redirect(ADMIN. '');
        }
//        $this->setMeta('Личный кабинет Водоканала', 'Описание личного кабинета водоканала', 'личный кабинет, оплата, бабульки');
//        $this->set(compact('info'));
    }
}