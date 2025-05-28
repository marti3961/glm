<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCotizacionJSON extends Migration
{
    public function up()
    {
        $this->forge->addColumn('cotizaciones', [
            'cotizacion_json' => [
                'type' => 'LONGTEXT',
                'null' => true, // or false if it should be required
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('cotizaciones', 'cotizacion_json');
    }
}
