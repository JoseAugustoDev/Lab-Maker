<?php

namespace App\Controllers\Aluno;

use App\Controllers\BaseController;
use App\Models\MatriculaModel;

class TurmaController extends BaseController
{
    public function index()
    {
        $alunoId = session()->get('usuario_id');

        if (!$alunoId) {
            return redirect()->to('/login')->with('erro', 'Faça login como aluno.');
        }

        $matriculaModel = new MatriculaModel();

        $turmas = $matriculaModel
            ->select(
                'turma.id,
                 turma.codigo,
                 turma.semestre,
                 turma.status,
                 turma.horario,
                 turma.data_inicio,
                 turma.data_fim,
                 curso.titulo   AS curso,
                 curso.area     AS curso_area,
                 matricula.status    AS status_matricula,
                 matricula.progresso AS progresso'
            )
            ->join('turma', 'turma.id = matricula.turma_id')
            ->join('curso', 'curso.id = turma.curso_id')
            ->where('matricula.aluno_id', $alunoId)
            ->where('matricula.status', 'ativa')
            ->orderBy('turma.data_inicio', 'DESC')
            ->findAll();


        return view('aluno/listarTurma', [
            'titulo' => 'Minhas turmas',
            'turmas' => $turmas,
        ]);
    }
}