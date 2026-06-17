<?php

namespace App\Models;

use CodeIgniter\Model;

class CursoModel extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    

    protected $allowedFields = [
        'titulo',
        'descricao',
        'area',
        'carga_horaria',
        'nivel',
        'data_criacao'
    ];

    

    
}