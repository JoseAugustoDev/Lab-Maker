<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfessorTurmaModel extends Model
{
    protected $table = 'professor_turma';

    protected $returnType = 'array';

    protected $allowedFields = [
        'professor_id',
        'turma_id'
    ];
}