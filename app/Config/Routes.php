<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/addproducts', 'Home::addproduct');
$routes->get('/searchproduct', 'Home::searchproduct');

