<?php

// POINT D'ENTRÉE UNIQUE : 
// FrontController

// inclusion des dépendances via Composer
// autoload.php permet de charger d'un coup toutes les dépendances installées avec composer
// mais aussi d'activer le chargement automatique des classes (convention PSR-4)
require_once '../vendor/autoload.php';

// Avant de faire quoique ce soit, on initialise la session
// Ça permet de créer et remplir la variable $_SESSION
// On pourra ainsi s'en servir dans tous les controleurs
session_start();

/* ------------
--- ROUTAGE ---
-------------*/

// création de l'objet router
// Cet objet va gérer les routes pour nous, et surtout il va 
$router = new AltoRouter();

// le répertoire (après le nom de domaine) dans lequel on travaille est celui-ci
// Mais on pourrait travailler sans sous-répertoire
// Si il y a un sous-répertoire
if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
}
// sinon
else {
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '/';
}

// On doit déclarer toutes les "routes" à AltoRouter, afin qu'il puisse nous donner LA "route" correspondante à l'URL courante
// On appelle cela "mapper" les routes
// 1. méthode HTTP : GET ou POST (pour résumer)
// 2. La route : la portion d'URL après le basePath
// 3. Target/Cible : informations contenant
//      - le nom de la méthode à utiliser pour répondre à cette route
//      - le nom du controller contenant la méthode
// 4. Le nom de la route : pour identifier la route, on va suivre une convention
//      - "NomDuController-NomDeLaMéthode"
//      - ainsi pour la route /, méthode "home" du MainController => "main-home"
$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\MainController' // On a mis le FQCN del a classe
    ],
    'main-home'
);

/**
 * CRUD de AppUser
 */
$router->map(
    'GET',
    '/users',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\AppUserController'
    ],
    'app-user-list'
);

$router->map(
    'GET',
    '/users/create',
    [
        'method' => 'create',
        'controller' => '\App\Controllers\AppUserController'
    ],
    'app-user-create'
);

$router->map(
    'POST',
    '/users/create',
    [
        'method' => 'createPost',
        'controller' => '\App\Controllers\AppUserController'
    ],
    'app-user-create-post'
);

/**
 * CRUD des Catégories
 */
$router->map(
    'GET',
    '/categories',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-list'
);

$router->map(
    'GET',
    '/categories/create',
    [
        'method' => 'create',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-create'
);

$router->map(
    'POST',
    '/categories/create',
    [
        'method' => 'createPost',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-create-post'
);

$router->map(
    'GET',
    '/categories/update/[i:id]',
    [
        'method' => 'update',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-update'
);

$router->map(
    'POST',
    '/categories/update/[i:id]',
    [
        'method' => 'updatePost',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-update-post'
);

$router->map(
    'GET',
    '/categories/delete/[i:id]',
    [
        'method' => 'delete',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-delete'
);

$router->map(
    'GET',
    '/categories/home-order',
    [
        'method' => 'homeOrder',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-home-order'
);

$router->map(
    'POST',
    '/categories/home-order',
    [
        'method' => 'homeOrderPost',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'category-home-order-post'
);

/**
 * CRUD des Produits
 */
$router->map(
    'GET',
    '/products',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\ProductController'
    ],
    'product-list'
);

$router->map(
    'GET',
    '/products/create',
    [
        'method' => 'create',
        'controller' => '\App\Controllers\ProductController'
    ],
    'product-create'
);

$router->map(
    'POST',
    '/products/create',
    [
        'method' => 'createPost',
        'controller' => '\App\Controllers\ProductController'
    ],
    'product-create-post'
);

$router->map(
    'GET',
    '/products/update/[i:id]',
    [
        'method' => 'update',
        'controller' => '\App\Controllers\ProductController'
    ],
    'product-update'
);

$router->map(
    'POST',
    '/products/update/[i:id]',
    [
        'method' => 'updatePost',
        'controller' => '\App\Controllers\ProductController'
    ],
    'product-update-post'
);

$router->map(
    'GET',
    '/products/delete/[i:id]',
    [
        'method' => 'delete',
        'controller' => '\App\Controllers\ProductController'
    ],
    'product-delete'
);

/**
 * S06E05 - Connexion
 */
$router->map(
    'GET',
    '/login',
    [
        'method' => 'login',
        'controller' => '\App\Controllers\SecurityController'
    ],
    'security-login'
);

$router->map(
    'POST',
    '/login',
    [
        'method' => 'loginPost',
        'controller' => '\App\Controllers\SecurityController'
    ],
    'security-login-post'
);

$router->map(
    'GET',
    '/logout',
    [
        'method' => 'logout',
        'controller' => '\App\Controllers\SecurityController'
    ],
    'security-logout'
);

/* -------------
--- DISPATCH ---
--------------*/

// On demande à AltoRouter de trouver une route qui correspond à l'URL courante
$match = $router->match();

// Ensuite, pour dispatcher le code dans la bonne méthode, du bon Controller
// On délègue à une librairie externe : https://packagist.org/packages/benoclock/alto-dispatcher
// 1er argument : la variable $match retournée par AltoRouter
// 2e argument : le "target" (controller & méthode) pour afficher la page 404
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();