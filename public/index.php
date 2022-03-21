<?php
//  var_dump($_SERVER);
use AmaFanZone\Controllers\CoreController;

require __DIR__ .'/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath( $_SERVER[ 'BASE_URI' ] );

$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method'     => 'home'
    ],
    'main-home'
);

$router->map(
    'GET',
    '/categories',
    [
        'controller' => 'CategoryController',
        'method'     => 'list'
    ],
    'category-list'
);


$router->map(
    'GET',
    '/bestof',
    [
        'controller' => 'ProductController',
        'method'     => 'best'
    ],
    'product-best'
);


$router->map(
    'GET',
    '/news',
    [
        'controller' => 'ProductController',
        'method'     => 'new'
    ],
    'product-new'
);

$match = $router->match();

if( $match )
{
    $controllerToUse = '\\AmaFanZone\\Controllers\\'.$match['target']['controller'];

    $methodtToCall = $match['target']['method'];

    $arguments = $match['params'];
} else
{
    $controllerToUse = '\\AmaFanZone\\Controllers\\' . 'MainController' ;

    $methodtToUse = 'page404';

    $arguments = [];
}

$controller = new $controllerToUse();

$controller->$methodtToCall( $match['params'] );