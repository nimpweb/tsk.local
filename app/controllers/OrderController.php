<?php


namespace app\controllers;


class OrderController extends AppController {

    public function createOrder() {
        $body = $_POST;
        $arResult = ['success' => false];

        if ($this->isAjax()) {
            exit(json_encode($arResult));
        }
        return $arResult;
    }

}