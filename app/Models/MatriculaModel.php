<?php

namespace App\Models;

use CodeIgniter\Model;

class MatriculaModel extends Model
{
    protected $table = 'matricula';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    

    protected $allowedFields = [
        'aluno_id',
        'turma_id',
        'data_matricula',
        'status',
        'progresso'
    ];

    

    
}