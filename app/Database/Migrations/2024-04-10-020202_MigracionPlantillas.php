<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionPlantillas extends Migration
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
            'Nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Campos' => [
                'type'       => 'TEXT', // Tipo de dato TEXT para almacenar arreglos serializados
                'null'       => true, // Permitir valores nulos si es necesario
            ],
        ]);
        $this->forge->addKey('ID', true);
        $this->forge->createTable('plantillas');
    }

    public function down()
    {
        $this->forge->dropTable('plantillas');
    }
}
