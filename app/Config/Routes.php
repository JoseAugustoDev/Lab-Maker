<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/login','Auth\LoginController::index');
$routes->post('/login','Auth\LoginController::autenticar');
$routes->get('/logout','Auth\LoginController::logout');
$routes->get('/aluno/perfil','Aluno\DashboardController::index');