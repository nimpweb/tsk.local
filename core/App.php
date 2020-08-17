<?php

namespace core;

class App{

    public static $app;

    public function __construct(){
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
         $this->getParams();
        new ErrorHandler();
        Router::dispatch($query);
    }

    protected function getParams(){
        $params = require_once CONFIG . '/params.php';

        Db::instance();
        $params_db = \R::getAll('SELECT * FROM params');
        foreach ($params_db as $item => $value) {
            $params[$value['param_name']] = $value['param_value'];
        }

        if(!empty($params)){
            foreach($params as $k => $v){
                self::$app->setProperty($k, $v);
            }
        }
    }

}