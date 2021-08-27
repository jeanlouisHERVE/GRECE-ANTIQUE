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

$router->map(
    'GET',
    '/article/categories',
    [
        'method' => 'category',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-categories'
);

$router->map(
    'GET',
    '/article/vu',
    [
        'method' => 'view',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-views'
);

$router->map(
    'GET',
    '/article/note',
    [
        'method' => 'rate',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-rates'
);



$router->map(
    'GET',
    '/article/alphabet',
    [
        'method' => 'alphabetical',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-alphabetical'
);


$router->map(
    'GET',
    '/article/contact',
    [
        'method' => 'contact',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'contact'
);

$router->map(
    'POST',
    '/article/contact',
    [
        'method' => 'contactPost',
        'controller' => '\App\Controllers\MainController' 
    ],
    'contactPost'
);

$match = $router->match();
    
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

$dispatcher->dispatch();