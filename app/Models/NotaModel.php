<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaModel extends Model
{
    protected $table = 'nota';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'aluno_id',
        'atividade_id',
        'valor',
        'observacao'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}