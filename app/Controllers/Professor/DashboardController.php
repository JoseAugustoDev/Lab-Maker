<?php

namespace App\Controllers\Professor;

use App\Controllers\BaseController;
use App\Models\ProfessorTurmaModel;
use App\Models\AtividadeModel;
use App\Models\MaterialModel;

class DashboardController extends BaseController
{
    private ProfessorTurmaModel $professorTurmaModel;
    private AtividadeModel $atividadeModel;
    private MaterialModel $materialModel;

    public function __construct()
    {
        $this->professorTurmaModel = new ProfessorTurmaModel();
        $this->atividadeModel = new AtividadeModel();
        $this->materialModel = new MaterialModel();
    }

    public function index()
    {
        $professorId = session()->get('usuario_id');

        $quantidadeTurmas = $this->professorTurmaModel
            ->where('professor_id', $professorId)
            ->countAllResults();

        $quantidadeAtividades = $this->atividadeModel
            ->where('professor_id', $professorId)
            ->countAllResults();

        $quantidadeMateriais = $this->materialModel
            ->where('professor_id', $professorId)
            ->countAllResults();

        return view('/professor/dashboard', [
            'quantidadeTurmas' => $quantidadeTurmas,
            'quantidadeAtividades' => $quantidadeAtividades,
            'quantidadeMateriais' => $quantidadeMateriais
        ]);
    }
}