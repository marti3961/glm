<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBombaPrices extends Migration
{
    public function up()
    {
        $this->forge->addColumn('general_settings', [
            'bombeo_1_10' => [
            'type' => 'FLOAT',
            'null' => true,
            ],
            'bombeo_1mc' => [
            'type' => 'FLOAT',
            'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('general_settings', ['bombeo_1_10', 'bombeo_1mc']);
    }
}
