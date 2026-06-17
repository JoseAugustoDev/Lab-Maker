<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/login','Auth\LoginController::index');
$routes->post('/login','Auth\LoginController::autenticar');
$routes->get('/logout','Auth\LoginController::logout');
$routes->get('/aluno/perfil','Aluno\DashboardController::index');
$routes->get('/cadastro', 'Auth\CadastroController::index');
$routes->post('/cadastro', 'Auth\CadastroController::store');
$routes->get('/admin/dashboard','Admin\DashboardController::index');

$routes->group('admin', function ($routes) {

    $routes->get('professores', 'Admin\ProfessorController::index');

    $routes->get('professores/create', 'Admin\ProfessorController::create');

    $routes->post('professores/store', 'Admin\ProfessorController::store');

    $routes->get('professores/edit/(:num)', 'Admin\ProfessorController::edit/$1');

    $routes->post('professores/update/(:num)', 'Admin\ProfessorController::update/$1');

    $routes->get('professores/delete/(:num)', 'Admin\ProfessorController::delete/$1');

    $routes->get('cursos', 'Admin\CursoController::index');
    $routes->get('cursos/create', 'Admin\CursoController::create');
    $routes->post('cursos/store', 'Admin\CursoController::store');

    $routes->get('cursos/edit/(:num)', 'Admin\CursoController::edit/$1');
    $routes->post('cursos/update/(:num)', 'Admin\CursoController::update/$1');

    $routes->get('cursos/delete/(:num)', 'Admin\CursoController::delete/$1');
});