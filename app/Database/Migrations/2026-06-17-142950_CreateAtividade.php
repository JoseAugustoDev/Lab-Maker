<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAtividade extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'turma_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'professor_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'data_criacao' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'data_entrega' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'pontuacao_maxima' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('turma_id');
        $this->forge->addKey('professor_id');

        $this->forge->addForeignKey(
            'turma_id',
            'turma',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'professor_id',
            'usuario',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('atividade');
    }

    public function down()
    {
        $this->forge->dropTable('atividade');
    }
}