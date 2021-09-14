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
    '/articlelist',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-list'
);

$router->map(
    'GET',
    '/categorylist',
    [
        'method' => 'categories',
        'controller' => '\App\Controllers\ArticleController' 
    ],
    'article-categories'
);

$router->map(
    'GET', 
    '/categories/[i:id]', 
    [
        'method' => 'articlesByCategory',
        'controller' => '\App\Controllers\ArticleController'
    ], 
    'articlesByCategory'
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
    '/article/[i:id]', 
    [
        'method' => 'detailArticle',
        'controller' => '\App\Controllers\ArticleController',
    ], 
    'articleById'
);



$router->map(
    'GET',
    '/contact',
    [
        'method' => 'contact',
        'controller' => '\App\Controllers\MainController' 
    ],
    'contact'
);

$router->map(
    'POST',
    '/contact',
    [
        'method' => 'contactPost',
        'controller' => '\App\Controllers\MainController' 
    ],
    'contactPost'
);

$router->map(
    'GET',
    '/apropos',
    [
        'method' => 'apropos',
        'controller' => '\App\Controllers\MainController' 
    ],
    'aPropos'
);


$match = $router->match();
    
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

$dispatcher->dispatch();