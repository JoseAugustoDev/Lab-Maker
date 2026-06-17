<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCurso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'area' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'carga_horaria' => [
                'type' => 'INT',
                'null' => true,
            ],
            'nivel' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'data_criacao' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('curso');
    }

    public function down()
    {
        $this->forge->dropTable('curso');
    }
}