<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionPlantillasCampos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Tipo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'ID_plantilla' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        // Definición de la clave primaria
        $this->forge->addPrimaryKey('ID');

        $this->forge->addForeignKey('ID_plantilla', 'plantillas', 'ID');

        $this->forge->createTable('plantillas_campos');
    }

    public function down()
    {
        $this->forge->dropTable('plantillas_campos');
    }
}
