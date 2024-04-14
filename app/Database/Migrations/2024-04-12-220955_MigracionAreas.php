<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionAreas extends Migration
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
            'ID_sucursal' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        // Definición de la clave primaria
        $this->forge->addPrimaryKey('ID');

        // Definición de la relación con la tabla "sucursales"
        $this->forge->addForeignKey('ID_sucursal', 'sucursales', 'ID');

        $this->forge->createTable('areas');
    }

    public function down()
    {
        $this->forge->dropTable('areas');
    }
}
