<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alkes extends Migration
{
    public function up()
    {
        $forge = \Config\Database::forge();
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_alkes'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
                'unique' => true,
            ],
            'nama_alkes' => [
                'type' => 'varchar',
                'constraint' => 250,
                'null' => true,
            ],
            'stok_alkes' => [
                'type' => 'decimal',
                'constraint' => 15,
                'unsigned'  => true,
                'null' => false,
                'default' => 1,
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active','unactive'],
                'default' => 'active'
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_by' => [
                'type' => 'integer',
                'constraint'  => 5,
                'unsigned'  => true,
                'null' => true,
            ],
            'modified_by' => [
                'type' => 'integer',
                'constraint' => 5,
                'unsigned'  => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('alkes', false, $attributes);
    }

    public function down()
    {
        $this->forge->dropTable('alkes', false, true);
    }
}
