<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'aluno_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'atividade_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'valor' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null'       => true,
            ],
            'observacao' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('aluno_id');
        $this->forge->addKey('atividade_id');

        $this->forge->addForeignKey(
            'aluno_id',
            'usuario',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'atividade_id',
            'atividade',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('nota');
    }

    public function down()
    {
        $this->forge->dropTable('nota');
    }
}