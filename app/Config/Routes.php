<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/addproducts', 'Home::addproduct');
$routes->get('/searchproduct', 'Home::searchproduct');
$routes->post('product/add', 'Home::storeProduct');
$routes->post('update_product/(:num)', 'Home::update_product/$1');
$routes->post('/insearchproduct', 'Home::insearchproduct');
$routes->match(['get', 'post'],'/billing', 'Home::billing');
$routes->post('/cartsearchproduct', 'Home::cartsearchproduct');
$routes->match(['get', 'post'], '/addcartproduct', 'Home::addcartproduct');
$routes->match(['get', 'post'], '/removeitem', 'Home::removeitem');
$routes->match(['get', 'post'], '/additem', 'Home::additem');
$routes->match(['get', 'post'], '/destroy', 'Home::destroy');
$routes->match(['get', 'post'], '/submitcart', 'Home::submitcart');



