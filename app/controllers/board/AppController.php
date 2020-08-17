<?php
/**
 * Created by PhpStorm.
 * User: Nimp
 * Date: 11.05.2020
 * Time: 22:32
 */

namespace app\controllers\board;

use app\models\AppModel;
use core\mvc\Controller;
use app\models\User;

class AppController extends Controller {

    public $layout = 'admin';

    public function __construct($route){
        parent::__construct($route);
//        if(!User::isAdmin() && $route['action'] != 'auth'){
//            redirect(ADMIN . '/user/auth'); // UserController::loginAdminAction
//        }
        new AppModel();
    }
}