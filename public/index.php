<?php


require_once '../vendor/autoload.php';

$router = new AltoRouter();


if (array_key_exists('BASE_URI', $_SERVER)) {

    $router->setBasePath($_SERVER['BASE_URI']);
  
}

else {
    
    $_SERVER['BASE_URI'] = '/';
}


$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\MainController' 
    ],
    'main-home'
);

$router->map(
    'GET',
    '/article/list',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-list'
);



$match = $router->match();
    
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

$dispatcher->dispatch();