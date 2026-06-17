<?php

namespace App\Models;

use CodeIgniter\Model;

class MensagemModel extends Model
{
    protected $table = 'mensagem';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    

    protected $allowedFields = [
        'remetente_id',
        'destinatario_id',
        'assunto',
        'conteudo',
        'data_envio',
        'lida'
    ];

    

    
}