<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAddressTogeneralSettings  extends Migration
{
    public function up()
    {
        $this->forge->addColumn('general_settings', [
            'address' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'whatsapp', // Adjust position as needed
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('general_settings', 'address');
    }
}
    
