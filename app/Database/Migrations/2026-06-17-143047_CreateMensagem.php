<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMensagem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'remetente_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'destinatario_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'assunto' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
            ],
            'conteudo' => [
                'type' => 'TEXT',
            ],
            'data_envio' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'lida' => [
                'type' => 'BOOLEAN',
                'default' => false,
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
        $this->forge->addKey('remetente_id');
        $this->forge->addKey('destinatario_id');

        $this->forge->addForeignKey(
            'remetente_id',
            'usuario',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'destinatario_id',
            'usuario',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('mensagem');
    }

    public function down()
    {
        $this->forge->dropTable('mensagem');
    }
}