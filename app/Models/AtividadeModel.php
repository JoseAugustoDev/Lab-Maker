<?php

namespace App\Models;

use CodeIgniter\Model;

class AtividadeModel extends Model
{
    protected $table = 'atividade';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'turma_id',
        'professor_id',
        'titulo',
        'descricao',
        'data_criacao',
        'data_entrega',
        'pontuacao_maxima'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}