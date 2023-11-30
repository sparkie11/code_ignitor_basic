<?php

namespace App\Controllers;

use App\Controllers\Shop;



class Home extends BaseController
{
    public function index()
    {
        return view('gautam');
    }

    public function validation(){
        $shop = new Shop();
        echo $shop->product('laptop','lenova');
    } 
}
