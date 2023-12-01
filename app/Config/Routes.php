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