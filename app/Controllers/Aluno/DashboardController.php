<?php

namespace App\Controllers\Aluno;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        return view("aluno/perfil");
    }
}
