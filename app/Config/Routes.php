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
// jadwal
$routes->get('jadwal', 'jadwal::index');
$routes->get('jadwal/tambah', 'jadwal::tambah');
$routes->post('jadwal/simpan', 'jadwal::simpan');
$routes->post('jadwal/delete/(:num)', 'jadwal::delete/$1');
$routes->get('jadwal/edit/(:num)', 'jadwal::edit/$1');
// auth
$routes->get('auth/login', 'Home::login');
$routes->get('auth/register', 'Home::register');
// lowongan
$routes->get('lowongan', 'Home::lowongan');
$routes->get('lowongan/detail/(:num)', 'lowongans::findbyid/$1');
$routes->get('lowongan/search', 'lowongans::search');
$routes->get('lowongan/tambah', 'lowongans::tambah', ['filter' => 'role:admin']);
$routes->get('lowongan/edit/(:num)', 'lowongans::edit/$1', ['filter' => 'role:admin']);
$routes->post('lowongan/update/(:num)', 'lowongans::update/$1', ['filter' => 'role:admin']);
$routes->post('lowongan/delete/(:num)', 'lowongans::delete/$1', ['filter' => 'role:admin']);
$routes->post('lowongan/simpan', 'lowongans::simpan');
// users
$routes->get('users', 'admin::users');
$routes->get('users_profile/(:num)', 'home::users/$1');
