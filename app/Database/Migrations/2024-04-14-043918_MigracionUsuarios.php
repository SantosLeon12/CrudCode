<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionUsuarios extends Migration
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
            'Correo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Usuario' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Password' => [
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

        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
