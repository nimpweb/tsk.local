<?php


namespace app\controllers\board;


use app\controllers\board\AppController;

class MonitorController extends AppController
{
    public function indexAction() {
        $this->setMeta('Монитор событий...');
    }

}