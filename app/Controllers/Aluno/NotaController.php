<?php

namespace App\Controllers\Aluno;

use App\Controllers\BaseController;
use App\Models\NotaModel;

class NotaController extends BaseController
{
    public function index()
    {
        $alunoId = session()->get('usuario_id');

        if (!$alunoId) {
            return redirect()->to('/login')->with('erro', 'Faça login como aluno.');
        }

        $notaModel = new NotaModel();
        $notas = $notaModel->getNotasDoAluno($alunoId);

        return view('aluno/listarNota', [
            'titulo' => 'Minhas notas',
            'notas'  => $notas,
        ]);
    }
}