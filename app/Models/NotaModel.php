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

     public function getNotasDoAluno(int $alunoId): array
    {
        return $this->select(
                'nota.id,
                 nota.valor,
                 nota.observacao,
                 atividade.titulo      AS atividade_titulo,
                 atividade.descricao        AS atividade_desc,
                 atividade.data_entrega AS data_entrega,
                 atividade.pontuacao_maxima AS pontuacao_max'
            )
            ->join('atividade', 'atividade.id = nota.atividade_id')
            ->where('nota.aluno_id', $alunoId)
            ->orderBy('atividade.data_entrega', 'DESC')
            ->findAll();
    }

    
}