<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class ProfessorController extends BaseController
{
    private UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        $professores = $this->usuarioModel
            ->where('tipo_usuario', 'PROFESSOR')
            ->findAll();

        return view('admin/professor/listarProfessor', [
            'professores' => $professores
        ]);
    }

    public function create()
    {
        return view('admin/professor/cadastroProfessor');
    }

    public function store()
    {
        $dados = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'senha' => password_hash(
                $this->request->getPost('senha'),
                PASSWORD_DEFAULT
            ),
            'tipo_usuario' => 'PROFESSOR',
            'ativo' => 1,
            'data_cadastro' => date('Y-m-d H:i:s')
        ];

        $this->usuarioModel->insert($dados);

        return redirect()
            ->to('/admin/professores')
            ->with(
                'sucesso',
                'Professor cadastrado com sucesso.'
            );
    }

    public function edit($id){
        $professor = $this->usuarioModel->find($id);

        if (!$professor || $professor['tipo_usuario'] !== 'PROFESSOR') {
            return redirect()
                ->to('/admin/professores')
                ->with('erro', 'Professor não encontrado.');
        }

        return view('admin/professor/editarProfessor', [
            'professor' => $professor
        ]);
    }

    public function update($id) {
        $professor = $this->usuarioModel->find($id);

        if (!$professor || $professor['tipo_usuario'] !== 'PROFESSOR') {
            return redirect()
                ->to('/admin/professores')
                ->with('erro', 'Professor não encontrado.');
        }

        $dados = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'ativo' => $this->request->getPost('ativo')
        ];

        if (!empty($this->request->getPost('senha'))) {
            $dados['senha'] = password_hash(
                $this->request->getPost('senha'),
                PASSWORD_DEFAULT
            );
        }

        $this->usuarioModel->update($id, $dados);

        return redirect()
            ->to('/admin/professores')
            ->with('sucesso', 'Professor atualizado com sucesso.');
    }

    public function delete($id) {
        $this->usuarioModel->delete($id);

        return redirect()
            ->to('/admin/professores')
            ->with('sucesso', 'Professor removido com sucesso.');
    }
}