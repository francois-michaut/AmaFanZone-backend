<?php

namespace AmaFanZone\Controllers;

use AmaFanZone\Models\Product;

class ProductController extends CoreController
{
    public function best()
    {
        $product = new Product();

        $productList = $product->findBestProduct();

        $this->show( 'bestof', ['list' => $productList ] );
    }

    public function new()
    {
        $product = new Product();

        $productList = $product->findNewProduct();

        $this->show( 'news', [ 'list' => $productList ] );
    }
}