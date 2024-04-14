<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionSucursales extends Migration
{
    public function up()
    {
        // Definición de la tabla "sucursales"
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
            'Direccion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ID_empresa' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        // Definición de la clave primaria
        $this->forge->addPrimaryKey('ID');

        // Definición de la relación con la tabla "empresas"
        $this->forge->addForeignKey('ID_empresa', 'empresas', 'ID');

        // Crear la tabla "sucursales"
        $this->forge->createTable('sucursales');
    }

    public function down()
    {
        // Eliminar la tabla "sucursales" si existe
        $this->forge->dropTable('sucursales');
    }
}
