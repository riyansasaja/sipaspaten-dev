<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth');
$routes->get('logout', 'Auth::logout');
$routes->post('login', 'Auth::login');
$routes->get('user', 'User');
$routes->get('user/view', 'User::view');
$routes->get('user/add', 'User::addData');
$routes->post('user/add', 'User::addData');
$routes->get('profile', 'Profile');
$routes->put('profile/editpassword', 'Profile::editPassword');
$routes->put('profile/editprofile', 'Profile::editProfile');
$routes->get('file/(:num)', 'User::Download/$1');

$routes->get('file/(:num)/(:num)/delete', 'Files::delPenetapan/$1/$2');
$routes->get('downloads/penetapan/(:num)', 'Files::getPenetapan/$1');
$routes->get('downloads/ba/(:num)', 'Files::getBeritaAcara/$1');


//bhp
$routes->get('bhp', 'Bhp');
$routes->get('bhp/add/(:any)', 'Bhp::addData/$1');
$routes->put('bhp/bhputusan', 'Bhp::bhPutusan');
$routes->get('bhp/view', 'Bhp::viewAllPa');
