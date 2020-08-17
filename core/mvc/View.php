<?php

namespace core\mvc;

class View {

    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];
    public $header_data = ['js' => [], 'css' => []];
    public $footer_data = ['js' => [], 'css' => []];
    public $dynamic_scripts = [];
    public $og_data = [];

    public function __construct($route, $layout = '', $view = '', $meta, $og_data = []){
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        $this->og_data = $og_data;
        if($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data){
        if(is_array($data)) extract($data);
        $this->prefix = str_replace('\\', '/', $this->prefix);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(is_file($viewFile)){
//            ob_start();
            ob_start('ob_gzhandler');
            {
                header("Content-Encoding: gzip");
                require $viewFile;
                $content = ob_get_contents();
            }
            ob_clean();
//            $content = ob_get_clean();


        }else{
            throw new \Exception("На найден вид {$viewFile}", 500);
        }
        if(false !== $this->layout){
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            }else{
                throw new \Exception("На найден шаблон {$this->layout}", 500);
            }
        }
    }

    /***
     * @param $type - тип элемента
     * @param $path - путь к файлу
     */
    public function addDataToHeader($type, $path) {
        if (!isset($this->header_data[$type][$path])) {
            array_push($this->header_data[$type], $path);
        }
    }
    /***
     * @param $type - тип элемента
     * @param $path - путь к файлу
     */
    public function addDataToFooter($type, $path) {
        if (!isset($this->footer_data[$type][$path])) {
            array_push($this->footer_data[$type], $path);
        }
    }

    public function addDynamicScript($text) {
        $this->dynamic_scripts[] = $text;
    }

    /***
     * Сформировать Header
     */
    public function getHeader() {
        $scripts = ""; $css = "";
        foreach($this->header_data as $key => $arr) {
            if ($key == 'js') {
                if (!empty($arr)) {
                    for ($i=0; $i<count($arr); $i++) {
                        $scripts .= '<script type="text/javascript" src="'.$arr[$i].'"></script>'.PHP_EOL;
                    }
                }
            }
            if ($key == 'css') {
                if (!empty($arr)) {
                    for ($i=0; $i<count($arr); $i++) {
                        $css .= '<link rel="stylesheet" type="text/css" href="'.$arr[$i].'"/>'.PHP_EOL;
                    }
                }
            }
        }

        if ($css != '') echo $css;
        if ($scripts != '') echo $scripts;
    }


    /**
     * Сформировать Footer
     */
    public function getFooter() {
        $scripts = "";
        foreach($this->footer_data as $key => $arr) {
            if ($key == 'js') {
                if (!empty($arr)) {
                    for ($i=0; $i<count($arr); $i++) {
                        $scripts .= "<script type='text/javascript' src='{$arr[$i]}'></script>".PHP_EOL;
                    }
                }
            }
        }

        if (!empty($this->dynamic_scripts)) {
            foreach ($this->dynamic_scripts as $key => $script) {
                $scripts .= "<script>".$script."</script>".PHP_EOL;;
            }
        }


        if ($scripts != '') echo $scripts;
    }

    public function getMeta(){
        $output = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $output .= '<meta name="description" content="' . $this->meta['desc'] . '">' . PHP_EOL;
        $output .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;
        return $output;
    }

    protected function getOGData() {
        $res = "";
        if (isset($this->og_data) && !empty($this->og_data)) {
            foreach ($this->og_data as $item => $value) {
                if (!empty($item) && !empty($value)) $res .= '    <meta property="'.$item.'" content="'.$value.'"/>'. PHP_EOL;;
            }
        }
        return $res;
    }

}

