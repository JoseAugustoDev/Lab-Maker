<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfessorTurma extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'professor_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'turma_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey(['professor_id', 'turma_id'], true);

        $this->forge->addForeignKey(
            'professor_id',
            'usuario',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'turma_id',
            'turma',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('professor_turma');
    }

    public function down()
    {
        $this->forge->dropTable('professor_turma');
    }
}