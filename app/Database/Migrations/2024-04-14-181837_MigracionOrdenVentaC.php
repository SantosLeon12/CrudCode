<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionOrdenVentaC extends Migration
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
            'Cantidad' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'Unidad' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Observaciones' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Precio_unitario' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'ID_orden_venta' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'ID_articulo' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        // Definición de la clave primaria
        $this->forge->addPrimaryKey('ID');

        $this->forge->addForeignKey('ID_orden_venta', 'orden_venta', 'ID');
        $this->forge->addForeignKey('ID_articulo', 'articulo', 'ID');

        $this->forge->createTable('orden_venta_conceptos');
    }

    public function down()
    {
        $this->forge->dropTable('orden_venta_conceptos');
    }
}
