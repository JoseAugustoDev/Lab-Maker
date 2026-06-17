<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTurma extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'curso_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'codigo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'semestre' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'data_inicio' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'data_fim' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'horario' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('curso_id');

        $this->forge->addForeignKey(
            'curso_id',
            'curso',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('turma');
    }

    public function down()
    {
        $this->forge->dropTable('turma');
    }
}