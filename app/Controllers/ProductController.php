<?php

namespace AmaFanZone\Controllers;

class ProductController extends CoreController
{
    public function best()
    {
        $this->show( 'bestof' );
    }

    public function new()
    {
        $this->show( 'news' );
    }
}