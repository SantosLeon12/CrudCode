<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionClientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Razon_social' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Rfc' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Contacto' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'Direccion' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('ID', true);
        $this->forge->createTable('cliente');
    }

    public function down()
    {
        $this->forge->dropTable('cliente');
    }
}
