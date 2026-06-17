<?php

namespace App\Models;

use CodeIgniter\Model;

class MatriculaModel extends Model
{
    protected $table = 'matricula';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'aluno_id',
        'turma_id',
        'data_matricula',
        'status',
        'progresso'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}