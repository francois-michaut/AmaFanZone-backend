<?php

namespace AmaFanZone\Controllers;

use AmaFanZone\Models\Category;
use AmaFanZone\Models\Product;

class MainController extends CoreController
{
    public function home()
    {
        $product = new Product();

        $productsList = $product->findAllForHome();

        $newProduct = new Product();

        $newPoductsList = $newProduct->findNewsForHome();

        $params['liste'] = $productsList;

        $params['news'] = $newPoductsList;

        $this->show( 'home', $params );
    }

    

    public function page404()
    {
        $this->show( 'page404' );
    } 
}