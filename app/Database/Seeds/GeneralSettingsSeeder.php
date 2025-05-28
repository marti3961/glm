<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GeneralSettingsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'site_name'         => 'My Awesome Website',
            'site_email'        => 'admin@example.com',
            'site_phone'        => '+1234567890',
            'site_logo'         => '/uploads/logo.png',
            'main_description'  => 'Welcome to the most awesome site on the web.',
            'main_keywords'     => 'awesome, website, blog, codeigniter',
            'whatsapp'          => 'https://wa.me/1234567890',
            'facebook'          => 'https://facebook.com/mywebsite',
            'instagram'         => 'https://instagram.com/mywebsite',
            'x'                 => 'https://x.com/mywebsite',
            'pinterest'         => 'https://pinterest.com/mywebsite',
            'linkedin'          => 'https://linkedin.com/company/mywebsite',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        ];

        // Insert into the database
        $this->db->table('general_settings')->insert($data);
    }
}
