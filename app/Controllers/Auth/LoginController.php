<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuarioModel;

class LoginController extends BaseController
{
    private UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        if (session()->has('usuario_id')) {
            return redirect()->to($this->getRedirectByRole());
        }

        return view('auth/login');
    }

    /**
     * Processa a autenticação
     */
    public function autenticar()
    {
        $email = trim($this->request->getPost('email'));
        $senha = $this->request->getPost('senha');

        if (empty($email) || empty($senha)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('erro', 'Informe email e senha.');
        }

        $usuario = $this->usuarioModel
            ->where('email', $email)
            ->first();

        if (!$usuario) {
            return redirect()
                ->back()
                ->withInput()
                ->with('erro', 'Usuário ou senha inválidos.');
        }

        if (!$usuario['ativo']) {
            return redirect()
                ->back()
                ->withInput()
                ->with('erro', 'Usuário desativado.');
        }

        if (!password_verify($senha, $usuario['senha'])) {
            return redirect()
                ->back()
                ->withInput()
                ->with('erro', 'Usuário ou senha inválidos.');
        }
        
        session()->regenerate();

        session()->set([
            'usuario_id' => $usuario['id'],
            'usuario_nome' => $usuario['nome'],
            'usuario_email' => $usuario['email'],
            'tipo_usuario' => $usuario['tipo_usuario'],
            'isLoggedIn' => true,
        ]);

        return redirect()->to($this->getRedirectByRole());
    }

    /**
     * Realiza logout
     */
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }

    /**
     * Redireciona conforme o perfil
     */
    private function getRedirectByRole(): string
    {
        $tipoUsuario = session()->get('tipo_usuario');

        return match ($tipoUsuario) {
            'ADMIN' => '/admin/dashboard',
            'PROFESSOR' => '/professor/dashboard',
            'ALUNO' => '/aluno/perfil',
            default => '/login',
        };
    }
}
