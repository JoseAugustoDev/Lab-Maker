<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AlunoFilter implements FilterInterface
{
    public function before(
        RequestInterface $request,
        $arguments = null
    )
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if (
            session()->get('tipo_usuario')
            !== 'ALUNO'
        ) {

            return redirect()
                ->to('/login')
                ->with(
                    'erro',
                    'Acesso negado.'
                );
        }
    }

    public function after(
        RequestInterface $request,
        ResponseInterface $response,
        $arguments = null
    ) {
    }
}