<?php

namespace core\mvc;

abstract class Controller{

    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];
    public $og_data = [];

    public function __construct($route){
        $params = $_SERVER["REQUEST_URI"];
        if (strpos($params, '?') > 0) {
            $params = substr($params, strpos($params, '?')+1, strlen($params));
            $p = explode('&', $params);
            $params = [];
            foreach ($p as $item) {
                $p1 = explode('=', $item);
                $params[$p1[0]] = $p1[1];
            }
        }
        else $params = [];
        $this->route = $route;
        $this->route['params'] = $params;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta, $this->og_data);
        $viewObject->render($this->data);
    }

    public function set($data){
        $this->data = $data;
    }

    public function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = h($title);
        $this->meta['desc'] = h($desc);
        $this->meta['keywords'] = h($keywords);
    }

    public function setOGData($data = []) {
        foreach ($data as $item => $value) {
            $this->og_data[$item] = h($value);
        }
    }

    public function isAjax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    public function loadView($view, $vars = []){
        extract($vars);
        require APP . "/views/{$this->prefix}{$this->controller}/{$view}.php";
        die;
    }

    public static function xss($data) {
        if (is_array($data)) {
            $mas = [];
            foreach ($data as $key => $value) {
                $mas[$key] = self::xss($value);
            }
            return $mas;
        }
        return trim(htmlspecialchars($data));
    }

    /**
     * @return array|string
     */
    protected function parseBody() {
        $input = file_get_contents('php://input');
        $input = json_decode($input);
        $input = $this->xss($input);
        return $input;
    }
}