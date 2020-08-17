<?php


namespace app\controllers;


use app\models\Post;

class PageController extends AppController {

    public function indexAction() {
        if (!empty($this->route['alias'])) {
            $alias = $this->xss($this->route['alias']);
            $post = Post::getPostByAlias($alias, Post::TYPE_PAGE);
            $this->setMeta($post['title'], 'Новости, статьи, обзоры в личном кабинете клиента от студии webstudio56 в Оренбурге', '');
            $this->set(compact('post'));
        } else {
            redirect('/');
        }
    }

}