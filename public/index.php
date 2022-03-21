<?php

require __DIR__.'/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath( $_SERVER[ 'BASE_URI' ] );

$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method'     => 'home'
    ],
    'home'
);


$match = $router->match();

if( $match )
{
    $controllerToUse = 'AmaFanZone\Controllers\\'.$match['target']['controller'];

    $methodtToCall = $match['target']['method'];

    $arguments = $match['params'];
} else
{
    $controllerToUse = 'AmaFanZone\Controllers\MainController';

    $methodtToUse = 'page404';

    $arguments = [];
}

$controller = new $controllerToUse();

$controller->$methodtToCall( $match['params'] );