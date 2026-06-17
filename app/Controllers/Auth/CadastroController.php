<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class CadastroController extends BaseController
{
    private UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        return view('auth/cadastro');
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
            'tipo_usuario' => $this->request->getPost('tipo_usuario') ?? 'ALUNO',
            'ativo' => 1,
            'data_cadastro' => date('Y-m-d H:i:s'),
        ];

        if (!$this->usuarioModel->insert($dados)) {

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'erro',
                    'Não foi possível realizar o cadastro.'
                );
        }

        return redirect()
            ->to('/login')
            ->with(
                'sucesso',
                'Cadastro realizado com sucesso.'
            );
    }
}