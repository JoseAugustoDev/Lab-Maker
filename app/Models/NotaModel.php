<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaModel extends Model
{
    protected $table = 'nota';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    

    protected $allowedFields = [
        'aluno_id',
        'atividade_id',
        'valor',
        'observacao'
    ];

    

    
}