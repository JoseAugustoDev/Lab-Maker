<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';

    protected $returnType = 'array';


    protected $allowedFields = [
        'nome',
        'email',
        'senha',
        'telefone',
        'data_cadastro',
        'tipo_usuario',
        'ativo'
    ];


    public function buscarPorEmail(string $email) {
        return $this->where('email', $email)->first();
    }
}