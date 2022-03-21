<?php

namespace AmaFanZone\Controllers;

class CoreController
{
    protected function show( $viewName, $viewVars = array() )
    {
        global $router;

        // // Je récupère l'URL racine du site
        $absoluteUrl = $_SERVER['BASE_URI'];

        include __DIR__.'./../Views/header.tpl.php';
        include __DIR__.'./../Views/' . $viewName . '.tpl.php';
        include __DIR__.'./../Views/footer.tpl.php';
    }
}