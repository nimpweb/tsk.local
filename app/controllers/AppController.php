<?php

namespace app\controllers;

use core\mvc\Controller;
use app\models\AppModel;
use core\App;

class AppController extends Controller {

    public $layout = 'default';

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('params', AppModel::loadParams());
    }

    public static function checkRecapchaV3($key) {
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".GOOGLE_RECAPTCHA_SECRET."&response={$key}");
        $result = json_decode($response);
        if ($result) {
            return ['success' => $result->success, 'score' => $result->score];
        }
        return ['success' => false, 'score' => 0.0];
    }
}