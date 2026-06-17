<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CursoModel;

class CursoController extends BaseController
{
    private CursoModel $cursoModel;

    public function __construct()
    {
        $this->cursoModel = new CursoModel();
    }

    public function index()
    {
        $cursos = $this->cursoModel->findAll();

        return view('admin/cursos/listarCurso', [
            'cursos' => $cursos
        ]);
    }

    public function create()
    {
        return view('admin/cursos/cadastroCurso');
    }

    public function store()
    {
        $dados = [
            'titulo' => $this->request->getPost('titulo'),
            'descricao' => $this->request->getPost('descricao'),
            'area' => $this->request->getPost('area'),
            'carga_horaria' => $this->request->getPost('carga_horaria'),
            'nivel' => $this->request->getPost('nivel'),
            'data_criacao' => date('Y-m-d H:i:s')
        ];

        $this->cursoModel->insert($dados);

        return redirect()
            ->to('/admin/cursos')
            ->with('sucesso', 'Curso cadastrado com sucesso.');
    }

    public function edit($id)
    {
        $curso = $this->cursoModel->find($id);

        return view('admin/cursos/editarCurso', [
            'curso' => $curso
        ]);
    }

    public function update($id)
    {
        $dados = [
            'titulo' => $this->request->getPost('titulo'),
            'descricao' => $this->request->getPost('descricao'),
            'area' => $this->request->getPost('area'),
            'carga_horaria' => $this->request->getPost('carga_horaria'),
            'nivel' => $this->request->getPost('nivel')
        ];

        $this->cursoModel->update($id, $dados);

        return redirect()
            ->to('/admin/cursos')
            ->with('sucesso', 'Curso atualizado com sucesso.');
    }

    public function delete($id)
    {
        $this->cursoModel->delete($id);

        return redirect()
            ->to('/admin/cursos')
            ->with('sucesso', 'Curso removido com sucesso.');
    }
}