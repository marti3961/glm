<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre_usuario' => 'marti',
            'nombre'         => 'Heriberto',
            'apellidos'      => 'Martinez Ramirez',
            'email'          => 'heriberto.mtz.rmz@gmail.com',
            'telefono'       => '7711479778',
            'direccion'      => 'Rio Bravo 28',
            'ciudad'         => 'Actopan',
            'estado'         => 'Hidalgo',
            'zip'            => '42601',
            'password'       => password_hash('Test3r123!', PASSWORD_DEFAULT), // siempre hasheado
            'is_active'      => 1,
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => null
        ];

        $this->db->table('usuarios')->insert($data);
    }
}