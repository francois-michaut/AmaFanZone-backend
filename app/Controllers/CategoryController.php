<?php

namespace AmaFanZone\Controllers;

use AmaFanZone\Models\Category;

class CategoryController extends CoreController
{
    public function list()
    {
       $category = new Category();

       $categoriesList = $category->findAll();


        $this->show( 'category', [ 'list' => $categoriesList] );
    }
}