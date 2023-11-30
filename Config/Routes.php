<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/validation', 'Home::validation');

// $routes->get('/', 'Shop::index');
$routes->get('shop', 'Shop::index');
$routes->get('shop/product', 'Shop::product');
$routes->get('shop/product/(:segment)', 'Shop::product/$1');


$routes->add('blog',function () {
    return "<h2> this is a blog  </h2>";
});

$routes->group('admin', function ($routes){
    $routes->add('user','Admin\Users::index');
    $routes->add('users','Admin\Users::getAllUsers');
    $routes->add('product/(:any)/(:any)','Admin\Shop::product/$1/$2');


    // blog routes
    $routes->add('blog','Admin\Blog::index');
    $routes->get('blog/new','Admin\Blog::createNew');
    $routes->Post('blog/new','Admin\Blog::saveBlog');





});







   