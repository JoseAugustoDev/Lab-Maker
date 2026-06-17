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
$routes->get('/recuperar-senha', 'Auth\RecuperarSenhaController::index');
$routes->post('/recuperar-senha', 'Auth\RecuperarSenhaController::resetarSenha');

$routes->group('admin', ['filter' => 'admin'], function ($routes) {

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

    $routes->get('turmas', 'Admin\TurmaController::index');
    $routes->get('turmas/create', 'Admin\TurmaController::create');
    $routes->post('turmas/store', 'Admin\TurmaController::store');
    $routes->get('turmas/edit/(:num)', 'Admin\TurmaController::edit/$1');
    $routes->post('turmas/update/(:num)', 'Admin\TurmaController::update/$1');
    $routes->get('turmas/delete/(:num)', 'Admin\TurmaController::delete/$1');
});

$routes->group('professor', ['filter' => 'professor'], function ($routes) {

    $routes->get('dashboard','Professor\DashboardController::index');

    $routes->get('turmas','Professor\TurmaController::index');
    $routes->get('turmas/(:num)','Professor\TurmaController::show/$1');

    $routes->get('materiais','Professor\MaterialController::index');
    $routes->get('materiais/create','Professor\MaterialController::create');
    $routes->post('materiais/store','Professor\MaterialController::store');
    $routes->get('materiais/edit/(:num)','Professor\MaterialController::edit/$1');
    $routes->post('materiais/update/(:num)','Professor\MaterialController::update/$1');
    $routes->get('materiais/delete/(:num)','Professor\MaterialController::delete/$1');

    $routes->get('atividades','Professor\AtividadeController::index');
    $routes->get('atividades/create','Professor\AtividadeController::create');
    $routes->post('atividades/store','Professor\AtividadeController::store');
    $routes->get('atividades/edit/(:num)','Professor\AtividadeController::edit/$1');
    $routes->post('atividades/update/(:num)','Professor\AtividadeController::update/$1');
    $routes->get('atividades/delete/(:num)','Professor\AtividadeController::delete/$1');

    $routes->get('notas','Professor\NotaController::index');
    $routes->get('notas/lancar/(:num)','Professor\NotaController::lancar/$1');
    $routes->post('notas/salvar/(:num)','Professor\NotaController::salvar/$1');
    $routes->get('mensagens','Professor\MensagemController::index');
    $routes->get('mensagens/create','Professor\MensagemController::create');
    $routes->post('mensagens/store','Professor\MensagemController::store');
});

$routes->group(
    'aluno',
    ['filter' => 'aluno'],
    function ($routes) {

        $routes->get('perfil','Aluno\PerfilController::index');
        $routes->get('turmas','Aluno\TurmaController::index');
        $routes->get('notas', 'Aluno\NotaController::index');

    }
);