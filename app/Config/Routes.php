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
$routes->get('jadwal', 'jadwal::index');
$routes->get('auth/login', 'Home::login');
$routes->get('auth/register', 'Home::register');
$routes->get('lowongan/detail/(:num)', 'lowongans::findbyid/$1');
$routes->get('lowongan/search', 'lowongans::search');
$routes->get('lowongan/tambah', 'lowongans::tambah', ['filter' => 'role:admin']);
$routes->get('lowongan/edit/(:num)', 'lowongans::edit/$1', ['filter' => 'role:admin']);
$routes->post('lowongan/update/(:num)', 'lowongans::update/$1', ['filter' => 'role:admin']);
$routes->post('lowongan/delete/(:num)', 'lowongans::delete/$1', ['filter' => 'role:admin']);
$routes->post('lowongan/simpan', 'lowongans::simpan');

