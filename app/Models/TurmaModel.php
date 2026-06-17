<?php

namespace App\Models;

use CodeIgniter\Model;

class TurmaModel extends Model
{
    protected $table = 'turma';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    

    protected $allowedFields = [
        'curso_id',
        'codigo',
        'semestre',
        'data_inicio',
        'data_fim',
        'horario',
        'status'
    ];

    

    

    public function listarTurmasComCurso() {
        return $this->select('turma.*, curso.titulo')
            ->join('curso', 'curso.id = turma.curso_id')
            ->findAll();
    }
}