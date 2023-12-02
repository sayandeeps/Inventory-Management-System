<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sales extends Migration
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
            'cname' => [
                'type' => 'TEXT',
            ],
            'caddress' => [
                'type' => 'TEXT',
            ],
            'productid' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'totalsum' => [
                'type' => 'FLOAT',
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => 'true',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('sales');
    }

    public function down()
    {
        $this->forge->dropTable('sales');
    }
}
