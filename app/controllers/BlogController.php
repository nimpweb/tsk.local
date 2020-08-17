<?php


namespace app\controllers;

use app\models\Post;

class BlogController extends AppController {

    public $layout = 'blog';

    public function indexAction() {
        if (!empty($this->route['alias'])) {
            $alias = $this->xss($this->route['alias']);
            $post = Post::getPostByAlias($alias, Post::TYPE_BLOG);
            $this->setMeta('Блог: Личный кабинет клиента', 'Новости, статьи, обзоры в личном кабинете клиента от студии webstudio56 в Оренбурге', '');
            $this->set(compact('post'));
        } else {
            $posts = Post::getAllPosts(Post::TYPE_BLOG);
            $this->setMeta('Блог: Личный кабинет клиента', 'Новости, статьи, обзоры в личном кабинете клиента от студии webstudio56 в Оренбурге', '');
            $this->set(compact('posts'));
        }
    }



}