<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'UserController::login');
$routes->get('/dashboard/talent', 'Home::index');
$routes->get('/dashboard/recluiter', 'Home::indexRecluiter');
$routes->get('/user', 'UserController::index');
$routes->get('/login', 'UserController::login');
$routes->get('/logout', 'UserController::logout');
$routes->post('/sigin', 'UserController::sigin');
$routes->get('/vacancies', 'VacancyController::index');
$routes->get('/vacancies/create', 'VacancyController::create');
$routes->post('/vacancies/store', 'VacancyController::store');
$routes->post('/register', 'UserController::store');
$routes->get('user/(:num)/edit', [[UserController::class, 'edit'], '$1']);
$routes->post('user/(:num)/update', [[UserController::class, 'update'], '$1']);
