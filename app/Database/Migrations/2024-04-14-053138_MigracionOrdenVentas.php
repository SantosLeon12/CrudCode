<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionOrdenVentas extends Migration
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
            'Folio' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Fecha_creacion' => [
                'type' => 'DATE',
            ],
            'Enviado_a_prod' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'ID_sucursal' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'ID_usuario' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'ID_cliente' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        // Definición de la clave primaria
        $this->forge->addPrimaryKey('ID');

        // Definición de las foreing keys
        $this->forge->addForeignKey('ID_sucursal', 'sucursales', 'ID');
        $this->forge->addForeignKey('ID_usuario', 'usuario', 'ID');
        $this->forge->addForeignKey('ID_cliente', 'cliente', 'ID');

        $this->forge->createTable('orden_venta');
    }

    public function down()
    {
        $this->forge->dropTable('orden_venta');
    }
}
