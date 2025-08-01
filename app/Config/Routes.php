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
$routes->get('jadwal/search', 'jadwal::search');
$routes->post('jadwal/simpan', 'jadwal::simpan');
$routes->post('jadwal/delete/(:num)', 'jadwal::delete/$1');
$routes->get('jadwal/edit/(:num)', 'jadwal::edit/$1');
$routes->post('jadwal/update/(:num)', 'jadwal::update/$1');
// auth
$routes->get('auth/login', 'Home::login');
$routes->get('auth/register', 'Home::register');
// lowongan
$routes->get('lowongan', 'Home::lowongan');
$routes->get('lowongan/detail/(:num)', 'lowongans::findbyid/$1');
$routes->get('lowongan/search', 'lowongans::search');
$routes->get('lowongan/tambah', 'lowongans::tambah', ['filter' => 'role:admin, Super']);
$routes->get('lowongan/edit/(:num)', 'lowongans::edit/$1', ['filter' => 'role:admin, Super']);
$routes->post('lowongan/update/(:num)', 'lowongans::update/$1', ['filter' => 'role:admin, Super']);
$routes->post('lowongan/delete/(:num)', 'lowongans::delete/$1', ['filter' => 'role:admin,Super']);
$routes->post('lowongan/simpan', 'lowongans::simpan', ['filter' => 'role:admin, Super']);

$routes->get('pelatihan/regular', 'pelatihan::reguler', [''=> '']);
$routes->get('pelatihan/regular/tambah', 'pelatihan::tambah', [''=> '']);
$routes->post('pelatihan/regular/add', 'pelatihan::add', [''=> '']);
$routes->post('pelatihan/regular/delete/(:num)', 'pelatihan::delete/$1', [''=> '']);
$routes->get('pelatihan/regular/edit/(:num)', 'pelatihan::edit/$1', [''=> '']);
// users
$routes->get('users', 'admin::users', ['filter' => 'role:Super']);
$routes->post('users/update/(:num)', 'home::saveUser/$1' , ['filter' => 'role:users, Super, admin']);
$routes->get('users_profile/(:num)', 'home::users/$1', ['filter' => 'role:users, Super, admin'] );
$routes->get('users_profile/edit/(:num)', 'admin::edit/$1', ['filter' => 'role:users, Super, admin']);

// admin
$routes->post('admin/change/(:num)','admin::change/$1', ['filter'=>'role:admin, Super']);
$routes->get('users/search','admin::search', ['filter' => 'role:admin, Super']);
