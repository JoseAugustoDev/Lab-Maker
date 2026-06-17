<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model
{
    protected $table = 'material';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    

    protected $allowedFields = [
        'turma_id',
        'professor_id',
        'titulo',
        'descricao',
        'tipo',
        'arquivo_url',
        'data_publicacao'
    ];

    

    
}