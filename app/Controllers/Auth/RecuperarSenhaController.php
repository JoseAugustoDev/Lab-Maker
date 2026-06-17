<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class RecuperarSenhaController extends BaseController
{
    private UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        return view('auth/recuperar_senha');
    }

    public function resetarSenha()
    {
        $email = trim(
            $this->request->getPost('email')
        );

        $novaSenha = $this->request->getPost('senha');

        $usuario = $this->usuarioModel
            ->where('email', $email)
            ->first();

        if (!$usuario) {

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'erro',
                    'Usuário não encontrado.'
                );
        }

        $this->usuarioModel->update(
            $usuario['id'],
            [
                'senha' => password_hash(
                    $novaSenha,
                    PASSWORD_DEFAULT
                )
            ]
        );

        return redirect()
            ->to('/login')
            ->with(
                'sucesso',
                'Senha alterada com sucesso.'
            );
    }
}