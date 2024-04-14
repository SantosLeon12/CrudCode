<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionArticulos extends Migration
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
            'Codigo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Unidad' => [
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

        // Definición de la relación con la tabla "sucursales"
        $this->forge->addForeignKey('ID_plantilla', 'plantillas', 'ID');

        $this->forge->createTable('articulo');
    }

    public function down()
    {
        $this->forge->dropTable('articulo');
    }
}
