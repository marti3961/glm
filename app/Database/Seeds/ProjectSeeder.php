<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('your_table_name')->insert([
            'imagen' => "image_1.jpg",'texto_1' => "Sample text 1 for record 1",
            'texto_2' => "Sample text 2 for record 1",'data_groups' => json_encode(['group' => 1]),
            'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),'deleted_at' => null,
        ]);
    }
}
