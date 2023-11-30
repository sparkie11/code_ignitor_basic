<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Users extends BaseController
{
    public function index()
    {
       echo '<h2>this is an protected user area </h2> ';
    }
    public function  getAllUsers(){
        // return view('product');
        echo '<h2>show all users </h2>';
    }
}
