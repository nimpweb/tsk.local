<?php
/**
 * Created by PhpStorm.
 * User: Nimp
 * Date: 11.05.2020
 * Time: 18:57
 */

namespace app\controllers\board;

use app\controllers\board\AppController;

class MainController extends AppController {

    public $layout = 'admin';

    public function indexAction() {
//        debug($this);
//        redirect(ADMIN.'/monitor');

    }

}