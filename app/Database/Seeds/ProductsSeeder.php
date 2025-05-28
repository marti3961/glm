<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['resistencia' => '100-20-A-28-10-D', 'precio' => 1700.00],
            ['resistencia' => '150-20-A-28-10-D', 'precio' => 1820.00],
            ['resistencia' => '200-20-A-28-10-D', 'precio' => 1940.00],
            ['resistencia' => '250-20-A-28-10-D', 'precio' => 2070.00],
            ['resistencia' => '300-20-A-28-10-D', 'precio' => 2350.00],
            ['resistencia' => '350-20-A-28-10-D', 'precio' => 2530.00],
            ['resistencia' => 'MR35-40-C-28-10-D', 'precio' => 2440.00],
            ['resistencia' => 'MR38-40-C-28-10-D', 'precio' => 2500.00],
            ['resistencia' => 'MR40-40-C-28-10-D', 'precio' => 2580.00],
            ['resistencia' => 'MR42-40-C-28-10-D', 'precio' => 2650.00],
            ['resistencia' => 'MR45-40-C-28-10-D', 'precio' => 2710.00],
            ['resistencia' => 'MR48-40-C-28-10-D', 'precio' => 2810.00],
        ];

        foreach ($products as $product) {
            $this->db->table('products')->insert([
                'unidad' => 'm3',
                'resistencia' => $product['resistencia'],
                'descripcion' => '', // Empty description
                'precio' => $product['precio'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ]);
        }
    }
}