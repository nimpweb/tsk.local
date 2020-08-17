<?php
// default routes
use core\Router;

Router::add('^profile$', ['controller' => 'User', 'action' => 'profile']);
Router::add('^registration$', ['controller' => 'User', 'action' => 'registration']);
Router::add('^auth$', ['controller' => 'User', 'action' => 'auth']);
//
//Router::add('^blog$', ['controller' => 'Blog', 'action' => 'index', 'fixedAction' => 'index']);
//Router::add('^page$', ['controller' => 'Page', 'action' => 'index', 'fixedAction' => 'index']);

Router::add('^board/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'board']);
Router::add('^board', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'board']);


Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');