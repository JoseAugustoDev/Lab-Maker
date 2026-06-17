<?php

namespace App\Controllers\Professor;

use App\Controllers\BaseController;
use App\Models\AtividadeModel;

class AtividadeController extends BaseController
{
    private AtividadeModel $atividadeModel;

    public function __construct()
    {
        $this->atividadeModel = new AtividadeModel();
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
            'professor/atividades/listarAtividades',
            [
                'atividades' => $atividades
            ]
        );
    }

    public function create()
    {
        $professorId = session()->get('usuario_id');

        $turmas = $this->db
            ->table('professor_turma')
            ->select('turma.*')
            ->join(
                'turma',
                'turma.id = professor_turma.turma_id'
            )
            ->where(
                'professor_turma.professor_id',
                $professorId
            )
            ->get()
            ->getResultArray();

        return view(
            'professor/atividades/cadastrarAtividades',
            [
                'turmas' => $turmas
            ]
        );
    }

    public function store()
    {
        $dados = [
            'turma_id' => $this->request->getPost('turma_id'),
            'professor_id' => session()->get('usuario_id'),
            'titulo' => $this->request->getPost('titulo'),
            'descricao' => $this->request->getPost('descricao'),
            'data_criacao' => date('Y-m-d H:i:s'),
            'data_entrega' => $this->request->getPost('data_entrega'),
            'pontuacao_maxima' => $this->request->getPost('pontuacao_maxima'),
        ];

        $this->atividadeModel->insert($dados);

        return redirect()
            ->to('/professor/atividades')
            ->with(
                'sucesso',
                'Atividade criada com sucesso.'
            );
    }

    public function edit($id)
    {
        $atividade = $this->atividadeModel
            ->find($id);

        if (!$atividade) {

            return redirect()
                ->to('/professor/atividades');
        }

        $professorId = session()->get('usuario_id');

        $turmas = $this->db
            ->table('professor_turma')
            ->select('turma.*')
            ->join(
                'turma',
                'turma.id = professor_turma.turma_id'
            )
            ->where(
                'professor_turma.professor_id',
                $professorId
            )
            ->get()
            ->getResultArray();

        return view(
            'professor/atividades/editarAtividades',
            [
                'atividade' => $atividade,
                'turmas' => $turmas
            ]
        );
    }

    public function update($id)
    {
        $dados = [
            'turma_id' => $this->request->getPost('turma_id'),
            'titulo' => $this->request->getPost('titulo'),
            'descricao' => $this->request->getPost('descricao'),
            'data_entrega' => $this->request->getPost('data_entrega'),
            'pontuacao_maxima' => $this->request->getPost('pontuacao_maxima'),
        ];

        $this->atividadeModel->update(
            $id,
            $dados
        );

        return redirect()
            ->to('/professor/atividades')
            ->with(
                'sucesso',
                'Atividade atualizada.'
            );
    }

    public function delete($id)
    {
        $this->atividadeModel->delete($id);

        return redirect()
            ->to('/professor/atividades')
            ->with(
                'sucesso',
                'Atividade removida.'
            );
    }
}