<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes.php

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');; // Mengarahkan ke controller Home untuk landing page
$routes->get('login', 'Auth::index'); // Mengarahkan ke halaman login
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/register', 'Auth::register');
