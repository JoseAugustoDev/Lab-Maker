<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'nome',
        'email',
        'senha',
        'telefone',
        'data_cadastro',
        'tipo_usuario',
        'ativo'
    ];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function buscarPorEmail(string $email) {
        return $this->where('email', $email)->first();
    }
}