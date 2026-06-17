<?php

namespace App\Controllers\Professor;

use App\Controllers\BaseController;
use App\Models\TurmaModel;

class TurmaController extends BaseController
{
    private TurmaModel $turmaModel;

    public function __construct()
    {
        $this->turmaModel = new TurmaModel();
    }

    public function index()
    {
        $professorId = session()->get('usuario_id');

        $turmas = $this->turmaModel
            ->select('
                turma.*,
                curso.titulo as curso
            ')
            ->join(
                'professor_turma',
                'professor_turma.turma_id = turma.id'
            )
            ->join(
                'curso',
                'curso.id = turma.curso_id'
            )
            ->where(
                'professor_turma.professor_id',
                $professorId
            )
            ->findAll();

        return view(
            'professor/turmas/index',
            [
                'turmas' => $turmas
            ]
        );
    }

    public function show($id)
    {
        $professorId = session()->get('usuario_id');

        $turma = $this->turmaModel
            ->select('
                turma.*,
                curso.titulo as curso
            ')
            ->join(
                'curso',
                'curso.id = turma.curso_id'
            )
            ->find($id);

        if (!$turma) {
            return redirect()
                ->to('/professor/turmas')
                ->with(
                    'erro',
                    'Turma não encontrada.'
                );
        }

        $vinculado = $this->db
            ->table('professor_turma')
            ->where('professor_id', $professorId)
            ->where('turma_id', $id)
            ->countAllResults();

        if (!$vinculado) {
            return redirect()
                ->to('/professor/turmas')
                ->with(
                    'erro',
                    'Acesso não autorizado.'
                );
        }

        return view(
            'professor/turmas/show',
            [
                'turma' => $turma
            ]
        );
    }
}