<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TurmaModel;
use App\Models\CursoModel;
use App\Models\UsuarioModel;
use App\Models\ProfessorTurmaModel;

class TurmaController extends BaseController
{
    private TurmaModel $turmaModel;
    private CursoModel $cursoModel;
    private UsuarioModel $usuarioModel;
    private ProfessorTurmaModel $professorTurmaModel;

    public function __construct()
    {
        $this->turmaModel = new TurmaModel();
        $this->cursoModel = new CursoModel();
        $this->usuarioModel = new UsuarioModel();
        $this->professorTurmaModel = new ProfessorTurmaModel();
    }

    public function index() {
        $turmas = $this->turmaModel
            ->select('turma.*, curso.titulo as curso')
            ->join('curso', 'curso.id = turma.curso_id')
            ->findAll();

        return view('admin/turma/listarTurma', [
            'turmas' => $turmas
        ]);
    }

    public function create() {
        $cursos = $this->cursoModel->findAll();

        $professores = $this->usuarioModel
            ->where('tipo_usuario', 'PROFESSOR')
            ->where('ativo', 1)
            ->findAll();

        return view('admin/turma/cadastroTurma', [
            'cursos' => $cursos,
            'professores' => $professores
        ]);
    }

    public function store() {
        $dados = [
            'curso_id' => $this->request->getPost('curso_id'),
            'codigo' => $this->request->getPost('codigo'),
            'semestre' => $this->request->getPost('semestre'),
            'data_inicio' => $this->request->getPost('data_inicio'),
            'data_fim' => $this->request->getPost('data_fim'),
            'horario' => $this->request->getPost('horario'),
            'status' => $this->request->getPost('status'),
        ];

        $turmaId = $this->turmaModel->insert($dados);

        $professores = $this->request->getPost('professores');

        if ($professores) {

            foreach ($professores as $professorId) {

                $this->professorTurmaModel->insert([
                    'professor_id' => $professorId,
                    'turma_id' => $turmaId
                ]);
            }
        }

        return redirect()
            ->to('/admin/turmas')
            ->with('sucesso', 'Turma criada com sucesso.');
    }

    public function update($id) {
        $dados = [
            'curso_id' => $this->request->getPost('curso_id'),
            'codigo' => $this->request->getPost('codigo'),
            'semestre' => $this->request->getPost('semestre'),
            'data_inicio' => $this->request->getPost('data_inicio'),
            'data_fim' => $this->request->getPost('data_fim'),
            'horario' => $this->request->getPost('horario'),
            'status' => $this->request->getPost('status'),
        ];

        $this->turmaModel->update($id, $dados);

        // Remove vínculos antigos
        $this->professorTurmaModel
            ->where('turma_id', $id)
            ->delete();

        // Insere os novos
        $professores = $this->request->getPost('professores');

        if ($professores) {

            foreach ($professores as $professorId) {

                $this->professorTurmaModel->insert([
                    'professor_id' => $professorId,
                    'turma_id' => $id
                ]);
            }
        }

        return redirect()
            ->to('/admin/turmas')
            ->with('sucesso', 'Turma atualizada com sucesso.');
    }

    public function edit($id) {
        $turma = $this->turmaModel->find($id);

        if (!$turma) {
            return redirect()
                ->to('/admin/turmas')
                ->with('erro', 'Turma não encontrada.');
        }

        $cursos = $this->cursoModel->findAll();

        $professores = $this->usuarioModel
            ->where('tipo_usuario', 'PROFESSOR')
            ->where('ativo', 1)
            ->findAll();

        $professoresSelecionados = $this->professorTurmaModel
            ->where('turma_id', $id)
            ->findColumn('professor_id');

        return view('admin/turma/editarTurma', [
            'turma' => $turma,
            'cursos' => $cursos,
            'professores' => $professores,
            'professoresSelecionados' => $professoresSelecionados
        ]);
    }

}