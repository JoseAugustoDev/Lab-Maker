<?php

namespace App\Controllers\Professor;

use App\Controllers\BaseController;
use App\Models\AtividadeModel;
use App\Models\MatriculaModel;
use App\Models\NotaModel;

class NotaController extends BaseController
{
    private AtividadeModel $atividadeModel;
    private MatriculaModel $matriculaModel;
    private NotaModel $notaModel;

    public function __construct()
    {
        $this->atividadeModel = new AtividadeModel();
        $this->matriculaModel = new MatriculaModel();
        $this->notaModel = new NotaModel();
    }

    public function index()
    {
        $professorId = session()->get('usuario_id');

        $atividades = $this->atividadeModel
            ->select('atividade.*, turma.codigo')
            ->join(
                'turma',
                'turma.id = atividade.turma_id'
            )
            ->where(
                'atividade.professor_id',
                $professorId
            )
            ->findAll();

        return view(
            'professor/notas/index',
            [
                'atividades' => $atividades
            ]
        );
    }

    public function lancar($atividadeId)
    {
        $atividade = $this->atividadeModel
            ->find($atividadeId);

        if (!$atividade) {

            return redirect()
                ->to('/professor/notas');
        }

        $alunos = $this->matriculaModel
            ->select('
                matricula.*,
                usuario.nome
            ')
            ->join(
                'usuario',
                'usuario.id = matricula.aluno_id'
            )
            ->where(
                'matricula.turma_id',
                $atividade['turma_id']
            )
            ->findAll();

        foreach ($alunos as &$aluno) {

            $nota = $this->notaModel
                ->where(
                    'atividade_id',
                    $atividadeId
                )
                ->where(
                    'aluno_id',
                    $aluno['aluno_id']
                )
                ->first();

            $aluno['nota'] = $nota['valor'] ?? '';
        }

        return view(
            'professor/notas/atribuirNota',
            [
                'atividade' => $atividade,
                'alunos' => $alunos
            ]
        );
    }

    public function salvar($atividadeId)
    {
        $notas = $this->request->getPost('notas');

        foreach ($notas as $alunoId => $valor) {

            $notaExistente = $this->notaModel
                ->where(
                    'atividade_id',
                    $atividadeId
                )
                ->where(
                    'aluno_id',
                    $alunoId
                )
                ->first();

            if ($notaExistente) {

                $this->notaModel->update(
                    $notaExistente['id'],
                    [
                        'valor' => $valor
                    ]
                );

            } else {

                $this->notaModel->insert([
                    'atividade_id' => $atividadeId,
                    'aluno_id' => $alunoId,
                    'valor' => $valor
                ]);
            }
        }

        return redirect()
            ->to('/professor/notas')
            ->with(
                'sucesso',
                'Notas salvas com sucesso.'
            );
    }
}