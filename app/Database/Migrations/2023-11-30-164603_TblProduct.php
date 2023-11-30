<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pname' => [
                'type' => 'TEXT',
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'price' => [
                'type' => 'FLOAT',
            ],
            'category' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_product');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_product');
    }
}
