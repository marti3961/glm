<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsExtrasSeeder extends Seeder
{
    public function run()
    {
        $products_extra = [
            ['nombre' => 'IMPERMEABILIZANTE INTEGRAL DESPUES 5m³', 'precio' => 350.00],
            ['nombre' => 'Aplicación de Fibra por m³', 'precio' => 280.00],
            ['nombre' => 'RESISTENCIA RÁPIDA A 1 DÍA', 'precio' => 620.00],
            ['nombre' => 'RESISTENCIA RÁPIDA A 3 DÍA', 'precio' => 520.00],
            ['nombre' => 'RESISTENCIA RÁPIDA A 7 DÍA', 'precio' => 420.00],
            ['nombre' => 'RESISTENCIA RÁPIDA A 14 DÍA', 'precio' => 320.00],
        ];

        foreach ($products_extra as $product) {
            $this->db->table('products_extras')->insert([
                'unidad' => 'm3',
                'nombre' => $product['nombre'],
                'descripcion' => '', // Empty description
                'precio' => $product['precio'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ]);
        }
    }
}