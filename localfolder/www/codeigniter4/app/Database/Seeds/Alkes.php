<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Alkes extends Seeder
{
    public function run()
    {
        $data = [
            'kode_alkes' => 'ALK0001',
            'nama_alkes' => 'Stetoskop',
            'stok_alkes' => 50,
            'keterangan' => 'Stetoskop Panas',
            'status' => 'active',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'created_by' => 1,
            'modified_by' => null,
        ];

        $this->db->table('alkes')->insert($data);
    }
}
