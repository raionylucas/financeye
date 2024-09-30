<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
