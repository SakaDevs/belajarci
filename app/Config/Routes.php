<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('contact', 'Home::contact');
$routes->get('about', 'Home::about');
$routes->get('profile', 'Home::profile');
$routes->get('lowongan', 'Home::lowongan');
$routes->get('lowongan-detail/(:num)', 'lowongans::findbyid/$1');

