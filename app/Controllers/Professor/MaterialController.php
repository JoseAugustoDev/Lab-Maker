<?php

namespace App\Controllers\Professor;

use App\Controllers\BaseController;
use App\Models\MaterialModel;
use App\Models\TurmaModel;

class MaterialController extends BaseController
{
    private MaterialModel $materialModel;
    private TurmaModel $turmaModel;

    public function __construct()
    {
        $this->materialModel = new MaterialModel();
        $this->turmaModel = new TurmaModel();
    }

    public function index()
    {
        $professorId = session()->get('usuario_id');

        $materiais = $this->materialModel
            ->select('
                material.*,
                turma.codigo
            ')
            ->join(
                'turma',
                'turma.id = material.turma_id'
            )
            ->where(
                'material.professor_id',
                $professorId
            )
            ->findAll();

        return view(
            'professor/materiais/listarMaterial',
            [
                'materiais' => $materiais
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
            'professor/materiais/cadastrarMaterial',
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
            'tipo' => $this->request->getPost('tipo'),
            'arquivo_url' => $this->request->getPost('arquivo_url'),
            'data_publicacao' => date('Y-m-d H:i:s')
        ];

        $this->materialModel->insert($dados);

        return redirect()
            ->to('/professor/materiais')
            ->with(
                'sucesso',
                'Material cadastrado.'
            );
    }

    public function edit($id)
    {
        $material = $this->materialModel
            ->find($id);

        if (!$material) {

            return redirect()
                ->to('/professor/materiais');
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
            'professor/materiais/editarMaterial',
            [
                'material' => $material,
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
            'tipo' => $this->request->getPost('tipo'),
            'arquivo_url' => $this->request->getPost('arquivo_url')
        ];

        $this->materialModel->update(
            $id,
            $dados
        );

        return redirect()
            ->to('/professor/materiais');
    }

    public function delete($id)
    {
        $this->materialModel->delete($id);

        return redirect()
            ->to('/professor/materiais');
    }
}