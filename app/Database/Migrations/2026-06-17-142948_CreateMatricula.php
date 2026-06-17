<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMatricula extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'aluno_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'turma_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'data_matricula' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
            'progresso' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey(['aluno_id', 'turma_id']);

        $this->forge->addForeignKey('aluno_id', 'usuario', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('turma_id', 'turma', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('matricula');
    }

    public function down()
    {
        $this->forge->dropTable('matricula');
    }
}