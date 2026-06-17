<?php

namespace App\Models;

use CodeIgniter\Model;

class MensagemModel extends Model
{
    protected $table = 'mensagem';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'remetente_id',
        'destinatario_id',
        'assunto',
        'conteudo',
        'data_envio',
        'lida'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}