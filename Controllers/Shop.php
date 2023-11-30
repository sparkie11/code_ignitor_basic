<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('gautam');
    }
    public function  product($type,$hello){
        // return view('product');
        echo '<h2>this is a product :'.$type.'   ok it is boring '.$hello.' </h2>';
    }

    protected function adminCheck(){
        echo 'this is a protected area ';
    }
}
